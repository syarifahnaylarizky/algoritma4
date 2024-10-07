<?php

// Cara Membuat Associative Array
// Menggunakan fungssi array()  
$buah = array(
    "apel" => "hijau",
    "strawberry" => "merah",
    "pisang" => "kuning"
);
echo "<hr>";

// Menetapkan langsung
$mobil['Toyota'] = "Corolla";
$mobil['Honda'] = "Civic";
$mobil['Suzuki'] = "Swift";

// Mengakses Data dari Associative Array
echo $buah["apel"]; // Output: hijau
echo "<br>";

echo $mobil['Honda']; // Output: Civic
echo "<hr>";

// Menambahkan dan mengubah data
// Menambahkan data baru
$buah["mangga"] = "kuning";

// Mengubah data yang ada
$buah["apel"] = "merah";

// Looping Melalui Associative Array
foreach ($buah as $kunci => $nilai) {
    echo "Kunci: $kunci, Nilai: $nilai<br>";
}
echo "<hr>";

// Menghitung Elemen
echo count(value: $buah); // Menampilkan jumlah elemen di dalam array buah

echo "<hr>";
//memeriksa kunci tertentu
if (array_key_exists("apel", $buah)) {
    echo "Buah apel tersedia!";
}

print_r("<p><strong>by :syarifah naila rizky");
?>