<div class="dropdown">
    <div class="btn btn-secondary dropdown-toggle payment-options" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <div class="row">
            <div class="col-sm-5">
                <h4>Credit card end with: {{substr($payment->cardNumber,-4)}}</h4>
            </div>
            <div class="col-sm-3">
                <h4>Expiration date: {{$payment->expiring}}</h4>
            </div>
            <div class="col-sm-3 col-sm-push-2 ">
                <i class="fa fa-arrow-down"></i>
            </div>
        </div>
    </div>
    <div class="dropdown-menu info-card" aria-labelledby="dropdownMenuButton">
        <div class="row">
            <div class="col-sm-5">
                <h4>{{$payment->cardHolder}}</h4>
            </div>
            <div class="col-sm-5">
                <!-- TODO -->
                <ul>
                    <li>
                        <h5>{{$payment->name}}</h5>
                    </li>
                    <li>
                        {{$payment->address}}
                    </li>
                    <li>
                        {{$payment->city}}
                    </li>
                    <li>
                        {{$payment->country}}
                    </li>
                    <li>
                        {{$payment->number}}
                    </li>
                    <li>
                        {{$payment->phoneNumber}}
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2">
                <a href="{{route('addCreditCard',['id' => $payment->id]) }}"><button class="modifica">Modify</button></a>
            </div>
            <div class="col-sm-2">
                <a href="{{route('deleteCreditCard',['id' => $payment->id]) }}"><button class="rimuovi">Remove</button></a>
            </div>
        </div>

    </div>
</div>
