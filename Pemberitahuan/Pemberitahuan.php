<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LESTARI ADVENTURE</title>
    <!-- bootstrap 5 css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css"
        integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous" />
    <!-- custom css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="../Style/style.css">
</head>

<body>
    <div>
        <?php include "../sidebar/sidebar.php" ?>
    </div>
    <div class="bg-black" id="main-content">
        <?php include "../navbar/nav.php" ?>
        <div class="row mx-3 text-align-center">
            <h5>Logout </h5>
            <div class="card cardt ">
                <div class="card-body">
                    <div class="card bg-success">
                        <div class="card-body">
                            PROFILE
                        </div>
                    </div>
                </div>
                <table class="table text-black">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Barang</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>

                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>

                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="1">Larry the Bird</td>

                        </tr>
                    </tbody>

                </table>
                <a href="#" class="btn btn-primary btn-outline-light btnp ">Read more</a>
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