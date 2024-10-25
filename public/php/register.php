<?php
require_once("config.php");

$surel = $_POST['email'];
$sandi = $_POST['password'];

$sql = "INSERT INTO users (email, password) 
            VALUES (:email, :password)";
$stmt = $db->prepare($sql);




// bind parameter ke query
$params = array(
    ":password" => $sandi,
    ":email" => $surel
);

// eksekusi query untuk menyimpan ke database
$saved = $stmt->execute($params);

    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
    // if($saved) header("Location: login.php");
