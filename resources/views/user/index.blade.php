{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Shoebox</title>
    <link rel="shortcut icon" href="http://33.media.tumblr.com/tumblr_m8exsy0aWH1roozkr.gif" type="image/x-icon" />
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- css files -->
    <link rel="stylesheet" href="{{ asset('system.css') }}">
    <link rel="stylesheet" href="{{ asset('header.css') }}">
    <link rel="stylesheet" href="{{ asset('nav.css') }}">
    <link rel="stylesheet" href="{{ asset('index.css') }}">
    <link rel="stylesheet" href="{{ asset('footer.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>

<body>
    <header class="flex-row">
        <span></span>
        <h1 class="pacifico">The Shoebox</h1>
        <div class="flex-column header-user">
            @auth
                <p class="poppins flex-row">
                    <span>
                        <a href="{{ route('logout') }}" class="flex-row">
                            LogOut
                        </a>
                    </span>
                </p>
            @else
                <p class="poppins flex-row">
                    <span>
                        
                        <a href="{{ URL::to('login') }}" class="flex-row">
                            Login
                        </a>
                    </span>
                    or
                    <span>
                        <a href="{{ URL::to('register') }}" class="flex-row">
                            Register
                        </a>
                    </span>
                </p>
            @endauth

        </div>
    </header>
    
    <nav class="flex-row nav-link">
        <span class="poppins">Home</span>
        <a href="{{route('men.index')}}" class="poppins">Men</a>
        <a href="{{route('women.index')}}" class="poppins">Women</a>
        <a href="#" class="poppins">Cart</a>
        <a href="{{route('about')}}" class="poppins">About Us</a>

    </nav>    
    <footer class="flex-column">
        <div class="flex-row foot-sosmed">
            <a href="http://instagram.com"><i class="fa fa-instagram" style="font-size:60px;color:#454545;"></i></a>
            <a href="http://twitter.com"><i class="fa fa-twitter" style="font-size:60px;color:#454545;"></i></a>
            <a href="http://facebook.com"><i class="fa fa-facebook" style="font-size:50px;color:#454545;"></i></a>
        </div>
        <span class="poppins">© 2021 TheShoeBox. All Rights Reserved.</span>
    </footer>
</body>

</html> --}}

@extends('user.master')
@section('content')
    <div class="flex-column container">
    <center>
         <div class="flex-row banner">
            <button onclick="topFunction()" id="myBtn" class="poppins">Shop now!</button>
        </div>
    </center>
    </div>
@endsection

@section('js')
    <script>
        mybutton = document.getElementById("myBtn");

        function topFunction() {
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        }
    </script>
@endsection
