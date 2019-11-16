<?php
require 'bootstrap.php';
require 'Rijndael.php';
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
<form  align ='middle' method="post">
    <h1 ><font color="#ffd700"> Encrypt with Rijndael</font> </h1>
    <div class="form-wrap">
        <div class="profile">
        </div>
        <div>
            <label for="text"> <font color="#ffd700">text</font></label>
            <input type="text" name="text" required>
        </div>
        <div>
            <label for="key"> <font color="#ffd700">key </font></label>
            <input type="key" name="key" required>
        </div>
    </div>
    <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" id="defaultUncheckedDisabled2" name="encrypt">
        <label class="custom-control-label" for="defaultUncheckedDisabled2"> <font color="#ffd700">encrypt </font></label>
    </div>

    <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" id="defaultCheckedDisabled2" name="decrypt">
        <label class="custom-control-label" for="defaultCheckedDisabled2">  <font color="#ffd700">decrypt </font></label>
    <div class="container">
        <div class="select-arrow"></div>
        <button type="submit" class="btn btn-outline-primary">Exactly</button>
    </div>
    </div>
</form>
<form method="LINK" action="cipher.php">
    <div class="container">
    <div class="select-arrow"></div>
    <input type="submit"  class="btn btn-outline-primary" value="Refresh">
    </div>
</form>
<div class="container">
    <div class="select-arrow"></div>
    <button type="submit" onclick='location.href="form.php"' class="btn btn-outline-primary">Exit</button>
</div>
<?php
$key = $_POST['key'];
$text = $_POST['text'];

if($_POST['encrypt'] == true)
{
    encrypted($text, $key);
}
if($_POST['decrypt'] == true) {
 decrypt($text, $key);
}
// функция для расшифровки
function decrypt($encrypted, $key)
{
    $blockSize = 256;
    $aes = new Rijndael($encrypted, $key, $blockSize);
    $enc = $aes->decrypt();
    $aes->setData($enc);
    $aes->setMethode($blockSize, $mode = 'CBC');
   $dec=$aes->encrypt();
    echo " <font color= orange>After encryption: $enc </font>". "<br/>";
    echo "<font color= orange> After decryption:  $dec </font>". "<br/>";
}
// функция для зашифроки
function encrypted($decrypted, $key)
{
    $blockSize = 256;
    $aes = new Rijndael($decrypted, $key, $blockSize);
    $enc = $aes->encrypt();
    $aes->setData($enc);
    $dec=$aes->decrypt();
    echo " <font color= #ff8c00>After encryption: $enc </font>". "<br/>";
    echo "<font color= #ff8c00> After decryption:  $dec </font>". "<br/>";
}
?>
</body>
</html>