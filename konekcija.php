<?php 

  define ("MYSQLI_HOST","localhost");
  define ("MYSQLI_USER","root");
  define ("MYSQLI_PASS","");
  define ("MYSQLI_DB","game_klub");

  function connect(){

    global $link ;
    $link=mysqli_connect(MYSQLI_HOST,MYSQLI_USER,MYSQLI_PASS,MYSQLI_DB) 
    or die('Greska '.mysqli_connect_error());
  }
  ?>