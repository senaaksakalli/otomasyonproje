<!DOCTYPE html>
<button class="geri-don" onclick="history.back()">⬅ Geri Dön</button>
</html>
<?php
session_start();
session_destroy();
header("Location: login.php");
exit();
?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/footer.php'; ?>
