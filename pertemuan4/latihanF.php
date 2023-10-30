<?php
// Array associative negara ASEAN dan ibukota
$negara_asean = [
    "Indonesia" => "D.K.I. Jakarta",
    "Singapura" => "Singapura",
    "Malaysia" => "Kuala Lumpur",
    "Brunei" => "Bandar Seri Begawan",
    "Thailand" => "Bangkok",
    "Laos" => "Vientiane",
    "Filipina" => "Manila",
    "Myanmar" => "Naypyidaw"
];

// Menampilkan negara ASEAN dan ibukotanya menggunakan foreach
echo "Daftar Negara ASEAN dan Ibukota :";
echo "<ul>";
foreach ($negara_asean as $negara => $ibukota) {
    echo "<li>$negara: $ibukota</li>";
}
echo "</ul>";
?>


