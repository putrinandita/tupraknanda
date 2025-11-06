<?php
session_start();

$users = [
    "Admin" => "pass@admiN1",   
    "Anita" => "pass@anitA2",   
    "Sapta" => "pass@saptA3",   
    "nanda"  => "pass@nanda123"     
];

$username = $_POST['username'];
$password = $_POST['password'];

if (array_key_exists($username, $users)) {
    if ($users[$username] == $password) {    
        $_SESSION['username'] = $username;
        header("Location: index.php");
    } else {
        header("Location: login.php?pesan=gagal_pass");
    }
} else {
    header("Location: login.php?pesan=gagal_user");
}
?>