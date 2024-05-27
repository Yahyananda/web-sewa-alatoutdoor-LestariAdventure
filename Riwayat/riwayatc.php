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
        <?php include "../sidebar/sidebarc.php" ?>
    </div>
    <div class="bg-dark-subtle" id="main-content">
        <?php include "../navbar/nav.php" ?>
        <div class="row mx-3 mt-10">
            <h5 class="text-black-50 p-4">RIWAYAT PENYEWAAN</h5>
            <div class="card card1">
                <div class="card-body">
                    <table class="table text-black">
                        <thead>
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Id Member</th>
                                    <th scope="col">Kode Barang</th>
                                    <th scope="col">Jumlah Item</th>
                                    <th scope="col">status</th>
                                    <th scope="col">Tanggal Pinjam</th>
                                    <th scope="col">Tanggal Kembali</th>
                                </tr>
                            </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            $Data = mysqli_query($db, "select * from chekout where status='terboking'");
                            while ($user = mysqli_fetch_array($Data)) {
                            ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $user['id_checkout']; ?></td>
                                    <td><?php echo $user['id_member']; ?></td>
                                    <td><?php echo $user['kode_barang']; ?></td>
                                    <td><?php echo $user['status']; ?></td>
                                    <td><?php echo $user['tgl_pinjam']; ?></td>
                                    <td><?php echo $user['tgl_kembali']; ?></td>

                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>

                    </table>
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