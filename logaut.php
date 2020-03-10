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
session_destroy();
header('Location: index.php');
exit;
?>
</body>
</html>