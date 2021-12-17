@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    </br>



                    </br>

                    @if('flight')

                    @foreach($flights as $flight)

                    Flight_no:  {{ $flight->flight_no}}
                    </br>

                    Source:  {{ $flight->source }}
                    </br>

                    Destination: {{$flight->destination}}
                    </br>

                    Availability: {{ $flight->availability }}
                    </br>

                    Coach: {{ $flight-> coach }}
                    </br>

                    Date: {{ $flight->date }} 

                    @endforeach

                    @endif

                    <form method="POST" action="{{ url('/ticket/booked/'.$flight->id) }}">
                      {{ csrf_field() }}
                      <h4>Enter the Passenger Details</h4>
                      <label for="inputName">Name</label>
				        <input type="text" name="name" value = "{{ Auth::User()->name }}">
				        </br>
				        

				        </br>
						<label for="text" class="">Email</label>
				        <input type="text" id="email" class="" placeholder="" name = "email"
				               	value = <?php if ((Auth::User()->email == "NULL")):
				        		else:  ?>"{{ Auth::User()->email }}"
				        			
				        		<?php endif ?>>

				        </br>
				        </br>
				        <label for="text" class="">Phone No.</label>
				        <input type="text" id="phone_no" class="" placeholder="" name = "phone_no"
				        	value = <?php if ((Auth::User()->phone_no == "0")):
				        		else:  ?>"{{ Auth::User()->phone_no }}"
				        			
				        		<?php endif ?>>

				        </br>
				        </br>

                        <label for="text" class="">Number of seats</label>
                        <input type="text" id="seats" class="" placeholder="" name = "seats" value="1">

                        </br>
                        </br>
				        	
				        
                      <button class="btn btn-lg btn-primary" type="submit">Confirm</button>
                    </form>
                    </br>
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection