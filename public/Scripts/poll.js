$(document).ready(function () {
    // debugger
    if ($.cookie('Cookie' + PollID + '') != null) {
        checkall11();
    }
    if ($.cookie('Cookie2' + SurveyID + '') != null) {
        $('#sent').text('تم إرسال إجابتك');
        $("#surveysBox").hide();

        //$('#sent').show();
        //$("#surveysBox").hide();
    }
    // Close Poll  
    $('.MinimizeClass').click(function () {
        $('#pollsBox').slideToggle();
        $('.Poll .close').toggleClass("minimize");
        $('.MinimizeClass .fa-angle-down').toggleClass("appearanceHide");
        $('.MinimizeClass .fa-angle-up').toggleClass("appearanceShow");
        $('#surveysBox').slideToggle();
        $('.Survey .close').toggleClass("minimize");
        $('.MinimizeClass .fa-angle-down').toggleClass("appearanceHide");
        $('.MinimizeClass .fa-angle-up').toggleClass("appearanceShow");
    });


})

function submitpoll1() {
    //debugger
    var optionid = '';

    optionid = $('input:radio[name=polls]:checked').val();
    if (optionid.toLocaleLowerCase() == 'undefined') {
        return false;
    }
    if ($.cookie('Cookie' + PollID + '') != null) {
        checkall11();
    } else if (optionid != '') {
        var x = PollID;
        $.ajax({
            type: "GET",
            url: 'Home/SubmitPoll?PollID=' + x + '&OptionID=' + optionid + '',
            contentType: "html/text",
            dataType: "html",
            cache: false,
            success: function (msg) {

                $(".pollscontainer").append(msg);
                $('#pollsOptions').hide();
                $('#backButton').show();
                $('#resultsButton').hide();
                $('#voteButton').hide();
                $("#pollsResult").show();

                $.cookie('Cookie' + PollID + '', '1', {
                    expires: 1,
                    path: ''
                });
            }
        });
    }

}

function checkall11() {

    $.ajax({
        type: "GET",
        url: 'Home/GetPollResults?PollID=' + PollID + '',
        contentType: "html/text",
        dataType: "html",
        cache: false,
        success: function (msg) {
            $(".pollscontainer").append(msg);
            $("#pollsResult").show();
            $('#backButton,#pollsResult:last').show();
            $('#resultsButton').hide();
            $('#voteButton,#pollsOptions').hide();
        }
    });
}

function fnBack() {
    if ($.cookie('Cookie' + PollID + '') != null) {
        $("#pollsOptions,#resultsButton").show();
        $("#pollsResult,#backButton").hide();
    } else {
        $("#pollsOptions,#voteButton,#resultsButton").show();
        $("#pollsResult,#backButton").hide();
    }

}

function submitsurvey() {
    debugger
    var optionid = [];
    $('input:radio[name*=surveys_]:checked').each(function (i) {
        optionid[i] = $(this).val();
    });
    if ($.cookie('Cookie2' + SurveyID + '') != null) {
        $('#sent').text('تم إرسال إجابتك ');
        $("#surveysBox").hide();
    } else if (optionid != '') {
        $.ajax({
            type: "POST",
            url: 'Home/SubmitSurvey',
            data: JSON.stringify({
                'OptionID': optionid
            }),
            contentType: 'application/json; charset=utf-8',
            dataType: "json",
            //data: { OptionID : optionid },
            //contentType: "html/text",
            //dataType: "html",
            cache: false,
            success: function (msg) {
                //$(".surveyscontainer").append(msg);
                //$('#surveysOptions').hide();
                $('#sent').text('تم إرسال إجابتك ');
                $("#surveysBox").hide();


                //$('#backButton').show();
                //$('#voteButton').hide();
                //$("#pollsResult").show();

                $.cookie('Cookie2' + SurveyID + '', '1', {
                    expires: 1,
                    path: ''
                });
            }
        });
    }



}