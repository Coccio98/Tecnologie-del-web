@extends('layouts.app', ['activePage' => 'user-management', 'titlePage'=>'User Management'])
@section('content')
    @component('dashboard.layout')
        @slot('type_p')
            Users
        @endslot
        @slot('type_s')
            user
        @endslot
        @slot('href')

        @endslot
        @slot('t_head')
            <th>
                Name
            </th>
            <th>
                Surname
            </th>
            <th>
                Email
            </th>
            <th>
                Creation date
            </th>
            <th>
                Role
            </th>
            <th class="text-right">
                Actions
            </th>
        @endslot
        @slot('t_body')
            @foreach($users as $user)
                <tr>
                    <td>
                        {{$user -> name}}
                    </td>
                    <td>
                        {{$user -> surname}}
                    </td>
                    <td>
                        {{$user -> email}}
                    </td>
                    <td>
                        {{$user -> created_at}}
                    </td>
                    <td>
                        @if($user -> role)
                            <p class="text-primary font-weight-bold"> Admin </p>
                        @else
                            User
                        @endif
                    </td>
                    <td class="td-actions text-right">
                        <a rel="tooltip" class="btn btn-success btn-link" href="{{route('profile.edit',['id'=>1])}}"
                           data-original-title="" title="">
                            <i class="material-icons">edit</i>
                            <div class="ripple-container"></div>
                        </a>
                    </td>
                </tr>
            @endforeach
            <tr>
                {!!  $users->render()  !!}
            </tr>
        @endslot
    @endcomponent
@endsection
