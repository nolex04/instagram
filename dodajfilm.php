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
   
   if (isset($_POST['submit'])){
	  session_start();
	
	 $naziv=$_POST['naziv'];
	 $kategorija=$_POST['kategorija'];
	 $proizvodjač=$_POST['proizvodjač'];
	 $godina=$_POST['godina'];
	 $cena=$_POST['cena'];
	 $id=$_SESSION['id'];
	 
	 include 'konekcija.php';
	 connect();
	 
	 $upit="INSERT INTO igrice VALUES(null,'$naziv','$kategorija','$proizvodjač','$godina','$cena','$id')";
	 $rezultat=mysqli_query($link,$upit);
	 if(mysqli_affected_rows($link)>0){
		 echo "<div id='poruka' >Uspešno ste dodali igricu u bazu <br>
			   <a id='odjava' href='user.php'>Vratite se na profil</a></div>";
				
	 }else {
		  echo " <div id='poruka2' >Greska kod ubacivanja filma
			   Vratite se na profil <a id='glavna' href='user.php'>Glavna strana</a></div>";
	 }
	 

			 
	   
	   
	   
   }

   ?>



<div id="podaci">
<form method="POST" action="#" id="info" style="width: 80%;">
<table>
 <caption id="unos"> Unesite novu igricu</caption>
 <tr> <td class="nasv">Naziv: </td><td><input type="text" id="naziv" name="naziv" placeholder="naziv">
 </td><tr>
 <tr> <td class="kat">Kategorija: </td><td><input type="text" id="zanr" name="kategorija" placeholder="kategorija">
 </td><tr>
 <tr> <td class="pro">Proizvodjač: </td><td><input type="text" id="reziser" name="proizvodjač" placeholder="proizvodjač">
 </td><tr>
 <tr> <td class="god">Godina izdanja: </td><td><input type="text" id="godina" name="godina" placeholder="godina">
 </td><tr>
 <tr> <td class="cen">Cena: </td><td><input type="text" id="cena" name="cena" placeholder="cena">
 </td><tr>
 <tr><td><button type="submit"  name="submit">Dodaj igricu</button> </td></tr>
 
 </table>
 </form>
 </div>
</body>
<a id="nazad" href="user.php">Nazad</a>
</html>