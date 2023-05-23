<?php

    $servername = "localhost";
    $username = "id20678794_staff";
    $password = "Pwg7*yMx-D6>y06%";
    $dbname = "id20678794_login";

$con = mysqli_connect($servername,$username,$password,$dbname);
    
 if(mysqli_connect_error()){
    echo "cannot connect";
 }

?>