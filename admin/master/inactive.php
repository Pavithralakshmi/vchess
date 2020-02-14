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
$msg = $id = $newfile = $allurl = '';

$title = $desc = $imgupload = '';
if (isset($_GET['inactive'])) {
    $inactive = $_GET['inactive'];
    $sql = "UPDATE `vdca_gallery` SET `active` = '1' where id='$inactive'";
    $result = mysqli_query($mysqli, $sql);
    header("Location:../status/view_gallery.php?msg=3");
}
if (isset($_GET['active'])) {
    $active = $_GET['active'];
    $sql = "UPDATE `vdca_gallery` SET `active` = '0' where id='$active'";
    $result = mysqli_query($mysqli, $sql);
    header("Location:../status/view_gallery.php?msg=3");
}

if (isset($_GET['msg'])) {
    $msg = $_GET['msg'];
}
?>
<!doctype html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Vani Vidyalaya Admin">
        <meta content="width=device-width, initial-scale=1, user-scalable=no" name="viewport">
        <title>Virudhunagar District Chess Association | Gallery</title>
        <?php include_once $prefix . 'include/css.php'; ?>
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    </head>

    <body>
        <?php include_once $prefix . 'include/header.php'; ?>
        <div class="pmd-sidebar-overlay"></div>
        <?php include_once $prefix . 'include/menubar.php'; ?>
        <div id="content" class="pmd-content inner-page" style="margin-top: 70px;">
    
            <section class="row component-section">
                <div class="col-md-12  sp">
                    <div  class="pmd-card pmd-z-depth pmd-card-custom-view">
                        <div class="table-responsive">
                            <table class="table pmd-table table-hover table-striped display responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                    <tr><th colspan="5" style="font-size: 16px; color: red; font-weight: 900;     text-align: center; ">Inactive Gallery Data</th></tr>
                                    <tr>                                            
                                        <th>S.No</th>
                                        <th>Actions</th>
                                        <th>Date Time</th>
                                        <th>Event Title</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    $sql2 = "SELECT * FROM vdca_event WHERE `active` = '1' ORDER BY `id` desc";
                                    $result2 = mysqli_query($mysqli, $sql2);
                                    while ($row2 = mysqli_fetch_assoc($result2)) {
                                        $id = $row2['id'];
                                        $event = $row2['title'];
                                        $edate = $row2['datetime'];
                                        $desc = $row2['description'];
                                        $img = $row2['image'];
                                        $upload = explode(',', $img);
                                        ?>
                                        <tr>                                           
                                            <td><?php echo $i; ?></td>
                                            <td class="pmd-table-row-action">
                                                <a href="view_event.php?active=<?php echo $id; ?>"><button type="button" class="btn btn-icon btn-rounded" style="background:green;" data-toggle="tooltip" data-placement="top" onclick="return confirm('You are going to active?')"  data-original-title="Active now">Active</button></a>
                                            </td>
                                            <td><?php echo date('d-m-Y', strtotime($edate)); ?></td>
                                            <td><?php echo $event; ?></td>
                                            <td><?php echo $desc; ?></td>
                                            <td>
                                                <?php foreach ($upload as $imagename) { ?>
                                                    <img src="<?php echo $imagename; ?>" alt="No Image" height="50px"; width="50px">
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


            <section class="row component-section">
                <div class="col-md-12  sp">
                    <div  class="pmd-card pmd-z-depth pmd-card-custom-view">
                        <div class="table-responsive">
                            <table  class="table pmd-table table-hover table-striped display responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                    <tr><th colspan="5" style="font-size: 16px; color: red; font-weight: 900;     text-align: center; ">Inactive Gallery Data</th></tr>
                                    <tr>                                            
                                        <th>S.No</th>
                                        <th>Actions</th>
                                        <th>Title</th>
                                        <th>Date Time</th>
                                        <th>Image</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    $sql2 = "SELECT * FROM `vdca_gallery` WHERE `active` = '1' ORDER BY `id` asc";
                                    $result2 = mysqli_query($mysqli, $sql2);
                                    while ($row2 = mysqli_fetch_assoc($result2)) {
                                        $id = $row2['id'];
                                        $title = $row2['title'];
                                        $edate = $row2['date'];
                                        $desc = $row2['description'];
                                        $img = $row2['image'];
                                        $upload = explode(',', $img);
                                        ?>
                                        <tr>                                           
                                            <td><?php echo $i; ?></td>
                                            <td class="pmd-table-row-action">
                                                <a href="view_gallery.php?active=<?php echo $id; ?>"><button type="button" class="btn btn-icon btn-rounded" style="background:green;" data-toggle="tooltip" data-placement="top" onclick="return confirm('You are going to active?')"  data-original-title="Active now">Active</button></a>
                                            </td>
                                            <td><?php echo $title; ?></td>
                                            <td><?php echo date('d-m-Y', strtotime($edate)); ?></td>
                                            <td>
                                                <?php foreach ($upload as $imagename) { ?>
                                                    <img src="<?php echo "../master/" . $imagename; ?>" alt="No Image" height="50px"; width="50px">
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

            <section class="row component-section">
                <div class="col-md-12  sp">
                    <div  class="pmd-card pmd-z-depth pmd-card-custom-view">
                        <div class="table-responsive">
                            <table  class="table pmd-table table-hover table-striped display responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                    <tr><th colspan="12" style="font-size: 16px; color: red; font-weight: 900;     text-align: center; ">Inactive Palyer's Database</th></tr>
                                    <tr>                                            
                                        <th>S.No</th>
                                        <th>Actions</th>
                                        <th> Player Name</th>
                                        <th>DOB</th>
                                        <th>Gender</th>
                                        <th>Father's_name</th>
                                        <th>VDCA No</th>
                                        <th> FIDE</th>
                                        <th> City</th>
                                        <th> Rating</th>
                                        <th> AICF</th>
                                        <th> TNSCA</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    $sql2 = "SELECT * FROM vdca_players_db WHERE `active` = '1'  ORDER BY `id` desc";
                                    $result2 = mysqli_query($mysqli, $sql2);
                                    while ($row2 = mysqli_fetch_assoc($result2)) {
                                        $id = $row2['id'];
                                        $name = $row2['name'];
                                        $dob = $row2['dob'];
                                        $fide_id = $row2['fide_id'];
                                        $gender = $row2['gender'];
                                        $father_name = $row2['father_name'];
                                        $vdca_id = $row2['vdca_id'];
                                        $rating = $row2['rating'];
                                        $aicf = $row2['aicf'];
                                        $tnsca = $row2['tnsca'];
                                        $city = $row2['city'];
                                        ?>
                                        <tr>                                           
                                            <td><?php echo $i; ?></td>
                                            <td class="pmd-table-row-action">
                                                <a href="view_playersdb.php?active=<?php echo $id; ?>"><button type="button" class="btn btn-icon btn-rounded" style="background:green;" data-toggle="tooltip" data-placement="top" onclick="return confirm('You are going to active?')"  data-original-title="Active now">Active</button></a>
                                            </td>
                                            <td><?php echo $name; ?></td>
                                            <td><?php echo date('d-m-Y', strtotime($dob)); ?></td>
                                            <td><?php echo $gender; ?></td>
                                            <td><?php echo $father_name; ?></td>
                                            <td><?php echo $vdca_id; ?></td>
                                            <td><?php echo $fide_id; ?></td>
                                            <td><?php echo $city; ?></td>
                                            <td><?php echo $rating; ?></td>
                                            <td><?php echo $aicf; ?></td>
                                            <td><?php echo $tnsca; ?></td>  
                                            <?php
                                            $i++;
                                        }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div> <!-- table card example end -->
                </div>
            </section>
        </div>
        <?php include_once $prefix . 'include/js.php'; ?>

    </body>
</html>
