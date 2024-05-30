<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Our Team</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .team-member {
            margin-bottom: 30px;
        }

        .member-info {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        @media (min-width: 768px) {
            .team-member {
                margin-bottom: 0;
            }
        }
    </style>
</head>

<body>
@include('components.navbar')
<section class="team-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center">
                <h4 class="big-header">
                    Our Team
                </h4>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team-member text-center">
                    <div class="member-info">
                        <img src="images/hana.png" class="img-fluid mb-3" style="border-top-left-radius: 20px; border-top-right-radius: 20px; border-bottom-left-radius: 20px; border-bottom-right-radius: 20px; width: 520px; height:350px">
                        <h2 class="h4">Hana Tiara Fadhilah</h2>
                        <p class="text-muted">Quotes</p>
                        <p class="mb-0">"Jangan pernah menyerah pada impianmu, karena setiap langkah kecil adalah bagian dari perjalanan menuju kesuksesan."</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team-member text-center">
                    <div class="member-info">
                        <img src="images/ivan.png" class="img-fluid mb-3" style="border-top-left-radius: 20px; border-top-right-radius: 20px; border-bottom-left-radius: 20px; border-bottom-right-radius: 20px; width: 520px; height:350px">
                        <h2 class="h4">Ivan Rifanda Sharif</h2>
                        <p class="text-muted">Quotes</p>
                        <p class="mb-0">"Kesuksesan bukanlah kunci kebahagiaan. Kebahagiaanlah yang menjadi kunci kesuksesan. Jika Anda mencintai apa yang Anda lakukan, Anda akan sukses."</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team-member text-center">
                    <div class="member-info">
                        <img src="images/thareeq.png" class="img-fluid mb-3" style="border-top-left-radius: 20px; border-top-right-radius: 20px; border-bottom-left-radius: 20px; border-bottom-right-radius: 20px; width: 520px; height:350px">
                        <h2 class="h4">Muhammad Thareeq Ad - Dakhil</h2>
                        <p class="text-muted">Quotes</p>
                        <p class="mb-0">"Pemujaan yang berlebihan itu tidak sehat"</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team-member text-center">
                    <div class="member-info">
                        <img src="images/dayat.png" class="img-fluid mb-3" style="border-top-left-radius: 20px; border-top-right-radius: 20px; border-bottom-left-radius: 20px; border-bottom-right-radius: 20px; width: 520px; height:350px">
                        <h2 class="h4">Hanidura Ayatulloh</h2>
                        <p class="text-muted">Quotes</p>
                        <p class="mb-0">"Ketika satu pintu tertutup, pintu lain akan terbuka. Tapi seringkali kita terlalu lama melihat pintu yang tertutup itu sehingga kita tidak melihat pintu lain yang telah terbuka untuk kita."</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team-member text-center">
                    <div class="member-info">
                        <img src="images/maulana.png" class="img-fluid mb-3" style="border-top-left-radius: 20px; border-top-right-radius: 20px; border-bottom-left-radius: 20px; border-bottom-right-radius: 20px; width: 520px; height:350px">
                        <h2 class="h4">Maulana Khoirusyifa'</h2>
                        <p class="text-muted">Quotes</p>
                        <p class="mb-0">"Kegagalan adalah kesempatan untuk memulai lagi dengan lebih bijak. Jangan takut untuk mencoba dan jatuh, karena dari situlah kita belajar dan berkembang."





                        </p>
                    </div>
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
