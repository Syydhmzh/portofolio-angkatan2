<?php
session_start();
include 'config/koneksi.php';

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = sha1($_POST['password']);

    // select / tampilkan semua data dari table user dimana email di ambil dari orang 
    //input di inputan email 
    $query = mysqli_query($config, "SELECT * FROM users WHERE email='$email' AND password='$password'");
    // apakah / jika betul email yang di  input user adalah email yang ada di table user
    if (mysqli_num_rows($query) > 0) {
        // jika betul maka ambil data dari table user
        $row = mysqli_fetch_assoc($query);
        $_SESSION['NAME'] = $row['name'];
        $_SESSION['ID_USER'] = $row['id'];
        $_SESSION['LEVEL'] = $row['id_level'];
        header("location: dashboard.php");
    } else {
        header("location:index.php?login=erorr");
    }
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form | Portofolio Hamzah</title>
    <link
        rel="stylesheet"
        href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="wrapper">
        <div class="login-form mt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-header">
                                Login Form
                            </div>
                            <div class="card-body">
                                <form action="" method="post">
                                    <div class="mb-3">
                                        <label for="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Masukan Email Anda">
                                    </div>
                                    <div class="mb-3">
                                        <label for="form-label">Password</label>
                                        <input type="password" class="form-control" id="password" name="password"
                                            placeholder="Masukan Password Anda">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-primary">kirim</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>












    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
    </head>
</body>

</html>