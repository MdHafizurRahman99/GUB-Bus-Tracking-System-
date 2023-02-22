<?php

namespace App\Http\Controllers;

use App\Models\Buses;
use Illuminate\Http\Request;

class BusController extends Controller
{

    public function addBus(){
        return view('admin.bus.add-bus');
    }
    public function saveBus(Request $request){
        $bus=new Buses();
        $bus->bus_name=$request->bus_name;
        $bus->registration_number=$request->registration_number;
        $bus->bus_status=1;
        $bus->save();
        return back();
    }

}