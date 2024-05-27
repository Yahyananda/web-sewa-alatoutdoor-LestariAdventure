<?php
include "../database.php";
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: ../Login/user_login.php");
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
        <?php include "../sidebar/sidebarc.php" ?>
    </div>
    <div class="bg-dark-subtle" id="main-content">
        <?php include "../navbar/nav.php" ?>
        <div class="card mx-4 mt-5">
            <?php echo "<h1>Selamat Datang, " . $_SESSION['username'] . "" . "</h1>"; ?>
        </div>
        <div class="mx-4 mt-5">
            <div class="row mt-5 mx-3 ">
                <div class="col-sm-4 mb-3  ">
                    <div class="card bg-primary border-0 shadow">
                        <div class="card-body d-flex justify-content-between">
                            <div>
                                <h2 class="card-title">
                                    <?php
                                    echo mysqli_num_rows(mysqli_query($db, "select * from chekout where status='terboking'"))
                                    ?>
                                </h2>
                                <p class="card-text">Riwayat Peminjaman</p>

                                <a href="../Riwayat/riwayatc.php" class="btn btn-primary mt-5">More Info</a>
                            </div>
                            <div class="py-5">
                                <i class="bi bi-list h1 align-items-center"></i>
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
                                    echo mysqli_num_rows(mysqli_query($db, "select * from chekout where status='belum diverifikasi'"))
                                    ?>
                                </h2>
                                <p class="card-text">Dalam Peminjaman</p>

                                <a href="../Peminajaman/peminjaman_user.php" class="btn btn-primary mt-5">More Info</a>
                            </div>
                            <div class="py-5">
                                <i class="bi bi-calendar3 h1 align-items-center"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 mb-3 ">
                    <div class="card bg-secondary border-0 shadow">
                        <div class="card-body d-flex justify-content-between">
                            <div>
                                <h2 class="card-title">
                                    0
                                </h2>
                                <p class="card-text">Pemberitahuan</p>

                                <a href="#" class="btn btn-primary mt-5">More Info</a>
                            </div>
                            <div class="py-5">
                                <i class="bi bi-bell h1 align-items-center"></i>
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