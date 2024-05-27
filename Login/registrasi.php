<?php

include '../database.php';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../logo/lestari.png">
    <title>Lestari Adventure</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="prosespen.php" method="POST">
        <section class="h-100 regis ">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col">
                        <div class="card card-registration my-4 h-100">
                            <div class="row g-0">
                                <div class="col-xl-6 d-none d-xl-block">
                                    <img src="https://img.freepik.com/free-photo/vertical-shot-wooden-passage-reflective-small-lake-mountain-range-horizon_181624-37099.jpg?w=360&t=st=1686326726~exp=1686327326~hmac=12de058bc33591469844b3953bc44a4ff22be8e27594be2273a653c201b37e69"
                                        alt="Sample photo" class="img-fluid w-100" />
                                </div>
                                <div class="col-xl-6">
                                    <div class="card-body p-md-5 text-black">
                                        <h3 class="mb-5 text-uppercase">Lestari Adventure registration member account
                                        </h3>
                                        <div class="row">
                                            <div class="form-outline">
                                                <label class="form-label">Email</label>
                                                <input type="email" name="email" class="form-control form-control-lg"
                                                    value="<?php echo @$email; ?>" required />
                                            </div>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="address">Address</label>
                                            <input type="text" name="address" class="form-control form-control-lg"
                                                value="<?php echo @$address; ?>" required />
                                        </div>
                                        <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">
                                            <h6 class="mb-0 me-4">Gender:
                                            </h6>
                                            <div class="form-check form-check-inline mb-0 me-4">
                                                <input class="form-check-input" type="radio" name="jn_kelamin"
                                                    value="Female" required />
                                                <label class="form-check-label">Female</label>
                                            </div>
                                            <div class="form-check form-check-inline mb-0 me-4">
                                                <input class="form-check-input" type="radio" name="jn_kelamin"
                                                    value="Male" required />
                                                <label class="form-check-label">Male</label>
                                            </div>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <label class="form-label">Tanggal Lahir</label>
                                            <input type="date" name="tgl_lahir" class="form-control form-control-lg"
                                                value="<?php echo $tgl_lahir; ?>" required />
                                        </div>
                                        <div class="form-outline mb-4">
                                            <label class="form-label">Telepon</label>
                                            <input type="number" name="no_telp" class="form-control form-control-lg"
                                                value="<?php echo @$no_telp; ?>" required />
                                        </div>
                                        <div class="form-outline mb-4">
                                            <label class="form-label">Username</label>
                                            <input type="text" name="username" class="form-control form-control-lg"
                                                value="<?php echo @$username; ?>" required />
                                        </div>
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form3Example8">Password</label>
                                            <input type="password" name="password" class="form-control form-control-lg"
                                                value="<?php echo @$password; ?>" required />
                                        </div>
                                        <div class="d-flex justify-content-end pt-3">
                                            <input type="submit" name="simpan" value="Simpan"
                                                class="btn btn-warning btn-lg ms-2">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>