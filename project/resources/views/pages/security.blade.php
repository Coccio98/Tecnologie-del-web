@extends('index')

@section('content')
    @component('partials.reusable.section')
        <div class="col-md-11 col-md-push-1">
            <div class="section-title">
                <h3 class="title">Access and security</h3>
            </div>

            <div class="profile-security">
                <form method="POST" action=" @if(empty($modify)){{ route('modify') }} @else {{ route('save') }}@endif">
                    @csrf
                    <div class="form-group row security-body">
                        <div class="col-sm-10">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Name:</label>
                            <div class="col-md-6">
                                @if(empty($modify))
                                    {{ Auth::user()->name }}
                                @else
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ Auth::user()->name }}" required autocomplete="name" autofocus>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-group row security-body">
                        <div class="col-sm-10">
                            <label for="surname" class="col-md-4 col-form-label text-md-right">Surname:</label>
                            <div class="col-md-6">
                                @if(empty($modify))
                                    {{ Auth::user()->surname }}
                                @else
                                    <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ Auth::user()->surname }}" required autocomplete="surname" autofocus>
                                    @error('surname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="form-group row security-body">
                        <div class="col-sm-10">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Email:</label>
                            <div class="col-md-6">
                                {{ Auth::user()->email }}
                            </div>
                        </div>
                    </div>

                    <div class="form-group row security-body">
                        <div class="col-sm-10">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">Phone:</label>
                            <div class="col-md-6">
                                @if(empty($modify))
                                    {{ Auth::user()->phone }}
                                @else
                                    <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ Auth::user()->phone }}" required autocomplete="phone" autofocus>
                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="form-group row security-body">
                        @if(empty($modify))
                        <div class="col-sm-2">
                            <button class="modify-btn">Modify</button>
                        </div>
                        @else
                        <div class="col-sm-5">
                            <button type="submit" name="save" class="save-btn">Save</button>
                        </div>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    @endcomponent



@endsection
