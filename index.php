<?php
include 'function.php';
// Memanggil fungsi getQuote() yang telah dibuat di function.php
$json = getQuote();
// Menampilkan kalimat yang telah diambil dari API
$quote = $json['hasil']['result'];
?>
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
        <section class="py-5" id="kuote">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1>Random Quote</h1>
                        <p><?= $quote ?></p>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        Suka dengan quotes nya? Silahkan klik : <button id="gambar" class="tombol">Download
                            Quote</button>
                    </div>
                </div>
            </div>
        </section>
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