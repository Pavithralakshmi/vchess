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

if (isset($_GET['pageno'])) {
    $pageno = $_GET['pageno'];
} else {
    $pageno = 1;
}
$no_of_records_per_page = 10;
$offset = ($pageno - 1) * $no_of_records_per_page;

$total_pages_sql = "SELECT COUNT(*) FROM vdca_players_db";
$result = mysqli_query($mysqli, $total_pages_sql);
$total_rows = mysqli_fetch_array($result)[0];
$total_pages = ceil($total_rows / $no_of_records_per_page);

$sql2 = "SELECT * FROM vdca_players_db LIMIT $offset, $no_of_records_per_page";

$msg = $file_name = $file_name1 = $cdate = $date1 = $date = $name = $dob = $fide_id = $father_name = $city = $email_id = $rating = $vdca_id = $image = $image1 = $year = $tnsca = $institution = $id = $address = $aicf = $city = $rating = $gender = '';
$msg = $cdate = $name = $amount = $amounttt = $mode = $vdca_idredd = $paidby = $dob = $fide_id = $father_name = $vdca_id = $tnsca = $id = $aicf = $city = $rating = $gender = $phone_no = $vdca_id21 = $vdca_idred1 = "";


if (isset($_POST['openmodel'])) {
    $id1 = $_POST['openmodel'];
    ?>
    <table  class="table diagnosis_list" id="datatable31">
        <?php
        $i = 1;
        $sql3 = "SELECT * FROM `vdca_players_db` where `vdca_id` = '$id1' ";
        $result3 = mysqli_query($mysqli, $sql3);
        while ($row3 = mysqli_fetch_assoc($result3)) {
            $id = $row3['id'];
            $name = $row3['name'];
            $dob = $row3['dob'];
            $fide_id = $row3['fide_id'];
            $gender = $row3['gender'];
            $phone_no = $row3['phone_no'];
            $father_name = $row3['father_name'];
//            $vdca_idred = $row3['vdca_id'];
            $rating = $row3['rating'];
            $aicf = $row3['aicf'];
            $tnsca = $row3['tnsca'];
            $address = $row3['address'];
            $city = $row3['city'];
            $image1 = $row3['birth_cf'];
            $image = $row3['photo'];
            $fide_id = $row3['fide_id'];
            $Institution = $row3['Institution'];
            ?> 
            <table>
                <tr><th><h2 class="pmd-textfield" style="color:red">Name    :</h2></th> <td><b style="padding: 1px 10px 2px 6px;    margin: 1px 1px 1px 1px;"><?php echo $name; ?></b></td></tr>
                <tr><th><h2 class="pmd-textfield" style="color:red">DOB    :</h2></th> <td><b style="padding: 1px 10px 2px 6px;    margin: 1px 1px 1px 1px;"><?php echo date('d-m-Y', strtotime($dob)); ?></b></td></tr>
                <tr><th><h2 class="pmd-textfield" style="color:red"> Gender    :</h2> </th> <td><b style="padding: 1px 10px 2px 6px;    margin: 1px 1px 1px 1px;"> <?php echo $gender; ?></b></td></tr>
                <tr><th><h2 class="pmd-textfield" style="color:red"> Father's Name     :</h2> </th> <td><b style="padding: 1px 10px 2px 6px;    margin: 1px 1px 1px 1px;"> <?php echo $father_name; ?></b></td></tr>
                <tr><th><h2 class="pmd-textfield" style="color:red"> Mobile No    :</h2> </th> <td><b style="padding: 1px 10px 2px 6px;    margin: 1px 1px 1px 1px;"> <?php echo $phone_no; ?></b></td></tr>
                <tr><th><h2 class="pmd-textfield" style="color:red"> Address    :</h2> </th> <td><b style="padding: 1px 10px 2px 6px;    margin: 1px 1px 1px 1px;"> <?php echo $address; ?></b></td></tr>
                <tr><th><h2 class="pmd-textfield" style="color:red"> City    :</h2> </th> <td><b style="padding: 1px 10px 2px 6px;    margin: 1px 1px 1px 1px;"> <?php echo $city; ?></b></td></tr>
                <tr><th><h2 class="pmd-textfield" style="color:red"> VDCA ID    :</h2> </th> <td><b style="padding: 1px 10px 2px 6px;    margin: 1px 1px 1px 1px;"> <?php echo $id1; ?></b></td></tr>
                <tr><th><h2 class="pmd-textfield" style="color:red"> FIDE    :</h2> </th> <td><b style="padding: 1px 10px 2px 6px;    margin: 1px 1px 1px 1px;"> <?php echo $fide_id; ?></b></td></tr>
                <tr><th><h2 class="pmd-textfield" style="color:red"> Rating    :</h2> </th> <td><b style="padding: 1px 10px 2px 6px;    margin: 1px 1px 1px 1px;"> <?php echo $rating; ?></b></td></tr>
                <tr><th><h2 class="pmd-textfield" style="color:red"> AICF    :</h2> </th> <td><b style="padding: 1px 10px 2px 6px;    margin: 1px 1px 1px 1px;"> <?php echo $aicf; ?></b></td></tr>
                <tr><th><h2 class="pmd-textfield" style="color:red"> TNSCA    :</h2> </th> <td><b style="padding: 1px 10px 2px 6px;    margin: 1px 1px 1px 1px;"> <?php echo $tnsca; ?></b></td></tr>
                <tr><th><h2 class="pmd-textfield" style="color:red"> Birth Certificate    :</h2> </th> <td><img width="100px" height="100px" class="img-responsive" src="<?php echo $image1; ?>" style="padding: 1px 10px 2px 6px;    margin: 1px 1px 1px 1px;"></td></tr>
                <tr><th><h2 class="pmd-textfield" style="color:red"> Photo    :</h2> </th> <td><img width="100px" height="100px" class="img-responsive" src="<?php echo $image; ?>" style="padding: 1px 10px 2px 6px;    margin: 1px 1px 1px 1px;"></td></tr>
                <tr><th><h2 class="pmd-textfield" style="color:red"> Status    :</h2> </th>
                    <td><?php
                        $j = 1;
                        $sql34 = "select `vp`.*,`vdb`.phone_no from `vdca_payment` `vp` cross join vdca_players_db `vdb` on `vp`.`pid`=`vdb`.`vdca_id` where `vdb`.`vdca_id`='$id1' ORDER by id DESC limit 1 ";
//                                                       ECHO $sql34;exit;
                        $result22 = mysqli_query($mysqli, $sql34);
                        if (mysqli_num_rows($result22)) {
                            while ($row278 = mysqli_fetch_assoc($result22)) {
                                $phone_no = $row278['phone_no'];
                                $payment_status = $row278['txnStatus'];
                                if ($payment_status == "SUCCESS") {
                                    ?>
                                    <span style="font-weight: 900; font-size: 18px; color: #80c337;">ACTIVE</span>
                                <?php } else { ?>
                                    <span style="font-weight: 900; font-size: 18px; color: red;">Inactive</span>
                                <?php } ?>
                                <?php
                                $j++;
                            }
                            ?>
                        <?php } else {
                            ?>
                            <span style="font-weight: 900; font-size: 18px; color: red;">Inactive</span>

                        <?php } ?>
                    </td>
                </tr>
            </table>
            <?php
        }
        $i++;
        exit;
    }

    if (isset($_POST['save'])) {
        $cdate = date('Y-m-d');
        $vdca_iddd = $_POST['vdca_iddd'];
        $paidby = $_POST['paidby'];
        $mode = $_POST['mode'];
        $amounttt = $_POST['amounttt'];
        $check = "select * from `vdca_payment`  WHERE `pid`= '$vdca_id' AND year(`cdate`)= year('$cdate')  ";
        $res = mysqli_query($mysqli, $check);
        if (mysqli_num_rows($res)) {
            $sql6 = "UPDATE `vdca_payment` SET  `pid`='$vdca_iddd',`name_on_card`='$paidby',`mode`='$mode',`amount`='$amounttt',`cby`='$user', mby = concat(mby, '|', '$user' ), cdate = '$datetime',cip = '$_SERVER[REMOTE_ADDR]' WHERE `pid`= '$vdca_id' AND year(`cdate`)!= year('$cdate') ";
        } else {
            $sql6 = "INSERT INTO `vdca_payment`(`pid`, `name_on_card`,`mode`,`amount`,`txnStatus`,`cip`, `cdate`, `cby`)VALUES('$vdca_iddd','$paidby','$mode','$amounttt','SUCCESS','$_SERVER[REMOTE_ADDR]','$datetime','$user')";
        }
        $res6 = mysqli_query($mysqli, $sql6);
        header("Location: view_playersdb.php?msg=5");
//    exit;
    }

    if (isset($_POST['search_value'])) {
        $search_value = $_POST['search_value'];
        $sql = "SELECT * FROM `vdca_players_db`  where name like '%$search_value%'  ";
        $result = mysqli_query($mysqli, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
            }
        } else {
            echo "No Data";
        }
        ?>
        <table class="table dataTable " id="datatable1" >
            <tr>
                <th>S.No</th>
                <th class="noExl">Actions</th>
                <th> Player Name</th>
                <th>DOB</th>
                <th>Mobile_no</th>
                <th>Email_id</th>
                <th>Gender</th>
                <th>Father Name</th>
                <th>Photo</th>
                <th>VDCA Id</th>
                <th>Status</th>  
                <th>Payment</th>  
            </tr>
            <tr><?php
                $sqlc2 = "SELECT * FROM `vdca_players_db`  where name like '%$search_value%' ORDER BY `id` desc LIMIT $offset, $no_of_records_per_page;";
                $result1 = mysqli_query($mysqli, $sqlc2);
                $i = 1;
                while ($row1 = mysqli_fetch_assoc($result1)) {
                    $fide_id = $row1['fide_id'];
                    $vdca_id = $row1['vdca_id'];
                    $name = $row1['name'];
                    $gender = $row1['gender'];
                    $dob = $row1['dob'];
                    $mobile_no = $row1['phone_no'];
                    $email_id = $row1['email_id'];
                    $father_name = $row1['father_name'];
                    $photo = $row1['photo'];
                    $photo = explode(',', $photo);
                    $address = $row1['address'];
                    $city = $row1['city'];
                    $institution = $row1['Institution'];
                    $rating = $row1['rating'];
                    $aicf = $row1['aicf'];
                    $tnsca = $row1['tnsca'];
                    ?>
                <tr>                                           
                    <td><?php echo $i; ?></td>
                    <td>
                        <button onclick="openmodel('<?php echo $vdca_id; ?>')"  id="modal" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-sm" type="button" title="View"><i class="material-icons md-dark pmd-sm">remove_red_eye</i></button>
                    </td>
                    <td><?php echo $name; ?></td>
                    <td><?php echo date('d/m/Y', strtotime($dob)); ?></td>
                    <td><?php echo $mobile_no; ?></td>
                    <td><?php echo $email_id; ?></td>
                    <td><?php echo $gender; ?></td>
                    <td><?php echo $father_name; ?></td>
                    <td><?php foreach ($photo as $imagename) { ?>
                            <img src="<?php echo $imagename; ?>" alt="No Image" height="50px"; width="50px">
                        <?php } ?></td>
                    <td><?php echo $vdca_id; ?></td>
                    <td><?php
                        $j = 1;
                        $sql34 = "select `vp`.*,`vdb`.phone_no from `vdca_payment` `vp` cross join vdca_players_db `vdb` on `vp`.`pid`=`vdb`.`vdca_id` where `vdb`.`vdca_id`='$vdca_id' ORDER by id DESC limit 1 ";
//                                                       ECHO $sql34;exit;
                        $result22 = mysqli_query($mysqli, $sql34);
                        if (mysqli_num_rows($result22)) {
                            while ($row278 = mysqli_fetch_assoc($result22)) {
                                $phone_no = $row278['phone_no'];
                                $payment_status = $row278['txnStatus'];
                                if ($payment_status == "SUCCESS") {
                                    ?>
                                    <span style="font-weight: 900; font-size: 18px; color: #80c337;">ACTIVE</span>
                                <?php } else { ?>
                                    <span style="font-weight: 900; font-size: 18px; color: red;">Inactive</span>
                                <?php } ?>
                                <?php
                                $j++;
                            }
                            ?>
                        <?php } else {
                            ?>
                            <span style="font-weight: 900; font-size: 18px; color: red;">Inactive</span>

                        <?php } ?>
                    </td>
                    <td> 
                        <?php
                        $j = 1;
                        $sql34 = "select `vp`.*,`vdb`.phone_no from `vdca_payment` `vp` cross join vdca_players_db `vdb` on `vp`.`pid`=`vdb`.`vdca_id` where `vdb`.`phone_no`='$mobile_no' ORDER by id DESC limit 1 ";
//                                                        echo $sql34;exit;
                        $result22 = mysqli_query($mysqli, $sql34);
                        if (mysqli_num_rows($result22)) {
                            while ($row2 = mysqli_fetch_assoc($result22)) {
                                $phone_no = $row2['phone_no'];
                                $payment_status = $row2['txnStatus'];
                                if ($payment_status == "SUCCESS") {
                                    ?>
                                    <span style="font-weight: 900; font-size: 18px; color: #80c337;"> </span>
                                <?php } else { ?>
                                <?php } ?>
                                <?php
                                $j++;
                            }
                            ?>
                        <?php } else {
                            ?>
                            <button type="button"data-target="#cashpay<?php echo $row2['id']; ?>" data-toggle="modal"  title="Cash Pay" style="background-color: #4ede81;border-color: aquamarine;width: 165px;"class=" btn-danger input-field">Pay Cash</button>
                            <button type="button" onmouseover="create_hase_key('<?php echo $id; ?>')"  style="background-color:#2e82ff;border-color: cadetblue;width: 165px;"class=" btn-danger input-field"  value="Pay" onclick="launchBOLT('<?php echo $id; ?>');"  >Pay Online</button>
                            <input type="hidden"  id="udf5_<?php echo $id; ?>" name="udf5" value="<?php echo $id; ?>"  hidden=""/>
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
                        <?php } ?>
                    </td>
                </tr>
                <?php
                $i++;
            }
            ?>
        </table>
        <?php
        exit;
    }
    ?>
    <!doctype html>
    <html lang="">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="description" content="Vani Vidyalaya Admin">
            <meta content="width=device-width, initial-scale=1, user-scalable=no" name="viewport">
            <title>Virudhunagar District Chess Association  | Player's Database</title>
            <?php include_once $prefix . 'include/css.php'; ?>
            <script src='https://kit.fontawesome.com/a076d05399.js'></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
            <script id="bolt" src="https://sboxcheckout-static.citruspay.com/bolt/run/bolt.min.js" bolt-
            color="F37029" bolt-logo="http://boltiswatching.com/wp-content/uploads/2015/09/Bolt-Logo-e14421724859591.png"></script>
            <style>
                .pagination a.active {
                    background-color: #4CAF50;
                    color: white;
                    border-radius: 5px;
                }

                .pagination a:hover:not(.active) {
                    background-color: #ddd;
                    border-radius: 5px;
                }
                .pagination {
                    margin: 20px 34px;
                    float: left;
                }

                .search-container {
                    float: right;
                }

                .topnav input[type=text] {
                    padding: 6px;
                    margin-top: 8px;
                    font-size: 17px;
                    border: none;
                }

                .topnav .search-container button {
                    float: right;
                    padding: 6px 10px;
                    margin-top: 8px;
                    margin-right: 16px;
                    background: #ddd;
                    font-size: 17px;
                    border: none;
                    cursor: pointer;
                }

                .topnav .search-container button:hover {
                    background: #ccc;
                }

                @media screen and (max-width: 600px) {
                    .topnav .search-container {
                        float: none;
                    }
                    .topnav a, .topnav input[type=text], .topnav .search-container button {
                        float: none;
                        display: block;
                        text-align: left;
                        width: 100%;
                        margin: 0;
                        padding: 14px;
                    }
                    .topnav input[type=text] {
                        border: 1px solid #ccc;  
                    }
                }
            </style>
        </head>
        <body>
            <?php include_once $prefix . 'include/header.php'; ?>
            <div class="pmd-sidebar-overlay"></div>
            <?php include_once $prefix . 'include/menubar.php'; ?>
            <div id="content" class="pmd-content inner-page">
                <div class="container-fluid full-width-container">
                    <div class="section col-md-12  billinfo sp">
                        <div class="pmd-card pmd-z-depth" style="margin-top: 35px;">
                            <div class="card-head style-primary" style="background-color: #f3702b;height: 100%; padding: 18px; font-size: 18px;    color: aliceblue; font-weight: 900; text-align: center;">
                                <header class="head">Player's Database</header>
                            </div> 
                            <div class="pmd-card-body">
                                <div  class="pmd-card pmd-z-depth pmd-card-custom-view">
                                    <div class="table-responsive">
                                        <div class="topnav">
                                            <ul class="pagination" style="display: inline-block;">
                                                <li class="<?php
                                                if ($pageno <= 1) {
                                                    echo 'disabled';
                                                }
                                                ?>">
                                                    <a href="<?php
                                                    if ($pageno <= 1) {
                                                        echo '#';
                                                    } else {
                                                        echo "?pageno=" . ($pageno - 1);
                                                    }
                                                    ?>">Prev</a>
                                                </li>
                                                <?php for ($i = max(1, $pageno - 5); $i <= min($pageno + 5, $total_pages); $i++) { ?>
                                                    <li class="">
                                                        <a href="<?php
                                                        if ($pageno < 1) {
                                                            echo '#';
                                                        } else {
                                                            echo "?pageno=" . ($i);
                                                        }
                                                        ?>"  class="<?php
                                                           if ($pageno == $i) {
                                                               echo 'active';
                                                           }
                                                           ?>"><?php echo $i ?></a>
                                                    </li>
                                                <?php } ?> 
                                                <li class="<?php
                                                if ($pageno >= $total_pages) {
                                                    echo 'disabled';
                                                }
                                                ?>">
                                                    <a href="<?php
                                                    if ($pageno >= $total_pages) {
                                                        echo '#';
                                                    } else {
                                                        echo "?pageno=" . ($pageno + 1);
                                                    }
                                                    ?>">Next</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="topnav">
                                            <div class="search-container">
                                                <input type="text" placeholder="Search Name Here.." name="search" id="name_search" >
                                                <button type="button"  id="search_id" onclick="search_value()"><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                        <table id="tablechangedate"  class="table pmd-table table-hover table-striped display responsive nowrap">
                                            <thead>
                                                <tr>                        
                                                    <th>S.No</th>
                                                    <th class="noExl">Actions</th>
                                                    <th> Player Name</th>
                                                    <th>DOB</th>
                                                    <th>Mobile no</th>
                                                    <th>Email id</th>
                                                    <th>Gender</th>
                                                    <th>Father Name</th>
                                                    <th>Photo</th>
                                                    <th>VDCA Id</th>
                                                    <th>Status</th>  
                                                    <th>Payment</th>  
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $i = 1;
                                                $sql2 = "SELECT * FROM vdca_players_db  ORDER BY `id` desc LIMIT $offset, $no_of_records_per_page;";
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
                                                    $photo = explode(',', $photo);
                                                    $address = $row2['address'];
                                                    $city = $row2['city'];
                                                    $institution = $row2['Institution'];
                                                    $rating = $row2['rating'];
                                                    $aicf = $row2['aicf'];
                                                    $tnsca = $row2['tnsca'];
                                                    ?>
                                                    <tr>                                           
                                                        <td><?php echo $i; ?></td>
                                                        <td>
                                                            <button onclick="openmodel('<?php echo $vdca_id; ?>')"  id="modal" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-sm" type="button" title="View"><i class="material-icons md-dark pmd-sm">remove_red_eye</i></button>

                                                            <!--<button data-target="#large-dialog<?php // echo $row2['id'];  ?>" data-toggle="modal" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-sm" type="button" title="View"><i class="material-icons md-dark pmd-sm">remove_red_eye</i></button>-->
                                                        </td>
                                                        <td><?php echo $name; ?></td>
                                                        <td><?php echo date('d/m/Y', strtotime($dob)); ?></td>
                                                        <td><?php echo $mobile_no; ?></td>
                                                        <td><?php echo $email_id; ?></td>
                                                        <td><?php echo $gender; ?></td>
                                                        <td><?php echo $father_name; ?></td>
                                                        <td><?php foreach ($photo as $imagename) { ?>
                                                                <img src="<?php echo $imagename; ?>" alt="No Image" height="50px"; width="50px">
                                                            <?php } ?></td>
                                                        <td><?php echo $vdca_id; ?></td>
                                                        <td><?php
                                                            $j = 1;
                                                            $sql34 = "select `vp`.*,`vdb`.phone_no from `vdca_payment` `vp` cross join vdca_players_db `vdb` on `vp`.`pid`=`vdb`.`vdca_id` where `vdb`.`vdca_id`='$vdca_id' ORDER by id DESC limit 1 ";
