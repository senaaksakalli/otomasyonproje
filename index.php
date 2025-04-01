<?php
require 'includes/database.php';

?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cilt Bakımı Otomasyonu</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; padding: 20px; }
        nav { margin-bottom: 20px; }
        a { text-decoration: none; margin: 10px; padding: 10px 15px; border: 1px solid #ccc; border-radius: 5px; display: inline-block; }
        a:hover { background: #ddd; }
    </style>
</head>
<body>

    <h1>Cilt Bakımı Otomasyonu</h1>
    <nav>
        <a href="login.php">Giriş Yap</a>
        <a href="register.php">Kayıt Ol</a>
        <a href="profile.php">Profilim</a>
        <a href="cilt_rutinleri.php">Cilt Bakımı Rutinim</a>
        <a href="beslenme_onerileri.php">Beslenme Önerileri</a>
        <a href="istek_sikayet.php">İstek & Şikayet</a>
    </nav>

    <p>Hoş geldiniz! Cilt sağlığınız için öneriler almak ve kişisel bakım rutininizi takip etmek için yukarıdaki bağlantıları kullanabilirsiniz.</p>
    <?php include 'includes/header.php'; ?>
<?php include 'includes/footer.php'; ?>

</body>
</html>
