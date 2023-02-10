<?php 

try {
    $koneksi = new mysqli("localhost", "root", "X");
    if ($koneksi->connect_error) {
        throw new Exception ('Koneksi bermasalah (' . $mysqli->connect_errno . ') '. $mysqli->connect_error);
    } 
} catch (Exception $e) {
    echo $e->getMessage();
}