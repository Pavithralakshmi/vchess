
<?php
session_start();
$user = $_SESSION['user'];
$prefix = '../';
include_once $prefix . '../db.php';
$location = $prefix . "filesupload.php";
if (isset($_SESSION['user'])) {
    
} else {
    header("Location: $location");
    exit;
}
$msg = $id = $newfile = $allurl = '';

$current_url = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['SERVER_NAME'] . '/' . 'admin/' . 'master/';

if (isset($_GET['msg'])) {
    $msg = $_GET['msg'];
}
?>
<?php
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
    header("Location:../status/view_file.php?msg=3");
}

if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];
    $sql = "DELETE  from `vdca_files` where id='$id' ";
    $result = mysqli_query($mysqli, $sql);
    header("Location: filesupload.php?msg=4");
}
//check if form is submitted
if (isset($_POST['submit'])) {
    $filename = $_FILES['file1']['name'];

    //upload file
    if ($filename != '') {
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        $allowed = ['pdf', 'pdf', 'txt', 'doc', 'docx', 'png', 'jpg', 'jpeg', 'gif'];

        //check if file type is valid
        if (in_array($ext, $allowed)) {
            // get last record id
            $sql45 = 'select max(id) as id from vdca_files';
            $result = mysqli_query($mysqli, $sql45);
            if (count($result) > 0) {
                $row = mysqli_fetch_array($result);
                $filename = ($row['id'] + 1) . '-' . $filename;
            } else
                $filename = '1' . '-' . $filename;

            //set target directory
            $path = 'uploads/';

            $created = @date('Y-m-d');
            move_uploaded_file($_FILES['file1']['tmp_name'], ($path . $filename));
            $title = $_POST['etitle'];
            $eevdate = date('Y-m-d');
//            $eevdate = date("Y-m-d", strtotime($evdate));
            // insert file details into database
            $sql1 = "INSERT INTO vdca_files(`title`, `date`, `image`, `cby`, `cip`,  `cdate`) VALUES('$title', '$eevdate','$filename','admin', '$_SERVER[REMOTE_ADDR]','$created')";
            mysqli_query($mysqli, $sql1);
            header("Location: filesupload.php?st=success");
        }
        else {
            header("Location: filesupload.php?st=error");
        }
    } else
        header("Location: filesupload.php");
}
?>
<!doctype html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta content="width=device-width, initial-scale=1, user-scalable=no" name="viewport">
        <title>Virudhunagar District Chess Association | Download Files</title>
<?php include_once $prefix . 'include/css.php'; ?>
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <style>
            .img-wrap {
                position: relative;
                display: inline-block;
                font-size: 0;
            }
            .img-wrap .close {
                position: absolute;
                top: 2px;
                right: 2px;
                z-index: 100;
                background-color: red;
                padding: 5px 2px 2px;
                color: #000;
                font-weight: bold;
                cursor: pointer;
                opacity: .2;
                text-align: center;
                font-size: 22px;
                line-height: 10px;
                border-radius: 50%;
            }
            .img-wrap:hover .close {
                opacity: 1;
            }
            .remove {
                display: block;
                background: red;
                border: 1px solid black;
                color: red;
                text-align: center;
                cursor: pointer;
            }
            .remove:hover {
                background: black;
                color: black;
            }

        </style>

    </head>

    <body>
<?php include_once $prefix . 'include/header.php'; ?>
        <div class="pmd-sidebar-overlay"></div>
        <?php include_once $prefix . 'include/menubar.php'; ?>
        <div id="content" class="pmd-content inner-page">
            <div class="container-fluid full-width-container">
                <div class="section col-md-10 col-lg-offset-1 billinfo sp"> 	
                    <form action="" id="validationForm" action="" method="post" enctype="multipart/form-data">
                        <div class="pmd-card pmd-z-depth" style="margin-top: 40px;">
                            <div class="card-head style-primary" style="background-color: #f3702b;height: 100%; padding: 18px; font-size: 18px;    color: aliceblue; font-weight: 900; text-align: center;">
                                <header class="head">Download Files</header>
                            </div> 
                            <div class="pmd-card-body">                              
                                <div class="group-fields clearfix row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                            <label for="regular1" class="control-label">
                                                File Title <sub style="color:red;font-size: 18px;">*</sub>
                                            </label>
                                            <input type="text" name="etitle" class="form-control" required tabindex="1" value="<?php
        if ($id) {
            echo $title;
        }
        ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <label for="regular1" class="control-label">
                                            File Upload <sub style="color:red;font-size: 18px;">*</sub>
                                        </label>
                                        <div class="form-group pmd-textfield">
                                            <input type="file" name="file1" />
