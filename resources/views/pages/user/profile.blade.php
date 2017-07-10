@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Profile</div>
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                        {{ Form::open(array('url' => '/profile_save')) }}
                        <div class='form-group col-md-8'>
                            {!! Form::label('name', 'Name:') !!}
                            {!! Form::text('name', $user->name, ['class' => 'form-control']) !!}
                            {!! Form::label('last_name', 'Last name:') !!}
                            {!! Form::text('last_name', $profile->last_name, ['class' => 'form-control']) !!}
                            {!! Form::label('sex_id', 'Sex:') !!}
                            {!! Form::select('sex_id', ['1' => 'Male', '2' => 'Female'], $profile->sex_id, ['class' => 'form-control']) !!}
                            {!! Form::label('coordinate', 'Geolocation:') !!}
                            <a class="btn btn-link btn-xs" id="locate_coordinate" >Get auto geolocation</a>
                            {!! Form::text('coordinate', $profile->coordinate, ['class' => 'form-control']) !!}
                            {!! Form::label('cell_phone', 'Cell Phone:') !!}
                            {!! Form::text('cell_phone', $profile->cell_phone, ['class' => 'form-control']) !!}
                            {!! Form::label('address', 'Address:') !!}
                            {!! Form::text('address', $profile->address, ['class' => 'form-control']) !!}
                            {!! Form::label('birthday', 'Birthday:') !!}
                            {!! Form::text('birthday', substr($profile->birthday, 0, 10), ['class' => 'form-control']) !!}
                        </div>
                        {!! Form::submit('Update', ['class' => 'btn btn-success form-control']) !!}
                        {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
    <script src="/public/js/get_geolocation.js"></script>
    @endsection
