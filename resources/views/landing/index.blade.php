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
    <style>.member {
    margin-bottom: 20px; /* Menambahkan jarak antara setiap anggota tim */
}</style>

</head>

<body>
@include('components.navbar')
<section class="header mb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 slide-in">
                <h1 class="jumbo-header mb-30">
                    Cari Tiket Wisata<br>
                    Nyaman & Murmer
                </h1>
                <p class="paragraph mb-30">
                    Selamat datang di portal pariwisata Jawa Timur, di mana petualangan tak terbatas menanti Anda. Mulai petualangan <br> Anda sekarang dan jadikan setiap langkah di Jawa Timur tak terlupakan.
                </p>
                <p class="mb-50"><a href="{{route('landing.kategori')}}" class="btn btn-primary">Explore</a></p>
            </div>
            <div class="col-lg-6">
                <img src="images/banner.png" alt="" class="img-fluid fade-in">
            </div>
        </div>
    </div>
</section>
<section class="best-items">
    <div class="container">
        <div class="row text-center mb-50">
            <div class="col-lg-12">
                <img src="images/ic_best.svg" height="42" alt="" class="mb-16">
                <h3 class="big-header">
                    Best of The Best
                </h3>
                <p class="paragraph">
                    Tempat Terpopuler di Jawa Timur
                </p>
            </div>
        </div>
        <div class="row">
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
                                    Rp. {{ $key->price }}
                                </p>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>

<section class="ourteam" id="ourteam">
    <div class="layar-dalam">
        <div class="row text-center mb-50">
            <div class="col-lg-12">
                <h3 class="big-header">
                    Our Team
                </h3>
            </div>
        </div>
        <div class="tim">
            <div class="member">
                <img src="images/hana.png" alt="Demul" class="member-image">
                <p class="member-name">Hana</>
                <h4 class="member-role"></>
            </div>
            <div class="member">
                <img src="images/ivan.png" alt="Shiddiq" class="member-image">
                <p class="member-name">Ivan</>
                <h4 class="member-role"></>
            </div>
            <div class="member">
                <img src="images/thareeq.png" alt="Rizqi" class="member-image">
                <p class="member-name">Thareeq</>
                <h4 class="member-role"></>
            </div>
            <div class="member">
                <img src="images/dayat.png" alt="Ivan" class="member-image">
                <p class="member-name">Dayat</>
                <h4 class="member-role"></>
            </div>
            <div class="member">
                <img src="images/maulana.png" alt="Username" class="member-image">
                <p class="member-name">Maulana</>
                <h4 class="member-role"></>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
<script src="{{ asset('js/script2.js') }}"></script>
</body>

</html>
