<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed&display=swap" rel="stylesheet">
    <title>Harold's Coffee</title>
</head>

<body>
    <div class="shadow-sm rounded">
        <nav class="navbar navbar-light bg-light justify-content-between">
            <div></div>
            <ul class="navbar-nav flex-row mx-5">
                <li class="nav-item">
                    <a class="nav-link px-2" href="<?php echo base_url("login") ?>">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-2" href="#">Signup</a>
                </li>
                <!-- <li class="nav-item">
                    cart</li> -->
            </ul>
        </nav>
        <nav class="navbar navbar-expand-lg navbar-light bg-light px-5">
            <a class="navbar-brand" style="
    font-family: 'Sansita Swashed', cursive;" href="<?php echo base_url() ?>">Harold's Coffee</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
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
        </nav>
    </div>