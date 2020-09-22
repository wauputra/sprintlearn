<?php
    // ============== GET dan POST ===============
    // isset = datanya udah diset atau belum

    if(isset($_GET['submit'])){
        $nama = $_GET['nama'];
        echo '<br>Namanya adalah : '.$nama;
    }

    if(isset($_POST['submit1'])){
        $nama = $_POST['nama1'];
        echo '<br>Namanya adalah : '.$nama;
    }
?>

<h1>GET</h1>
<form action="" method="get">
    <input type="text" name="nama">
    <input type="password" name="password">
    <input type="submit" name="submit">
</form>

<h1>POST</h1>
<form action="" method="post">
    <input type="text" name="nama1">
    <input type="password" name="password1">
    <input type="submit" name="submit1">
</form>

<h1>LOGIN KE PROFILE MU</h1>
<form action="profile.php" method="get">
    <input type="text" name="nama">
    <input type="password" name="password">
    <input type="submit" name="submit">
</form>