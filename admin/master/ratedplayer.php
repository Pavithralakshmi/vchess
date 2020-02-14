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
$msg = $cdate = $name = $dob = $club = $fide_id = $irtg = $year = $id = $title = '';


if (isset($_GET['inactive'])) {
    $inactive = $_GET['inactive'];
    $sql = "UPDATE `vdca_ratedplayer` SET `active` = '1' where id='$inactive'";
    $result = mysqli_query($mysqli, $sql);
    header("Location:../status/view_ratedplayer.php?msg=3");
}
if (isset($_GET['active'])) {
    $active = $_GET['active'];
    $sql = "UPDATE `vdca_ratedplayer` SET `active` = '0' where id='$active'";
    $result = mysqli_query($mysqli, $sql);
    header("Location:../status/view_ratedplayer.php?msg=3");
}


if (isset($_GET['pageno'])) {
    $pageno = $_GET['pageno'];
} else {
    $pageno = 1;
}
$no_of_records_per_page = 10;
$offset = ($pageno - 1) * $no_of_records_per_page;

$total_pages_sql = "SELECT COUNT(*) FROM vdca_ratedplayer";
$result = mysqli_query($mysqli, $total_pages_sql);
$total_rows = mysqli_fetch_array($result)[0];
$total_pages = ceil($total_rows / $no_of_records_per_page);

$sql2 = "SELECT * FROM vdca_ratedplayer LIMIT $offset, $no_of_records_per_page";


if (isset($_GET['editid'])) {
    $id = $_GET['editid'];
    $sql = "SELECT * FROM `vdca_ratedplayer` where`id` = '$id'";
    $result = mysqli_query($mysqli, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $name = $row['name'];
        $dob1 = $row['dob'];
        $dob = date('Y-m-d', strtotime($dob1));
        $club = $row['club'];
        $fide_id = $row['fide_id'];
        $irtg = $row['irtg'];
        $title = $row['title'];
//        $year = $row['year'];
    }
}

