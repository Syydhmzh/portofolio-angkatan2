<?php
session_start();
if (isset($_POST['email'])) {
    $email = "admin@gmail.com";
    $password = "admin123";

    if ($_POST['email'] == $email && $_POST['password'] == $password) {
        $_SESSION['email'] = $email;
        header("Location: 9.php");
    } else {
        header("Location: 8.php?login=erorr");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form | Portofolio Hamzah</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" />
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
                                <?php if (isset($_GET['access'])) : ?>
                                    <div class="alert alert-warning" role="alert">
                                        silahkan login terlebih dahulu
                                    </div>
                                <?php endif; ?>
                                <?php if (isset($_GET['login'])) : ?>
                                    <div class="alert alert-danger" role="alert">
                                        Mohon periksa kembali email dan password anda
                                    </div>
                                <?php endif; ?>

                                <form action="" method="post">
                                    <div class="mb-3">
                                        <label for="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="form-label">Password</label>
                                        <input type="password" class="form-control" id="password" name="password"
                                            placeholder="Masukan Password Anda">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-primary">Kirim</button>
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
</body>

</html>