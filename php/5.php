<?php

// = memberikan nilai
// == membandingkan 
// == membandingkan dengan tipe datanya
// !: tidak
// isset = tidak kosong
// > = lebih besar
// < = lebih kecil
// >= lebih besar sama dengan
// <= lebih kecil sama dengan



$nama = "hamzah";
if ($nama == "jamet") {
    echo "iya <br>";
} else {
    echo "bukan <br>";
}

if (isset(($nama))) {
    echo "yaa <br>";
} else {
    echo "tidak <br>";
}

$suhu = 35;

if ($suhu > 37) {
    echo "demam <br>";
} elseif ($suhu < 35) {
    echo "Normal <br>";
} else {
    echo "kedinginan <br>";
}

echo "<br>";


// operator logika
// and, &&, OR, ||, !

$username = "admin";
$password = "admin";

if ($username == "admin" OR $password == "admin") {
    echo "Login Berhasil";
} else {
    echo "Login Gagal";
}


