@extends('layout.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-2">
            <div class="panel panel-default">
                <h1>Login </h1>

                <div class="uk-margin-top uk-margin-medium panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                                <input id="email" type="email" class="uk-input" name="email" value="{{ old('email') }}" placeholder="E-Mail Address" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                                <input id="password" type="password" class="uk-input" name="password" placeholder="Password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" class="uk-checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 col-md-offset-4">
                                <button type="submit" class="uk-button uk-button-primary uk-width-1-4 uk-margin-small-bottom">
                                    Login
                                </button>

                                <a class="my-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                        <hr>
    <div class="form-group ">
        <div class="col-md-12 col-md-offset-4 " style="text-align: center;">
            <a href="{{ url('/auth/facebook') }}"  class="btn btn-facebook "><i class="fa fa-facebook"></i> Facebook</a>
        </div>
    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section ('sidebar')
@include ('sidebars.index')
@endsection
