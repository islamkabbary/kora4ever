<div>
    <div class="card-body">
        {{-- <x-select2 wire:model.defer='title' id="title" name="title">
            <option value="5">islam</option>
        </x-select2> --}}
        <section class="forms-sample">
            {{-- Title --}}
            <div class="form-group">
                <label for="Title" class="text-white">Title</label>
                <input type="text" wire:model="title" class="form-control" placeholder="Title">
                @error('title')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            {{-- Body --}}
            <div class="form-group">
                {{-- <x-label_editor_textarea>
                    <x-slot name="name">body</x-slot>
                    <x-slot name="type">text</x-slot>
                    <x-slot name="wire_option">defer</x-slot>
                    <x-slot name="title">body</x-slot>
                </x-label_editor_textarea> --}}
                <label for="body" class="text-white">body</label>
                <textarea type="text" wire:model="body" class="form-control" placeholder="Body" rows="20"></textarea>
                @error('body')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            {{-- Image --}}
            <div class="form-group">
                <label for="Image" class="text-white">Image</label>
                <input type="file" wire:model.defer="image" class="form-control" placeholder="Image URL">
                @error('image')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            {{-- Video --}}
            <div class="form-group">
                <label for="Title" class="text-white">Video URL</label>
                <input type="text" wire:model="video_url" class="form-control" placeholder="Video URL">
                @error('video_url')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group mt-2">
                <x-select2 wire:model.defer='tag_id' id="tag_id" name="tag_id" title="tag" multiple>
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
                <x-select2 wire:model.defer='leauge_id' id="leauge_id" name="leauge_id" title="leauge">
                    <option>Select Leauge</option>
                    @foreach (\App\Models\Leauge::all() as $leauge)
                        <option value="{{ $leauge->id }}"> {{ $leauge->name }} </option>
                    @endforeach
                </x-select2>
                @error('leauge_id')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            {{-- Leauge --}}
            {{-- Team --}}
            <div class="form-group mt-2">
                <x-select2 wire:model.defer='team_id' id="team_id" name="team_id" title="team">
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
            <div class="form-group">
                <a type="button" wire:click="add" class="btn btn-primary mb-4"> Save </a>
            </div>
        </section>
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
                    @foreach (\App\Models\News::all() as $post)
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $post->title }}</td>
                            <td>
                                @if ($post->photos !== null)
                                    @foreach ($post->photos as $photo)
                                        <img width="50" src='{{ $photo->path ? $photo->path : '#' }}'
                                            class="img-fluid">
                                    @endforeach
                                @endif
                            </td>
                            <td><a class='btn btn-success btn-sm text-light' title='edit{{ $post->name }}'
                                    wire:click='edit({{ $post->id }})' role='button'>Edit</a>
                            </td>
                            <td><a class='btn btn-danger btn-sm text-light' title='delete {{ $post->name }}'
                                    wire:click='delete({{ $post->id }})' role='button'>X</a></td>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
