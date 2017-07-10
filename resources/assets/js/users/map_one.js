
initMap();
function initMap() {
    $.ajax({
        method: 'POST',
        dataType: 'JSON',
        url:    url,
        data:   {_token: token }
    })
    .done(function(data){
        var user = data.coordinate;
        var colledge = data.col_coordinate;
        var lat = user.substring(0, user.indexOf(","));
        var lng = user.substring(user.indexOf(",") + 1);
        var lat_col = colledge.substring(0, colledge.indexOf(","));
        var lng_col = colledge.substring(colledge.indexOf(",") + 1);
        setDate(lat, lng, lat_col, lng_col);
    });
    function setDate(lat, lng, lat_col, lng_col) {
        var coordinate = {lat: Number(lat), lng: Number(lng)};
        var coordinate2 = {lat: Number(lat_col), lng: Number(lng_col)};
        console.log(coordinate);
        console.log(coordinate2);
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 10,
            center: coordinate
        });
        var marker = new google.maps.Marker({
            position: coordinate,
            map: map
        });
        var marker2 = new google.maps.Marker({
            position: coordinate2,
            map: map,
            title: 'XXX'
        });
    }
}