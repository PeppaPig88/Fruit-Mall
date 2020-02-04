$(document).ready(function () {
    var textWidth = function (text) {
        var sensor = $('<pre>' + text + '</pre>').css({ display: 'none' });
        $('body').append(sensor);
        var width = sensor.width();
        sensor.remove();
        return width;
    };
    $(".set_location_name").width(textWidth($(".set_location_name").val()));
    $(".set_location_loa").width(textWidth($(".set_location_loa").val()));

    $(".topbar").hide();
    $(".user").mouseenter(function () {
        $(".topbar").show();
    });
    $(".user").mouseleave(function () {
        $(".topbar").hide();
    });
    $(".topbar").mouseenter(function () {
        $(".topbar").show();
    });
    $(".topbar").mouseleave(function () {
        $(".topbar").hide();
    });
    $(".topbar_item").mouseenter(function () {
        $(this).css("background-color","rgb(200,200,200)")
    });
    $(".topbar_item").mouseleave(function () {
        $(this).css("background-color", "white")
    });

})