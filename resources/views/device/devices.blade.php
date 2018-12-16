@extends('layouts.app')

@section('content')

    <div class="row m-t-20">
        <div class="col-md-12">
            <div class="overview-wrap">
                <h2 class="title-1">Your USB Devices</h2>
            </div>
        </div>
    
        <div class="col-md-12 m-t-30">
            <!-- DATA TABLE-->
            <div class="table-responsive m-b-40">
                <table class="table table-borderless table-data3">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Device ID</th>
                            <th>Type</th>
                            <th>Status</th>
                            <th>Updated</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($devices as $device)
                        <tr>
                            <td>{{ $device->id }}</td>
                            <td>{{ $device->original_device_id }}</td>
                            <td>{{ $device->type }}</td>
                            <td style="cursor: pointer" data-device-id="{{ $device->id }}" data-host-id="{{ $device->host_id }}" class="status {{ $device->status == 'Granted' ? ' process' : 'denied' }}">{{ $device->status }}</td>
                            <td>{{ $device->updated_at->diffForHumans() }}</td>
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
<script>
    $('.status').click(function(e) {
		e.preventDefault();
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
			}
		});
		$.ajax({
			url: "/ajax/device/switch",
			method: 'POST',
			data: {
				device_id: $(this).data("device-id"),
                host_id: $(this).data("host-id"),
                _token: '{{csrf_token()}}'
			},
			success: function(result){
                console.log(result);
                if (result == 'success'){
                    location.reload();
                }
				
			}
		});
		
		//$(this).parent().remove();	
		return false;
		
	});
</script>
@endsection