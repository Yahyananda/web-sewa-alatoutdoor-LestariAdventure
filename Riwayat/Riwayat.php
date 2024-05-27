<?php include("../database.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="../logo/lestari.png">
    <title>LESTARI ADVENTURE</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="../Style/style.css">
</head>

<body>
    <div>
        <?php include "../sidebar/sidebar.php" ?>
    </div>
    <div class="bg-dark-subtle" id="main-content">
        <?php include "../navbar/nav.php" ?>
        <div class="row mx-3 mt-10">
            <h5 class="text-black-50 mt-3">INFORMASI PENYEWAAN</h5>
            <div class="card card1 mt-2">
                <div class="card-body">
                    <table class="table text-black">

                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col">
                                    <div class="w-auto">
                                        <form class="d-flex" role="search">
                                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                        </form>
                                    </div>
                                </th>
                            </tr>
                            <tr>

                                <th scope="col">No</th>
                                <th scope="col">Nomor Pinjam</th>
                                <th scope="col">Id Member</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Status Pengembalian</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include '../database.php';
                            $no = 1;
                            $Data = mysqli_query($db, "select * from peminjaman");
                            while ($user = mysqli_fetch_array($Data)) {
                            ?>
                                <tr>

                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $user['no_pinjaman']; ?></td>
                                    <td><?php echo $user['id_member']; ?></td>
                                    <td><?php echo $user['nama']; ?></td>
                                    <td><?php echo $user['alamat']; ?></td>
                                    <td><?php echo $user['status']; ?></td>
                                    <td><?php
                                        echo "<a href='form-tambah.php?id=" . $user['no_pinjaman'] . "'>
                                    <i class='bi bi-check-lg'></i></a> ";
                                        echo "<a href='form-tambah.php?id=" . $user['no_pinjaman'] . "'>
                                    <i class='bi bi-x-lg'></i></a> ";
                                        ?></td>

                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>

                    </table>
                    <a href="#" class="btn btn-primary btn-outline-light btnp ">Read more</a>
                </div>
            </div>
        </div>
    </div>
    </div>


    <script>
        // event will be executed when the toggle-button is clicked
        document.getElementById("button-toggle").addEventListener("click", () => {

            // when the button-toggle is clicked, it will add/remove the active-sidebar class
            document.getElementById("sidebar").classList.toggle("active-sidebar");

            // when the button-toggle is clicked, it will add/remove the active-main-content class
            document.getElementById("main-content").classList.toggle("active-main-content");
        });
    </script>
</body>

</html>