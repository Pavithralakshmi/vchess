<?php
include_once "db.php";
$nid = $_GET['nid'];
?>

<!DOCTYPE html>
<html class="no-js">
    <head>
        <title>Virudhunagar District Chess Association</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php include 'style.php'; ?>
    </head>

    <body>
        <div class="preloader">
            <div class="preloader_image"></div>
        </div>

        <div id="canvas">
            <div id="box_wrapper">
                <?php include 'header.php'; ?>
                <section class="page_breadcrumbs ds background_cover section_padding_top_65 section_padding_bottom_65">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12  text-center" style="padding: 20px;background: rgba(0, 0, 0, 0.6); color: #fff;/*width: auto;*/">
                                <h2>News & Events </h2>
                                <ol class="breadcrumb greylinks">
                                    <li> <a href="index.php">Home</a> </li>
                                    <li class="active">News & Events </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="about" class="ls section_padding_top_110 columns_padding_30">
                    <div class="container">
                        <div class="row">
                            <?php
                            extract($_REQUEST);
                            $select_linkcat = mysqli_query($mysqli, "select * from vdca_event where id='$nid'");
                            while ($fet_cat = mysqli_fetch_array($select_linkcat)) {
                                ?>
                                <center><a href=""> <h3 style="color:red;"><?php echo $fet_cat['title']; ?></h3></a></center><br />
                                <h5 style="padding-left: 50px;"><?php echo $fet_cat['description']; ?> </h5>
                            <?php } ?></td>
                        </div>
                    </div>
                </section>
            </div>
            <?php include 'footer.php'; ?>
        </div>
        <?php include'js.php'; ?>
    </body>
</html>