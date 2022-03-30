<!DOCTYPE html>
<html lang="vi" class="h-100">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Harold's Coffee | Order Confirm</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./public/bootstrap/bootstrap.min.css">
    <!-- Font awesome -->
    <link rel="stylesheet" href="./public/font-awesome/font-awesome.min.css" type="text/css">
    <!-- Custom css-->
    <link rel="stylesheet" href="./public/css/order-detail.css" type="text/css">
</head>

<body>
    <main role="main">
        <div class="container mt-4">
            <form class="needs-validation" name="frmthanhtoan" method="post" action="#">
                <div class="py-5 text-center">
                    <i class="fa fa-credit-card fa-4x" aria-hidden="true"></i>
                    <h2>Order confirmation</h2>
                    <p class="lead">Please check Customer information, Cart information before placing an Order.</p>
                </div>
                <div class="row">
                    <div class="col-md-4 order-md-2 mb-4" style="width: 462px; margin-left:154px">
                        <h4 class=" d-flex justify-content-between align-items-center mb-3">
                            <span class="text-muted">Cart</span>
                            <span class="badge badge-secondary badge-pill">2</span>
                        </h4>
                        <ul class="list-group mb-3">
                            <li class="product list-group-item d-flex justify-content-between lh-condensed">
                                <div>
                                    <h6 class="my-0">Iced White Mochac</h6>
                                    <small class="text-muted product-line-price">11800000.00 x 2</small>
                                </div>

                                <div class="product-quantity" style="width: 52px">
                                    <input type="number" value="1" min="1" style="width:40px">
                                </div>
                                <div class="product-removal">
                                    <button class="remove-product"
                                        style="border: 0; padding: 4px 8px; background-color: #c66; color: #fff; font-family: font-bold; font-size: 12px; border-radius: 3px;">
                                        Remove
                                    </button>

                                    <span class="text-muted" style="padding-left:23px">23600000</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <div>
                                    <h6 class="my-0">Pink Drink</h6>
                                    <small class="text-muted product-line-price">11800000.00 x 2</small>
                                </div>

                                <div class="product-quantity" style="width: 52px">
                                    <input type="number" value="1" min="1" style="width:40px">
                                </div>
                                <div class="product-removal">
                                    <button class="remove-product"
                                        style="border: 0; padding: 4px 8px; background-color: #c66; color: #fff; font-family: font-bold; font-size: 12px; border-radius: 3px;">
                                        Remove
                                    </button>

                                    <span class="text-muted" style="padding-left:23px">23600000</span>
                            </li>
                            <!-- <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <div>
                                    <h6 class="my-0">Pink Drink</h6>
                                    <small class="text-muted">14990000.00 x 8</small>
                                </div>
                                <span class="text-muted">119920000</span>
                            </li> -->
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Total money</span>
                                <strong>143520000</strong>
                            </li>
                        </ul>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Promo code">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-secondary">Confirm</button>
                            </div>
                        </div>
                        <hr class="mb-4">
                        <button class="btn btn-primary btn-lg btn-block" type="submit" name="btnDatHang"
                            style="margin-top: 0; margin-bottom: 0; margin-left: 353px; margin-right: 0;">Order</button>
                    </div>
                    <div class="col-md-8 order-md-1" style="width: 600px; margin-left:30px">
                        <h4 class="mb-3">Customer information</h4>

                        <div class="row">
                            <div class="col-md-12">
                                <label for="exampleInputName">Full Name</label>
                                <input type="text" class="form-control" id="exampleInputName"
                                    aria-describedby="nameHelp" placeholder="Full your name">
                            </div>
                            <div class="col-md-12">
                                <label for="inputGender">Gender</label>
                                <select id="inputGender" class="form-control">
                                    <option selected> Choose...</option>
                                    <option> Male</option>
                                    <option> Female</option>
                                    <option> Other</option>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <label for="exampleInputAddress">Address</label>
                                <input type="text" class="form-control" id="exampleInputAddress"
                                    aria-describedby="addressHelp" placeholder="Your address">
                            </div>
                            <div class="col-md-12">
                                <label for="exampleInputPhone">Phone</label>
                                <input type="text" class="form-control" id="exampleInputPhone"
                                    aria-describedby="phoneHelp" placeholder="Your phone">
                            </div>
                            <div class="col-md-12">
                                <label for="exampleInputEmail">Email</label>
                                <input type="text" class="form-control" id="exampleInputEmail"
                                    aria-describedby="emailHelp" placeholder="Your email">
                            </div>

                        </div>

                        <h4 class="mb-3">Payments</h4>
                        <!--  Tieền mặt MoMo ZaloPay ShopeePay-->
                        <div class="d-block my-3">
                            <div class="custom-control custom-radio">
                                <input id="httt-1" name="httt_ma" type="radio" class="custom-control-input" required=""
                                    value="1">
                                <label class="custom-control-label" for="httt-1">Cash on Delivery</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="httt-2" name="httt_ma" type="radio" class="custom-control-input" required=""
                                    value="2">
                                <label class="custom-control-label" for="httt-2">Direct Bank Transfer</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="httt-3" name="httt_ma" type="radio" class="custom-control-input" required=""
                                    value="3">
                                <label class="custom-control-label" for="httt-3">Paypal</label>
                                <img src="https://www.logolynx.com/images/logolynx/c3/c36093ca9fb6c250f74d319550acac4d.jpeg"
                                    alt="" width="50">
                            </div>
                        </div>

                    </div>
                </div>
            </form>

        </div>
        <!-- End block content -->
    </main>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src=".public/jquery/jquery.min.js"></script>
    <script src=".public/popperjs/popper.min.js"></script>
    <script src=".public/bootstrap/js/bootstrap.min.js"></script>

    <!-- Custom script  -->

    <script src=".public/js/app.js"></script>

</body>

</html>

</html>