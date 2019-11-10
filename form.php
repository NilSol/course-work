<?php
require 'bootstrap.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body{
            background: #343d46;
        }
        .container .btn:hover {
            background-color: black;
            color: white;
        }
    </style>
    <title>курсовая работа</title>
</head>
<body>
<form  align ='middle' action="cipher.php">
    <h1 ><font color="#ffd700"> Want to use Rijndael? </font> </h1>
    <div class="container">
        <div class="select-arrow"></div>
        <button type="submit" class="btn btn-outline-primary">Exactly</button>
    </div>
</form>
</body>
</html>
