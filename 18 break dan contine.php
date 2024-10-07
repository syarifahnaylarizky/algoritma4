<?php
// Penggunaan break
for ($i = 0; $i < 10; $i++) {
    if ($i === 5) {
        break;
    }
    echo $i . " ";
    echo "<br>";

}
// Output: 0 1 2 3 4
// Penggunaan continue
for ($i = 0; $i < 10; $i++) {
    if ($i % 2 === 0) {
        continue;
    }
    echo $i . " ";
    echo "<br>";

}
// Output: 1 3 5 7 9
// break pada Switch
$buah = "durian";

switch ($buah) {
    case "jeruk":
        echo "Ini jeruk";
        break;
    case "apel":
        echo "Ini durian";
        // Break disini menghentikan switch
        break;
    case "pisang":
        echo "Ini pisang";
        break;
    default:
        echo "Buah tidak dikenal";
}
echo "<br>";

// Bersarang Dengan break dan continue
for ($i = 0; $i < 5; $i++) {
    echo "i: $i ";
    for ($j = 0; $j < 5; $j++) {
        if ($j == 2) {
            continue 2; // Melanjutkan pada level loop kedua
        }
        echo "j: $j ";
    }
    echo "\n";
}
echo "<br>";
print_r("<p><strong>by :syarifah nayla rizky");
?>