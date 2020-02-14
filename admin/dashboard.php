<?php
session_start();
$user = $_SESSION['user'];
$prefix = '';
$location = $prefix . "index.php";
if (isset($_SESSION['user'])) {
    
} else {
    header("Location: $location");
    exit;
}
?>
<!doctype html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta content="width=device-width, initial-scale=1, user-scalable=no" name="viewport">
        <title>Virudhunagar District Chess Association  | Dashboard</title>
        <?php include $prefix . 'include/css.php'; ?>
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <style>
            .pmd-card-body{
                color:green;
                font-weight: bold;
                margin-bottom: 4px;
            }
            .material-icons.md-24, .material-icons.pmd-sm {
                font-size: 15px;
                font-weight: 800;
            }
        </style>
    </head>

    <body>
        <?php include_once $prefix . 'include/header.php'; ?>
        <div class="pmd-sidebar-overlay"></div>
        <?php include_once $prefix . 'include/menubar.php'; ?>
        <div id="content" class="pmd-content inner-page">
            <div class="component-box">
                <br>
                <div class="pmd-card-body card-shadow">
                    <div class="row" style="font-size: 18px;">
                        <div class="col-lg-4 col-md-4 col-xs-12"> 
                            <div class="pmd-card pmd-z-depth-1 shadow-demo">
                                <div class="pmd-card-body"><center>Events / News </center></div>
                                <center style="padding: 10px 0;">  <a href="master/events.php"><button type="button" class="btn pmd-ripple-effect btn-warning" style="background: #f3702b;     min-width: unset;  border-radius: 50%;"  title="Add / Edit"><i class="material-icons  pmd-sm">edit</i></button></a>  <a href="../admin/status/view_event.php" style="padding-right: 4px;"><button type="button" class="btn pmd-ripple-effect btn-warning" style="background: green;    min-width: unset;  border-radius: 50%;" title="View Inactive"><i class="fa fa-eye" aria-hidden="true"></i></button></a><a href="../admin/tableexp/eventslist.php"><button type="button" class="btn pmd-ripple-effect btn-warning" style="background: #f3702b;     min-width: unset;  border-radius: 50%;"  title="Export File"> <i class="fa fa-download" aria-hidden="true"></i></button></a></center>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-xs-12"> 
                            <div class="pmd-card pmd-z-depth-1 shadow-demo">
                                <div class="pmd-card-body"><center>Player's Database</center></div>
                                <center style="padding: 10px 0;">  <a href="master/playersdb.php"><button type="button" class="btn pmd-ripple-effect btn-warning" style="background: #f3702b;     min-width: unset;  border-radius: 50%;"  title="Add / Edit"><i class="material-icons  pmd-sm">edit</i></button></a>  <a href="../admin/status/view_playersdb.php" style="padding-right: 4px;"><button type="button" class="btn pmd-ripple-effect btn-warning" style="background: green;    min-width: unset;  border-radius: 50%;" title="View Player's DB"><i class="fa fa-eye" aria-hidden="true"></i></button></a><a href="../admin/tableexp/index.php"><button type="button" class="btn pmd-ripple-effect btn-warning" style="background: #f3702b;     min-width: unset;  border-radius: 50%;"  title="Export File"> <i class="fa fa-download" aria-hidden="true"></i></button></a></center>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-xs-12"> 
                            <div class="pmd-card pmd-z-depth-1 shadow-demo">
                                <div class="pmd-card-body"><center>Rated player's </center></div>
                                <center style="padding: 10px 0;">  <a href="master/ratedplayer.php"><button type="button" class="btn pmd-ripple-effect btn-warning" style="background: #f3702b;     min-width: unset;  border-radius: 50%;"  title="Add / Edit"><i class="material-icons  pmd-sm">edit</i></button></a>  <a href="../admin/status/view_ratedplayer.php" style="padding-right: 4px;"><button type="button" class="btn pmd-ripple-effect btn-warning" style="background: green;    min-width: unset;  border-radius: 50%;" title="View Inactive"><i class="fa fa-eye" aria-hidden="true"></i></button></a><a href="../admin/tableexp/ratedplayerlist.php"><button type="button" class="btn pmd-ripple-effect btn-warning" style="background: #f3702b;     min-width: unset;  border-radius: 50%;"  title="Export File"> <i class="fa fa-download" aria-hidden="true"></i></button></a></center>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="font-size: 18px;">
                        <div class="col-lg-4 col-md-4 col-xs-12"> 
                            <div class="pmd-card pmd-z-depth-1 shadow-demo">
                                <div class="pmd-card-body"><center>Gallery</center></div>
                                <center style="padding: 10px 0;">  <a href="master/gallery.php"><button type="button" class="btn pmd-ripple-effect btn-warning" style="background: #f3702b;     min-width: unset;  border-radius: 50%;"  title="Add / Edit"><i class="material-icons  pmd-sm">edit</i></button></a>  <a href="../admin/status/view_gallery.php" style="padding-right: 4px;"><button type="button" class="btn pmd-ripple-effect btn-warning" style="background: green;    min-width: unset;  border-radius: 50%;" title="View Inactive"><i class="fa fa-eye" aria-hidden="true"></i></button></a></center>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-xs-12"> 
                            <div class="pmd-card pmd-z-depth-1 shadow-demo">
                                <div class="pmd-card-body"><center>Slider Images</center></div>
                                <center style="padding: 10px 0;">  <a href="master/slider.php"><button type="button" class="btn pmd-ripple-effect btn-warning" style="background: #f3702b;     min-width: unset;  border-radius: 50%;"  title="Add / Edit"><i class="material-icons  pmd-sm">edit</i></button></a>  <a href="../admin/status/view_slider.php" style="padding-right: 4px;"><button type="button" class="btn pmd-ripple-effect btn-warning" style="background: green;    min-width: unset;  border-radius: 50%;" title="View Inactive"><i class="fa fa-eye" aria-hidden="true"></i></button></a></center>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-xs-12"> 
                            <div class="pmd-card pmd-z-depth-1 shadow-demo">
                                <div class="pmd-card-body"><center>Download Files </center></div>
                                <center style="padding: 10px 0;">  <a href="master/filesupload.php"><button type="button" class="btn pmd-ripple-effect btn-warning" style="background: #f3702b;     min-width: unset;  border-radius: 50%;"  title="Add / Edit"><i class="material-icons  pmd-sm">edit</i></button></a><a href="../admin/status/view_file.php" style="padding-right: 4px;"><button type="button" class="btn pmd-ripple-effect btn-warning" style="background: green;    min-width: unset;  border-radius: 50%;" title="View Inactive"><i class="fa fa-eye" aria-hidden="true"></i></button></a></center>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="font-size: 18px;">
