<?php

namespace App\Http\Controllers;


use Twilio\Rest\Client;
use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\Flight;
use Auth;
use Twilio;


class TicketController extends Controller
{
    //
    public function book($id){
    	$flight = Flight::where('id', $id)->get();
       
        //

    	$ticket = new Ticket;
    	$ticket->flightID = $id;
    	$ticket->uID = Auth::id();
    	$ticket->name = request('name');
    	$ticket->phone = request('phone_no');
    	$ticket->email = request('email');
        $ticket->seats = request('seats');
        
    	foreach($flight as $flight){
    	$number = $flight->availability;
    	if($number<1){
    		$available = 0;
    	}
    	else{
    		$available = 1;
            $number = $number - request('seats');
	    	//$number--;
	    	$flight->availability = $number;
	    	$flight->save();
    	}

        $ticket->booking_date = date("Y-m-d");

    	$ticket->travel_date = $flight->date;
        $ticket->price = $flight->ticket_price;
        
    	
    	}
    	$ticket->save();

        

    	return view('tickets.booked')->with(compact('ticket', 'flight', 'available'));
    }

    public function all(){
        $id = Auth::User()->id;
        $tickets = Ticket::where('uID', $id)->get();
    	return view('tickets.all')->with(compact('tickets'));
    }

    public function view($id){
        $ticket = new Ticket;
        $ticket = Ticket::where('id', $id)->get();
        foreach($ticket as $ticket){
            $flight = Flight::where('id', $ticket->flightID)->get();
        }
        foreach ($flight as $flight) {
            $travel = 0;
            $present = date("Y-m-d");
            if (strtotime($present) <= strtotime($ticket->travel_date)) {
                $travel = 1;
            }
        }
        return view('tickets.view')->with(compact('ticket', 'flight', 'travel'));
    }

    public function cancel($id){
        $ticket = Ticket::where('id', $id)->get();
        foreach($ticket as $ticket){
            $flight = Flight::where('id', $ticket->flightID)->get();
        }
        foreach ($flight as $flight) {
            $travel = 0;
            $present = date("Y-m-d");
            if (strtotime($present) <= strtotime($ticket->travel_date)) {
                $travel = 1;
            }
        }
        return view('tickets.validate')->with(compact('ticket', 'flight'));
    }

    public function cancelled($id){
        Ticket::where('id', $id)->delete();
        return view('tickets.cancelled');
    }
}
