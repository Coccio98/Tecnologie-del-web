<div class="payment-options">

    <div class="product-body">
        <p>Address</p>
        <h3 class="payment-name">Address</h3>
        <div class="row">
            <div class="col-sm-5">
                <p>Name</p>
                <h3 class="payment-name">{{$data->first()->cardHolder}}</h3>
            </div>
            <div class="col-sm-5">
            <p class="payment-method">Payment Method</p>
                <h3 class="payment-name">Credit card end with: {{substr($data->first()->cardNumber,-4)}}</h3>
            </div>
        </div>
    </div>
</div>
