@extends('layouts.app')

@section('content')

    <div class="row m-t-20">
        <div class="col-md-12">
            <div class="overview-wrap">
                <h2 class="title-1">Your Hosts</h2>
            </div>
        </div>
    
        <div class="col-md-12 m-t-30">
            <!-- DATA TABLE-->
            <div class="table-responsive m-b-40">
                <table class="table table-borderless table-data3">
                    <thead>
                        <tr>
                            <th>Host ID</th>
                            <th>Host Name</th>
                            <th>Updated</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($hosts as $host)
                        <tr>
                            <td>{{ $host->id }}</td>
                            <td>{{ $host->host_name }}</td>
                            <td>{{ $host->updated_at->diffForHumans() }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- END DATA TABLE-->
        </div>
    </div>


    


@endsection


@section('extra.content')
    <!-- Modals -->
    <!-- Create New API token Modal -->
    <div class="modal fade" id="newTokenModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <form class="modal-content" action="{{ route('token.add') }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="mediumModalLabel">Medium Modal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                        New token is required for each and every computer you want to monitor by SecurityX. Do you want to proceed?
                    </p>
                    <div class="form-group">
                        <label>{{ __('Write one line description') }}</label>
                        <input id="description" class="au-input au-input--full" type="text" name="description" required placeholder="{{ __('exaple: To use on my Windows PC') }}">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Create Token</button>
                </div>
            </form>
        </div>
    </div>
    <!-- end modal medium -->
@endsection