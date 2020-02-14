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
$msg = $cdate = $name = $dob = $institute = $fide_no = $vdca_no = $year = $id = '';

if (isset($_GET['editid'])) {
    $id = $_GET['editid'];
    $sql = "SELECT * FROM `vdcaplayers` where`id` = '$id'";
    $result = mysqli_query($mysqli, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $name = $row['name'];
        $dob1 = $row['dob'];
        $dob = date('d-m-Y', strtotime($dob1));
        $institute = $row['institute'];
        $fide_no = $row['fide_no'];
        $vdca_no = $row['vdca_no'];
        $year = $row['year'];
    }
}

if (isset($_POST['save'])) {
    $cdate = date('y-m-d');
    $name = $_POST['name'];
    $dob1 = $_POST['dob'];
    $dob = date('d-m-Y', strtotime($dob1));
    $institute = $_POST['institute'];
    $fide_no = $_POST['fide_no'];
    $vdca_no = $_POST['vdca_no'];
    $year = $_POST['year'];
    if ($id) {
        $check = "select * from `vdcaplayers` where name='$name' AND dob='$dob' AND id !='$id'";
        $res = mysqli_query($mysqli, $check);
        if (mysqli_num_rows($res)) {
            $msg = 1;
        } else {
            $sql = " UPDATE `vdcaplayers` SET `name`='$name',`dob`='$dob',`institute`='$institute',`fide_no`='$fide_no',`vdca_no`='$vdca_no',`year`='$year' WHERE id='$id'";
            $result = mysqli_query($mysqli, $sql) or trigger_error("Query Failed! SQL: $sql - Error: " . mysqli_error($mysqli));
            header("Location: vdcaplayers.php?msg=3");
            exit;
        }
    } else {
        $check = "select * from `vdcaplayers` where name='$name' AND dob='$dob'";
        $res = mysqli_query($mysqli, $check);
        if (mysqli_num_rows($res)) {
            $msg = 1;
        } else {
            $sql = "INSERT INTO `vdcaplayers`(`name`,`dob`,`institute`,`fide_no`,`vdca_no`,`year`) VALUES ('$name','$dob','$institute','$fide_no','$vdca_no','$year')";
            $result = mysqli_query($mysqli, $sql) or trigger_error("Query Failed! SQL: $sql - Error: " . mysqli_error($mysqli));
            header("Location: vdcaplayers.php?msg=2");
            exit;
        }
    }
}
if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];
    $sql = "DELETE  from `vdcaplayers` where id='$id' ";
    $result = mysqli_query($mysqli, $sql);
    header("Location: vdcaplayers.php?msg=4");
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
        <meta name="description" content="VDCA Admin">
        <meta content="width=device-width, initial-scale=1, user-scalable=no" name="viewport">
        <title>Virudhunagar District Chess Association  | VDCA Players' List</title>
        <?php include_once $prefix . 'include/css.php'; ?>
         <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    </head>

    <body>
        <?php include_once $prefix . 'include/header.php'; ?>
        <div class="pmd-sidebar-overlay"></div>
        <?php include_once $prefix . 'include/menubar.php'; ?>
        <div id="content" class="pmd-content inner-page">
            <div class="container-fluid full-width-container">
                <div class="section col-md-10 col-lg-offset-1 billinfo sp">
                    <form id="validationForm" action="" method="post">
                        <div class="pmd-card pmd-z-depth" style="margin-top: 110px;">
                            <div class="card-head style-primary" style="background-color: #61ba6d;height: 100%; padding: 18px; font-size: 18px;    color: aliceblue; font-weight: 900; text-align: center;">
                                <header class="head">VDCA Players' List</header>
                            </div> 
                            <div class="pmd-card-body">
                                <div class="group-fields clearfix row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                            <label for="regular1" class="control-label">
                                                Player Name
                                            </label>
                                            <input type="text" name="name" class="form-control" required tabindex="1" value="<?php echo $name; ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                            <label for="regular1" class="control-label">
                                                DOB
                                            </label>
                                            <input type="text" name="dob" id="datetimepicker-default"  class="form-control" required tabindex="1" value="<?php echo $dob;?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="group-fields clearfix row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                            <label for="regular1" class="control-label">
                                                Institution
                                            </label>
                                            <input type="text" name="institute" class="form-control" required tabindex="1" value="<?php echo $institute; ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                            <label for="regular1" class="control-label">
                                                FIDE
                                            </label>
                                            <input type="text" name="fide_no" class="form-control" required tabindex="1" value="<?php echo $fide_no; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="group-fields clearfix row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                            <label for="regular1" class="control-label">
                                                VDCA Id
                                            </label>
                                            <input type="text" name="vdca_no" class="form-control" required tabindex="1" value="<?php echo $vdca_no; ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                            <label for="regular1" class="control-label">
                                                Year
                                            </label>
                                            <input type="text" name="year" class="form-control" required tabindex="1" value="<?php echo $year; ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>		
                            <div class="pmd-card-actions">
                                <button type="submit" class="btn btn-primary next" tabindex="1" name="save"  style="float: right;">Submit</button>
                                <!--<a href="javascript:void(0);" class="btn btn-default" tabindex="1">Cancel</a>-->
                                            <?php if ($id) { ?>
                                    <button onclick="goBack()" class="btn ink-reaction btn-flat btn-primary">Cancel</button>
                                <?php } else {
                                    ?>
                                    <button type="reset"  class="btn ink-reaction btn-flat btn-primary">Reset</button>
                                <?php } ?>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <section class="row component-section">

            <!-- responsive table code and example -->
            <div class="col-md-8 col-lg-offset-3 sp">
                <div  class="pmd-card pmd-z-depth pmd-card-custom-view">
                    <div class="table-responsive">
                        <table id="example-checkbox" class="table pmd-table table-hover table-striped display responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                                <tr>                                            
                                    <th>S.No</th>
                                    <th>Actions</th>
                                    <th> Player Name</th>
                                    <th>DOB</th>
                                    <th>Institution</th>
                                    <th> FIDE-No</th>
                                    <th>VDCA Id</th>
                                    <th>Year</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                $sql2 = "SELECT * FROM vdcaplayers ORDER BY `id` desc";
                                $result2 = mysqli_query($mysqli, $sql2);
                                while ($row2 = mysqli_fetch_assoc($result2)) {
                                    $id = $row2['id'];
                                    $name = $row2['name'];
                                    $dob = $row2['dob'];
                                    $institute = $row2['institute'];
                                    $fide_no = $row2['fide_no'];
                                    $vdca_no = $row2['vdca_no'];
                                    $year = $row2['year'];
                                    ?>
                                    <tr>                                           
                                        <td><?php echo $i; ?></td>
                                        <td class="pmd-table-row-action">
                                            <a href="vdcaplayers.php?editid=<?php echo $id; ?>" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-sm" title="Edit">
                                                <i class="material-icons md-dark pmd-sm">edit</i>
                                            </a>
                                            <a href="vdcaplayers.php?deleteid=<?php echo $id; ?>" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-sm" title="Delete">
                                                <i class="material-icons md-dark pmd-sm">delete</i>
                                            </a>	
                                            <button data-target="#large-dialog<?php echo $row2['id']; ?>" data-toggle="modal" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-sm" type="button" title="View"><i class="material-icons md-dark pmd-sm">remove_red_eye</i></button>
                                        </td>
                                        <td><?php echo $name; ?></td>
                                        <td><?php echo date('d-m-Y', strtotime($dob)); ?></td>
                                        <td><?php echo $institute; ?></td>
                                        <td><?php echo $fide_no; ?></td>
                                        <td><?php echo $vdca_no; ?></td>
                                        <td><?php echo $year; ?></td>
                                    </tr>
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
        <?php
        $sql3 = "SELECT * FROM `vdcaplayers`";
        $result3 = mysqli_query($mysqli, $sql3);
        while ($row3 = mysqli_fetch_assoc($result3)) {
            $id = $row3['id'];
            $name = $row3['name'];
            $dob = $row3['dob'];
            $institute = $row3['institute'];
            $fide_no = $row3['fide_no'];
            $vdca_no = $row3['vdca_no'];
            $year = $row3['year'];
            ?>
            <div tabindex="-1" class="modal fade" id="large-dialog<?php echo $id; ?>" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header" style="border: 1px solid #ccc; padding-bottom: 8px;">
                            <!--<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>-->                          
                            <div class="card-head style-primary" style="background-color: #61ba6d;height: 100%; padding: 18px; font-size: 18px;    color: aliceblue; font-weight: 900; text-align: center;">
                                <header class="head">VDCA Players</header>
                            </div> 
                        </div>                       
                        <div class="modal-body"> 

                            <div class="group-fields clearfix row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="regular1" class="control-label">
                                            <h2> <span style="color:green;"> Name : </span><?php echo $name; ?></h2>
                                        </label>                                            
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="regular1" class="control-label">
                                            <h2>  <span style="color:green;"> DOB : </span> <?php echo date('d-m-Y h:i a', strtotime($dob)); ?></h2>
                                        </label>                                            
                                    </div>
                                </div>
                            </div>
                            <div class="group-fields clearfix row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="regular1" class="control-label">
                                            <h2 class="pmd-textfield"> <span style="color:green;"> Institution : </span><?php echo $institute; ?></h2>                                               
                                        </label>                                            
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="regular1" class="control-label">
                                            <h2 class="pmd-textfield">  <span style="color:green;">Year : </span><?php echo $year; ?></h2>                                               
                                        </label>                                            
                                    </div>
                                </div>
                            </div>
                            <div class="group-fields clearfix row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="regular1" class="control-label">
                                            <h2 class="pmd-textfield"> <span style="color:green;"> FIDE-No : </span><?php echo $fide_no; ?></h2>                                               
                                        </label>                                            
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="regular1" class="control-label">
                                            <h2 class="pmd-textfield"> <span style="color:green;"> VDCA Id : </span><?php echo $vdca_no; ?></h2>                                               
                                        </label>                                            
                                    </div>
                                </div>
                            </div>
                            <button aria-hidden="true" data-dismiss="modal" class="btn pmd-ripple-effect btn-info" type="button" style="float: right; top:-25px;">close</button>                                  
                        </div>   
                    </div>

                </div>

            </div><!-- tab end -->
        <?php } ?>


        <!-- Scripts Starts -->
        <?php include_once $prefix . 'include/js.php'; ?>
        <!-- Scripts Ends -->
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

