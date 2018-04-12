@extends('layouts.app')

@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <form id="form-login" class="p-t-15" role="form" method="POST" action="{{ route('password.email') }}">
        {{ csrf_field() }}
        <div class="form-group form-group-default {{ $errors->has('email') ? ' has-error' : '' }}">
            <label>Reset Password</label>
            <div class="controls">
                <input id="email" type="email" placeholder="Enter your registered email address" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
            </div>
            @if ($errors->has('email'))
                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
            @endif
        </div>
        <!-- END Form Control-->
        <!-- START Form Control-->
        <!-- END Form Control-->
        <button class="btn btn-block btn-primary btn-cons m-t-10" type="submit"><div class="pull-left">  <i class="fs-14 pg-mail"></i></div>Send Password Reset Link</button>

    </form>
<!--<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Reset Password</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Send Password Reset Link
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>-->
@endsection