<!--                        <div class="col-lg-4 col-md-4 col-xs-12"> 
                            <div class="pmd-card pmd-z-depth-1 shadow-demo">
                                <div class="pmd-card-body"><center>Registered Player Details</center></div>
                                <center style="padding: 10px 0;">  <a href="master/registeredplayer.php"><button type="button" class="btn pmd-ripple-effect btn-warning" style="background: green;     min-width: unset;  border-radius: 50%;"  title="View List"><i class="fa fa-eye" aria-hidden="true"></i></button></a><a href="../admin/tableexp/playersdblist.php"><button type="button" class="btn pmd-ripple-effect btn-warning" style="background: #f3702b;     min-width: unset;  border-radius: 50%;"  title="Export File"> <i class="fa fa-download" aria-hidden="true"></i></button></a></center>
                            </div>
                        </div>-->
                        <div class="col-lg-4 col-md-4 col-xs-12"> 
                            <div class="pmd-card pmd-z-depth-1 shadow-demo">
                                <div class="pmd-card-body"><center>Feedback</center></div>
                                <center style="padding: 10px 0;">  <a href="master/feedback.php"><button type="button" class="btn pmd-ripple-effect btn-warning" style="background: green;     min-width: unset;  border-radius: 50%;"  title="View"><i class="fa fa-eye" aria-hidden="true"></i></button></a></center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Scripts Starts -->
    <?php include_once $prefix . 'include/js.php'; ?>
    <!-- Scripts Ends -->
</body>
</html>

