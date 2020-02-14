<?php
include 'db.php';
$action = $phone_no = $otp = $vdca_id76 = $vdca_id21 = '';
$sql = "SELECT `auto_increment` FROM INFORMATION_SCHEMA.TABLES WHERE table_name = 'vdca_players_db'";
$res = mysqli_query($mysqli, $sql);
while ($row43 = mysqli_fetch_assoc($res)) {
    $vdca_id76 = $row43['auto_increment'];
}
$vdca_id21 = "VDCA_" . str_pad($vdca_id76, "4", '0', STR_PAD_LEFT);
?>
<?php
if (isset($_POST["action"])) {
    $action = $_POST["action"];
    $cdate = date('Y-m-d');
    $phone_no = $_POST["mobile_number"];
    $cookie_name = "mobile_number";
    $cookie_value = $_POST["mobile_number"];
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
//echo $action."<br>." . $phone_no;

    $vdca_id21 = $_POST["vdca_id"];
    $cookie_name1 = "vdca_id";

    $otp = rand('111111', '999999');
    $sql1 = "select * from `vdca_players_db` where `phone_no`='$phone_no' and (`name`='' or `gender`='' or `city`='' or `dob`='' or `phone_no`='' or `email_id`='' or `address`=`father_name`=' ') ";
    $result1 = mysqli_query($mysqli, $sql1);
    if (mysqli_num_rows($result1) > 0) {
        $sql = "UPDATE `vdca_players_db` SET `otp`='$otp' ,`dob`='$cdate' where `phone_no`='$phone_no'";
        $result = mysqli_query($mysqli, $sql);
        $id = mysqli_fetch_assoc($result1);
        $id = $id['id'];
        echo "olduser#@#" . $otp . "#@#" . $phone_no . "#@#" . $id;
    } else {
        $sql2 = "INSERT INTO `vdca_players_db`(`otp`,`phone_no`,`vdca_id`,`dob`) VALUES ('$otp','$phone_no','$vdca_id21','$cdate') ";
        $result24 = mysqli_query($mysqli, $sql2) or die("Connection failed: " . $mysqli->connect_error);
        $id = mysqli_insert_id($mysqli);
        echo "newuser#@#" . $otp . "#@#" . $phone_no . "#@#" . $id;
    }
    setcookie($cookie_name1, $id, time() + (86400 * 30), "/"); // 86400 = 1 day
//    echo "---------------------".$id."$$----------$$".$cookie_name1."-----------------------";

    sendOTP($phone_no, $otp);
    exit;
}

function sendOTP($mobile, $otp) {
    if ($mobile) {
        ob_start();
        //send otp for verification
        $msg = $otp . " is your verification code to verify your Mobile# on VDCA Acadamy.";
        $ch = curl_init();
        $msg = urlencode($msg);
//        $url = "http://smshorizon.co.in/api/sendsms.php?user=gokul.nithra&apikey=RfOXkuINM7lzds6nCOPV&mobile=".$mobile."&message=".$msg."&senderid=NITHRA&type=txt";
        $url = "http://api.msg91.com/api/sendhttp.php?sender=NITHRA&route=4&mobiles=" . $mobile . "&authkey=221068AW6ROwfK5b2782c0&country=91&message=" . $msg . "&campaign=jobs";
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_exec($ch);
        curl_close($ch);
        ob_end_clean();
    }
}
?>

