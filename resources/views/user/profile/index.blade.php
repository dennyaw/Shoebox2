@extends('user.master')

@section('content')
<form class="flex-column container">
        <h1 class="poppins">Hi, {{Auth::user()->name}}</h1>
        <div class="flex-column form-box">
            <div class="flex-row form-section">
                <div class="flex-column poppins form-column">
                <h2>Account Information</h2>
                    <div class="flex-column poppins input-label">
                        <label for="name">Name: {{Auth::user()->name}}</label>
                        
                    </div>
                    <div class="flex-column poppins input-label">
                        <label for="username">Phone: {{Auth::user()->hp}}</label>
                    </div>
                    <div class="flex-column poppins input-label">
                        <label for="birth">Address: {{Auth::user()->alamat}}</label>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <br>
    <br>
    <br>
    <br>
    @endsection