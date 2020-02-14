<?php
include_once 'db.php';
include_once 'pay/config.php';

$msg = $file_name = $cookie_var = $file_name1 = $date1 = $cdate = $name = $date = $fide_id = $father_name = $city = $email_id = $rating = $vdca_id = $image = $image1 = $year = $tnsca = $institution = $id = $address = $aicf = $city = $rating = $gender = '';
//echo $_COOKIE["mobile_number"] . "------" . $_COOKIE["vdca_id"];exit;
if (!isset($_COOKIE["vdca_id"])) {
    header("Location:addplayer.php?");
} else {
    $cookie_var1 = $_COOKIE["vdca_id"];
//    echo $cookie_var1;
}

$sql = "SELECT * FROM `vdca_players_db` where `id` = '$cookie_var1 ' ";
$result = mysqli_query($mysqli, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    $id = $row['id'];
    $name = $row['name'];
    $date1 = $row['dob'];
    $date = new DateTime($date1);
    $dob = $date->format('d-m-Y');
    $fide_id = $row['fide_id'];
    $vdca_id = $row['vdca_id'];
    $gender = $row['gender'];
    $father_name = $row['father_name'];
    $rating = $row['rating'];
    $aicf = $row['aicf'];
    $tnsca = $row['tnsca'];
    $city = $row['city'];
    $phone_no = $row['phone_no'];
    $email_id = $row['email_id'];
    $address = $row['address'];
    $institution = $row['Institution'];
    $year = $row['year'];
    $image = $row['photo'];
    $image1 = $row['birth_cf'];
}

