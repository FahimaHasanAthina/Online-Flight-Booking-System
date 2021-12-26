<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Auth;
use App\Models\Suggestion;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function edit(){
    	return view('profile.edit');
    }

    public function saved(){
    	$user = Auth::User();
    	$user->name = request('name');
    	$user->email = request('email');
        $user->phone_no = request('phone_no');
    	$user->address = request('address');
    	$user->save();

    	return view('profile.saved');
    }

    public function suggest(){
        if (Auth::User()) {
            return view('suggest');
        }
    }

    public function suggested(){
        $feedback = new Suggestion;
        $feedback->userID = Auth::User()->id;
        $feedback->suggestion = request('feedback');
        $feedback->save();

        return view('suggested');
    }

    
}