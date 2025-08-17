<?php

function loginuser($username, $password) {
    require './backend/db.php';

    $stmt = $conn->prepare("SELECT password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        $hashed_password = $row['password'];

        // ✅ Correctly verify password
        if (password_verify($password, $hashed_password)) {
            return true;
        }
    }

    return false; // Either user not found or password invalid
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $password = $_POST["password"];

    // ✅ Call login function and check result
    if (loginuser($username, $password)) {
        // ✅ Login successful — redirect
        header("Location: ./order tab.php");
        exit;
    } else {
        // ❌ Login failed — show message or redirect back
        echo "Invalid username or password.";
        // Optionally redirect with error:
         
        exit;
    }
}
?>
