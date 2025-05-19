<?php
$siswa = [
    [

        "nama" => "hamzah",
        "umur" => 24,
        "jurusan" => "web junior",
        "status" => 1,
    ],

    [
        "nama" => "herman",
        "umur" => 40,
        "jurusan" => "web senior",
        "status" => 2,
    ],

];

function ubahStatus($status)
{

    switch ($status) {
        case 1:
            return "aktif";
            break;
        default:
            return "tidak aktif";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1> Data Siswa</h1>
    <table border="1" width="100%">
        <thead>
            <tr>
                <th>nama</th>
                <th>umur</th>
                <th>jurusan</th>
                <th>status</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($siswa as $key => $sw) { ?>
                <tr>
                    <td>
                        <?php echo $sw['nama'] ?>
                    </td>
                    <td>
                        <?php echo $sw['umur'] ?>
                    </td>
                    <td>
                        <?php echo $sw['jurusan'] ?>
                    </td>
                    <td>
                        <?php echo  ubahStatus  ($sw['status']); ?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

</body>

</html>