@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body" >
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p color='white'>
                    You are logged in!
                    </p>

                    </br>
                    

                    <form method="POST" action="{{ url('/display/search') }}">
                      {{ csrf_field() }}
                      <p>Enter Source: </p>
                      <input type="text" name="search"  placeholder="Source" >

                      <p>Enter Destination:</p>
                      <input type="text" name="destination"  placeholder="Destination" >
                      
                      <p>Enter Departure Date:  
                      <input type="date" name="departure_date"  placeholder="departure_date" ></p>

                     <p> Enter Return Date:  
                      <input type="date" name="return_date"  placeholder="return_date" ></p>

                      <p>Enter Type of Coach:</p>
                      <input type="text" name="coach"  placeholder="coach" >

                      <p>Enter number of tickets:</p>
                      <input type="number" name="no_of_tickets"  placeholder="no_of_tickets" >

                      </br>
                      </br>

                      <button class="btn btn-lg btn-primary" type="submit">Search</button>
                    </form>
                    </br>
                    </br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
