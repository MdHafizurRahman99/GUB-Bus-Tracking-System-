@extends('admin.master')
@section('content')
    <div class="row">
        <div class="col-xl-9 mx-auto">
            <h6 class="mb-0 text-uppercase">Add Teacher Form</h6>
            <hr/>
            <div class="card">
                <form action="{{route('update-driver-info')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input class="form-control"   name="driver_id" type="hidden" value="{{$driver->id}}" />
                    <div class="card-body">
                        <div class="border p-4 rounded">
                            <div class="card-title d-flex align-items-center">
                                <h5 class="mb-0">Edit Driver Information</h5>
                            </div>
                            <hr/>
                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">Enter Driver Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="driver_name" value="{{$driver->driver_name}}" id="inputEnterYourName" placeholder="Enter Driver Name">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPhoneNo2" class="col-sm-3 col-form-label">Phone No</label>
                                <div class="col-sm-9">
                                    <input type="text" name="driver_phone" value="{{$driver->driver_phone}}" class="form-control" id="inputPhoneNo2" placeholder="Phone No">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPhoneNo2" class="col-sm-3 col-form-label">Driving License</label>
                                <div class="col-sm-9">
                                    <input type="text" name="driving_license" value="{{$driver->driving_license}}" class="form-control" id="inputPhoneNo2" placeholder="Driving License">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Email Address</label>
                                <div class="col-sm-9">
                                    <input type="email"  name="driver_email"  value="{{$driver->driver_email}}"class="form-control" id="inputEmailAddress2" placeholder="Email Address">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputAddress4" class="col-sm-3 col-form-label">Address</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="driver_address" id="inputAddress4" rows="3" placeholder="Address"> {{$driver->driver_address}}</textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputAddress4" class="col-sm-3 col-form-label">Image</label>
                                <div class="col-sm-9">
                                    <input type="file"  name="image" class="form-control" id="inputEmailAddress2" >
                                    <img src="{{asset($driver->image)}}" style="height: 100px;width: 100px">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPhoneNo2" class="col-sm-3 col-form-label">Password</label>
                                <div class="col-sm-9">
                                    <input type="password" name="driver_password"  class="form-control" id="inputPhoneNo2" placeholder="Password">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPhoneNo2" class="col-sm-3 col-form-label">Confirm Password</label>
                                <div class="col-sm-9">
                                    <input type="password" name="password_confirmation" class="form-control" id="inputPhoneNo2" placeholder="Confirm Password">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="row">
                                    <label class="col-sm-3 col-form-label"></label>
                                    <div class="col-sm-9">
                                        <button type="submit" class="btn btn-primary px-5">Edit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
@endsection