if (isset($_POST['save'])) {
    $cdate = date('y/m/d');
    $name = $_POST['name'];
    $dob1 = $_POST['dob'];
    $dob = date('Y-m-d', strtotime($dob1));
    $club = $_POST['club'];
    $fide_id = $_POST['fide_id'];
    $irtg = $_POST['irtg'];
    $title = $_POST['title'];
//    $year = $_POST['year'];
    if ($id) {
        $check = "select * from `vdca_ratedplayer` where name='$name' AND dob='$dob' AND id !='$id'";
        $res = mysqli_query($mysqli, $check);
        if (mysqli_num_rows($res)) {
            $msg = 1;
        } else {
            $sql = " UPDATE `vdca_ratedplayer` SET `name`='$name',`dob`='$dob',`club`='$club',`fide_id`='$fide_id',`irtg`='$irtg' `title`='$title', `mby` = CONCAT (`mby`,'|','$user'), `mdate` = CONCAT (`mdate`,'|','$datetime'), `mip` = CONCAT (`mip`,'|','$_SERVER[REMOTE_ADDR]') WHERE id='$id'";
            $result = mysqli_query($mysqli, $sql) or trigger_error("Query Failed! SQL: $sql - Error: " . mysqli_error($mysqli));
            header("Location: ratedplayer.php?msg=3");
            exit;
        }
    } else {
        $check = "select * from `vdca_ratedplayer` where name='$name' AND dob='$dob'";
        $res = mysqli_query($mysqli, $check);
        if (mysqli_num_rows($res)) {
            $msg = 1;
        } else {
            $sql = "INSERT INTO `vdca_ratedplayer`(`name`,`dob`,`club`,`fide_id`,`irtg`, `cip`, `cby`, `cdate`,`title`) VALUES ('$name','$dob','$club','$fide_id','$irtg','$user','$cdate','$_SERVER[REMOTE_ADDR]','$title')";
//            echo $sql;exit;
            $result = mysqli_query($mysqli, $sql) or trigger_error("Query Failed! SQL: $sql - Error: " . mysqli_error($mysqli));
            header("Location: ratedplayer.php?msg=2");
            exit;
        }
    }
}
if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];
    $sql = "DELETE  from `vdca_ratedplayer` where id='$id' ";
    $result = mysqli_query($mysqli, $sql);
    header("Location: ratedplayer.php?msg=4");
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
        <title>Virudhunagar District Chess Association  | Rated Players' List</title>
        <?php include_once $prefix . 'include/css.php'; ?>
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="table2excel.js" type="text/javascript"></script>
        <script type="text/javascript">
            function Export() {
                $("#tblCustomers").table2excel({
                    filename: "Table.xls", exclude: ".noExl",
                });
            }
        </script>

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
                    <form id="validationForm" action="" method="post">
                        <div class="pmd-card pmd-z-depth" style="margin-top: 40px;">
                            <div class="card-head style-primary" style="background-color:#f3702b;height: 100%; padding: 18px; font-size: 18px;    color: aliceblue; font-weight: 900; text-align: center;">
                                <header class="head">Rated Players' List</header>
                            </div> 
                            <div class="pmd-card-body">
                                <div class="group-fields clearfix row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                            <label for="regular1" class="control-label">
                                                Player Name <sub style="color:red;font-size: 18px;">*</sub>
                                            </label>
                                            <input type="text" name="name" class="form-control" required tabindex="1" value="<?php echo $name; ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                            <label for="regular1" class="control-label"> DOB<sub style="color:red;font-size: 18px;">*</sub></label>
                                            <input type="text" name="dob" id="datetimepicker-default"  class="form-control" required tabindex="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="4" autocomplete="off" value="<?php echo $dob; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="group-fields clearfix row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                            <label for="regular1" class="control-label">
                                                IRTG <sub style="color:red;font-size: 18px;">*</sub>
                                            </label>
                                            <input type="text" name="irtg" class="form-control" required tabindex="1" value="<?php echo $irtg; ?>">
                                        </div>

                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                            <label for="regular1" class="control-label">
                                                FIDE <sub style="color:red;font-size: 18px;">*</sub>
                                            </label>
                                            <input type="text" name="fide_id" class="form-control" required tabindex="1" value="<?php echo $fide_id; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="group-fields clearfix row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                            <label for="regular1" class="control-label">
                                                CLUB
                                            </label>
                                            <input type="text" name="club" class="form-control"  tabindex="1" value="<?php echo $club; ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                            <label for="regular1" class="control-label">
                                                Tittle
                                            </label>
                                            <input type="text" name="title" class="form-control"  tabindex="1" value="<?php echo $title; ?>">
                                        </div>
                                    </div>

                                </div>
                            </div>		
                            <div class="pmd-card-actions">
                                <button type="submit" class="btn btn-success next" tabindex="1" name="save"  style="float: right;">Submit</button>
                                <!--<a href="javascript:void(0);" class="btn btn-default" tabindex="1">Cancel</a>-->
                                <?php if ($id) { ?>
                                    <button onclick="goBack()" class="btn ink-reaction btn-flat btn-warning">Cancel</button>
                                <?php } else {
                                    ?>
                                    <button type="reset"  class="btn ink-reaction btn-flat btn-warning">Reset</button>
                                <?php } ?>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <section class="row component-section">
            <div class="col-md-8 col-lg-offset-3 sp">
                <div  class="pmd-card pmd-z-depth pmd-card-custom-view">
                    <div class="table-responsive">
                        <center>
                        <ul class="pagination" style="display: inline-block;">
                            <!--<li><a href="?pageno=1">First</a></li>-->
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
                            <!--<li><a href="?pageno=<?php // echo $total_pages;         ?>">Last</a></li>-->
                        </ul>
                        </center>
                        <!--<input type="button" id="btnExport" value="Export" onclick="Export()" style=" float: right;padding: 10px; width: 132px; background: #f3702b; font-size: 15px; font-weight: bolder; color: white;" />-->
                        <table id="tblCustomers"  class="table pmd-table table-hover table-striped display responsive nowrap">

                        <!--<table id="example-checkbox" class="table pmd-table table-hover table-striped display responsive nowrap" cellspacing="0" width="100%">-->
                            <thead>
                                <tr>                                            
                                    <th>S.No</th>
                                    <th class="noExl">Actions</th>
                                    <th> Player Name</th>
                                    <th>YOB</th>
                                    <th>Club</th>
                                    <th> Fide</th>
                                    <th>Irtg</th>
                                    <th>Tittle</th>
                                    <!--<th>Year</th>-->
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                $sql2 = "SELECT * FROM vdca_ratedplayer  WHERE `active` = '0'  ORDER BY `id` desc LIMIT $offset, $no_of_records_per_page;";
                                $result2 = mysqli_query($mysqli, $sql2);
                                while ($row2 = mysqli_fetch_assoc($result2)) {
                                    $id = $row2['id'];
                                    $name = $row2['name'];
                                    $dob = $row2['dob'];
                                    $club = $row2['club'];
                                    $fide_id = $row2['fide_id'];
                                    $irtg = $row2['irtg'];
                                    $title = $row2['title'];
//                                    $year = $row2['year'];
                                    ?>
                                    <tr>                                           
                                        <td><?php echo $i; ?></td>
                                        <td class="pmd-table-row-action noExl">
                                            <a href="ratedplayer.php?editid=<?php echo $id; ?>" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-sm" title="Edit">
                                                <i class="material-icons md-dark pmd-sm">edit</i>
                                            </a>
                                            <a href="ratedplayer.php?deleteid=<?php echo $id; ?>" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-sm" title="Delete" onclick="return confirm('Are you sure want to Delete?')">
                                                <i class="material-icons md-dark pmd-sm">delete</i>
                                            </a>	
                                            <button data-target="#large-dialog<?php echo $row2['id']; ?>" data-toggle="modal" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-sm" type="button" title="View"><i class="material-icons md-dark pmd-sm">remove_red_eye</i></button>
                                            <a href="../status/view_ratedplayer.php?inactive=<?php echo $id; ?>"><button type="button" class="btn btn-icon btn-rounded" style="background:#f44336;" data-toggle="tooltip" data-placement="top" onclick="return confirm('You are going to inactive?')"  data-original-title="Active now">In-Active</button></a>
                                        </td>
                                        <td><?php echo $name; ?></td>
                                        <td><?php echo date('Y', strtotime($dob)); ?></td>
                                        <td><?php echo $club; ?></td>
                                        <td><?php echo $fide_id; ?></td>
                                        <td><?php echo $irtg; ?></td>
                                        <td><?php echo $title; ?></td>
                                        <!--<td><?php // echo $year;      ?></td>-->
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
        $sql3 = "SELECT * FROM `vdca_ratedplayer`";
        $result3 = mysqli_query($mysqli, $sql3);
        while ($row3 = mysqli_fetch_assoc($result3)) {
            $id = $row3['id'];
            $name = $row3['name'];
            $dob = $row3['dob'];
            $club = $row3['club'];
            $fide_id = $row3['fide_id'];
            $irtg = $row3['irtg'];
            $title = $row3['title'];
//            $year = $row3['year'];
            ?>
            <div tabindex="-1" class="modal fade" id="large-dialog<?php echo $id; ?>" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                        <div class="modal-header" style="border: 1px solid #ccc; padding-bottom: 8px;">
                            <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>                          
                            <div class="card-head style-primary" style="background-color: #f3702b;height: 100%; padding: 18px; font-size: 18px;    color: aliceblue; font-weight: 900; text-align: center;">
                                <header class="head">VDCA Rated Players</header>
                            </div> 
                        </div>                       
                        <div class="modal-body"> 

                                 <table>
                                    <tr>
                                        <th style="padding: 1px 10px 2px 6px;    margin: 1px 1px 1px 1px;"><h2  class="pmd-textfield" style="color:red">Name    : </h2></th> 
                                        <td><b style="padding: 1px 10px 2px 6px;    margin: 1px 1px 1px 1px;"><?php echo $name; ?></b></td>
                                       <th style="padding: 1px 10px 2px 67px;    margin: 1px 1px 1px 1px;"><h2 class="pmd-textfield" style="color:red"> YOB    :</h2></th>
                                       <td><b style="padding: 1px 10px 2px 6px;    margin: 1px 1px 1px 1px;"><?php echo date('Y', strtotime($dob)); ?></b></td>
                                    </tr>
                                    <tr>
                                        <th style="padding: 1px 10px 2px 6px;    margin: 1px 1px 1px 1px;"><h2 class="pmd-textfield" style="color:red"> FIDE    :</h2> </th> 
                                        <td><b style="padding: 1px 10px 2px 6px;    margin: 1px 1px 1px 1px;"> <?php echo $fide_id; ?></b></td>
                                        <th style="padding: 1px 10px 2px 67px;    margin: 1px 1px 1px 1px;"><h2 class="pmd-textfield" style="color:red"> VDCA Id    :</h2> </th>
                                        <td><b style="padding: 1px 10px 2px 6px;    margin: 1px 1px 1px 1px;"> <?php echo $irtg; ?></b></td>
                                    </tr>
                                    <tr>
                                        <th style="padding: 1px 10px 2px 6px;    margin: 1px 1px 1px 1px;"><h2 class="pmd-textfield" style="color:red"> Club    :</h2> </th>
                                        <td><b style="padding: 1px 10px 2px 6px;    margin: 1px 1px 1px 1px;"> <?php echo $club; ?></b></td>
                                        <th style="padding: 1px 10px 2px 67px;    margin: 1px 1px 1px 1px;"><h2 class="pmd-textfield" style="color:red"> Tittle    :</h2> </th>
                                        <td><b style="padding: 1px 10px 2px 6px;    margin: 1px 1px 1px 1px;"> <?php echo $title; ?></b></td>
                                    </tr>
                                </table>         
                            <button aria-hidden="true" data-dismiss="modal" class="btn pmd-ripple-effect btn-info" type="button" style="float: right; top:-25px;">close</button>                                  
                        </div>   
                    </div>
                </div>
            </div>
        <?php } ?>



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
        <?php include_once $prefix . 'include/js.php'; ?>
        <script>
            $('#datetimepicker-default').datetimepicker({
                format: 'YYYY',
            });
        </script>
        <script>
            function goBack() {
                event.preventDefault();
                history.back(1);
            }
        </script>
        <!-- Scripts Starts -->
        <!-- Scripts Ends -->


    </body>
</html>

