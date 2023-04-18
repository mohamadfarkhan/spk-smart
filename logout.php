<?php
    session_start();
echo "<script type ='text/JavaScript'>alert('Logout berhasil')</script>";
session_destroy();
header("location:login.php?message=logout");
