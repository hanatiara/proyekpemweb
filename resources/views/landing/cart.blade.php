<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Webverse</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="css/cart.css">




</head>
@include('components.navbar')
<body>

<div class="card">
    <div class="row">
        <div class="col-md-8 cart">
            <div class="title">
                <div class="row">
                    <div class="col"><h4><strong>Shopping Cart</strong></h4></div>
                    <div class="col align-self-center text-right text-muted">{{ $total_items }} items</div>
                </div>
            </div>
            @foreach ( $cart as $items )
            <div class="row border-top border-bottom">
                <div class="row main align-items-center">
                    <div class="col-2"><img class="img-fluid" src="images/{{ $items['image'] }}"></div>
                    <div class="col">
                        <div class="row text-muted">{{ $items['name'] }}</div>
                        {{-- <div style="margin-left: -3vh" class="row"><strong></strong></div> --}}
                    </div>
                    <div class="col">
                        <a href="/cart/dec/{{ $items['id'] }}" class="border">-</a><a href="#" class="border">
                            {{ $items['quantity'] }}
                        </a><a href="/cart/add/{{ $items['id'] }}" class="border">+</a>
                    </div>
                    <div class="col" style="color: #0D6EFD">Rp. {{ $items['price'] }} <span class="close"><a href="/cart/delete/{{ $items['id'] }}">&#10005;</a></span></div>
                </div>
            </div>
            @endforeach
            <div class="back-to-shop"><a href="{{route('landing.kategori')}}">&leftarrow; Back</a></div>
        </div>
        <div class="col-md-4 summary">
            <div><h5><strong>Summary</strong></h5></div>
            <hr>
            <div class="row">
                <div class="col"><strong>{{ $total_items }} ITEMS</strong></div>
                <div class="col text-right"><strong>Rp. {{$total_price}}</strong></div>
            </div>
            {{-- <form> --}}
                {{-- <p><strong>SHIPPING</strong></p>
                <select><option class="text-muted">Standard-Delivery- IDR5.00</option></select> --}}
                <p><strong>GIVE CODE</strong></p>
                <input id="code" placeholder="Enter your code">
            {{-- </form> --}}
            <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                <div class="col"><strong>TOTAL</strong></div>
                <div class="col text-right"><strong>Rp. {{$total_price}}</strong></div>
            </div>
            <a href="/checkout"><button class="btncart"><strong>CHECKOUT</strong></button></a>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
<script src="{{ asset('js/script2.js') }}"></script>
</body>
