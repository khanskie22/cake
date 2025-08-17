<?php

function createuser($username,$password){
    require 'db.php';

    

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $stmt = $conn->prepare("INSERT into users (username,password) VALUES (?,?)");
    $stmt->bind_param("ss", $username,$hashed_password);
    $stmt->execute();
    $stmt->store_result();

}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input
    $username = trim($_POST["username"]);
        
    $password = $_POST["password"];
    }
createuser($username,$password);

header("Location: ../order tab.php");
exit;

function login(){

}

?>