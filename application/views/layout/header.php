<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Suku.id</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
  <link rel="stylesheet" href="<?php echo base_url('assets/style.css'); ?>" />
</head>

<body>
  <!--Header Start-->
  <header class="bg-header">
    <nav class="container navbar navbar-expand-lg">
      <div class="container-fluid">
        <img src="<?php echo base_url('assets/img/suku-logo.svg'); ?>" alt="" />
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-custom navbar-nav ms-auto mb-lg-0">
            <li class="nav-item">
              <a class="nav-link fw-semibold" href="#hero-section">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-semibold" href="#about-section">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-semibold" href="#product-section">Product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-semibold" href="#contact-section">Kontak</a>
            </li>
            <?php if (empty($this->session->userdata('idMember'))) { ?>
              <div>
                <button type="button" class="btn-custom"><a href="<?php echo site_url('main/login'); ?>">Login</a></button>
              </div>
            <?php } else { ?>
              <div>
                <button type="button" class="btn-custom"><a href="<?php echo site_url('main/logout'); ?>">Logout</a></button>
              </div>
            <?php } ?>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!--Header End-->