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