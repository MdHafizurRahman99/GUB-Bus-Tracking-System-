<?php

namespace App\Http\Controllers;

use App\Models\PickupRequests;
use Illuminate\Http\Request;
use App\Events\PickUpRequest;

class StudentTrackinController extends Controller
{
    public $lat,$lng,$id,$name;

    public function studentLocation(){
            return view('frontEnd.tracking.test1');
          
            // return view('frontEnd.tracking.pickup-request');

    }
    public function test1(){
            return view('frontEnd.tracking.test1');
    }

    public function requestForPickup(Request $request){
//         return $request;
        $this->lng=$request['longitude'];
        $this->lat=$request['latitude'];
        $this->id=$request['id'];
        $this->name=$request['name'];
        $this->check=$request['check'];
        event(new PickUpRequest($this->lng,$this->lat,$this->id,$this->name, $this->check));
        //save to database
        $updatePickUpRequest=PickupRequests::where('passengerId',$request->id)
            ->first();
//        return $updatePickUpRequest;
        if ($updatePickUpRequest){
            $updatePickUpRequest->longitude=$request->longitude;
            $updatePickUpRequest->latitude=$request->latitude;
            $updatePickUpRequest->passengerId=$request->id;
            $updatePickUpRequest->bus_id=$request->busId;
            $updatePickUpRequest->status=1;
            $updatePickUpRequest->save();
        }
        else{
        $pickUpRequest=new PickupRequests();
        $pickUpRequest->longitude=$request->longitude;
        $pickUpRequest->latitude=$request->latitude;
        $pickUpRequest->passengerId=$request->id;
        $pickUpRequest->bus_id=$request->busId;
        $pickUpRequest->save();
        }
        return back();
        // return view('tracker.student.request-for-pickup');
    }

    public function removePickupRequest(Request $request){
//        $this->lng=$request['longitude'];
//        $this->lat=$request['latitude'];
        $this->id=$request['id'];
//        $this->name=$request['name'];
        $this->check=$request['check'];
        event(new PickUpRequest($this->lng,$this->lat,$this->id,$this->name, $this->check));
        //save to database
        $updatePickUpRequest=PickupRequests::where('passengerId',$request->id)
            ->first();
//        return $updatePickUpRequest;
        if ($updatePickUpRequest){
//            $updatePickUpRequest->longitude=$request->longitude;
//            $updatePickUpRequest->latitude=$request->latitude;
            $updatePickUpRequest->passengerId=$request->id;
            $updatePickUpRequest->bus_id=$request->busId;
            $updatePickUpRequest->status=0;
            $updatePickUpRequest->save();
        }
        return back();

    }



}