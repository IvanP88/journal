$(document).ready(function () {
    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        } else {
            x.innerHTML = "Geolocation is not supported by this browser.";
        }
    }

    function showPosition(position) {
        $('[name="coordinate"]').val(position.coords.latitude + ',' + position.coords.longitude);
        console.log(position.coords.latitude + ',' + position.coords.longitude);
    }
    $("#locate_coordinate").click(function () {
        console.log('click');
        getLocation();
    });
});