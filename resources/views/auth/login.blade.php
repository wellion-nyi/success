
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">


</head>
<body>

<div class="h-boder">

    {{-- container --}}
    <div class="containter h-align">
        {{-- row --}}
        <div class="row">
            {{-- colums --}}
            <div class="col-sm-8">
                {{-- image --}}
                <div class="image">
                    <img src="{{asset('/upload/birt.png')}}" class="img-thumbnail h-img">
                    <p class="h-log">Login</p>
                </div>
                {{-- end image --}}


                {{-- form --}}
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    
                    {{-- h-form for email--}}
                    <div class="h-form">


                        <i class="fa fa-user-o n-fa-user" aria-hidden="true"></i>

                       <input id="email" type="email" class="form-control n-fafa n-controller @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email Address" autofocus>

                       @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        
                    </div>
                    {{-- end h-form for email--}}

                    {{-- for password --}}
                    <div class="h-form n-second">
                        <i class="fa fa-lock n-fa-user" aria-hidden="true"></i>


                        <input id="password" type="password" class="form-control n-fafa n-controller @error('password') is-invalid @enderror" name="password" required placeholder="Password" autocomplete="current-password">

                      
                             @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        
                    </div>

                    {{-- end for password --}}

                    {{-- remember --}}

                        <div class="form-check n-remember">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>

                    {{-- end remember --}}
                                    <a class="btn btn-link n-forgot" href="{{ route('password.request') }}">


                    {{-- for get password --}}

                    <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">

                                <div class="n-submit" style="padding-top: 20px; padding-bottom: 20px;">
                                    <button type="submit" class="n-for-submit">
                                    {{ __('Login') }}
                                    </button>
                                </div>
                                



                                @if (Route::has('password.request'))
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>

                    {{-- end for get password --}}



                </form>

                {{-- end form --}}

                



            </div>
            {{-- colums --}}
            
        </div>
        {{-- row --}}
        
    </div>
    {{-- container --}}
    
</div>

    



</body>
</html>












{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 --}}