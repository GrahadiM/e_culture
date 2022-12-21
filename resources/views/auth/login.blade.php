@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ trans('auth.login.title_singular') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ trans('auth.email_address') }}</label>

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
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ trans('auth.pass') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                <a href="javascript:void(0)" type="button" id="show_pass" class="hide_pass"><i id="show-password" class="fa fa-eye-slash"></i></a>
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
                                    <input class="form-check-input" type="checkbox" name="show_password" id="checkbox" {{ old('show_password') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="show_password">
                                        <i id="icon-eye" class="fa fa-eye-slash"></i> {{ trans('auth.show_password') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- jQuery -->
                        <script src="{{ asset('adm') }}/plugins/jquery/jquery.min.js"></script>
                        <script type="text/javascript">
                            // $('#password').hidePassword('focus');
                        	// $('#password_confirmation').hidePassword('focus');
                            $("#show_pass").on('click', function() {
                                // $(this).slideUp();
                                if ($('#show_pass').attr('class', 'show_pass')) {
                                    $('#show_pass').attr('class', 'hide_pass');
                                    $('#show-password').attr('class',$('#show_pass').attr('class', 'hide_pass')?"fa fa-eye":"fa fa-eye-slash");
                                } else if ($('#show_pass').attr('class', 'hide_pass')) {
                                    $('#show_pass').attr('class', 'show_pass');
                                    $('#show-password').attr('class',$('#show_pass').attr('class', 'show_pass')?"fa fa-eye-slash":"fa fa-eye");
                                }

                            });
                            $(document).ready(function() {
                                $('#checkbox').on('change', function(){
                                    $('#icon-eye').attr('class',$('#checkbox').prop('checked')==true?"fa fa-eye":"fa fa-eye-slash");
                                    $('#password').attr('type',$('#checkbox').prop('checked')==true?"text":"password");
                                });
                            });
                        </script>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ trans('auth.remember_me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ trans('auth.login.title') }}
                                </button>

                                @if (Route::has('register'))
                                    <a class="btn btn-link" href="{{ route('register') }}">
                                        {{ trans('auth.create_account') }}
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
