<div>
    <div class="container">
        <div class="row">
            <div class="col-md-1 grid-margin stretch-card">
            </div>
            <div class="col-md-10 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Channel Name</h4>
                        <div class="form-group row">
                            <div class="col">
                                <label>Name</label>
                                <div id="the-basics">
                                    <input class="typeahead" wire:model="channel" type="text" placeholder="Name">
                                    @error('channel')
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
                        <h4 class="card-title text-center">Channel Name</h4>
                        </p>
                        <div class="table-responsive">
                            <table class="table table-bordered table-contextual table-hover">
                                <thead>
                                    <tr class="text-center">
                                        <th> # </th>
                                        <th> Channel Name </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($channels as $channel)
                                        <tr class="text-center">
                                            <td> {{ $loop->iteration }} </td>
                                            <td> {{ $channel->name }} </td>
                                            <td><a class='btn btn-success btn-sm text-light'
                                                title='Edit {{ $channel->name }}'
                                                wire:click='edit({{ $channel->id }})' role='button'>Edit</a></td>
                                            <td><a class='btn btn-danger btn-sm text-light'
                                                    title='delete {{ $channel->name }}'
                                                    wire:click='delete({{ $channel->id }})' role='button'>X</a></td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            {{ $channels->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
