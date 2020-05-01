<ul>
    <li>
        <h5>Credit card end with: {{substr($order->cardNumber,-4)}}</h5>
    </li>
    <li>
        Expiration date: {{$order->expiring}}
    </li>
    <li>
        Card Holder: {{$order->cardHolder}}
    </li>
    <li>
        Address: {{$order->address}}
    </li>
    <li>
        City: {{$order->city}}
    </li>
    <li>
        Country: {{$order->country}}
    </li>
    <li>
        Phone Number: {{$order->phoneNumber}}
    </li>
</ul>
