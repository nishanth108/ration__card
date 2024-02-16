<?php
require 'constants.php';

// connect to the database

$connection = new mysqli(DB_HOST, DB_USER,DB_PASS, DB_NAME);

//checking any error in the connection

if(mysqli_errno($connection)) {
    die(mysqli_error($connection));
}