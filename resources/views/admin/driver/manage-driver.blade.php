@extends('admin.master')
@section('content')

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                    <tr>
                        <th>Sl No</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Driving License</th>
                        <th>Address</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php $i=1 @endphp
                    @foreach($drivers as $driver)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$driver->driver_name}}</td>
                        <td>{{$driver->driver_phone}}</td>
                        <td>{{$driver->driver_email}}</td>
                        <td>{{$driver->driving_license}}</td>
                        <td>{{$driver->driver_address}}</td>
                        <td>
                            <img src="{{asset($driver->image)}}" style="height: 50px;width: 50px" alt="">
                        </td>
                        <td>
                            <a href="{{route('edit-driver-info',['id'=>$driver->id])}}" class="btn btn-primary">Edit</a>
                            <a>
                                <form action="{{route('delete-driver-info')}}" method="post">
                                    @csrf
                                    <input type="hidden" value="{{$driver->id}}" name="driver_id">
                                    <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Do you really want to delete!')">
                                </form>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection
