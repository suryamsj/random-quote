<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Random Quote dibuat oleh Muhammad Surya Jayadiprana dengan menggunakan sebuah API">
    <title>Random Quote</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&family=Spartan:wght@600;700&display=swap" rel="stylesheet">


    <!-- CSS Vendor -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <!-- CSS Costume -->
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>

    <!-- Start Main -->
    <main class="flex-shrink-0">

        <!-- Start Navbar -->
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <button class="navbar-toggler mb-3 mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="bi bi-list"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ms-auto">
                        <a class="nav-link <?php if ($_GET['page'] == 'quote-1') echo "active" ?>" href="index?page=quote-1">Quote 1</a>
                        <a class="nav-link <?php if ($_GET['page'] == 'quote-2') echo "active" ?>" href="index?page=quote-2">Quote 2</a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->

        <!-- Start Content -->
        <?php require_once 'function/menu.php' ?>
        <!-- End Content -->

    </main>
    <!-- End Main -->

    <!-- Start Footer -->
    <footer class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p>Dibuat dengan <i class="bi bi-balloon-heart-fill text-danger"></i> oleh <a href="https://suryamsj.my.id">Muhammad Surya J</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- JS Vendor -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/html2canvas.min.js"></script>

    <!-- JS Costume -->
    <script src="assets/js/main.js"></script>
</body>

</html>