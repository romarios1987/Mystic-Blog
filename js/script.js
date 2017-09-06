$(document).ready(function () {
    $('.slider').slider({
        transition: 2500
    });
    $('.materialboxed').materialbox();

    $(".button-collapse").sideNav();

});

/**
 * Pagination Ajax
 * @param url
 */
function getresult(url) {
    $.ajax({
        url: url,
        type: "GET",
        data: {rowcount: $("#rowcount").val(), "pagination_setting": $("#pagination-setting").val()},
        beforeSend: function () {
            $("#overlay").show();
        },
        success: function (data) {
            $("#pagination-result").html(data);
            setInterval(function () {
                $("#overlay").hide();
            }, 500);
        },
        error: function () {
        }
    });
}


/* changePagination */
/*
 function changePagination(option) {
 if (option != "") {
 getresult("../getresult.php");
 }
 }*/
