<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="urunler.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libertinus+Mono&display=swap" rel="stylesheet">

    <style>
        html body {
            background-color: aliceblue;
        }

        .col-sm-6 img {
            height: 500px;
            border-radius: 40px;
        }

        .col-sm-6 {
            color: black;
            margin-top: 70px;
        }

        .col-sm-6 a{
            width: 200px;
            height: 40px;
        }

        .price {
            color: red;
        }


        footer {
            text-align: center;
            background-color: black;
            color: aliceblue;
            height: 50px;
            margin-top: 150px;
        }
    </style>

</head>

<body>

    <!-- Menu kısmı baslangıc -->
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">ELORİA</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- justify-content-end : saga kaydırma -->
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page"
                                href="http://localhost/sqlProje/anasayfa.php">anasayfa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/sqlProje/urunler.php">urunler</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/sqlProje/hakkimizda.php">hakkımızda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/sqlProje/iletisim.php">iletisim</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- Menu kismi bitis -->



    <!-- urun detay baslangıc -->
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/parfumA.jfif" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/parfumA.jfif" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/parfumA.jfif" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators"
                        data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators"
                        data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </button>
                </div>
            </div>

            <div class="col-sm-6" class="rounded float-left">
                <h2 class="urun-title">Eloria - Crystal Noir Edp 90 ml Kadın Parfüm</h2>
                <div class="price">449.99 TL</div>
                <p>90 ml EDP – Kadınlar için zarif, ocean kokusuna sahip bir parfüm.</p>
                <p><strong>Kargo:</strong> Ücretsiz</p>
                <p><strong>Ürün Kodu:</strong> ARM-SWYI-101</p>
                <a href="" class="btn btn-primary">Sepete Ekle</a>
                <a href="http://127.0.0.1:5501/urunler.html#" class="btn btn-primary">Geri</a>

            </div>

        </div>
    </div>
    <!-- urun detay bitis -->



    <!-- footer baslangıc -->
    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p>&copy; 2025 Eloria Parfüm Dünyası</p>
    </footer>
    <!-- footer bitis -->










    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
        integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+"
        crossorigin="anonymous"></script>
</body>

</html>