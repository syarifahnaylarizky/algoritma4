<?php

$bulan = array ('Januari', 'Februari', 'Maret');
foreach ($bulan as $nama_bulan) {
	echo $nama_bulan . '<br/>';
}

echo "<hr>";
echo "contoh pada array assosiatif";
echo "<br>";

$kendaraan = array('jenis' => 'Mobil', 'merk' => 'Toyota', 'tipe' => 'Vios');
foreach ($kendaraan as $key => $val) {
	echo ucfirst($key) . ': ' . $val . '<br/>';
}
