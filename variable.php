<?php
    // echo "<h1>Hello World!</h1>";
    // Membuat Variable Baru 
    $harga1 = 1000;
    $nama_barang = "Kopi Robusta";
    $harga2 = 20000;
    $stok = 30;

    // Mengambil Nilai dari Variable
    echo "Harga 1 Roti Gepeng adalah $harga1 <br><br>";
    echo "Konsumen membeli $nama_barang dengan harga Rp$harga2 dengan jumlah $stok pcs <br><br>";

    // // Variable Local
    // function var_local()
    // {
    //     $angka = 11;
    //     echo "Local angka = $angka <br><br>";
    // }

    // // Memanggil fungsi var_local
    // var_local();

    // // Variable Global
    // $global = 12;

    // function var_global()
    // {
    //     // 
    // }

    // echo " Variable angka diluar function variable adalah $global";


    // Variable Static 
    // function var_static()
    // {
    //     // Definisi Variable
    //     static $angka = 5;
    //     $nomor = 2;

    //     // Penambahan Varible
    //     $angka++;
    //     $nomor++;

    //     // Output variable 
    //     echo $angka,"</br>";
    //     echo $nomor,"</br>";
    // }
    // // Panggil function var_static()
    // var_static();
    // var_static();

    const gaji = "Rp.10.000.000,00";
    echo gaji."<br><br></br>";

    $_nama = "Faiz Fikri";
    $_umur = 8;
    echo $_nama . " Umurnya&nbsp;". $_umur . " Tahun"."<br><br></br>";

    $lembaga = "Pesantren Teknologi Informasi dan Komunikasi (PeTIK II Jombang)";
    $alamat = "Jl. Denanyar, Jombang";

    echo $lembaga;
    echo $alamat;
