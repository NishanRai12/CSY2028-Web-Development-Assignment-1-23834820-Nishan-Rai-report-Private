<?php

$servername = 'mysql'; // server name
$username = 'student'; // username
$password = 'student'; // password for connecting
$databasename = 'ijdb'; //database name

//this connects php to  the database
$Connection = new PDO('mysql:dbname=' .$databasename. ';host=' .$servername, $username, $password);
if($Connection){
    echo "Connected";
}
else{
    echo "not connected";
}
?>