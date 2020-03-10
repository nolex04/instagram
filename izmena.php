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
?>

<form action="#" method="POST">
<table  id="izmenap">
<tr> <td id="podaci"> Ime korisnika:</td>
<td> <input type="text" name="ime" id="ime" value="<?php echo $_SESSION['ime']?>"></td>
</tr>
<tr> <td id="podaci">Prezime korisnika:</td>
<td> <input type="text" name="prezime" id="prezime" value="<?php echo $_SESSION['prezime']?>"></td>
</tr>
<tr> <td id="podaci"> Adresa:</td>
<td> <input type="text" name="adresa" id="adresa" value="<?php echo $_SESSION['adresa']?>"></td>
</tr>
<tr><td colspan="2"> <button type="submit" name="submit">Izmeni podatke</button></td>
</tr>
<a id="nazad" href='user.php'>Nazad</a>
</table>
</form>

<?php 

if(isset($_POST['submit'])){
	$novoime=$_POST['ime'];
	$novoprezime=$_POST['prezime'];
	$novaadresa=$_POST['adresa'];
	$korisnik=$_SESSION['id'];
	
	include 'konekcija.php';
	connect();
	
    $upit="UPDATE KORISNICI SET ime='$novoime', prezime='$novoprezime',adresa='$novaadresa' where id_usera=$korisnik;";
	$rezulat=mysqli_query($link,$upit) or die( "greska kod upita");
	
	$red=mysqli_affected_rows($link);
	
	if($red > 0){
		
		echo '<div id="izmena1">Uspešno ste izmenili vaše podatke</div>';
		
	}else {
		echo' <div id="grs">GREŠKA</div>';
	}	
	
	
}
?>
</body>
</html>


















