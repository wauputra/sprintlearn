<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If dan Else | Belajar PHP</title>
</head>
<body>
    <?php
        //IF dan Else
        $password = '123';
        if($password == '143'){
            echo "Password Benar";
        }else{
            echo "Password Salah";  
        }
        echo "<br><br>";
        //operator logika
        // ==, ===, >, >=, <, <=, !=
        $password2 = 123;
        if($password === $password2){
            echo "Password Benar";
        }else{
            echo "Password Salah";  
        }
        echo "<br><br>";
        //if elseif dan if bercabang
        $uang_programmer    = 1000;
        $keyboard           = 3000;
        $uang_designer      = 4000;

        if($uang_programmer > $keyboard){
            echo 'Dibeli';
        }else if($uang_designer > $keyboard){
            echo 'Dibeli oleh designer';
            //if bercabang
            if($uang_programmer > $keyboard*2){
                echo "dibeli duakali oleh designer";
            }
        }else{
            echo 'Engga cukup';
        }
    ?>
</body>
</html>