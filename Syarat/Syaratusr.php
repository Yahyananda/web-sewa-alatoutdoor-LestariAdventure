<?php
include '../database.php';
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
    <link rel="stylesheet" href="../style/style.css">
</head>

<body>
    <div>
        <?php include "../sidebar/sidebarc.php" ?>
    </div>
    <div class="bg-dark-subtle" id="main-content">
        <?php include "../navbar/nav.php" ?>
        <div class="p1 mx-4 mt-5">
            <div class="card text-align-center p-4">
                <h5>Syarat dan Ketentuan </h5>
                <p class="one"> 1. Meninggalkan Kartu Identitas yang masih berlaku (KTP/SIM/KTM/Kartu Pelajar)</p>
                <p class="one"> 2. Penyewa wajib mengecek semua perlengkapan yang disewa.</p>
                <p class="one"> 3. Peralatan persewaan dalam kondisi baik dan utuh, penyewa wajib merawat dan menjaganya
                    dengan baik.</p>
                <p class="one"> 4. Jika ada kerusakan / kehilangan penyewa wajib membayar sesuai kerusakan atau
                    menggantinya.</p>
                <p class="one"> 5. Segala bentuk penipuan/kecurangan akan kami serahkan pada pihak berwajib</p>
                <h3>TERIMA KASIH</h3>
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