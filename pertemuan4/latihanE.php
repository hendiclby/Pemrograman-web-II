<?php
// Array negara ASEAN awal
$negara_asean_awal = [
    "Indonesia",
    "Singapura",
    "Malaysia",
    "Brunei",
    "Thailand"
];

// Menampilkan negara-negara ASEAN awal sebagai list dalam HTML
echo "Daftar Negara ASEAN awal :";
echo "<ul>";
foreach ($negara_asean_awal as $negara) {
    echo "<li>$negara</li>";
}
echo "</ul>";

// Menambahkan tiga negara baru ke dalam array
$negara_asean_baru = $negara_asean_awal;
$negara_asean_baru[] = "Laos";
$negara_asean_baru[] = "Filipina";
$negara_asean_baru[] = "Myanmar";

// Menampilkan negara-negara ASEAN baru sebagai list dalam HTML
echo "Daftar Negara ASEAN baru :";
echo "<ul>";
foreach ($negara_asean_baru as $negara) {
    echo "<li>$negara</li>";
}
echo "</ul>";
?>