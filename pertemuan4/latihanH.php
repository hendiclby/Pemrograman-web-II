<!DOCTYPE html>
<html>
<head>
    <title>Tugas 2</title>
</head>
<body>

<?php
// Daftar data dengan miNOal 10 entri
$data = array(
    array(
        'NO' => '<h3>  1.</h3>',
        'Nama' => 'Google',
        'Gambar' => 'googe.jpg',
        'Kategori' => 'Perusahaan Teknologi',
        'Deskripsi' => 'Perusahaan Teknologi yang mengkhususkan diri dalam pengembangan perangkat lunak inovatif.'
    ),
    array(
        'NO' => '<h3>  1.</h3>',
        'Nama' => 'Tesla',
        'Gambar' => 'tesla.jpg',
        'Kategori' => 'Perusahaan Teknologi',
        'Deskripsi' => 'Perusahaan teknologi terkemuka yang fokus pada riset dan pengembangan teknologi terbaru.'
    ),
    array(
        'NO' => '<h3>  1.</h3>',
        'Nama' => 'Apple inc.',
        'Gambar' => 'apple.jpg',
        'Kategori' => 'Perusahaan Teknologi',
        'Deskripsi' => 'Startup teknologi yang berfokus pada pengembangan aplikasi mobile inovatif.'
    ),
    array(
        'NO' => '<h3>  1.</h3>',
        'Nama' => 'Amazon',
        'Gambar' => 'Amazon.jpg',
        'Kategori' => 'Perusahaan Teknologi',
        'Deskripsi' => 'Perusahaan besar dalam industri teknologi yang memiliki beragam produk dan layanan.'
    ),
    array(
        'NO' => '<h3>  1.</h3>',
        'Nama' => 'Intel Corporation',
        'Gambar' => 'intel.jpg',
        'Kategori' => 'Perusahaan Teknologi',
        'Deskripsi' => 'Perusahaan yang mengkhususkan diri dalam pengembangan perangkat keras komputer.'
    ),
    // Tambahkan 5 entri lagi
    array(
        'NO' => '<h3>  1.</h3>',
        'Nama' => 'JD.com',
        'Gambar' => 'JD.jpg',
        'Kategori' => 'Perusahaan Teknologi',
        'Deskripsi' => 'Perusahaan teknologi yang mengembangkan aplikasi e-commerce terkemuka.'
    ),
    array(
        'NO' => '<h3>  1.</h3>',
        'Nama' => 'Symantec Corporation',
        'Gambar' => 'syma.jpg',
        'Kategori' => 'Perusahaan Teknologi',
        'Deskripsi' => 'Startup teknologi yang berfokus pada keamanan siber dan perangkat lunak antivirus.'
    ),
    array(
        'NO' => '<h3>  1.</h3>',
        'Nama' => 'Cisco systems,inc.',
        'Gambar' => 'cic.jpg',
        'Kategori' => 'Perusahaan Teknologi',
        'Deskripsi' => 'Perusahaan yang mengkhususkan diri dalam pengembangan perangkat keras dan jaringan komunikasi.'
    ),
    array(
        'NO' => '<h3>  1.</h3>',
        'Nama' => 'Cousera',
        'Gambar' => 'cor.jpg',
        'Kategori' => 'Perusahaan Teknologi',
        'Deskripsi' => 'Perusahaan teknologi yang fokus pada pengembangan aplikasi mobile untuk pendidikan.'
    ),
    array(
        'NO' => '101217010',
        'Nama' => 'OpenAI',
        'Gambar' => 'open.jpg',
        'Kategori' => 'Perusahaan Teknologi',
        'Deskripsi' => 'Perusahaan yang mengkhususkan diri dalam riset dan pengembangan kecerdasan buatan.'
    ),
);

echo '<table border="1">';
echo '<tr>';
echo '<th>NO</th>';
echo '<th>Nama</th>';
echo '<th>Gambar</th>';
echo '<th>Kategori</th>';
echo '<th>Deskripsi</th>';
echo '</tr>';

foreach ($data as $entry) {
    echo '<tr>';
    echo '<td>' . $entry['NO'] . '</td>';
    echo '<td>' . $entry['Nama'] . '</td>';
    echo '<td><img src="' . $entry['Gambar'] . '" width="100" height="100"></td>';
    echo '<td>' . $entry['Kategori'] . '</td>';
    echo '<td>' . $entry['Deskripsi'] . '</td>';
    echo '</tr>';
}

echo '</table>';
?>

</body>
</html>


