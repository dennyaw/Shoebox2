<html><head>
<title>The Shoebox</title>
<link rel="shortcut icon" href="http://33.media.tumblr.com/tumblr_m8exsy0aWH1roozkr.gif" type="image/x-icon" /> 
<link rel="stylesheet" href="{{ asset('ver.css')}}">
</head>

<body>
<div class="box"> 
<center><br>
    <div class="title">Sign Up</div>
    <div style="color:#4A4A4A;"><div class="text">Already have an account?</div></div>
    <div style="color:#FF7374;"><div class="text"><a href="{{ URL::to('login') }}">Sign In</a></div></div><br>
    
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
    <form method="POST" action="{{ route('register') }}">
    @csrf
        <div class="user-details">
            <div class="input-box">
                <span class="details">Name</span><br>
                <input id="name" type="text" name="name" class="form-control" required>
            </div><br>
            <div class="input-box">
            <span class="details">Email</span><br>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" required>
                            <!--    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror-->
            </div><br>
            <div class="input-box">
                <span class="details">Address</span><br>
                <input id="alamat"  type="text" name="alamat" required>
            </div><br>
           
            <div class="input-box">
                <span class="details">Phone Number</span><br>
                <input id="hp"  type="text" name="hp" required>
            </div><br>
           
             <div class="input-box">
             <span class="details">Password</span><br>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>
                              <!--  @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror-->
            </div><br>
            <div class="input-box">
             <span class="details">PasswordConfirmation</span><br>
                <input id="password_confirmation" type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" required>
                              <!--  @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror-->
            </div>
        </div>
        <br><br>
            <input type="submit" value="Sign Up" submit>
    </form><br>
    
</center>

</div>

</body>
</html>