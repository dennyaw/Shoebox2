<!DOCTYPE html>
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
    <link rel="stylesheet" href="{{ asset('product.css') }}">
    <link rel="stylesheet" href="{{ asset('footer.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script>
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        // Close the dropdown menu if the user clicks outside of it
        window.onclick = function(event) {
            if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }
    </script>
</head>

<body>
    <header class="flex-row">
        <span></span>
        <h1 class="pacifico">The Shoebox</h1>
        <div class="flex-column header-user">
            <div class="dropdown">
                <div class="welcome">Welcome,</div>
                <span onclick="myFunction()" class="dropbtn">{{ Auth::user()->name }} <i class="fa fa-chevron-down"
                        aria-hidden="true"></i> </span>
                        <div class="dropdown">
                    <div class="welcome">Welcome,</div>
                    <span onclick="myFunction()" class="dropbtn">{{ Auth::user()->name }}
                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                    </span>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="{{ route('profile.index') }}">View Profile</a>
                        <a href="{{ route('order.index') }}">Order</a>
                        <a href="{{ route('logout') }}" onclick="">Log Out</a>
                    </div>
                </div>
        </div>
    </header>
    <nav class="flex-row nav-link">
    <a href="{{ route('landingpage') }}" class="poppins">Home</a>
        <a href="{{ route('men.index') }}" class="poppins">Men</a>
        <a href="{{ route('women.index') }}" class="poppins">Women</a>
        <a href="{{ route('cart') }}" class="poppins">Cart</a>
        <a href="{{ route('about') }}" class="poppins">About Us</a>

    </nav>    

    <div class="flex-column container">
        <div class="flex-column poppins product-title">
            <h1>{{ $produk->nama_produk }}</h1>
            <h2>Rp{{ number_format($produk->harga, 2) }}</h2>
        </div>
        <br><br><br>
        <div class="flex-row product-detail">
            <div class="flex-row product-photo">
                <img src="{{ \Storage::url($produk->foto) }}" alt="{{ $produk->nama_produk }}">
            </div>
            <div class="flex-column poppins product-description">
                <h3>Description</h3>
                <div class="flex-column poppins product-spec">
                    <p>{{ $produk->deskripsi_produk }}</p>
                    <p>Stok: {{ $produk->qty }}</p>
                </div>


                <form action="{{ route('addtocart', $produk->id) }}" method="post">
                    @csrf
                    <div class="flex-row poppins product-size">
                        <label for="size">Size:</label><br>
                        <select name="size_produk" id="size_produk">
                            <option disabled selected value="">Select ur size</option>
                            @foreach ($produk->size_produk as $item)
                                <option value="{{$item}}">{{$item}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="flex-row poppins product-action">
                        <div class="flex-row poppins input-qty">
                            <input type="number" name="jumlah_pesan" min="1" value="1">
                        </div><br>
                        <button type="submit" name="buy">Add to Cart</button>
                        <script>
                            function Cart() {
                                alert("Added to Cart!");
                            }
                        </script>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <br><br><br>
    <footer class="flex-column">
        <div class="flex-row foot-sosmed">
            <a href="http://instagram.com"><i class="fa fa-instagram" style="font-size:60px;color:#454545;"></i></a>
            <a href="http://twitter.com"><i class="fa fa-twitter" style="font-size:60px;color:#454545;"></i></a>
            <a href="http://facebook.com"><i class="fa fa-facebook" style="font-size:50px;color:#454545;"></i></a>
        </div>
        <span class="poppins">© 2021 TheShoeBox. All Rights Reserved.</span>
    </footer>
</body>

</html>
