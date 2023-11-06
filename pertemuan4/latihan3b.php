<?php
$jawabanIsset = "Isset adalah = " . (isset($nama) ? "Variabel sudah didefinisikan dan memiliki nilai." : "Variabel tidak didefinisikan atau memiliki nilai NULL.") . "<br><br>";
$jawabanEmpty = "Empty adalah = " . (empty($umur) ? "Variabel dianggap kosong." : "Variabel tidak kosong.");

function soal($style) {
    global $jawabanIsset, $jawabanEmpty;
    if ($style == 'isset') {
        echo $jawabanIsset;
    } elseif ($style == 'empty') {
        echo $jawabanEmpty;
    }
}

soal('isset');
soal('empty');
?>
