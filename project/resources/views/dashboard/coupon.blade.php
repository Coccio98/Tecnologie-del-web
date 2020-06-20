@extends('layouts.app', ['activePage' => 'coupon-management', 'titlePage'=>'Coupon Management'])
@section('content')
    @component('dashboard.layout')
        @slot('type_p')
            Coupons
        @endslot
        @slot('type_s')
            coupon
        @endslot
        @slot('t_head')
            <th>
                Code
            </th>
            <th>
                Amount
            </th>
            <th>
                Expiry Date
            </th>
            <th>
                Status
            </th>
            <th class="text-right">
                Actions
            </th>
        @endslot
        @slot('t_body')
            @foreach($coupons as $coupon)
                <tr>
                    <td>
                        {{$coupon -> code}}
                    </td>
                    <td>
                        {{$coupon -> amount}} %
                    </td>
                    <td>
                        {{$coupon -> expiry_date}}
                    </td>
                    <td>
                        @if($coupon -> status)
                            Active
                        @else
                            Not Active
                        @endif
                    </td>
                    <td class="td-actions text-right">
                        <a rel="tooltip" class="btn btn-success btn-link" href="#"
                           data-original-title="" title="">
                            <i class="material-icons">edit</i>
                            <div class="ripple-container"></div>
                        </a>
                    </td>
                </tr>
            @endforeach
        @endslot
    @endcomponent
@endsection
