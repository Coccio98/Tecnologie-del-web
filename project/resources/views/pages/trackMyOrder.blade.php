@extends('index')

@section('content')

    @component('partials.reusable.section')

        <div>
            <div class="row">
                <div class="col-sm-12">
                    <h3>Track My Order</h3>
                </div>
            </div>

            <div>
                <div class="row text-center">
                    <div class="col-md-4"><h3>Order No:  1</h3> </div>
                    <div class="col-md-4"><h3>Total: 32$</h3> </div>
                    <div class="col-md-4"><h3> Status: shipped</h3></div>
                </div>

                <ol class="progtrckr" data-progtrckr-steps="5">
                    <li class="progtrckr-done">Pending</li>
                    <li class="progtrckr-done">Dispatched </li>
                    <li class="progtrckr-done">Processed</li>
                    <li class="progtrckr-done">Shipped</li>
                    <li class="progtrckr-todo">Delivered</li>
                </ol>

                <div class="col-md-3 address">
                    <!--TODO sistemare appena aggiunte gli ordini nel db -->
                    include('partials.reusable.address-order')

                </div>

                <!-- TODO agiungere metodo di pagamento-->
            </div>
        </div>
    @endcomponent
@endsection
