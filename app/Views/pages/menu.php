<div class="menu">
    <div class="container">
        <div class="row">



            <?php foreach ($coffee_type as $coffeeType) : ?>
                <div class="col-6 mt-5">
                    <div class="row rounded py-1">
                        <div class="col-6">
                            <a class="link-secondary text-decoration-none my-1" href="<?php echo base_url() ?>">
                                <p class="my-1 fw-light text-dark fs-4"><?php echo $coffeeType["coffee_type"] ?><p>
                            </a>
                        </div>
                        <div class="col-sm">
                            <p class="my-1 fw-light text-dark fs-6">S</p>
                        </div>
                        <div class="col-sm">
                            <p class="my-1 fw-light text-dark fs-6">M</p>
                        </div>
                        <div class="col-sm">
                            <p class="my-1 fw-light text-dark fs-6">L</p>
                        </div>
                        <div class="col-sm">

                        </div>
                    </div>
                    <?php foreach ($coffees as $coffee) : ?>
                        <?php if ($coffee["coffee_type"] == $coffeeType["coffee_type"]) : ?>
                            <?php
                            $hover = $coffee["sold_out"] != 0 ?  "text-black-50 disabled" :  "coffee_hover text-dark";
                            $link =  $coffee["sold_out"] != 0 ?   "#" : "?coffee=" . $coffee["id"];
                            ?>
                            <div class="row rounded py-1 <?= $hover ?>">
                                <div class=" col-6">
                                    <a class="text-decoration-none my-1 <?= $hover ?>" href="<?= $link ?>">
                                        <p class="my-1"><?php echo $coffee["coffee_name"] ?></p>
                                    </a>
                                </div>
                                <div class="col-sm">
                                    <p class="my-1"><?php echo $coffee["price_s"] ?></p>
                                </div>
                                <div class="col-sm">
                                    <p class="my-1"><?php echo $coffee["price_m"] ?></p>
                                </div>
                                <div class="col-sm">
                                    <p class="my-1"><?php echo $coffee["price_l"] ?></p>
                                </div>
                                <div class="col-sm">
                                    <a class="link-secondary text-decoration-none my-1 add" onclick="getCoffee(<?= $coffee['id'] ?>,'<?= $coffee['coffee_name'] ?>')" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <u class="my-1">Add</u>
                                    </a>
                                </div>
                            </div>

                        <?php endif; ?>

                    <?php endforeach; ?>
                </div>

            <?php endforeach; ?>

        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-light">
            <div class="modal-header d-block">
                <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                <h5 class="modal-title fw-light">Customize</h5>
                <h5 class="modal-title fw-light" id="exampleModalLabel"></h5>
            </div>
            <div class="modal-body">
                <div class="container my-5 mx-2">
                    <p>Size</p>
                    <p>Sweetness</p>
                    <p>Milk</p>
                    <p>Count</p>
                </div>
            </div>
            <div class="modal-footer justify-content-center">
                <a class="link-light text-decoration-none " id="modalSubmit">
                    <button type="button" class="btn btn-secondary shadow-none fw-light">
                        Add To Shopping Cart
                    </button></a>
            </div>
        </div>
    </div>
</div>
<script>
    function getCoffee(id, name) {

        $("#exampleModalLabel").html(name);
        $("#modalSubmit").attr('href', "<?= base_url("/coffee") ?>/" + id);
    }
</script>