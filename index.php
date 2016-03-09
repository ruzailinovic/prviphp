<!DOCTYPE html>
<html>
<head>
    <title>Prvi PHP</title>
    <meta charset="utf-8"
</head>

<body>
<h1>Ruža je najjj</h1>

<?php
    echo('Ovo je prije odlomka<br>');
    echo('<br>');
    echo('Super, jos cemo dodati<br>');
    echo date ('d.m.Y');

    $ocjena=5;
    echo('<br>Vaša ocjena je: ' . $ocjena);

    $ocjena=1;
    echo('<br>Vaša slijedeća ocjena je: ' . $ocjena);


?>

<p>
    Ovo je odlomak
</p>
</body>
</html>