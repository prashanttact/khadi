var trips = { places: "", routes: "", routeCount: 0, vehicles: 0 };
var trails = "../";

//var images_start = { subway: trails + "Content/img/pic/metro-small.svg", taxi: trails + "Content/img/pic/cab.svg", rideshare: trails + "Content/img/pic/cab.svg", car: trails + "Content/img/pic/cab.svg", train: trails + "Content/img/pic/locomotive-mall.svg", bus: trails + "Content/img/pic/bus-front-view2.svg", plane: trails + "Content/img/pic/takeoff-the-plane2.svg" };
var images_start = {subway: "../frontend/kscl/assets/img/trip/pic/metrobig.svg", taxi: "../frontend/kscl/assets/img/trip/pic/cab-big.svg", train: "../frontend/kscl/assets/img/trip/pic/locomotive.svg", bus: "../frontend/kscl/assets/img/trip/pic/bus-front-view.svg", plane: "../frontend/kscl/assets/img/trip/pic/plane-landing.svg"}
$(document).ready(function () {

    var places = new Bloodhound({
        datumTokenizer: Bloodhound.tokenizers.obj.whitespace('longName'),
        queryTokenizer: Bloodhound.tokenizers.whitespace,
        remote: {
            url: 'http://free.rome2rio.com/api/1.4/json/Autocomplete?query=%QUERY&countryCode=IN',
            wildcard: '%QUERY',
            filter: function (parsedResponse) {
                var places = parsedResponse.places;
                var filterdPlaces = [];
                places.forEach(function logArrayElements(place, index, array) {
                    filterdPlaces.push(place);
                });
                return filterdPlaces;
            }
        }
    });
    var placesFiltered = new Bloodhound({
        datumTokenizer: Bloodhound.tokenizers.obj.whitespace('longName'),
        queryTokenizer: Bloodhound.tokenizers.whitespace,
        remote: {
            url: 'http://free.rome2rio.com/api/1.4/json/Autocomplete?query=%QUERY&countryCode=IN',
            wildcard: '%QUERY',
            filter: function (parsedResponse) {
                var places = parsedResponse.places;
                var filterdPlaces = [];
                places.forEach(function logArrayElements(place, index, array) {
                    if (place.countryCode == 'IN') {
                        filterdPlaces.push(place);
                    }
                });
                return filterdPlaces;
            }
        }
    });
    $('#source').typeahead(null, {
        name: 'places',
        display: 'longName',
        source: places,
        minLength: 2,
        highlight: true
    }).on('typeahead:asyncrequest', function () {
        $('.progress_loader1').show();
        $('#source').data("selected", "");

    }).on('typeahead:asynccancel typeahead:asyncreceive', function () {
        $('.progress_loader1').hide();
    });
    $('#destination').typeahead(null, {
        name: 'places',
        display: 'longName',
        source: placesFiltered,
        minLength: 2,
        highlight: true
    }).on('typeahead:asyncrequest', function () {
        $('.progress_loader2').show();
        $('#destination').data("selected", "");
    }).on('typeahead:asynccancel typeahead:asyncreceive', function () {
        $('.progress_loader2').hide();
    });
    $('.typeahead').bind('typeahead:select', function (ev, suggestion) {
        $('#' + ev.target.id).data("selected", suggestion.canonicalName);
    });
    $('.button-search').bind("click", searchBegin);
    $('#modify').bind("click", modify);
});
function modify() {
    $('html, body').animate({ scrollTop: 0 });
}
function searchBegin(ev) {
    var source = $('#source').data("selected") ? $('#source').data("selected") : $('#source').val();
    var destination = $('#destination').data("selected") ? $('#destination').data("selected") : $('#destination').val();
    if (!source) {
        showError("Please select source");
    } else {
        if (!destination) {
            showError("Please select destination");
        } else {
            $('#flights').empty();
            $('.button-search').text("SEARCHING...");
            $('.button-search').unbind("click");
            $.ajax({
                url: "http://free.rome2rio.com/api/1.4/json/Search?currencyCode=inr&key=QgDfaB74&oName=" + source + "&dName=" + destination,
                context: document.body,
                success: function (data, textStatus, jqXHR) {
                    $('.source').text(source);
                    $('.destinition').text(destination);

                    bindData(data);
                },
                error: function (data, textStatus, jqXHR) {
                    $('.nothing-found').fadeIn();
                    $('.page-section').fadeOut();
                    $("html, body").animate({ scrollTop: 200 }, 1000);
                    $('.button-search').text("SEARCH");
                    $('.button-search').bind("click", searchBegin);

                }
            }).done(function () {
                $('.button-search').text("SEARCH");
                $('.button-search').bind("click", searchBegin);
            });
        }
    }
}
function showError(msg) {
    alert(msg);
}

