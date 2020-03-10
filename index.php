<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="stil2.css">
        <link rel="shortcut icon" href="https://media.indiedb.com/images/games/1/56/55894/game_icon_by_xxpixelpicturesxx-d.1.jpg" type="image/x-icon">
        
    </head>
    <body>
    <div id="login">
       
    <?php 
       include 'konekcija.php';
       session_start();

       if (isset($_POST['submit'])){
        $username=$_POST['username'];
        $password=$_POST['lozinka'];
        
        connect();

        $upit="SELECT * from korisnici where username='$username' and password='$password'";
        $rezultat=mysqli_query($link,$upit);
        if($rezultat->num_rows>0){
         $red=mysqli_fetch_row($rezultat);
         $id=$red[0];
         $admin=$red[1];
         $ime=$red[2];
         $prezime=$red[3];
         $adresa=$red[4];
         $datum=$red[10];

         $_SESSION['id']=$id;
         $_SESSION['admin']=$admin;
         $_SESSION['ime']=$ime;
         $_SESSION['prezime']=$prezime;
         $_SESSION['adresa']=$adresa;
         $_SESSION['datum']=$datum;


         echo '<script> window.location="user.php";</script>';

        }else {
        echo "<div id='greska' >Pogresan unos!</div>";

        }

       }

?>
	
<h1>Dobro došli na sajt za prodaju igrica!</h1>
      <div id="loginforma">
      <form method="POST" action="#">
      <p><input type="text" name="username" class="input" placeholder="Unesite vas username" required ></p>
      <p><input type="password" class="input" name="lozinka" placeholder="Unesite lozinku" required></p>
      
      <p>
      <input type="submit" name="submit" value="Login">
      
      <INPUT type="button" value="Registruj se" onClick="window.open('registracija.php')">
      <div id="mrq"> <marquee> Project by Novak Stojanović</marquee> </div>
      
      </form>
      </div>   
        </div>
        <script src="" async defer></script>
        
    </body>
</html>

