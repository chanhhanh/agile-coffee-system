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

  <title>Harold's Coffee</title>
  <style>
    <?php if (isset($top_5_popular) && isset($seasonal_coffee)) : ?><?php foreach ($top_5_popular as $coffee) : ?>#customize-<?php echo $coffee['id'] ?> {
      display: none;
    }

    #coffee-<?php echo $coffee['id'] ?>:hover #customize-<?php echo $coffee['id'] ?> {
      background-color: #e9ecef;
      display: block;
    }

    #coffee-<?php echo $coffee['id'] ?>:hover {
      background-color: #e9ecef;
    }

    <?php endforeach; ?><?php foreach ($seasonal_coffee as $coffee) : ?>#customize-<?php echo $coffee['id'] ?> {
      display: none;
    }

    #coffee-<?php echo $coffee['id'] ?>:hover #customize-<?php echo $coffee['id'] ?> {
      background-color: #e9ecef;
      display: block;
    }

    #coffee-<?php echo $coffee['id'] ?>:hover {
      background-color: #e9ecef;
    }

    <?php endforeach; ?><?php endif; ?>
  </style>
</head>

<body>
  <div class="shadow-sm rounded sticky-top">
    <nav class="navbar navbar-light bg-light justify-content-between">
      <div></div>
      <ul class="navbar-nav flex-row mx-5">
        <?php
        $uri = service('uri');
        ?>
        <?php if (session()->get('isLoggedIn')) : ?>
          </li>
          <li class="nav-item <?= ($uri->getSegment(1) == 'user' ? 'active' : null) ?>">
            <a class="nav-link px-2" href="<?php echo base_url('user'); ?>"><?php echo session()->get('username'); ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-2" href="<?php echo base_url('logout'); ?>">Logout</a>
          </li>
        <?php else : ?>
          <li class="nav-item <?= ($uri->getSegment(1) == 'login' ? 'active' : null) ?>">
            <a class="nav-link px-2" href="<?php echo base_url('login'); ?>">Login</a>
          </li>
          <li class="nav-item <?= ($uri->getSegment(1) == 'register' ? 'active' : null) ?>">
            <a class="nav-link px-2" href="<?php echo base_url('register'); ?>">Signup</a>
          </li>
        <?php endif; ?>
        <!-- <li class="nav-item">
                    cart</li> -->
      </ul>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-light bg-light px-5">
      <a class="navbar-brand" style="
    font-family: 'Sansita Swashed', cursive;" href="<?php echo base_url(); ?>">Harold's Coffee</a>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav font-weight-normal">
          <li class="nav-item">
            <a class="nav-link text-dark" href="#">Menu</a>
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