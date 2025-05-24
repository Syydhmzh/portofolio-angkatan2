<?php
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
        <button type="submit" class="btn btn-primary" name="<?= isset($_GET['edit']) ? 'edit' : 'simpan'; ?>"><?=$header?></button>
    </div>
</form>