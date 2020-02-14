<?php
include 'db.php';
$current_file_name = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html class="no-js">
    <head>
        <title>Virudhunagar District Chess Association</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php include 'style.php'; ?>
        <style>

            @media screen and (max-width: 640px) {
                .aboutlg{
                    padding: 8px;
                    padding-top: 0;
                }
                #toTop:after {
                    font-size: 25px;
                }
                .owl-next{
                    background: #f3702b;
                    width: 35px;
                    height: 40px;
                }
                .owl-nav > div:after {
                    color: #eeeeef;
                }
                .owl-prev{
                    background: #f3702b;
                    width: 35px;
                    height: 40px;
                }
            }
            @media only screen and (min-width: 767px){
                .aboutlg{
                    padding: 38px;
                    padding-top: 0px;
                }
                #toTop:after {
                    font-size: 30px;
                }
                .owl-next{
                    background: #f3702b;
                }
                .owl-nav > div:after {
                    color: #eeeeef;
                    /*margin-left: 4px;*/
                    font-size: 25px;
                }
                .owl-prev{
                    background: #f3702b;
                }
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
                <section class="page_breadcrumbs ds background_cover section_padding_top_65 section_padding_bottom_65">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12  text-center" style="padding: 20px;background: rgba(0, 0, 0, 0.6); color: #fff;/*width: auto;*/">
                                <h2>About</h2>
                                <ol class="breadcrumb greylinks">
                                    <li> <a href="index.php">Home</a> </li>
                                    <li class="active">About</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="about" class="ls section_padding_top_110 columns_padding_30">
                    <div class="container">
                        <div class="row aboutlg">
                            <p style="text-align: justify; text-justify: inter-word;">Thirty eight years since inception, Virudhunagar District Chess Association has made an indelible impression in all the fields of chess, producing national and state champions, numerous rated players, organising international, national and state championships. The association was started at Rajapalayam and Sri NK Ramasuwamy Raja, Madras Chip Boards, Rajapalayam is the founder president. It moved to Sivakasi in 1980, after Sivakasi Chess Club hosted the 3rd Asian Junior Chess Championship. It never looked back and has produced many champions and rated players. Sivakasi Jaycees Matric & HSS has the unique distinction of teaching chess during the school hours to all classes even before 1995.
                            </p><br><p style="text-align: justify; text-justify: inter-word;">The reason for its success is the well knit team of office bearers, voluntary sponsors, efficient organisers, educational institutions supporting the cause of chess by training their wards and above all, motivated, co operating players, coaches and officials. Still, it realises that it has a long way to go and the journey does not stop here.</p>
                        </div>
                    </div>
                </section>
                <section class="ls section_padding_top_90 section_padding_bottom_110">
                    <div class="container">
                        <div class="row">
                            <h4 style="color:#e85242;"><center>Trophies from VDCA</center></h4>
                        </div>
                        <div class="row">
                            <div class="col-sm-12" data-animation="fadeInUp">
                                <div class="owl-carousel loop-colors" data-responsive-lg="3" data-dots="false" data-nav="true">
                                    <article class="vertical-item content-padding big-padding with_border bottom_color_border text-center">
                                        <div class="item-content">
                                            <header class="entry-header">
                                                <h3 class="entry-title small"> <a href=""><i class="fa fa-trophy"></i></a> </h3>
                                            </header>
                                            <p class="content-3lines-ellipsis"> N.P.S.S. Rathina Nadar Memorial trophy for the National Junior Chess Championship.</p>
                                        </div>
                                    </article>
                                    <article class="vertical-item content-padding big-padding with_border bottom_color_border text-center">
                                        <div class="item-content">
                                            <header class="entry-header">
                                                <h3 class="entry-title small"> <a href=""><i class="fa fa-trophy"></i></a> </h3>
                                            </header>
                                            <p class="content-3lines-ellipsis">N.R. Krishnama Raja trophy for the TN State U17 championship</p>
                                        </div>
                                    </article>
                                    <article class="vertical-item content-padding big-padding with_border bottom_color_border text-center">
                                        <div class="item-content">
                                            <header class="entry-header">
                                                <h3 class="entry-title small"> <a href=""><i class="fa fa-trophy"></i></a> </h3>
                                            </header>
                                            <p class="content-3lines-ellipsis">Arasan Fireworks Kalyanasundari Ammal trophy for TN State U15 championship for girls.</p>
                                        </div>
                                    </article>
                                    <article class="vertical-item content-padding big-padding with_border bottom_color_border text-center">
                                        <div class="item-content">
                                            <header class="entry-header">
                                                <h3 class="entry-title small"> <a href=""><i class="fa fa-trophy"></i></a> </h3>
                                            </header>
                                            <p class="content-3lines-ellipsis">Arasan Fireworks Kalyanasundari Ammal trophy for TN State U15 championship for girls.</p>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <?php include 'footer.php'; ?>
        </div>
        <?php include'js.php'; ?>
    </body>
</html>