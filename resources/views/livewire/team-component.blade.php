<div>
    <div class="container">
        <style>
            @media (min-width: 576px) {
                .modal-dialog {
                    max-width: 900px;
                }
            }
        </style>
        <div class="row">
            <div class="col-md-10 grid-margin stretch-card mx-auto">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample">
                            <div class="form-group">
                                <label for="Name" style="font-weight: bold">Name</label>
                                <input type="text" wire:model.defer="name" class="form-control"
                                    placeholder="Name"style="color: black">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label style="font-weight: bold">National Or Team</label>
                                <select class="form-control" wire:model='national_or_team'
                                    style="border: 1px solid black">
                                    <option>Select tournament type</option>
                                    @foreach (get_enum_values('teams', 'national_or_team') as $leauge)
                                        <option value="{{ $leauge }}"> {{ $leauge }} </option>
                                    @endforeach
                                </select>
                                @error('national_or_team')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="Logo" class="text-black" style="font-weight: bold">Logo</label>
                                <input type="file" wire:model.defer="logo" class="form-control"
                                    placeholder="Image URL"style="border: 1px solid black">
                                @error('logo')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <x-select2 id="championship_id" multiple wire:model.defer='championship_id'
                                    title="Leauge">
                                    @foreach (\App\Models\Championship::all() as $leauge)
                                        <option value="{{ $leauge->id }}">{{ $leauge->name }}</option>
                                    @endforeach
                                </x-select2>
                                @error('championship_id')
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
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <fieldset style="border: 1px solid gray;border-radius: 5px;padding: 10px">
                            <legend>Search</legend>
                            <div class="row">
                                <div class="col-6">
                                    <select class="form-control" wire:model='leaugeSearch'
                                        style="border: 1px solid black">
                                        @foreach (App\Models\TeamHasLeauge::select('championship_id')->distinct()->get() as $leauge)
                                            <option value="{{ $leauge->championship_id }}">
                                                {{ App\Models\Championship::find($leauge->championship_id)->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </fieldset>
                    </div>
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
                                                    src='{{ env('APP_URL') . 'storage/' . $team->logo }}'>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            @if ($team->leauges)
                                                @foreach ($team->leauges as $leauge)
                                                    <p class="text-black" style="font-size: 0.875rem;font-weight: 400">
                                                        {{ $leauge->name }}</p>
                                                @endforeach
                                            @endif
                                        </td>
                                        <td class="text-center"><a class='btn btn-success btn-sm text-light'
                                                title='edit {{ $team->name }}'
                                                wire:click='edit({{ $team->id }})' role='button'>Edit</a>
                                            <a class='btn btn-danger btn-sm text-light'
                                                title='delete {{ $team->name }}'
                                                wire:click='delete({{ $team->id }})' role='button'>X</a>

                                            <!-- Button trigger modal -->
                                            {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#staticBackdrop_{{ $team->id }}">
                                                xxx
                                            </button> --}}
                                            <!-- Modal -->
                                            <div class="modal fade" id="staticBackdrop_{{ $team->id }}" wire:ignore.self
                                                data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal
                                                                title</h1>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <select id="select_{{ $team->id }}"
                                                                wire:model="selectLeague" class="form-control"
                                                                style="border: 1px solid black">
                                                                <option value="">Select League</option>
                                                                @foreach ($team->leauges()->where('type', 'league')->get() as $leauge)
                                                                    <option value="{{ $leauge->id }}">
                                                                        {{ $leauge->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                            @if ($selectLeague)
                                                            <div class="row mt-2">
                                                                <div class="col-3">
                                                                    <label class="text-center">played</label>
                                                                    <input class="form-control" type="number" wire:model.defer="played">
                                                                </div>
                                                                <div class="col-3">
                                                                    <label class="text-center">won</label>
                                                                    <input class="form-control" type="number" wire:model.defer="won">
                                                                </div>
                                                                <div class="col-3">
                                                                    <label class="text-center">drawn</label>
                                                                    <input class="form-control" type="number" wire:model.defer="drawn">
                                                                </div>
                                                                <div class="col-3">
                                                                    <label class="text-center">lost</label>
                                                                    <input class="form-control" type="number" wire:model.defer="lost">
                                                                </div>
                                                                <div class="col-3">
                                                                    <label class="text-center">gf</label>
                                                                    <input class="form-control" type="number" wire:model.defer="gf">
                                                                </div>
                                                                <div class="col-3">
                                                                    <label class="text-center">ga</label>
                                                                    <input class="form-control" type="number" wire:model.defer="ga">
                                                                </div>
                                                                <div class="col-3">
                                                                    <label class="text-center">gd</label>
                                                                    <input class="form-control" type="number" wire:model.defer="gd">
                                                                </div>
                                                                <div class="col-3">
                                                                    <label class="text-center">points</label>
                                                                    <input class="form-control" type="number" wire:model.defer="points">
                                                                </div>
                                                            </div>
                                                            @endif
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="button" wire:click="savePoints({{$team->id}})"
                                                                class="btn btn-primary">Understood</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <td colspan="4" class="text-danger text-center"> There is no Teams yet</td>
                                @endforelse
                            </tbody>
                        </table>
                        {{ $teams->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