//                                                       ECHO $sql34;exit;
                                                            $result22 = mysqli_query($mysqli, $sql34);
                                                            if (mysqli_num_rows($result22)) {
                                                                while ($row278 = mysqli_fetch_assoc($result22)) {
                                                                    $phone_no = $row278['phone_no'];
                                                                    $payment_status = $row278['txnStatus'];
                                                                    if ($payment_status == "SUCCESS") {
                                                                        ?>
                                                                        <span style="font-weight: 900; font-size: 18px; color: #80c337;">ACTIVE</span>
                                                                    <?php } else { ?>
                                                                        <span style="font-weight: 900; font-size: 18px; color: red;">Inactive</span>
                                                                    <?php } ?>
                                                                    <?php
                                                                    $j++;
                                                                }
                                                                ?>
                                                            <?php } else {
                                                                ?>
                                                                <span style="font-weight: 900; font-size: 18px; color: red;">Inactive</span>

                                                            <?php } ?>
                                                        </td>
                                                        <td> 
                                                            <?php
                                                            $j = 1;
                                                            $sql34 = "select `vp`.*,`vdb`.phone_no from `vdca_payment` `vp` cross join vdca_players_db `vdb` on `vp`.`pid`=`vdb`.`vdca_id` where `vdb`.`phone_no`='$mobile_no' ORDER by id DESC limit 1 ";
