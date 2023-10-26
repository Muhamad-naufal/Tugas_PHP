<?php
$nama = "Naufal";
$tinggi_badan = 150;
$berat_badan = 40;

// Menghitung BMI
$bmi = $berat_badan / ($tinggi_badan * $tinggi_badan);
echo "Halo, nama saya adalah ". $nama .". BMI saya adalah ". $bmi .".<br/>";
if ($bmi < 18.5) {
    echo "Anda Termasuk Kurus";
} elseif ($bmi >= 18.5 && $bmi <= 24.9) {
    echo "Anda Termasuk Sedang";
} elseif ($bmi >= 25.0 && $bmi <= 29.9) {
    echo "Anda termasuk Gemuk";
} else {
    echo "Anda termasuk Obesitas.";
}
