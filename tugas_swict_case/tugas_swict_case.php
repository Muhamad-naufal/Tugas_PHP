<?php
$nilai = 90;

switch (true) {
    case ($nilai >= 90 && $nilai <= 100):
        echo "Nilai Anda: " . $nilai . "<br/>";
        echo "Anda termasuk Grade A";
        break;
    case ($nilai >= 80 && $nilai < 90):
        echo "Nilai Anda: " . $nilai . "<br/>";
        echo "Anda termasuk Grade B";
        break;
    case ($nilai >= 70 && $nilai < 80):
        echo "Nilai Anda: " . $nilai . "<br/>";
        echo "Anda termasuk Grade C";
        break;
    default:
        echo "Nilai Anda: " . $nilai . "<br/>";
        echo "Anda termasuk Grade D";
        break;
}
