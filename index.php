<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>LOMWE MUSIC - Ukaswiri</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <img src="images/logo.jpg" class="logo">
    <h1>LOMWE MUSIC</h1>
    <p>Ukaswiri wa Nyimbo</p>

    <?php if(isset($_SESSION['admin'])): ?>
        <a href="upload.php" class="btn">Upload</a>
        <a href="logout.php" class="btn">Logout</a>
    <?php else: ?>
        <a href="login.php" class="btn">Admin Login</a>
    <?php endif; ?>
</header>

<div class="songs">
<?php
$folder = "uploads/";
$files = scandir($folder);

foreach($files as $file){
    if($file != "." && $file != ".."){
        echo "<div class='song'>";
        echo "<h3>$file</h3>";
        echo "<audio controls src='uploads/$file'></audio><br>";
        echo "<a href='uploads/$file' download class='download'>Download</a>";
        echo "</div>";
    }
}
?>
</div>

</body>
</html>