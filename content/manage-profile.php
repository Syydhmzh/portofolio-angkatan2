<?php
include 'config/koneksi.php';


if (isset($_POST['simpan'])) {
    $profile_name = $_POST['profile_name'];
    $description = $_POST['description'];
    $photo = $_FILES['photo']['name'];
    // $insertQ = mysqli_query($config, "INSERT INTO profile  (profile_name, description) VALUES ($profile_name', '$description')");

    $queryprofile = mysqli_query($config, "SELECT * FROM profile ORDER BY id DESC");
    if (mysqli_num_rows($queryprofile) > 0) {
        $rowprofile = mysqli_fetch_assoc($queryprofile);
        $id = $rowprofile['id'];
        //perintah update
        $update = mysqli_query($config, "UPDATE profile SET profile_name = '$profile_name', description = '$description' WHERE id = '$id'");
    } else {
        //perintah insert
        if (!empty($photo)) {
            $insertQ = mysqli_query($config, "INSERT INTO profile  (profile_name, description, photo) VALUES ('$profile_name', '$description', '$photo')");
        } else {
            $insertQ = mysqli_query($config, "INSERT INTO profile  (profile_name, description) VALUES ($profile_name', '$description', )");
        }
    }
    // if ($insertQ) {
    //     header("location:dashboard.php");
    // }
}

$selectProfile = mysqli_query($config, "SELECT * FROM profile");
$row = mysqli_fetch_assoc($selectProfile);


?>




<form action="" method="post" v enctype="multipart/form-data">
    <div class="m-2" style="width: 55%">
        <div class="mb-3">
            <label class="form-label" for="">Judul</label>
            <input value="<?php echo !isset($row['profile_name']) ? '' : $row['profile_name'] ?>" class="form-control" type="text" name="profile_name">
        </div>

        <div class="mb-3">
            <label class="form-label" for="">Description</label>
            <textarea class="form-control" type="text" name="description" cols="30" rows="5"> <?php echo !isset($row['description']) ? '' : $row['description'] ?></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label" for="">Photo</label>
            <input class="form-control" type="file" name="photo">
        </div>
        <img src="uploads/<?php echo $row['photo'] ?>" width="150" alt="">
        <button type="submit" name="simpan" class="btn btn-primary mt-2">Simpan</button>



    </div>
</form>