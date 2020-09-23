<a href="login.php">Login</a>
<br>
<?php
    // echo "Ini adalah profile ".$_COOKIE['nama_user'];
    session_start();
    echo "Ini adalah profile ".$_SESSION['nama_user'];
?>
<br>
<a href="logout.php">Logout</a>
<br>
