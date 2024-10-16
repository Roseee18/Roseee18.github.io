<?php
// Tambahkan kode PHP di sini jika diperlukan
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <!--=============== BOXICONS ===============-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <!--=============== SWIPER CSS ===============--> 
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="assets/css/styles.css">

    <title>Responsive watches website</title>
</head>
<body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">
                <i class='bx bxs-watch nav__logo-icon'></i> Rolex
            </a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="#home" class="nav__link active-link">Home</a>
                    </li>
                    <li class="nav__item">
                        <a href="#featured" class="nav__link">Featured</a>
                    </li>
                    <li class="nav__item">
                        <a href="#products" class="nav__link">Products</a>
                    </li>
                    <li class="nav__item">
                        <a href="#new" class="nav__link">New</a>
                    </li>
                </ul>

                <div class="nav__close" id="nav-close">
                    <i class='bx bx-x' ></i>
                </div>
            </div>

            <div class="nav__btns">
                <!-- Theme change button -->
                <i class='bx bx-moon change-theme' id="theme-button"></i>

                <div class="nav__shop" id="cart-shop">
                    <i class='bx bx-shopping-bag' ></i>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-grid-alt' ></i>
                </div>
            </div>
        </nav>
    </header>

    <!--==================== CART ====================-->
    <div class="cart" id="cart">
        <i class='bx bx-x cart__close' id="cart-close"></i>

        <h2 class="cart__title-center">My Cart</h2>

        <div class="cart__container">
            <?php
            // Tambahkan kode PHP untuk menampilkan produk di keranjang
            // Contoh:
            // $products = array(
            //     array('name' => 'Jazzmaster', 'price' => 15599000),
            //     array('name' => 'Rose Gold', 'price' => 8990000),
            //     array('name' => 'Longines Rose', 'price' => 4590000)
            // );

            // foreach ($products as $product) {
            //     echo '<article class="cart__card">';
            //     echo '<div class="cart__box">';
            //     echo '<img src="assets/img/featured1.png" alt="" class="cart__img">';
            //     echo '</div>';
            //     echo '<div class="cart__details">';
            //     echo '<h3 class="cart__title">' . $product['name'] . '</h3>';
            //     echo '<span class="cart__price">Rp ' . number_format($product['price'], 0, ',', '.') . '</span>';
            //     echo '<div class="cart__amount">';
            //     echo '<div class="cart__amount-content">';
            //     echo '<span class="cart__amount-box">';
            //     echo '<i class="bx bx-minus"></i>';
            //     echo '</span>';
            //     echo '<span class="cart__amount-number">1</span>';
            //     echo '<span class="cart__amount-box">';
            //     echo '<i class="bx bx-plus"></i>';
            //     echo '</span>';
            //     echo '</div>';
            //     echo '<i class="bx bx-trash-alt cart__amount-trash"></i>';
            //     echo '</div>';
            //    