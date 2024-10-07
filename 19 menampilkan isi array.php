<?php
// membuat array
$barang = ["Buku Tulis", "Penghapus", "Spidol"];

// menampilkan isi array
echo $barang[0]."<br>";
echo $barang[1]."<br>";
echo $barang[2]."<br>";
echo"<hr>";

// membuat array
$barang = ["Buku Tulis", "Penghapus", "Spidol"];
// menampilkan isi array dengan perulangan for
for($i=0; $i < count($barang); $i++){
    echo $barang[$i]."<br>";
}
print_r("<p><strong>by :syarifah nayla rizkyy");
?>
