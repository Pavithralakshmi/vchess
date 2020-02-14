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
    $sql = "UPDATE `vdca_files` SET `active` = '1' where id='$inactive'";
    $result = mysqli_query($mysqli, $sql);
    header("Location:../status/view_file.php?msg=3");
}
if (isset($_GET['active'])) {
    $active = $_GET['active'];
    $sql = "UPDATE `vdca_files` SET `active` = '0' where id='$active'";
    $result = mysqli_query($mysqli, $sql);
    header("Location:../master/filesupload.php?msg=3");
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
        <title>Virudhunagar District Chess Association | File</title>
        <?php include_once $prefix . 'include/css.php'; ?>
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    </head>

    <body>
        <?php include_once $prefix . 'include/header.php'; ?>
        <div class="pmd-sidebar-overlay"></div>
        <?php include_once $prefix . 'include/menubar.php'; ?>
        <div id="content" class="pmd-content inner-page">

            <section class="row component-section">
                <div class="col-md-12  sp">
                                  <div class="pmd-card pmd-z-depth" style="margin-top: 49px;">
                            <div class="card-head style-primary" style="background-color: #f3702b;height: 100%; padding: 18px; font-size: 18px;    color: aliceblue; font-weight: 900; text-align: center;">
                                <header class="head"> Inactive Files</header>
                            </div> 
                    <div  class="pmd-card pmd-z-depth pmd-card-custom-view">
                        <div class="table-responsive">
                            <table id="example-checkbox" class="table pmd-table table-hover table-striped display responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                    <tr>                                            
                                        <th>S.No</th>
                                        <th>Actions</th>
                                        <th>File Title</th>
                                        <th>File Update Date</th>
                                        <th>File</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    $sql2 = "SELECT * FROM `vdca_files` WHERE `active` = '1' ORDER BY `id` asc";
                                    $result2 = mysqli_query($mysqli, $sql2);
                                    while ($row2 = mysqli_fetch_assoc($result2)) {
                                        $id = $row2['id'];
                                        $title = $row2['title'];
                                        $edate = $row2['cdate'];
                                        $img = $row2['image'];
                                        $upload = explode(',', $img);
                                        ?>
                                        <tr>                                           
                                            <td><?php echo $i; ?></td>
                                            <td class="pmd-table-row-action">
                                                <a href="view_file.php?active=<?php echo $id; ?>"><button type="button" class="btn btn-icon btn-rounded" style="background:green;" data-toggle="tooltip" data-placement="top" onclick="return confirm('You are going to active?')"  data-original-title="Active now">Active</button></a>
                                            </td>
                                            <td><?php echo $title; ?></td>
                                            <td><?php echo date('d-m-Y', strtotime($edate)); ?></td>
                                            <td>
                                                <?php foreach ($upload as $imagename) { ?>
                                                    <img src="../master/uploads/<?php echo $img; ?>" alt="No Image" height="50px"; width="50px">
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
        </div>
        <?php include_once $prefix . 'include/js.php'; ?>

    </body>
</html>
