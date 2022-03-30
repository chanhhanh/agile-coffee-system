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
                <div class="my-2 fw-light fs-6">Abc Sesame St.</div>
            </div>
            <button type="submit" id="submit" onclick="setAmount()" class="btn btn-secondary shadow-none mt-5 float-end">
                Set Delivery Time
            </button>
        </form>
    </div>
</div>