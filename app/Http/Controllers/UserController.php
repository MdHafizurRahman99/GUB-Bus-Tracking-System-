<?php

namespace App\Http\Controllers;
use App\Models\UserInfo;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use Session;

use Illuminate\Http\Request;
class UserController extends Controller{

//    public $image,$imageName,$directory,$imgUrl;
    public function index(){
        return view('frontEnd.login.login');
    }

    public function userLogin(){
        return view('frontEnd.login.user-login');
    }

    public function userRegister(){
        return view('frontEnd.register.user-register');
    }

    public function saveUser(Request $request){
//        return $request;
        $request->flash();
        $this->validate($request,[
            'user_name' => 'required|min:3|max:50',
            'user_phone' => 'min:11|max:11',
            'user_id' => 'min:9|max:11',
            'user_password' => 'min:6',
        ]);
        if ($request->user_password==$request->password_confirmation){
            $user=new UserInfo();
            $user->user_name=$request->user_name;
            $user->user_email=$request->user_email;
            $user->user_phone=$request->user_phone;
            $user->user_id=$request->user_id;
            $user->user_password=bcrypt($request->user_password);
            if ($request->image){
                $user->image=$this->saveImage($request);
            }
            $user->save();
        }else{
            $this->validate($request, [
                'user_password' => 'required_with:password_confirmation|same:password_confirmation|confirmed|min:6',
            ]);
        }
        return redirect('/user-login');
}

    private function saveImage($request){
        $this->image=$request->file('image');
        $this->imageName=rand().'.'.$this->image->getClientOriginalExtension();
        $this->directory='adminAsset/user-image/';
        $this->imgUrl=$this->directory.$this->imageName;
        $this->image->move($this->directory,$this->imageName);
        return $this->imgUrl;
    }

    public function userLoginCheck(Request $request){
//        return $request;
        $userInfo=UserInfo::where('user_email',$request->user_name)
            ->orWhere('user_phone',$request->user_name)
            ->first();
        if ($userInfo){
            $expass=$userInfo->user_password;
            if (password_verify($request->user_password,$expass)){
                Session::put('userId',$userInfo->id);
                Session::put('userName',$userInfo->user_name);
                return redirect('/');
            }
            else{
                return  back()->with('message','invalid Password');
            }
        }else{
            return  back()->with('message','invalid email/phone number');
        }
    }

    public function userLogout(){
        Session::forget('userId');
        Session::forget('userName');
        return redirect('/');
    }
}