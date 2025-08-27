<?php
// ------------------------------------------------------------
// Conditional di PHP
// Struktur kontrol untuk mengambil keputusan berdasarkan kondisi.
// ------------------------------------------------------------

// Bentuk dasar:
// if       -> jika kondisi benar
// elseif   -> kondisi lain yang dicek jika kondisi sebelumnya salah
// else     -> kondisi terakhir jika semua kondisi sebelumnya salah

// Operator perbandingan yang sering dipakai:
// "<"   -> kurang dari
// ">"   -> lebih dari
// "<="  -> kurang dari atau sama dengan
// ">="  -> lebih dari atau sama dengan
// "=="  -> sama dengan (hanya nilai)
// "!"   -> negasi / membalikkan boolean

// ------------------------------------------------------------
// Contoh penggunaan dasar:

$x = 8;
if ($x < 10) {
    echo "$x kurang dari 10<br>";
} else {
    echo "$x lebih dari atau sama dengan 10<br>";
}

// ------------------------------------------------------------
// Contoh if - elseif - else:

$y = 15;
if ($y > 20) {
    echo "$y lebih dari 20<br>";
} elseif ($y > 10) {
    echo "$y lebih dari 10 tapi kurang dari atau sama dengan 20<br>";
} else {
    echo "$y kurang dari atau sama dengan 10<br>";
}

// ------------------------------------------------------------
// Contoh penggunaan <= :

$z = 60;
if ($z <= 60) {
    echo "$z kurang dari atau sama dengan 60<br>";
}

// perbandingan jika tidak pakai <=

$alterz = 60;
if ($alterz < 60) {
    echo "$alterz kurang dari 60<br>";
} else {
    echo "$alterz lebih dari atau sama dengan 60<br>";
}

// ------------------------------------------------------------
// Contoh dengan rentang nilai (contoh kategori usia):

$umur = 25;
if ($umur >= 0 && $umur <= 12) {
    echo "Anak-anak<br>";
} elseif ($umur >= 13 && $umur <= 17) {
    echo "Remaja<br>";
} elseif ($umur >= 18 && $umur <= 59) {
    echo "Dewasa<br>";
} else {
    echo "Lansia<br>";
}

// ------------------------------------------------------------
// Contoh dengan string (bukan angka):

$warna = "merah";
if ($warna == "merah") {
    echo "Berhenti!<br>";
} elseif ($warna == "kuning") {
    echo "Hati-hati!<br>";
} else {
    echo "Jalan terus!<br>";
}

// ------------------------------------------------------------
// Contoh dengan boolean dan negasi:

$isLogin = false;
if (!$isLogin) {
    echo "Silakan login terlebih dahulu.<br>";
} else {
    echo "Selamat datang!<br>";
}
?>
