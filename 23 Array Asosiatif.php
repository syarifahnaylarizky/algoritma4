<?php
// membuat array asosiatif
$artikel = [
    "judul" => "Belajar Pemrograman PHP",
    "penulis" => "syarifahnaylarizky",
    "view" => 227
];

// mencetak isi array assosiatif
echo "<h2>".$artikel["judul"]."</h2>";
echo "<p>oleh: ".$artikel["penulis"]."</p>";
echo "<p>View: ".$artikel["view"]."</p>";

echo "<hr>";

$email["subjek"] = "Apa Kabar?";
$email["pengirim"] = "lia@naylaksp2024.com";
$email["isi"] = "Apa kabar? sudah lama tidak berjumpa";

echo "<pre>";
print_r($email);
echo "</pre>";

echo "<hr>";
$nama_variabel=array("nama1"=>"70","nama2"=>"67","nama3"=>"89");
  echo "hasil dari program " . $nama_variabel['nama1'] . " nilai.";
