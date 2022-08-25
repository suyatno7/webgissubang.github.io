<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/layout.css">

    <script src="https://kit.fontawesome.com/f07b4631f7.js" crossorigin="anonymous"></script>
    <!--jquery-->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <!--  Leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ==" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin=""></script>

    <link rel="stylesheet" href="/assets/leaflet.groupedlayercontrol.css" />
    <script src="assets/leaflet.groupedlayercontrol.js"></script>

    <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
    <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>

    <link rel="stylesheet" href="https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-locatecontrol/v0.43.0/L.Control.Locate.css">
    <script src="https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-locatecontrol/v0.43.0/L.Control.Locate.min.js"></script>

    <link rel="stylesheet" type="text/css" href="/assets/L.Control.ZoomBar.css" />
    <script type="text/javascript" src="/assets/L.Control.ZoomBar.js"></script>

    <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
    <script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>


    <script type="text/javascript" src="/assets/Leaflet.Coordinates-0.1.5.min.js"></script>
    <link rel="stylesheet" href="/assets/Leaflet.Coordinates-0.1.5.css" />

    <link rel="stylesheet" href="<?= base_url('/assets/leaflet-tag-filter-button-master/docs/assets/css/leaflet-easy-button.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('/assets/leaflet-tag-filter-button-master/src/leaflet-tag-filter-button.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('/assets/leaflet-tag-filter-button-master/docs/assets/css/ripple.min.css') ?>" />
    <script src="<?= base_url('/assets/leaflet-tag-filter-button-master/docs/assets/js/leaflet-easy-button.js') ?>"></script>
    <script src="<?= base_url('/assets/leaflet-tag-filter-button-master/src/leaflet-tag-filter-button.js') ?>"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="<?= base_url('assets/ckeditor/ckeditor.js'); ?>"></script>
    <title><?= $title; ?></title>
</head>
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="bootstrap" viewBox="0 0 118 94">
        <title>Bootstrap</title>
        <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"></path>
    </symbol>
    <symbol id="facebook" viewBox="0 0 16 16">
        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
    </symbol>
    <symbol id="instagram" viewBox="0 0 16 16">
        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
    </symbol>
    <symbol id="twitter" viewBox="0 0 16 16">
        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
    </symbol>
</svg>

<body class="d-flex flex-column min-vh-100">
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top navbar-top-menu shadow mb-0" style="background-color: #137216">
        <div class="container">
            <a class="navbar-brand font-weight-bold" href="/">
                <img src="/logosub.png" alt="" width="30" height="24" class="d-inline-blok align-text-top">
                WebGIS Wisata Alam</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/"><i class="fa-solid fa-house-chimney"></i></i>Beranda</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-map-location-dot"></i> Peta
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="<?= base_url('peta') ?>">Peta Wisata</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('rute') ?>">Peta Rute</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="<?= base_url('filterpeta') ?>">Filter Wisata</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/blog"><i class="fa-solid fa-newspaper"></i>Artikel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about"><i class="fa-solid fa-address-card"></i>About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact"><i class="fa-solid fa-address-book"></i>Contact Us!</a>
                    </li>
                </ul>
            </div>
            <div class="collapse navbar-collapse flex-grow-1 text-right" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto flex-nowrap">
                    <li class="nav-item">
                        <a href="/cari" class="nav-link m-2 menu-item"><i class="fa-solid fa-search"></i>Cari</a>
                    </li>
                    <?php if (logged_in()) : ?>
                    <li class="nav-item">
                        <a href="/logout" class="nav-link m-2 menu-item"><i class="fa-solid fa-search"></i>Logout</a>
                    </li>
                    <?Php else : ?>
                        <li class="nav-item">
                        <a href="/login" class="nav-link m-2 menu-item"><i class="fa-solid fa-search"></i>Login</a>
                    </li>
                    <?php endif;?>
                </ul>
            </div>
        </div>
    </nav>

    <?= $this->renderSection('content'); ?>

    <div class="container">
        <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top border-bottom">
            <div class="col-md-4 ms-5 p-4 text-dark">
                <img class="justify-content-left" width="150px" src="/logosub.png">
                <h5>WebGIS Pariwisata</h5>
                <p>Kabupaten Subang</p>
            </div>

            <div class="col mb-3 ms-3">
                <h5>Social Media</h5>
                <ul class="nav flex-column">
                <div class="mb-3"> 
                        <a href="#" class="text-secondary font-weight-bold text-decoration-none"><i class="fab fa-facebook"></i> Facebook</a>
                    </div>
                    <div class="mb-3"> 
                        <a href="#" class="text-secondary font-weight-bold text-decoration-none"><i class="fab fa-instagram"></i> Instagram</a>
                    </div>
                </ul>
            </div>
            <div class="col mb-3 ms-5">
                <h5>Social Media</h5>
                <ul class="nav flex-column">
                <div class="mb-3"> 
                        <a href="#" class="text-secondary font-weight-bold text-decoration-none"><i class="fab fa-facebook"></i> Facebook</a>
                    </div>
                    <div class="mb-3"> 
                        <a href="#" class="text-secondary font-weight-bold text-decoration-none"><i class="fab fa-instagram"></i> Instagram</a>
                    </div>
                </ul>
            </div>
        </footer>
        
    <div class="container text-secondary text-left text-sm-center">
        <h6>Made With Codeigniter and Bootstrap</h6>
    <small>Copyright &copy; 2022 WebGIS Kabupaten Subang | All Rights Reverse</small>
    </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

</body>

</html>