function bindData(data) {
    $('#vehicles').empty();
    bindVehicles(0, data.vehicles);
    $('#vehicles div:last-child').addClass('t_last');
    trips.places = data.places;
    trips.routes = data.routes;
    trips.routeCount = data.routes.length;
    trips.vehicles = data.vehicles;
    bindRoutes(0);
}

function bindRoutes(index) {
    if (index < trips.routeCount) {
        var currentRoute = trips.routes[index];
        var routeName = currentRoute.name; //No direct flight or taxi
        if (currentRoute.segments.length > 1) {
            getInDirectDiv(currentRoute, index);
        } else {
            getDirectDiv(currentRoute, index);
        }
    } else {
        var count = $('#flights.row');
        if (count == 0) {
            $('.nothing-found').fadeIn();
            $('.page-section').fadeOut();
            $("html, body").animate({ scrollTop: $('#error-container').offset().top }, 1000);
        } else {
            $('.page-section').fadeIn();
            $('.nothing-found').fadeOut();
            $("html, body").animate({ scrollTop: $('#result-container').offset().top - 100 }, 1000);
        }
    }
}

function getInDirectDiv(currentRoute, index) {
    try {
        var summaryDiv = $("#sharedPref #summary").clone();
        var oldSegments = currentRoute.segments;
        removeWalkSegments(oldSegments, function (segments) {
            var mainContainer = $("#sharedPref .row").clone();
            var segmentsCount = segments.length;
            if (segmentsCount < 6) {
                var routeDiv = null;
                if (segmentsCount == 3) {
                    routeDiv = $("#sharedPref #indirectRoute_4").clone();
                    $(routeDiv).find('.flight_border-single').addClass("tt_three");
                } else {
                    if (segmentsCount == 4) {
                        routeDiv = $("#sharedPref #indirectRoute_5").clone();
                        $(routeDiv).find('.flight_border-single').addClass("tt_four");
                    } else {
                        if (segmentsCount == 5) {
                            routeDiv = $("#sharedPref #indirectRoute_6").clone();
                            $(routeDiv).find('.flight_border-single').addClass("tt_five");
                        } else {
                            routeDiv = $("#sharedPref #indirectRoute_3").clone();
                            $(routeDiv).find('.flight_border-single').addClass("tt_five");
                        }
                    }
                }

                if (routeDiv != null) {

                    var expandContainer = $('#sharedPref #expand_container').clone();
                    $(routeDiv).find('span.from').text(trips.places[segments[0].depPlace].shortName);
                    $(routeDiv).find('span.to').text(trips.places[segments[1].depPlace].shortName);
                    $(routeDiv).find('.form_img').attr("src", images_start[trips.vehicles[segments[0].vehicle].kind]);
                    $(routeDiv).find('.to_img').attr("src", images_start[trips.vehicles[segments[1].vehicle].kind]);
                    $(expandContainer).find('#expandview').append(getExpandHeader(segments[0]));
                    $(expandContainer).find('#expandview').append(getExpandNext(segments[1]));
                    if (segments[2]) {
                        $(routeDiv).find('span.destination').text(trips.places[segments[2].depPlace].shortName);
                        $(routeDiv).find('.destination_img').attr("src", images_start[trips.vehicles[segments[2].vehicle].kind]);
                        $(mainContainer).addClass(trips.vehicles[segments[2].vehicle].kind);
                    } else {
                        $(routeDiv).find('span.destination').text(trips.places[segments[1].arrPlace].shortName);
                        $(routeDiv).find('.destination_img').attr("src", images_start[trips.vehicles[segments[1].vehicle].kind]);
                    }

                    $(mainContainer).addClass(trips.vehicles[segments[0].vehicle].kind);
                    $(mainContainer).addClass(trips.vehicles[segments[1].vehicle].kind);
                    switch (segmentsCount) {
                        case 2:
                            $(routeDiv).find('span.final').text(trips.places[segments[1].arrPlace].shortName);
                            $(routeDiv).find('.final_img').attr("src", images_start[trips.vehicles[segments[1].vehicle].kind]);
                            break;
                        case 3:
                            $(expandContainer).find('#expandview').append(getExpandNext(segments[2]));
                            $(routeDiv).find('span.final').text(trips.places[segments[2].arrPlace].shortName);
                            $(routeDiv).find('.final_img').attr("src", images_start[trips.vehicles[segments[2].vehicle].kind]);
                            break;
                        case 4:
                            $(expandContainer).find('#expandview').append(getExpandNext(segments[2]));
                            $(expandContainer).find('#expandview').append(getExpandNext(segments[3]));
                            $(mainContainer).addClass(trips.vehicles[segments[3].vehicle].kind);
                            $(routeDiv).find('span.destination_').text(trips.places[segments[3].depPlace].shortName);
                            $(routeDiv).find('span.final').text(trips.places[segments[3].arrPlace].shortName);
                            $(routeDiv).find('._destination_img').attr("src", images_start[trips.vehicles[segments[3].vehicle].kind]);
                            $(routeDiv).find('.final_img').attr("src", images_start[trips.vehicles[segments[3].vehicle].kind]);
                            break;
                        case 5:
                            $(expandContainer).find('#expandview').append(getExpandNext(segments[2]));
                            $(expandContainer).find('#expandview').append(getExpandNext(segments[3]));
                            $(expandContainer).find('#expandview').append(getExpandNext(segments[4]));
                            $(mainContainer).addClass(trips.vehicles[segments[4].vehicle].kind);
                            $(routeDiv).find('span.destination_').text(trips.places[segments[3].depPlace].shortName);
                            $(routeDiv).find('span.destination__').text(trips.places[segments[4].depPlace].shortName);
                            $(routeDiv).find('span.final').text(trips.places[segments[4].arrPlace].shortName);
                            $(routeDiv).find('._destination_img').attr("src", images_start[trips.vehicles[segments[3].vehicle].kind]);
                            $(routeDiv).find('.__destination_img').attr("src", images_start[trips.vehicles[segments[4].vehicle].kind]);
                            $(routeDiv).find('.final_img').attr("src", images_start[trips.vehicles[segments[4].vehicle].kind]);
                            break;
                    }


                    $(routeDiv).find('.trip_shadow').append('<i class="fa fa-angle-down arrow_d" data-toggle="collapse" data-target="#expand_row' + index + '" aria-hidden="true"></i>');
                    $(expandContainer).find('#expandview').attr("id", "expand_row" + index);
                    $(routeDiv).append($(expandContainer).prop('outerHTML'));
                    var indicativePrices = findMinMax(currentRoute.indicativePrices);
                    $(summaryDiv).find('.distance').attr("placeholder", currentRoute.distance + " KM");
                    $(summaryDiv).find('.price').attr("placeholder", "₹" + indicativePrices.priceLow + " - ₹" + indicativePrices.priceHigh);
                    $(summaryDiv).find('.durations').attr("placeholder", getHrsMin(currentRoute.totalDuration));
                    $(summaryDiv).find('.rating').attr("placeholder", "7.5");
                    mainContainer.append($(summaryDiv).html());
                    mainContainer.append($(routeDiv).html());
                    $('#flights').append(mainContainer.prop('outerHTML'));
                }
            }
            index++;
            bindRoutes(index);

        });
    } catch (e) {
        index++;
        bindRoutes(index);
    }
}

