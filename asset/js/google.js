var map;
var directionsService = new google.maps.DirectionsService();
var directionsDisplay = new google.maps.DirectionsRenderer();
var map_center;
var map_zoom;
jQuery('document').ready(function () {
    initialize();
});
// Initialize the google map object
function initialize() {
    var styles = [
        {
            stylers: [
                {hue: "#RDF00"},
                {saturation: 12}
            ]
        }
    ];
    var mapOptions = {
        center: new google.maps.LatLng(44.64886, -63.57532),
        zoom: 12,
        scrollwheel: false,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
    map.setOptions({styles: styles});
    (function ($) {
        apply_autocomplete($("#picking_up")[0]);
        apply_autocomplete($("#dropping_off")[0]);
    })(jQuery);
}

function apply_autocomplete(input) {

    var options = {
        types: ['geocode']
    };
    var autocomplete = new google.maps.places.Autocomplete(input, options);
    autocomplete.bindTo('bounds', map);
}

// Calculate route and directions
function calcRoute() {

    //create waypoints array & fill it with all locations entered by user
    
    var waypts = new Array();
    (function ($) {
        var start_address = $("#picking_up").val();
        var end_address = $("#dropping_off").val();
        $('input[name="toWaypoints[]"]').each(function ()
        {
            waypts.push({
                location: $(this).val(),
                stopover: true
            });
        });
        // Create a Request variable for Map
        var request = {
            origin: start_address,
            destination: end_address,
            waypoints: waypts,
            optimizeWaypoints: true,
            travelMode: google.maps.DirectionsTravelMode.DRIVING
        };
        // Execute the Route Method to generate Direction Route on Map
        directionsService.route(request, function (response, status) {

            if (status == google.maps.DirectionsStatus.OK) {
                directionsDisplay.setMap(map);
                directionsDisplay.setDirections(response);
                var route = response.routes[0];
                // calculate total distance and duration
                // generate list of locations to print
                var distance = 0;
                var time = 0;
                var locations_list = '<ol>';
                for (var i = 0; i < route.legs.length; i++) {
                    var theLeg = route.legs[i];
                    locations_list += '<li>' + theLeg.start_address + '</li>';
                    distance += theLeg.distance.value;
                    time += theLeg.duration.value;
                }
                locations_list += '<li>' + theLeg.end_address + '</li>';
                locations_list += '</ol>';
                //calculate the prise for the secand logique using general rpises 
                var paris_cal = 40 + (Math.round(time / 60)) * 22 + (Math.round(distance / 100) / 10) * 34;
                
                $('#booking_control').addClass('display_none');
                $('#result_content').removeClass('display_none');
      
                $(".b-picking-up").append(start_address);
                $(".b-dropping-off").append(end_address);
                $(".b-time").append( Math.round(time / 60));
                $(".b-distance").append( showDistance(distance));                         
                $(".b-price-ht").append('111');
                $(".b-price-tva").append('222');
                $(".b-price-ttc").append(paris_cal.toFixed(2));
                  
                map_zoom = map.getZoom();
                $('#next_step').attr('type', 'submit');
                 
            }
            else {
                var statusText = getDirectionStatusText(status);
                alert(statusText);
            }
        });
    })(jQuery);
}
function calcRouteSmall() {
//create waypoints array & fill it with all locations entered by user
    var waypts = new Array();
    (function ($) {
        var start_address = $("#picking_up").val();
        var end_address = $("#dropping_off").val();
        $('input[name="toWaypoints[]"]').each(function ()
        {
            waypts.push({
                location: $(this).val(),
                stopover: true
            });
        });
        // Create a Request variable for Map
        var request = {
            origin: start_address,
            destination: end_address,
            waypoints: waypts,
            optimizeWaypoints: true,
            travelMode: google.maps.DirectionsTravelMode.DRIVING
        };
        // Execute the Route Method to generate Direction Route on Map
        directionsService.route(request, function (response, status) { 
            if (status == google.maps.DirectionsStatus.OK) {
                directionsDisplay.setMap(map);
                directionsDisplay.setDirections(response); 
                map_zoom = map.getZoom(); 
            }
            else {
                var statusText = getDirectionStatusText(status);
                alert(statusText);
            }
        });
    })(jQuery);
}
function prise_cal() {

}
// Show distance in different measurements
function showDistance(distance) {
    return Math.round(distance / 100) / 10 + " km (" + Math.round((distance * 0.621371192) / 100) / 10 + " miles)";
}

// Get the Map direction status message
function getDirectionStatusText(status) {
    switch (status) {
        case google.maps.DirectionsStatus.INVALID_REQUEST :
            return "Invalid request";
        case google.maps.DirectionsStatus.MAX_WAYPOINTS_EXCEEDED :
            return "Maximum waypoints exceeded";
        case google.maps.DirectionsStatus.NOT_FOUND :
            return "Not found";
        case google.maps.DirectionsStatus.OVER_QUERY_LIMIT :
            return "Over query limit";
        case google.maps.DirectionsStatus.REQUEST_DENIED :
            return "Request denied";
        case google.maps.DirectionsStatus.UNKNOWN_ERROR :
            return "Unknown error form the google API Reloading the page or contcat the admin ";
        case google.maps.DirectionsStatus.ZERO_RESULTS :
            return "chose your derection carfully !";
        default:
            return status;
    }
}

// Add More intermediare Point to the reservation ligne
function add_waypoint() {
    waypoint_container = '<div class="frm-row"> ';
    waypoint_container += '    <div class="section colm colm12">';
    waypoint_container += '        <label for="pickuplace" class="field-label">Pick up </label>';
    waypoint_container += '        <label for="pickuplace" class="field prepend-icon"> ';
    waypoint_container += '            <input id="toWaypoints" name="toWaypoints[]" type="text" placeholder="Kyoto  ... ">';
    waypoint_container += '             <br><a class="left" onclick="return add_waypoint();"><i class="fa fa-plus"></i>Add a Step</a>';
    waypoint_container += '             <a class="right" onclick="return remove_waypoint(this);"><i class="fa fa-trash-o"></i> Remove </a>';
    waypoint_container += '            <label for="pickuplace" class="field-icon"><i class="fa fa-map-marker"></i></label> ';
    waypoint_container += '        </label>';
    waypoint_container += '    </div><!-- end section -->  ';
    waypoint_container += '</div><!-- end section --> ';
    (function ($) {
        $('.added-stupe-area').before(waypoint_container);
        $('[name=toWaypoints\\[\\]]').each(function () {
            apply_autocomplete($(this)[0]);
        });
    })(jQuery);
    return false;
}

// Remove the intermediare Point
function remove_waypoint(obj) {
    (function ($) {
        $(obj).parent().parent().remove();
        return false;
    })(jQuery);
}

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(onGeoSuccess);
    }
}

