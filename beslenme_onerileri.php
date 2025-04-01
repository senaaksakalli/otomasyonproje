<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cilt_bakimi_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

session_start();
$_SESSION['kullanici_id'] = $kullanici_id; // Giriş yapan kişinin ID'si atanmalı
var_dump($_SESSION); // Kontrol için ekle
die(); // Çalışıp çalışmadığını görmek için


$kullanici_id = $_SESSION['kullanici_id'];

// Kullanıcının cilt tipini bul
$sql = "SELECT cilt_tipi_id FROM kullanicilar WHERE id = '$kullanici_id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$cilt_tipi_id = $row['cilt_tipi_id'];

// Cilt tipine göre beslenme önerilerini çek
$oneriler = $conn->query("SELECT oneri_metni FROM beslenme_onerileri WHERE cilt_tipi_id = '$cilt_tipi_id'");
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Beslenme Önerileri</title>
</head>
<body>
<button class="geri-don" onclick="history.back()">⬅ Geri Dön</button>

<h2>Cilt Tipinize Göre Beslenme Önerileri</h2>

    <?php if ($oneriler->num_rows > 0): ?>
        <ul>
            <?php while ($row = $oneriler->fetch_assoc()): ?>
                <li><?= htmlspecialchars($row['oneri_metni']) ?></li>
            <?php endwhile; ?>
        </ul>
    <?php else: ?>
        <p>Bu cilt tipi için beslenme önerisi bulunamadı.</p>
    <?php endif; ?>

    <p><a href="profile.php">Profil Sayfasına Dön</a></p>
    
</body>
</html>
<?php include 'includes/header.php'; ?>
<?php include 'includes/footer.php'; ?>
