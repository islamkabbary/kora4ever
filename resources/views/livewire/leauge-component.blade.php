<div>
    <div class="container">
        <div class="row">
            <div class="col-md-10 grid-margin stretch-card mx-auto">
                <div class="card">
                    <div class="card-body" style="background: gray">
                        <h4 class="card-title text-black">Leauge Name</h4>
                        <div class="form-group row">
                            <div class="col">
                                <label>Name</label>
                                <div id="the-basics">
                                    <input class="typeahead" wire:model.defer="name" type="text" placeholder="Name">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                {{-- Image --}}
                                <div class="form-group">
                                    <label for="Image" class="text-white">Image</label>
                                    <input type="file" wire:model.defer="image" class="form-control"
                                        placeholder="Image URL">
                                    @error('image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                {{-- Type --}}
                                <div class="form-group">
                                    <label for="exampleSelectGender">Leauge Type </label>
                                    <select class="form-control" wire:model='type' id="exampleSelectGender">
                                        <option>Select Leauge Type</option>
                                        <option value="league"> League </option>
                                        <option value="cup"> Cup </option>
                                        <option value="supercup"> SuperCup </option>
                                        <option value="supercup"> Other </option>
                                    </select>
                                    @error('type')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    {{-- Country --}}
                                    <div class="form-group mt-2">
                                        <x-select2 id="country_id" wire:model='country_id' title="country">
                                            @foreach (\App\Models\Country::all() as $country)
                                                <option value="{{ $country->id }}">{{ $country->name }}</option>
                                            @endforeach
                                        </x-select2>
                                        @error('country_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="pt-3 float-right">
                                        <a type="button" wire:click='save' class="btn btn-primary mr-2">Submit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                            <th> Leauge Name </th>
                                            <th> Leauge Logo </th>
                                            <th> Leauge Type </th>
                                            <th> Leauge Country </th>
                                            <th> &nbsp; </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach (\App\Models\Leauge::all() as $leauge)
                                            <tr class="text-center">
                                                <td> {{ $loop->iteration }} </td>
                                                <td> {{ $leauge->name }} </td>
                                                <td>
                                                    @if ($leauge->logo)
                                                        <img style="width: 100px;height: 80px;border-radius: 0px"
                                                            src='{{ env('APP_URL') . '/storage/' . $leauge->logo }}'>
                                                    @endif
                                                </td>
                                                <td> {{ $leauge->type }} </td>
                                                <td> {{ $leauge->country->name }} </td>
                                                <td><a class='btn btn-success btn-sm text-light'
                                                        title='edit{{ $leauge->name }}'
                                                        wire:click='edit({{ $leauge->id }})' role='button'>Edit</a>
                                                </td>
                                                <td><a class='btn btn-danger btn-sm text-light'
                                                        title='delete {{ $leauge->name }}'
                                                        wire:click='delete({{ $leauge->id }})' role='button'>X</a>
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
