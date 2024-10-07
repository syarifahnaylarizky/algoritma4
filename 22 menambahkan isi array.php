<?php
// membuat array
$hobi = [
    "Membaca",
    "Menulis",
    "Ngeblog"
];

// menambahkan isi pada idenks ke-3
$hobi[3] = "Coding";

// menambahkan isi pada indeks terakhir
$hobi[] = "Olahraga";

// cetak array dengan perulangan
foreach($hobi as $hobiku){
    echo $hobiku."<br>";
}
?>
<?php
// membuat array
$user = [
    "lia",
    "lala",
    "syarifahnaylarzky"
];

// mengisi array pada indek ke-1 ("muhar")
$user[1] = "Nayla";

// mencetak isi array
echo "<pre>";
print_r($user);
echo "</pre>";

print_r("<p><strong>by :syarifah nayla rizky");
?>