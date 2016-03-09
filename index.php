<!DOCTYPE html>
<html>
<head>
    <title>Prvi PHP</title>
    <meta charset="utf-8"
</head>

<body>
<h1>Ruža je najjj</h1>

<form>
    Prvi broj:<br>
    <input type="text" name="broj1"><br>
    Drugi broj:<br>
    <input type="text" name="broj2"><br>
    <br>
    <input type="submit" value="Izračunaj"><br>
</from>



<?php
    echo('Ovo je prije odlomka<br>');
    echo('<br>');
    echo('Super, jos cemo dodati<br>');
    echo date ('d.m.Y');


    $rezultat = $_GET['broj1'] + $_GET['broj2'];
    echo('<br>' . $rezultat);

?>

<p>
    Ovo je odlomak
</p>
</body>
</html>