<?php

$sname= "localhost";

$unmae= "root";

$password = "";

$db_name = "zenith_reg";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {

    echo "Connection failed!";
}
else{
    echo " Connection Succeful";
}
