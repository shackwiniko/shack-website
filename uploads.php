<?php
session_start();
if(!isset($_SESSION['admin'])){
    header("Location: login.php");
}

if(isset($_POST['upload'])){
    $file = $_FILES['song'];
    $target = "uploads/" . basename($file['name']);
    move_uploaded_file($file['tmp_name'], $target);
    echo "Uploaded Successfully!";
}
?>

<form method="POST" enctype="multipart/form-data">
    <h2>Upload New Song</h2>
    <input type="file" name="song"><br><br>
    <button type="submit" name="upload">Upload</button>
</form>