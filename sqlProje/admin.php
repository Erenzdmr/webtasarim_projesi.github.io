

<?php
session_start();
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: login.php");
    exit;
}


$conn = new mysqli("localhost", "root", "", "uyelik");
$conn->set_charset("utf8mb4");
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

$sql = "SELECT * FROM iletisim ORDER BY tarih DESC";
$result = $conn->query($sql);



?>

<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <title>Admin Panel - İletişim Mesajları</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container my-5">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h1>İletişim Mesajları</h1>
    <a href="logout.php" class="btn btn-danger">Çıkış Yap</a>
  </div>

  <?php if ($result->num_rows > 0): ?>
    <div class="table-responsive">
      <table class="table table-bordered table-striped table-hover">
        <thead class="table-dark">
          <tr>
            <th>#</th>
            <th>Ad Soyad</th>
            <th>Email</th>
            <th>Konu</th>
            <th>Mesaj</th>
            <th>Tarih</th>
          </tr>
        </thead>
        <tbody>
          <?php while($row = $result->fetch_assoc()): ?>
            <tr>
              <td><?= $row['id'] ?></td>
              <td><?= htmlspecialchars($row['AdSoyad']) ?></td>
              <td><?= htmlspecialchars($row['Email']) ?></td>
              <td><?= htmlspecialchars($row['Konu']) ?></td>
              <td><?= nl2br(htmlspecialchars($row['Mesaj'])) ?></td>
              <td><?= date("d.m.Y H:i", strtotime($row['Tarih'])) ?></td>
            </tr>
          <?php endwhile; ?>
        </tbody>
      </table>
    </div>
  <?php else: ?>
    <div class="alert alert-info text-center">Hiç mesaj yok 😢</div>
  <?php endif; ?>

</div>
</body>
</html>

<?php $conn->close(); 


?>


