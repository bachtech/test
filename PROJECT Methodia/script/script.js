/* globals $, document*/

//console.log("script added");
$(".offerButton").on("click",function(){
    $(".offerBox").empty();
    $(".offerBox").append("<h1>SYSTEM ERROR :D</h1>\n");
});

//window.scroll({
//  top: 2500, 
//  left: 0, 
//  behavior: 'smooth' 
//});
//
//// Scroll certain amounts from current position 
//window.scrollBy({ 
//  top: 100, // could be negative value
//  left: 0, 
//  behavior: 'smooth' 
//});
//
//// Scroll to a certain element
//document.querySelector('.hello').scrollIntoView({ 
//  behavior: 'smooth' 
//});

//var choises = "</select>\n" +
//    "<div class=\"exportForm\">\n" +
//    "<h4>0000 KM</h4>\n" +
//    "<button class=\"calc\">КАЛКУЛИРАЙ</button>\n" +
//    "<h3><strong>ДО ГРАДДДДДДД С:</strong></h3>\n" +
//    "<h3>МАЛКО ЗАРЕЖДАНИЯ</h3>\n" +
//    "<h3>НЕКВИ КИНТИ</h3>\n" +
//    "<h3>0 ВРЕДНИ ЕМИСИИ</h3>\n" +
//    "\n" +
//    "<p>\n" +
//    "* Цената е калкулирана на база дневна тарифа лв./кВтч за снабдяване с електрическа енергия и лв./кВтч за разпределение на електрическа енергия на ЧЕЗ България към декември 2017. Изчисленията са на база пробег на Renault ZOE – 400 км по NEDC.\n" +
//    "</p>\n";

//var choises = " <option value=\"%value%\" class=\"izbor\" data-category=\"%city%\"> %%city%%</option>\n";
//
//function displaylist(cities) {
//    var i = 0;
//    cities.forEach(function (city) {
//        i++;
//        var cityHtml = choises
//            .replace("%city%", city.city)
//            .replace("%%city%%", city.city)
//            .replace("%value%", i);
//        $(".lista").append(cityHtml);
//    });
//}
//
//$(".lista").change(function (event) {
//    $(".lista").empty();
//    event.preventDefault();
//    var option = $('option:selected', this).attr("data-category");
//    displaylist(gradove);
//});

var gradove;

$(document).ready(function () {
    $.getJSON("base.json", function (data) {
        gradove = data;
        console.log(gradove);
    });
});

function displayDestinations(gradove) {
    $(".exportForm").empty();
    gradove.forEach(function (grad) {
        var destHtml = destinations
            .replace("%kilometers%", grad.kilometers)
            .replace("%city%", grad.city)
            .replace("%recharges%", grad.recharges)
            .replace("%price%", grad.price)
        .replace("%%%recharges%%%", grad.recharges)
        .replace("%%recharges%%", grad.recharges);
        $(".exportForm").append(destHtml);
    });
}

var destinations = "<h4><strong>%kilometers% KM</strong></h4>\n" +
    "<button class=\"calc\">КАЛКУЛИРАЙ</button>\n" +
    "<div class=\"calcInfo\" style='display:none;'>\n" +
    "<h3><strong>ДО %city% С:</strong></h3>\n" +
    "<h3>%recharges% ЗАРЕЖДАНИЯ</h3>\n" +
    "<hr class=\"filler1\" style=\"width: calc(%%recharges%%*25px);\">\n"+
    "<h3>%price% ЛЕВА</h3>\n" +
    "<hr class=\"filler2\" style=\"width: calc(%%%recharges%%%*31px);\">\n"+
    "<h3>0 ВРЕДНИ ЕМИСИИ</h3>\n" +
    "<hr class=\"filler3\">"+
    "<p>* Цената е калкулирана на база дневна тарифа лв./кВтч за снабдяване с електрическа енергия и лв./кВтч за разпределение на електрическа енергия на ЧЕЗ България към декември 2017. Изчисленията са на база пробег на Renault ZOE – 400 км по NEDC.\n" +
    "</p></div>\n";

function filterByCity(gradove, city) {
    return gradove.filter(function (grad) {
        return grad.city === city;
        
    });
}

$(".lista").change(function (event) {
    event.preventDefault();
    var option = $('option:selected', this).attr("data-category");
    var filteredDestinations = filterByCity(gradove, option);
    displayDestinations(filteredDestinations);
    displayMap(filteredDestinations);  //TOWA
});

$('body').on("click", '.calc', function () {
    $(".calcInfo").removeAttr("style");
});

var map_html="<img src=\"imgs/%map%\" class=\"destinationDot\">\n";

function displayMap(gradove) {
    $(".map").empty();
    gradove.forEach(function (mqsto) {
        var mapHtml = map_html
            .replace("%map%", mqsto.file);
        $(".map").append(mapHtml);
    });
}


//var map="<img src=\"imgs/%map%\" class=\"destinationDot\">\n";