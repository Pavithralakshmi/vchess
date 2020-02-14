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

if (isset($_GET['inactive'])) {
    $inactive = $_GET['inactive'];
    $sql = "UPDATE `vdca_ratedplayer` SET `active` = '1' where id='$inactive'";
    $result = mysqli_query($mysqli, $sql);
    header("Location:../status/view_playersdb.php?msg=3");
}
if (isset($_GET['active'])) {
    $active = $_GET['active'];
    $sql = "UPDATE `vdca_ratedplayer` SET `active` = '0' where id='$active'";
    $result = mysqli_query($mysqli, $sql);
    header("Location:../status/view_playersdb.php?msg=3");
}

$msg = $cdate = $name = $dob = $fide_id = $father_name = $vdca_id = $tnsca = $id = $aicf = $city = $rating = $gender = '';
?>
<!doctype html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Vani Vidyalaya Admin">
        <meta content="width=device-width, initial-scale=1, user-scalable=no" name="viewport">
        <title>Virudhunagar District Chess Association  | Players' Database</title>
        <?php include_once $prefix . 'include/css.php'; ?>
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    </head>

    <body>
        <?php include_once $prefix . 'include/header.php'; ?>
        <div class="pmd-sidebar-overlay"></div>
        <?php include_once $prefix . 'include/menubar.php'; ?>
 
        <section class="row component-section">
            <div class="col-md-8 col-lg-offset-3 sp">
                                  <div class="pmd-card pmd-z-depth" style="margin-top: 120px;">
                            <div class="card-head style-primary" style="background-color: #f3702b;height: 100%; padding: 18px; font-size: 18px;    color: aliceblue; font-weight: 900; text-align: center;">
                                <header class="head">Inactive Rated Player's</header>
                            </div> 
                <div  class="pmd-card pmd-z-depth pmd-card-custom-view">
                    <div class="table-responsive">
                        <table id="example-checkbox" class="table pmd-table table-hover table-striped display responsive nowrap" cellspacing="0" width="100%">
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
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                $sql2 = "SELECT * FROM vdca_ratedplayer WHERE `active` = '1'  ORDER BY `id` desc";
                                $result2 = mysqli_query($mysqli, $sql2);
                                while ($row2 = mysqli_fetch_assoc($result2)) {
                                    $id = $row2['id'];
                                    $name = $row2['name'];
                                    $dob = $row2['dob'];
                                    $club = $row2['club'];
                                    $fide_id = $row2['fide_id'];
                                    $irtg = $row2['irtg'];
                                    $title = $row2['title'];
                                    ?>
                                      <tr>                                           
                                        <td><?php echo $i; ?></td>
                                        <td class="pmd-table-row-action noExl">
                                            <a href="view_ratedplayer.php?active=<?php echo $id; ?>"><button type="button" class="btn btn-icon btn-rounded" style="background:#f44336;" data-toggle="tooltip" data-placement="top" onclick="return confirm('You are going to inactive?')"  data-original-title="Active now">In-Active</button></a>
                                        </td>
                                        <td><?php echo $name; ?></td>
                                        <td><?php echo date('Y', strtotime($dob)); ?></td>
                                        <td><?php echo $club; ?></td>
                                        <td><?php echo $fide_id; ?></td>
                                        <td><?php echo $irtg; ?></td>
                                        <td><?php echo $title; ?></td>
                                        <!--<td><?php // echo $year;     ?></td>-->
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
        <?php include_once $prefix . 'include/js.php'; ?>
    </body>
</html>

