<div>
    <div class="container">
        <div class="row">
            <div class="col-md-1 grid-margin stretch-card">
            </div>
            <div class="col-md-10 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tag Name</h4>
                        <div class="form-group row">
                            <div class="col">
                                <label>Name</label>
                                <div id="the-basics">
                                    <input class="typeahead" wire:model.defer="name" type="text" wire:keydown.enter="save">
                                    @error('name')
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
            <div class="col-md-1 grid-margin stretch-card">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center">Tags</h4>
                        </p>
                        <div class="table-responsive">
                            <table class="table table-bordered table-contextual table-hover">
                                <thead>
                                    <tr class="text-center">
                                        <th> # </th>
                                        <th> Tag Name </th>
                                        <th colspan="2"> </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach (\App\Models\Tag::all() as $tag)
                                        <tr class="text-center">
                                            <td> {{ $loop->iteration }} </td>
                                            <td class="test-light"> {{ $tag->name }} </td>
                                            <td><a class='btn btn-success btn-sm text-light' title='Edit {{ $tag->name }}'wire:click='edit({{ $tag->id }})' role='button'>Edit</a></td>
                                            <td><a class='btn btn-danger btn-sm text-light' title='Delete {{ $tag->name }}' wire:click='delete({{ $tag->id }})' role='button'>X</a></td>
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
