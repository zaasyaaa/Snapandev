<?php
// tipe data, Menentukan jenis nilai yang bisa disimpan dalam variabel. Contoh: string, integer, float, boolean, array.

// ------------------------------------------------------------
// tipe data ada banyak :
// string    -> teks
// integer   -> angka bulat
// float     -> angka desimal
// boolean   -> true/false
// array     -> kumpulan nilai
// ------------------------------------------------------------

$judul = "Pemrograman Web"; // string
$jumlahHalaman = 200; // integer
$hargaBuku = 89999.99; // float
$tersedia = true; // boolean
$kategori = ["Teknologi", "Komputer", "Pemrograman"]; // array

// ------------------------------------------------------------

// contoh penggunaan array
$warna = ["Merah", "Hijau", "Biru"];
$acak = array_rand($warna); // membuat output acak dari array
echo "Warna favorit saya adalah " . $warna[$acak];
?>

