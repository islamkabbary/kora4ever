<script src="https://cdn.tailwindcss.com"></script>
<label class="block text-sm">
    <label class="block mb-[6.5px] ml-1 font-bold text-slate-700 dark:text-white/80 text-xs">
        <p class="text-slate-700 font-bold dark:text-white/80" @if (app()->getLocale() == 'ar') dir="rtl" @endif>
            {{ $title ?? '' }}</p>
        {{ $slot ?? '' }}
    </label>

    <div class="w-full p-2 bg-gray-100 border border-gray-300 border-dashed rounded dark:bg-slate-850"
        x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true"
        x-on:livewire-upload-finish="isUploading = false" x-on:livewire-upload-error="isUploading = false"
        x-on:livewire-upload-progress="progress = $event.detail.progress">
        <div x-show="!isUploading">
            {{-- Form File picker --}}
            <input @if (!$multiple && count($photos) >= 1) disabled @endif type="file" class="hidden"
                accept="{{ $fileTypes ?? '' }}" {{ $multiple ? 'multiple' : '' }}
                @if ($defer ?? true) wire:model.defer='{{ $name ?? '' }}'
            @else
            wire:model='{{ $name ?? '' }}' @endif />
            @if (!empty($photos) && $photos != null)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 dark:bg-slate-850 dark:text-white">
                    @foreach ($photos as $key => $photo)
                        {{-- there is image found --}}
                        @if ($photo != null)
                            <div class="flex items-center space-x-4 dark:bg-slate-850">
                                @if ($image && substr($photo->getMimeType(), 0, 6) == 'image/')
                                    <img src="{{ $photo->temporaryUrl() ?? '' }}" class="w-20 h-20">
                                @else
                                    <img alt="gallery" class="w-20 h-20"
                                        src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7a/Circle-icons-document.svg/1024px-Circle-icons-document.svg.png">
                                @endif
                                <div class="font-light text-gray-500">
                                    @php
                                        $filePath = pathinfo($photo->getRealPath());
                                        $fileSize = number_format(filesize($filePath['dirname'] . '/' . $filePath['basename']) * 0.000001, 2);
                                    @endphp
                                    @if (count(array_keys($filePath, 'extension')))
                                        <p>Type: {{ Str::upper('' . $filePath['extension'] . '') }}</p>
                                    @endif
                                    <p>Size: {{ $fileSize }} MB</p>
                                    <button wire:key="remove-photo-{{ rand(10, 3004) }}" type="button"
                                        wire:click="removePhoto({{ $key }})"
                                        class="px-2 mt-2 text-xs text-red-400 border border-red-400 rounded">
                                        {{ __('Remove') }}
                                    </button>
                                </div>
                            </div>
                        @else
                            Null content
                        @endif
                    @endforeach
                </div>
            @elseif ($preview)
                <div class="flex items-center space-x-4 dark:bg-slate-850">
                    <img src="{{ $preview }}" class="w-20 h-20">
                    <div class="font-light text-gray-500 dark:bg-slate-850">
                        <div
                            class="px-2 mt-2 text-xs border rounded text-primary-400 border-primary-400 dark:bg-slate-850">
                            {{ __('Change') }}
                        </div>
                    </div>
                </div>
            @else
                {{-- empty state --}}
            @endif
        </div>
        {{-- during upload --}}
        <!-- Progress Bar -->
        <div class="relative pt-1" x-show="isUploading">
            <div class="flex mb-2 items-center justify-between">
                <div>
                    <span
                        class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-green-600 bg-green-200">
                        Upload in progress
                    </span>
                </div>
                <div class="text-right">
                    <span x-text="progress" class="text-md font-semibold inline-block text-green-600"></span>
                </div>
            </div>
            <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-green-200">
                <progress max="100" x-bind:value="progress"
                    class="w-full h-2 overflow-hidden bg-red-500 rounded" style="text-align: center"></progress>
            </div>
        </div>
    </div>
    @error($name ?? '')
        <span class="mt-1 text-xs text-red-700">{{ $message }}</span>
    @enderror
</label>
