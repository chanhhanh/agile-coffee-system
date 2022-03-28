<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed&display=swap" rel="stylesheet">
  <link href=<?php echo base_url('/css/styles.css') ?> rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <title>Harold's Coffee</title>
</head>

<body>
  <div class="shadow-sm rounded sticky-top">
    <nav class="navbar navbar-light bg-light justify-content-between">
      <div></div>
      <ul class="navbar-nav flex-row mx-5 swap3">
        <?php
        $uri = service('uri');
        ?>
        <?php if (session()->get('isLoggedIn')) : ?>
          </li>
          <li class=" nav-item <?= ($uri->getSegment(1) == 'user' ? 'active' : null) ?>">
            <a class="nav-link px-2" href="<?php echo base_url('user'); ?>"><?php echo session()->get('username'); ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-2" href="<?php echo base_url("logout") ?>">Logout</a>
          </li>
        <?php else : ?>
          <li>
            <div class="row ">
              <div class="col-lg-12 col-sm-12 col-12 main-section ">
                <div class="dropdown swapCart">
                  <button type=" button" class="btn btn-light" data-toggle="dropdown" onclick="on()">
                    <i class="bi bi-cart"></i> <span class="badge badge-pill badge-danger" style="color: black">(0)</span>
                  </button>
                  <!-- <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus
sagittis lacus vel augue laoreet rutrum faucibus.">
                  Popover on bottom
                </button> -->
                  <div class=" dropdown-menu" id="popup" onclick="off()">
                    <div class="row total-header-section">
                      <div class="col-lg-6 col-sm-6 col-6">
                        <!-- <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="badge badge-pill badge-danger">3</span> -->
                      </div>
                      <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
                        <p>Total: <span class="text-info">$2,000</span></p>
                      </div>
                    </div>
                    <div class="row cart-detail">
                      <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                        <!--  -->
                      </div>
                      <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                        <p>Iced White Mocha</p>
                        <span class="price text-info"> $250.22</span> <span class="count"> Quantity:01</span>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                        <button class="btn btn-primary btn-block">Checkout</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item <?= ($uri->getSegment(1) == 'login' ? 'active' : null) ?>">
            <a class="nav-link px-2" href="<?php echo base_url('login'); ?>">Login</a>
          </li>
          <li class="nav-item <?= ($uri->getSegment(1) == 'register' ? 'active' : null) ?>">
            <a class="nav-link px-2" href="<?php echo base_url('register'); ?>">Signup</a>
          </li>
          <script>
            function on() {
              document.getElementById("popup").style.display = "block";
            }

            function off() {
              document.getElementById("popup").style.display = "none";
            }
          </script>
        <?php endif; ?>
        <!-- <li class="nav-item">
                    cart</li> -->
      </ul>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-light bg-light px-5 frontof">
      <a class="navbar-brand" style="
    font-family: 'Sansita Swashed', cursive;" href="<?php echo base_url(); ?>">Harold's Coffee</a>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav font-weight-normal">
          <li class="nav-item">
            <a class="nav-link text-dark" href="<?php echo base_url("/menu") ?>">Menu</a>
          </li>
          <li class="nav-item">
            <span class="nav-link px-0">|</span>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="#">Store</a>
          </li>
          <li class="nav-item">
            <span class="nav-link px-0">|</span>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="#">Help</a>
          </li>
        </ul>
      </div>
  </div>
  </nav>
  </nav>
  </div>