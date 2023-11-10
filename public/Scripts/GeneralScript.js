$("#topSearchBtn").click(function () {
    var keyword = $("#topSearchInput").val();
    window.location.href = "SearchNews/" + keyword.replace(/[\*\^\'\!\:\&\%\^\@\!\$\(\)\;]/g, '').split(' ').join('') + "1";
    //window.location.href = "Search/News?phrase=" + keyword + "&pageIndex=1";
});

$("#topSearchInput").on(function () {
    var keyword = $("#topSearchInput").val();
    window.location.href = "SearchNews/" + keyword + "1";
    //window.location.href = "Search/News?phrase=" + keyword + "&pageIndex=1";

});


$('input[type=search]').on('search', function () {
    if (this.value) {

        window.location.href = "SearchNews/" + this.value + "1";
        //window.location.href = "Search/News?phrase=" + this.value + "&pageIndex=1";

    }
});




$(document).ready(function () {
    $('#statistics').on('click', '[id^=butPredict_]', function () {

        $.ajax({
            type: "GET",
            url: 'Login/IsUserLogin',
            dataType: "json",
            cache: false,
            async: false,
            success: function (result) {
                if (result) {
                    var league = $("#statistics").find("#league").children(':selected').val() === "" ? 1400 : parseInt($("#statistics").find("#league").children(':selected').val());
                    $.ajax({
                        url: 'Champion/IsPredictLeagueBefore',
                        dataType: "json",
                        type: "Post",
                        cache: false,
                        data: {
                            leagueId: league
                        },
                        success: function (LeagueBefore) {
                            if (!LeagueBefore) {
                                $("#statistics").find('.predectMsg').css("display", "block");
                            }
                        }
                    });
                    /* $('[id*=_51889][id*=Left]');*/
                    $("#statistics").find("#LeagueName").append($("#statistics").find("#league").children(':selected').text());
                    $('.OtherResult-popup').css("display", "block");
                } else {
                    window.location.href = "Login/LoginPage";
                }
            }
        });
    });

    $('#statistics').on('click', '[id^=AddLeaguePrediction_]', function (e) {

        var elementId = e.target.id;
        var teamId = $(`#${elementId}`).parents().find("#selectTeam").children(':selected').val();
        if (teamId === "0") {
            $("#validationSelectTeam").css('display', 'inline-block');
            return;
        }
        var leagueId = elementId.substring(elementId.indexOf('_') + 1);
        var model = {
            "TeamId": teamId,
            "LeagueId": leagueId
        };
        $.ajax({
            url: 'Champion/AddChampionPrediction',
            dataType: "json",
            type: "Post",
            cache: false,
            data: {
                model: model
            },
            success: function (result) {
                if (result) {
                    $('.OtherResult-popup').css("display", "none");
                }
            }
        });
    });
});