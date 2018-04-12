@extends('layouts.app')

@section('content')

                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form id="form-login" class="p-t-15" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group form-group-default {{ $errors->has('name') ? ' has-error' : '' }}">
                            <label >Name</label>

                            <div class="controls">
                                <input  type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group form-group-default {{ $errors->has('email') ? ' has-error' : '' }}">
                            <label >E-Mail Address</label>

                            <div class="controls">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group form-group-default {{ $errors->has('password') ? ' has-error' : '' }}">
                            <label >Password</label>

                            <div class="controls">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group form-group-default {{ $errors->has('password') ? ' has-error' : '' }}"">
                            <label >Confirm Password</label>

                            <div class="controls">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
        
@endsection
