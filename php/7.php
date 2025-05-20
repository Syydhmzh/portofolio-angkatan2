<!-- variable system : var yang dibuat oleh php
$_POST, $_GET, $_SESSION, $_FILES, $_REQUEST, $_SERVER 
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variabel sistem | Super global var</title>
</head>

<body>

    <form action="" method="get">
        <div class="form-group">
            <label for="">Nama : </label>
            <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan nama anda">
        </div>
        <br>
        <div class="form-group">
            <label for="">Nilai : </label>
            <input type="number" name="nilai" id="nilai" class="form-control" placeholder="Masukkan Nilai anda">
        </div>
        <br>
        <div class="form-group ">
            <button type="submit">Kirim</button>
        </div>
    </form>
    <br>
    <?php
    if (isset($_GET['nama'])) {
        $nama = $_GET['nama'];
        $nilai = $_GET['nilai'];
        $status = "";
        $grade = "";


        if ($nilai > 70) {
            $status = "Lulus";
        } else {
            $status = "Tidak Lulus";
        }

        if ($nilai >= 90) {
            $grade = "A";
        } elseif ($nilai >= 80) {
            $grade = "B";
        } elseif ($nilai >= 70) {
            $grade = "C";
        } elseif ($nilai >= 60) {
            $grade = "D";
        } else {
            $grade = "E";
        }
        echo "Nama  : " . $nama . "<br>" . "Nilai  : " . $nilai . "<br>" . "Status  : " . $status . "<br>" . "Grade  : " . $grade;
    }




    // $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
    // echo "selamat siang " . $nama;
    ?>

</body>

</html>