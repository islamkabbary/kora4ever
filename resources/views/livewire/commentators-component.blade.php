<div>
    <div class="container">
        <div class="row">
            <div class="col-md-1 grid-margin stretch-card">
            </div>
            <div class="col-md-10 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Commentator Name</h4>
                        <div class="form-group row">
                            <div class="col">
                                <label>Name</label>
                                <div id="the-basics">
                                    <input class="typeahead" wire:model="commentator" type="text" placeholder="Name">
                                    @error('commentator')
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
                        <h4 class="card-title text-center">Commentator Name</h4>
                        </p>
                        <div class="table-responsive">
                            <table class="table table-bordered table-contextual table-hover">
                                <thead>
                                    <tr class="text-center">
                                        <th> # </th>
                                        <th> Commentator Name </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($commentators as $commentator)
                                        <tr class="text-center">
                                            <td> {{ $loop->iteration }} </td>
                                            <td> {{ $commentator->name }} </td>
                                            <td><a class='btn btn-success btn-sm text-light'
                                                    title='Edit {{ $commentator->name }}'
                                                    wire:click='edit({{ $commentator->id }})' role='button'>Edit</a></td>
                                            <td><a class='btn btn-danger btn-sm text-light'
                                                    title='Delete {{ $commentator->name }}'
                                                    wire:click='delete({{ $commentator->id }})' role='button'>X</a></td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            {{ $commentators->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
