<?php

$negara_info = [
    ["Negara", "Ibukota", "Kode Telepon"],
    ["Indonesia", "D.K.I. Jakarta", "+62"],
    ["Singapura", "Singapura", "+65"],
    ["Malaysia", "Kuala Lumpur", "+60"],
    ["Brunei", "Bandar Seri Begawan", "+673"],
    ["Thailand", "Bangkok", "+66"],
    ["Laos", "Vientiane", "+856"],
    ["Philippines", "Manila", "+63"],
    ["Myanmar", "Naypyidaw", "+95"]
];


echo '<table border="1" cellpadding="5" cellspacing="0">';
foreach ($negara_info as $row) {
    echo '<tr>';
    foreach ($row as $cell) {
        echo '<td>' . $cell . '</td>';
    }
    echo '</tr>';
}
echo '</table>';
?>










