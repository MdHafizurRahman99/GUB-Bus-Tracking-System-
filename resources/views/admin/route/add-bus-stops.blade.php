@extends('admin.master')
@section('content')
    <div class="row">
        <div class="col-xl-9 mx-auto">
            <h6 class="mb-0 text-uppercase">Add Bus Stops</h6>
            <hr/>
            <div class="card">
                <form action="{{route('save-bus-stop')}}" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="border p-4 rounded">
                            <div class="card-title d-flex align-items-center">
                                {{-- <h5 class="mb-0">Driver Registration Form</h5> --}}
                            </div>
                            {{-- <hr/> --}}
                            <div class="row mb-3">
                            <label for="" class="col-sm-3 col-form-label">Enter Bus Stop Name</label>
                            <select class="form-control" name="stop_id"  >
                                @foreach($routes as $route)
                                <option value="{{$route->id}}">{{$route->route_name}}</option>
                                @endforeach
                            </select>
                            </div>
                            <div class="row mb-3">
                                <label for="inputAddress4" class="col-sm-3 col-form-label">Bus Stop Name</label>
                                <br>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="stop_name"id="inputAddress4" rows="3" placeholder="Please Enter The Route Name">
                                    </textarea>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-9">
                                    <button type="submit" class="btn btn-primary px-5">ADD</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
