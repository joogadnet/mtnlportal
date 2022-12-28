<?php

define('DB_SERVER', 'Localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'mtnlusers');

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

//check connection

//if ($link === false) {
    //die("Error: could not connect." . mysqli_connect_error());}
    //else {
   // echo "success";
 //   }

    //test

    if ($link == true) {
    echo "";
   } else {
    die("Error." . mysqli_connect_error());
   }