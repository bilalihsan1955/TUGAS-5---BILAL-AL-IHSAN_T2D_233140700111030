<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Limas Segitiga</title>
    <link rel="shortcut icon" href="../assets/img/Untitled-1.png" type="image/x-icon">

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" integrity="sha384">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- css -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/stylecount.css">

</head>

<body>

    <section id="formcount">
        <div class="container-fluid">
            <h1>Let's Get Started</h1>
            <div class="card-form">
                <div class="row">
                    <div class="modal-header">
                        <h5 class="modal-title gg-primary"></h5>
                        <a href="../index.php#services">
                            <i class="fa fa-close" style="font-size:3rem;"></i>
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <img src="../assets/img/Triangular.png" alt="Nature">
                    </div>
                    <div class="col-sm-6 offset-md-3">
                        <form method="post">
                            <h1 style="color: black;font-size:5vh;text-align:left;">Volume Kerucut</h1>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Jari-Jari</label>
                                <input type="number" name="r" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="masukkan jati-jari" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Tinggi</label>
                                <input type="number" name="tinggi" class="form-control" id="exampleInputPassword1" placeholder="masukkan tinggi" required>
                            </div>
                            <label class="form-label">
                                <?php
                                if (isset($_POST['hitung'])) {
                                    $r = $_POST['r'];
                                    $tinggi = $_POST['tinggi'];
                                    $luas = 1 / 3 * pi() * $r * $tinggi;
                                    $output = number_format($luas, 3, '.', '');
                                    echo "Hasil Volume Limas Segitiga = " . $output;
                                }
                                ?>
                            </label><br>
                            <button type="submit" name="hitung" value="Hitung" class="btn btn-primary">Hitung</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container-footer">
            <div class="container-footer-paragraph">
                <img src="../assets/img/logo math.png" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis reiciendis placeat commodi corrupti eveniet dolore atque nam. Corrupti qui voluptatum sunt saepe, obcaecati magni, nihil dignissimos alias sit sint quod?</p>
            </div>

            <div class="linkmy">
                <hr>
                <p>&copy; copyright 2024 <a href="https://bilalihsan.my.id/" target="_blank">Bilal Al Ihsan 233140700111030</a></p>
            </div>

        </div>
    </footer>

</body>
<script src="assets/js/main.js"></script>

</html>