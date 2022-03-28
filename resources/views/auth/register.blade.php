@extends('layouts.app')

@section('container')
<div class="container">
    <div class="row content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <table>
                            <tr>
                                <div class="row mb-3">
                                    <td>
                                        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
                                    </td>
                                    <td>
                                        <div class="col-md-6">
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </td>
                                </div>
                            </tr>
                            <tr>
                                <div class="row mb-3">
                                    <td>
                                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                                    </td>
                                    <td>
                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
            
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </td>
                                </div>
                            </tr>

                            <tr>
                            <div class="row mb-3">
                                <td>
                                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                                </td>
                                <td>
                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
        
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </td>
                            </div>
                            </tr>

                            <tr>
                                <div class="row mb-3">
                                    <td>
                                        <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>
                                    </td>
                                    <td>
                                        <div class="col-md-6">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </td>
                                </div>
                            </tr>

                            <tr>
                                <td>
                                    <div class="row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-success">
                                                {{ __('Register') }}
                                            </button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </table>

                        

                        


                            

                        

                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
