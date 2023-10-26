<?php
// Definisi jumlah baris dalam segitiga
$num_rows = 8;

// Mengulang setiap baris
for ($i = 1; $i <= $num_rows; $i++) {
    // Mengulang setiap kolom dalam baris
    for ($j = 1; $j <= $num_rows; $j++) {
        if ($j <= $i - 1) {
            echo " ";
        } else {
            echo "* ";
        }
    }
    // Berpindah ke baris berikutnya
    echo "<br>";
}
