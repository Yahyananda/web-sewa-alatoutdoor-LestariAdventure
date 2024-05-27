<?php
include '../database.php';
session_start();
if (isset($_POST['submit'])) {
    $Email = $_POST['Email'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM user WHERE email='$Email' AND password='$password'";
    $result = mysqli_query($db, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        $_SESSION['id_member'] = $row['id_member'];

        header("Location: ../Dashboard/Dashboard_usr.php");
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../logo/lestari.png">
    <title>LESTARI ADVENTURE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section class="py-5" style="background-color: #002255;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="https://img.freepik.com/free-photo/vertical-shot-man-walking-near-blue-lake-walk-new-zealand-surrounded-by-mountains_181624-14465.jpg?w=360&t=st=1686325692~exp=1686326292~hmac=be03bb60a5280715c6be9566e0be40490cc8ffc6167e86e820a1a201e45b5184"
                                    alt="login form" class="img-fluid w-100" style="border-radius: 1rem 0 0 1rem;" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">
                                    <form method="POST" action="">
                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <span class="h1 fw-bold mb-0">
                                                LESTARI ADVENTURE
                                            </span>
                                        </div>
                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your
                                            account</h5>
                                        <div class="form-outline mb-4">
                                            <input type="Email" name="Email" id="form2Example17"
                                                class="form-control form-control-lg" value="<?php echo @$Email; ?>"
                                                required />
                                            <label class="form-label" for="form2Example17">Email address</label>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <input type="password" name="password" id="form2Example27"
                                                class="form-control form-control-lg" name="password"
                                                value="<?php echo @$_POST['password']; ?>" required />
                                            <label class="form-label" for="form2Example27">Password</label>
                                        </div>
                                        <div class="pt-1 mb-4">
                                            <input name="submit" class="btn btn-lg btn-block" type="submit"
                                                value="Login">
                                        </div>
                                        <a class="small text-muted" href="#!">Lupa password?</a>
                                        <p class="mb-5 pb-lg-2" style="color: #393f81;">Belum Memiliki Akun ? <a
                                                href="registrasi.php" style="color: #393f81;">Register here</a></p>
                                        <div>
                                            <i class="bi bi-instagram">Lestari Adventure</i>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>