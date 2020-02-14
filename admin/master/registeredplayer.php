<?php
session_start();
$user = $_SESSION['user'];
$prefix = '../';
include_once $prefix . '../db.php';
include_once '../../pay/config1.php';
$location = $prefix . "index.php";
if (isset($_SESSION['user'])) {
    
} else {
    header("Location: $location");
    exit;
}
$msg = $cdate = $name = $dob = $institute = $fide_no = $vdca_no = $year = $id = '';


if (isset($_GET['msg'])) {
    $msg = $_GET['msg'];
}
?>
<!doctype html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="VDCA Admin">
        <meta content="width=device-width, initial-scale=1, user-scalable=no" name="viewport">
        <title>Virudhunagar District Chess Association  | VDCA Players' List</title>
        <?php include_once $prefix . 'include/css.php'; ?>
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

        <!-- BOLT Sandbox/test //-->
        <script id="bolt" src="https://sboxcheckout-static.citruspay.com/bolt/run/bolt.min.js" bolt-
        color="F37029" bolt-logo="http://boltiswatching.com/wp-content/uploads/2015/09/Bolt-Logo-e14421724859591.png"></script>
    </head>

    <body>
        <?php include_once $prefix . 'include/header.php'; ?>
        <div class="pmd-sidebar-overlay"></div>
        <?php include_once $prefix . 'include/menubar.php'; ?>
        <div id="content" class="pmd-content inner-page">
            <div class="container-fluid full-width-container">
                <div class="section col-md-10 col-lg-offset-1 billinfo sp">
                    <div class="card-head style-primary" style="background-color: #f3702b;height: 100%; padding: 18px; font-size: 18px;    color: aliceblue; font-weight: 900; text-align: center;">
                        <header class="head">VDCA Registered Players' List</header>
                    </div> 
                </div>
            </div>
        </div>

        <section class="row component-section">
            <div class="col-lg-8 col-lg-offset-3 sp">
                <div  class="pmd-card pmd-z-depth pmd-card-custom-view">
                    <div class="table-responsive">
                        <table id="example-checkbox" class="table pmd-table table-hover table-striped display responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                                <tr>                                            
                                    <th>S.No</th>
                                    <th> Player Name</th>
                                    <th>DOB</th>
                                    <th>Mobile_no</th>
                                    <th>Email_id</th>
                                    <th>Gender</th>
                                    <th>Father Name</th>
                                    <th>Photo</th>
                                    <th>address</th>
                                    <th>City</th>
                                    <th>Institution</th>
                                    <th>FIDE</th>
                                    <th>VDCA Id</th>
                                    <th>Rating</th>
                                    <th>AICF</th>
                                    <th>TNSCA</th>
                                    <!--<th>Year</th>-->
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                $sql2 = "SELECT * FROM vdca_players_db  ORDER BY `id` desc";
//                                echo $sql2;
                                $result2 = mysqli_query($mysqli, $sql2);
                                while ($row2 = mysqli_fetch_assoc($result2)) {
                                    $id = $row2['id'];
                                    $fide_id = $row2['fide_id'];
                                    $vdca_id = $row2['vdca_id'];
                                    $name = $row2['name'];
                                    $gender = $row2['gender'];
                                    $dob = $row2['dob'];
                                    $mobile_no = $row2['phone_no'];
                                    $email_id = $row2['email_id'];
                                    $father_name = $row2['father_name'];
                                    $photo = $row2['photo'];
                                    $address = $row2['address'];
                                    $city = $row2['city'];
                                    $institution = $row2['Institution'];
                                    $rating = $row2['rating'];
                                    $aicf = $row2['aicf'];
                                    $tnsca = $row2['tnsca'];
//                                    $year = $row2['year'];
//                                    $status = $row2['status'];
                                   
                                    ?>
                                    <tr>                                           
                                        <td><?php echo  $i;?></td>
                                        <td><?php echo $name; ?></td>
                                        <td><?php echo date('d-m-Y', strtotime($dob)); ?></td>
                                        <td><?php echo $mobile_no; ?></td>
                                        <td><?php echo $email_id; ?></td>
                                        <td><?php echo $gender; ?></td>
                                        <td><?php echo $father_name; ?></td>
                                        <td><?php echo $photo; ?></td>
                                        <td><?php echo $address; ?></td>
                                        <td><?php echo $city; ?></td>
                                        <td><?php echo $institution; ?></td>
                                        <td><?php echo $fide_id; ?></td>
                                        <td><?php echo $vdca_id; ?></td>
                                        <td><?php echo $rating; ?></td>
                                        <td><?php echo $aicf; ?></td>
                                        <td><?php echo $tnsca; ?></td>
                                        <!--<td><?php // echo $year;      ?></td>-->
                                        <td> 
                                            <?php
                                            $j = 1;
                                            $sql34 = "select `vp`.*,`vdb`.phone_no from `vdca_payment` `vp` cross join vdca_players_db `vdb` on `vp`.`pid`=`vdb`.`vdca_id` where `vdb`.`phone_no`='$mobile_no' ORDER by id DESC limit 1 ";
//                                           echo $sql34;
                                            $result22 = mysqli_query($mysqli, $sql34);
                                            if (mysqli_num_rows($result22)) {
                                                while ($row22 = mysqli_fetch_assoc($result22)) {
                                                    $phone_no = $row22['phone_no'];
                                                    $payment_status = $row22['txnStatus'];
                                                    if ($payment_status == "SUCCESS") {
                                                        ?>
                                                        <span style="font-weight: 900; font-size: 18px; color: #80c337;">ACTIVE</span>
                                                    <?php } else { ?>
                                                        <!--<a href="../../paytm/pg_site.php"   title="Go To payment page"><button type="button"  style="background-color: #ff3c2e;width: 152px;"class=" btn-danger input-field">InActive(Pay Now)</button></a>-->
                                                    <?php } ?>
                                                    <?php
                                                    $j++;
                                                }
                                                ?>
                                            <?php } else {
                                                ?>
                                                        <button type="button" onmouseover="create_hase_key('<?php echo $id; ?>')"  style="background-color: #ff3c2e;width: 165px;"class=" btn-danger input-field"  value="Pay" onclick="launchBOLT('<?php echo $id; ?>');"  >InActive(Pay Now)</button>
                                                <!--<span style="font-weight: 900; font-size: 18px; color: red;">InActive</span>-->
                                                <input type="hidden"  id="udf5_<?php echo $id; ?>" name="udf5" value="<?php echo $vdca_id; ?>"  hidden=""/>
                                                <input type="hidden" id="surl_<?php echo $id; ?>" name="surl" value="<?php echo RES_URL; ?>"   hidden=""/>
                                                <input type="text" id="key_<?php echo $id; ?>" name="key" placeholder="Merchant Key" value="<?php echo MERCHANT_KEY; ?>" hidden="" />
                                                <input type="text" id="salt_<?php echo $id; ?>" name="salt" placeholder="Merchant Salt" value="<?php echo MERCHANT_SALT; ?>"    hidden="" />
                                                <input type="text" id="txnid_<?php echo $id; ?>" name="txnid" placeholder="Transaction ID"  value="<?php echo "Txn" . rand(10000, 99999999) ?>"  hidden=""/>
                                                <input type="text" id="hash_<?php echo $id; ?>" name="hash" placeholder="Hash" value="" hidden="" />
                                                <input type="text" id="amount_<?php echo $id; ?>" name="amount" placeholder="Amount" value="<?php echo AMOUNT; ?>"  hidden=""/>
                                                <input type="text" id="vdca_id_<?php echo $id; ?>" name="vdca_id" value="<?php echo $vdca_id; ?>" placeholder="Vdca id" hidden=""/>
                                                <input class="input-field" type="text"  id="pinfo_<?php echo $id; ?>" placeholder="FATHER NAME" name="father_name"  value="<?php echo $father_name; ?>"  hidden="">
                                                <input class="input-field"  id="fname_<?php echo $id; ?>" type="text" placeholder="Player Name" name="name"  readonly value="<?php echo $name ?>" hidden="">
                                                <input class="input-field" type="email"  id="email_<?php echo $id; ?>"  placeholder="EMAIL ID" name="email_id"  value="<?php echo $email_id ?>" hidden="" >
                                                <input type="tel" class="input-field"  id="mobile_<?php echo $id; ?>"  placeholder="MOBILE NO"  name="phone_no" minlength="10" maxlength="12" pattern="[789][0-9]{9}" required tabindex="1" value="<?php echo $mobile_no; ?>" hidden="">
                                                <!--                                                <button type="button"  style="background-color: #ff3c2e;width: 165px;"class=" btn-danger input-field" value="Pay" onclick="launchBOLT();"  >InActive(Pay Now)</button>-->
                                            <?php } ?>
                                        </td>
                                    </tr>
                                    <?php
                                   $i++; 
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
            <?php include_once $prefix . 'include/js.php'; ?>
            <script type="text/javascript">
            function create_hase_key(ids) {
                    $.ajax({
                        url: '../../pay/index.php',
                        type: 'post',
                        data: JSON.stringify({
                            key: $('#key_'+ids).val(),
                            salt: $('#salt_'+ids).val(),
                            txnid: $('#txnid_'+ids).val(),
                            amount: $('#amount_'+ids).val(),
                            pinfo: $('#pinfo_'+ids).val(),
                            fname: $('#fname_'+ids).val(),
                            email: $('#email_'+ids).val(),
                            mobile: $('#mobile_'+ids).val(),
                            udf5: $('#udf5_'+ids).val(),
                        }),
                        contentType: "application/json",
                        dataType: 'json',
                        success: function (json, status) {
                            console.log(json);
                            if (json['error']) {
                                $('#alertinfo').html('<i class="fa fa-info-circle"></i>' + json['error']);
                            } else if (json['success']) {
                                $('#hash_'+ids).val(json['success']);
                            }
                        }
                    });
                }
                function launchBOLT(ids)
                {
                    bolt.launch({
                        key: $('#key_'+ids).val(),
                        txnid: $('#txnid_'+ids).val(),
                        hash: $('#hash_'+ids).val(),
                        amount: $('#amount_'+ids).val(),
                        firstname: $('#fname_'+ids).val(),
                        email: $('#email_'+ids).val(),
                        phone: $('#mobile_'+ids).val(),
                        productinfo: $('#pinfo_'+ids).val(),
                        udf5: $('#udf5_'+ids).val(),
                        surl: $('#surl_'+ids).val(),
                        furl: $('#surl_'+ids).val(),
                        mode: 'dropout'
                    }, {responseHandler: function (BOLT) {
                            console.log(BOLT.response.txnStatus);
                            if (BOLT.response.txnStatus != 'CANCEL')
                            {
                                //Salt is passd here for demo purpose only. For practical use keep salt at server side only.
                                var fr = '<form action=\"' + $('#surl').val() + '\" method=\"post\">' +
                                        '<input type=\"hidden\" name=\"key\" value=\"' + BOLT.response.key + '\" />' +
                                        '<input type=\"hidden\" name=\"salt\" value=\"' + $('#salt_'+ids).val() + '\" />' +
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
    </body>
</html>

