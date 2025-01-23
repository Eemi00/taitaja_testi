<?php
$con = new mysqli("localhost", "root", "");

if ($con->connect_error) {
    die("Testi epäonnistui: " . $con->connect_error);
}

echo "Onnistui"
?>