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
if (isset($_GET['editid'])) {
    $id = $_GET['editid'];
    $sql = "select * from `vdca_advertisement` where id='$id' ";
    $result = mysqli_query($mysqli, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $title = $row['title'];
        $eddate = $row['addate'];
        $datef = date('m-d-Y', strtotime($eddate));
        $img1 = $row['adimage'];
        $imgupload = explode(',', $img1);
    }
}

if (isset($_GET['inactive'])) {
    $inactive = $_GET['inactive'];
    $sql = "UPDATE `vdca_advertisement` SET `active` = '1' where id='$inactive'";
    $result = mysqli_query($mysqli, $sql);
    header("Location:../status/view_slider.php?msg=3");
}
if (isset($_GET['active'])) {
    $active = $_GET['active'];
    $sql = "UPDATE `vdca_advertisement` SET `active` = '0' where id='$active'";
    $result = mysqli_query($mysqli, $sql);
    header("Location:../status/view_slider.php?msg=3");
}

if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];
    $sql = "DELETE  from `vdca_advertisement` where id='$id' ";
    $result = mysqli_query($mysqli, $sql);
    header("Location: slider.php?msg=4");
}

function Reduce_imgesize($target, $newcopy, $w, $h, $ext) {
    list($w_orig, $h_orig) = getimagesize($target);
    $scale_ratio = $w_orig / $h_orig;
    if (($w / $h) > $scale_ratio) {
        $w = $h * $scale_ratio;
    } else {
        $h = $w / $scale_ratio;
    }
    $img = "";
    $ext = strtolower($ext);
    if ($ext == "gif") {
        $img = imagecreatefromgif($target);
    } else if ($ext == "png") {
        $img = imagecreatefrompng($target);
    } else {
        $img = imagecreatefromjpeg($target);
    }
    $tci = imagecreatetruecolor($w, $h);
    // imagecopyresampled(dst_img, src_img, dst_x, dst_y, src_x, src_y, dst_w, dst_h, src_w, src_h)
    imagecopyresampled($tci, $img, 0, 0, 0, 0, $w, $h, $w_orig, $h_orig);
    imagejpeg($tci, $newcopy, 80);
}

if (isset($_POST['delete_images'])) {
    $img = $_POST['img_array'];
    $imagearray = explode(',', $img);
    $img_key = $_POST['delete_images'];

    if (($key = array_search($img_key, $imagearray)) !== false) {
        unset($imagearray[$key]);
    }
//        print_r($imagearray);
//        exit;
    $im = implode(',', $imagearray);
    echo $im;
    exit;
}

$current_url = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['SERVER_NAME'] . '/' . 'admin/' . 'master/';

