<?php
include_once 'function/function.php';
// Memanggil fungsi getQuote() yang telah dibuat di function.php
$json = getQuote("https://api.akuari.my.id/randomtext/bacot");
// Menampilkan kalimat yang telah diambil dari API
$quote = $json['hasil']['result'];
?>

<section class="py-5" id="kuote">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Random Quote</h1>
                <p><?= empty($quote) ? "Sedang tidak bisa digunakan" : $quote ?></p>
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