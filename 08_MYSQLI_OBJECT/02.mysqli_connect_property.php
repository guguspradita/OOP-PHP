<?php 
$koneksi = new mysqli("localhost", "root", "");

echo $koneksi->affected_rows; echo "<br>";
echo $koneksi->client_info; echo "<br>";
echo $koneksi->connect_errno; echo "<br>";
echo $koneksi->server_info; echo "<br>";