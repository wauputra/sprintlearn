<?php require('partial/header.php')
// ===================== REQUIRE =====================
// Kalo require klo filenya gak ada maka syntax dibawahnya akan stop 
// Klo Include jika meskipun error tetep execute

//Jika ga mau muncul berkali kali maka : 
// includes_once atau requires_once
// Contoh penggunaan : Supaya gak load database berulang ulang
?>

<main>
    <p>
        Ini adalah HOME, contoh penggunaan inlucde dan require

        ini adalah contoh implode dan explode
        <?php
            // ===================== IMPLODE dan EXPLODE =====================
            // Implode mengubah array menjadi string | Bukan print array
            $pekerjaan = ["programmer","designer","programmer"];
            echo "<br> contoh array yg implode : ".implode(" ",$pekerjaan);

            $pelajaran = "html css javascript php bootstrap";
            "<br> contoh menjadikan array dengan explode ".print_r(explode(" ",$pelajaran));

            // ===================== Fungsi Date =====================
            echo "<br><br> Fungsi Tanggal :";
            echo "<br> ".date('d M Y');


            // ===================== Fungsi TRIM & Strip Tags =====================
            // TRIM = Menghilangkan bagian kosong dibagian awal atau akhirnya 
            // STRIP_TAGS = Mendisable semua tag html
            $text = " Ini adalah input user ";

            echo "<br><br> sebelum".$text."disini";
            echo "<br> sesudah".trim($text)."disini";

            $xss_contoh = "<script>alert('cooy')</script>";
            echo "<br><br>".strip_tags($xss_contoh);
        ?>
    </p>
</main>

<?php include_once('partial/footer.php') ?>