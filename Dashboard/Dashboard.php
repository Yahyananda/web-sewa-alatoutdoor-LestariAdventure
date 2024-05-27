<?php
include("../database.php");
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: ../Login/login.php");
}

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
        <div class="card mx-4 mt-5">
            <?php echo "<h5>Selamat Datang, " . $_SESSION['username'] . "" . "</h5>"; ?>
        </div>
        <div class="row mt-5 mx-3 bg-body-secondary">
            <div class="col-sm-4 mb-3  ">
                <div class="card bg-primary border-0 shadow">
                    <div class="card-body d-flex justify-content-between">
                        <div>
                            <h2 class="card-title">
                                <?php
                                echo mysqli_num_rows(mysqli_query($db, "SELECT * FROM user"))
                                ?>
                            </h2>
                            <p class="card-text">Total Aktivitas</p>
                            <a href="../aktivitas/aktivitas.php" class="btn btn-primary mt-5 w-100">More Info</a>
                        </div>
                        <div class="py-5">
                            <i class="bi bi-list h1 align-items-center"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-3 ">
                <div class="card bg-success border-0 shadow">
                    <div class="card-body d-flex justify-content-between">
                        <div>
                            <h2 class="card-title">
                                <?php
                                echo mysqli_num_rows(mysqli_query($db, "SELECT * FROM status"))
                                ?>
                            </h2>
                            <p class="card-text">Peminjaman Kembali</p>
                            <a href="../Barang/kembali.php" class="btn btn-primary mt-5 w-100">More Info</a>
                        </div>
                        <div class="py-5">
                            <i class="bi bi-clock h1 align-items-center"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-3 ">
                <div class="card bg-info border-0 shadow">
                    <div class="card-body d-flex justify-content-between">
                        <div>
                            <h2 class="card-title">
                                <?php
                                echo mysqli_num_rows(mysqli_query($db, "SELECT * FROM penyewa"))
                                ?>
                            </h2>
                            <p class="card-text">Dalam Peminjaman</p>
                            <a href="#" class="btn btn-primary mt-5">More Info</a>
                        </div>
                        <div class="py-5">
                            <i class="bi bi-calendar3 h1 align-items-center"></i>
                        </div>
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