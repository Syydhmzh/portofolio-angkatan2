<?php

if (isset($_POST['simpan'])) {
    $name = $_POST['name'];
    $date = $_POST['date'];
    $email = $_POST['email'];
    $photo = $_FILES['photo']['name'];
    $status = $_POST['status'];

    // .png, jpg, jpeg
    $ekstensi = array('png', 'jpg', 'jpeg');
    //apakah user mengapload gambar dengan ekstensi tersebut, jika iya masukan gambar ke table dan folder, jika tidak
    // error, ekstensi tidak ditemukan
    // in arrray = 
    $ext = pathinfo($photo, PATHINFO_EXTENSION);
    if (!in_array($ext, $ekstensi)) {
        echo "Ekstensi tidak ditemukan";
        die;
    } else {
        $query = mysqli_query($config, "INSERT INTO about (name, date, email, photo, status) VALUES ('$name', '$date', '$email', '$photo', '$status')");

        //jika berhasil masukan data ke dalam table user
        if ($query) {
            header("location:?page=about&tambah=berhasil");
        } else {
            echo "Gagal";
        }
    }
}

//masukan data ke dalam table user



$header = isset($_GET['edit']) ? "edit" : "tambah";
$id_user = isset($_GET['edit']) ? $_GET['edit'] : "";
$queryedit = mysqli_query($config, "SELECT * FROM about WHERE id='$id_user'");
$rowedit = mysqli_fetch_assoc($queryedit);


// if (isset($_POST['edit'])) {
//     $name = $_POST['name'];
//     $date = $_POST['date'];
//     $email = $_POST['email'];
//     $photo = $_FILES['photo']['name'];
//     $status = $_POST['status'];



//     //masukan data ke dalam t able user
//     $queryUpdate = mysqli_query($config, "UPDATE about SET name='$name', date='$date', email='$email', photo='$photo' WHERE id='$id_user'");

//     //jika berhasil masukan data ke dalam table user
//     if ($queryUpdate) {
//         header("location:?page=about&ubah=berhasil");
//     }
// }

?>



<form action="" method="post" enctype="multipart/form-data">
    <div class="mb-3 row">
        <div class="col-sm-2">
            <label for="">Nama *</label>
        </div>
        <div class="col-sm-10">
            <input required type="text" class="form-control" id="nama" name="name" placeholder="Masukan Nama Anda" value="<?php echo !isset($_row['name']) ? "" : $_row['name'] ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <div class="col-sm-2">
            <label for="">Tanggal Lahir *</label>
        </div>
        <div class="col-sm-10">
            <input required type="date" class="form-control" name="date" placeholder="Masukan Nama Anda" value="<?php echo !isset($_row['date']) ? "" : $_row['date'] ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <div class="col-sm-2">
            <label for="">Email *</label>
        </div>
        <div class="col-sm-10">
            <input required type="email" class="form-control" id="email" name="email" placeholder="Masukan Email Anda" value="<?php echo !isset($_row['email']) ? "" : $_row['email'] ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <div class="col-sm-2">
            <label for="">foto </label>
        </div>
        <div class="col-sm-10">
            <input type="file" name="photo" placeholder="Masukan Foto Anda">
        </div>
    </div>
    <div class="mb-3 row">
        <div class="col-sm-2">
            <label for="">Status</label>
        </div>
        <div class="col-sm-10">
            <input type="radio" name="status" value="1" checked> Publish
            <input type="radio" name="status" value="0"> Draft
        </div>
    </div>
    <div class="col-sm-12">
        <button type="submit" class="btn btn-primary" name="simpan">Tambah</button>
    </div>
</form>