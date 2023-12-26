<div>
    <div class="container">
        <div class="row">
            <div class="col-md-10 grid-margin stretch-card mx-auto mt-2">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-black">Leauge Name</h4>
                        <div class="form-group row">
                            <div class="col">
                                <div>
                                    <label style="font-weight: bold">Name</label>
                                    <div id="the-basics">
                                        <input class="typeahead" wire:model.defer="name" type="text"
                                            placeholder="Name" style="color: black">
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group mt-2">
                                    <label style="font-weight: bold">tournament type</label>
                                    <select class="form-control" wire:model='tournament_type'
                                        style="border: 1px solid black">
                                        <option>Select tournament type</option>
                                        @foreach (get_enum_values('championships', 'tournament_type') as $leauge)
                                            <option value="{{ $leauge }}"> {{ $leauge }} </option>
                                        @endforeach
                                    </select>
                                    @error('tournament_type')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="Image" class="text-black" style="font-weight: bold">Image</label>
                                    <input type="file" wire:model.defer="image" class="form-control"
                                        placeholder="Image URL" style="border: 1px solid black">
                                    @error('image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    @if ($tournament_type == 'local')
                                        <label for="exampleSelectGender">Leauge Type </label>
                                        <select class="form-control" wire:model.defer='type' id="exampleSelectGender"
                                            style="border: 1px solid black">
                                            <option value="">select</option>
                                            @foreach (get_enum_values('championships', 'type') as $leauge)
                                                <option value="{{ $leauge }}"> {{ $leauge }} </option>
                                            @endforeach
                                        </select>
                                        @error('type')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    @endif
                                </div>
                                {{-- <div class="form-group mt-2">
                                    <label for="exampleSelectGender">Season</label>
                                    <select class="form-control" wire:model.defer='season_id' id="exampleSelectGender"
                                        style="border: 1px solid black">
                                        <option value="">select</option>
                                        @foreach (\App\Models\Season::orderBy('id', 'desc')->get() as $season)
                                            <option value="{{ $season->id }}">{{ $season->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('season_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div> --}}
                                <div class="form-group mt-2">
                                    <x-select2 id="country_id" wire:model.defer='country_id' title="country">
                                        <option value="">select</option>
                                        @foreach (\App\Models\Country::all() as $country)
                                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                                        @endforeach
                                    </x-select2>
                                    @error('country_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="pt-3 float-left">
                                <a type="button" wire:click='save' class="btn btn-primary mr-2">Save</a>
                            </div>
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
                                        <select class="form-control" wire:model='tournament_typeSearch'
                                            style="border: 1px solid black">
                                            <option>tournament type</option>
                                            @foreach (get_enum_values('championships', 'tournament_type') as $leauge)
                                                <option value="{{ $leauge }}"> {{ $leauge }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <select class="form-control" wire:model='typeSearch'
                                            id="exampleSelectGender" style="border: 1px solid black">
                                            @foreach (get_enum_values('championships', 'type') as $leauge)
                                                <option value="{{ $leauge }}"> {{ $leauge }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered table-contextual table-hover">
                                <thead>
                                    <tr class="text-center">
                                        <th> # </th>
                                        <th> Leauge Name </th>
                                        <th> Leauge Logo </th>
                                        <th> Tournament Type </th>
                                        <th> Leauge Type </th>
                                        <th> Leauge Country </th>
                                        <th> &nbsp; </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($championships as $key => $leauge)
                                        <tr class="text-center">
                                            <th>{{ $loop->iteration }}</th>
                                            <td> {{ $leauge->name }} </td>
                                            <td>
                                                @if ($leauge->logo)
                                                    <img style="width: 100px;height: 80px;border-radius: 0px"
                                                        src='{{ env('APP_URL') . 'storage/' . $leauge->logo }}'>
                                                @endif
                                            </td>
                                            <td> {{ $leauge->tournament_type ?? '' }} </td>
                                            <td> {{ $leauge->type ?? '' }} </td>
                                            <td> {{ $leauge->country ? $leauge->country->name : null }} </td>
                                            <td class="text-center"><a class='btn btn-success btn-sm text-light'
                                                    title='edit {{ $leauge->name }}'
                                                    wire:click='edit({{ $leauge->id }})' role='button'>Edit</a>
                                                <a class='btn btn-danger btn-sm text-light'
                                                    title='delete {{ $leauge->name }}'
                                                    wire:click='delete({{ $leauge->id }})' role='button'>X</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $championships->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
