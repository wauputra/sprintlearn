<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <?php
    //===================== Tipe data =====================
    //tipe string
    $nama = "Wauputra<br>";
    echo $nama;
    //single quote
    $nama2 = 'Wahyu adi putra<br>';
    echo $nama2;
    echo $nama . " " . $nama2;
    //Jika butuh karakter aneh, mencetak $
    echo "Ini adalah contoh variable \$nama <br><br>";
    
    //Tipe data Integer 
    $angka = 1000;
    $angka2 = 100;
    echo "Angkanya adalah $angka <br>";
    echo $angka + $angka2 . "<br>";

    //Operator Matematik
    $angka++;
    echo $angka + $angka2 * $angka . "<br>";
    //nama = nilai
    $angka = $angka + $angka2;
    $angka += $angka2;
    echo "angka : $angka";

    //===================== data method =====================
    $ankga = 1000;
    $ankga2 = 3;
    $ankga3 = 2.64;

    echo "round : " . round($ankga3) . "<br>";
    echo "rand : " . rand($ankga3,$ankga) . "<br>";
    echo "max : " . max($ankga2,$ankga3,$ankga) . "<br>";
    echo "min : " . min($ankga2,$ankga3,$ankga) . "<br>";

    echo "<br><br>";
    $text = "Hallo semua";
    echo "strlen : " . strlen($text) . '<br>';
    echo "str word count  : " . str_word_count($text) . '<br>';
    echo "str replace  : " . str_replace("Hallo","Whatsapp",$text) . '<br>';
    echo "str repeat  : " . str_repeat("Hallo ",10) . '<br>';

    //===================== data boolean =====================
    //true/false
    $hasil = true;
    $hasil2 = false;
    ?>
</body>
</html>