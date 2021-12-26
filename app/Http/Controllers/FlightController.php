<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;
use Auth;

class FlightController extends Controller
{
    //
    public function index(){
    	$flights = Flight::all();
    	return view('display.flights')->with(compact('flights'));
    	//dd($buses);
    }

    public function search(){
    	$flights = Flight::where('source', 'like', '%'.request('source').'%')->where('destination', 'like', '%'.request('destination').'%')->where('date', 'like', '%'.request('date').'%')->where('coach', 'like', '%'.request('coach').'%')->get();
    	
    	return view('display.search')->with(compact('flights'));
    }

    public function view($id){
        $flights = Flight::where('id', $id)->get();
        $user = Auth::User();
        return view('display.view')->with(compact('flights', 'user'));
    }
}
