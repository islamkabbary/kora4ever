<div>
    <style>
        input[type="checkbox"] {
            width: 20px;
            /* Set the desired width */
            height: 20px;
            /* Set the desired height */
        }
    </style>
    <div class="container">
        @if($errors->any())
        {{ implode('', $errors->all('<div>:message</div>')) }}
    @endif
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card mx-auto">
                <div class="card mt-4">
                    <div class="card-body">
                        <section class="forms-sample">
                            {{-- Title --}}
                            <div class="form-group">
                                <label for="Title" class="text-black">Title</label>
                                <input type="text" wire:model="title" class="form-control" placeholder="Title">
                                @error('title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            {{-- Body --}}
                            <div class="form-group">
                                <x-label_editor_textarea>
                                    <x-slot name="name">body</x-slot>
                                    <x-slot name="type">text</x-slot>
                                    <x-slot name="wire_option">defer</x-slot>
                                    <x-slot name="title">body</x-slot>
                                </x-label_editor_textarea>
                                {{-- <label for="body" class="text-black">body</label> --}}
                                {{-- <textarea type="text" wire:model="body" class="form-control" placeholder="Body" rows="20"></textarea> --}}
                                @error('body')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            {{-- Image --}}
                            <div class="form-group">
                                <label for="Image" class="text-black">Image</label>
                                <input type="file" wire:model.defer="image" class="form-control"
                                    placeholder="Image URL">
                                @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            {{-- Video --}}
                            <div class="form-group">
                                <label for="Title" class="text-black">Video URL</label>
                                <input type="text" wire:model="video_url" class="form-control"
                                    placeholder="Video URL">
                                @error('video_url')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group mt-2">
                                <x-select2 id="tag_id" multiple wire:model='tag_id' title="tag">
                                    @foreach (\App\Models\Tag::all() as $tag)
                                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                    @endforeach
                                </x-select2>
                                @error('tag_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            {{-- Tag --}}
                            {{-- Leauge --}}
                            <div class="form-group mt-2">
                                <x-select2 wire:model='championship_id' id="championship_id" title="leauge">
                                    <option>Select Leauge</option>
                                    @foreach (\App\Models\Championship::all() as $leauge)
                                        <option value="{{ $leauge->id }}"> {{ $leauge->name }} </option>
                                    @endforeach
                                </x-select2>
                                @error('championship_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            {{-- Leauge --}}
                            {{-- Team --}}
                            <div class="form-group mt-2">
                                <x-select2 wire:model='team_id' id="team_id" title="team">
                                    <option>Select Leauge</option>
                                    @foreach (\App\Models\Team::all() as $team)
                                        <option value="{{ $team->id }}"> {{ $team->name }} </option>
                                    @endforeach
                                </x-select2>
                                @error('team_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            {{-- Team --}}
                            <div class="form-group mt-2"
                                style="display: grid;grid-template-columns: repeat(12, minmax(0, 1fr));">
                                {{-- @if (!App\Models\News::where('show_as_main_news', 1)->first()) --}}
                                    <div style="grid-column: span 4 / span 4;">
                                        <input type="checkbox" wire:model="show_as_main_news">
                                        <label for="show_as_main_news" class="text-black p-1">show as main news</label>
                                    </div>
                                {{-- @endif --}}
                                {{-- @if (App\Models\News::where('show_in_most_read', 1)->count() <= 5) --}}
                                    <div style="grid-column: span 4 / span 4;">
                                        <input type="checkbox" wire:model="show_in_most_read">
                                        <label for="show_in_most_read" class="text-black p-1">show in most read</label>
                                    </div>
                                {{-- @endif --}}
                                {{-- @if (App\Models\News::where('show_from_the_five_main_news', 1)->count() < 5) --}}
                                    <div style="grid-column: span 4 / span 4;">
                                        <input type="checkbox" wire:model="show_from_the_five_main_news">
                                        <label for="show_from_the_five_main_news" class="text-black p-1">show from the
                                            five main news</label>
                                    </div>
                                {{-- @endif --}}
                            </div>
                            <div class="form-group">
                                <a type="button" onclick="save_editor()" id="saveEditor" class="btn btn-primary mb-4">
                                    Save </a>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <h4 class="card-title text-white">All News</h4>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">title</th>
                        <th scope="col">image</th>
                        <th scope="col" colspan="2">&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach (\App\Models\News::all() as $news)
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $news->title }}</td>
                            <td>
                                @if ($news->media !== null)
                                    @foreach ($news->media as $photo)
                                        <img width="50" src="{{ env('APP_URL') . 'storage/' . $photo->url }}"
                                            class="img-fluid">
                                    @endforeach
                                @endif
                            </td>
                            <td><a class='btn btn-success btn-sm text-light' title='edit{{ $news->name }}'
                                    wire:click='edit({{ $news->id }})' role='button'>Edit</a>
                            </td>
                            <td><a class='btn btn-danger btn-sm text-light' title='delete {{ $news->name }}'
                                    wire:click='delete({{ $news->id }})' role='button'>X</a></td>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script>
        window.addEventListener('setBody', event => {
            if (tinyMCE.activeEditor) {
                var ed = tinymce.get('body');
                ed.setContent(event.detail.body);
            }
        })
    </script>
</div>
