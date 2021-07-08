@extends('user.master')

@section('content')
<form class="flex-column container">
        <h1 class="poppins">Edit Account Information</h1>
        <div class="flex-column form-box">
            <div class="flex-row form-section">
                <div class="flex-column poppins form-column">
                <h2>Account Information</h2>
                    <div class="flex-column poppins input-label">
                        <label for="name">Name: {{Auth::user()->name}}</label>
                        
                    </div>
                    <div class="flex-column poppins input-label">
                        <label for="username">Phone</label>
                        <input type="text" name="name" id="name" placeholder="Phone number">
                    </div>
                    <div class="flex-column poppins input-label">
                        <label for="birth">Address</label>
                        <input type="text" name="name" id="name" placeholder="Your address">
                    </div>
                </div>
                
            </div>
            <button onclick="Prof()" type="submit" name="save">Save</button>
            <script>function Prof(){alert("Changes saved!");}</script>
        </div>
    </form>
    @endsection