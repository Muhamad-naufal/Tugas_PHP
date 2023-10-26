<?php

// Menghitung volume Limas
$luas_alas_limas = 5;
$tinggi_limas = 10;
$volume_limas = 0.3 * $luas_alas_limas * $tinggi_limas;

// Menghitung volume prisma
$luas_alas_prisma = 10;
$tinggi_prisma = 5;
$volume_prisma = $luas_alas_prisma * $tinggi_prisma;

// Menghitung Volume Bola
$jari_jari_bola = 6;
$volume_bola = 1.3 * 3.14 * $jari_jari_bola * $jari_jari_bola;

// Menghitung Volume Kubus
$sisi_kubus = 2;
$volume_kubus = $sisi_kubus * $sisi_kubus * $sisi_kubus;

// Menghitung Volume Balok
$tinggi_balok = 7;
$lebar_balok = 4;
$volume_balok = $tinggi_balok * $lebar_balok;

echo "Volume Limas: " . $volume_limas . "<br/>";
echo "Volume Prisma: " . $volume_prisma . "<br/>";
echo "Volume Bola: " . $volume_bola . "<br/>";
echo "Volume Kubus: " . $volume_kubus . "<br/>";
echo "Volume Balok: " . $volume_balok . "<br/>";
