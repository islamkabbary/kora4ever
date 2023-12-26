<div>
    <div class="container">
        <div class="row">
            <div class="col-md-1 grid-margin stretch-card">
            </div>
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">match Matches</h4>
                        {{-- <form class="forms-sample" method="POST"> --}}
                            {{-- Leauge --}}
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
                            {{-- Team 1 --}}
                            <div class="form-group">
                                <label for="Team 1">Team 1</label>
                                <select class="form-control" wire:model.defer='team1'>
                                    <option>Select Team 1</option>
                                    @if ($teams)
                                    @foreach ($teams as $team)
                                        <option value="{{ $team->id }}"> {{ $team->name }} </option>
                                    @endforeach
                                    @endif
                                </select>
                                @error('team1')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            {{-- Result Team 1 --}}
                            <div class="form-group">
                                <label>Result Team 1</label>
                                <input type="text" class="form-control" wire:model='result_team1'
                                    placeholder="result_team1">
                                @error('result_team1')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            {{-- Team 2 --}}
                            <div class="form-group">
                                <label for="Team 1">Team 2</label>
                                <select class="form-control" wire:model='team2'>
                                    @if ($teams)
                                    @foreach ($teams as $team)
                                        <option value="{{ $team->id }}"> {{ $team->name }} </option>
                                    @endforeach
                                    @endif
                                </select>
                                @error('team2')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            {{-- Result Team 2 --}}
                            <div class="form-group">
                                <label>Result Team 2</label>
                                <input type="text" class="form-control" wire:model='result_team2'
                                    placeholder="result_team2">
                                @error('result_team2')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            {{-- Channel --}}
                            <div class="form-group">
                                <label for="exampleSelectGender">Channel</label>
                                <select class="form-control" wire:model='channel_id' id="exampleSelectGender">
                                    <option>Select Leauge </option>
                                    @foreach (\App\Models\Channel::all() as $channel)
                                        <option value="{{ $channel->id }}"> {{ $channel->name }} </option>
                                    @endforeach
                                </select>
                                @error('channel_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            {{-- commentator --}}
                            <div class="form-group">
                                <label for="exampleSelectGender">{{ __('messages.Commentator') }}</label>
                                <select class="form-control" wire:model='commentator_id'>
                                    <option>Select Commentator</option>
                                    @foreach (\App\Models\Commentator::all() as $commentator)
                                        <option value="{{ $commentator->id }}"> {{ $commentator->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('commentator_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            {{-- Status --}}
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" wire:model='status'>
                                    <option value="{{ 'fisrt half' }}"> {{ 'fisrt half' }} </option>
                                    <option value="{{ 'end fisrt half' }}"> {{ 'end fisrt half' }} </option>
                                    <option value="{{ 'secound half' }}"> {{ 'secound half' }} </option>
                                    <option value="{{ 'extra time 1' }}"> {{ 'extra time 1' }} </option>
                                    <option value="{{ 'extra time 2' }}"> {{ 'extra time 2' }} </option>
                                    <option value="{{ 'start soon' }}"> {{ 'start soon' }} </option>
                                    <option value="{{ 'end' }}"> {{ 'end' }} </option>
                                </select>
                                @error('status')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            {{-- Match URL --}}
                            {{-- <div class="form-group">
                                <label for="exampleInputName1">Match URL</label>
                                <input type="text" class="form-control" wire:model='match_url'
                                    placeholder="Match URL">
                                @error('match_url')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div> --}}
                            @if ($match_url)
                                {{-- URL type --}}
                                <div class="form-group">
                                    <label for="exampleSelectGender">URL Type</label>
                                    <select class="form-control" wire:model='url_type' id="exampleSelectGender">
                                        <option>Select Leauge </option>
                                        <option value="youtube"> Youtube </option>
                                        <option value="iframe"> iFrame </option>
                                        <option value="link"> Full Link </option>
                                    </select>
                                    @error('url_type')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            @else
                            @endif
                            {{-- Time --}}
                            <div class="form-group">
                                <label for="exampleInputName1">Time</label>
                                <input type="time" class="form-control" wire:model='time' id="exampleInputName1">
                                @error('time')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            {{-- Date --}}
                            <div class="form-group">
                                <label for="exampleInputName1">Date</label>
                                <input type="date" class="form-control" wire:model='date' id="exampleInputName1">
                                @error('date')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <a type="button" wire:click='save' class="btn btn-primary mr-2">Submit</a>
                        {{-- </form> --}}
                    </div>
                </div>
            </div>
            <div class="col-md-1 grid-margin stretch-card">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center">Leauge Name</h4>
                        </p>
                        <div class="table-responsive">
                            <table class="table table-bordered table-contextual table-hover">
                                <thead>
                                    <tr class="text-center">
                                        <th> # </th>
                                        <th> Team 1 Name </th>
                                        <th> Result Team One </th>
                                        <th> Team 2 Name </th>
                                        <th> Result Team Two </th>
                                        <th> Leauge </th>
                                        <th> Date </th>
                                        <th> Time </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach (\App\Models\Matche::all() as $match)
                                        <tr class="text-center">
                                            <td> {{ $loop->iteration }} </td>
                                            <td> {{ $match->teamOne->name }} </td>
                                            <td> {{ $match->result_team1 }} </td>
                                            <td> {{ $match->teamTwo->name }} </td>
                                            <td> {{ $match->result_team2 }} </td>
                                            <td> {{ $match->leauge->name }} </td>
                                            <td> {{ $match->date }} </td>
                                            <td> {{ $match->time }} </td>
                                            <td><a class='btn btn-success btn-sm text-light'
                                                    title='edit {{ $match->name }}'
                                                    wire:click='edit({{ $match->id }})' role='button'>Edit</a>
                                            </td>
                                            <td><a class='btn btn-danger btn-sm text-light'
                                                    title='delete {{ $match->name }}'
                                                    wire:click='delete({{ $match->id }})' role='button'>X</a>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
