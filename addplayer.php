<?php
$msg = $file_name = $file_name1 = $cdate = $date1 = $date = $name = $dob = $fide_id = $father_name = $city = $email_id = $rating = $vdca_id = $image = $image1 = $year = $tnsca = $institution = $id = $address = $aicf = $city = $rating = $gender = '';
//echo $_COOKIE["mobile_number"] . "------" . $_COOKIE["vdca_id"];exit;
if (!isset($_COOKIE["mobile_number"])) {
    header("Location:register.php?");
} else {
    $cookie_var = $_COOKIE["mobile_number"];
}
?>

<?php
include_once 'db.php';


if (isset($_POST['save'])) {
    $cdate = date('Y-m-d');
    $date1 = $_POST['dob'];
    $date = new DateTime($date1);
    $dob = $date->format('Y-m-d');
    $fide_id = $_POST['fide_id'];
    $gender = $_POST['gender'];
    $father_name = $_POST['fname'];
    $vdca_id = $_POST['vdca_id'];
//echo $action."<br>." . $phone_no;
    $rating = $_POST['rating'];
    $aicf = $_POST['aicf'];
    $tnsca = $_POST['tnsca'];
    $city = $_POST['city'];
    $name = $_POST['name'];
    $email_id = $_POST['email_id'];
    $remove[] = "'";
    $remove[] = '"';
    $remove[] = "-"; // just as another example

    $address = $_POST['address'];
    $address = str_replace($remove, "", $address);
    $institution = $_POST['institution'];

    if (isset($_FILES['image'])) {
//        echo 'file';exit;
        if ($_FILES["image"]["name"]) {
            $file_name = "upload_category/" . round(microtime(true)) . '_1.' . pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
            //$file= round(microtime(true)) . '.' . pathinfo($_FILES["players_image"]["name"], PATHINFO_EXTENSION);
            //$filename = pathinfo($file_name);
//            print_r($file_name);exit;
            $file_tmp = $_FILES['image']['tmp_name'];
            move_uploaded_file($file_tmp, $file_name);
        }
    }

    if (isset($_FILES['image1'])) {
//        echo 'file';exit;
        if ($_FILES["image1"]["name"]) {
            $file_name1 = "upload_category/" . round(microtime(true)) . '_2.' . pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
            //$file= round(microtime(true)) . '.' . pathinfo($_FILES["players_image"]["name"], PATHINFO_EXTENSION);
            //$filename = pathinfo($file_name);
//            print_r($file_name);exit;
            $file_tmp = $_FILES['image1']['tmp_name'];
            move_uploaded_file($file_tmp, $file_name1);
        }
    }
    ?>

    <?php
    $sql1 = "select * from `vdca_players_db` where `phone_no`='$cookie_var'";
    $result1 = mysqli_query($mysqli, $sql1);
    if (mysqli_num_rows($result1) > 0) {
        $sql = " UPDATE `vdca_players_db` SET `fide_id`='$fide_id',`name`='$name',`dob`='$dob',`gender`='$gender',`email_id`='$email_id',`father_name`='$father_name',`birth_cf`='$file_name1',`photo`='$file_name',`address`='$address',`city`='$city',`institution`='$institution',`rating`='$rating',`aicf`='$aicf',`tnsca`='$tnsca',`year`='$year', `mdate` = CONCAT (`mdate`,'|','$datetime'), `mip` = CONCAT (`mip`,'|','$_SERVER[REMOTE_ADDR]') where `phone_no`='$cookie_var'";
//      echo $sql;exit;
        $result = mysqli_query($mysqli, $sql);
        header("Location:viewplayer.php?msg=3");
        exit;
    } else {
        $sql = "INSERT INTO `vdca_players_db`(`fide_id`,`name`, `dob`, `gender`, `email_id`, `father_name`, `birth_cf`, `photo`, `address`, `city`, `institution`, `rating`, `aicf`, `tnsca`, `cip`,  `cdate`) VALUES ('$fide_id','$name','$dob','$gender','$email_id','$father_name','$file_name1','$file_name ','$address','$city','$institution','$rating','$aicf','$tnsca','$_SERVER[REMOTE_ADDR]','$cdate')";
//         echo $sql;exit;
        $result = mysqli_query($mysqli, $sql);
        header("Location:viewplayer.php?msg=2");
        exit;
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>

        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <?php include 'style.php'; ?>
        <style>

            .input-container {
                display: -ms-flexbox; /* IE10 */
                display: flex;
                width: 100%;
                margin-bottom: 15px;
            }

            .icon {
                padding-top: 22px;
                /*padding: 10px;*/
                background: #F37029;
                color: white;
                min-width: 50px;
                text-align: center;
            }

            .input-field {
                width: 100%;
                /*padding: 10px;*/
                outline: none;
            }

            .input-field:focus {
                border: 2px solid dodgerblue;
            }

            /* Set a style for the submit button */
            .btn {
                background-color: #F37029;
                color: white;
                padding: 15px 20px;
                border: none;
                font-size: 13px;
                font-weight: 800;
                cursor: pointer;
                /*width: 100%;*/
                opacity: 0.9;
            }

            .btn:hover {
                opacity: 1;
            }
            .form-control[disabled], .form-control[readonly], fieldset[disabled] .form-control {
                background-color: #fff;
            }
            .section_padding_top_110 > [class*="container"] {
                padding-top: 50px;
            }
            [class*="col-"] {
                margin-top: 0px; 
                margin-bottom: 0px; 
            }
            .ui-datepicker select.ui-datepicker-month, .ui-datepicker select.ui-datepicker-year {
                width: 93px;
                height: auto;
                padding: 3px;
            }
        </style>
        <script>
            $(function () {
                $("#datepicker").datepicker({
                    dateFormat: 'dd-mm-yy',
                    changeMonth: true,
                    changeYear: true,
                    yearRange: "-100:+00"
                });
            });
        </script>
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
                                <h2>Registration</h2>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="about" class="ls section_padding_top_110 columns_padding_30">
                    <div class="container">
                        <form action="addplayer.php" style="width: 100%;" method="POST" enctype="multipart/form-data" id="myform">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label style="padding-left: 18px;font-weight: 800;">Player Name <sub style="color:red;font-size: 24px;">*</sub></label>
                                    <div class="input-container">
                                        <i class="fa fa-user icon"></i>
                                        <input class="input-field" type="text" placeholder="PLAYER NAME" name="name" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <label style="padding-left: 18px;font-weight: 800;">Father Name <sub style="color:red;font-size: 24px;">*</sub></label>
                                    <div class="input-container">
                                        <i class="fa fa-user icon"></i>
                                        <input class="input-field" type="text" placeholder="FATHER NAME" name="fname" required/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label style="padding-left: 18px;font-weight: 800;">Date Of Birth <sub style="color:red;font-size: 24px;">*</sub></label>
                                    <div class="input-container">
                                        <i class="glyphicon glyphicon-calendar icon"></i>
                                        <input type="text" class="form-control" readonly id="datepicker" name="dob"  placeholder="dd-mm-yyyy"   required=""  value="<?php echo $dob; ?>" class="input-field">
<!--                                                                                    <input type="text" class="input-field" id="date"  name="dob" placeholder="dd-mm-yyyy"  required autocomplete="off" value="<?php // echo $dob;         ?>"><sub style="color:red;font-size: 24px;">*</sub>-->
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <label style="padding-left: 18px;font-weight: 800;">Gender <sub style="color:red;font-size: 24px;">*</sub></label>
                                    <div class="input-container">
                                        <i class="fa fa-mars-double icon" style="padding-bottom: 13px;"></i>
                                        <input required type="radio"  name="gender" id="gender" class="" style="margin: 18px;" value="Male"
                                        <?php
                                        if ($gender == "Male") {
                                            echo "checked";
                                        }
                                        ?>><span style="margin: 10px;"> Male</span>

                                        <input required type="radio" name="gender" id="fgender" class="" style="margin: 18px;" value="Female" 
                                        <?php
                                        if ($gender == "Female") {
                                            echo "checked";
                                        }
                                        ?>><span style="margin: 10px;"> Female </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label style="padding-left: 18px;font-weight: 800;">Mobile No <sub style="color:red;font-size: 24px;">*</sub></label>
                                    <div class="input-container" style="height: 58px;">
                                        <i class="fa fa-phone icon" style="padding-top: 18px;"></i>
                                        <labele  name="phone_no" value="<?php echo $_COOKIE["mobile_number"]; ?>" readonly style="padding:18px;padding-left: 31px;"><?php echo $_COOKIE["mobile_number"]; ?> </labele>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <label style="padding-left: 18px;font-weight: 800;">Email Id <sub style="color:red;font-size: 24px;">*</sub></label>
                                    <div class="input-container">
                                        <i class="fa fa-envelope icon"></i>
                                        <input class="input-field" type="email" id = "email" required placeholder="EMAIL ID" name="email_id">
                                        <span class="error" id="invalid_email" style="color:red;">Email-id is invalid</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label style="padding-left: 18px;font-weight: 800;">Address <sub style="color:red;font-size: 24px;">*</sub></label>
                                    <div class="input-container">
                                        <i class="fas fa-address-book icon"></i>
                                        <input class="input-field" type="text" placeholder="ADDRESS" name="address" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <label style="padding-left: 18px;font-weight: 800;">City <sub style="color:red;font-size: 24px;">*</sub></label>
                                    <div class="input-container">
                                        <i class="far fa-building icon"></i>
                                        <input class="input-field" type="text" placeholder="CITY" name="city">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label style="padding-left: 18px;font-weight: 800;">Player's  Photo <sub style="color:red;font-size: 24px;">*</sub></label>
                                    <div class="input-container">
                                        <i class="glyphicon glyphicon-camera  icon"></i>
                                        <div class="col-lg-6 col-sm-12">
                                            <input type="file" name="image"  class="input-field" accept="image/*" value="<?php echo $image ?>" style="padding: 10px;" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <label style="padding-left: 18px;font-weight: 800;">Birth Certificate</label><sub style="color:red;font-size: 24px;">*</sub>
                                    <div class="input-container">
                                        <i class="fas fa-file-alt  icon"></i>
                                        <div class="col-lg-6">
                                            <input type="file" name="image1"  class="input-field" accept="image/*"  value="<?php echo $image1 ?>" style="padding: 10px;" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label style="padding-left: 18px;font-weight: 800;">Institution</label>
                                    <div class="input-container">
                                        <i class="fas fa-building icon"></i>
                                        <input class="input-field" type="text" placeholder="INSTITUTION" name="institution">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <label style="padding-left: 18px;font-weight: 800;">Fide Id</label>
                                    <div class="input-container">
                                        <i class="fa fa-id-badge icon"></i>
                                        <input class="input-field" type="text" placeholder="FIDE ID" name="fide_id">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <label style="padding-left: 18px;font-weight: 800;">AICF</label>
                                    <div class="input-container">
                                        <i class="fa fa-id-badge icon"></i>
                                        <input class="input-field" type="text" placeholder="AICF" name="aicf">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <label style="padding-left: 18px;font-weight: 800;">TNSCA</label>
                                    <div class="input-container">
                                        <i class="fa fa-id-badge icon"></i>
                                        <input class="input-field" type="text" placeholder="TNSCA" name="tnsca">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label style="padding-left: 18px;font-weight: 800;">Rating</label>
                                    <div class="input-container">
                                        <i class="fa fa-id-badge icon"></i>
                                        <input class="input-field" type="text" placeholder="RATING" name="rating">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-container" style="display:none;">
                                        <i class="fa fa-id-badge icon"></i>
                                        <input class="input-field" type="text" placeholder="vdca_id" name="vdca_id" value="<?php echo $cookie_var1; ?>" hidden >
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <p style="color:black">
                                    <input type="checkbox" class="custom-control-input"  name="example1"   id="termsChkbx" style="height: 25px; width: 30px;"> 
                                    <a>I hereby declare that I will abide by the Rules and regulations of my District Chess Association / TNSCA / AICF / FIDE and of the Organisers of the Chess tournament and any misconduct on my part may result in my expulsion from the tournament. I also declare I will not participate in any tournaments / Championships which are not authorized / not recognized by VDCA / TNSCA / AICF. I opt for Virudhunagar District in playing tournaments. Further I agree that the Virudhunagar District Chess Association/Organisers can send SMS/Email to my registered mobile/email regarding the Chess events.
                                    </a> <br>
                                </p>
                            </div>
                            <button type="submit" name="save" class="btn" style="float: right;" id="sub1">Register</button>
                        </form>
                    </div>
                </section>

                <?php include 'footer.php'; ?>
            </div>
            <?php // include 'js.php'; ?>
            <script>
                $("#sub1").click(function () {
                    if ($("#termsChkbx").prop('checked')) {
                        $('#sub1').attr('type', "submit");
                    } else {
                        alert("Please accept that declaration");
                        $('#sub1').attr('type', "button");
                    }
                });
            </script>
            <script>
                $("#termsChkbx").keypress(function (event) {
                    if (event.keyCode === 13) {
                        $("#sub1").click();
                    }
                });
            </script> 
            <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
            <script>
                $(document).ready(function () {
                    $('.error').hide();
                    $('#sub1').click(function () {
                        var email = $('#email').val();

                        if (email == '') {
                            $('#email').next().show();
                            return false;
                        }
                        if (IsEmail(email) == false) {
                            $('#invalid_email').show();
                            return false;
                        }
//              return false;
                    });
                });
                function IsEmail(email) {
                    var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                    if (!regex.test(email)) {
                        return false;
                    } else {
                        window.location = "viewplayer.php";

                    }
                }
            </script>

    </body>
</html>