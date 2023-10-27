<?php

// Menghitung luas persegi 
$sisi = 5;
$luas_persegi = $sisi * $sisi;

// Menghitung luas persegi panjang 
$panjang = 10;
$lebar = 5;
$luas_persegi_panjang = $panjang * $lebar;

// Menghitung luas segitiga 
$alas = 8;
$tinggi = 6;
$luas_segitiga = 0.5 * $alas * $tinggi;

// Menghitung luas trapesium 
$alas_atas = 6;
$alas_bawah = 10;
$tinggi_trapesium = 4;
$luas_trapesium = 0.5 * ($alas_atas + $alas_bawah) * $tinggi_trapesium;

// Menghitung luas lingkaran 
$jari_jari = 7;
$luas_lingkaran = 3.14 * $jari_jari * $jari_jari;

echo "Luas Persegi: " . $luas_persegi . "<br/>";
echo "Luas Persegi Panjang: " . $luas_persegi_panjang . "<br/>";
echo "Luas Segitiga: " . $luas_segitiga . "<br/>";
echo "Luas Trapesium: " . $luas_trapesium . "<br/>";
echo "Luas Lingkaran: " . $luas_lingkaran . "<br/>";
