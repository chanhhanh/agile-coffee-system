<nav style="width: 40%; margin: 0 auto">
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <button class="nav-link active" id="nav-unconfirmed-tab" data-bs-toggle="tab" data-bs-target="#nav-unconfirmed" type="button" role="tab" aria-controls="nav-unconfirmed" aria-selected="true">Unconfirmed</button>
    <button class="nav-link" id="nav-confirmed-tab" data-bs-toggle="tab" data-bs-target="#nav-confirmed" type="button" role="tab" aria-controls="nav-confirmed" aria-selected="false">Confirmed</button>
    <button class="nav-link" id="nav-delivering-tab" data-bs-toggle="tab" data-bs-target="#nav-delivering" type="button" role="tab" aria-controls="nav-delivering" aria-selected="false">Delivering</button>
    <button class="nav-link" id="nav-delivered-tab" data-bs-toggle="tab" data-bs-target="#nav-delivered" type="button" role="tab" aria-controls="nav-delivered" aria-selected="false">Delivered</button>
    <button class="nav-link" id="nav-cancelled-tab" data-bs-toggle="tab" data-bs-target="#nav-cancelled" type="button" role="tab" aria-controls="nav-cancelled" aria-selected="false">Cancelled</button>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active between" id="nav-unconfirmed" role="tabpanel" aria-labelledby="nav-unconfirmed-tab">
    <div class="card-history">
      <div class="date-order"> Delivering on
        <div style="margin-left: 5px;">27/03/2022</div>
      </div>
      <div class="flex-row-history space-history">
        <div class="flex-row-history ">
          <div>
            <img src="<?php echo base_url("/img/coffee.jpg") ?>" alt="..." class="img-coffee"></img>
          </div>
          <div class="flex-col-history margin-1">
            <div class="flex-row-history space-history">
              <div class="bold-history margin-2">ID order: </div>
              <div>#52487VVHFI45</div>
            </div>
            <div class="flex-row-history">
              <div class="bold-history margin-2">Total quantity: </div>
              <div>2</div>
            </div>
            <div class="flex-row-history">
              <div class="bold-history margin-2">Size: </div>
              <div>L, M, S</div>
            </div>
            <div class="flex-row-history">
              <div class="bold-history margin-2">Totals: </div>
              <div>4.5</div>
            </div>
          </div>
        </div>
        <div class="flex-col-history">
          <a class="btn-view-order-detail" href="<?php echo base_url("/order_details.php") ?>">View order details</a>
          <a class="btn-order-again" href="<?php echo base_url("") ?>">Cancel</a>
        </div>
      </div>
    </div>
    <!-- <div style="height: 400px;" class="d-flex align-items-center justify-content-center">No orders yet! Order now!!!</div> -->
  </div>


  <div class="tab-pane fade between" id="nav-confirmed" role="tabpanel" aria-labelledby="nav-confirmed-tab">
    <div class="card-history">
      <div class="date-order"> Confirmed on
        <div style="margin-left: 5px;">27/03/2022</div>
      </div>
      <div class="flex-row-history space-history">
        <div class="flex-row-history ">
          <div>
            <img src="<?php echo base_url("/img/coffee.jpg") ?>" alt="..." class="img-coffee"></img>
          </div>
          <div class="flex-col-history margin-1">
            <div class="flex-row-history space-history">
              <div class="bold-history margin-2">ID order: </div>
              <div>#52487VVHFI45</div>
            </div>
            <div class="flex-row-history">
              <div class="bold-history margin-2">Total quantity: </div>
              <div>2</div>
            </div>
            <div class="flex-row-history">
              <div class="bold-history margin-2">Size: </div>
              <div>L, M, S</div>
            </div>
            <div class="flex-row-history">
              <div class="bold-history margin-2">Totals: </div>
              <div>4.5</div>
            </div>
          </div>
        </div>
        <div class="flex-col-history">
          <a class="btn-view-order-detail" href="<?php echo base_url("/order_details.php") ?>">View order details</a>
          <a class="btn-order-again" href="<?php echo base_url("") ?>">Order again</a>
        </div>
      </div>
    </div>
  </div>




  <div class="tab-pane fade between" id="nav-delivering" role="tabpanel" aria-labelledby="nav-delivering-tab">
    <div class="card-history">
      <div class="date-order"> Delivering on
        <div style="margin-left: 5px;">27/03/2022</div>
      </div>
      <div class="flex-row-history space-history">
        <div class="flex-row-history ">
          <div>
            <img src="<?php echo base_url("/img/coffee.jpg") ?>" alt="..." class="img-coffee"></img>
          </div>
          <div class="flex-col-history margin-1">
            <div class="flex-row-history space-history">
              <div class="bold-history margin-2">ID order: </div>
              <div>#52487VVHFI45</div>
            </div>
            <div class="flex-row-history">
              <div class="bold-history margin-2">Total quantity: </div>
              <div>2</div>
            </div>
            <div class="flex-row-history">
              <div class="bold-history margin-2">Size: </div>
              <div>L, M, S</div>
            </div>
            <div class="flex-row-history">
              <div class="bold-history margin-2">Totals: </div>
              <div>4.5</div>
            </div>
          </div>
        </div>
        <div class="flex-col-history">
          <a class="btn-view-order-detail" href="<?php echo base_url("/order_details.php") ?>">View order details</a>
          <a class="btn-order-again" href="<?php echo base_url("") ?>">Order again</a>
        </div>
      </div>
    </div>
  </div>

  <div class="tab-pane fade between" id="nav-delivered" role="tabpanel" aria-labelledby="nav-delivered-tab">
    <div class="card-history">
      <div class="date-order"> Delivered on
        <div style="margin-left: 5px;">27/03/2022</div>
      </div>
      <div class="flex-row-history space-history">
        <div class="flex-row-history ">
          <div>
            <img src="<?php echo base_url("/img/coffee.jpg") ?>" alt="..." class="img-coffee"></img>
          </div>
          <div class="flex-col-history margin-1">
            <div class="flex-row-history space-history">
              <div class="bold-history margin-2">ID order: </div>
              <div>#52487VVHFI45</div>
            </div>
            <div class="flex-row-history">
              <div class="bold-history margin-2">Total quantity: </div>
              <div>2</div>
            </div>
            <div class="flex-row-history">
              <div class="bold-history margin-2">Size: </div>
              <div>L, M, S</div>
            </div>
            <div class="flex-row-history">
              <div class="bold-history margin-2">Totals: </div>
              <div>4.5</div>
            </div>
          </div>
        </div>
        <div class="flex-col-history">
          <a class="btn-view-order-detail" href="<?php echo base_url("/order_details.php") ?>">View order details</a>
          <a class="btn-order-again" href="<?php echo base_url("") ?>">Order again</a>
        </div>
      </div>
    </div>
  </div>

  <div class="tab-pane fade between" id="nav-cancelled" role="tabpanel" aria-labelledby="nav-cancelled-tab">
    <div style="height: 400px;" class="d-flex align-items-center justify-content-center">Cancelled!</div>
  </div>

</div>