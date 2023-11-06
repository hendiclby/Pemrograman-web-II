<?php
function pangkat($Sangka, $Spangkat) {
    $hasil = 1;

    for ($i = 1; $i <= $Spangkat; $i++) {
        $hasil *= $Sangka;
    }

    return $hasil;
}

$angka = 5;
$pangkat = 4;
$hasil = pangkat($angka, $pangkat);

echo "$angka pangkat $pangkat = $hasil";
?>


