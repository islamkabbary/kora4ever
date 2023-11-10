'use strict';
var _0x3bda = ["AIzaSyCBOaPI3aQSa-LC9DELs-LHhnFKTwS_hV0", "koraplus-9880c.firebaseapp.com", "koraplus-9880c", "koraplus-9880c.appspot.com", "722078363369", "1:722078363369:web:3dcbfa910f26dfd6c80a78", "G-KNNC4MZ64V", "initializeApp", "messaging", "Unable to get permission to notify.", "log", "catch", "News", "then", "Notification permission granted.", "getToken", "requestPermission", "Message received. ", "innerHTML", "stringify", "notification", "parse",
    "body", "showNotification", "getRegistrations", "serviceWorker", "onMessage", "result", "error", "status", ';"', ';" is subscribed', "https://iid.googleapis.com/iid/v1/", "rel/topics/", "", "POST", "key=AAAAqB85buk:APA91bGbhc45FEZq27DAPiCut6up3hS1w2Z0iqSk4GAsT20OeuDomFX_nrZw4F_Hg2cYd57_iod1ySuZ371rouD0mCtDnkzbS1CAa6bq5KELOBGgrFacEqo189-rkZCJgYJrquC5hctI"];
var firebaseConfig = {
    apiKey: _0x3bda[0],
    authDomain: _0x3bda[1],
    projectId: _0x3bda[2],
    storageBucket: _0x3bda[3],
    messagingSenderId: _0x3bda[4],
    appId: _0x3bda[5],
    measurementId: _0x3bda[6]
};
firebase[_0x3bda[7]](firebaseConfig);
var messaging = firebase[_0x3bda[8]]();
//messaging[_0x3bda[16]]()[_0x3bda[13]](function () {
//    console[_0x3bda[10]](_0x3bda[14]);
//    return messaging[_0x3bda[15]]();
//})[_0x3bda[13]](function (skeletonId) {
//    subscribeTokenToTopic(skeletonId, _0x3bda[12]);
//})[_0x3bda[11]](function (b) {
//    console[_0x3bda[10]](_0x3bda[9], b);
//});
var enableForegroundNotification = true;
messaging[_0x3bda[26]](function (data) {
    console[_0x3bda[10]](_0x3bda[17], data);
    NotisElem[_0x3bda[18]] = NotisElem[_0x3bda[18]] + JSON[_0x3bda[19]](data);
    if (enableForegroundNotification) {
        var _0x881fx7 = JSON[_0x3bda[21]](data[_0x3bda[20]]);
        navigator[_0x3bda[25]][_0x3bda[24]]()[_0x3bda[13]](function (canCreateDiscussions) {
            canCreateDiscussions[0][_0x3bda[23]](_0x881fx7[_0x3bda[22]]);
        });
    }
});
function subscribeTokenToTopic(name, width) {
    fetch("" + _0x3bda[32] + name + _0x3bda[33] + width + _0x3bda[34], {
        method: _0x3bda[35],
        headers: new Headers({
            Authorization: "" + _0x3bda[36]
        })
    })[_0x3bda[13]](function (trace) {
        if (trace[_0x3bda[29]] < 200 || trace[_0x3bda[29]] >= 400) {
            console[_0x3bda[10]](trace[_0x3bda[29]], trace);
        }
        console[_0x3bda[10]]("" + _0x3bda[30] + width + _0x3bda[31]);
    })[_0x3bda[11]](function (trace) {
        console[_0x3bda[28]](trace[_0x3bda[27]]);
    });
    return true;
}
;

$(document).ready(function () {
    if (Notification.permission !== "granted" && readCookie('dismisspopup') !== 'true') {
        OpenNotificationPopup();
    }
});

$(".ApproveNotification").click(function (e) {
    e.preventDefault();
    messaging[_0x3bda[16]]()[_0x3bda[13]](function () {
        console[_0x3bda[10]](_0x3bda[14]);
        return messaging[_0x3bda[15]]();
    })[_0x3bda[13]](function (skeletonId) {
        subscribeTokenToTopic(skeletonId, _0x3bda[12]);
    })[_0x3bda[11]](function (b) {
        console[_0x3bda[10]](_0x3bda[9], b);
    });
    $('.notification').hide();
});
$(".DenyNotification, .closenotify").click(function (e) {
    e.preventDefault();
    //ga('send', 'event', 'PushNotification', 'NotificationPopup', 'Notification-Dismissed');
    CloseNotificationPopup();
});
function CloseNotificationPopup() {
    $('.notification').hide();
    createCookie('dismisspopup', 'true', 72);
}
function OpenNotificationPopup() {
    $('.notification').show();

}