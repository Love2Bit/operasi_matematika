<?php

// Header Program

echo "Program Operasi Matematika Dasar\n";
echo "================================\n";

// Pilihan Operasi

$nomor=1;
$operasi_matematika=["Penjumlahan","Pengurangan","Perkalian","Pembagian"];

foreach($operasi_matematika as $k)
{
    echo $nomor.".".$k."\n";
    $nomor++;
}

// Input

// tampilkan hasil perhitungan

echo " Hasil dari $bil_satu + $bil_kedua adalah :". ($bil_satu+$bil_kedua). "\n";
    
if($pilih_operasi==1)
{
    $hasil = $bil_satu + $bil_kedua;
    echo $template_hasil.$hasil;
}else if($pilih_operasi==2){
    $hasil =$bil_satu - $bil_kedua;
    echo $template_hasil.$hasil;
}