function removeWalkSegments(segments, callback) {
    var updatedSegments = [];
    for (var i = 0, max = 10; i < segments.length; i++) {
        if (trips.vehicles[segments[i].vehicle].kind != 'foot') {
            updatedSegments.push(segments[i]);
        }
    }
    console.log(updatedSegments);
    callback(updatedSegments);
}
function findMinMax(array) {
    var indicativePrices;
    if (array) {
        if (array.length == 3) {
            indicativePrices = { priceLow: array[2].price, priceHigh: array[0].price };
        } else {
            if (array[0].highPrice)
                indicativePrices = array[0];
            else
                indicativePrices = { priceLow: array[0].price, priceHigh: array[0].price * 2 };
        }
    } else {
        indicativePrices = { priceLow: 0, priceHigh: 0 };
    }
    return indicativePrices;
}
function getExpandHeader(segment) {

    var expandHeader = $('#sharedPref #expand_header').clone();
    var indicativePrices = findMinMax(segment.indicativePrices);

    var dep = trips.places[segment.depPlace].shortName;
    dep = dep.toLowerCase().indexOf(trips.places[segment.depPlace].kind) != -1 ? dep : dep + capitalizeFirstLetter(trips.places[segment.depPlace].kind);
    $(expandHeader).find('span.from').text(dep);

    var to = trips.places[segment.arrPlace].shortName;
    to = to.toLowerCase().indexOf(trips.places[segment.arrPlace].kind) != -1 ? to : to + capitalizeFirstLetter(trips.places[segment.arrPlace].kind);
    $(expandHeader).find('span.to').text(to);

    $(expandHeader).find('.durations').text(getHrsMin(segment.transitDuration + segment.transferDuration) + "(" + "₹" + indicativePrices.priceLow + " - ₹" + indicativePrices.priceHigh + ")");
    $(expandHeader).find('.type_img').attr("src", images_start[trips.vehicles[segment.vehicle].kind]);
    $(expandHeader).find('.type_book').text("Book " + trips.vehicles[segment.vehicle].name);
    return $(expandHeader).prop('outerHTML');
}

