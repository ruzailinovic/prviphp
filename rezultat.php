<!DOCTYPE html>
<html>
<head>
    <title>Prvi PHP</title>
    <meta charset="utf-8">
</head>

<body>
<h1>Prvi PHP</h1>

<form method="post" action=""rezultat.php">
    Prvi broj:<br>
    <input type="text" name="broj1"><br>
    Drugi broj:<br>
    <input type="text" name="broj2"><br>
    <br>
    Treći broj:<br>
    <input type="text" name="broj3"><br>
    <br>
    <input type="text" name="ime"><br>
    <br>
    <input type="submit" value="Izračunaj">
</form>

<?php
echo('Vaše ime: ' . htmlspecialchars($_POST['ime']));

$rezultat = $_POST['broj1'] + $_POST['broj2']+ $_POST['broj3'];
echo('<br>' . $rezultat);
?>

<p>
    Ovo je odlomak
</p>
</body>
</html>