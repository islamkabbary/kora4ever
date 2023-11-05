@props(['placeholder' => 'Select Options', 'id', 'title'])
<div>
    @if (isset($title))
        <label for="{{ $id }}"
            class="text-white mb-[10px] ml-1 font-bold">{{ $title }}</label>
    @endif
    <div wire:ignore id="parent_{{ $id }}">
        <select {{ $attributes }} id="{{ $id }}" class="{{ $classSelect ?? '' }} dark:text-white w-full"
            data-placeholder="{{ $placeholder ?? '' }}" style="width: 99%;">
            <option value="{{ $value ?? '' }}"></option>
            {{ $slot }}
        </select>
    </div>
</div>
@once
    <link href="{{ asset('assets/css/select2-bootstrap4.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <link href="{{ asset('assets/css/select2.css') }}" rel="stylesheet" />
    <script src="{{ asset('assets/js/select2.js') }}" defer></script>
    <!-- Select2 -->
    <style>
        .select2-search,
        .select2-container--bootstrap4 .select2-selection,
        .select2-search input,
        .select2-results {
            background-color: rgb(249 250 251);
        }

        .dark .select2-search,
        .dark .select2-container--bootstrap4 .select2-selection,
        .dark .select2-search input,
        .dark .select2-results {
            background-color: rgb(17 28 68);
            color: #ffffff;
        }

        .dark .select2-container--bootstrap4 .select2-selection--single .select2-selection__rendered {
            color: #fff;
        }

        .select2-selection--single {
            @error("$id")
                border: 2px solid #F6A3A3 !important;
            @enderror
        }

        .dark .select2-selection__placeholder {
            color: #ffffff !important;
        }

        .dark .select2-selection__arrow b {
            background-color: #111C44 !important;
            color: #ffffff !important;
        }

        .select2-selection__arrow b {
            border-color: var(--primary-color) transparent transparent transparent !important;
            width: 8px !important;
        }

        .lang_ar .select2-container--bootstrap4 .select2-selection--single .select2-selection__arrow {
            right: initial;
            left: 3px;
        }

        .lang_ar .select2-container--bootstrap4::after {
            left: 150px !important;
        }

        .select2-results {
            overflow-y: scroll;
            max-height: 270px;
        }

        .select2-container--bootstrap4 .select2-selection--single .select2-selection__arrow b {
            border-width: 9px 4px 0 !important;
        }

        .select2-selection__arrow b {
            width: 9px !important;
        }
    </style>
@endonce

<script>
    $(function() {
        $('#{{ $id }}').select2({
            theme: 'bootstrap4',
            containerCssClass: "bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 " +
                "focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 " +
                "dark:text-white",
        }).on('select2:closing', function() {
            @this.set('{{ $id }}', $(this).val());
            // Livewire.emit('select2_changed', '{{ $id }}');
        });

        $('.btn-click').click(function() {

            var s = $('.select2-hidden-accessible');
            for (i = 0; i < s.length; i++) {
                @this.set(s.eq(i).attr('id'), s.eq(i).val(), true);
            }
        });
    })

    // Call This Event In Livewire component (class) By $this->dispatchBrowserEvent('reset');
    window.addEventListener('reset', event => {
        $("#{{ $id }}").select2("val", " ");
    })
    window.addEventListener('get_model_name', event => {
        $('#{{ $id }}').select2({
            theme: 'bootstrap4',
        }).val(event.detail.model)
    });
</script>
