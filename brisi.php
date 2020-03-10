<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="stil2.css">
    <title>Document</title>
</head>
<body>
<?php
include 'konekcija.php';
connect();
$id=$_GET['id'];
$upit="Delete  from igrice where id_filma=$id";
if ($link->query($upit) === TRUE) {
    echo "<div id='brisanje'>Igrica je obrisana</div> <a id='vrt' href='user.php.'>Vrati me na profil</a>";
} else {
    echo "Greska kod brisanja <a href='user.php.'><div id='vmnp'>Vrati me na profil</div></a>" . $link->error;
}



?>
</body>
</html>