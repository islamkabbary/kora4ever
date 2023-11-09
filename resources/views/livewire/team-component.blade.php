<div>
    <div class="container">
        <div class="row">
            <div class="col-md-10 grid-margin stretch-card mx-auto">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample">
                            <div class="form-group">
                                <label for="Name">Name</label>
                                <input type="text" wire:model="name" class="form-control" placeholder="Name">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="Logo">Logo URL</label>
                                <input type="text" wire:model="logo" class="form-control">
                                @error('logo')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            {{-- League --}}
                            <!-- Multiple -->
                            <div class="col-md-12 mb-1">
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
                            </div>
                            <!-- main-panel ends -->
                            <a type="button" wire:click="save" class="btn btn-primary mb-4"> Save </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <h4 class="card-title">All Teams Table</h4>
        <div class="table-responsive">
            <table class="table table-bordered table-contextual table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Logo</th>
                        <th></th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($teams as $team )
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $team->name }}</td>
                            <td>
                                @if ($team->logo)
                                    <img style="width: 100px;height: 80px;border-radius: 0px"
                                        src='{{ env('APP_URL') . '/storage/' . $team->logo }}'>
                                @endif
                            </td>
                            <td><a class='btn btn-success btn-sm text-light' title='edit {{ $team->name }}'
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
