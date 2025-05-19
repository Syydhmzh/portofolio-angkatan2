<?php
// tas 

$nama = array("hamzah", "budi", "andi", "joko");
print_r($nama);

echo "<br>";
echo "<br>";
echo $nama[0];
echo "<br>";
echo $nama[1];
echo "<br>";
echo $nama[2];      
echo "<br>";
echo $nama[3];

echo "<br>";
echo "<br>";
$buah = ["apel", "jeruk", "mangga", "anggur"];
print_r($buah);

echo "<br>";
echo "<br>";
echo "<br>";

foreach ($buah as $b) {
    echo "Nama-nama buah: " . $b . "<br>";
}

// array asosiatif : keynya menggunakan string
$kelas_web = [
    "nama" => "hamzah",
    "umur" => 24,
    "jurusan" => " Sistem Informasi",
];

echo " Nama siswa" . $kelas_web["nama"] . " umur " . $kelas_web["umur"] . " jurusan " . $kelas_web["jurusan"];



$siswa = [
    [

        "nama" => "hamzah",
        "umur" => 24,   
        "jurusan" => "web junior",
    ],

    [
        "nama" => "herman",
        "umur" => 40,   
        "jurusan" => "web senior",
    ],

];

print_r($siswa);
echo "<br>";
echo $siswa[1] ["nama"];
echo "<br>"; 
echo "<br>";

foreach ($siswa as $key => $sw) {
    echo "Key;" . $key . "<br>";
    echo "Nama : " . $sw["nama"] . "<br>";
    echo "Umur : " . $sw["umur"] . "<br>";
    echo "Jurusan : " . $sw["jurusan"] . "<br>";
    echo "<br>";
}
// [ 0 => "nama" , 1 +> "nama" ]
echo "<br>";
