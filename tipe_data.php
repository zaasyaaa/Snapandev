<?php
// tipe data, Menentukan jenis nilai yang bisa disimpan dalam variabel. Contoh: string, integer, float, boolean, array.
$judul = "Pemrograman Web"; // string (teks)
$jumlahHalaman = 200; // integer (angka bulat)
$hargaBuku = 89999.99; // float (angka ber-koma)
$tersedia = true; // boolean (true or false)
$kategori = ["Teknologi", "Komputer", "Pemrograman"]; // array (daftar)
?>

<?php
// contoh penggunaan array
$warna = ["Merah", "Hijau", "Biru"];
$acak = array_rand($warna); // membuat output acak dari array
echo "Warna favorit saya adalah " . $warna[$acak];
?>

