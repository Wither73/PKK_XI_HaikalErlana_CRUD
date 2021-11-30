<?php
// $GET data ini tersedia dengan cara GET

$siswa = [
    [
        "Nama" => "Haikal",
        "Umur" =>"16",
        "Hobi" =>"Game dan Coding"
    ]
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>

<body>
    <h1>Daftar Siswa</h1>

    <ul>
        <?php foreach ($siswa as $sws): ?>
            <ul>
                <li><a href="belajar2.php?Nama=<?= $sws["Nama"];?>
            &Umur=<?= $sws ["Umur"];?>
            &Hobi=<?= $sws ["Hobi"];?>
                 "><?= $sws["Nama"];?></li>
            </a>
        </ul>
    <?php endforeach; ?>
    </ul>

</body>

</html>