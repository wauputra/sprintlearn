<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop | belajar php</title>
</head>
<body>
    <?php
    
    //===============Pengulangan=============
    //for(variableAwal(mulai);batas(sayart);perubahan)
    for($i=0; $i < 5; $i++)
    {
        echo "---------------- ";
        echo "waungoding";
        echo "---------------- <br>";
    }
    echo "<br><br>";
    $hewan = ['kucing','anjing','kuda','kambing','kelinci'];
    //mengeluarkan array
    for($i=0; $i < count($hewan); $i++)
    {
        echo "---------------- ";
        echo "hewan : ".$hewan[$i];
        echo "---------------- <br>";
    }  
    echo "<br><br>"; 
    //foreach
    foreach($hewan as $h)
    {
        echo "---------------- ";
        echo "hewan foreach: ".$h;
        echo "---------------- <br>"; 
    }
    echo "<br><br>";
    //foreach associative array
    $data = [
        "nama" => "wau",
        "umur" => 23,
        "kerja" => "engginer"
    ];
    foreach($data as $key => $value)
    {
        echo "---------------- ";
        echo "data foreach associative array, key: ".$key.' value : '.$value;
        echo "---------------- <br>"; 
    }
    //while, do while
    //while(syarat) = selama syaratnya benar maka eksekusi
    $i = 0;
    while($i < count($hewan))
    {
        echo "=======while=========<br>";
        echo $hewan[$i].'<br>';
        $i++;
    }
    echo "<br><br>";
    //do while, eksekusi dlu baru lihat syaratnya
    $j = 0;
    do{
        echo "=======do while=========<br>";
        echo $hewan[$j].'<br>';
        $j++;
    }while($j < count($hewan));

    ?>
</body>
</html>