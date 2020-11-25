<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <meta charset="utf-8">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css"></head>
<body><div class="h-boder">    {{-- container --}}
    <div class="containter h-align">
        {{-- row --}}
        <div class="row">
            {{-- colums --}}
            <div class="col-sm-8">
                {{-- image --}}
                <div class="image">
                    <img src="{{asset('/upload/birt.png')}}" class="img-thumbnail h-img">
                    <p class="h-log">Register</p>
                </div>
                {{-- end image --}}                {{-- form --}}
                <form method="POST" action="{{ route('register') }}">
                    @csrf                    {{-- h-form for name--}}
                    <div class="h-form">                        <i class="fa fa-pencil-square-o n-fa-user" aria-hidden="true"></i>                       <input id="name" type="text" class="form-control n-fafa n-controller @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Name" autofocus>                       @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror                    </div>
                    {{-- end h-form for name--}}                    {{-- h-form for email--}}
                    <div class="h-form n-second">                        <i class="fa fa-user-o n-fa-user" aria-hidden="true"></i>                       <input id="email" type="email" class="form-control n-fafa n-controller @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-Mail Address" autofocus>                       @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror                    </div>
                    {{-- end h-form for email--}}                    {{-- for password --}}
                    <div class="h-form n-second">
                        <i class="fa fa-lock n-fa-user" aria-hidden="true"></i>                        <input id="password" type="password" class="form-control n-fafa n-controller @error('password') is-invalid @enderror" name="password" required placeholder="Password" autocomplete="current-password">                             @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                    </div>                    {{-- end for password --}}                    {{-- for confirm-password --}}
                    <div class="h-form n-second">
                        <i class="fa fa-check n-fa-user" aria-hidden="true"></i>                        <input id="password-confirm" type="password" class="form-control n-fafa n-controller"  name="password_confirmation" required placeholder="Confirm-password" autocomplete="new-password">                    </div>                    {{-- end for confirm-password --}}                    {{-- for get password --}}                    <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">                                <div class="n-submit" style="padding-top: 20px; padding-bottom: 20px;">
                                    <button type="submit" class="n-for-submit">
                                    {{ __('Register') }}
                                    </button>
                                </div>                            </div>
                        </div>                    {{-- end for get password --}}                </form>                {{-- end form --}}            </div>
            {{-- colums --}}        </div>
        {{-- row --}}    </div>
    {{-- container --}}</div></body>
</html>