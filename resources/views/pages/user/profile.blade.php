@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Profile</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/profile') }}">
                        {{ csrf_field() }}

                        <input type="hidden" name="token" value="{{ 0 }}">

                        <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                            <label for="last_name" class="col-md-4 control-label">Last name</label>

                            <div class="col-md-6">
                                <input id="last_name" type="d" class="form-control" name="last_name" value="{{ $profile->last_name }}" required autofocus>

                                @if ($errors->has('last_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('sex_id') ? ' has-error' : '' }}">
                            <label for="sex_id" class="col-md-4 control-label">Sex</label>

                            <div class="col-md-6">
                                <input id="sex_id" type="text" class="form-control" name="sex_id" value="{{ $profile->sex_id }}" required>

                                @if ($errors->has('sex_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sex_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('coordinate') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Coordinate</label>
                            <div class="col-md-6">
                                <input id="coordinate" type="text" class="form-control" name="coordinate" value="{{ $profile->coordinate }}" required>

                                @if ($errors->has('coordinate'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('coordinate') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('cell_phone') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Cell Phone</label>
                            <div class="col-md-6">
                                <input id="cell_phone" type="text" class="form-control" name="cell_phone" value="{{ $profile->cell_phone }}" required>

                                @if ($errors->has('cell_phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cell_phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Address</label>
                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" value="{{ $profile->address }}" required>

                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('birthday') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Birthday</label>
                            <div class="col-md-6">
                                <input id="birthday" type="date" class="form-control" name="birthday" value="{{ substr($profile->birthday, 0, 10) }}" required>

                                @if ($errors->has('birthday'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('birthday') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Update
                                </button>
                            </div>
                        </div>
                    </form>
                        {{--{{ Form::open(array('url' => 'foo/bar')) }}--}}
                        {{--{{ Form::close() }}--}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
