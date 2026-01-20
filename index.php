<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profil Saya</title>
    <link rel="stylesheet" href="style.css"> <!-- 引用 CSS 文件 -->
</head>
<body>
    <h1>Profil Diri</h1>

    <?php include 'biodata.php'; ?>  <!-- 引用 PHP 文件 -->

    <p>Nama: <?= $nama ?></p>
    <p>No. Matrik: <?= $nomatrik ?></p>
    <p>Kelas: <?= $kelas ?></p>

    <img src="profile.png" alt="Foto Saya" width="200">
</body>
</html>

