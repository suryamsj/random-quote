<?php
if (isset($_GET['page'])) {
    $page = $_GET['page'];

    switch ($page) {
        case 'quote-1':
            include "page/random-quote-1.php";
            break;
        case 'quote-2':
            include "page/random-quote-2.php";
            break;
    }
} else {
    include "page/random-quote-1.php";
}
