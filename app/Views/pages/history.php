 <!-- <div class="form-history">
    
    <div class="form-title-info-history row-history">
        <div>Name</div>
        <div>Size</div>
        <div>Price</div>
    </div>
    <div class="form-content-history row-history">
        <div>Iced White Mocha</div>
        <div>M</div>
        <div>5.50</div>
    </div>

</div>  -->


  <!-- <section class="tabs">
	            <input id="tab-1" type="radio" name="radio-set" class="tab-selector-1" checked="checked" />
		        <label for="tab-1" class="tab-label-1">Confirmed</label>
		
	            <input id="tab-2" type="radio" name="radio-set" class="tab-selector-2" />
		        <label for="tab-2" class="tab-label-2">Delivering</label>
		
	            <input id="tab-3" type="radio" name="radio-set" class="tab-selector-3" />
		        <label for="tab-3" class="tab-label-3">Delivered</label>
			
	            <input id="tab-4" type="radio" name="radio-set" class="tab-selector-4" />
		        <label for="tab-4" class="tab-label-4">Cancelled</label>
            
			    <div class="clear-shadow"></div>
			
		        <div class="content">
			        <div class="content-1">
						
				    </div>
			        <div class="content-2">
						
				    </div>
			        <div class="content-3">
						
				    </div>
				    <div class="content-4">
						
				    </div>
		        </div>
			</section>
        </div>   -->

<nav style="width: 60%; margin: 0 auto">
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
      <div style="margin: 0 auto;">
    <table class="table-history">
            <tr class="form-title-info-history col-history">
                <th>Name</th>
                <th>Size</th>
                <th>Amount</th>
                <th>Price</th>
            </tr>
            <tr class="form-content-history" >
                <td>Iced White Mocha</td>
                <td>M</td>
                <td>1</td>
                <td>5.50</td>
            </tr>
        </div>
        </table>
        <hr style="width: 60%; margin: 0 auto"></hr>
        <div style="text-align: right; margin-right: 27%; margin-top: 15px">
            <div class="">Totals: <span>4.5</span> </div>
            <button class="repurchase-history right-history">Repurchase</button>
        </div>
    </div>
    </div>
  <div class="tab-pane fade between" id="nav-cancelled" role="tabpanel" aria-labelledby="nav-cancelled-tab">Đã hủy</div>
</div>

