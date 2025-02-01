<?php

#------# Admin #------#

$adminPassword = '12345';
$adminEmail = 'estifanose@gmail.com';

#------# DataBase #------#

$userName = 'root'; #Db username
$dbName = 'heroexpert'; #Db name
$passWord = ''; #Db password

try {
    $connect = new PDO('mysql:host=localhost;dbname=' . $dbName, $userName, $passWord);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    #echo "Connecting Successfully";
} catch (Exception $e) {
    #echo "Connect Failed : " . $e->getMessage();
}
?>
