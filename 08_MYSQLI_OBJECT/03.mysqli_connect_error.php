<?php 
$koneksi = new mysqli("localhost", "root", "X");
echo $koneksi->connect_errno . "-" . $koneksi->connect_error;