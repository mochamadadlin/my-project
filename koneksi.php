<?php
$hostname = "3.0.56.213";
$database = "shoppingdb";
$username = "fortest";
$password = "Pa55w0rd";
$connect = mysqli_connect($hostname, $username, $password, $database);
// script cek koneksi   
if (!$connect) {
    die("Koneksi Tidak Berhasil: " . mysqli_connect_error());
}