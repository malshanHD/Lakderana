<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lak Derana</title>
    <link href='https://fonts.googleapis.com/css?family=ABeeZee' rel='stylesheet'>
    <!-- bootstrap css cdn -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/card.css">
</head>
<body>
    @include('include.logo')


    <div class="container-fluid mt-5 font-weight-bold text-uppercase">
        <div class="row justify-content-center mb-5">
            <div class="col-md-3">
                @guest
        @if (Route::has('login'))
            <a href="/login" class="btn btn-success btn-block">LOGIN</a>
        @endif

        @if (Route::has('register'))
            
        @endif
        @else
            <a class="btn btn-danger btn-block" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
            </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
        @endguest
                
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-2">
                <a href="/customer">
                    <div class="card text-center">
                        <div class="card-header l-bg-orange-dark">
                            <p class=" mt-2">Customer Details</p>
                        </div>
                        <div class="card-body">
                            <img src="/SystemIMG/customer.png" width="100%;" alt="">
                        </div>
                        
                        
                    </div>
                </a> 
                
            </div>
            <div class="col-md-2">
                <a href="/atten">
                    <div class="card text-center ">
                        <div class="card-header l-bg-orange-dark">
                            <p class=" mt-2">Attendance</p>
                        </div>
                        <div class="card-body">
                            <img src="/SystemIMG/finger.png" width="100%;" alt="">
                        </div>
                    </div>
                </a> 
            </div>
            
            
        </div>

        <div class="row justify-content-center">
            <div class="col-md-2">
                <a href="/bardashboard">
                    <div class="card text-center">
                        <div class="card-header l-bg-orange-dark">
                            <p class=" mt-2">Liqor Bar</p>
                        </div>
                        <div class="card-body">
                            <img src="/SystemIMG/bar.png" width="100%;" alt="">
                        </div>
                    </div>
                </a> 
                
            </div>
            

            <div class="col-md-2 ">
                <a href="/findashboard">
                    <div class="card text-center">
                        <div class="card-header l-bg-orange-dark">
                            <p class=" mt-2">Financial Section</p>
                        </div>
                        <div class="card-body">
                            <img src="/SystemIMG/finan.png" width="100%;" alt="">
                        </div>
                    </div>
                </a> 
                
            </div>

            <div class="col-md-2 ">
                <a href="/servicesdash">
                    <div class="card text-center">
                        <div class="card-header l-bg-orange-dark">
                            <p class=" mt-2">Service Section</p>
                        </div>
                        <div class="card-body">
                            <img src="/SystemIMG/649236.png" width="100%;" alt="">
                        </div>
                    </div>
                </a> 
                
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-2">
                <a href="/rmdashboard">
                    <div class="card text-center">
                        <div class="card-header  l-bg-orange-dark">
                            <p class=" mt-2">Rooms Reservation</p>
                        </div>
                        <div class="card-body">
                            <img src="/SystemIMG/rooms.png" width="100%;" alt="">
                        </div>
                    </div>
                </a> 
            </div>
            <div class="col-md-2 ">
                <a href="/HRsection">
                    <div class="card text-center">
                        <div class="card-header l-bg-orange-dark">
                            <p class=" mt-2">HR Section</p>
                        </div>
                        <div class="card-body">
                            <img src="/SystemIMG/271300.png" width="100%;" alt="">
                        </div>
                    </div>
                </a> 
            </div>
        </div>
    </div>
</body>
</html>