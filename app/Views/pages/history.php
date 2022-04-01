<nav style="width: 40%; margin: 0 auto">
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <button class="nav-link active" id="nav-confirmed-tab" data-bs-toggle="tab" data-bs-target="#nav-confirmed" type="button" role="tab" aria-controls="nav-confirmed" aria-selected="true">Confirmed</button>
    <button class="nav-link" id="nav-delivering-tab" data-bs-toggle="tab" data-bs-target="#nav-delivering" type="button" role="tab" aria-controls="nav-delivering" aria-selected="false">Delivering</button>
    <button class="nav-link" id="nav-delivered-tab" data-bs-toggle="tab" data-bs-target="#nav-delivered" type="button" role="tab" aria-controls="nav-delivered" aria-selected="false">Delivered</button>
    <button class="nav-link" id="nav-cancelled-tab" data-bs-toggle="tab" data-bs-target="#nav-cancelled" type="button" role="tab" aria-controls="nav-cancelled" aria-selected="false">Cancelled</button>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active between" id="nav-confirmed" role="tabpanel" aria-labelledby="nav-confirmed-tab">Đã xác nhận</div>

  <div class="tab-pane fade between" id="nav-delivering" role="tabpanel" aria-labelledby="nav-delivering-tab">Đang giao</div>

  <div class="tab-pane fade between" id="nav-delivered" role="tabpanel" aria-labelledby="nav-delivered-tab">
        <div class="card-history" >
          <div class="flex-row-history space-history">
            <div class="flex-row-history ">
              <div>
                <img src="<?php echo base_url("/img/coffee.jpg") ?>"  alt="..." class="img-coffee"></img>
              </div>
              <div class="flex-col-history margin-1">
                <div class="flex-row-history space-history">
                  <div class="bold-history margin-2">ID order: </div>
                  <div>#52487VVHFI45</div>
                </div>
                <div class="flex-row-history">
                  <div class="bold-history margin-2">Quantity: </div>
                  <div>2</div>
                </div>
                <div class="flex-row-history">
                  <div class="bold-history margin-2">Size: </div>
                  <div>L, M, S</div>
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
    </div>


  <div class="tab-pane fade between" id="nav-cancelled" role="tabpanel" aria-labelledby="nav-cancelled-tab">Đã hủy</div>
</div>