function capitalizeFirstLetter(string) {
    return " " + string.charAt(0).toUpperCase() + string.slice(1);
}
function getExpandNext(segment) {

    var expandHeader = $('#sharedPref #expand_row').clone();
    var indicativePrices = findMinMax(segment.indicativePrices);
    var dep = trips.places[segment.depPlace].shortName;
    dep = dep.toLowerCase().indexOf(trips.places[segment.depPlace].kind) != -1 ? dep : dep + capitalizeFirstLetter(trips.places[segment.depPlace].kind);
    $(expandHeader).find('span.from').text(dep);

    var to = trips.places[segment.arrPlace].shortName;
    to = to.toLowerCase().indexOf(trips.places[segment.arrPlace].kind) != -1 ? to : to + capitalizeFirstLetter(trips.places[segment.arrPlace].kind);
    $(expandHeader).find('span.to').text(to);

    $(expandHeader).find('.durations').text(getHrsMin(segment.transitDuration + segment.transferDuration) + "(" + "₹" + indicativePrices.priceLow + " - ₹" + indicativePrices.priceHigh + ")");
    $(expandHeader).find('.type_img').attr("src", images_start[trips.vehicles[segment.vehicle].kind]);
    $(expandHeader).find('.type_book').text("Book " + trips.vehicles[segment.vehicle].name);
    return $(expandHeader).prop('outerHTML');
}
function getDirectDiv(currentRoute, index) {
    var routeDiv = $("#sharedPref #directRoute").clone();
    var summaryDiv = $("#sharedPref #summary").clone();
    var segments = currentRoute.segments;
    var expandContainer = $('#sharedPref #expand_container').clone();
    var mainContainer = $("#sharedPref .row").clone();


    $(routeDiv).find('span.from').text(trips.places[segments[0].depPlace].shortName);
    $(routeDiv).find('span.to').text(trips.places[segments[0].arrPlace].shortName);
    $(routeDiv).find('.form_img').attr("src", images_start[trips.vehicles[segments[0].vehicle].kind]);
    $(routeDiv).find('.to_img').attr("src", images_start[trips.vehicles[segments[0].vehicle].kind]);
    var indicativePrices = findMinMax(currentRoute.indicativePrices);
    $(summaryDiv).find('.distance').attr("placeholder", currentRoute.distance + " KM");
    $(summaryDiv).find('.price').attr("placeholder", "₹" + indicativePrices.priceLow + " - ₹" + indicativePrices.priceHigh);
    $(summaryDiv).find('.durations').attr("placeholder", getHrsMin(currentRoute.totalDuration));
    $(summaryDiv).find('.rating').attr("placeholder", "7.5");
    $(expandContainer).find('#expandview').append(getExpandHeader(segments[0]));
    $(mainContainer).addClass(trips.vehicles[segments[0].vehicle].kind);
    if (segments[1]) {
        $(expandContainer).find('#expandview').append(getExpandNext(segments[1]));
        $(mainContainer).addClass(trips.vehicles[segments[1].vehicle].kind);
    }

    $(routeDiv).find('.trip_shadow').append('<i class="fa fa-angle-down arrow_d" data-toggle="collapse" data-target="#expand_row' + index + '" aria-hidden="true"></i>');
    $(expandContainer).find('#expandview').attr("id", "expand_row" + index);
    $(routeDiv).append($(expandContainer).prop('outerHTML'));

    mainContainer.append($(summaryDiv).html());
    mainContainer.append($(routeDiv).html());
    $('#flights').append(mainContainer.prop('outerHTML'));
    index++;
    bindRoutes(index);
}

