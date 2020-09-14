<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipe data array | Belajar PHP</title>
</head>
<body>
    <?php 

    //===============Tpe data array==============
    $kotak = array('wahyu','adi','putra','wahyu');
    $nama = ['wau','putra','wauputra','putra'];
    // echo $kotak;
    //untuk cetak array
    print_r($kotak);
    echo "<br>";
    echo "nomor index : ".$kotak[0]."<br>";
    echo "nomor index : ".$nama[2]."<br><br>";

    //===============array method==============
    //array_unique, array_reverse, shuffle, count, sort
    $uniqarr = array_unique($kotak);
    echo "array_unique : ".print_r($uniqarr)."<br>";
    $reversearr = array_reverse($nama);
    echo "array_reverse : ".print_r($reversearr)."<br>";
    $shufflearr = shuffle($nama);
    echo "array_unshuffleique : ".print_r($shufflearr)."<br>";
    echo "count : ".count($kotak)."<br>";
    $sortarr = sort($kotak);
    echo "sort : ".print_r($sortarr)."<br><br>";

    //=============== associative array ==============
    //ciri ciri : ada key dan value
    $data = array(
        "nama" => "wahyu",
        "umur" => 24,
        "kerja" => "engginer"
    );
    $data2 = array(
        "nama1" => "putra",
        "umur1" => 25,
        "kerja1" => "programmer"
    );
    print_r($data);
    echo "<br>nama saya adalah ".($data['nama']);
    //Mengubah data
    $data['umur'] = 23;
    echo "<br>umur saya adalah ".($data['umur']);

    //=============== method associative array ==============
    //array_values, array_keys, array_merge
    echo '<br><br>array_values = mengganti key menjadi index';
    print_r(array_values($data));
    echo '<br>array_keys = mengganti value menjadi index';
    print_r(array_keys($data));
    echo '<br>array_merge = menggabungkan beberapa array';
    print_r(array_merge($data,$data2));

    //=============== multi dimensi array ==============
    $data3 = array(
        array("programmer", "21", "males"),
        array("programmer", "23", "rajin"),
        array("programmer", "25", "males banget"),
    );
    // 00 01 02
    // 10 11 12
    // 20 21 22
    echo "<br><br>";
    print_r($data3);
    echo "<br>".$data3[2][2];
    ?>
</body>
</html>