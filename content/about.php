<?php 
$query = mysqli_query($config, "SELECT * FROM about ORDER BY id DESC");
$row = mysqli_fetch_all($query, MYSQLI_ASSOC);  

if(isset ($_GET['delete'])){
    $id = $_GET['delete'];
    $querydelete = mysqli_query($config, "DELETE FROM about WHERE id='$id'");
    header('location: ?page=about&hapus=berhasil');
}

?>                                   
                        <div class="card-body">
                                <div class="table-responsive">
                                    <div align="right" class="mb-3">
                                        <a href="?page=tambah-about">Tambah</a>
                                    </div>
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>email</th>
                                                <th>Photo</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($row as $key => $data): ?>
                                            <tr>
                                                <td><?= $key +1?></td>
                                                <td><?= $data['name']?></td>
                                                <td><?= $data['email'] ?></td>
                                                <td><?= $data['photo'] ?></td>

                                                <td>
                                                    <a href="tambah-about.php?edit=<?php echo $data['id']?>" class="btn btn-success btn-sm">Edit</a>
                                                    <a onclick="return confirm('Are You Sure?')" href="user.php"  class="btn btn-warning btn-sm">Delete</a>
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>

                            </div>