<?php

// definisi jumlah baris dalam segitiga
$rows = 9;

// Perulangan untuk mengatur jumlah baris yang akan ditampilkan
for ($i = 0; $i < $rows; $i++) {
    //  Perulangan untuk menampilkan angka pada setiap baris
    for ($j = 0; $j <= $i; $j++) {
        echo $j;
    }
    // Berpindah ke baris berikutnya
    echo "<br>";
}
