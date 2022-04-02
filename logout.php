<?php 
require 'koneksi/koneksi.php';

session_start();
session_destroy();
echo '<script>alert("Berhasil logout !")</script>';
echo "<meta http-equiv='refresh' content='0 url=sign_in.php'>";
?>