<!-- Web Design & Development Project Created by:
   Ganatheepan Ganeshalingam - 8625997
   Solo-Project -->
<?php

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "loginsystem";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);
if(!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}
?>