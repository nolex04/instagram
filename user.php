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
 session_start();
 $id=$_SESSION['id'];
 $ime=$_SESSION['ime'];
 $prezime=$_SESSION['prezime'];
 $adresa=$_SESSION['adresa'];
 $datum=$_SESSION['datum'];

 echo "<div id='meni'> Dobro dosli $ime $prezime :) </div><P>";
 include_once('meni.php');
 ?>
 <div id="glavni">
<div class="format pregled">
<table id="prvaTabela">
><caption> <div id="mp">Moj Profil</div></caption>
<tr><td class="naslov"> Ime: </td><td><?php echo $ime . $id ?></td></tr>
<tr><td class="naslov"> Prezime: </td><td><?php echo $prezime ?></td></tr>
<tr><td class="naslov"> Adresa: </td><td><?php echo $adresa ?></td></tr>
<tr><td class="naslov"> Datum registracije: </td><td><?php echo $datum ?></td></tr>
</table>
<?php 
if ($_SESSION['admin']==1)
{
 echo "<a href='dodajfilm.php' id='dodajigricu'> Dodaj igricu</a>";	


}

?>
</div>
 


<div class="format pregled2">
 <table id="filmovitabela"> 
 <caption><div id="igrice"> Igrice</div></caption>
 <tr><td class="naslov">Naziv igrice</td><td class="naslov">Kategorija</td><td class="naslov">Proizvodjač</td>
 <td class="naslov">Godina izdanja</td><td class="naslov">Cena</td><td>Kupi</td></tr>

 <?php 

 include 'konekcija.php';
 connect();
 $upit="SELECT * FROM igrice";
 $rezultat=mysqli_query($link,$upit) or die (" Greska pri upitu".mysqli_error($link));
 if (mysqli_affected_rows($link)>0){
 
     while ($red=mysqli_fetch_array($rezultat)){
       $id=$red[0];
       $naziv=$red[1];
       $kategorija=$red[2];
       $proizvodjač=$red[3];
       $godina=$red[4];
       $cena=$red[5];
       echo "<tr><td> ".$naziv."</td><td>$kategorija</td><td>$proizvodjač</td>
       <td>$godina</td><td>$cena</td><td><a href='kupovine.php?id=$id' >Kupi </td>";


       if ($_SESSION['admin']==1){
             echo "<td><a href='brisi.php?id=$id'>Brisi</td>";
       }     
       "</tr>";
     }


 }else  { echo "<div id='trn'>Trenutno nema igrica</div>";
}

?>
</table>
</div>
</div>
<a id="kraj" href="kraj.html">Klikni me</a>
</body>
</html>

