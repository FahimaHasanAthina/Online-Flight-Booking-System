@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Profile</div>

                <div class="panel-body">

                @if($user = Auth::User())
                <p>
					Name: {{ $user->name }}
					</br>
                    Email: {{ $user->email }}
					</br>
					Phone_no: {{ $user->phone_no }}
					</br>
					Address: {{ $user->address }}
                </p>
                     
				@endif
                     </br>
                    </br>

                    <form class="form" method="GET" action="/profile/edit">
                            {{ csrf_field() }}
                            <button class="btn btn-lg btn-primary" type="submit">Edit</button>
                    </form>
                    </br>

                    <form class="form" method="GET" action="/home">
                            {{ csrf_field() }}
                            <button class="btn btn-lg btn-primary" type="submit">Home</button>
                    </form>

                   

                    
                </div>
            </div>
        </div>
    </div>
</div>



@endsection