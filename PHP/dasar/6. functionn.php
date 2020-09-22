<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fungsi | PHP</title>
</head>
<body>
    <?php
    //================fungsi================
    function print_text(){
        echo "==============";
        echo "Belajar Fungsi";
        echo "==============";
    }

    function jarak(){
        echo "<br>";
    }

    print_text();
    jarak();
    print_text();
    jarak();

    //================parameter================
    //variable yg dibuat saat mengambil fungsi
    function coba_parameter($text,$angka){
        echo "=======$angka====";
        echo $text;
        echo "==============";
    }

    coba_parameter("nyoba parameter",1);
    jarak();
    coba_parameter("nyoba parameter lagi",2);
    
    //================RETURN================
    //untuk mengembalikan nilai

    function menghitung($x, $y){
        $z = $x + $y;
        return $z;
    }

    $jumlah = menghitung(2,5) * 10;
    jarak();
    echo "Hasil dari penjumlahan adalah = " . $jumlah;

    //================SCOPE================ 
    //Lingkup hidup dalam variable, manggil variable diluar function

    $a = 2020;
    $b = 1997;

    function umur(){
        //ada dua opsi 
        //global $a,$b;
        //$c = $GLOBALS['a'] + $GLOBALS['b'];
        global $a,$b;
        $c = $a - $b;
        return $c;
    }
    jarak();
    echo "Umur saya adalah ".umur();

    //================ANONYMOUS FUNCTION================ 
    //fungsi yg tidak punya nama
    
    $ngetik = function($text){
        printf($text);
    };

    $greeting = $ngetik;
    $greeting('Ini adalah anonymous function');
    

    //================CALLBACK================ 
    jarak();
    jarak();

    function berteriak($callback){
        echo "Hallooooo!";
        //$callback();

        if(is_callable($callback)){
            call_user_func($callback,'selamat datang');
        }else{
            echo 'dia bukan fungsi';
        }
    }
    $panggilaku = function($text){
        echo $text;
    };
    berteriak($panggilaku); //muncul selamat datang
    jarak();
    berteriak('WKWKKW'); //muncul dia bukan fungsi

    //penulisan php;
    ?>

    <? echo 'tanpa tag php' ?>

    <?
    //vardump 
    //die
    jarak();
    jarak();
    die();
    var_dump($ngetik);
    ?>
</body>
</html>