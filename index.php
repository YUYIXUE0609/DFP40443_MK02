<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profil Saya</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Profil Diri</h1>

    <?php include 'biodata.php'; ?>  

    <p>Nama: <?= $nama ?></p>
    <p>No. Matrik: <?= $nomatrik ?></p>
    <p>Kelas: <?= $kelas ?></p>

    <img src="profile.png" alt="Foto Saya" width="200">
</body>
</html>

