 <div class="col-md-3 address">
    <ul>
        <li>
            <h5>Name</h5>
        </li>
        <li>
            {{$address->address}}
        </li>
        <li>
           {{$address->city}}
        </li>
        <li>
            {{$address->country}}
        </li>
        <li>
            {{$address->phoneNumber}}
        </li>
    </ul>
    <br>
    <div class="row">
        <div class="col-sm-5">
            <a href="{{route('addAddress',['id' => $address->id]) }}"><button class="modifica">Modify</button></a>
        </div>
        <div class="col-sm-3">
            <a href="{{route('deleteAddress',['id' => $address->id]) }}"><button class="rimuovi">Remove</button></a>
        </div>
    </div>
</div>

