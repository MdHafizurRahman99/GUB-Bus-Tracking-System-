<?php

namespace App\Http\Controllers;

use App\Models\Buses;
use App\Models\Driver;
use App\Models\Route;
use Illuminate\Http\Request;
use Session;
class DriverController extends Controller{

    public function index(){
        return view('admin.driver.add-driver');
    }

    public function driverLogin(){
        return view('frontEnd.login.driver-login');
    }

    public function selectRoute(){
        return view('frontEnd.driver.select-route',
        [
            'routes'=>Route::where('status',1)->orderby('id','desc')->get(),
            'buses'=>Buses::where('bus_status',1)->orderby('id','desc')->get()
        ]);

    }
    public function saveDriver(Request $request){
        // return $request;
        $this->validate($request,[
            'driver_name' => 'required|min:3|max:50',
            'driver_phone' => 'min:11|max:11',
            'driver_id' => 'min:9|max:11',
            'driver_password' => 'min:6',
            'password_confirmation' => 'min:6',
        ]);

        if ($request->driver_password==$request->password_confirmation){
            $driver=new Driver();
            $driver->driver_name=$request->driver_name;
            $driver->driver_email=$request->driver_email;
            $driver->driver_phone=$request->driver_phone;
            $driver->driving_license=$request->driving_license;
            $driver->driver_address=$request->driver_address;
            $driver->driver_password=bcrypt($request->driver_password);
            if ($request->image){
                $driver->image=$this->saveImage($request);
            }
            
            $driver->save();
        }else{
            $this->validate($request,[
                'driver_password' => 'required_with:password_confirmation|same:password_confirmation|confirmed|min:6',
            ]);
            return back();

        }
        return back();
    }

    private function saveImage($request){
        $this->image=$request->file('image');
        $this->imageName=rand().'.'.$this->image->getClientOriginalExtension();
        $this->directory='adminAsset/driver-image/';
        $this->imgUrl=$this->directory.$this->imageName;
        $this->image->move($this->directory,$this->imageName);
        return $this->imgUrl;
    }

    public function manageDriver(){
        return view('admin.driver.manage-driver',[
            'drivers'=>Driver::all()
        ]);
    }

    public function driverLoginCheck(Request $request){
//        return $request;
        $driverInfo=Driver::where('driver_email',$request->user_name)
            ->orWhere('driver_phone',$request->user_name)
            ->first();
//        return $driverInfo;
        if ($driverInfo){
            $expass=$driverInfo->driver_password;
            if (password_verify($request->user_password,$expass)){
                Session::put('driverId',$driverInfo->id);
                Session::put('driverName',$driverInfo->driver_name);
                return redirect('/');
            }
            else{
                return  back()->with('message','invalid Password');
            }
        }else{
            return  back()->with('message','invalid email/phone number');
        }
    }

    public function driverLogout(){
        Session::forget('driverId');
        Session::forget('driverName');
        return redirect('/');
    }


    public function editDriverInfo($id){
        return view('admin.driver.edit-driver-info'
            ,['driver'=>Driver::find($id)]
        );
    }

    public function updateDriverInfo(Request $request){

        $driver=Driver::find($request->driver_id);
//        $this->validate($request,[
//            'driver_name' => 'required|min:3|max:50',
//            'driver_phone' => 'min:11|max:11',
//            'driver_password' => 'min:6',
//            'password_confirmation' => 'min:6',
//        ]);
//            $driver=new driver();
            $driver->driver_name=$request->driver_name;
            $driver->driver_email=$request->driver_email;
            $driver->driver_phone=$request->driver_phone;
            $driver->driving_license=$request->driving_license;
            $driver->driver_address=$request->driver_address;
        if ($request->file('image')){
            if ($driver->image){
                unlink($driver->image);
                $driver->image=$this->saveImage($request);
            }else{
                $driver->image=$this->saveImage($request);
            }
        }

        if ($request->password_confirmation !=null && $request->driver_password==$request->password_confirmation){
            $driver->driver_password=bcrypt($request->driver_password);
        }
//        else{
//            $this->validate($request,[
//                'driver_password' => 'required_with:password_confirmation|same:password_confirmation|confirmed|min:6',
//            ]);
//        }
        $driver->save();

        return redirect('/manage-driver');
    }

    public function deleteDriverInfo(Request $request){
        $driver=Driver::find($request->driver_id);
        if ($driver->image){
            unlink($driver->image);
        }
        $driver->delete();
        return back();
    }

}