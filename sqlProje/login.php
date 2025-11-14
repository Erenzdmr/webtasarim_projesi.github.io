<?php
session_start();


if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("Location: admin.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kullanici = $_POST["kullanici"];
    $sifre = $_POST["sifre"];

    $dogruKullanici = "Eren";
    $dogruSifre = "Eren2004";

    if ($kullanici === $dogruKullanici && $sifre === $dogruSifre) {
        $_SESSION["loggedin"] = true;
        header("Location: admin.php");
        exit;
    } else {
        $hata = "Kullanıcı adı veya şifre hatalı!";
    }
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <title>Giriş Yap</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center justify-content-center" style="height: 100vh;">
  <div class="card p-4 shadow" style="min-width: 300px;">
    <h2 class="text-center mb-3">🔐 Admin Girişi</h2>

    <?php if (!empty($hata)): ?>
      <div class="alert alert-danger"><?= $hata ?></div>
    <?php endif; ?>

    <form method="POST">
      <div class="mb-3">
        <label class="form-label">Kullanıcı Adı</label>
        <input type="text" name="kullanici" class="form-control" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Şifre</label>
        <input type="password" name="sifre" class="form-control" required>
      </div>
      <button type="submit" class="btn btn-dark w-100">Giriş Yap</button>
    </form>
  </div>
</body>
</html>







































<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>

<body>

 
     login -->
    <!-- <div class="col-sm-6">
        <form action="gonder.php" method="get">

            <div class="form-group">
                <label for="mail" class="form-label">Kullanici maili:</label>
                <input type="email" class="form-control" id="mail" name="mail">
                <small id="mail" class="form-text text-muted">Bu alan zorunludur.</small>
            </div>

            <div class="form-group">
                <label for="sifre" class="form-label">sifre:</label>
                <input type="password" class="form-control" id="sifre" name="sifre">
                <small id="sifre" class="form-text text-muted" id="mail">Bu alan zorunludur.</small>
            </div>


            <div class="form-group">
                <button type="submit" class="btn btn-primary">Gönder</button>
                <button type="reset" class="btn btn-danger">İptal</button>
            </div>
        </form>
    </div>


        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
            integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+"
            crossorigin="anonymous"></script>

<body>
</html>  -->