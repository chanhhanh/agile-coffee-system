<div class="container mt-5 d-flex flex-column">
    <div class="container-fluid d-flex flex-row justify-content-around">
        <div class="tab-pickup">
            <a href="#" class="fs-5 fw-light text-decoration-none link-dark">Pick Up</a>
        </div>
        <div class="tab-delivery">
            <a href="#" class="fs-4 fw-bold text-decoration-none link-dark">Delivery</a>
        </div>
    </div>
    <div class="form-input mt-5 px-5 container w-75">
        <form action="">
            <input type="text" class="form-control w-100 my-5" placeholder="Your Address Here" aria-label="Username" aria-describedby="addon-wrapping">
            <div class="used-address">
                Addresses you have used:
                <?php foreach ($addresses as $address) : ?>
                    <div class="my-2 fw-light fs-6"><?= $address['address'] ?></div>
                <?php endforeach ?>
            </div>
            <button type="submit" id="submit" onclick="setAmount()" class="btn btn-secondary shadow-none mt-5 float-end">
                Set Delivery Time
            </button>
        </form>
    </div>
    <div id="map"></div>
</div>
<script>
    let defaultCoord = [10.7743, 106.6669]; // coord mặc định, 9 giữa HCMC
	let zoomLevel = 13;
	let mapConfig = {
		attributionControl: false, // để ko hiện watermark nữa
		center: defaultCoord, // vị trí map mặc định hiện tại
		zoom: zoomLevel, // level zoom
	};
	
	window.onload = function() {
		// init map
		mapObj = L.map('map', {attributionControl: false}).setView(defaultCoord, zoomLevel);
		
		// add tile để map có thể hoạt động, xài free từ OSM
		L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
			attribution: '© <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
		}).addTo(mapObj);
        let marker = L.marker([10.761175, 106.682314]).addTo(mapObj);
        let popup = L.popup();
		popup.setContent("<b>Harold's Coffee</b>");
		marker.bindPopup(popup);
        L.Routing.control({
            waypoints: [
                L.latLng(10.761175, 106.682314),
                L.latLng(10.771564, 106.644510),
            ],
        }).addTo(mapObj);
	};
</script>