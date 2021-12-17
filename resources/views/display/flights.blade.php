@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                	@if($buses)
						
                		</br>
                           		</br>

					   <table>
						  <tr>
                            <th>Flight_no</th> 
						    <th>Source</th>
						    <th>Destination</th>
						    <th>Coach</th>
						    <th>Date</th>
						    <th>Time</th>
						  </tr>
						  @foreach($flights as $flight)
						  <tr>
                            <td>{{ $flight->flight_no }}</td>
						    <td>{{ $flight->source }}</td>
						    <td>{{ $flight->destination }}</td>
						    <td>{{ $flight->coach }}</td>
						    <td>{{ $flight->date }}</td>
						    <td>{{ $flight->time }}</td>
						  </tr>
						   @endforeach

						 
						</table>
					@endif

                <div class="panel-body">
                    
               
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