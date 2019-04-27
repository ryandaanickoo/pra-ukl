<?php

//mengaktifkan session
session_start();

include '../config.php';

//menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];

//menyeleksi sesuai dengan level
$login = mysqli_query($db, "select * from user where username='$username' and password='$password'");

$cek = mysqli_num_rows($login);

if($cek > 0){
    $data = mysqli_fetch_assoc($login);

    if($data['level']=='admin'){
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "admin";
        header("location:../index.php"); 
    }


}