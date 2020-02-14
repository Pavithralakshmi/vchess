<?php include 'db.php'; ?>

<!DOCTYPE html>
<html class="no-js">
    <head>
        <title>Virudhunagar District Chess Association</title>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">  
        <?php include 'style.php'; ?>
        <style>
            .gallery-wrap {
                display: -ms-flexbox;
                display: flex;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                margin-bottom: -20px
            }

            .gallery-wrap .gallery-card {
                padding: 0 15px;
                width: 25%
            }

            .gallery-wrap a {
                position: relative;
                overflow: hidden;
                display: block;
                border-radius: 15px
            }

            @media (max-width: 1920px) {
                .gallery-wrap a {
                    margin-bottom: 30px
                }
            }

            @media (max-width: 1600px) {
                .gallery-wrap a {
                    margin-bottom: 30px
                }
            }

            @media (max-width: 1440px) {
                .gallery-wrap a {
                    margin-bottom: 30px
                }
            }

            @media (max-width: 1199px) {
                .gallery-wrap a {
                    margin-bottom: 30px
                }
            }

            @media (max-width: 991px) {
                .gallery-wrap a {
                    margin-bottom: 25px
                }
            }

            @media (max-width: 767px) {
                .gallery-wrap a {
                    margin-bottom: 20px
                }
            }

            @media (max-width: 480px) {
                .gallery-wrap a {
                    margin-bottom: 20px
                }
            }

            .gallery-wrap a:hover .hide-desc {
                visibility: visible;
                opacity: 1;
                -ms-transform: translateY(0px);
                transform: translateY(0px)
            }

            .gallery-wrap a.color-1 .hide-desc::after {
                background: #5255c5
            }

            .gallery-wrap a.color-2 .hide-desc::after {
                background: #5dba3b
            }

            .gallery-wrap a.color-3 .hide-desc::after {
                background: #ff8b00
            }

            .gallery-wrap a.color-4 .hide-desc::after {
                background: #ff5157
            }

            .gallery-wrap a.color-5 .hide-desc::after {
                background: #ffc000
            }

            .gallery-wrap a img {
                border-radius: 15px
            }

            .gallery-wrap a .hide-desc {
                position: absolute;
                top: 0;
                left: 0;
                z-index: 10;
                display: -ms-flexbox;
                display: flex;
                -ms-flex-direction: column;
                flex-direction: column;
                -ms-flex-align: center;
                align-items: center;
                -ms-flex-pack: center;
                justify-content: center;
                visibility: hidden;
                width: 100%;
                height: 100%;
                margin-bottom: 0;
                color: #fff;
                opacity: 0;
                -ms-transform: translateY(200px);
                transform: translateY(200px);
                transition: all .5s
            }

            .gallery-wrap a .hide-desc::before {
                /*                content: '\f19f';
                                font-family: "Material Design Icons";*/
                margin-bottom: 10px;
                font-size: 48px;
                line-height: 1
            }

            .gallery-wrap a .hide-desc::after {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                z-index: -1;
                width: 100%;
                height: 100%;
                background: #5dba3b;
                opacity: .95
            }

            @media (max-width: 991px) {
                .gallery-wrap .gallery-card {
                    width: 33.33%
                }
                .gallery-wrap .gallery-card a {
                    display: block;
                    margin-left: auto;
                    margin-right: auto
                }
            }

            @media (max-width: 767px) {
                .gallery-wrap .gallery-card {
                    width: 50%
                }
                .gallery-wrap a .hide-desc {
                    font-size: 16px
                }
                .gallery-wrap a .hide-desc::before {
                    font-size: 26px;
                    margin-bottom: 5px
                }
            }

            @media (max-width: 480px) {
                .gallery-wrap {
                    margin-bottom: -10px
                }
            }

            @media (max-width: 1920px) {
                .gallery-page .gallery-content {
                    padding-top: 50px
                }
            }

            @media (max-width: 1600px) {
                .gallery-page .gallery-content {
                    padding-top: 50px
                }
            }

            @media (max-width: 1440px) {
                .gallery-page .gallery-content {
                    padding-top: 50px
                }
            }

            @media (max-width: 1199px) {
                .gallery-page .gallery-content {
                    padding-top: 45px
                }
            }

            @media (max-width: 991px) {
                .gallery-page .gallery-content {
                    padding-top: 40px
                }
            }

            @media (max-width: 767px) {
                .gallery-page .gallery-content {
                    padding-top: 30px
                }
            }

            @media (max-width: 480px) {
                .gallery-page .gallery-content {
                    padding-top: 30px
                }
            }

            @media (max-width: 1920px) {
                .gallery-page .gallery-content {
                    padding-bottom: 50px
                }
            }

            @media (max-width: 1600px) {
                .gallery-page .gallery-content {
                    padding-bottom: 50px
                }
            }

            @media (max-width: 1440px) {
                .gallery-page .gallery-content {
                    padding-bottom: 50px
                }
            }

            @media (max-width: 1199px) {
                .gallery-page .gallery-content {
                    padding-bottom: 45px
                }
            }

            @media (max-width: 991px) {
                .gallery-page .gallery-content {
                    padding-bottom: 40px
                }
            }

            @media (max-width: 767px) {
                .gallery-page .gallery-content {
                    padding-bottom: 30px
                }
            }

            @media (max-width: 480px) {
                .gallery-page .gallery-content {
                    padding-bottom: 30px
                }
            }

            @media (max-width: 1920px) {
                .gallery-page .gallery-content .container {
                    padding-top: 50px
                }
            }

            @media (max-width: 1600px) {
                .gallery-page .gallery-content .container {
                    padding-top: 50px
                }
            }

            @media (max-width: 1440px) {
                .gallery-page .gallery-content .container {
                    padding-top: 50px
                }
            }

            @media (max-width: 1199px) {
                .gallery-page .gallery-content .container {
                    padding-top: 45px
                }
            }

            @media (max-width: 991px) {
                .gallery-page .gallery-content .container {
                    padding-top: 40px
                }
            }

            @media (max-width: 767px) {
                .gallery-page .gallery-content .container {
                    padding-top: 30px
                }
            }

            @media (max-width: 480px) {
                .gallery-page .gallery-content .container {
                    padding-top: 30px
                }
            }

            @media (max-width: 1920px) {
                .gallery-page .gallery-content .container {
                    padding-bottom: 50px
                }
            }

            @media (max-width: 1600px) {
                .gallery-page .gallery-content .container {
                    padding-bottom: 50px
                }
            }

            @media (max-width: 1440px) {
                .gallery-page .gallery-content .container {
                    padding-bottom: 50px
                }
            }

            @media (max-width: 1199px) {
                .gallery-page .gallery-content .container {
                    padding-bottom: 45px
                }
            }

            @media (max-width: 991px) {
                .gallery-page .gallery-content .container {
                    padding-bottom: 40px
                }
            }

            @media (max-width: 767px) {
                .gallery-page .gallery-content .container {
                    padding-bottom: 30px
                }
            }

            @media (max-width: 480px) {
                .gallery-page .gallery-content .container {
                    padding-bottom: 30px
                }
            }

            @media (max-width: 1920px) {
                .gallery-page .gallery-content .gallery-wrap {
                    margin-bottom: -30px
                }
            }

            @media (max-width: 1600px) {
                .gallery-page .gallery-content .gallery-wrap {
                    margin-bottom: -30px
                }
            }

            @media (max-width: 1440px) {
                .gallery-page .gallery-content .gallery-wrap {
                    margin-bottom: -30px
                }
            }

            @media (max-width: 1199px) {
                .gallery-page .gallery-content .gallery-wrap {
                    margin-bottom: -30px
                }
            }

            @media (max-width: 991px) {
                .gallery-page .gallery-content .gallery-wrap {
                    margin-bottom: -25px
                }
            }

            @media (max-width: 767px) {
                .gallery-page .gallery-content .gallery-wrap {
                    margin-bottom: -20px
                }
            }

            @media (max-width: 480px) {
                .gallery-page .gallery-content .gallery-wrap {
                    margin-bottom: -20px
                }
            }

            .gallery-page .gallery-content .gallery-wrap .gallery-card {
                width: 33.33%
            }

            @media (max-width: 480px) {
                .gallery-page .gallery-content .gallery-wrap .gallery-card {
                    width: 50%
                }
            }
        </style>
        <style type="text/css">
            .lcl_fade_oc.lcl_pre_show #lcl_overlay,
            .lcl_fade_oc.lcl_pre_show #lcl_window,
            .lcl_fade_oc.lcl_is_closing #lcl_overlay,
            .lcl_fade_oc.lcl_is_closing #lcl_window {
                opacity: 0 !important;
            }
            .lcl_fade_oc.lcl_is_closing #lcl_overlay {
                -webkit-transition-delay: .15s !important; 
                transition-delay: .15s !important;
            }
        </style>
        <script src="lib/jquery.js" type="text/javascript"></script>
        <script src="js/lc_lightbox.lite.js" type="text/javascript"></script>
        <link rel="stylesheet" href="css/lc_lightbox.css" />
        <link rel="stylesheet" href="skins/minimal.css" />
        <script src="lib/AlloyFinger/alloy_finger.min.js" type="text/javascript"></script>
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
                                <ol class="breadcrumb greylinks">
                                    <li> <a href="index.php">Home</a> </li>
                                    <li> <a href="gallery.php">Gallery</a> </li>
                                    <li class="active">Slider Images</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="about" class="ls section_padding_top_110 columns_padding_30">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">                            
                                <div class="gallery-wrap">
                                    <?php
                                    $sql = "select * from `vdca_advertisement` WHERE `active` = '0'  ORDER BY id DESC ";
                                    $result = mysqli_query($mysqli, $sql);
                                    while ($row = mysqli_fetch_array($result)) {
                                        $title = $row['title'];
                                        $date = $row['addate'];
                                        $image = explode(",", $row['adimage']);
                                        $cby = $row['cby'];
                                        $cdate = $row['cdate'];
                                        $cip = $row['cip'];
                                        $mby = $row['mby'];
                                        $mdate = $row['mdate'];
                                        $mip = $row['mip'];
                                        ?>
                                        <div class="gallery-card">
                                            <a href="admin/master/<?php echo $image[0]; ?>" class="color-2 rest" data-lcl-txt="<?php echo $title;?>"  data-lcl-thumb="admin/master/<?php echo $image[0]; ?>">
                                                <img src="admin/master/<?php echo $image[0]; ?>"alt="gallery" style="width: 100%;height: 170px;">
                                                <span class="hide-desc h5">View</span> 
                                                <h5 style="font-size: 14px;word-break: break-word; text-align: justify; margin-left: 4px;color: #cd3232;"><?php echo $title; ?></h5>
                                            </a>                            
                                        </div>
                                        <!--                                        <div class="content">
                                                                                    <a class="elem" href="slider_img.php?id=<?php // echo $row['id'];  ?>" title="image 1" data-lcl-txt="lorem ipsum dolor sit amet" data-lcl-author="someone" data-lcl-thumb="admin/master/<?php // echo $image[0];  ?>">
                                                                                        <span style="background-image: url(admin/master/<?php // echo $image[0];  ?>);"></span>
                                                                                    </a>
                                                                                </div>-->
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <?php include 'footer.php'; ?>
        </div>
        <?php include'js.php'; ?>
        <script type="text/javascript">
            $(document).ready(function (e) {

                // live handler
                lc_lightbox('.rest', {
                    wrap_class: 'lcl_fade_oc',
                    gallery: true,
                    thumb_attr: 'data-lcl-thumb',

                    skin: 'minimal',
                    radius: 0,
                    padding: 0,
                    border_w: 0,
                });

            });
        </script>
    </body>
</html>