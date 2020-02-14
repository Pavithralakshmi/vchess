$(document).ready(function () {
//    var x = navigator.cookieEnabled;
//    if (x) {
//        cookie = "";
//    } else {
//        cookie = "cookie_disabled";
//    }
//    $("a").on("click", function (e) {
//        e.preventDefault();
////        console.log("you clicked it!!");
//        var link = this.href;
////        alert(link);
//        var type = $(this).data("type");
//        var name = $(this).data("name");
//        if (cookie) {
//            var cookie_type = cookie;
//        } else {
//            var cookie_type = $(this).data("cookie-type");
//        }
////        console.log("link = " + link);
////        console.log("data_type = " + data_type);
////        console.log("data_name = " + data_name);
////        console.log("data-cookie-type = " + data_cookie_type);
//        $.post("assets/tracker.php",
//                {
//                    click: "",
//                    link: link,
//                    type: type,
//                    name: name,
//                    cookie_type: cookie_type,
//                },
//                function (data, status) {
//                    console.log(data);
//                    window.location = link;
//                });
//    });
});
function startTimer() {
    var presentTime = document.getElementById('otp-login-time').innerHTML;
    var timeArray = presentTime.split(/[:]+/);
    var m = timeArray[0];
    var s = checkSecond((timeArray[1] - 1));
    if (s === 59) {
        m = m - 1;
    }
    if (m >= 0) {
        document.getElementById('otp-login-time').innerHTML = m + ":" + s;
        setTimeout(startTimer, 1000);
    }
}
function checkSecond(sec) {
    if (sec < 10 && sec >= 0) {
        sec = "0" + sec;
    }
    if (sec < 0) {
        sec = 59;
    }
    return sec;
}

$('div #otp-login-submit').on('click', function (e) {
    var mobilenumber = $("#mobilenumber").val();
    if (mobilenumber.length === 10 && /[6789][0-9]{9}/.test(mobilenumber)) {
        $('div #inner_mail2').addClass("w3-hide");
        $('div #sending2').removeClass("w3-hide");

//           $("#" + id + "bt").removeClass("btn-success").addClass("btn-primary");
        $.post("login.php",
                {
                    mobilenumber: mobilenumber,
                    pid: pid
                },
                function (data) {
                    $('div #otp-login-submit').attr('disabled', 'disabled');
                    $("#mobilenumber").attr('readonly', 'readonly');
                    var array = data.split("#@#");
                    console.log(data);
                    $('div #otp-login-time').html("2:00");
                    startTimer();
//                        alert(data);
                    $('#inner_mail2').html(array[0]).css({"color": "red"});
                    $('div #otp-login-time').removeClass("w3-hide");
                    $('div #otp-login-edit').removeClass("w3-hide");
                    $('div #inner_mail2').removeClass("w3-hide");
                    $('div #sending2').addClass("w3-hide");
                    $('div #otp-login1').removeClass("w3-hide");
                    setTimeout(function () {
                        $('div #inner_mail2').addClass("w3-hide");
                    }, 20000);
                    setTimeout(function () {
                        $('div #otp-login-submit').removeAttr("disabled");
                        $('div #otp-login-submit').text("Resend OTP");
                        $('div #otp-login-time').addClass("w3-hide");
                    }, 120000);
                    if (array[1]) {
                        $('p#otp-html-number').html(array[1]);
                    } else {
                        $('p#otp-html-number').html('');
                    }
                    if (array[2]) {
                        $('p#check-html-result').html(array[2]);
                    } else {
                        $('p#check-html-result').html('');
                    }
                });
    } else {
        $('div #inner_mail2').removeClass("w3-hide");
        $('#inner_mail2').html("Enter 10 digit Mobile Number").css({"color": "red"});
    }
});
$('div #otp-login-edit').on('click', function (e) {
    $('#mobilenumber').removeAttr("readonly");
    $('#mobilenumber').val("");
    $('div #inner_mail2').addClass("w3-hide");
    $('div #sending2').addClass("w3-hide");
    $('div #otp-login-submit').removeAttr("disabled");
    $('div #otp-login-submit').text("Continue");
    $('div #otp-login-time').addClass("w3-hide");
    $('div #otp-login1').addClass("w3-hide");
    $('div #otp-login-edit').addClass("w3-hide");
    $('#otp-submit').html("Submit");
    $("#otpnumber").val('');
});
$('#otp-submit').on('click', function (e) {
    var LoginMobile = $("#mobilenumber").val();
    var LoginOTP = $("#otpnumber").val();
    if ((LoginMobile.length === 10) && (LoginOTP.length === 4)) {
//        $('#otp-submit').addClass("w3-hide");
        $('#otp-submit').html("Loading...");
        var otp = $('p#otp-html-number').html();
        if (otp === LoginOTP) {
            var html_result = $('p#check-html-result').html();
            console.log("0" + html_result + "1");
            if (html_result) {
                window.location.href = "product.php?id=" + pid;
            } else {
                window.location.href = "../paytm/pgRedirect_pdf.php?id=" + pid;
            }
        } else {
            $('#incorrect_otp').removeClass("w3-hide");
            $('#incorrect_otp').css({"color": "red"});
            setTimeout(function () {
                $('#incorrect_otp').addClass("w3-hide");
            }, 20000);
            $('#otp-submit').html("Submit");
        }
    } else {
        $('div #inner_mail2').removeClass("w3-hide");
        $('#inner_mail2').html("Enter Correct OTP Number").css({"color": "red"});
        setTimeout(function () {
            $('#inner_mail2').addClass("w3-hide");
        }, 7000);
    }
});