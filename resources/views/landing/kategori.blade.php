<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Webverse</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

</head>

<body>
@include('components.navbar')
<section class="best-items" style="margin-top: -80px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="big-header">
                    Terbaru
                </h3>
            </div>

            @foreach ($terbaru as $key)
            <div class="col-lg-3">
                <div class="item slide-in-left">
                    <a href="/kategori/{{ $key->id_category }}">
                        <img src="images/{{ $key->image }}" alt="" class="img-fluid" style="border-top-left-radius: 20px; border-top-right-radius: 20px; width: 520px; height: 250px">
                    </a>
                    <div class="info">
                        <a href="/kategori/{{ $key->id_category }}">
                            <h3 class="small-header mb-2">
                                {{ $key->title }}
                            </h3>
                        </a>
                        <div class="footer">
                            <div class="location d-flex flex-row ">
                                <img src="images/ic_loc.svg" height="20" alt="">
                                <p class="small-paragraph mb-0">
                                    {{ $key->location }}
                                </p>
                            </div>
                            <div class="price">
                                <p class="mb-0">
                                    Rp {{ $key->price }}
                                </p>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="col-lg-12">
                <h3 class="big-header">
                    Terpopuler
                </h3>
            </div>
            @foreach ($terpopuler as $key)
            <div class="col-lg-3">
                <div class="item slide-in-left">
                    <a href="/kategori/{{ $key->id_category }}">
                        <img src="images/{{ $key->image }}" alt="" class="img-fluid" style="border-top-left-radius: 20px; border-top-right-radius: 20px; width: 520px; height: 250px">
                    </a>
                    <div class="info">
                        <a href="/kategori/{{ $key->id_category }}">
                            <h3 class="small-header mb-2">
                                {{ $key->title }}
                            </h3>
                        </a>
                        <div class="footer">
                            <div class="location d-flex flex-row ">
                                <img src="images/ic_loc.svg" height="20" alt="">
                                <p class="small-paragraph mb-0">
                                    {{ $key->location }}
                                </p>
                            </div>
                            <div class="price">
                                <p class="mb-0">
                                    Rp {{ $key->price }}
                                </p>
                            </div>
                            <div class="clear"></div>
                            {{-- <div class="">
                                <p class=""><a href="#" class="btn btn-primary">Explore</a></p>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
<script src="{{ asset('js/script2.js') }}"></script>
</body>

</html>
