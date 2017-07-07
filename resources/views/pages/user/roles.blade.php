@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <h1>Users</h1>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Last Name</th>
                            <th>Sex</th>
                            <th>Birthday</th>
                            <th>Role</th>
                            <th>Chenge</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($profiles as $profile)
                        <tr>
                            <td>{{ $profile->user->name }}</td>
                            <td>{{ $profile->last_name }}</td>
                            <td>{{ $profile->sex->id }}</td>
                            <td>{{ $profile->birthday }}</td>
                            <td>{{ $profile->user->role->name }}</td>
                            <td>
                                <a class="btn btn-xs btn-default" href="{{ url('/roles_change', ['id'=>$profile->user_id]) }}">Change</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
