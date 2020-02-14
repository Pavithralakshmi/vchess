<?php
session_start();
$user = $_SESSION['user'];
$prefix = '../';
include_once $prefix . '../db.php';
$location = $prefix . "index.php";
if (isset($_SESSION['user'])) {
    
} else {
    header("Location: $location");
    exit;
}
$msg = $cdate = $fname = $email_id = $message= $date = $vdca_no = $year = $id = '';


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
        <title>Virudhunagar District Chess Association  | VDCA -Feedback</title>
        <?php include_once $prefix . 'include/css.php'; ?>
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    </head>

    <body>
        <?php include_once $prefix . 'include/header.php'; ?>
        <div class="pmd-sidebar-overlay"></div>
        <?php include_once $prefix . 'include/menubar.php'; ?>
        <div id="content" class="pmd-content inner-page">
            <div class="container-fluid full-width-container">
                <div class="section col-lg-10 col-lg-offset-1  billinfo sp" style="    width: 72.333333%;">
                      <div class="card-head style-primary" style="background-color: #f3702b;height: 100%; padding: 18px; font-size: 18px;    color: aliceblue; font-weight: 900; text-align: center;">
                                <header class="head">VDCA - Feedback</header>
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
                                    <th>Name</th>
                                    <th>Email_id</th>
                                    <th>Message</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                $sql2 = "SELECT * FROM vdca_feedback  ORDER BY `id` desc";
                                $result2 = mysqli_query($mysqli, $sql2);
                                while ($row2 = mysqli_fetch_assoc($result2)) {
                                    $id = $row2['id'];
                                    $name = $row2['fname'];
                                    $email_id = $row2['email_id'];
                                    $message = $row2['message'];
                                    $date = $row2['date'];
                                    ?>
                                    <tr>                                           
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $name; ?></td>
                                        <td><?php echo $email_id; ?></td>
                                        <td><?php echo $message; ?></td>
                                        <td><?php echo date('d-m-Y', strtotime($date)); ?></td>
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
            <?php include_once $prefix . 'include/js.php'; ?>
    </body>
</html>

