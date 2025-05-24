<?php 
session_start();
$_nama = isset($_SESSION['NAME']) ? $_SESSION['NAME'] : '';
if (!$_nama) {
    header("Location: index.php?access=failed");
}

include 'config/koneksi.php';

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
                                <?php echo isset($_GET['page']) ? str_replace("-", " ", ucfirst($_GET['page'])):'home' ?>
                            </div>
                            <div class="card-body">
                                <?php if (isset($_GET['page'])) {
                                    if (file_exists("content/" . $_GET['page'] . ".php")) {
                                        include "content/" . $_GET['page'] . ".php";
                                    
                                    } else {
                                        include "content/home.php";
                                    }
                                }


                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>