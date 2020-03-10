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
    <div id="kup">
<?php 
session_start();
include 'konekcija.php';
connect();
$admin=$_SESSION['admin'];
$id_korisnika=$_SESSION['id'];
$imePrezime=$_SESSION['ime']. " ".$_SESSION['prezime'];
$upit="";
$datum=date("Y-m-d");
if($admin==1)
{
 $upit="SELECT * FROM kupovine k join igrice i join korisnici ko on i.id_filma=k.id_filma and k.id_korisnika=ko.id_usera where k.datum_kupovine='$datum'";

}else{

$upit="SELECT  * from kupovine k join igrice i on i.id_filma=k.id_filma where id_korisnika=$id_korisnika;";
}
$rezultat=mysqli_query($link,$upit) or die("doslo je do greske kod upita");
if($rezultat->num_rows>0){

echo "<div class='tabela'><table>";
echo "<tr>";
echo "<td> Datum kupovine</td>";
echo "<td> Naziv igrice </td>";
echo "<td> Cena igrice </td>";
echo "<td> Cena isporuke </td>";
echo " <td> Ime i prezime korisnika</td>";
echo "</tr>";
while (($red=mysqli_fetch_row($rezultat))!=NULL){
    echo "<tr>";
    echo "<td>$red[3]</td>";
    echo "<td>$red[6]</td>";
    echo "<td> $red[10]</td>";
    echo "<td> $red[4]</td>";
    if(sizeof($red)>12){
        echo "<td> $red[14] $red[15]</td>";
    }else {
echo "<td> $imePrezime </td>";

    }
    echo "</tr>";
}

echo "</table> </div>";
echo "<p><a href='user.php' id='dugmee'>Moj profil</a></br> <a href='logaut.php' id='dugmee2'>Izloguj se</a></p>";
}else {
    echo "<p><div id='nema'>Trenutno nema kupovina</div> </br> <a id='nazad' href='user.php'> Nazad</a></br> <a id='odjava' href='logaut.php'>Izloguj se</a></p>";
}
?> 
</div>
</body>
</html>