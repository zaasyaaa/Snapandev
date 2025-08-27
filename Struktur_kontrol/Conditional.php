<?php
// Conditional adalah struktur kontrol yang memungkinkan program 
// mengambil keputusan berdasarkan kondisi tertentu.

// ------------------------------------------------------------
// Bentuk dasar:
// if       -> jika kondisi benar (jika)
// elseif   -> jika kondisi lain benar (opsi tambahan) (jika lainnya)
// else     -> jika tidak (semua kondisi sebelumnya salah)

// Contoh operator perbandingan yang sering dipakai:
// "<"   -> kurang dari
// ">"   -> lebih dari
// "<="  -> kurang dari atau sama dengan
// ">="  -> lebih dari atau sama dengan
// "=="  -> sama dengan (membandingkan nilai)
// "===" -> identik (membandingkan nilai dan tipe data)
// "!="  -> tidak sama dengan
// "!==" -> tidak identik (nilai atau tipe berbeda)
// "!"   -> negasi / membalikkan nilai boolean

// ------------------------------------------------------------
// Contoh penggunaan:

$x = 8;
if ($x < 10) {
    echo "$x kurang dari 10";
} else {
    echo "$x lebih dari atau sama dengan 10";
}

$y = 15;
if ($y > 10) {
    echo "$y lebih dari 10";
} elseif ($y < 20) {
    echo "$y kurang dari 20 tapi lebih dari atau sama dengan 10";
} else {
    echo "$y lebih dari atau sama dengan 20";
}

$z = 60;
if ($z <= 60) {
    echo "$z kurang dari atau sama dengan 60";
}

$alterz = 60;
if ($alterz < 60) {
    echo "$alterz kurang dari 60";
} else {
    echo "$alterz lebih dengan 60";
}

$p = 90;
if ($p >= 60 && $p <= 70 ) {
    echo "nilai anda adalah c";
} elseif ($p >= 71 && $p <= 80) {
    echo "nilai anda adalah b";
} elseif ($p >= 81 && $p <= 90) {
    echo "nilai anda adalah a";
} else {
    echo "alam baka";
}
?>