<!DOCTYPE html>
<html class="no-js">
    <head>
        <title>Virudhunagar District Chess Association</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="js/compressed.js"></script>
        <link rel="stylesheet" href="assets/w3.css">
        <!--<link rel="stylesheet" href="assets/custom.css">-->
        <?php include 'style.php'; ?>
        <style>
            .w3-gold{
                background-color: #FFCC29;
                /*background-color: lightyellow;*/
                /*background-color: floralwhite;*/
                color: black;
            }
            .body {
                font-size: 0.9em;
                color: #212121;
                font-family: Arial;
            }
            .container1{
                width: 350px;
                margin: 1px auto;
                box-sizing: border-box;
            }

            #frm-mobile-verification {
                border: #E0E0E0 1px solid;
                border-radius: 3px;
                padding: 30px;
                text-align: center;
                margin-top: -30px;
                width: -webkit-fill-available;
            }

            .form-heading {
                font-size: 1.5em;
                margin-bottom: 30px;
            }

            .form-row {
                margin-bottom: 30px;
            }

            .form-input {
                padding: 10px 5px;
                width: 100%;
                box-sizing: border-box;
                border-radius: 3px;
                border: #E0E0E0 1px solid;
            }

            .btnSubmit {
                background: #F37029;
                padding: 10px 37px;
                border: #47abef 1px solid;
                /*border-radius: 3px;*/
                /*width: 100%;*/
                color: #FFF;
                float: right;
            }


            .error {
                color: #483333;
                padding: 10px;
                background: #ffbcbc;
                border: #efb0b0 1px solid;
                border-radius: 3px;
                margin: 0 auto;
                margin-bottom: 20px;
                width: 350px;
                display:none;
                box-sizing: border-box;
            }

            .success {
                color: #483333;
                padding: 10px 20px;
                background: #cff9b5;
                border: #bce4a3 1px solid;
                border-radius: 3px;
                margin: 0 auto;
                margin-bottom: 20px;
                width: 350px;
                display:none;
                box-sizing: border-box;
            }

            .btnVerify {
                background: #F37029;
                padding: 8px 20px;
                float: right;
                border: #449e48 1px solid;
                /*border-radius: 3px;*/
                /*width: 100%;*/
                color: #FFF;
            }
        </style>
    </head>

    <body>
        <div class="preloader">
            <div class="preloader_image"></div>
        </div>

        <div id="canvas">
            <div id="box_wrapper">
                <?php include 'header1.php'; ?>
                <section class="page_breadcrumbs ds background_cover section_padding_top_65 section_padding_bottom_65">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12  text-center" style="padding: 20px;background: rgba(0, 0, 0, 0.6); color: #fff;/*width: auto;*/">
                                <h2>Player Registration / Renewal</h2>
                                <ol class="breadcrumb greylinks">
                                    <li> <a href="index.php">Home</a> </li>
                                    <li class="active">Player Registration  / Renewal</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="about" class="ls section_padding_top_110 columns_padding_30">
                    <div class="container1">
                        <!--<div class="shownumber" style="width:  401px; padding-left: 13px;padding-right: 34px;">-->
                        <div class="shownumber">
                            <center>
                                <div class="form-heading" style="background-color: #F37029;padding: 20px;font-size: 22px;font-weight: 400;color: white;">Mobile Number Verification</div>
                            </center>
                            <div class="form-row" style="padding-right: 0px;padding-left: 6px;">
                                <input  id="mobile" pattern="[789][0-9]{9}" class="form-input w3-input w3-border w3-center w3-xlarge"  placeholder="Enter the 10 digit Mobile No"  inputmode="numeric" type="tel" oninput="this.value=this.value.replace(/[^0-9]/g,'');javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10"  autocomplete="off" autofocus required>
                            </div>
                            <input type="button" class="btnSubmit" value="Send OTP"   onClick="sendOTP();" id="otp-login-submit">
                        </div>
                        <!--<div class="showotp" style="width: 366px;display: none;padding-left: 13px;">-->
                        <div class="showotp" style="width: 366px;display: none;">
                            <center>
                                <div class="form-heading" style="background-color:#F37029;padding: 16px;font-size: 20px;font-weight: 500;color: white;">OTP is sent to Your Mobile Number </div>
                            </center>
                            <div class="form-row">
                                <input type="text" id="view_number" class="show_number_text form-input"  name="shownumbertext" readonly style="width: 295px;display: inline;"><span style="padding-left: 5px;"><button id="otp-login-edit" onclick="hide_from()" class="w3-btn w3-gold" style="    height: 44px;"><i class="fa fa-pencil" aria-hidden="true"></i></button></span>
                            </div>
                            <div class="form-row" style="padding-left: 152px;">
                                <div id="timer1" > <button id="otp-login-time " class=" w3-btn w3-gold" ><span id="timer"></span></button></div>
                                <div id="sub1"> <button id="otp-login-submit " class="w3-btn w3-gold" name="resend"  onClick="sendOTP();"><span id="sub">Resend Otp</span></button></div>
                            </div>
                            <div class="form-row">
                                <input type="text" class="otp_save" style="display: none;" name="otpsave" required>
                                <!--<input type="text" class="vdca_id"  name="vdca_id" value="<?php echo $vdca_id21; ?>"required>-->
                                <input inputmode="numeric"  id="mobileOtp" class="form-input w3-input w3-border w3-center w3-xlarge"oninput="this.value=this.value.replace(/[^0-9]/g,'');javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" placeholder="Enter the 6 digit OTP"  oninput="test();" maxlength="6"  autocomplete="off" required>		
                            </div>
                            <input id="verify" type="button" class="btnVerify" value="Verify"  onClick="verifyOTP();" tabindex="-1">		
                        </div>
                    </div>
                </section>
            </div>
            <?php include 'footer.php'; ?>
        </div>
        <?php // include'js.php'; ?>
        <script src= "https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> 
        <script>
                                $("#mobile").keypress(function (event) {
                                    if (event.keyCode === 13) {
                                        $("#otp-login-submit").click();
                                    }
                                });
        </script>  
        <script>
            var vcid = "<?php echo $vdca_id21; ?>";
            function hide_from()
            {
                $(".showotp").hide();
                $(".shownumber").show();
            }
            function sendOTP() {

                var number = $("#mobile").val();
                if (number.length == 10 && number != null) {
                    var input = {
                        "mobile_number": number,
                        "action": "send_otp",
                        "vdca_id": vcid
                    };
                    $.ajax({
                        url: 'register.php',
                        type: 'POST',
                        data: input,
                        success: function (html) {
                            console.log(html);
                            var getdata = html.split("#@#");
                            $("#view_number").val(number);
                            $(".showotp").show();
                            $(".shownumber").hide();
                            timer(120);
                            $("#timer1").show();
                            $(".otp_save").val(html);
                            $(".vdca_id").val(html);
                            $(".show_number_text").html(getdata[2]);
//                            check_otp(getdata[0],getdata[1],getdata[2]);
//                            $(".container1").html(response);
//alert (response);
                        }
                    });
                } else {
                    $(".error").html('Please enter a valid number!')
                    $(".error").show();
                }
            }
            function verifyOTP() {
                var shownumbertext = $(".show_number_text").val();
                var otpsave = $(".otp_save").val();
                var mobileOtp = $("#mobileOtp").val();
                var getdata = otpsave.split("#@#");
//                alert (getdata);
                if (getdata[1] == mobileOtp) {
                    if (getdata[0] == "olduser") {
                        window.location = "viewplayer.php";
                    } else {
                        window.location = "addplayer.php";
                    }
                } else {
                    alert("Enter Correct OTP");
                }
            }
        </script>

        <script>
            let timerOn = true;
            function timer(remaining) {
                var m = Math.floor(remaining / 60);
                var s = remaining % 60;
                m = m < 10 ? '0' + m : m;
                s = s < 10 ? '0' + s : s;
                document.getElementById('timer').innerHTML = m + ':' + s;
                remaining -= 1;
                if (remaining >= 0 && timerOn) {
                    setTimeout(function () {
                        timer(remaining);
                    }, 1000);
                    $("#sub1").hide();
                    return;
                }

                if (!timerOn) {
                    // Do validate stuff here
                    return;
                }
                // Do timeout stuff here
                $("#timer1").hide();
                $("#sub1").show();
                alert('Timeout for otp');
            }
        </script>
        <!--<script src= "https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>--> 
        <script>
            $("#mobileOtp").keypress(function (event) {
                if (event.keyCode === 13) {
                    $("#verify").click();
                }
            });
        </script> 
    </body>
</html>