function onGeoSuccess(event) {
    geocoder = new google.maps.Geocoder();
    codeLatLng(event.coords.latitude, event.coords.longitude);
}
var geocoder;
function codeLatLng(lat, lng) {
    var latlng = new google.maps.LatLng(lat, lng);
    geocoder.geocode({
        'latLng': latlng
    }, function (results, status) {
        if (status === google.maps.GeocoderStatus.OK) {
            if (results[0]) {
                //console.log(results[1]);
                document.getElementById("picking_up").value = results[0].formatted_address;
            } else {
                alert('No results found');
            }
        } else {
            alert('Geocoder failed due to: ' + status);
        }
    });
}

function getLocationDestination() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(onGeoSuccessDestination);
    }
}

function onGeoSuccessDestination(event) {
    geocoder = new google.maps.Geocoder();
    codeLatLngDestination(event.coords.latitude, event.coords.longitude);
}

var geocoder;
function codeLatLngDestination(lat, lng) {
    var latlng = new google.maps.LatLng(lat, lng);
    geocoder.geocode({
        'latLng': latlng
    }, function (results, status) {
        if (status === google.maps.GeocoderStatus.OK) {
            if (results[0]) {
                document.getElementById("dropping_off").value = results[0].formatted_address;
            } else {
                alert('No results found');
            }
        } else {
            alert('Geocoder failed due to : ' + status);
        }
    });
}