function getImageByType() {

}
function getHrsMin(time) {
    return Math.floor(time / 60) + " h " + time % 60 + " m";
}
function bindVehicles(index, vehicles) {
    var len = vehicles.length;
    var colomx = "col-md-3";
    if (vehicles.length > index) {
        vehicle = vehicles[index];
        if (vehicle.kind == 'plane' || vehicle.kind == 'train' || vehicle.kind == 'bus' || vehicle.kind == 'taxi') {
            $('#vehicles').append(getVehiclesDiv(vehicle.kind == 'taxi' ? "Car" : vehicle.kind, index));
        }
        index++;
        bindVehicles(index, vehicles);
    } else {
        var classw = $('.trip_plan').length;
        $('#vehicles').removeClass("col-xs-offset-1");
        $('#vehicles').addClass("col-xs-offset-" + (5 - classw));
    }
}
function getVehiclesDiv(vehicle, index) {
    var div = '<div class="col-md-3 trip_plan">'
            + '<div class="form-check has-success">'
            + '<label class="form-check-label">'
            + '<input type="radio" name="radio" class="filterChekbox" data-hint="' + vehicle.toLowerCase() + '" onchange="handleChange(this);" checked="checked"  class="form-check-input" id="" value="option1"> <span class="checkmark"></span>'
            + '</label>'
            + '</div>'
            + '<i class="fa fa-' + vehicle.toLowerCase() + ' trip_icons" aria-hidden="true"></i>'
            + '<div>' + vehicle.toUpperCase() + '</div>	'
            + '</div>';
    return div;
}


function handleChange(checkbox) {
    var className = $(checkbox).data("hint");
    console.log(className);
    if (checkbox.checked) {
        if (className == 'car') {
            $(".taxi").show();
            $(".rideshare").show();
        }
        $("." + className).show();
    } else {
        if (className == 'car') {
            $(".taxi").hide();
            $(".rideshare").hide();
        }
        $("." + className).hide();
    }
    if ($('.filterChekbox:checkbox:checked').length == 0) {
        $('.nothing-filter').show();
    } else {
        $('.nothing-filter').hide();
    }

}