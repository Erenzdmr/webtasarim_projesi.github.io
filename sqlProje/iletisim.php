<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="iletisim.css">
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
    <!-- Menu kısmı bitis -->


    <!-- bilgiler giriş -->
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h1>İLETİŞİM</h1>
                <h6>Bizimle iletişime geçmek için aşağıda ki formu doldurabilir veya iletişim bilgilerimizi
                    kullanabilirsiniz.
                </h6>
                <p><strong>Adres: </strong>Zeytinburnu belediyesi İstanbul Türkiye</p>
                <p><strong>Email:</strong>İnfo@parfumdunyasi.com</p>
                <p><strong>Telefon : </strong> +90 555 000 00 00</p>
            </div>

            <!-- From giriş -->
            <div class="col-sm-6">
                <form method="post" action="iletisim.php">
                    <div class="form-group">
                        <input type="text" name="isim" class="form-control form-control-lg" placeholder="Isim Soyisim" id="isimInput" aria-describedby="emailHelp">
                        <small id="emailHelp" name="isim" class="form-text text-muted">Bu alan zorunludur.</small>
                    </div>

                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Email Adres" id="email"
                            aria-describedby="emailHelp">
                        <small id="emailHelp" name="email" class="form-text text-muted">Bu alan zorunludur.</small>
                    </div>

                    <div class="form-group">
                        <input type="text" name="konu" class="form-control" placeholder="Konu">
                    </div>

                    <div class="form-group">
                        <input type="text" name="mesaj" class="form-control" placeholder="Mesaj">
                    </div>
                    <div class="form-group">
                        <button type="submit" name="kaydet">Gönder</button>
                    </div>
                </form>
            </div>
            <!-- form çıkış -->
        </div>
    </div>
    <!-- bilgiler çıkış -->






    <!-- Harita baslangıç -->
    <div class="container">
        <div class="harita mt-5">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3009.3301814305284!2d28.89663861524851!3d40.993334379301735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caa3f848226b4d%3A0x50c9b1dbf701348a!2sZeytinburnu%20Belediyesi!5e0!3m2!1str!2str!4v1623940398315!5m2!1str!2str"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" width="100%">
            </iframe>
        </div>
    </div>
    <!-- Harita bitiş-->

    

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



<?php
// include("baglanti.php");

if ($_SERVER["REQUEST_METHOD"]== "POST") {
    $conn = new mysqli("localhost","root","","uyelik");

    if ($conn->connect_error) {
        die("bağlantı hatası".$conn->connect_error);
    }

    //formdan gelenler
    $AdSoyad=$_POST["isim"];
    $Email=$_POST["email"];
    $Konu=$_POST["konu"];
    $Mesaj=$_POST["mesaj"];
    
    //SQL sorgusu
    $sql = "INSERT INTO iletisim (adsoyad,email,konu,mesaj)
    VALUES ('$AdSoyad','$Email','$Konu','$Mesaj')";   


    //sorguyu çalıştırır
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Mesajınız basarıyla gönderildi.');</script>";
    }else{
        echo "hata: ".$sql . "<br>" . $conn->error;
    }

    //Bağlantıyı kapat
    $conn->close();
}



// formdan veri girişi


// if ($calistirekle) {
//     echo '<div class="alert alert-success" role="alert">
//         Kayot basarılı bir sekilde eklendi.
//     </div>';
// }
// else{
//     echo '<div class="alert alert-success" role="alert">
//         Kayıt eklenirken bir problem oluştu. 
//     </div>';

// }



// $sorgu = "SELECT * FROM kullanicilar";

// $liste = $baglanti->query($sorgu);

// echo(mysqli_num_rows($satir)); //satir sayısını verir.

// // Tablodan kişi bilglierini çekme
// while ($satir = $liste->fetch_assoc()){     //fetch_assoc : satırları böler
//     print_r( ["id=".$satir["id"]." AdSoyad=".$satir["AdSoyad"]." Email=".$satir["Email"]." Konu=".$satir["Konu"]." Mesaj=".$satir["Mesaj"]."<br>"]);
// }

//sorguyu çalıştır





?>