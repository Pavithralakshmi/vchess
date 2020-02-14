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
$msg = $id = $newfile = '';
$title = $desc = $imgupload = '';

if (isset($_GET['inactive'])) {
    $inactive = $_GET['inactive'];
    $sql = "UPDATE `vdca_event` SET `active` = '1' where id='$inactive'";
    $result = mysqli_query($mysqli, $sql);
    header("Location:../status/view_event.php?msg=3");
}
if (isset($_GET['active'])) {
    $active = $_GET['active'];
    $sql = "UPDATE `vdca_event` SET `active` = '0' where id='$active'";
    $result = mysqli_query($mysqli, $sql);
    header("Location:../status/view_event.php?msg=3");
}

if (isset($_GET['editid'])) {
    $id = $_GET['editid'];
    $sql = "select * from `vdca_event` where id='$id' ";
    $result = mysqli_query($mysqli, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $title = $row['title'];
        $description = $row['description'];
        $checkit = $row['checkit'];
        $eddate = $row['datetime'];
        $datef = date('d-m-Y', strtotime($eddate));
        $datee = $row['datee'];
        $datee = date('d-m-Y', strtotime($datee));
    }
}

if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];
    $sql = "DELETE  from `vdca_event` where id='$id' ";
    $result = mysqli_query($mysqli, $sql);
    header("Location: events.php?msg=4");
}
$current_url = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['SERVER_NAME'] . '/' . 'admin/' . 'master/';
//echo $id;exit;
if (isset($_POST['save'])) {
//    $eevdate = date('Y-m-d');
    $title = $_POST['etitle'];
    $description = $_POST['description'];
    $checkit = $_POST['checkit'];
    $datee = $_POST['datee'];
    $datee = date("Y-m-d", strtotime($datee));
    $evdate = $_POST['edate'];
    $eevdate = date("Y-m-d", strtotime($evdate));
    $s = 0;

    if ($id) {
        $check = "select * from `vdca_event` where title='$title' AND datee='$datee' AND id !='$id'";
        $res = mysqli_query($mysqli, $check);
        if (mysqli_num_rows($res)) {
            $msg = 1;
        } else {
            $sql1 = "UPDATE `vdca_event` SET  `title` = '$title', `datee` = '$datee',`checkit` = '$checkit',`description`='$description',`datetime` = '$eevdate',`image`='$resimg1',`mby` = CONCAT (`mby`,'|','admin'), `mdate` = CONCAT (`mdate`,'|','$datetime'), `mip` = CONCAT (`mip`,'|','$_SERVER[REMOTE_ADDR]') where `id`= '$id' ";
            $result1 = mysqli_query($mysqli, $sql1) or trigger_error("Query Failed! SQL: $sql - Error: " . mysqli_error($mysqli));
            header("Location: events.php?msg=3");
        }
    } else {
        $check = "select * from `vdca_event` where title='$title' AND datee='$datee' ";
        $res = mysqli_query($mysqli, $check);
        if (mysqli_num_rows($res)) {
            $msg = 1;
        } else {
            $sql = "INSERT INTO `vdca_event` (`title`,`description`,`datetime`,`image`,  `cby`, `cdate`, `cip`,`datee`,`checkit`)"
                    . " VALUES ('$title','$description',  '$eevdate', '$resimg','admin','$datetime', '$_SERVER[REMOTE_ADDR]','$datee','$checkit')";
            $result = mysqli_query($mysqli, $sql) or trigger_error("Query Failed! SQL: $sql - Error: " . mysqli_error($mysqli));
            header("Location: events.php?msg=2");
        }
    }
    $s++;
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
        <title>Virudhunagar District Chess Association - VDCA Chess </title>
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
            .pmd-textfield-focused {
                display: contents;
            }
        </style>
         <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
            <script src="table2excel.js" type="text/javascript"></script>
            <script type="text/javascript">
                function Export() {
                    $("#tblCustomers").table2excel({
                        filename: "Table.xls", exclude: ".noExl",
                    });
                }
            </script>
    </head>

    <body>
        <?php include_once $prefix . 'include/header.php'; ?>
        <div class="pmd-sidebar-overlay"></div>
        <?php include_once $prefix . 'include/menubar.php'; ?>
        <div id="content" class="pmd-content inner-page">
            <div class="container-fluid full-width-container">
                <div class="section col-md-10 col-lg-offset-1 billinfo sp"> 			
                    <form id="validationForm" action="" method="post" enctype="multipart/form-data">
                        <div class="pmd-card pmd-z-depth" style="margin-top: 49px;">
                            <div class="card-head style-primary" style="background-color: #f3702b;height: 100%; padding: 18px; font-size: 18px;    color: aliceblue; font-weight: 900; text-align: center;">
                                <header class="head">Events / News</header>
                            </div> 
                            <div class="pmd-card-body">                              
                                <div class="group-fields clearfix row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-6">
                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                            <label for="regular1" class="control-label">
                                                Event Title <sub style="color:red;font-size: 18px;">*</sub>
                                            </label>
                                            <input type="text" name="etitle" class="form-control"   tabindex="1"  required value="<?php
                                            if ($id) {
                                                echo $title;
                                            }
                                            ?>">
                                        </div>
                                    </div>
                                           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                            <label for="regular1" class="control-label">Select Event Date</label>
                                            <input type="text" id="datetimepicker-default"  name="edate" class="form-control"  required value="<?php
                                            if ($id) {
                                                echo $datef;
                                            }
                                            ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="group-fields clearfix row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                            <label for="regular1" class="control-label">Select End Date<sub style="color:red;font-size: 18px;">*</sub></label>
                                            <input type="text" id="datetimepicker-default1" oninput="this.value=this.value.replace(/[^0-9]/g,'');javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10" name="datee" class="form-control"  required value="<?php
                                            if ($id) {
                                                echo $datee;
                                            }
                                            ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                            <div class="checkbox pmd-default-theme">
                                                <label class="pmd-checkbox pmd-checkbox-ripple-effect">
                                                    <span> Need To Add Scroll </span> 
                                                    <input type="checkbox" name="checkit"  class="form-control"   tabindex="1" value="checked" <?php
                                                    if ($checkit!='') {
                                                        echo "checked";
                                                    }
                                                    ?> style="padding-right:2px;padding-left: 2px;"> <span> Yes </span>                                                   
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="group-fields clearfix row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="<?php
                                        if ($id) {
                                            echo 'form-group pmd-textfield pmd-textfield-floating-label pmd-textfield-floating-label-completed';
                                        } else {
                                            echo 'form-group pmd-textfield pmd-textfield-floating-label';
                                        }
                                        ?>">
                                            <label for="description" class="control-label">
                                                Event Description <sub style="color:red;font-size: 18px;">*</sub>
                                            </label>
                                            <textarea rows="4" cols="50" name="description" class="form-control"  required tabindex="1" ><?php
                                                if ($id) {
                                                    echo $description;
                                                }
                                                ?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>		
                            <div class="pmd-card-actions">
                                <button type="submit" class="btn btn-success next" tabindex="1" name="save"  style="float: right;">Submit</button>
                                <?php if ($id) { ?>
                                    <button onclick="goBack()" class="btn ink-reaction btn-flat btn-warning">Cancel</button>
                                <?php } else {
                                    ?>
                                    <button type="reset"  class="btn ink-reaction btn-flat btn-warning">Reset</button>
                                <?php } ?>
                            </div>
                    </form>
                </div>
            </div>
            <section class="row component-section">
                <div class="col-md-12  sp">
                    <div  class="pmd-card pmd-z-depth pmd-card-custom-view">
                        <div class="table-responsive">
                            <!--<input type="button" id="btnExport" value="Export" onclick="Export()" style=" float: right;padding: 10px; width: 132px; background: #f3702b; font-size: 15px; font-weight: bolder; color: white;" />-->
                            <table id="tblCustomers"  class="table pmd-table table-hover table-striped display responsive nowrap">
                                <thead>
                                    <tr>                                            
                                        <th>S.No</th>
                                        <th class="noExl">Actions</th>
                                        <th>Event Title</th>
                                        <th>Description</th>
                                        <th>Scroll end date</th>
                                        <th>Check it</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    $sql2 = "SELECT * FROM vdca_event WHERE `active` = '0' ORDER BY `id` desc";
                                    $result2 = mysqli_query($mysqli, $sql2);
                                    while ($row2 = mysqli_fetch_assoc($result2)) {
                                        $id = $row2['id'];
                                        $event = $row2['title'];
                                        $checkit = $row2['checkit'];
                                        $datee = $row2['datee'];
                                        $edate = $row2['datetime'];
                                        $desc = $row2['description'];
                                        ?>
                                        <tr>                                           
                                            <td><?php echo $i; ?></td>
                                            <td class="pmd-table-row-action noExl">
                                                <a href="events.php?editid=<?php echo $id; ?>" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-sm" title="Edit">
                                                    <i class="material-icons md-dark pmd-sm">edit</i>
                                                </a>
                                                <a href="events.php?deleteid=<?php echo $id; ?>" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-sm" title="Delete" onclick="return confirm('Are you sure want to Delete?')">
                                                    <i class="material-icons md-dark pmd-sm">delete</i>
                                                </a>	
                                                <button data-target="#large-dialog<?php echo $row2['id']; ?>" data-toggle="modal" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-sm" type="button" title="View"><i class="material-icons md-dark pmd-sm">remove_red_eye</i></button>
                                                <a href="../status/view_event.php?inactive=<?php echo $id; ?>"><button type="button" class="btn btn-icon btn-rounded" style="background:#f44336;" data-toggle="tooltip" data-placement="top" onclick="return confirm('You are going to inactive?')"  data-original-title="Active now">In-Active</button></a>
                                            </td>
                                            <td><?php echo $event; ?></td>
                                            <td><?php echo $desc; ?></td>
                                            <td><?php echo date('d/m/Y', strtotime($datee)); ?></td>
                                            <td><?php echo $checkit; ?></td>
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
            <?php
            $sql3 = "SELECT * FROM `vdca_event`";
            $result3 = mysqli_query($mysqli, $sql3);
            while ($row3 = mysqli_fetch_assoc($result3)) {
                $id = $row3['id'];
                $event = $row3['title'];
                $edate = $row3['datetime'];
                $desc = $row3['description'];
                $img = $row3['image'];
                $modalimg = explode(',', $img);
                ?>
                <div tabindex="-1" class="modal fade" id="large-dialog<?php echo $id; ?>" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header" style="border: 1px solid #ccc; padding-bottom: 8px;">
                                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>                          
                                <div class="media-body media-middle">
                                    <h3 class="pmd-card-title-text" style="    color: #2380c1;    font-weight: 600;"> <?php echo $event; ?></h3> 
                                </div>
                            </div>                       
                            <div class="modal-body"> 
                                <table>
                                    <tr><th><h2  class="pmd-textfield" style="color:red">Data Entry Date    : </h2></th> <td><b style="padding: 1px 10px 2px 6px;    margin: 1px 1px 1px 1px;"><?php echo date('d-m-Y', strtotime($edate)); ?></b></td></tr>
                                    <tr><th><h2 class="pmd-textfield" style="color:red"> Event Title    :</h2></th> <td><b style="padding: 1px 10px 2px 6px;    margin: 1px 1px 1px 1px;"><?php echo $event; ?></b></td></tr>
                                    <tr><th><h2 class="pmd-textfield" style="color:red"> Description    :</h2> </th> <td><b style="padding: 1px 10px 2px 6px;    margin: 1px 1px 1px 1px;"> <?php echo $desc; ?></b></td></tr>
                                </table>
                                <button aria-hidden="true" data-dismiss="modal" class="btn pmd-ripple-effect btn-info" type="button" style="float: right; top:-25px;">close</button>                                  
                            </div>   
                        </div>
                    </div>
                </div>
            <?php } ?>

            <?php include_once $prefix . 'include/js.php'; ?>
            <script>
<?php if ($msg == '2') { ?>
                    Command: toastr["success"]("Event / News added sucesssfully", "Sucesss")
<?php } elseif ($msg == '1') {
    ?>
                    Command: toastr["error"]("Event / News already exist", "Error")
<?php } elseif ($msg == '3') { ?>
                    Command: toastr["success"]("Event / News Updated Sucesssfully", "Sucesss")
<?php } elseif ($msg == '4') { ?>
                    Command: toastr["success"]("Event / News Deleted Sucesssfully", "Sucesss")
<?php } ?>

            </script>
            <script>
                $("document").ready(function () {
                    $(".requiredval").change(function () {
                        $(".close").show();
                    });
                });
            </script>
            <script>
                function goBack() {
                    event.preventDefault();
                    history.back(1);
                }
            </script>
            <script>
                $('#datetimepicker-default').datetimepicker({
                    format: 'D-M-YYYY',
                });
                $('#datetimepicker-default1').datetimepicker({
                    format: 'D-M-YYYY',
                });
            </script>
           
    </body>
</html>