<?php if (isset($_GET['st'])) { ?>
                                                <div class="alert alert-danger text-center">
                                                <?php
                                                if ($_GET['st'] == 'success') {
                                                    echo "File Uploaded Successfully!";
                                                } else {
                                                    echo 'Invalid File Extension!';
                                                }
                                                ?>
                                                </div>
                                                <?php } ?>
                                        </div>
                                    </div>    
                                    <!--                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                                                <label for="regular1" class="control-label">Select Date and Time</label>
                                                                                <input type="text" id="datetimepicker-default"  name="edate" class="form-control" value="<?php
//                                            if ($id) {
//                                                echo $datef;
//                                            }
                                                ?>" required>
                                                                            </div>
                                                                        </div>-->
                                </div>  

                                <div class="pmd-card-actions">
                                    <button type="submit" class="btn btn-success next" tabindex="1"name="submit" value="Upload"  style="float: right;">Upload</button>
                                    <!--<a href="javascript:void(0);" class="btn btn-default" tabindex="1">Cancel</a>-->
<?php if ($id) { ?>
                                        <button onclick="goBack()" class="btn ink-reaction btn-flat btn-warning">Cancel</button>
                                    <?php } else {
                                        ?>
                                        <button type="reset"  class="btn ink-reaction btn-flat btn-warning">Reset</button>
                                    <?php } ?>
                                </div>
                            </div>    
                        </div>	
                    </form>
                </div>
            </div>
        </div>

        <section class="row component-section">
            <div class="col-md-6 col-lg-offset-4  sp">
                <div  class="pmd-card pmd-z-depth pmd-card-custom-view">
                    <div class="table-responsive">
                        <table id="example-checkbox" class="table pmd-table table-hover table-striped display responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                                <tr>                                            
                                    <th>#</th>
                                    <th>Actions</th>
                                    <th>File Title</th>
                                    <th>File</th>
                                    <th>Upload Date</th>
                                    <th></th>
                                    <!--<th>Download</th>-->
                                </tr>
                            </thead>
                            <tbody>
<?php
$i = 1;
$sql = "select * from vdca_files where `active` = '0' ";
$result = mysqli_query($mysqli, $sql);
while ($row = mysqli_fetch_array($result)) {
    $id = $row['id'];
    ?>
                                    <tr>
                                        <td><?php echo $i++; ?></td>
                                        <td class="pmd-table-row-action">
                                            <a href="filesupload.php?deleteid=<?php echo $id; ?>" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-sm" title="Delete" onclick="return confirm('Are you sure want to Delete?')">
                                                <i class="material-icons md-dark pmd-sm">delete</i>
                                            </a>	
                                            <a href="../status/view_file.php?inactive=<?php echo $id; ?>"><button type="button" class="btn btn-icon btn-rounded" style="background:#f44336;" data-toggle="tooltip" data-placement="top" onclick="return confirm('You are going to inactive?')"  data-original-title="Active now">In-Active</button></a>
                                        </td>
                                        <td><?php echo $row['title']; ?></td>
                                        <td><?php echo $row['image']; ?></td>
                                        <td><?php echo date('d-m-Y', strtotime($row['cdate'])); ?></td>
                                        <td><a href="uploads/<?php echo $row['image']; ?>" target="_blank"><h3>View</h3></a></td>
                                        <!--<td><a href="uploads/<?php // echo $row['image'];     ?>" download>Download</td>-->
                                    </tr>
<?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
<?php include_once $prefix . 'include/js.php'; ?>
        <script>
        <?php if ($msg == '2') { ?>
                Command: toastr["success"]("Gallery added sucesssfully", "Sucesss")
<?php } elseif ($msg == '1') {
    ?>
                Command: toastr["error"]("Gallery already exist", "Error")
<?php } elseif ($msg == '3') { ?>
                Command: toastr["success"]("Gallery Updated Sucesssfully", "Sucesss")
<?php } elseif ($msg == '4') { ?>
                Command: toastr["success"]("Gallery Deleted Sucesssfully", "Sucesss")
<?php } ?>

        </script>
        <script>

            $('#datetimepicker-default').datetimepicker({
                format: 'D-M-YYYY',
            });
        </script>
        <script>
            function goBack() {
                event.preventDefault();
                history.back(1);
            }
        </script>
    </body>
</html>