if (isset($_POST['save'])) {
    $title = $_POST['atitle'];
    $evdate = $_POST['addate'];
    $eevdate = date('Y-m-d');
//    $eevdate = date("Y-m-d h:i:s", strtotime($evdate));
    $s = 0;
    if (!empty($_FILES)) {
        $total = count($_FILES['image']['name']['id' . $s]);
        $i = 0;
        if ($total != 0) {
            for ($j = 1; $j <= $total; $j++) {
                if (file_exists($_FILES["image"]["tmp_name"]['id' . $s][$i])) {
                    $fileName = $_FILES["image"]["name"]['id' . $s][$i];
                    $img_array = explode('.', basename($_FILES["image"]["name"]['id' . $s][$i]));
                    $img_name = '[' . $img_array[0] . ']' . mt_rand(100000, 999999) . '_' . time() . '.' . $img_array[1];
                    $img_name = preg_replace('/\s+/', '', $img_name);
                    $fileExt = end($img_array);
                    $url = $current_url . "gallery/" . $img_name;
                    $target_path = "gallery/" . $img_name;
                    @move_uploaded_file($_FILES['image']['tmp_name']['id' . $s][$i], $target_path);
                    $target_file = "gallery/$img_name";
//                    $resized_file = "gallery/$img_name";
//                    $wmax = 300;
//                    $hmax = 250;
//                    Reduce_imgesize($target_file, $resized_file, $wmax, $hmax, $fileExt);
                    if ($j == 1) {
                        $allurl = $target_path;
                    } else {
                        $allurl .= "," . $target_path;
                    }
                }
                $i++;
            }
        }
    }
    $titles12 = str_replace("'", "\'", $title[$s]);
    if ($id) {
        $imgesa = $_POST['imagesqe'];
        $chackimg = explode(',', $imgesa);
        $arr = array_intersect($chackimg, $imgupload);
        $updateimgs = implode(',', $arr);
        $result = array_diff($imgupload, $chackimg);
        foreach ($result as $value) {
            $del_lnik1 = explode('/', $value);
            $imag1 = end($del_lnik1);
            unlink('gallery/' . $imag1);
        }
        $uploads = $allurl . ',' . $updateimgs;
        $resimg1 = trim($uploads, ',');
        $sql1 = "UPDATE `vdca_advertisement` SET  `title` = '$title',`addate` = '$eevdate',`adimage`='$resimg1',`mby` = CONCAT (`mby`,'|','$user'), `mdate` = CONCAT (`mdate`,'|','$datetime'), `mip` = CONCAT (`mip`,'|','$_SERVER[REMOTE_ADDR]') where `id`= '$id' ";
        $result1 = mysqli_query($mysqli, $sql1) or trigger_error("Query Failed! SQL: $sql - Error: " . mysqli_error($mysqli));
        header("Location: slider.php?msg=3");
    } else {
        $resimg = trim($allurl, ',');
        $sql = "INSERT INTO `vdca_advertisement` (`title`,`addate`,`adimage`,  `cby`, `cdate`, `cip`)"
                . " VALUES ('$title',  '$eevdate','$resimg','$user','$datetime', '$_SERVER[REMOTE_ADDR]')";
        $result = mysqli_query($mysqli, $sql) or trigger_error("Query Failed! SQL: $sql - Error: " . mysqli_error($mysqli));
        header("Location: slider.php?msg=2");
    }
//    echo $sql;exit;
    $allurl = '';
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
        <meta name="description" content="VDCA Admin">
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
        </style>
    </head>

    <body>
        <?php include_once $prefix . 'include/header.php'; ?>
        <div class="pmd-sidebar-overlay"></div>
        <?php include_once $prefix . 'include/menubar.php'; ?>
        <div id="content" class="pmd-content inner-page">
            <div class="container-fluid full-width-container">
                <div class="section col-md-10 col-lg-offset-1 billinfo sp"> 	
                    <form id="validationForm" action="" method="post" enctype="multipart/form-data">
                        <div class="pmd-card pmd-z-depth" style="margin-top: 39px;">
                            <div class="card-head style-primary" style="background-color: #f3702b;height: 100%; padding: 18px; font-size: 18px;    color: aliceblue; font-weight: 900; text-align: center;">
                                <header class="head">Add Slider Images</header>
                            </div> 
                            <div class="pmd-card-body">                              
                                <div class="group-fields clearfix row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                            <label for="regular1" class="control-label">
                                                Image Title <sub style="color:red;font-size: 18px;">*</sub>
                                            </label>
                                            <input type="text" name="atitle" class="form-control" required tabindex="1" value="<?php
                                            if ($id) {
                                                echo $title;
                                            }
                                            ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group pmd-textfield ">
                                            <label for="regular1" class="control-label">
                                                Image Upload <sub style="color:red;font-size: 18px;">*</sub>
                                            </label>
                                            <input type="file"  name="image[id0][]" class="form-control requiredval"  tabindex="1"   accept="image/*" <?php
                                            if (!$id) {
                                                echo "required";
                                            }
                                            ?>>
                                                   <?php
                                                   if ($id) {
                                                       foreach ($imgupload as $value) {
                                                           ?><div class="img-wrap">
                                                        <span class="close">&times;</span>
                                                        <img  data-id='<?php echo $value; ?>' width="100px"  height="100px"src="<?php echo $value; ?>">
                                                    </div>             <?php } ?>
                                                <input id='getimges' name="imagesqe" type="text"  hidden="" value="<?php print_r($img1); ?>">
                                            <?php }
                                            ?>
                                        </div>
                                    </div>  
                                    <!--                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                                                <label for="regular1" class="control-label">Select Date</label>
                                                                                <input type="text" id="datetimepicker-default"  name="addate" class="form-control" value="<?php
//                                            if ($id) {
//                                                echo $datef;
//                                            }
                                    ?>" required>
                                                                            </div>
                                                                        </div>-->
                                </div>                               
                                <div class="group-fields clearfix row">

                                </div>    
                            </div>		
                            <div class="pmd-card-actions">
                                <button type="submit" class="btn btn-success next" tabindex="1" name="save"  style="float: right;">Upload</button>
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
            <section class="row component-section">
                <div class="col-lg-11 col-lg-offset-1 sp">
                    <div  class="pmd-card pmd-z-depth pmd-card-custom-view">
                        <div class="table-responsive">
                            <table id="example-checkbox" class="table pmd-table table-hover table-striped display responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                    <tr>                                            
                                        <th>S.No</th>
                                        <th>Actions</th>
                                        <th> Image Update Date </th>                                   
                                        <th>Image</th>
                                        <th>Image Title</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    $sql2 = "SELECT * FROM `vdca_advertisement` WHERE `active` = '0' ORDER BY `id` asc";
                                    $result2 = mysqli_query($mysqli, $sql2);
                                    while ($row2 = mysqli_fetch_assoc($result2)) {
                                        $id = $row2['id'];
                                        $advtitle = $row2['title'];
                                        $addate = $row2['addate'];
                                        $img = $row2['adimage'];
                                        $upload = explode(',', $img);
                                        ?>
                                        <tr>                                           
                                            <td><?php echo $i; ?></td>
                                            <td class="pmd-table-row-action">
                                                <a href="slider.php?editid=<?php echo $id; ?>" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-sm" title="Edit">
                                                    <i class="material-icons md-dark pmd-sm">edit</i>
                                                </a>
                                                <a href="slider.php?deleteid=<?php echo $id; ?>" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-sm" title="Delete" onclick="return confirm('Are you sure want to Delete?')">
                                                    <i class="material-icons md-dark pmd-sm">delete</i>
                                                </a>	  
                                                <a href="slider.php?inactive=<?php echo $id; ?>"><button type="button" class="btn btn-icon btn-rounded" style="background:#f44336;" data-toggle="tooltip" data-placement="top" onclick="return confirm('You are going to inactive?')"  data-original-title="Active now">In-Active</button></a>

                                            </td>
                                            <td><?php echo date('d-m-Y', strtotime($addate)); ?></td>                                         
                                            <td>
                                                <?php foreach ($upload as $imagename) { ?>
                                                    <img src="<?php echo $imagename; ?>" alt="No Image" height="50px"; width="50px">
                                                <?php } ?>
                                            </td>
                                            <td><?php echo $advtitle; ?></td>
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
          
            <?php include_once $prefix . 'include/js.php'; ?>
            <script>
<?php if ($msg == '2') { ?>
                    Command: toastr["success"]("Advertisement added sucesssfully", "Sucesss")
<?php } elseif ($msg == '1') {
    ?>
                    Command: toastr["error"]("Advertisement already exist", "Error")
<?php } elseif ($msg == '3') { ?>
                    Command: toastr["success"]("Advertisement Updated Sucesssfully", "Sucesss")
<?php } elseif ($msg == '4') { ?>
                    Command: toastr["success"]("Advertisement Deleted Sucesssfully", "Sucesss")
<?php } ?>

            </script>
            <script>
                var count = '<?php echo count($imgupload); ?>';
                if (count === '1') {
                    $(".close").hide();
                }
                $("document").ready(function () {
                    $(".requiredval").change(function () {
                        $(".close").show();
                    });
                });
                $(document).ready(function () {
                    $('.img-wrap .close').on('click', function () {
                        var id = $(this).closest('.img-wrap').find('img').data('id');
                        var imag = $("#getimges").val();
                        var elements = imag.split(',');
                        if (elements.length === 2) {
                            $(".close").hide();
                        }
                        $(this).closest('.img-wrap').find('img').remove();
                        $(this).remove();
                        $.post("slider.php",
                                {
                                    delete_images: id,
                                    img_array: imag,
                                },
                                function (data, status) {
                                    $("#getimges").val(data);
                                });
                    });
                });
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
