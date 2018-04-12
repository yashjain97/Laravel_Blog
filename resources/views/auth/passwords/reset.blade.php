@extends('layouts.app')

@section('content')

                    <form id="form-login" class="p-t-15" role="form" method="POST" action="{{ route('password.request') }}">
                        {{ csrf_field() }}

                        <input type="hidden" name="token" value="{{ $token }}">
                        <label>Reset Password</label>
                        <div class="form-group form-group-default {{ $errors->has('email') ? ' has-error' : '' }}">
                            <label>Email Address</label>
                            <div class="controls">
                                <input id="email" placeholder="Enter your email address" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group form-group-default {{ $errors->has('password') ? ' has-error' : '' }}">
                            <label>Password</label>

                            <div class="controls">
                                <input id="password" placeholder="Enter new password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group form-group-default {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label>Confirm Password</label>
                            <div class="controls">
                                <input id="password-confirm" placeholder="Confirm new password" type="password" class="form-control" name="password_confirmation" required>

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                                <button type="submit" class="btn btn-block btn-primary btn-cons m-t-10">
                                   <div class="pull-left"><i class="fs-14 fa fa-lock"></i></div> Reset Password
                                </button>
                    </form>
@endsection
