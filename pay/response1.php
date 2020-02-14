<?php
include_once '../db.php';
include_once 'config.php';
$postdata = $_POST;
$msg = '';
if (isset($postdata ['key'])) {
    $key = $postdata['key'];
    $salt = MERCHANT_SALT;
    $txnid = $postdata['txnid'];
    $amount = $postdata['amount'];
    $firstname = $postdata['firstname'];
    $email = $postdata['email'];
    $udf5 = $postdata['udf5']; // VDCA id
    $mihpayid = $postdata['mihpayid'];
    $status = $postdata['status'];
    $productInfo = $postdata['productinfo'];
    $resphash = $postdata['hash'];
    //Calculate response hash to verify	
    $keyString = $key . '|' . $txnid . '|' . $amount . '|' . $productInfo . '|' . $firstname . '|' . $email . '|||||' . $udf5 . '|||||';
    $keyArray = explode("|", $keyString);
    $reverseKeyArray = array_reverse($keyArray);
    $reverseKeyString = implode("|", $reverseKeyArray);
    $CalcHashString = strtolower(hash('sha512', $salt . '|' . $status . '|' . $reverseKeyString));
    $mode = $postdata['mode'];
    $bankcode = $postdata['bankcode'];
    $txnid = $postdata['txnid'];
    $bank_ref_num = $postdata['bank_ref_num'];
    $encryptedPaymentId = $postdata['bank_ref_num'];
    $payuMoneyId = $postdata['payuMoneyId'];
    $cardnum = $postdata['cardnum'];
    $name_on_card = $postdata['name_on_card'];
    $txnStatus = $postdata['txnStatus'];
    $txnMessage = $postdata['txnMessage'];
    $phone = $postdata['phone'];
    if ($status == 'success' && $resphash == $CalcHashString) {
        $msg = "Transaction Successful ...";
        $sql3 = " UPDATE `vdca_players_db` SET `lapsed`='$datetime' where `vdca_id`='$udf5'";
         $resl = mysqli_query($mysqli, $sql3);
        $sql = "insert `vdca_payment` SET `pid`='$udf5' , `amount`='$amount', `mode`='$mode', `bankcode`='$bankcode', `txnid`='$txnid', `bank_ref_num`='$bank_ref_num', `encrypted_paymentId`='$encryptedPaymentId' , `payumoneyId`='$payuMoneyId', `cardnum`='$cardnum', `name_on_card`='$name_on_card', `txnStatus`='$txnStatus', `txnMessage`='$txnMessage', `cdate`='$datetime', `cip`='$_SERVER[REMOTE_ADDR]' ";
        $resl = mysqli_query($mysqli, $sql);
    } else {
        //tampered or failed
        $msg = "Payment failed for Hasn not verified...";
    }
} else
    exit(0);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>VDCA</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    </head>
    <style type="text/css">
        .main {
            margin-left:30px;
            font-family:Verdana, Geneva, sans-serif, serif;
        }
        .text {

            width:180px;
        }
        .dv {
            margin-bottom:5px;
        }
        @media print {
            body .buto {
                visibility: hidden;
            }
            #section-to-print, #section-to-print * {
                visibility: visible;
            }
            #section-to-print {
                position: absolute;
                left: 0;
                top: 0;
            }
        }
    </style>
    <body>
        <center> <div class="main">
                <div style="padding:45px;">
                    <img src="images/logo.png" />
                </div>
                <div>
                    <h3 style="color: #299654; font-weight: bolder;font-size: 30px;"><?php echo $msg; ?></h3>
                </div>
                <table class="table table-condensed" style="width:50%">
                    <thead>
                        <tr>
                            <th>TXN Status</th>
                            <td><?php echo $txnStatus; ?></td>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>TXNID</th>
                            <td><?php echo $txnid; ?></td>
                        </tr>
                        <tr>
                            <th>Bank Ref Num</th>
                            <td><?php echo $bank_ref_num; ?></td>
                        </tr>
                        <tr>
                            <th>Amount</th>
                            <td><?php echo $amount; ?></td>
                        </tr>
                        <tr>
                            <th>VDCA ID</th>
                            <td><?php echo $udf5; ?></td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td><?php echo $firstname; ?></td>
                        </tr>
                        <tr>
                            <th>Email ID</th>
                            <td><?php echo $email; ?></td>
                        </tr>
                        <tr>
                            <th>Mobile Number</th>
                            <td><?php echo $phone; ?></td>
                        </tr>
                        <tr>
                            <th>Transaction Status</th>
                            <td><?php echo $status; ?></td>
                        </tr>
                    </tbody>
                </table>
                <!--                
                                <div class="dv">
                                    <span class="text"><label>TXN Status:</label></span>
                                    <span><?php // echo $txnStatus;   ?></span>    
                                </div>
                                <div class="dv">
                                    <span class="text"><label>TXNID:</label></span>
                                    <span><?php // echo $txnid;   ?></span>    
                                </div>
                                <div class="dv">
                                    <span class="text"><label>Bank Ref Num:</label></span>
                                    <span><?php // echo $bank_ref_num;   ?></span>    
                                </div>
                                <div class="dv">
                                    <span class="text"><label>Amount:</label></span>
                                    <span><?php echo $amount; ?></span>    
                                </div>
                
                                <div class="dv">
                                    <span class="text"><label>VDCA ID:</label></span>
                                    <span><?php // echo $udf5;   ?></span>
                                </div>
                
                                <div class="dv">
                                    <span class="text"><label>First Name:</label></span>
                                    <span><?php // echo $firstname;   ?></span>
                                </div>
                
                                <div class="dv">
                                    <span class="text"><label>Email ID:</label></span>
                                    <span><?php // echo $email;   ?></span>
                                </div>
                
                                <div class="dv">
                                    <span class="text"><label>Mobile Number :</label></span>
                                    <span><?php // echo $phone;   ?></span>
                                </div>
                                <div class="dv">
                                    <span class="text"><label>Transaction Status:</label></span>
                                    <span><?php // echo $status;   ?></span>
                                </div>
                
                                <div class="dv">
                                    <span class="text"><label>Message:</label></span>
                                    <span><?php // echo $msg;   ?></span>
                                </div>-->
            </div>
            <!--<a href="../viewplayer.php" >Home</a>-->
            <div class="row buto">
                <div style="padding-top: 53px; float:left;    padding-left: 345px;"> 
                    <a href="../admin/dashboard.php"  style="width: 187px;color: white;">
                        <button style="background: #f3702b; /* color: white; */width: 95px; height: 30px;font-size: 15px;font-weight: 900;">
                            Home
                        </button></a>
                </div>
                <div style="padding-top: 53px;float:right;    padding-right: 345px;"> 
                    <button style="background: #f3702b;color: white;width: 95px; height: 30px;font-size: 15px;font-weight: 900;" onclick="myFunction()">Print</button>
                </div>
            </div>
        </center>

    </body>
    <script>
        function myFunction() {
            window.print();
        }
    </script>
</html>
