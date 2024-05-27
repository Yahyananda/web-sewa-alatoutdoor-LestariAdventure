<?php include("../database.php")
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
        <div class="row mx-3 mt-4">
            <h5 class="text-black-50">INFORMASI AKTIVITAS</h5>
        </div>
        <div class="row mx-3 mt-4">
            <div class="card card1">
                <div class="card-body">
                    <table class="table text-black">
                        <thead>
                            <tr>

                                <th scope="col">No</th>
                                <th scope="col">Nomor Member</th>
                                <th scope="col">Username</th>
                                <th scope="col">Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include '../database.php';
                            $no = 1;
                            $Data = mysqli_query($db, "select * from user");
                            while ($user = mysqli_fetch_array($Data)) {
                            ?>
                                <tr>

                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $user['id_member']; ?></td>
                                    <td><?php echo $user['username']; ?></td>
                                    <td><?php echo $user['Email']; ?></td>
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