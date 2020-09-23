<?php 
$user = 'drioac1@gmail.com';
$password = 'admin123';
// ======================== Login ========================
if(isset($_POST['submit'])){
    if($_POST['nama']== $user && $_POST['password'] == $password){
        // ======================== COOKIE ========================
        // setcokie(key,nilai,expire) = kalo nutup browser akan hilang
        setcookie('nama_user',$user,time()+120);
        // session = disimpan dalam server
        session_start();
        $_SESSION['nama_user'] = $user;

        header('Location: profile.php');
    }else{
        echo 'Login gagal';
    }
}

// ======================== SUPER GLOBAL ARRAY ========================
// bisa dipanggil di scope mana saja
echo($_SERVER['SERVER_NAME']);
?>


<form action="login.php" method="post">
    <input type="text" name="nama">
    <input type="password" name="password">
    <input type="submit" name="submit">
</form>