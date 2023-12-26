<div>
    <div class="card-body">
        <form class="forms-sample">
            {{-- League --}}
            <div class="form-group">
                <label for="exampleSelectGender">Leauge</label>
                <select class="form-control" wire:model='championship_id' id="exampleSelectGender">
                    <option>Select Leauge</option>
                    @foreach (\App\Models\Championship::all() as $leauge)
                        <option value="{{ $leauge->id }}"> {{ $leauge->name }} </option>
                    @endforeach
                </select>
                @error('championship_id')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            {{-- Team  --}}
            <div class="form-group">
                <label for="Team 1">Team</label>
                <select class="form-control" wire:model='team_id'>
                    <option>team</option>
                    @foreach (\App\Models\Team::whereHas('leauges', function ($q) use ($championship_id) {
                        $q->where('championship_id', $championship_id);
                    })->get()
                    as $teams)
                        <option value="{{ $teams->id }}"> {{ $teams->name }} </option>
                    @endforeach
                </select>
                @error('team2')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            @if ($team_id)
                {{-- Team played --}}
                <div class="col-sm-12 mb-2">
                    <label for="Name"> Team Played </label>
                    <input type="text" class="form-control" wire:model="played" placeholder="{{ \App\Models\TeamHasLeauge::where('team_id',$this->team_id)->where('championship_id' , $this->championship_id)->pluck('played')->first()}}">
                    @error('played') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                {{-- Team Won --}}
                <div class="col-sm-12 mb-2">
                    <label for="Name">Team Won</label>
                    <input type="text" wire:model="won" class="form-control"  placeholder="{{ \App\Models\TeamHasLeauge::where('team_id',$this->team_id)->where('championship_id' , $this->championship_id)->pluck('won')->first()}}">
                    @error('won') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                {{-- Team Drawn --}}
                <div class="col-sm-12 mb-2">
                    <label for="Name">Team Drawn</label>
                    <input type="number" wire:model="drawn" class="form-control"  placeholder="{{ \App\Models\TeamHasLeauge::where('team_id',$this->team_id)->where('championship_id' , $this->championship_id)->pluck('drawn')->first()}}">
                    @error('drawn') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                {{-- Team Lost --}}
                <div class="col-sm-12 mb-2">
                    <label for="Name">Team Lost</label>
                    <input type="number" wire:model="lost" class="form-control"  placeholder="{{ \App\Models\TeamHasLeauge::where('team_id',$this->team_id)->where('championship_id' , $this->championship_id)->pluck('lost')->first()}}">
                    @error('lost') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                {{-- Team Gf --}}
                <div class="col-sm-12 mb-2">
                    <label for="Name">Team Gf</label>
                    <input type="number" wire:model="gf" class="form-control"  placeholder="{{ \App\Models\TeamHasLeauge::where('team_id',$this->team_id)->where('championship_id' , $this->championship_id)->pluck('gf')->first()}}">
                    @error('gf') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                {{-- Team Ga --}}
                <div class="col-sm-12 mb-2">
                    <label for="Name">Team Ga</label>
                    <input type="number" wire:model="ga" class="form-control"  placeholder="{{ \App\Models\TeamHasLeauge::where('team_id',$this->team_id)->where('championship_id' , $this->championship_id)->pluck('ga')->first()}}">
                    @error('ga') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            @endif
        <!-- main-panel ends -->
            <a type="button" wire:click="save" class="btn btn-primary mb-4"> Save </a>
        </form>
    </div>
    <div class="card-body">
        <h4 class="card-title">All Teams Table</h4>
        <ul class="navbar-nav w-100">
            <li class="nav-item w-100">
              <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                <input type="text" class="form-control" wire:model='' placeholder="Search products">
              </form>
            </li>
          </ul>
        <div class="table-responsive">
            <table class="table table-bordered table-contextual table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Team Name</th>
                        <th scope="col">Leauge </th>
                        <th scope="col">Played </th>
                        <th scope="col">Won </th>
                        <th scope="col">Lost </th>
                        <th scope="col">Drawn </th>
                        <th scope="col">Gf </th>
                        <th scope="col">Ga </th>
                        <th scope="col">Gd </th>
                        <th scope="col">Points </th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($teams as $team )
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ \App\Models\Team::find($team->team_id)->name }}</td>
                            <td>{{ \App\Models\Championship::find($team->championship_id)->name }}</td>
                            <td>{{ $team->played }}</td>
                            <td>{{ $team->won }}</td>
                            <td>{{ $team->lost }}</td>
                            <td>{{ $team->drawn }}</td>
                            <td>{{ $team->gf }}</td>
                            <td>{{ $team->ga }}</td>
                            <td>{{ $team->gd }}</td>
                            <td>{{ $team->points }}</td>
                            <td><a class='btn btn-success btn-sm text-light'
                                title='Edit {{ \App\Models\Team::find($team->team_id)->name}}'
                                wire:click='edit({{ $team->team_id }})' role='button'>Edit</a></td>
                        </tr>
                        @empty
                            <td colspan="5" class="text-danger text-center"> There is no Teams yet</td>
                    @endforelse
                </tbody>
            </table>
            {{ \App\Models\TeamHasLeauge::paginate(10)->links() }}
        </div>
    </div>
</div>
