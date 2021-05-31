var mapcenter, map, infoWindow, bounds, custommarker;
var markers = [];
var allmarkers = [];
var CustomMarker;
var fscreens = [];
var properties =
[
    {
        "address_lat": "29.336607",
        "address_long": "48.071198",
    },
    {
        "address_lat": "29.330889",
        "address_long": "48.080055",
    },
    {
        "address_lat": "29.327720",
        "address_long": "48.067499",
    },
    {
        "address_lat": "29.100573",
        "address_long": "46.684954",
    },
    {
        "address_lat": "29.319750",
        "address_long": "48.028570",
    },
    {
        "address_lat": "29.312670",
        "address_long": "48.070740",
    },
    {
        "address_lat": "29.3848269",
        "address_long": "47.9819575",
    },
    {
        "address_lat": "29.348261",
        "address_long": "47.909475",
    },
    {
        "address_lat": "29.296162",
        "address_long": "47.863937",
    },
];
// document.getElementById("flter_map_listing").addEventListener("click", filterListing);

// var g = document.getElementById("governate");
// var governate = g.options[g.selectedIndex].value;
// var a = document.getElementById("area");
// var area = a.options[a.selectedIndex].value;
// fscreens = properties;
// if(governate!=0 || area!=0){
//     fscreens = screens.filter(function (el) {
//         return el.address_governate == governate || el.address_area==area;
//     });
// }

function initMap() {
    mapcenter = { lat: 29.3761015, lng: 47.9643572 };
    map = new google.maps.Map(
    document.getElementById('map'), { zoom: 11, center: mapcenter });
    placeMarkers(properties);
}
function placeMarkers(objpropties){
    var geocoder = new google.maps.Geocoder();
    objpropties.forEach(function (element) {
        if (element.address_lat == '' || element.address_long == '') {
            geocoder.geocode({ address: element.screen_address }, (results, status) => {
                if (status === "OK") {
                    var location = results[0].geometry.location;
                    element.address_lat = location.lat();
                    element.address_long = location.lng();
                    addMarker();
                } else {
                    console.log("Geocode was not successful for the following reason: " + status);
                }
            });
        }
        var obj = {
            lat: element.address_lat,
            long: element.address_long
        }
        markers.push(obj)
    })
    markpins();
}
function markpins() {
    var marker;
    for (let i = 0; i < markers.length; i++) {
        var lat, log;
        lat = Number(markers[i].lat)
        log = Number(markers[i].long)

        marker = new google.maps.Marker({
            id: markers[i].id,
            position: {
                lat: lat, lng: log
            }, map: map,
            animation: google.maps.Animation.DROP,
            title: markers[i].title,
            icon: 'src/images/map-pin.png'
        });
        var position = new google.maps.LatLng(lat, log);
        map.setCenter(position);
        allmarkers.push(marker);
        var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function (event) {
            this.setZoom(11);
        });

        // google.maps.event.addListener(marker, 'click', (function (marker, i) {
        //     return function () {
        //         if (infoWindow)
        //         var infoContents="";
        //         var screen = screens.filter(function (el) {
        //             return el.id == markers[i].id;
        //           });
        //           if(screen){
        //             var tooltip_data = screen[0].detail_url;	
        //             $(".map-screen-popup .popup-body").load(tooltip_data, function(response, status, xhr) {	
        //                 var $slickElement = $(".map-screen-popup .popup-body .screen_images");
        //                 $slickElement.slick();
        //                 $(".map-screen-popup").toggle();
        //             });
        //           }
        //     }
        // })(marker, i));
    }
}
function listScreens(){
    var htmldata="";
      fscreens.forEach(function (element) {
        var lat = Number(element.address_lat)
        var log = Number(element.address_log)
        htmldata = htmldata + 
        '<div class="card screen" data-id="' + element.id + '">' +
            '<div class="card-image">'+
                '<img src="src/images/screen-image1.png" alt="">'+
            '</div>'+
            '<div class="card-body">'+
                '<div class="card-title">'+
                    '<span>' + element.screen_title + '</span>'+
                '</div>'+
                '<ul class="screen-info">'+
                    '<li class="icon">'+
                        '<img src="src/images/svg/dimenssion.svg" alt="">'+ 
                    '</li>'+
                    '<li>'+
                    element.screen_dimenssion +
                    '</li>'+
                '</ul>'+
                '<ul class="screen-info">'+
                    '<li class="icon">'+
                        '<img src="src/images/svg/car.svg" alt="">'+ 
                    '</li>'+
                    '<li>'+
                    element.screen_cars +
                    '</li>'+
                '</ul>'+
            '</div>'+
        '</div>';
    });
    $(".search__screen .screens-listing").html(htmldata);
    $(".search__screen .screens-listing").slick();
    
    
    //highlightPin();
}
function setMapOnAll(map) {
    for (let i = 0; i < allmarkers.length; i++) {
        allmarkers[i].setMap(map);
    }
}

function clearMarkers() {
    setMapOnAll(null);
    markers.length = 0
}
function filterListing(){
    var g = document.getElementById("governate");
    var governate = g.options[g.selectedIndex].value;
    var a = document.getElementById("area");
    var area = a.options[a.selectedIndex].value;
    if(governate!=0 || area!=0){
        fscreens = screens.filter(function (el) {
            return el.address_governate == governate || el.address_area==area;
        });
        }
    else{
        fscreens = screens;
    }
    $(".search__screen .screens-listing").slick("destroy");
    listScreens();
    clearMarkers();
    placeMarkers(fscreens);
    setTimeout(() => {
        this.classList.remove("show-loading");
    }, 500);
}
// function highlightPin(){
//     document.querySelector(".search__screen .screen").addEventListener("click", function(){
//         console.log("enter");
//     });
// }
$(document).on("click", ".search__screen .card", function(e){
    $('.search__screen .card.screen.current').removeClass('current');
    $(this).addClass('current');    
    var screenid = $(this).attr("data-id");
    
    var sc = fscreens.filter(function (item) {
        return item.id == screenid
    })
    var lat, log;
    lat = Number(sc[0].address_lat)
    log = Number(sc[0].address_log)
    var position = new google.maps.LatLng(lat, log);
    map.setCenter(position);
    map.setZoom(11);
    for (let i = 0; i < allmarkers.length; i++) {
        if (allmarkers[i].id == screenid) {
            allmarkers[i].setIcon("src/images/highlight_pin.png")
        } else {
            allmarkers[i].setIcon("src/images/svg/screen-mk.svg")
        }

    }
    
});