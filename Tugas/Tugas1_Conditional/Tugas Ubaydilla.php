<?php
echo "<h2>Tugas dari Ubaydilla Alvaro Gibran Syahplevi</h2><br>";
echo "<h2>X PPLG 1</h2><br>";
echo "<h3>Penilaian Siswa</h3><br>";    


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $alterz = (int)$_POST['mynumber'];

    echo "Kamu memasukkan nilai: " . $alterz . "<br><br>";

    // --- Kriteria Penilaian ---
    echo "<p><b>Hasil Nilai:</b><br>";
    if ($alterz > 100) {
        echo "$alterz Nggak bisa well!!!";
    } elseif ($alterz >= 90) {
        echo "Grade: A";
    } elseif ($alterz >= 80) {
        echo "Grade: B";
    } elseif ($alterz >= 70) {
        echo "Grade: C";
    } elseif ($alterz >= 60) {
        echo "Grade: D";
    } else {
        echo "Grade: E";
    }
    echo "</p>";

    // --- Kata - Kata Awikwok ---
    if ($alterz > 100) {
        echo "Kamu itu invalid!!!";
    } elseif ($alterz == 100) {
        echo "Kamu itu Mantap!!!";
    } elseif ($alterz >= 90) {
        echo "Kamu itu pintar!!!";
    } elseif ($alterz >= 80) {
        echo "Mayanlah!!!";
    } elseif ($alterz >= 70) {
        echo "Bawah KKM!!!";
    } elseif ($alterz >= 60) {
        echo "Dikit lagi Pinter";
    } else {
        echo "Jeblok cikk";
    }

    echo "<br><br>";
}
?>

<!-- HTML Form -->
<form method="post">
    <label>Enter a number:</label>
    <input type="number" name="mynumber" min="0" max="110" required>
    <button type="submit">Submit</button>
</form>
<?php
echo "<br><br><hr>";


echo "Saya aslinya bingung mau ngapain lagi, jadi saya iseng buka file lain yang ada di folder ini.<br>";
?><?php
