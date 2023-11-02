<?php

$negara_info = [
    ["<h3>Nama kota</h3>", "<h3>makanan khas</h3>", "<h3>Harga</h3>"],
    ["jakarta", "soto betawi", "Rp 25.000"],
    ["bandung", "mie kocok", "Rp 15.000"],
    ["yogyakarta", "gudeg", "Rp 20.000"],
    ["surabaya", "rawon", "Rp 40.000"],
    ["bali", "ayam betutu", "Rp 50.000"],
    ["padang", "rendang", "Rp 25.000"],
    ["semarang", "lumpia semarang", "Rp 15.000"],
    ["Ambon", "nasi lapola", "Rp 35.000"]
];


echo '<table border="1" cellpadding="2" cellspacing="0">';
foreach ($negara_info as $row) {
    echo '<tr>';
    foreach ($row as $cell) {
        echo '<td>' . $cell . '</td>';
    }
    echo '</tr>';
}
echo '</table>';
?>










