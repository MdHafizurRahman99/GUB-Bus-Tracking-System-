@extends('admin.master')
@section('content')
    <div class="row">
        <div class="col-xl-9 mx-auto">
            <h6 class="mb-0 text-uppercase">Add Buses</h6>
            <hr/>
            <div class="card">
                <form action="{{route('save-bus')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="border p-4 rounded">
                            <div class="card-title d-flex align-items-center">
                                <h5 class="mb-0"> Bus Information</h5>
                            </div>
                            <hr/>
                       
                            <div class="row mb-3">
                                <label for="" class="col-sm-3 col-form-label"> Bus Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="bus_name" class="form-control" id="" placeholder="Enter Bus Name">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPhoneNo2" class="col-sm-3 col-form-label">Bus Registration Number</label>
                                <div class="col-sm-9">
                                    <input type="text" name="registration_number" class="form-control" id="" placeholder="Enter Bus Registration Number">
                                </div>
                            </div>         
                            <div class="row mb-3">
                            <div class="row">
                                <label class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-9">
                                    <button type="submit" class="btn btn-primary px-5">Add </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
