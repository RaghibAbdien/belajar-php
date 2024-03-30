<?php
$produk = array(
  array(
      "nama" => "Sepatu Lari",
      "deskripsi" => "Sepatu lari dengan teknologi terbaru untuk kenyamanan dan performa maksimal",
      "harga" => 15000000,
      "img" => "produk1.jpg"
  ),
  array(
      "nama" => "Sepatu Basket",
      "deskripsi" => "Sepatu basket dengan desain modern dan bantalan yang kuat untuk melindungi kaki",
      "harga" => 8000000,
      "img" => "produk2.jpg"
  ),
  array(
      "nama" => "Sepatu Casual",
      "deskripsi" => "Sepatu casual yang nyaman untuk digunakan sehari-hari dan cocok untuk wanita",
      "harga" => 8000000,
      "img" => "produk3.jpg"
  ),
  array(
      "nama" => "Classic Canvas",
      "deskripsi" => " Sangat cocok ketika kamu menghadiri acara yang sifatnya formal, resmi, atau spesial.",
      "harga" => 8000000,
      "img" => "produk4.jpg"
  ),
  array(
      "nama" => "Sneakers",
      "deskripsi" => "Dapat digunakan di hampir seluruh kegiatan bahkan untuk pergi ke kantor",
      "harga" => 8000000,
      "img" => "produk5.jpg"
  ),
  array(
    "nama" => "Sepatu Lari",
    "deskripsi" => "Sepatu lari dengan teknologi terbaru untuk kenyamanan dan performa maksimal",
    "harga" => 15000000,
    "img" => "produk1.jpg"
  ),
  array(
    "nama" => "Sepatu Basket",
    "deskripsi" => "Sepatu basket dengan desain modern dan bantalan yang kuat untuk melindungi kaki",
    "harga" => 8000000,
    "img" => "produk2.jpg"
  ),
  array(
    "nama" => "Sepatu Casual",
    "deskripsi" => "Sepatu casual yang nyaman untuk digunakan sehari-hari dan cocok untuk wanita",
    "harga" => 8000000,
    "img" => "produk3.jpg"
  ),
  array(
      "nama" => "Classic Canvas",
      "deskripsi" => " Sangat cocok ketika kamu menghadiri acara yang sifatnya formal, resmi, atau spesial.",
      "harga" => 8000000,
      "img" => "produk4.jpg"
  ),
  array(
      "nama" => "Sneakers",
      "deskripsi" => "Dapat digunakan di hampir seluruh kegiatan bahkan untuk pergi ke kantor",
      "harga" => 8000000,
      "img" => "produk5.jpg"
  ),
  array(
    "nama" => "Sepatu Lari",
    "deskripsi" => "Sepatu lari dengan teknologi terbaru untuk kenyamanan dan performa maksimal",
    "harga" => 15000000,
    "img" => "produk1.jpg"
  ),
  array(
    "nama" => "Sepatu Basket",
    "deskripsi" => "Sepatu basket dengan desain modern dan bantalan yang kuat untuk melindungi kaki",
    "harga" => 8000000,
    "img" => "produk2.jpg"
  ),
  array(
    "nama" => "Sepatu Casual",
    "deskripsi" => "Sepatu casual yang nyaman untuk digunakan sehari-hari dan cocok untuk wanita",
    "harga" => 8000000,
    "img" => "produk3.jpg"
  ),
  array(
      "nama" => "Classic Canvas",
      "deskripsi" => " Sangat cocok ketika kamu menghadiri acara yang sifatnya formal, resmi, atau spesial.",
      "harga" => 8000000,
      "img" => "produk4.jpg"
  ),
  array(
      "nama" => "Sneakers",
      "deskripsi" => "Dapat digunakan di hampir seluruh kegiatan bahkan untuk pergi ke kantor",
      "harga" => 8000000,
      "img" => "produk5.jpg"
  )
);

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>List Produk</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Logo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link fw-bold" aria-current="page" href="#">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold" href="#">Tentang Kami</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold" href="#">Layanan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold" href="#">Kontak</a>
        </li>
      </ul>
        <a href="#" class="btn btn-outline-success">Get Started</a>
    </div>
  </div>
</nav>

<main>
    <section>
        <div class="container">
            <div class="row">
            <?php foreach ($produk as $item): ?>
              <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                  <div class="card">
                      <img src="assets/img/<?= $item["img"]; ?>" class="card-img-top" alt="...">
                      <div class="card-body">
                          <h5 class="card-title"><?= $item["nama"]; ?></h5>
                          <div class="card-text">
                              <span><?= $item["deskripsi"]; ?></span>
                              <span class="py-2 fw-semibold">Rp<?= number_format($item["harga"], 0, ',', '.'); ?></span>
                          </div>
                          <a href="#" class="btn btn-primary w-100">Learn More</a>
                      </div>
                  </div>
              </div>
            <?php endforeach; ?>
            </div>
          </div>
    </section>
</main>

<footer class="footer mt-auto py-3 bg-light">
    <div class="container text-center">
      <span class="text-muted">© 2024 Your Company. All rights reserved.</span>
    </div>
</footer>

<!-- Bootstrap JavaScript dan dependencies -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