if (isset($_POST['save'])) {
    $cdate = date('y/m/d');
    $date1 = $_POST['dob'];
    $date = new DateTime($date1);
    $dob = $date->format('Y-m-d');
    $fide_id = $_POST['fide_id'];
    $gender = $_POST['gender'];
    $father_name = $_POST['father_name'];
    $vdca_id = $_POST['vdca_id'];
    $rating = $_POST['rating'];
    $aicf = $_POST['aicf'];
    $tnsca = $_POST['tnsca'];
    $city = $_POST['city'];
    $name = $_POST['name'];
//     $cookie_var = $_POST['phone_no'];
    $email_id = $_POST['email_id'];
    $address = $_POST['address'];
    $institution = $_POST['institution'];
    $phone_no = $_POST['phone_no'];
//    $year = $_POST['year'];

    if (isset($_FILES['image'])) {
//        echo 'file';exit;
        if ($_FILES["image"]["name"]) {
            $file_name = "upload_category/" . round(microtime(true)) . '.' . pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
            //$file= round(microtime(true)) . '.' . pathinfo($_FILES["players_image"]["name"], PATHINFO_EXTENSION);
            //$filename = pathinfo($file_name);
//            print_r($file_name);exit;
            $file_tmp = $_FILES['image']['tmp_name'];
            move_uploaded_file($file_tmp, $file_name);
        }
    }

    if (isset($_FILES['image1'])) {
//        echo 'file';exit;
        if ($_FILES["image"]["name"]) {
            $file_name1 = "upload_category/" . round(microtime(true)) . '.' . pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
            //$file= round(microtime(true)) . '.' . pathinfo($_FILES["players_image"]["name"], PATHINFO_EXTENSION);
            //$filename = pathinfo($file_name);
//            print_r($file_name);exit;
            $file_tmp = $_FILES['image']['tmp_name'];
            move_uploaded_file($file_tmp, $file_name);
        }
    }
    ?>

    <?php
    $sql1 = "select * from `vdca_players_db` where `id`='$cookie_var1'";
    $result1 = mysqli_query($mysqli, $sql1);
    if (mysqli_num_rows($result1) > 0) {
        $sql = " UPDATE `vdca_players_db` SET `fide_id`='$fide_id',`phone_no`='$phone_no',`name`='$name',`dob`='$dob',`gender`='$gender',`email_id`='$email_id',`father_name`='$father_name',`address`='$address',`city`='$city',`institution`='$institution',`rating`='$rating',`aicf`='$aicf',`tnsca`='$tnsca',`year`='$year', `mdate` = CONCAT (`mdate`,'|','$datetime'), `mip` = CONCAT (`mip`,'|','$_SERVER[REMOTE_ADDR]') where `id`='$cookie_var1'";
//      echo $sql;exit;
        $result = mysqli_query($mysqli, $sql);
        header("Location:viewplayer.php?msg=3");
        exit;
    } else {
        $sql = "INSERT INTO `vdca_players_db`(`fide_id`,`name`, `phone_no`,`dob`, `gender`, `email_id`, `father_name`, `birth_cf`, `photo`, `address`, `city`, `institution`, `rating`, `aicf`, `tnsca`, `cip`,  `cdate`) VALUES ('$fide_id','$name','$phone_no','$dob','$gender','$email_id','$father_name','$file_name1','$file_name ','$address','$city','$institution','$rating','$aicf','$tnsca','$_SERVER[REMOTE_ADDR]','$cdate')";
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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>-->
        <!-- this meta viewport is required for BOLT //-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

        <!-- BOLT Sandbox/test //-->
        <script id="bolt" src="https://sboxcheckout-static.citruspay.com/bolt/run/bolt.min.js" bolt-
        color="F37029" bolt-logo="http://boltiswatching.com/wp-content/uploads/2015/09/Bolt-Logo-e14421724859591.png"></script>
        <?php include 'style.php'; ?>
        <style>


            .input-container {
                display: -ms-flexbox; /* IE10 */
                display: flex;
                width: 100%;
                margin-bottom: 15px;
            }

            .icon {
                padding-top: 21px;
                /*padding: 10px;*/
                background: #F37029;
                color: white;
                min-width: 50px;
                text-align: center;
            }

            .input-field {
                width: 100%;
                padding: 10px;
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
            .section_padding_top_110 > [class*="container"] {
                padding-top: 50px;
            }
            [class*="col-"] {
                margin-top: 0px; 
                margin-bottom: 0px; 
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
                                <h2><?php echo "Hi" . " " . $name ?></h2>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="about" class="ls section_padding_top_110 columns_padding_30">
                    <div class="container">
                        <center>
                            <span style="color: #f50505;  font-size: 18px;font-weight: 900;">STATUS: </span>
                            <?php
                            $sql = "select `vp`.*,`vdb`.phone_no from `vdca_payment` `vp` cross join vdca_players_db `vdb` on `vp`.`pid`=`vdb`.`vdca_id` where `vdb`.`phone_no`='$phone_no' ORDER by id DESC limit 1 ";
                            $result2 = mysqli_query($mysqli, $sql);
                            if (mysqli_num_rows($result2)) {
                                while ($row2 = mysqli_fetch_assoc($result2)) {
                                    $phone_no = $row2['phone_no'];
                                    $payment_status = $row2['txnStatus'];

                                    if ($payment_status == "SUCCESS") {
                                        ?>
                                        <!--<a href="#"><button type="button" class=" btn-success input-field" style="background-color:#7bbf3a;width: 150px;">Active</button></a>-->
                                        <span style="font-weight: 900; font-size: 18px; color: #80c337;">ACTIVE</span>
                                    <?php } else { ?>
                                        <button type="button"  style="background-color: #ff3c2e;width: 165px;"class=" btn-danger input-field" value="Pay" onclick="launchBOLT();"  >InActive(Pay Now)</button><p>463</p>
                                    <?php } ?>

                                    <?php
                                }
                            } else {
                                ?>
                                <button type="button"  style="background-color: #ff3c2e;width: 165px;"class=" btn-danger input-field"  value="Pay" onclick="launchBOLT();"  >InActive(Pay Now)</button><p style="font-weight: 800;"><span style="color:red;">Fees Per Year : </span>150 <span style="font-size:20px;">+ </span><span style="color:red;">Transaction Fee : </span>3% ( 4.5 Rupees only) <span style="font-size:20px;">= </span><span style="color:red;">Payable Amount : </span>154.5</p>  
                            <?php } ?>
                        </center><br>
                        <form action="viewplayer.php" style="width: 100%;" method="POST" enctype="multipart/form-data">
                            <input type="hidden"  id="udf5" name="udf5"  hidden=""/>
                            <input type="hidden" id="surl" name="surl"  hidden=""/>
                            <input type="text" id="key" name="key" placeholder="Merchant Key"  hidden=""/>
                            <input type="text" id="salt" name="salt" placeholder="Merchant Salt"  hidden="" />
                            <input type="text" id="txnid" name="txnid" placeholder="Transaction ID" value="<?php echo "Txn" . rand(10000, 99999999) ?>"  hidden=""/>
                            <input type="text" id="hash" name="hash" placeholder="Hash" value=""hidden="" />
                            <input type="text" id="amount" name="amount" placeholder="Amount" hidden=""/>
                            <input type="text" id="vdca_id" name="vdca_id" value="<?php echo $vdca_id; ?>" placeholder="Vdca id" hidden=""/>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label style="padding-left: 18px;font-weight: 800;">Player Name </label>
                                    <div class="input-container">
                                        <i class="fa fa-user icon"></i>
                                        <input class="input-field"  id="fname" type="text" placeholder="Player Name" name="name"  readonly value="<?php echo $name ?>">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <label style="padding-left: 18px;font-weight: 800;">Father Name</label>
                                    <div class="input-container">
                                        <i class="fa fa-user icon"></i>
                                        <input class="input-field" type="text"  id="pinfo" placeholder="FATHER NAME" name="father_name"  value="<?php echo $father_name; ?>" <?php
                                        if ($father_name) {
                                            echo "readonly";
                                        }
                                        ?>>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label style="padding-left: 18px;font-weight: 800;">Date Of Birth </label>
                                    <div class="input-container">
                                        <i class="glyphicon glyphicon-calendar icon"></i>
                                        <!--<input class="input-field" type="text" placeholder="DOB" name="dob">-->
                                        <input class="input-field" id="date" name="dob" placeholder="DOB" type="text"   readonly value="<?php echo $dob; ?>">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <label style="padding-left: 18px;font-weight: 800;">Gender</label>
                                    <div class="input-container">
                                        <i class="fa fa-mars-double icon"></i>
                                        <input required type="radio" name="gender" id="gender" class=""   style="margin: 18px;"  value="Male"<?php
                                        if ($gender == "Male") {
                                            echo "checked";
                                        }
                                        ?> readonly><span style="margin: 10px;"> Male</span>
                                        <input required type="radio"  name="gender" id="fgender" class=""  style="margin: 18px;"  value="Female" <?php
                                        if ($gender == "Female") {
                                            echo "checked";
                                        }
                                        ?> readonly><span style="margin: 10px;"> Female </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label style="padding-left: 18px;font-weight: 800;">Mobile No <sub style="color:red;font-size: 24px;">*</sub></label>
                                    <div class="input-container">
                                        <i class="fa fa-phone icon"></i>
                                        <input type="tel" class="input-field"  id="mobile"  placeholder="MOBILE NO"  name="phone_no" minlength="10" maxlength="12" pattern="[789][0-9]{9}"  inputmode="numeric" type="tel" oninput="this.value=this.value.replace(/[^0-9]/g,'');javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10"  autocomplete="off" autofocus required  value="<?php echo $phone_no; ?>">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <label style="padding-left: 18px;font-weight: 800;">Email Id <sub style="color:red;font-size: 24px;">*</sub></label>
                                    <div class="input-container">
                                        <i class="fa fa-envelope icon"></i>
                                        <input class="input-field" type="email"  id="email"  placeholder="EMAIL ID" name="email_id"  value="<?php echo $email_id ?>">
                                        <span class="error" id="invalid_email" style="color:red;">Email-id is invalid</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label style="padding-left: 18px;font-weight: 800;">Address</label>
                                    <div class="input-container">
                                        <i class="fas fa-address-book icon"></i>
                                        <input class="input-field" type="text" placeholder="ADDRESS" name="address"  value="<?php echo $address ?>">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <label style="padding-left: 18px;font-weight: 800;">City</label>
                                    <div class="input-container">
                                        <i class="fa fa-id-badge icon" style="padding-top: 12px;"></i>
                                        <input class="input-field" type="text" placeholder="CITY" name="city"  value="<?php echo $city ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label style="padding-left: 18px;font-weight: 800;">Institution </label>
                                    <div class="input-container">
                                        <i class="	fas fa-building icon"></i>
                                        <input class="input-field" type="text" placeholder="INSTITUTION" name="institution"  value="<?php echo $institution ?>">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <label style="padding-left: 18px;font-weight: 800;">Fide Id</label>
                                    <div class="input-container">
                                        <i class="fa fa-id-badge icon"></i>
                                        <input class="input-field" type="text" placeholder="FIDE ID" name="fide_id"  value="<?php echo $fide_id ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label style="padding-left: 18px;font-weight: 800;">AICF</label>
                                    <div class="input-container">
                                        <i class="fa fa-id-badge icon"></i>
                                        <input class="input-field" type="text" placeholder="RATING" name="rating"  value="<?php echo $rating ?>">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <label style="padding-left: 18px;font-weight: 800;">TNSCA</label>
                                    <div class="input-container">
                                        <i class="fa fa-id-badge icon"></i>
                                        <input class="input-field" type="text" placeholder="TNSCA" name="tnsca"  value="<?php echo $tnsca ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label style="padding-left: 18px;font-weight: 800;">Rating</label>
                                    <div class="input-container">
                                        <i class="fa fa-id-badge icon"></i>
                                        <input class="input-field" type="text" placeholder="AICF" name="aicf"  value="<?php echo $aicf ?>">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <label style="padding-left: 18px;font-weight: 800;">Vdca Id</label>
                                    <div class="input-container">
                                        <i class="fa fa-id-badge icon"></i>
                                        <input class="input-field" type="text" placeholder="VDCA ID" name="vdca_id" readonly value="<?php echo $vdca_id; ?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label style="padding-left: 18px;font-weight: 800;">Player's  Photo </label>
                                    <div class="input-container">
                                        <i class="glyphicon glyphicon-camera  icon"></i> <span>
                                        <!--<input class="input-field" type="text" placeholder="PHOTO" name="photo">-->
                                            <?php if ($image) { ?>
                                                <img  data-id='<?php echo $image; ?>' width="100px" alt="No Image"  height="100px"src="<?php echo $image; ?>"  <?php
                                                if ($image) {
                                                    echo "readonly";
                                                }
                                                ?>>
                                                  <?php } else { ?>
                                                <input type="file" name="image" alt="No Image"  class="input-field" accept="image/*" value="<?php echo "admin/" . $image ?>"  readonly 
                                                   <?php } ?>     </span>  
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <label style="padding-left: 18px;font-weight: 800;">Birth Certificate</label>
                                    <div class="input-container">
                                        <i class="fas fa-file-alt  icon"></i>
                                        <!--<input class="input-field" type="text" placeholder="BIRTH CERTIFICATE" name="birth_cf">-->
                                        <?php if ($image) { ?>
                                            <img  data-id='<?php echo $image1; ?>' width="100px"  alt="No Image" height="100px"src="<?php echo $image1; ?>" <?php
                                            if ($image1) {
                                                echo "readonly";
                                            }
                                            ?>>
                                              <?php } else { ?>
                                            <input type="file" name="image1" alt="No Image"  class="input-field" accept="image/*" value="<?php echo $image1 ?>" <?php
                                            if ($image1) {
                                                echo "readonly";
                                            }
                                            ?>>
                                               <?php } ?>   
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <p style="color:black">
                                    <input type="checkbox" class="custom-control-input"  name="example1"   id="termsChkbx" style="height: 25px; width: 30px;"> 
                                    <a>I hereby declare that I will abide by the Rules and regulations of my District Chess Association / TNSCA / AICF / FIDE and of the Organisers of the Chess tournament and any misconduct on my part may result in my expulsion from the tournament. I also declare I will not participate in any tournaments / Championships which are not authorized / not recognized by VDCA / TNSCA / AICF. I opt for Virudhunagar District in playing tournaments. Further I agree that the Virudhunagar District Chess Association/Organisers can send SMS/Email to my registered mobile/email regarding the Chess events.
                                    </a> <br>
                                </p>
                            </div>
                            <button type="submit" name="save" class="btn" style="float: right;" id="sub1">Update</button> 
                        </form>
                    </div>
                </section>
            </div>
            <script type="text/javascript">
                $(':radio:not(:checked)').attr('disabled', true);
                $(document).ready(function () {
                    $("#key").val('<?php Print MERCHANT_KEY; ?>');
                    $("#salt").val('<?php Print MERCHANT_SALT; ?>');
                    $("#surl").val('<?php Print RES_URL; ?>');
                    $("#udf5").val('<?php echo $vdca_id; ?>');
                    $("#amount").val('<?php Print AMOUNT; ?>');
                    $.ajax({
                        url: 'pay/index.php',
                        type: 'post',
                        data: JSON.stringify({
                            key: $('#key').val(),
                            salt: $('#salt').val(),
                            txnid: $('#txnid').val(),
                            amount: $('#amount').val(),
                            pinfo: $('#pinfo').val(),
                            fname: $('#fname').val(),
                            email: $('#email').val(),
                            mobile: $('#mobile').val(),
                            udf5: $('#udf5').val(),
                        }),
                        contentType: "application/json",
                        dataType: 'json',
                        success: function (json, status) {
                            console.log(json);
                            if (json['error']) {
                                $('#alertinfo').html('<i class="fa fa-info-circle"></i>' + json['error']);
                            } else if (json['success']) {
                                $('#hash').val(json['success']);
                            }
                        }
                    });
                });
                function launchBOLT()
                {
                    bolt.launch({
                        key: $('#key').val(),
                        txnid: $('#txnid').val(),
                        hash: $('#hash').val(),
                        amount: $('#amount').val(),
                        firstname: $('#fname').val(),
                        email: $('#email').val(),
                        phone: $('#mobile').val(),
                        productinfo: $('#pinfo').val(),
                        udf5: $('#udf5').val(),
                        surl: $('#surl').val(),
                        furl: $('#surl').val(),
                        mode: 'dropout'
                    }, {responseHandler: function (BOLT) {
                            console.log(BOLT.response.txnStatus);
                            if (BOLT.response.txnStatus != 'CANCEL')
                            {
                                //Salt is passd here for demo purpose only. For practical use keep salt at server side only.
                                var fr = '<form action=\"' + $('#surl').val() + '\" method=\"post\">' +
                                        '<input type=\"hidden\" name=\"key\" value=\"' + BOLT.response.key + '\" />' +
                                        '<input type=\"hidden\" name=\"salt\" value=\"' + $('#salt').val() + '\" />' +
                                        '<input type=\"hidden\" name=\"txnid\" value=\"' + BOLT.response.txnid + '\" />' +
                                        '<input type=\"hidden\" name=\"amount\" value=\"' + BOLT.response.amount + '\" />' +
                                        '<input type=\"hidden\" name=\"productinfo\" value=\"' + BOLT.response.productinfo + '\" />' +
                                        '<input type=\"hidden\" name=\"firstname\" value=\"' + BOLT.response.firstname + '\" />' +
                                        '<input type=\"hidden\" name=\"email\" value=\"' + BOLT.response.email + '\" />' +
                                        '<input type=\"hidden\" name=\"udf5\" value=\"' + BOLT.response.udf5 + '\" />' +
                                        '<input type=\"hidden\" name=\"mihpayid\" value=\"' + BOLT.response.mihpayid + '\" />' +
                                        '<input type=\"hidden\" name=\"status\" value=\"' + BOLT.response.status + '\" />' +
                                        '<input type=\"hidden\" name=\"hash\" value=\"' + BOLT.response.hash + '\" />' +
                                        '</form>';
                                var form = jQuery(fr);
                                jQuery('body').append(form);
                                form.submit();
                            }
                        },
                        catchException: function (BOLT) {
                            alert(BOLT.message);
                        }
                    });
                }
            </script>
            <?php include 'footer.php'; ?>
        </div>
        <?php include'js.php'; ?>
        <script>
            $("#sub1").click(function () {
                if ($("#termsChkbx").prop('checked')) {
                    $('#sub1').attr('type', "submit");
                } else {
                    alert("Please accept declaration");
                    $('#sub1').attr('type', "button");
                }
            });
        </script>
        <script src= "https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> 
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
