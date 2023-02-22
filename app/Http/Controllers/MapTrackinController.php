<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\BusMoved;
use App\Models\PickupRequests;

class MapTrackinController extends Controller
{
    public $lat,$lng,$bid;

    public function index(){
        return view('frontEnd.home.home');
    }
        public function showClientSide(){
            return view('tracker.showClientSide');
        }
        public function bus2(){
            return view('tracker.bus2');
        }

        public function BusMoved(Request $request){

//            $request= $request['coords'];
//            $request= json_decode($request);
            $this->lng=$request['lng'];
            $this->lat=$request['lat'];
            $this->bid=$request['busId'];

            event(new BusMoved($this->lng,$this->lat,$this->bid));
//            return back();
        }

        public function moving(){
            return view('tracker.moving');
        }
        public function busLocationUpdate(){
            return view('frontEnd.tracking.bus-moving',[
                'pickUpRequests'=>PickupRequests::all()
                ]);
        }
        public function currentBusLocation(){
            return view('frontEnd.tracking.currnent-bus-location');
        }


        public function busesLocation(){
            return view('tracker.buses-location');
        }
}