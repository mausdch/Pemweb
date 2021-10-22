<?php
$db = new mysqli("localhost", "root", "", "bio");

if(!$db){
    die('gagal' .mysqli_connect_error());
}