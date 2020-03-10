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
$id_filma=$_GET['id'];

if(isset($_POST['submit'])){
session_start();
$korisnik=$_SESSION['id'];
$cena=rand(0,1000);
$datum=date("Y-m-d");


$upit="INSERT INTO KUPOVINE VALUES(null,$id_filma,$korisnik,'$datum',$cena)";
$rezultat=mysqli_query($link,$upit);
if(mysqli_affected_rows($link)>0){

 echo "<script> alert('Ubacena kupovina'); ";
 echo "window.location.href='user.php';";
 echo "</script>";
 die();
}


else {

  echo  "<script> alert('Greska kod kupovine') </script>";

}


}

$upit="select * from igrice where id_filma='$id_filma'";
$rezultat=mysqli_query($link,$upit) or die("greska pri upitu".mysqli_error($link));

if(mysqli_affected_rows($link)>0){

while($red=mysqli_fetch_array($rezultat)){
$id_filma=$red[0];
$naziv=$red[1];
$kategorija=$red[2];
$proizvodjač=$red[3];
$godina=$red[4];
$cena=$red[5];

echo '<form method="post"  action="#"><div id="kupovinaa"> Kupicete igricu '.$naziv.' po ceni od '.$cena.' dinara?</div></br>';
echo '<tr><button type="submit" id="dugmee" name="submit">Kupujem!</button></td></tr></form>';

}
}



else {
    echo "Doslo je do greske";
}



?>
</body>
</html>