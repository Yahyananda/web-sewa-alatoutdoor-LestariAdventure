<?php
include '../database.php';
session_start();
if (isset($_POST['set'])) {
    $id = $_POST['id'];
    $pinjam = $_POST['pinjam'];
    $kembali = $_POST['kembali'];
    mysqli_query($db, "update  chekout set status='terboking',tgl_pinjam='$pinjam',tgl_kembali='$kembali    ' where id_checkout='$id'");
    header('Location: verifikasi.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
        <div class="mt-2 ml-4">
            <h3>ISi Tanggal</h3>
        </div>
        <div class="card mt-5 ml-10 mx-5">
            <form action="" method="post">
                <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
                <div class="mb-3 p-5">
                    <label for="nama" class="form-label text-primary">Tanggal Pinjam</label>
                    <input type="date" class="form-control" name="pinjam">
                    <label for="nama" class="form-label text-primary">Tanggal Kembali</label>
                    <input type="date" class="form-control" name="kembali">
                    <button name="set" class="submit btn btn-primary mt-2">
                        set
                    </button>
                </div>
            </form>
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