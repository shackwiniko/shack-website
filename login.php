<?php
session_start();

if($_POST){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == "admin" && $password == "2001"){
        $_SESSION['admin'] = true;
        header("Location: index.php");
    } else {
        echo "Wrong Login!";
    }
}
?>

<form method="POST">
    <h2>Admin Login</h2>
    <input type="text" name="username" placeholder="Username"><br><br>
    <input type="password" name="password" placeholder="Password"><br><br>
    <button type="submit">Login</button>
</form>