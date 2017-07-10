@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div >Distance</div>
                    <h2>Map</h2>
                    <div class="col-md-12" id="map" style="height: 500px;"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script type="text/javascript">
        var url = '{{ route('get_user_coordinate') }}';
        var token = '{{ Session::token()}}';
    </script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDeK0-ZKp-bCVm5QYWzb1FuW6NihzOHgOg&callback=initMap">
    </script>
    <script src="/resources/assets/js/users/map_one.js"></script>
    @endsection