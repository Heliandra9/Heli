<?php

$host="localhost";
$username="root";
$password="";
$dbname="apotek";
$con = mysqli_connect($host, $username, $password, $dbname);
if ($con -> connect_errno) {
    echo "koneksi eror";
}