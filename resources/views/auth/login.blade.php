@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>
                <div class="text-center">
                    <img src="data:image/png;base64,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" class="img-fluid" alt="200">
                  </div>


                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
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
