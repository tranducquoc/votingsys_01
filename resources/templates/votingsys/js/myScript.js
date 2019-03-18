function initAutocomplete() {
    var input = document.getElementById('pac-input');
    var searchBox = new google.maps.places.SearchBox(input);
}

// hidden button
$(document).ready(function () {
    $(".add-button").click(function () {
        $(".hidden-button").animate({
            width: "toggle"
        });
    });
});
