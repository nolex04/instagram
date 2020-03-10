<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="stil2.css">
    <script type="text/javascript">
   function provera(){
 var ime=document.getElementById("ime").value;
 if(ime==""){
     alert("Ime ne sme da bude prazno");
     return false;
 }
 return true;
   }
   </script>
</head>
<body>
    <div id="sredina">
    <a id="nazad" href="index.php">Nazad</a>
        <h1>Registracija</h1>
<form method="POST" action="insert.php">

<table>
    <tr>
        <td><input type="text" id="prezime" name="prezime" placeholder="Prezime " required><span class="crveno">*</span></td> 
    </tr>
    <tr>
    <td><input type="text" id="ime" name="ime" placeholder="Ime " required><span class="crveno">*</span></td> 
    </tr>
    <tr>
    <td><input type="text" id="adresa" name="adresa" placeholder="Adresa " required><span class="crveno">*</span></td> 
    </tr>
    <tr>
    <td><input type="text" id="mesto" name="mesto" placeholder="Mesto" required><span class="crveno">*</span></td> 
    </tr>
    <tr>
    <td><input type="text" id="Username" name="username" placeholder="username" required><span class="crveno">*</span></td> 
    </tr>
    <tr>
    <td><input type="password" id="lozinka" name="lozinka" placeholder="lozinka" required><span class="crveno">*</span></td> 
    </tr>
    <tr>
    <td><input type="text" id="jmbg" name="jmbg" placeholder="Jmbg" required><span class="crveno">*</span></td> 
    </tr>
    <tr>
    <td><input type="text" id="mail" name="mail" placeholder="mail" required><span class="crveno">*</span></td> 
    </tr>
    <tr> 
    <td><button type="submit" name="submit" onclick="provera()">Registruj se</button></td>
    </tr>
    </table>
    
    </form>
</div>
</body>
</html>    