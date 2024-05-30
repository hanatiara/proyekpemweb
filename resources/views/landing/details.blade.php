<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $items->title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>

<body>
@include('/components.navbar')
<section class="house-details pb-5">
    <div class="container">
        <div class="row align-items-center mb-30">
            <div class="col-lg-6">
                <h1 class="jumbo-header">
                    {{ $items->title }}
                </h1>
                <p class="paragraph">
                    Where dreams live begin without worried ipsum.
                </p>
            </div>
            <div class="col-lg-6 header">
                <h3 class="small-header">
                    (28,309)
                </h3>
                <div class="rating">
                    <img src="/images/ic_star.svg" height="28" alt="">
                    <img src="/images/ic_star.svg" height="28" alt="">
                    <img src="/images/ic_star.svg" height="28" alt="">
                    <img src="/images/ic_star.svg" height="28" alt="">
                    <img src="/images/ic_star_inactive.svg" height="28" alt="">
                </div>
            </div>
        </div>
        <div class="row gallery">
            <div class="col-lg-6 mb-30">
                <img src="/images/{{ $items->image }}" style="border-radius: 30px; width: 1500vh; height: 41.5vh" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 mb-30">
                <img src="/images/hd2.png" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 mb-30">
                <img src="/images/hd3.png" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 mb-30">
                <img src="/images/hd4.png" class="img-fluid" alt="">
            </div>
        </div>
        <div class="row house-informations">
            <div class="col-lg-7">
                <h3 class="small-header mb-10">
                    About Listing
                </h3>
                <p class="paragraph mb-30">
                    We are in a building of from the 1800's, in a quiet street but in the heart of historic Turin.
                    to 10 min. the biggest square in Europe "Piazza Vittorio" where ther's the night life.
                    Convenient to all services. In the district you can find every day a local market with fresh
                    produce, but there are also different supermarket.
                </p>
                <h3 class="small-header mb-10">
                    Features
                </h3>
                <div class="row features">
                    <div class="col-lg-10">
                        <div class="row">
                            <div class="col-lg-6">
                                <img src="/images/ic_wifi.svg" class="icon" alt="">
                                <div class="info">
                                    <h3 class="small-header mb-0">
                                        Wifi 180GBs
                                    </h3>
                                    <p class="paragraph">
                                        24 hours
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <img src="/images/ic_card.svg" class="icon" alt="">
                                <div class="info">
                                    <h3 class="small-header mb-0">
                                        Access Card
                                    </h3>
                                    <p class="paragraph">
                                        3 cards
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <img src="/images/ic_bell.svg" class="icon" alt="">
                                <div class="info">
                                    <h3 class="small-header mb-0">
                                        Receiptionist
                                    </h3>
                                    <p class="paragraph">
                                        24 hours
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <img src="/images/ic_park.svg" class="icon" alt="">
                                <div class="info">
                                    <h3 class="small-header mb-0">
                                        City Park
                                    </h3>
                                    <p class="paragraph">
                                        18 miles
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-4">
                <div class="booking">
                    <h3 class="small-header mb-16">
                        Start Renting
                    </h3>
                    <form>
                        <div class="item d-flex justify-content-between">
                            <p class="title paragraph2">
                                Harga
                            </p>
                            <p class="value medium-header">
                                Rp. {{ $items->price }}
                            </p>
                        </div>
                        <a href="/cart/{{ $items->id_category }}" type="submit" class="btn btn-primary w-100 mt-3">Add to Cart</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>
