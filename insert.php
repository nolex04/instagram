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

$prezime=$_POST['prezime'];
$ime=$_POST['ime'];
$adresa=$_POST['adresa'];
$mesto=$_POST['mesto'];
$username=$_POST['username'];
$lozinka=$_POST['lozinka'];
$jmbg=$_POST['jmbg'];
$mail=$_POST['mail'];

$upit="INSERT INTO korisnici values(null,0,'$ime','$prezime','$adresa','$mesto','$username','$lozinka','$jmbg','$mail',CURRENT_TIMESTAMP)";
$rezultat=mysqli_query($link,$upit);
if (mysqli_affected_rows($link) >0) {
 echo "<script> alert('Uspesna registracija'); ";
echo "window.location.href='index.php';";
echo "</script>";

} else {
 echo "<script> alert('Greska prilikom registracije'); ";
echo "</script>";

}

?>
</body>
</html>