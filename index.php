<?php

include "Mahasiswa.php";

// objek 1
$mahasiswa1 = new Mahasiswa();
$mahasiswa1->setData(
    "A11.2024.16037",
    "Zaskya Maula Azni",
    "Teknik Informatika"
);

// objek 2
$mahasiswa2 = new Mahasiswa();
$mahasiswa2->setData(
    "D11.2025.04468",
    "Gustarindra Khurul Ngatik",
    "Kesehatan Masyarakat"
);

// objek 3 (contoh tambahan)
$mahasiswa3 = new Mahasiswa();
$mahasiswa3->setData(
    "A11.2000.00001",
    "Fulan",
    "Teknik Informatika"
);

// menampilkan data
echo "<h2>Data Mahasiswa</h2>";

$mahasiswa1->tampilData();
$mahasiswa2->tampilData();
$mahasiswa3->tampilData();

?>