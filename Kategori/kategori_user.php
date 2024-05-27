<?php
include("../database.php");
session_start();

if (@$_GET['proses'] == 'cekout') {
    $kd = $_GET['kd'];
    mysqli_query($db, "insert into chekout values('','$_SESSION[id_member]','$kd','belum diverifikasi','','')");
    header('Location: kategori_user.php');
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/css/splide.min.css">
</head>

<body>
    <div>
        <?php include "../sidebar/sidebarc.php" ?>
    </div>
    <div class="bg-dark-subtle" id="main-content">
        <?php include "../navbar/nav.php" ?>
        <div class="row mx-3 mt-4">
            <h5> <B>BEST SELLER</B></h5>
        </div>
        <div class="row mx-3 bg-body-secondary">
            <div class="container">
                <div class="row">
                    <div class="splide">
                        <div class="splide__track">
                            <div class="splide__list">
                                <div class="col-sm-3 mb-3 splide__slide m-3">
                                    <div class="card  text-black" style="width: 18rem;">
                                        <img src="https://www.produkbarangunikchina.com/image-product/img6339-1554087837.jpg" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title">Kompor Mini Kotak </h5>
                                            <a href="#" class="btn btn-primary">sewa</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 mb-3 splide__slide m-3">
                                    <div class="card text-black " style="width: 18rem;">
                                        <img src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//99/MTA-9419481/hi-cook_tabung_gas_portable_hi-cook_230_gram-gc_020__full01_t9u9v82v.jpg" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title">Gas Mini Hii Cook</h5>
                                            <a href="#" class="btn btn-primary">sewa</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 mb-3 splide__slide m-3">
                                    <div class="card text-dark" style="width: 18rem;">
                                        <img src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//85/MTA-10228422/arei_outdoorgear_tas_backpack_ransel_arei_rei_semi_carrier_borealis_40_liter_full03_l4edunly.jpg" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title">Tas Carier 30 L</h5>
                                            <a href="#" class="btn btn-primary">sewa</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 mb-3 splide__slide m-3">
                                    <div class="card  text-dark" style="width: 18rem;">
                                        <img src="https://media.dinomarket.com/docs/imgTD/2022-03/_SMine_1647922162858_220322110323_xl.jpg" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title">tenda capasitas 4 orang</h5>
                                            <a href="#" class="btn btn-primary">sewa</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-4">
                <h5><B>BARANG</B></h5>
            </div>
        </div>
        <div class="row mx-3 bg-body-secondary">
            <?php
            include '../database.php';

            $Data = mysqli_query($db, "select * from barang");
            while ($user = mysqli_fetch_array($Data)) {
            ?>
                <div class="col-sm-3 mb-3  ">
                    <div class="card" style="width: 18rem;">
                        <img src="../img/<?php echo $user['gambar']; ?>" class="card-img-top" alt="kotak">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php echo $user['nama_barang']; ?>
                            </h5>
                            <p> <?php echo $user['harga_satuan']; ?>
                            </p>
                            <a href="./kategori_user.php?proses=cekout&&kd=<?php echo $user['kode_barang']; ?>" class="btn btn-primary">
                                Sewa</a>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div><!-- tutupan-->

    <script>
        // event will be executed when the toggle-button is clicked
        document.getElementById("button-toggle").addEventListener("click", () => {

            // when the button-toggle is clicked, it will add/remove the active-sidebar class
            document.getElementById("sidebar").classList.toggle("active-sidebar");

            // when the button-toggle is clicked, it will add/remove the active-main-content class
            document.getElementById("main-content").classList.toggle("active-main-content");
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/js/splide.min.js"></script>
    <script>
        var splide = new Splide('.splide', {
            type: 'loop',
            perPage: 5,
            rewind: true,
        });
        splide.mount();
    </script>
</body>

</html>