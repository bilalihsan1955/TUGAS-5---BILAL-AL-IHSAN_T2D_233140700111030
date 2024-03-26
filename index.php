<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JagoMath</title>
    <link rel="shortcut icon" href="assets/img/Untitled-1.png" type="image/x-icon">

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" integrity="sha384">

    <!-- css -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

    <header id="header">
        <!-- navbar -->
        <nav>
            <nav class="navbar navbar-expand-lg navbar-light" id="navbar">
                <div class="navbar-logo">
                    <a href="#home"><img src="assets/img/logo math.png" alt=""></a>
                </div>
                <ul class="navbar-links">
                    <li><a class="nav-link scrollto active" href="#home">Home</a></li>
                    <li><a href="#Welcome" class="nav-link scrollto">About Us</a></li>
                    <li><a href="#services" class="nav-link scrollto">services</a></li>
                </ul>
            </nav>
        </nav>
    </header>

    <section id="home">
        <div class="banner">
            <h1> Welcome To JagoMath</h1>
        </div>
    </section>

    <section id="Welcome">
        <div class="container-welcome .welcome">
            <h1>Our Goals</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam sequi odio odit perferendis culpa suscipit. Minima obcaecati maiores quo illum quis aliquid ad magni repellendus, ducimus quidem adipisci veniam cumque temporibus suscipit eligendi eos quae est ut voluptatibus consectetur accusamus, dolorem voluptatum voluptatem vitae! Sint quis maxime libero accusantium omnis sit tenetur, veniam modi ullam vero impedit at voluptate ipsum sequi commodi? Soluta sapiente quidem, ullam in dolores asperiores debitis delectus iste deleniti assumenda sit repellat ea. Neque debitis beatae nobis aliquid vel commodi fugit, adipisci perferendis iste eos in ad, dolor cumque, dolore magnam dicta ratione? Possimus, odio placeat.</p>
        </div>
    </section>

    <section id="services">
        <div class="container-services .services">
            <h1>Let's Start</h1>

            <!-- Carousel -->
            <div id="demo" class="carousel slide" data-ride="carousel" data-interval="1000">

                <!-- The slideshow/carousel -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card" style="width:50vh">
                                    <img class="card-img-top" src="assets/img/Triangle.png" alt="Card image">
                                    <div class="card-body">
                                        <h4 class="card-title">Segitiga</h4>
                                        <p class="card-text">Luas Segitiga <br> L = 1/2 × A × T</p>
                                        <a href="process/segitiga.php">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal">Lets Try</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card" style="width:50vh">
                                    <img class="card-img-top" src="assets/img/Triangular.png" alt="Card image"">
                                    <div class=" card-body">
                                    <h4 class="card-title">Limas Segitiga</h4>
                                    <p class="card-text">Volume Limas Segitiga <br> V = 1/3 × LA × T</p>
                                    <a href="process/limasSegitiga.php">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal">Lets Try</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card" style="width:50vh">
                                <img class="card-img-top" src="assets/img/Cone.png" alt="Card image">
                                <div class="card-body">
                                    <h4 class="card-title">Kerucut</h4>
                                    <p class="card-text">Volume Kerucut <br> V= 1/3 × π × r × r × T </p>
                                    <a href="process/kerucut.php">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal">Lets Try</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- slide 2 -->
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card" style="width:50vh">
                                <img class="card-img-top" src="assets/img/Square.png" alt="Card image">
                                <div class="card-body">
                                    <h4 class="card-title">Persegi</h4>
                                    <p class="card-text">Luas Persegi <br> L = S × S</p>
                                    <a href="process/persegi.php">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal">Lets Try</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card" style="width:50vh">
                                <img class="card-img-top" src="assets/img/Cube.png" alt="Card image">
                                <div class="card-body">
                                    <h4 class="card-title">Kubus</h4>
                                    <p class="card-text">Volume Kubus<br> V = S × S × S</p>
                                    <a href="process/volumekubus.php">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal">Lets Try</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card" style="width:50vh">
                                <img class="card-img-top" src="assets/img/RectangularPrism.png" alt="Card image">
                                <div class="card-body">
                                    <h4 class="card-title">Balok</h4>
                                    <p class="card-text">Volume Balok <br> V= P × L × T </p>
                                    <a href="process/volumebalok.php">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal">Lets Try</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- slide 3 -->
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card" style="width:50vh">
                                <img class="card-img-top" src="assets/img/Circle.png" alt="Card image">
                                <div class="card-body">
                                    <h4 class="card-title">Lingkaran</h4>
                                    <p class="card-text">Luas Lingkaran <br>L = π × r × r</p>
                                    <a href="process/Llingkaran.php">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal">Lets Try</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card" style="width:50vh">
                                <img class="card-img-top" src="assets/img/Sphere.png" alt="Card image">
                                <div class="card-body">
                                    <h4 class="card-title">Bola</h4>
                                    <p class="card-text">Volume Bola <br> K = π × D</p>
                                    <a href="process/vbola.php">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal">Lets Try</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card" style="width:50vh">
                                <img class="card-img-top" src="assets/img/Circlediameter.png" alt="Card image">
                                <div class="card-body">
                                    <h4 class="card-title">Lingkaran</h4>
                                    <p class="card-text">Keliling Lingkaran<br> V = 3/4 × π × r × r × r</p>
                                    <a href="process/Klingkaran.php">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal">Lets Try</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </section>

    <footer>
        <div class="container-footer">
            <div class="container-footer-paragraph">
                <img src="assets/img/logo math.png" alt="">
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