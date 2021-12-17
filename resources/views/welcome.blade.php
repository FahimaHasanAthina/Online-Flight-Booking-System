<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Flight Booking System</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: rgb(241, 225, 218);
                background-image: url('/images/Airplane wallpaper HD 2.png');
                background-size: 100%;
                color: #000000;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 90vh;
                margin: 0;
                opacity:0.9;
                background-blend-mode: multiply;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
                
            }

            .title {
                font-size: 60px;
                font-family: 'Roboto';
                
                
            }

            .links > a {
                color: #000000;
                padding: 15px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 250px;
                
            }
        </style>
    </head>
    
   
    <body>
        
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ route('home') }}">Dashboard</a>
                    @else
                        <a href="{{ route('home') }}">Home</a>
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Flight Booking System
                </div>

            
                

                  


                
            </div>
        </div>
    </body>
</html>