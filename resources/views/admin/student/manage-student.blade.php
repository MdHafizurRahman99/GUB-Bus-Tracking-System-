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
                        <th>Address</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php $i=1 @endphp
                    @foreach($students as $student)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$student->student_name}}</td>
                            <td>{{$student->student_phone}}</td>
                            <td>{{$student->student_email}}</td>
                            <td>{{$student->address}}</td>
                            <td>
                                <img src="{{asset($student->image)}}" style="height: 50px;width: 50px" alt="">
                            </td>
                            <td>
                                <a href="" class="btn btn-primary">Edit</a>
                                <a href="" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection
