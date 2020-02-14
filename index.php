<?php
include 'db.php';
$current_file_name = basename($_SERVER['PHP_SELF']);
$cdate = date('Y-m-d');
?>

<!DOCTYPE html>
<html class="no-js">
    <head>
        <title>Virudhunagar District Chess Association</title>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <?php include 'style.php'; ?>
        <style>
            @media screen and (max-width: 640px) {
                .sliderlg{
                    /*width: 100%;*/
                    height: 400px;
                }

                .cardpad{
                    /*width: 100%;*/
                    /*padding: 0;*/
                    font-size: 15px;
                }
                .cardpad{
                    /*width: 100%;*/
                    /*padding: 0;*/
                    font-size: inherit;
                }
                #toTop:after {
                    font-size: 25px;
                }
            }
            @media only screen and (min-width: 767px){
                .sliderlg{
                    /*width: 60%;*/
                }
                .iconelink{
                    /*width: 60%;*/
                    margin-left: 78px;
                }
                #toTop:after {
                    font-size: 30px;
                }
            }
            .all-scr-cover .slide-image-wrap {
                position: absolute;
                top: 30px;
                bottom: 0;
                left: 0;
                right: 0;
                background-size: cover;
                background-position: center;
            }
        </style>
    </head>

    <body>
        <div class="preloader">
            <div class="preloader_image"></div>
        </div>
        <div id="canvas">
            <div id="box_wrapper">
                <?php include 'header.php'; ?>
                <section class="intro_section page_mainslider ds1 all-scr-cover bottom-overlap-teasers" >
                    <?php
                    $i = 1;
                    $sql22 = "SELECT * FROM vdca_event   WHERE `datee` >= '$cdate' and `checkit`='checked' and  `active` != '1'  ORDER BY `datee` asc";
                    $result22 = mysqli_query($mysqli, $sql22);
                    if (mysqli_num_rows($result22) > 0) {
                        ?>
                        <marquee behavior="scroll" direction="left" style="background: #d9d9ff;margin: 15px;height: 38px;">
                            <?php
                            while ($row22 = mysqli_fetch_assoc($result22)) {
                                $cdate = date('Y-m-d');
                                $nid = $row22['id'];
                                $event = $row22['title'];
                                $edate = $row22['datetime'];
                                $date1 = strtotime($edate);
                                $date = date('d-M-Y', $date1);
                                $datee = $row22['datee'];
                                $datee = strtotime($datee);
                                $datee = date('d-M-Y', $datee);
                                $desc = $row22['description'];
                                $checkit = $row22['checkit'];
                                $img = $row22['image'];
                                $upload = explode(',', $img);
                                ?>
                                <a href=" news.php?nid=<?php echo $nid; ?>"> 
                                    <span class="h3" style="    line-height: normal;color: black;"><?php echo $event . " on (" . $date . ")  &#9873; &#9873;"; ?>
                                    </span> 
                                </a>
                                <?php
                                $i++;
                            }
                            ?>
                        </marquee>
                    <?php } ?>
                    <div class="col-lg-7">

                        <div class="flexslider" data-dots="true" data-nav="true">
                            <ul class="slides sliderlg" style="height: 30%;">
                                <?php
                                $i = 1;
                                $sql2 = "SELECT * FROM `vdca_advertisement` where `active` = '0'  ORDER BY `id` DESC";
                                $result2 = mysqli_query($mysqli, $sql2);
                                while ($row2 = mysqli_fetch_assoc($result2)) {
                                    $id = $row2['id'];
                                    $advtitle = $row2['title'];
                                    $addate = date('d-m-Y', strtotime($row2['addate']));
                                    $img = $row2['adimage'];
                                    $upload = explode(',', $img);
                                    ?>

                                    <li>
                                    <marquee  direction="left"   style=" background: rgba(0, 0, 0, 0.6);"  onmouseout="this.start();" onmouseover="this.stop();"><p style="color: #ffffff;font-size: 15px;"><?php echo $advtitle; ?></p> </marquee> 
                                    <div class="slide-image-wrap"> 
                                        <?php foreach ($upload as $imagename) { ?>
                                            <img style="width: 582px;height: 441px;" src="<?php echo 'admin/master/' . $img; ?>" alt="No Image" height="50px" width="50px">
                                        <?php } ?> 
                                    </div>  
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-12 text-center">
                                                <div class="slide_description_wrapper">
                                                    <div class="slide_description">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </li>

                                    <?php
                                    $i++;
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2" style="text-align: center;">
                        <div class=" hidden-xs" style="padding-top: 53px;"> <a href="ofcb.php" class="theme_button color2 " style="width: 187px;"> Office Bearers  </a> </div>
                        <div class=" hidden-xs"> <a href="coaches.php" class="theme_button color3 " style="width: 187px;">Coaches</a> </div>
                        <div class="hidden-xs"> <a href="arbiterpro.php" class="theme_button color1 "style="    width: 188px;">Arbiter's Profile</a> </div>
                        <div class=" hidden-xs"> <a href="playerpro.php" class="theme_button color4 " style="    width: 190px;">Player's Profiles </a> </div>
                        <div class=" hidden-xs"> <a href="ratedplayer.php" class="theme_button color5" style="width: 189px;">Rated Player's</a> </div>
                    </div>
                    <div class="col-lg-3 cardpad" >
                        <div class="w3-card-4" style="height: 400px;">
                            <header class="w3-container w3-blue">
                                <h5 style="padding: 18px;" class="section_header color4">News and Updates</h5>
                            </header>
                            <div class="w3-container">
                                <marquee direction="up" scrollamount="4" scrolldelay="0" behavior="scroll" onmouseover="this.stop();" onmouseout="this.start();" height="320">
                                    <?php
                                    $i = 1;
                                    $sql2 = "SELECT * FROM vdca_event   WHERE `datee` >= '$cdate' and `checkit`!='checked' and  `active` != '1'  ORDER BY `datetime` asc";
//                                    echo"$sql2";
                                    $result2 = mysqli_query($mysqli, $sql2);
                                    while ($row2 = mysqli_fetch_assoc($result2)) {
                                        $cdate = date('Y-m-d');
                                        $nid = $row2['id'];
                                        $event = $row2['title'];
                                        $edate = $row2['datetime'];
                                        $date1 = strtotime($edate);
                                        $date = date('d-M-Y', $date1);
                                        $desc = $row2['description'];
                                        $img = $row2['image'];
                                        $upload = explode(',', $img);
                                        ?>
                                        <div class="section-excerpt cardpad">
                                            <i class="fa fa-calendar orange-text" aria-hidden="true"></i>
                                            <span style="text-align: justify; text-justify: inter-word;color: #ec2222;"><?php echo $date; ?> </span>
                                            <a href=" news.php?nid=<?php echo $nid; ?>">
                                                <p class="section-excerpt cardpad1" style="text-align: justify; text-justify: inter-word;color: black;font-size: large;"><?php echo $event; ?></p>
                                            </a>
                                        </div><br>
                                        <?php
                                        $i++;
                                    }
                                    ?>
                                </marquee>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="services" class="ls section_intro_overlap columns_padding_0 columns_margin_0 container_padding_0">
                    <div class="container-fluid" style="position:inherit;">
                        <div class="row flex-wrap v-center-content">
                            <div class="col-lg-3 col-sm-6 col-xs-12 to_animate" data-animation="fadeInUp">
                                <div class="teaser main_bg_color transp with_padding big-padding margin_0">
                                    <div class="media xxs-media-left">
                                        <div class="media-left media-middle">
                                            <div class="teaser_icon size_small round light_bg_color thick_border_icon big_wrapper"> <i class="fa fa-twitter highlight" aria-hidden="true" style="padding-top: 10px;"></i> </div>
                                        </div>
                                        <div class="media-body media-middle">
                                            <h4><a href="#0">Virudhunagar District Chess Association</a></h4>
                                            <!--<p>Virudhunagar District Chess Association</p>-->
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 col-xs-12 to_animate" data-animation="fadeInUp">
                                <div class="teaser main_bg_color3 transp with_padding big-padding margin_0">
                                    <div class="media xxs-media-left">
                                        <div class="media-left media-middle">
                                            <div class="teaser_icon size_small round light_bg_color thick_border_icon big_wrapper"> <i class="fa fa-phone highlight3" aria-hidden="true" style="padding-top: 10px;"></i> </div>
                                        </div>
                                        <div class="media-body media-middle">
                                            <!--<h4><a href="#0">Ph: +91 944331 55852</a></h4>-->
                                            <p>+91 94870 51730<br>vdcachess@gmail.com</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-xs-12 to_animate" data-animation="fadeInUp">
                                <div class="teaser main_bg_color2 transp with_padding big-padding margin_0">
                                    <div class="media xxs-media-left">
                                        <div class="media-left media-middle">
                                            <div class="teaser_icon size_small round light_bg_color thick_border_icon big_wrapper"> <i class="fa fa-calendar orange-text highlight2" aria-hidden="true" style="padding-top: 10px;"></i> </div>
                                        </div>
                                        <div class="media-body media-middle">
                                            <!--<h4><a href="#0">58, Mundaga Nadar Street,Sivakasi – 626 123,Tamil Nadu.</a></h4>-->
                                            <p><a href="event.php" style="color:white;">Events so far</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-xs-12 to_animate" data-animation="fadeInUp">
                                <div class="teaser main_bg_color4 transp with_padding big-padding margin_0">
                                    <div class="media xxs-media-left">
                                        <div class="media-left media-middle">
                                            <div class="teaser_icon size_small round light_bg_color thick_border_icon big_wrapper"> <i class="fa fa-download highlight4" aria-hidden="true" style="padding-top: 10px;"></i> </div>
                                        </div>
                                        <div class="media-body media-middle">
                                            <!--<h4><a href="#0">vdcachess@gmail.com</a></h4>-->
                                            <p><a href="filesdownload.php" style="color:white;">Download Files</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="col-sm-12 topmargin_30">
                    <div class="loop-colors">
                        <article class="post format-small-image to_animate" data-animation="fadeInRight">
                            <div class="side-item side-md content-padding big-padding with_border bottom_color_border right">
                                <div class="row">
                                    <div class="col-md-5 col-lg-4">
                                        <div class="item-media entry-thumbnail"> <img src="images/IA Anantharam with Anand drawing his number in the opening ceremony of Tata Steel Chess 2019 tournament.jpg" alt=""> </div>
                                    </div>
                                    <div class="col-md-7 col-lg-8">
                                        <div class="item-content">
                                            <header class="entry-header">
                                                <h3 class="entry-title small"> <a href="blog-single-right.html" rel="bookmark">Welocome To VDCA</a> </h3>
                                            </header>
                                            <div class="entry-content">
                                                <p><span style="padding-left:12px;">Thirty eight years since inception,</span> Virudhunagar District Chess Association has made an indelible impression in all the fields of chess, producing national and state champions, numerous rated players, organising international, national and state championships. The association was started at Rajapalayam and Sri NK Ramasuwamy Raja, Madras Chip Boards, Rajapalayam is the founder president. It moved to Sivakasi in 1980,.....</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                <br>
                <section id="services" class="ls section_intro_overlap columns_padding_0 columns_margin_0 container_padding_0">
                    <div class="container-fluid" style="position:inherit;">
                        <div class="row flex-wrap v-center-content">
                            <div class="col-lg-3 col-sm-6 col-xs-12 to_animate iconelink" data-animation="fadeInUp">
                                <div class="teaser main_bg_color transp with_padding big-padding margin_0">
                                    <div class="media xxs-media-left">
                                        <div class="media-left media-middle">
                                            <div class="teaser_icon size_small round light_bg_color thick_border_icon big_wrapper"><img src="images/tamil_chess_logo.jpg" width="127" height="109" border="0"> </div>
                                        </div>
                                        <div class="media-body media-middle">
                                            <p style="color: #fdf9f9;"><a href="http://www.tamilchess.com/" target="_blank" style="color:white;">Tamil Nadu State Chess Assocition (TNCA)</a></p>
                                            <!--<p>Virudhunagar District Chess Association</p>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-xs-12 to_animate iconelink" data-animation="fadeInUp">
                                <div class="teaser main_bg_color4 transp with_padding big-padding margin_0">
                                    <div class="media xxs-media-left">
                                        <div class="media-left media-middle">
                                            <div class="teaser_icon size_small round light_bg_color thick_border_icon big_wrapper"> <img src="images/indian_chess_logo.jpg" width="131" height="109" border="0"></div>
                                        </div>
                                        <div class="media-body media-middle">
                                            <!--<h4><a href="http://aicf.in/" target="_blank">All India Chess Federation</a></h4>-->
                                            <p><a href="http://aicf.in/" target="_blank" style="color:white;">All India Chess Federation (AICF)</a></p>
                                            <!--<p>Download Files</p>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-xs-12 to_animate iconelink" data-animation="fadeInUp">
                                <div class="teaser main_bg_color2 transp with_padding big-padding margin_0">
                                    <div class="media xxs-media-left">
                                        <div class="media-left media-middle">
                                            <div class="teaser_icon size_small round light_bg_color thick_border_icon big_wrapper"> <img src="images/fide_logo.jpg" width="126" height="109" border="0"></div>
                                        </div>
                                        <div class="media-body media-middle">
                                            <!--<h4><a href="#0">58, Mundaga Nadar Street,Sivakasi – 626 123,Tamil Nadu.</a></h4>-->
                                            <p><a href="http://www.fide.com/" target="_blank" style="color:white;">World Chess Federation (FIDE)</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <br>
                <section id="events" class="ls section_padding_top_110">
                    <div class="">
                        <div class="row">
                            <?php
                            $i = 1;
                            $id = $advtitle = $addate = $img = $upload = Array();
                            $sql21 = "SELECT * FROM `vdca_advertisement` WHERE `active` = '0' ORDER BY `id` DESC limit 4";
                            $result21 = mysqli_query($mysqli, $sql21);
                            while ($row2 = mysqli_fetch_assoc($result21)) {
                                $id[] = $row2['id'];
                                $advtitle[] = $row2['title'];
                                $addate[] = $row2['addate'];
                                $img[] = $row2['adimage'];
                            }
                            ?>
                            <div class="col-xs-12 bottommargin_0 to_animate" data-animation="fadeInUp">
                                <div class="row masonry-feed columns_padding_1">
                                    <div class="col-xs-12 col-md-3">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6 col-md-12">
                                                <div class="vertical-item content-absolute text-center ds">
                                                    <?php $imgval = explode(",", $img[0]); ?>
                                                    <a href="slider_img.php"> <div class="item-media"><img  src="<?php echo 'admin/master/' . $imgval[0]; ?>" alt="No Image" style="width: 293px; height:195px;">
                                                        </div></a>
                                                    <div class="item-content darken_gradient">
                                                        <h3 class="entry-title" style="background: rgba(0, 0, 0, 0.6); color: #fff;"> <a href="slider_img.php"><?php echo $advtitle[0]; ?></a> </h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-md-12">
                                                <div class="vertical-item content-absolute text-center ds">
                                                    <?php
                                                    $imgval1 = explode(",", $img[1]);
                                                    ?>
                                                    <a href="slider_img.php"><div class="item-media"> <img  src="<?php echo 'admin/master/' . $imgval1[0]; ?>"  alt="No Image" style="width: 293px; height: 195px;"> </div></a>
                                                    <div class="item-content darken_gradient">
                                                        <h3 class="entry-title" style="background: rgba(0, 0, 0, 0.6); color: #fff;">  <a href="slider_img.php" ><?php echo $advtitle[1]; ?></a> </h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-6">
                                        <div class="vertical-item closest-event content-absolute text-center ds">
                                            <div class="item-media"> <img src="images/gallery/04.png" alt="" style="height: 391px;"> </div>
                                            <div class="item-content darken_gradient">
                                                <!-- <div id="comingsoon-countdown" data-count-to="March 6, 2018 15:00:00 GMT-05:00" data-format="DHM"></div> -->
                                                <!--<div id="comingsoon-countdown" data-format="DHMS"></div>-->
                                                <!--<h3 class="entry-title"> <a href="gallery.php"> All-Day Happy Hour</a> </h3>-->
                                                <div class=" hidden-xs" style="width: 188px;margin-left: -22px;margin-bottom: -61px;"> <a href="slider_img.php" class="theme_button color4 " >Gallery</a> </div>
                                                <div class="hidden-xs" style="width: 188px;margin-left: 376px;"> <a href="event.php" class="theme_button" style="background:#4ec131;">Events </a> </div>
                        <div class="entry-meta inline-content"> <span style="font-size:18px;    letter-spacing: 1px;background: rgba(0, 0, 0, 0.6); color: #fff;">
                                                        <i class="fa fa-map-marker highlight4 rightpadding_5" aria-hidden="true"></i>
                                                        58, Mundaga Nadar Street, Sivakasi – 626 123, Tamil Nadu.
                            </span> <span style="font-size:16px;background: rgba(0, 0, 0, 0.6); color: #fff;">
                                                        <i class="fa fa-phone -o highlight4 rightpadding_5" aria-hidden="true"></i>
                                                       <a href="tel:94870 51730">+91 94870 51730</a>
                                                    </span> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-3">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6 col-md-12">
                                                <div class="vertical-item content-absolute text-center ds">
                                                    <?php $imgval = explode(",", $img[2]); ?>
                                                    <a href="slider_img.php"><div class="item-media"> <a href="slider_img.php"><img  src="<?php echo 'admin/master/' . $imgval[0]; ?>" alt="No Image" style="width: 293px; height: 195px;"></div></a>
                                                            <div class="item-content darken_gradient">
                                                                <h3 class="entry-title" style="background: rgba(0, 0, 0, 0.6); color: #fff;">  <a href="slider_img.php"><?php echo $advtitle[2]; ?></a> </h3>
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-6 col-md-12">
                                                    <div class="vertical-item content-absolute text-center ds">
                                                        <?php $imgval = explode(",", $img[3]); ?>
                                                        <a href="slider_img.php"><div class="item-media"> <img  src="<?php echo 'admin/master/' . $imgval[0]; ?>" alt="No Image" style="width: 293px; height: 195px;"></div></a>
                                                        <div class="item-content darken_gradient">
                                                            <h3 class="entry-title" style="background: rgba(0, 0, 0, 0.6); color: #fff;">  <a href="slider_img.php"><?php echo $advtitle[3]; ?></a> </h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </section>
                <?php include 'footer.php'; ?>
            </div>
        </div>
        <?php include 'js.php'; ?>
    </body>
</html>