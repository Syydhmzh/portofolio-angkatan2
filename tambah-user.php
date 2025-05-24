<?php
include 'config/koneksi.php';


//jika user/pengguna mencet tombol simpan 
// ambil data dari inputan, email, dan password
// masukan lke dalam table user (name, email, password) nilainya diambil dari masing-masing inputan 
if (isset($_POST['simpan'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = sha1($_POST['password']);

    //masukan data ke dalam table user
    $query = mysqli_query($config, "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')");

    //jika berhasil masukan data ke dalam table user
    if ($query) {
        header("location:user.php?tambah=berhasil");
    } else {
        echo "Gagal";
    }
}


$header = isset($_GET['edit']) ? "edit" : "tambah";
$id_user = isset($_GET['edit']) ? $_GET['edit'] : "";
$queryedit = mysqli_query($config, "SELECT * FROM users WHERE id='$id_user'");
$rowedit = mysqli_fetch_assoc($queryedit);


if (isset($_POST['edit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $password = sha1($_POST['password']);

    //masukan data ke dalam table user
    $queryUpdate = mysqli_query($config, "UPDATE users SET name='$name', email='$email', password='$password' WHERE id='$id_user'");

    //jika berhasil masukan data ke dalam table user
    if ($queryUpdate) {
        header("location:user.php?ubah=berhasil");
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
        rel="stylesheet"
        href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <div class="wrapper">
        <?php include 'inc/header.php'; ?>
        <div class="content mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">

                                Data user
                            </div>
                            <div class="card-body">
                                <form action="" method="post">
                                    <div class="mb-3 row">
                                        <div class="col-sm-2">
                                            <label for="">Nama *</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <input required type="text" class="form-control" id="nama" name="name" placeholder="Masukan Nama Anda" value="<?= isset($_GET['edit']) ? $rowedit['name'] : "" ?>">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <div class="col-sm-2">
                                            <label for="">Email *</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <input required type="email" class="form-control" id="email" name="email" placeholder="Masukan Email Anda" value="<?= isset($_GET['edit']) ? $rowedit['email'] : "" ?>">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <div class="col-sm-2">
                                            <label for="">Password *</label>
                                        </div>
                                        <div class="col-sm-10">
                                            <input required type="password" class="form-control" id="password" name="password" placeholder="Masukan Password Anda">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary" name="<?= isset($_GET['edit']) ? 'edit' : 'simpan'; ?>"> <?= $header ?></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>