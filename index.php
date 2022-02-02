<?php
include './assets/function/functions.php';
$data = barang("SELECT * FROM data_barang WHERE status = 'promo' ORDER BY id_barang DESC");

function format_rupiah($total)
{
  $angka = "Rp." . number_format($total, 2, ',', '.');
  return $angka;
}
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="./assets/img/logo.png">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- My CSS -->
  <link rel="stylesheet" href="./assets/css/main.css">
  <link rel="stylesheet" href="./assets/css/responsive.css">

  <!-- Animation -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

  <!-- Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@300;400;500&family=Hind+Madurai:wght@300;400&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Habibi&family=Hind+Madurai:wght@300;400&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Hind+Madurai:wght@300;400&family=Martel+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

  <!-- Icon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

  <title>Ido Baut</title>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href=""><span class="color-change">IDO</span> BAUT</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Akhir Navbar -->

  <!-- Hero -->
  <div class="swiper mySwiper ">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="./assets/img/pexels-photo-1045535.jpeg" alt="">
        <div class="caption">
          <h1>Murah, berkualitas dan terpercaya</h1>
          <p>Toko Kami Menjual berbagai macam Baut Lengkap dan Berkualitas, Silahkan Memilih dan Melihat Berbagai Produk
            kami.</p>
          <a href="" class="btn btn-primary">Shop Now</a>
        </div>
      </div>
      <div class="swiper-slide">
        <img src="./assets/img/pexels-photo-4513031.jpeg" alt="">
        <div class="caption">
          <h1>Murah, berkualitas dan terpercaya</h1>
          <p>Toko Kami Menjual berbagai macam Baut Lengkap dan Berkualitas, Silahkan Memilih dan Melihat Berbagai Produk
            kami.</p>
          <a href="" class="btn btn-primary">Shop Now</a>
        </div>
      </div>
      <div class="swiper-slide">
        <img src="./assets/img/pexels-photo-6212576.jpeg" alt="">
        <div class="caption">
          <h1>Murah, berkualitas dan terpercaya</h1>
          <p>Toko Kami Menjual berbagai macam Baut Lengkap dan Berkualitas, Silahkan Memilih dan Melihat Berbagai Produk
            kami.</p>
          <a href="" class="btn btn-primary">Shop Now</a>
        </div>
      </div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
  </div>
  <!-- Akhir Hero -->

  <!-- Back to top -->
  <button onclick="topFunction()" id="myBtn" title="Go to top">
    <ion-icon name="caret-up-outline"></ion-icon>
  </button>
  <!-- Akhir back to top -->

  <!-- Why Us Section -->
  <section id="about" class="why-us-section">
    <!-- Page Content -->
    <div class="container about">

      <!-- Page Heading -->
      <h1 class="why-us-heading py-4">Kenapa Harus Produk Kami ?</h1>
      <div class="row">
        <div class="col-lg-4 col-sm-6 mb-4">
          <div class="why-us-card">
            <h4 class="icons">
              <i class="bi bi-shield-check"></i>
            </h4>
            <div class="card-body">
              <h4 class="why-us-cards-title card-title">
                Bergaransi
              </h4>
              <p class="why-us-cards-text card-text">Produk yang kami jual bergaransi dan kami akan mengganti produk
                jika tidak ada kesesuaian dengan mengikuti ketentuan garansi Alchemist Baut</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
          <div class="why-us-card">
            <h4 class="icons">
              <i class="bi bi-cash-coin"></i>
            </h4>
            <div class="card-body">
              <h4 class="why-us-cards-title card-title">
                Harga Terjangkau
              </h4>
              <p class="why-us-cards-text card-text">Produk yang kami jual bergaransi dan kami akan mengganti produk
                jika tidak ada kesesuaian dengan mengikuti ketentuan garansi Alchemist Baut</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
          <div class="why-us-card">
            <h4 class="icons">
              <i class="bi bi-person-check"></i>
            </h4>
            <div class="card-body">
              <h4 class="why-us-cards-title card-title">
                Mengutamakan Kepuasan Pelanggan
              </h4>
              <p class="why-us-cards-text card-text">Produk yang kami jual bergaransi dan kami akan mengganti produk
                jika tidak ada kesesuaian dengan mengikuti ketentuan garansi Alchemist Baut</p>
            </div>
          </div>
        </div>

      </div>
      <!-- /.container -->
  </section>
  <!-- Akhir Why Us Section -->

  <!-- Product Highlight -->
  <section id="products" class="product-highlight-section">
    <!-- Page Content -->
    <div class="container">
      <h1 class="product-heading">Produk Terbaru</h1>
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 row-cols-lg-4 row-cols-xxl-6">

        <?php foreach ($data as $barang) : ?>
          <div class="cards col-lg-3 col-md-4 col-6">
            <div class="product-card card">
              <a href="">
                <img src="./assets/img/BAUT L GALVANIS 2.jpg" class="product-card-img card-img-top mt-4" alt="...">
              </a>
              <div class="card-body">
                <span class="product-promo position-absolute top-0 start-0 bg-danger text-white">Promo</span>
                <a href="">
                  <h5 class="product-titles "><?= $barang['nama_barang']; ?></h5>
                  <p class="product-price card-text">
                    <span class="real-price"><?= format_rupiah($barang['harga_barang']); ?></span><br>
                    <span class="discount-price"><?= format_rupiah($barang['harga_promo']); ?></span>
                  </p>
                </a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>

      </div>

  </section>
  <!-- Akhir Product Highlight -->

  <!-- Footer -->
  <section class="footer">
    <div class="container">
      <footer class="py-5">
        <div class="row">
          <div class="footer-title col-2">
            <h5>Link</h5>
            <ul class="nav flex-column">
              <li class="navs-item mb-2"><a href="" class="navs-link p-0">Home</a></li>
              <li class="navs-item mb-2"><a href="" class="navs-link p-0">About</a></li>
              <li class="navs-item mb-2"><a href="" class="navs-link p-0">Product</a></li>
              <li class="navs-item mb-2"><a href="" class="navs-link p-0">Contact</a></li>
            </ul>
          </div>

          <div class="footer-title col-2">
            <h5>Info</h5>
            <ul class="nav flex-column">
              <li class="navs-item mb-2"><a href="" class="navs-link p-0">Pemesanan</a></li>
              <li class="navs-item mb-2"><a href="" class="navs-link p-0">Pengiriman</a></li>
              <li class="navs-item mb-2"><a href="" class="navs-link p-0">FaQ</a></li>
              <li class="navs-item mb-2"><a href="" class="navs-link p-0">Terms & Conditions</a></li>
            </ul>
          </div>

          <div class="footer-title col-2">
            <h5>Contact</h5>
            <ul class="nav flex-column">
              <li class="navs-item mb-2"><a href="" class="navs-link p-0">Whatsapp</a></li>
            </ul>
          </div>

          <div class="col-4 offset-1">
            <form>
              <h1 class="pembayaran-text">
                Pembayaran :
              </h1>
              <img src="./assets/img/logo-pembayaran.png" class="logo-pembayaran" alt="">
            </form>
          </div>
        </div>
      </footer>
    </div>

    <div class="container">
      <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center">
          <span class="footer-text">Ido Baut © 2021 All rights reserved</span>
        </div>

        <span class="footer-text-1">Developed by <a class="developer" href=""> Ragazzo Tech</a></span>
      </footer>
    </div>
  </section>
  <!-- Akhir Footer -->

  <!-- Option 2: Separate Popper and Bootstrap JS -->

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
  </script>

  <!-- Icon JS -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  <!-- AOS Animation -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <!-- Initialize AOS -->
  <script>
    AOS.init();
  </script>

  <!-- Swiper JS -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 1,
      spaceBetween: 0,
      loop: true,
      autoplay: {
        delay: 3500,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>

  <script>
    //Get the button
    var mybutton = document.getElementById("myBtn");

    // When the user scrolls down 500px from the top of the document, show the button
    window.onscroll = function() {
      scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>
</body>

</html>