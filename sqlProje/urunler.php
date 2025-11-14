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

</head>

<body>

    <!-- Menu kısmı baslangıc -->
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">ELORİA</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
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
                            <a class="nav-link" href="http://127.0.0.1:5501/urunler.html">urunler</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://127.0.0.1:5501/hakkimizda.html">hakkımızda</a>
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



    <!-- urunler kismi baslangıc -->
    <div class="container">
        <h1>URUNLER</h1>
        <div class="row">
            <div class="col-sm">
                <div class="card col-12 mt-0">
                    <img src="img/parfumA.jfif" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Armani</h5>
                        <p class="card-text">
                        <p>Stronger With You Intensely Edp 100 ml</p>
                        <p><strong>Price</strong>499.99 TL</p>
                        <p><strong>Kargo</strong> Bedava</p>
                        <a href="http://127.0.0.1:5501/urundetayA.html" class="btn btn-primary">Git</a>
                    </div>
                </div>
            </div>

            <div class="col-sm">
                <div class="card col-12 mt-0">
                    <img src="img/parfumB.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Armani</h5>
                        <p class="card-text">
                        <p>Stronger With You Intensely Edp 100 ml</p>
                        <p><strong>Price</strong>4999.99 TL</p>
                        <p><strong>Kargo</strong> Bedava</p>
                        <a href="http://127.0.0.1:5501/urundetayB.html#" class="btn btn-primary">Git</a>
                    </div>
                </div>
            </div>

            <div class="col-sm">
                <div class="card col-12 mt-0">
                    <img src="img/parfumD.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Armani</h5>
                        <p class="card-text">
                        <p>Stronger With You Intensely Edp 100 ml</p>
                        <p><strong>Price</strong>999.99 TL</p>
                        <p><strong>Kargo</strong> Bedava</p>
                        <a href="http://127.0.0.1:5501/urundetayD.html" class="btn btn-primary">Git</a>
                    </div>
                </div>
            </div>

            <div class="col-sm">
                <div class="card col-12 mt-0">
                    <img src="img/parfumE.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Armani</h5>
                        <p class="card-text">
                        <p>Stronger With You Intensely Edp 100 ml</p>
                        <p><strong>Price</strong>2499.99 TL</p>
                        <p><strong>Kargo</strong> Bedava</p>
                        <a href="http://127.0.0.1:5501/urundetayE.html" class="btn btn-primary">Git</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- urunler kısmi bitiş -->




    <!-- footer baslangıc -->
    <footer>
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