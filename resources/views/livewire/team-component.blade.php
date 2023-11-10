<div>
    @dump(123)
    <div class="container">
        <div class="row">
            <div class="col-md-10 grid-margin stretch-card mx-auto">
                <div class="card">
                    <div class="card-body" style="background: gray">
                        <form class="forms-sample">
                            <div class="form-group">
                                <label for="Name">Name</label>
                                <input type="text" wire:model="name" class="form-control" placeholder="Name">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="Logo" class="text-white">Logo</label>
                                <input type="file" wire:model.defer="logo" class="form-control"
                                    placeholder="Image URL">
                                @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            {{-- League --}}
                            <!-- Multiple -->
                            {{-- <div class="col-md-12 mb-1">
                                <label class="form-label" for="select2-multiple">League</label>
                                <select class="select2 form-select" wire:model="league">
                                    <optgroup label="Select League For News">
                                        @foreach (\App\Models\Leauge::all() as $Leag)
                                            <option value="{{ $Leag->id }}">{{ $Leag->name }}</option>
                                        @endforeach
                                    </optgroup>
                                </select>
                                @error('Leag')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div> --}}

                            <div class="form-group mt-2">
                                <x-select2 id="leauge_id" multiple wire:model='leauge_id' title="Leauge">
                                    @foreach (\App\Models\Leauge::all() as $leauge)
                                        <option value="{{ $leauge->id }}">{{ $leauge->name }}</option>
                                    @endforeach
                                </x-select2>
                                @error('tag_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>


                            <!-- main-panel ends -->
                            <a type="button" wire:click="save" class="btn btn-primary mt-4"> Save </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <h4 class="card-title text-white">All Teams Table</h4>
        <div class="table-responsive">
            <table class="table table-bordered table-contextual table-hover">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Logo</th>
                        <th class="text-center">Leauges</th>
                        <th></th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($teams as $team)
                        <tr>
                            <th class="text-center">{{ $loop->iteration }}</th>
                            <td class="text-center">{{ $team->name }}</td>
                            <td class="text-center">
                                @if ($team->logo)
                                    <img style="width: 100px;height: 80px;border-radius: 0px"
                                        src='{{ env('APP_URL') . '/storage/' . $team->logo }}'>
                                @endif
                            </td>
                            <td class="text-center">
                                @if ($team->leauges)
                                @foreach ($team->leauges as $leauge)
                                <p class="text-black" style="font-size: 0.875rem;font-weight: 400">{{ $leauge->name }}</p>
                                @endforeach
                                @endif
                            </td>
                            <td class="text-center"><a class='btn btn-success btn-sm text-light' title='edit {{ $team->name }}'
                                    wire:click='edit({{ $team->id }})' role='button'>Edit</a>
                                    <a class='btn btn-danger btn-sm text-light' title='delete {{ $team->name }}'
                                        wire:click='delete({{ $team->id }})' role='button'>X</a>
                            </td>
                        </tr>
                    @empty
                        <td colspan="4" class="text-danger text-center"> There is no Teams yet</td>
                    @endforelse
                </tbody>
            </table>
            {{-- {{ $teams->links() }} --}}
        </div>
    </div>
</div>
