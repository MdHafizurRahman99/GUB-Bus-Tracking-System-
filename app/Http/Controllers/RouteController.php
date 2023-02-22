<?php

namespace App\Http\Controllers;

use App\Models\BusStops;
use App\Models\Route;
use Illuminate\Http\Request;

class RouteController extends Controller
{
     public function addRoute(){
        return view('admin.route.add-route');
    }

    public function saveRoute(Request $request){
        $route=new Route();
        $route->route_name=$request->route_name;
        $route->status=1;
        $route->save();
        return back();
    }

    public function addBusStops(){
        return view('admin.route.add-bus-stops',[
            'routes'=>Route::all(),
        ]
    );   
     }
     public function saveBusStops(Request $request){
        // return $request;
        $busStops=new BusStops();
        $busStops->stop_id=$request->stop_id;
        $busStops->stop_name=$request->stop_name;
        $busStops->stops_status=1;
        $busStops->save();
        return back(); 
     }

}