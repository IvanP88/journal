@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div >Users</div>
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                        {{ Form::open(array('url' => '/role_save')) }}
                        {!! Form::hidden('user_id', $profile->user_id, ['class' => 'form-control']) !!}
                        {!! Form::text('name', $profile->user->name, ['readonly']) !!}
                        {!! Form::text('last_name', $profile->last_name, ['readonly']) !!}
                        {!! Form::select('role_id', $roles, $profile->user->role_id, ['class' => '']) !!}
                        {!! Form::submit('Update', ['class' => 'btn btn-success']) !!}
                        {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
@endsection