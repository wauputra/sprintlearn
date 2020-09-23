<?php

    if(isset($_POST['submit'])){
        // var_dump($_FILES);
        print_r($_FILES['file']['name']);
        $nama_file = $_FILES['file']['name'];
        $location_file = $_FILES['file']['tmp_name'];

        //  validasi gambar
        $error_file = $_FILES['file']['error'];
        $size_file = $_FILES['file']['size'];
        $format_file = $_FILES['file']['type'];
        $specific_format_file = pathinfo($nama_file, PATHINFO_EXTENSION);
        $namaSudahAda = 'upload/'.$nama_file;

        if($error_file == 0){
            if($size_file<1000000){
                if($format_file == 'image/png'){
                    // Mencegah file dengan nama kembar
                    if(file_exists($namaSudahAda)){
                        $time = time();
                        $replacee = str_replace(".png","",$nama_file);
                        move_uploaded_file($location_file, 'upload/'.$replacee.'.png');  
                        echo "berhasil mengupload";
                    }else{
                        move_uploaded_file($location_file, 'upload/'.$nama_file);  
                        echo "berhasil mengupload";
                    }
                }else{
                    echo "Format harus PNG";
                }
            }else{
                echo "Gambarnya kegedeaan";
            }
        }else{
            echo "Error";
        }
    }

?>

<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit" name="submit">
</form>