//                                                        echo $sql34;exit;
                                                            $result22 = mysqli_query($mysqli, $sql34);
                                                            if (mysqli_num_rows($result22)) {
                                                                while ($row2 = mysqli_fetch_assoc($result22)) {
                                                                    $phone_no = $row2['phone_no'];
                                                                    $payment_status = $row2['txnStatus'];
                                                                    if ($payment_status == "SUCCESS") {
                                                                        ?>
                                                                        <span style="font-weight: 900; font-size: 18px; color: #80c337;"> </span>
                                                                    <?php } else { ?>
                                                                    <?php } ?>
                                                                    <?php
                                                                    $j++;
                                                                }
                                                                ?>
                                                            <?php } else {
                                                                ?>
                                                                <button type="button"data-target="#cashpay<?php echo $row2['id']; ?>" data-toggle="modal"  title="Cash Pay" style="background-color: #4ede81;border-color: aquamarine;width: 165px;"class=" btn-danger input-field">Pay Cash</button>
                                                                <button type="button" onmouseover="create_hase_key('<?php echo $id; ?>')"  style="background-color:#2e82ff;border-color: cadetblue;width: 165px;"class=" btn-danger input-field"  value="Pay" onclick="launchBOLT('<?php echo $id; ?>');"  >Pay Online</button>
                                                                <input type="hidden"  id="udf5_<?php echo $id; ?>" name="udf5" value="<?php echo $id; ?>"  hidden=""/>
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
                        </div>
                    </div>
                </div>
            </div>

            <?php
            $sql3 = "SELECT * FROM `vdca_players_db`";
            $result3 = mysqli_query($mysqli, $sql3);
            while ($row3 = mysqli_fetch_assoc($result3)) {
                $phone_no = $row3['phone_no'];
                $email_id = $row3['email_id'];
                $vdca_idred = $row3['vdca_id'];
                ?>
                <form id="validationForm" action="" method="post">
                    <div tabindex="-1" class="modal fade" id="cashpay<?php echo $row3["id"]; ?>" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog modal-md">
                            <div class="modal-content">
                                <div class="modal-header" style="border: 1px solid #ccc; padding-bottom: 8px;">
                                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>                          
                                    <div class="media-body media-middle">
                                        <center><h3 class="pmd-card-title-text" style="    color: #2380c1;    font-weight: 600;">Pay Fees on Cash</h3> </center>
                                    </div>
                                </div>                   
                                <div class="modal-body"> 
                                    <div class="group-fields clearfix row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                <label for="regular1" class="control-label">
                                                    Phone No</label>
                                                <input type="text" name="phone_no" id="datetimepicker-default"  oninput="this.value=this.value.replace(/[^0-9]/g,'');javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10"class="form-control" required tabindex="1" value="<?php echo $phone_no; ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                <label for="regular1" class="control-label">
                                                    Email Id</label>
                                                <input type="email" name="email_id" class="form-control" required tabindex="1" value="<?php echo $email_id; ?>" <?php
                                                if ($email_id) {
                                                    echo "readonly";
                                                }
                                                ?>>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="group-fields clearfix row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                <label for="regular1" class="control-label">
                                                    VDCA Id</label>
                                                <input type="text" name="vdca_iddd" class="form-control" required tabindex="1" value="<?php echo $vdca_idred; ?>" <?php
                                                if ($vdca_idred) {
                                                    echo "readonly";
                                                }
                                                ?>>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                <label for="regular1" class="control-label">
                                                    Payment Mode</label>
                                                <label class="radio-inline pmd-radio">
                                                    <input type="radio" name="mode" readonly id="inlineRadio1" value="cash" checked >
                                                    <span for="inlineRadio1">Cash</span> </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="group-fields clearfix row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                <label for="regular1" class="control-label">
                                                    Paid By<sup style="color:red;font-size: 16px;">*</sup></label>
                                                <input type="text" name="paidby" class="form-control" required tabindex="1" value="<?php echo $paidby; ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                <label for="regular1" class="control-label">
                                                    Amount<sup style="color:red;font-size: 16px;">*</sup></label>
                                                <input type="text" name="amounttt" class="form-control" required tabindex="1" value="<?php echo $amounttt; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="reset" <?php if (!$id) { ?> onClick="window.location.reload()" <?php } else { ?> onclick="javascript:window.location = 'view_playersdb.php';" <?php } ?> tabindex="10"  class="btn ink-reaction btn-raised btn-warning" style="margin-top: 4px;    margin-bottom: 0px;    float: left;"name="cancel"><?php
                                        if (!$id) {
                                            echo "Cancel";
                                        } else {
                                            echo "Reset";
                                        }
                                        ?></button>
                                    <button type="submit" tabindex="9" id="btnns" class="btn ink-reaction btn-raised btn-success" name="save" style="margin-top: 4px;    margin-bottom: 0px;    float: right;">Save</button>
                                </div>   
                                <!--<button aria-hidden="true" data-dismiss="modal" class="btn pmd-ripple-effect btn-info" type="button" style="float: right; top:-25px;">close</button>-->                                  
                            </div>
                        </div>
                    </div>
                </form>
            <?php } ?>
            <div class="modal fade" id="mymodal" role="dialog" >
                <div class="modal-dialog modal-lg" style="max-width:40%;">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <!--<h2 class="modal-title">Player's DB</h2>-->
                        </div>
                        <div class="modal-body" id="openmodel1">

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <?php include_once $prefix . 'include/js.php'; ?>
        </body>
        <script type="text/javascript">
            function search_value() {
                getdata();
            }
            function getdata() {
                var search_value = $("#name_search").val();
                $("#tablechangedate").html("");
                $.post("view_playersdb.php", {search_value: search_value}, function (data, status) {
    //                alert(data + status);
                    $("#tablechangedate").html(data);
                    $('#datatable1').DataTable({
                    });
                })
            }

            function create_hase_key(ids) {
                $.ajax({
                    url: '../../pay/index.php',
                    type: 'post',
                    data: JSON.stringify({
                        key: $('#key_' + ids).val(),
                        salt: $('#salt_' + ids).val(),
                        txnid: $('#txnid_' + ids).val(),
                        amount: $('#amount_' + ids).val(),
                        pinfo: $('#pinfo_' + ids).val(),
                        fname: $('#fname_' + ids).val(),
                        email: $('#email_' + ids).val(),
                        mobile: $('#mobile_' + ids).val(),
                        udf5: $('#udf5_' + ids).val(),
                    }),
                    contentType: "application/json",
                    dataType: 'json',
                    success: function (json, status) {
                        console.log(json);
                        if (json['error']) {
                            $('#alertinfo').html('<i class="fa fa-info-circle"></i>' + json['error']);
                        } else if (json['success']) {
                            $('#hash_' + ids).val(json['success']);
                        }
                    }
                });
            }
            function launchBOLT(ids)
            {
                bolt.launch({
                    key: $('#key_' + ids).val(),
                    txnid: $('#txnid_' + ids).val(),
                    hash: $('#hash_' + ids).val(),
                    amount: $('#amount_' + ids).val(),
                    firstname: $('#fname_' + ids).val(),
                    email: $('#email_' + ids).val(),
                    phone: $('#mobile_' + ids).val(),
                    productinfo: $('#pinfo_' + ids).val(),
                    udf5: $('#udf5_' + ids).val(),
                    surl: $('#surl_' + ids).val(),
                    furl: $('#surl_' + ids).val(),
                    mode: 'dropout'
                }, {responseHandler: function (BOLT) {
                        console.log(BOLT.response.txnStatus);
                        if (BOLT.response.txnStatus != 'CANCEL')
                        {
                            //Salt is passd here for demo purpose only. For practical use keep salt at server side only.
                            var fr = '<form action=\"' + $('#surl').val() + '\" method=\"post\">' +
                                    '<input type=\"hidden\" name=\"key\" value=\"' + BOLT.response.key + '\" />' +
                                    '<input type=\"hidden\" name=\"salt\" value=\"' + $('#salt_' + ids).val() + '\" />' +
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
        <script>
            function openmodel(vdca_id) {
                $.post("view_playersdb.php", {openmodel: vdca_id}, function (data) {
                    console.log(data);
                    $("#mymodal").modal("show");
                    $('#openmodel1').html(data);
                });
            }
        </script>
            <script>
<?php if ($msg == '2') { ?>
            Command: toastr["success"]("This Player Details added sucesssfully", "Sucesss")
<?php } elseif ($msg == '1') {
    ?>
            Command: toastr["error"]("This Player  already exist", "Error")
<?php } elseif ($msg == '3') { ?>
            Command: toastr["success"]("Player Details Updated Sucesssfully", "Sucesss")
<?php } elseif ($msg == '4') { ?>
            Command: toastr["success"]("This Players Record Deleted Sucesssfully", "Sucesss")
<?php } elseif ($msg == '5') { ?>
            Command: toastr["success"]("This Players Fees Sucesssfully Paid", "Sucesss")
<?php } ?>

    </script>
    </html>

