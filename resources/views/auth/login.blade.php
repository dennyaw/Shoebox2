
<html><head>
<title>The Shoebox</title>
<link rel="shortcut icon" href="http://33.media.tumblr.com/tumblr_m8exsy0aWH1roozkr.gif" type="image/x-icon" /> 
<link rel="stylesheet" href="{{ asset('ver.css')}}">
</head>

<body>
<div class="box"> 
<center><br>
    <div class="title">Sign In</div>
    <div style="color:#4A4A4A;"><div class="text">Don't have an account yet?</div></div>
    <div style="color:#FF7374;"><div class="text"><a href="{{ URL::to('register') }}">Register here</a></div></div><br><br>
    
    @if(count($errors) > 0)
                    @foreach($errors->all() as $error)
                        <div class="alert alert-warning">{{ $error }}</div>
                    @endforeach
                    @endif
                    @if ($message = Session::get('error'))
                        <div class="alert alert-warning">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <br>
                  <!--  @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror-->
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="user-details">
            <div class="input-box">
                <span class="details">Email</span><br>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>
                         
            </div>
            <br><br>
             <div class="input-box">
                <span class="details">Password</span><br>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>
                <br>
                                
            </div>
        </div>
        <br><br>
            <input type="submit" value="Sign In" submit>
    </form><br>
</center>

</div>

</body>
</html>
