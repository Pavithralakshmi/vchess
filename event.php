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
            td{
                font-weight: 600;
            }
            .responsive-card-table {
                border-collapse: collapse;
            }

            .responsive-card-table.unstriped tbody {
                background-color: transparent;
            }

            .responsive-card-table th {
                /*background-color: #72bf50;*/
                background-color:#E47D46;
            }

            .responsive-card-table tr,
            .responsive-card-table th,
            .responsive-card-table td {
                border: 1px solid #0a0a0a;
            }
            #toTop:after {
                font-size: 30px;
            }
            @media screen and (max-width: 640px) {
                .responsive-card-table th{
                    width: 400px;
                }
            }


            @media screen and (max-width: 640px) {
                .responsive-card-table {

                }
                .responsive-card-table thead tr {
                    position: absolute;
                    top: -9999em;
                    left: -9999em;
                }
                .responsive-card-table tr {
                    border: 1px solid #0a0a0a;
                    display: block;
                }
                .responsive-card-table tr + tr {
                    margin-top: 1.5rem;
                }
                .responsive-card-table td {
                    border: none;
                    display: -webkit-flex;
                    display: -ms-flexbox;
                    display: flex;
                    -webkit-justify-content: flex-start;
                    -ms-flex-pack: start;
                    justify-content: flex-start;
                    -webkit-align-items: center;
                    -ms-flex-align: center;
                    align-items: center;
                    border-bottom: 1px solid #0a0a0a;
                    padding-left: 50%;
                    position: relative;
                }
                .responsive-card-table td:before {
                    content: attr(data-label);
                    display: inline-block;
                    font-weight: 600;
                    line-height: 1.5;
                    /*margin-left: -100%;*/
                    width: 100%;
                    position: relative;
                    z-index: 1;
                }
                .responsive-card-table td:after {
                    content: '';
                    position: absolute;
                    background: #e6e6e6;
                    width: 35%;
                    height: 95%;
                    left: 1px;
                    top: 1px;
                    z-index: 0;
                }
                #toTop:after {
                    font-size: 25px;
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
                                <h2>Events</h2>
                                <ol class="breadcrumb greylinks">
                                    <li> <a href="index.php">Home</a> </li>
                                    <li class="active">Events</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="about" class="ls section_padding_top_110 columns_padding_30">
                    <div class="container" style="padding-top: 35px;">
                        <div class="row" >
                            <center><h4 style="font-size: 21px; font-weight: 900;color: #20b38a;">Important Events Organised by Virudhunagar DCA</h4></center>
                        </div>
                        <div class="">
                            <div class="col-12">
                                <h4 style="color: red;font-size: 18px;font-weight: bold;    padding-bottom: 10px;">Main Sponsors for our important events</h4>
                                <p style="text-align: justify; text-justify: inter-word;">We thank all our sponsors and supporters, keeping the flag of our district flying high. Some names may be missing here, but their contribution to develop chess in our district is not in any way less.</p>
                                <ul style="padding-left: 54px; padding-right: 32px;">
                                    <li style=" list-style-type: square;"><p style="text-align: justify; text-justify: inter-word;"> N.P.S.S. Rathina Nadar: Pioneer of Virudhunagar district chess, Sri Rathina Nadar organised the Asian Junior Chess championship single handed in 1979. Every week end, he brought players from Madurai at his own expense to train our youngsters. An ardent lover of chess, Rathina Nadar was never tired to get involved into chess.</p></li>
                                    <li style=" list-style-type: square;"><p style="text-align: justify; text-justify: inter-word;"> Sri. NK Ramasuwamy Raja, Rajapalayam, as the first president of our district made enormous efforts to promote chess in our district. With support from Rajapalayam Mills, he organised two men state championships. His nephew, Mr. P.R. Venketrama Raja is a tower of strength to Tamil Nadu State Chess Associaition. As the president of our state association, he is doing a yeoman service to chess.</p></li>
                                    <li style=" list-style-type: square;"><p style="text-align: justify; text-justify: inter-word;"> Arasan Fireworks, Sivakasi - Mr. G. Ramamoorthy is the man behind most of the tournaments held at Sivakasi in the nineties.</p></li>
                                    <li style=" list-style-type: square;"><p style="text-align: justify; text-justify: inter-word;"> T.P. Textiles, Rajapalayam - Under this banner, Mr. A. Gopalsamy has organised all the tournaments organised by Rajapalayam Chess Club in this millennium. He is interested in taking chess to the villages, encouraging the children of his school to learn the game. He has also conducted many tournaments in his school, situated in a rural area.</p></li>
                                    <li style=" list-style-type: square;"><p style="text-align: justify; text-justify: inter-word;"> Sri Kaliswari Fireworks - Mr. A.P. Selvarajan has been instrumental in Sivakasi Chess Club organising all the three national championships in our district, in addition to coaching camps, state championships, rapid rating tournament etc.</p></li>
                                    <li style=" list-style-type: square;"><p style="text-align: justify; text-justify: inter-word;"> Sri Ramalinga Mills, Aruppukottai - If Aruppukottai has witnessed state championships, it is due the chess lover Sri. T.R. Dhinakaran, Chairman of the mills.</p></li>
                                    <li style=" list-style-type: square;"><p style="text-align: justify; text-justify: inter-word;"> Ma Foi - a new entrant into chess sponsorship. Mr. Pandiarajan, a philanthropist, educationist and currently minister of Tamil Nadu government has promoted chess in the district in the first decade of 2000s.<br>Mr.R. Vijayann our past secretary is the silent sponsor partner for many tournaments - be it national or state championships. He has set up a high standard in organising tournaments and his approaches are unique and praiseworthy. </p></li>
                                    <li style=" list-style-type: square;"><p style="text-align: justify; text-justify: inter-word;"> Jaya Educational Trust - Prof. A. Kanagaraj, hailing from Chatrapatti, near Rajapalayam has not only sponsored tournaments here, but also many national and state championships in Chennai.<br>Hatsun & Idhayam: Mr. Chandramohan of Hatsun Agro Products (Arun Ice Cream) and Mr. VVR Muthu of Idhayam Groupo of companies (Idhayam sesame oil) have been instrumental in organising rating tournaments in our district regularly since 2014.</p></li>
                                </ul>
                            </div>
                            <div class="table-responsive">   
                                <table class="responsive-card-table unstriped table">
                                    <thead>
                                        <tr>
                                            <th>Rank</th>
                                            <th>Name</th>
                                            <th>FED</th>
                                            <th>1</th>
                                            <th>2</th>
                                            <th>3</th>
                                            <th>4</th>
                                            <th>5</th>
                                            <th>6</th>
                                            <th>7</th>
                                            <th>8</th>
                                            <th>9</th>
                                            <th>10</th>
                                            <th>11</th>
                                            <th>12</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td data-label="Rank" >1</th>
                                            <td data-label="Name"  >Wong Meng Kong</td>
                                            <td data-label="FED" >SIN</td>
                                            <td data-label="1" >X</td>
                                            <td data-label="2" >0.5</td>
                                            <td data-label="3" >1</td>
                                            <td data-label="4" >1</td>
                                            <td data-label="5" >0</td>
                                            <td data-label="6" >1</td>
                                            <td data-label="7" >0.5</td>
                                            <td data-label="8" >0.5</td>
                                            <td data-label="9" >1</td>
                                            <td data-label="10" >0.5</td>
                                            <td data-label="11" >1</td>
                                            <td data-label="12" >1</td>
                                            <td data-label="Total" >8</td>
                                        </tr>
                                        <tr>
                                            <td data-label="Rank" >2</th>
                                            <td data-label="Name"  >Krishan Jhunjunwala</td>
                                            <td data-label="FED" >HKG</td>
                                            <td data-label="1" >0.5</td>
                                            <td data-label="2" >X</td>
                                            <td data-label="3" >0.5</td>
                                            <td data-label="4" >0.5</td>
                                            <td data-label="5" >1</td>
                                            <td data-label="6" >1</td>
                                            <td data-label="7" >1</td>
                                            <td data-label="8" >0.5</td>
                                            <td data-label="9" >0.5</td>
                                            <td data-label="10" >0.5</td>
                                            <td data-label="11" >1</td>
                                            <td data-label="12" >1</td>
                                            <td data-label="Total" >8</td>
                                        </tr>
                                        <tr>
                                            <td data-label="Rank" >3</th>
                                            <td data-label="Name"  >Andronico Yap</td>
                                            <td data-label="FED" >PHI</td>
                                            <td data-label="1" >0</td>
                                            <td data-label="2" >0.5</td>
                                            <td data-label="3" >X</td>
                                            <td data-label="4" >0</td>
                                            <td data-label="5" >1</td>
                                            <td data-label="6" >0</td>
                                            <td data-label="7" >0</td>
                                            <td data-label="8" >1</td>
                                            <td data-label="9" >1</td>
                                            <td data-label="10" >1</td>
                                            <td data-label="11" >1</td>
                                            <td data-label="12" >1</td>
                                            <td data-label="Total" >6.5</td>
                                        </tr>
                                        <tr>
                                            <td data-label="Rank" >4</th>
                                            <td data-label="Name" >Dibyendu Barua</td>
                                            <td data-label="FED" >IND</td>
                                            <td data-label="1" >0</td>
                                            <td data-label="2" >0.5</td>
                                            <td data-label="3" >1</td>
                                            <td data-label="4" >X</td>
                                            <td data-label="5" >0</td>
                                            <td data-label="6" >0.5</td>
                                            <td data-label="7" >0.5</td>
                                            <td data-label="8" >1</td>
                                            <td data-label="9" >0.5</td>
                                            <td data-label="10" >1</td>
                                            <td data-label="11" >1</td>
                                            <td data-label="12" >0.5</td>
                                            <td data-label="Total" >6.5</td>
                                        </tr>
                                        <tr>
                                            <td data-label="Rank" >5</th>
                                            <td data-label="Name"  >Ronny Gunawan</td>
                                            <td data-label="FED" >INA</td>
                                            <td data-label="1" >1</td>
                                            <td data-label="2" >0</td>
                                            <td data-label="3" >0</td>
                                            <td data-label="4" >1</td>
                                            <td data-label="5" >X</td>
                                            <td data-label="6" >0</td>
                                            <td data-label="7" >0</td>
                                            <td data-label="8" >1</td>
                                            <td data-label="9" >0.5</td>
                                            <td data-label="10" >0.5</td>
                                            <td data-label="11" >1</td>
                                            <td data-label="12" >1</td>
                                            <td data-label="Total" >6</td>
                                        </tr>
                                        <tr>
                                            <td data-label="Rank" >6</th>
                                            <td data-label="Name"  >Stephen Kerr</td>
                                            <td data-label="FED" >AUS</td>
                                            <td data-label="1" >0</td>
                                            <td data-label="2" >0</td>
                                            <td data-label="3" >1</td>
                                            <td data-label="4" >0.5</td>
                                            <td data-label="5" >1</td>
                                            <td data-label="6" >X</td>
                                            <td data-label="7" >0.5</td>
                                            <td data-label="8" >0</td>
                                            <td data-label="9" >0.5</td>
                                            <td data-label="10" >1</td>
                                            <td data-label="11" >0.5</td>
                                            <td data-label="12" >1</td>
                                            <td data-label="Total" >6</td>
                                        </tr>
                                        <tr>
                                            <td data-label="Rank" >7</th>
                                            <td data-label="Name"  >Mahadevan Ramesh</td>
                                            <td data-label="FED" >IND</td>
                                            <td data-label="1" >0.5</td>
                                            <td data-label="2" >0</td>
                                            <td data-label="3" >1</td>
                                            <td data-label="4" >0.5</td>
                                            <td data-label="5" >1</td>
                                            <td data-label="6" >0.5</td>
                                            <td data-label="7" >X</td>
                                            <td data-label="8" >0</td>
                                            <td data-label="9" >0.5</td>
                                            <td data-label="10" >0.5</td>
                                            <td data-label="11" >1</td>
                                            <td data-label="12" >0.5</td>
                                            <td data-label="Total" >6</td>
                                        </tr>
                                        <tr>
                                            <td data-label="Rank" >8</th>
                                            <td data-label="Name"  >Niaz Murshed</td>
                                            <td data-label="FED" >BAN</td>
                                            <td data-label="1" >0.5</td>
                                            <td data-label="2" >0.5</td>
                                            <td data-label="3" >0</td>
                                            <td data-label="4" >0</td>
                                            <td data-label="5" >0</td>
                                            <td data-label="6" >1</td>
                                            <td data-label="7" >1</td>
                                            <td data-label="8" >X</td>
                                            <td data-label="9" >0</td>
                                            <td data-label="10" >0</td>
                                            <td data-label="11" >1</td>
                                            <td data-label="12" >1</td>
                                            <td data-label="Total" >5</td>
                                        </tr>
                                        <tr>
                                            <td data-label="Rank" >9</th>
                                            <td data-label="Name"  >D.H.C. Atrupane</td>
                                            <td data-label="FED" >SRI</td>
                                            <td data-label="1" >0</td>
                                            <td data-label="2" >0.5</td>
                                            <td data-label="3" >0</td>
                                            <td data-label="4" >0.5</td>
                                            <td data-label="5" >0.5</td>
                                            <td data-label="6" >0.5</td>
                                            <td data-label="7" >0.5</td>
                                            <td data-label="8" >1</td>
                                            <td data-label="9" >X</td>
                                            <td data-label="10" >0.5</td>
                                            <td data-label="11" >0.5</td>
                                            <td data-label="12" >0.5</td>
                                            <td data-label="Total" >5</td>
                                        </tr>
                                        <tr>
                                            <td data-label="Rank" >10</th>
                                            <td data-label="Name"  >Eric Cheah</td>
                                            <td data-label="FED" >MAL</td>
                                            <td data-label="1" >0.5</td>
                                            <td data-label="2" >0.5</td>
                                            <td data-label="3" >0</td>
                                            <td data-label="4" >0</td>
                                            <td data-label="5" >0.5</td>
                                            <td data-label="6" >0</td>
                                            <td data-label="7" >0.5</td>
                                            <td data-label="8" >1</td>
                                            <td data-label="9" >0.5</td>
                                            <td data-label="10" >X</td>
                                            <td data-label="11" >0</td>
                                            <td data-label="12" >1</td>
                                            <td data-label="Total" >4.5</td>
                                        </tr>
                                        <tr>
                                            <td data-label="Rank" >11</th>
                                            <td data-label="Name"  >Davoud Pira</td>
                                            <td data-label="FED" >IRI</td>
                                            <td data-label="1" >0</td>
                                            <td data-label="2" >0</td>
                                            <td data-label="3" >0</td>
                                            <td data-label="4" >0</td>
                                            <td data-label="5" >0</td>
                                            <td data-label="6" >0.5</td>
                                            <td data-label="7" >0</td>
                                            <td data-label="8" >0</td>
                                            <td data-label="9" >0.5</td>
                                            <td data-label="10" >1</td>
                                            <td data-label="11" >X</td>
                                            <td data-label="12" >1</td>
                                            <td data-label="Total" >3</td>
                                        </tr>
                                        <tr>
                                            <td data-label="Rank" >12</th>
                                            <td data-label="Name"  >Grant Sidnam</td>
                                            <td data-label="FED" >NZ</td>
                                            <td data-label="1" >0</td>
                                            <td data-label="2" >0</td>
                                            <td data-label="3" >0</td>
                                            <td data-label="4" >0.5</td>
                                            <td data-label="5" >0</td>
                                            <td data-label="6" >0</td>
                                            <td data-label="7" >0.5</td>
                                            <td data-label="8" >0</td>
                                            <td data-label="9" >0.5</td>
                                            <td data-label="10" >0</td>
                                            <td data-label="11" >0</td>
                                            <td data-label="12" >X</td>
                                            <td data-label="Total" >1.5</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <section id="about" class="ls section_padding_top_110 columns_padding_30">
                            <div  style="padding-top: 25px;">
                                <div class="row">
                                    <div class="col-md-6 col-md-push-6 to_animate" data-animation="fadeInLeft" data-delay="300">
                                        <h2 class="section_header color4" style="font-size:19px;   font-weight: 900;color: #459c88;"> Participants of Asian Junior Championship, Sivakasi1979</h2>
                                        <p class="section-excerpt grey" style="font-size: 17px; font-weight: 800; text-align: justify;"><span style="color:red;padding-left:32px;">Sitting 1st row : </span>Krishan Jhunjhunwala (Hong Kong), Ronny Gunawann (Indonesia), Grant Sidnam (New Zealand), Stephen Kerr (Australia), Niaz Murshed (Bangaldesh), Andronica Yap (Philippines), Wong Meng Kong (winner, Singapore), D. Barua (India), M, Ramesh (India), Eric Cheah (Malaysia) and Davoud Pira (Iran)<br><span style="color:red;padding-left:32px;">2nd row : </span>IM Manuel Aaron, secretary TNCA, Sri. K.A.A. Snakaralinga Nadar, Sri. P.R. Ramasubrahmaneya Rajah, Chairman Ramco Group, Collector of Virudhunagar district, N.P.S.S. Rathina Nadar and Sri. Dhargarh, Treasurer Sivakasi Chess Club</p>
                                    </div>
                                    <div class="col-md-6 col-md-pull-6 to_animate" data-animation="fadeInUp" data-delay="600">
                                        <div class="embed-responsive embed-responsive-3by2"> 
                                            <img src="images/1979 - Asian Junior was held for the first time in India at Sivaksi.png" alt="No_img" style="width: 100%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <div class="row" style="padding: 0;">
                            <div class="col-lg-6">
                                <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="400ms" >
                                    <div class="popular-course-content" style="width: 100%;flex: none;max-width: 100%;padding: 0;">
                                        <div class="panel single-accordion">
                                            <h6>
                                                <center>    <a role="button" class="collapsed"><b style="font-size: 18px;color: #f3702b;">State Men Championship</b></a> </center>
                                            </h6>
                                        </div>
                                        <div class="table-responsive">   
                                            <table class="table" >
                                                <tr>
                                                    <td>1975 - Rajapalayam</td>
                                                    <td>IM Raja Ravishekhar, Chennai</td>
                                                </tr>
                                                <tr>
                                                    <td>1980 - Rajapalayam</td>
                                                    <td>IM Manuel Aaron, Indian Bank</td>
                                                </tr>
                                                <tr>
                                                    <td>1990 - Sivakasi</td>
                                                    <td>G B Prakash, (now IM) Indian Bank</td>
                                                </tr>
                                                <tr>
                                                    <td>1991 - Sivakasi</td>
                                                    <td>R. Balasubramanian, (now IM) Chennai</td>
                                                </tr>
                                                <tr>
                                                    <td>2005 - Rajapalayam</td>
                                                    <td>Deepan Chakravarthy, (now GM) Madurai</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="400ms" >
                                    <div class="popular-course-content" style="width: 100%;flex: none;max-width: 100%;padding: 0;">
                                        <div class="panel single-accordion">
                                            <h6>
                                                <center>    <a role="button" class="collapsed"><b style="font-size: 16px;color: #f3702b;">TN State Sub Junior Chess Championships (Under 15)</b></a> </center>
                                            </h6>
                                        </div>
                                        <div class="table-responsive">   
                                            <table class="table">
                                                <tr>
                                                    <td>1986 - Sivakasi	</td>
                                                    <td>GB Prakash (now IM), Chennai</td>
                                                </tr>
                                                <tr>
                                                    <td>1987 - Rajapalayam</td>
                                                    <td>S. Mari Arul, Chennai</td>
                                                </tr>
                                                <tr>
                                                    <td>1990 - Sivakasi	</td>
                                                    <td>M. Safira Shanaz, Rajapalayam</td>
                                                </tr>
                                                <tr>
                                                    <td>1991 - Rajapalayam</td>
                                                    <td>G. Vinod, Chennai and S. Sujatha, Chennai</td>
                                                </tr>
                                                <tr>
                                                    <td>1994 - Sivakasi	     </td>
                                                    <td>V.M.S. Lenin and R. Aarthie (now WGM), Chennai</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="400ms" >
                                    <div class="popular-course-content" style="width: 100%;flex: none;max-width: 100%;padding: 0;">
                                        <div class="panel single-accordion">
                                            <h6>
                                                <center>    <a role="button" class="collapsed"><b style="font-size: 18px;color: #f3702b;">TN State Women championship</b></a> </center>
                                            </h6>
                                        </div>
                                        <div class="table-responsive">   
                                            <table class="table">
                                                <tr>
                                                    <td>1983 - Sivakasi	</td>
                                                    <td>Radha Srinivasan, Chennai</td>
                                                </tr>
                                                <tr>
                                                    <td>1995 - Rajapalayam</td>
                                                    <td>WFM Safira Shanaz, Rajapalayam</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="400ms" >
                                    <div class="popular-course-content" style="width: 100%;flex: none;max-width: 100%;padding: 0;">
                                        <div class="panel single-accordion">
                                            <h6>
                                                <center>    <a role="button" class="collapsed"><b style="font-size: 16px;color: #f3702b;">All India Technical Conference for Arbiters, Sivakasi 9,10 January 1999</b></a> </center>
                                            </h6>
                                        </div>
                                        <div class="table-responsive">   
                                            <table class="table">
                                                <tr>
                                                    <td>TN Technical Conference for Arbiters, Sivakasi 1980</td>
                                                </tr>
                                                <tr>
                                                    <td>TN Technical Conference for Arbiters, Aruppukottai 2002</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="400ms" >
                                    <div class="popular-course-content" style="width: 100%;flex: none;max-width: 100%;padding: 0;">
                                        <div class="panel single-accordion">
                                            <h6>
                                                <center>    <a role="button" class="collapsed"><b style="font-size: 16px;color: #f3702b;">TN State Junior Championships</b></a> </center>
                                            </h6>
                                        </div>
                                        <div class="table-responsive" style="height: 200px;overflow: auto;">   
                                            <table class="table">
                                                <tr>
                                                    <td>1978 - Sivakasi	</td>
                                                    <td>Shiva Kumar, Chennai</td>
                                                </tr>
                                                <tr>
                                                    <td>1993 - Sivakasi	</td>
                                                    <td>R B Ramesh (now GM), Chennai and B. Devi Kesari, Madurai</td>
                                                </tr>
                                                <tr>
                                                    <td>1997 - Sivakasi	</td>
                                                    <td>R. Karthik, Neyveli and Pl. Sivakami, Madurai</td>
                                                </tr>
                                                <tr>
                                                    <td>2005 - Sivakasi	</td>
                                                    <td>Shiva Kumar, Chennai</td>
                                                </tr>
                                                <tr>
                                                    <td>2007 - Rajapalayam</td>
                                                    <td>RA Pradeep Kumar, Chennai and Pon N Krithika, Kanchi</td>
                                                </tr>
                                                <tr>
                                                    <td>2011 - Rajapalayam</td>
                                                    <td>Muthu Alagappan (Tiruvallur) and Srija Seshadri (Neyveli)</td>
                                                </tr>
                                                <tr>
                                                    <td>2013 – Aruppukottai</td>
                                                    <td>Gireman Ja Coimbaotre & Bala Kannamma P, Chennai </td>
                                                </tr>
                                                <tr>
                                                    <td>2016 – Rajapalayam</td>
                                                    <td>IM Muthaiah AL, Chennai & Priyanka K, Coimbatore </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="400ms" >
                                    <div class="popular-course-content" style="width: 100%;flex: none;max-width: 100%;padding: 0;">
                                        <div class="panel single-accordion">
                                            <h6>
                                                <center>    <a role="button" class="collapsed"><b style="font-size: 16px;color: #f3702b;">TN State Under 17 Chess Championships</b></a> </center>
                                            </h6>
                                        </div>
                                        <div class="table-responsive" style="height: 200px;overflow: auto;">   
                                            <table class="table">
                                                <tr>
                                                    <td>1992 - Rajapalayam</td>
                                                    <td>RB Ramesh (now GM), Chennai and M. Safira Shanaz, Rajapalayam</td>
                                                </tr>
                                                <tr>
                                                    <td>2001 - Aruppukottai</td>
                                                    <td>S. Ananda Kumar, Coimbatore and S. Nabeela Farheen, Chennai</td>
                                                </tr>
                                                <tr>
                                                    <td>2002 - Aruppukottai</td>
                                                    <td>R. Siddharth (now IM), Chennai and N. Raghavi, Chennai</td>
                                                </tr>
                                                <tr>
                                                    <td>2004 - Rajapalayam</td>
                                                    <td>R. Siddharth (now IM), Chennai and P. Siva Sankari, Chennai</td>
                                                </tr>
                                                <tr>
                                                    <td>2009 - Sivakasi	</td>
                                                    <td>N. Surendran, Thiruvallur and J. Saranya, Thiruvallur</td>
                                                </tr>
                                                <tr>
                                                    <td>2011 - Rajapalayam</td>
                                                    <td>Manigandan SS, Madurai and Balakannamma P, Chennai</td>
                                                </tr>
                                                <tr>
                                                    <td>2014 - Rajapalayam</td>
                                                    <td>Vaishnav M, Tirupur & Srija Seshadri Neyveli</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <section id="about" class="ls section_padding_top_110 columns_padding_30">
                            <div  style="padding-top: 25px;">
                                <div class="row">
                                    <div class="col-md-6 col-md-push-6 to_animate" data-animation="fadeInUp" data-delay="600">
                                        <div class="embed-responsive embed-responsive-3by2"> 
                                            <img src="images/1996 - GM Magesh Chandran P won the National Sub Junior at Sivakasi.png" alt="No_img" style="width: 100%;">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-md-pull-6 to_animate" data-animation="fadeInRight" data-delay="300">
                                        <h2 class="section_header color4" style="font-size:19px;   font-weight: 900;color: #459c88;"> National Sub junior championship 1996</h2>
                                        <p class="section-excerpt grey" style="font-size: 17px; font-weight: 800; text-align: justify;"><span style="color:red;padding-left:32px;">Magesh Chandran (now GM), </span>winner of the National Sub junior championship 1996. Joint secretaries R. Gurusamy and V. Bala Saravanan are at the left and right extremes. <br><span style="color:red;padding-left:32px;">Second from the right is B. </span>Sridhar, former joint secretary of the district association</p>
                                    </div>
                                </div>
                            </div>
                        </section>


                        <div class="row">
                            <div class="col-lg-6">
                                <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="400ms" >
                                    <div class="popular-course-content" style="width: 100%;flex: none;max-width: 100%;padding: 0;">
                                        <div class="panel single-accordion">
                                            <h6>
                                                <center>    <a role="button" class="collapsed"><b style="font-size: 16px;color: #f3702b;">TN State Under 11 Chess Championships (Previously Under 12)</b></a> </center>
                                            </h6>
                                        </div>
                                        <div class="table-responsive">   
                                            <table class="table">
                                                <tr>
                                                    <td>1986 - Sivakasi</td>
                                                    <td>T.K. Swaminathan, Chennai</td>
                                                </tr>
                                                <tr>
                                                    <td>1987 - Rajapalayam</td>
                                                    <td>A. Arun Kumar, Coimbatore</td>
                                                </tr>
                                                <tr>
                                                    <td>1999 - Sivakasi</td>
                                                    <td>R. Siddharth, Chennai and P. Priya, Chennai</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="400ms" >
                                    <div class="popular-course-content" style="width: 100%;flex: none;max-width: 100%;padding: 0;">
                                        <div class="panel single-accordion">
                                            <h6>
                                                <center>    <a role="button" class="collapsed"><b style="font-size: 16px;color: #f3702b;">TN State team Championship</b></a> </center>
                                            </h6>
                                        </div>
                                        <div class="table-responsive">   
                                            <table class="table">
                                                <tr>
                                                    <td>1984 - Sivakasi	</td>
                                                    <td>Madurai</td>
                                                </tr>
                                                <tr>
                                                    <td>2001 - Rajapalayam</td>
                                                    <td>Indian Bank</td>
                                                </tr>
                                                <tr>
                                                    <td>2012 – Sivakasi</td>
                                                    <td>ICF</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="400ms" >
                                    <div class="popular-course-content" style="width: 100%;flex: none;max-width: 100%;padding: 0;">
                                        <div class="panel single-accordion">
                                            <h6>
                                                <center>    <a role="button" class="collapsed"><b style="font-size: 16px;color: #f3702b;">TN State Under 13 Chess Championships (Previously Under 14)</b></a> </center>
                                            </h6>
                                        </div>
                                        <div class="table-responsive">   
                                            <table class="table">
                                                <tr>
                                                    <td>1999 - Sivakasi	</td>
                                                    <td>IM S. Poobesh Anand, Madurai and C. Delphin, Madurai, IM R Siddharth & WIM P Priya, Chennai</td>
                                                </tr>
                                                <tr>
                                                    <td>2008 - Rajapalayam</td>
                                                    <td>Vasantharuba Varman, Chennai and J. Vaishnavi, Trichy</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="400ms" >
                                    <div class="popular-course-content" style="width: 100%;flex: none;max-width: 100%;padding: 0;">
                                        <div class="panel single-accordion">
                                            <h6>
                                                <center>    <a role="button" class="collapsed"><b style="font-size: 16px;color: #f3702b;">State Under 25 Championship</b></a> </center>
                                            </h6>
                                        </div>
                                        <div class="table-responsive">   
                                            <table class="table">
                                                <tr>
                                                    <td>2017 </td>
                                                    <td>Aruppukottai 	Bavan Kumar, Chennai & CR Reshma, Kanchi</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--                        <div class="row">
                                                    <div class="col-lg-5">
                                                        <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="400ms" >
                                                            <div class="popular-course-content" style="width: 100%;flex: none;max-width: 100%;padding: 0;">
                                                                <div class="panel single-accordion">
                                                                    <h6>
                                                                        <center>    <a role="button" class="collapsed"><b style="font-size: 16px;color: #f3702b;">TN State team Championship</b></a> </center>
                                                                    </h6>
                                                                </div>
                                                                <div class="table-responsive" >   
                                                                    <table class="table">
                                                                        <tr>
                                                                            <td>1984 - Sivakasi	</td>
                                                                            <td>Madurai</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>2001 - Rajapalayam</td>
                                                                            <td>Indian Bank</td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-7">
                                                        <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="400ms" >
                                                            <div class="popular-course-content" style="width: 100%;flex: none;max-width: 100%;padding: 0;">
                                                                <div class="panel single-accordion">
                                                                    <h6>
                                                                        <center>    <a role="button" class="collapsed"><b style="font-size: 16px;color: #f3702b;">TN State Under 11 Chess Championships (Previously Under 12)</b></a> </center>
                                                                    </h6>
                                                                </div>
                                                                <div class="table-responsive">   
                                                                    <table class="table">
                                                                        <tr>
                                                                            <td>1986 - Sivakasi	</td>
                                                                            <td>T.K. Swaminathan, Chennai</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>1987 - Rajapalayam</td>
                                                                            <td>A. Arun Kumar, Coimbatore</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>1999 - Sivakasi	</td>
                                                                            <td>R. Siddharth, Chennai and P. Priya, Chennai</td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>-->
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="400ms" >
                                    <div class="popular-course-content" style="width: 100%;flex: none;max-width: 100%;padding: 0;">
                                        <div class="panel single-accordion">
                                            <h6>
                                                <center>    <a role="button" class="collapsed"><b style="font-size: 18px;color: #f3702b;">TN State U16 & U18 Rapid Championships</b></a> </center>
                                            </h6>
                                        </div>
                                        <div class="table-responsive">   
                                            <table class="table">
                                                <tr>
                                                    <td>2006 - Rajapalayam</td>
                                                    <td>U18 TU Navin Kanna (Chennai) & P. Sivasankari (Kanchi)<br>U16 P. Karthikeyan, Chennai</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2"><center>TN State Rapid Championship</center></td>
                                                </tr>
                                                <tr>
                                                    <td>2007 - Sivakasi	</td>
                                                    <td>Syed Anwar Shazuli, ICF</td>
                                                </tr>
                                                <tr>
                                                    <td>2012 - Sivakasi	</td>
                                                    <td>FM Maheswaran P, Sivakasi (Blitz)</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="400ms" >
                                    <div class="popular-course-content" style="width: 100%;flex: none;max-width: 100%;padding: 0;">
                                        <div class="panel single-accordion">
                                            <h6>
                                                <center>    <a role="button" class="collapsed"><b style="font-size: 17px;color: #f3702b;">Ramco Institute of Technology FIDE Rated tournament, Rajapalayam </b></a> </center>
                                            </h6>
                                        </div>
                                        <div class="table-responsive">   
                                            <table class="table">
                                                <tr>
                                                    <td>2018 </td>
                                                    <td>Kunal M, Trichy </td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="3">2019 </td>
                                                    <td>IM Harikrishnan ARa, Chennai</td>
                                                </tr>
                                                <tr>
                                                    <td>2019 Rotary Club of Thalavaipuram Rating Tournament, Thalavaipuram  – IM R. Balasubramaniam, Chennai </td>
                                                </tr><tr>
                                                    <td>Sri Kaliswari College Grand Prix Rapid rating tournament, Sivakasi  - WGM Vaishali R, Chennai</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <section id="about" class="ls section_padding_top_110 columns_padding_30">
                            <div  style="padding-top: 25px;">
                                <div class="row">
                                    <div class="col-md-6 col-md-push-6 to_animate" data-animation="fadeInLeft" data-delay="300">
                                        <h2 class="section_header color4" style="font-size:18px;   font-weight: 900;color: #459c88;">N.P.S.S. Rathina Nadar trophy to 1999 National Junior champion</h2>
                                        <p class="section-excerpt grey" style="font-size: 17px; font-weight: 800; text-align: justify;"><span style="color:red;padding-left:32px;">Sri Pollachi N. Mahalingam </span> presents the N.P.S.S. Rathina Nadar trophy to 1999 National Junior champion S.S. Ganguly.<br><span style="padding-left:32px;"> Sri.R. Jegatheesa Sankar, </span>son of Sri. Rathina Nadar and Sri. G. Ramamoorthy are at the left and right</p>
                                    </div>
                                    <div class="col-md-6 col-md-pull-6 to_animate" data-animation="fadeInUp" data-delay="600">
                                        <div class="embed-responsive embed-responsive-3by2"> 
                                            <img src="images/1999 - GM SS Ganguly was the champion in the National Junior at Sivakasi.png" alt="No_img" style="width: 100%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="400ms" >
                                    <div class="popular-course-content" style="width: 100%;flex: none;max-width: 100%;padding: 0;">
                                        <div class="panel single-accordion">
                                            <h6>
                                                <center>    <a role="button" class="collapsed"><b style="font-size: 18px;color: #f3702b;">Rating Tournaments </b></a> </center>
                                            </h6>
                                        </div>
                                        <div class="table-responsive">   
                                            <table class="table">
                                                <tr>
                                                    <td>2010</td>
                                                    <td>2010 Sivakasi FIDE Rated  – Linda Rangarajan, Pondicherry</td>
                                                </tr>
                                                <tr>
                                                    <td>2011</td>
                                                    <td>Sivakasi Chess Club Blitz Rated (first in India) – IM Nitin S, Salem </td>
                                                </tr>
                                                <tr>
                                                    <td>2012</td>
                                                    <td>2012 Sivakasi FIDE Rated Rapid    GM Laxman RR, ICF</td>
                                                </tr>
                                                <tr>
                                                    <td>2013</td>
                                                    <td>TP Textiles & SCC Rapid rating, Rajapalayam Kunal M, Trichy</td>
                                                </tr>
                                                <tr>
                                                    <td>2016</td>
                                                    <td>2016 Sivam Hospital Rapid Rating, Sivakasi IM Shyaamnikhil P, ICF</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="400ms" >
                                    <div class="popular-course-content" style="width: 100%;flex: none;max-width: 100%;padding: 0;">
                                        <div class="panel single-accordion">
                                            <h6>
                                                <center>    <a role="button" class="collapsed"><b style="font-size: 17px;color: #f3702b;">Sivakasi Chess Sparklers Rating Tournament  </b></a> </center>
                                            </h6>
                                        </div>
                                        <div class="table-responsive">   
                                            <table class="table">
                                                <tr>
                                                    <td>2015  </td>
                                                    <td>GM Deepan Chakravarthy J, ICF</td>
                                                </tr>
                                                <tr>
                                                    <td>2016</td>
                                                    <td>IM Saravana Krishnan P, Karur Vysya Bank</td>
                                                </tr>
                                                <tr>
                                                    <td>2017</td>
                                                    <td>Kunal M, Madurai</td>
                                                </tr>
                                                <tr>
                                                    <td>2018</td>
                                                    <td>GM Laxman RR, ICF</td>
                                                </tr>
                                                <tr>
                                                    <td>2019</td>
                                                    <td>IM Shyaamnikhil P, ICF</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="400ms" >
                                    <div class="popular-course-content" style="width: 100%;flex: none;max-width: 100%;padding: 0;">
                                        <div class="panel single-accordion">
                                            <h6>
                                                <center>    <a role="button" class="collapsed"><b style="font-size: 17px;color: #f3702b;">Coaching Camps by Sivakasi Chess Club</b></a> </center>
                                            </h6>
                                        </div>
                                        <div class="table-responsive">   
                                            <table class="table">
                                                <tr>
                                                    <td>2004</td>
                                                    <td> IM Mithrakanth P</td>
                                                </tr>
                                                <tr>
                                                    <td>2014</td>
                                                    <td>IA Vijayaraghavan V & IA Ganesh Babu S</td>
                                                </tr>
                                                <tr>
                                                    <td>2016</td>
                                                    <td>IM elect Kunal M </td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="2">2017</td>
                                                    <td>IM Shyaamnikhil P  </td>
                                                </tr>
                                                <tr>
                                                    <td>FM P Maheswaran</td>
                                                </tr>
                                                <tr>
                                                    <td>2018</td>
                                                    <td>IM elect Kunal M</td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="2">2019</td>
                                                    <td>IM elect Kunal M </td>
                                                </tr>
                                                <tr>
                                                    <td>GM Rodrigo Vasquez, Chile </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">


                                <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="400ms" >
                                    <div class="popular-course-content" style="width: 100%;flex: none;max-width: 100%;padding: 0;">
                                        <div class="panel single-accordion">
                                            <h6>
                                                <center>    <a role="button" class="collapsed"><b style="font-size: 17px;color: #f3702b;">State Chess 960 Championship </b></a> </center>
                                            </h6>
                                        </div>
                                        <div class="table-responsive">   
                                            <table class="table">
                                                <tr>
                                                    <td>2011</td>
                                                    <td>IM Shyaamnikhil P, ICF</td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="3">2014</td>
                                                    <td>IA Ganesh Babu S, Madurai</td>
                                                </tr>
                                                <tr>
                                                    <td><span style="color: red;">Chess Festival with eight events – </span>Chess 960, Blindfold Chess, Fun Chess, Chess Doubles, Chess Quiz, Problem Solving,  Gift Chess, Losing Chess  - Sivakasi 2009</td>
                                                </tr>
                                                <tr>
                                                    <td><span style="color: red;">Basque Chess – </span>Sivakasi 2015   IM Shyaamnikhil P, ICF District League 2014 – Paramasivam M, Aruppukottai </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <section id="about" class="ls section_padding_top_110 columns_padding_30">
                            <div  style="padding-top: 25px;">
                                <div class="row">
                                    <div class="col-md-6 col-md-push-6 to_animate" data-animation="fadeInUp" data-delay="600">
                                        <div class="embed-responsive embed-responsive-3by2"> 
                                            <img src="images/2005 - GM Deep Sengupta and WGM Soumya Swaminathan won the National Junior at Sivakasi.png" alt="No_img" style="width: 100%;">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-md-pull-6 to_animate" data-animation="fadeInRight" data-delay="300">
                                        <h2 class="section_header color4" style="font-size:25px;   font-weight: 900;color: #459c88;"> National Junior Champions 2005</h2>
                                        <p class="section-excerpt grey" style="font-size: 17px; font-weight: 800; text-align: justify;"><span style="color:red;padding-left:32px;">Mr. G. Ramamoorthy, </span> Mr. R. Vijayann, IM Manuel Aaron and Mr. A. Gopalsamy with Deep Sengupta and Soumya Swaminathan, national junior champions 2005</p>
                                        <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="400ms" >
                                            <div class="popular-course-content" style="width: 100%;flex: none;max-width: 100%;padding: 0;">
                                                <div class="panel single-accordion">
                                                    <h6>
                                                        <center>    <a role="button" class="collapsed"><b style="font-size: 17px;color: #f3702b;">Hatsun Idhayam  FIDE Rated Tournament, VIrudhunagar</b></a> </center>
                                                    </h6>
                                                </div>
                                                <div class="table-responsive">   
                                                    <table class="table">
                                                        <tr>
                                                            <td>2014</td>
                                                            <td>GM Laxman RR, ICF</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2017</td>
                                                            <td>Kunal M, Trichy</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2019</td>
                                                            <td>IM Muthaiah AL, Chennai</td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="400ms" >
                                    <div class="popular-course-content" style="width: 100%;flex: none;max-width: 100%;padding: 0;">
                                        <div class="panel single-accordion">
                                            <h6>
                                                <center>    <a role="button" class="collapsed"><b style="font-size: 18px;color: #f3702b;">State Level Tournaments </b></a> </center>
                                            </h6>
                                        </div>
                                        <div class="table-responsive">   
                                            <table class="table">
                                                <tr>
                                                    <td>2004 </td>
                                                    <td>NM Mehta School, Sivakasi </td>
                                                </tr>
                                                <tr>
                                                    <td>2005 </td>
                                                    <td>State level tournament, Srivilliputtur </td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="2">2009  </td>
                                                    <td>State Level tournament, Sivakasi</td>
                                                </tr>
                                                <tr>
                                                    <td><span style="color: red;">2009 Chess Festival  </span>with eight eventsChess 960, Blindfold Chess, Fun Chess, Chess Doubles, Chess Quiz, Problem Solving,  Gift Chess, Losing Chess  - Sivakasi 2009</td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="2">2011</td>
                                                    <td>Jaya Vilas State level tournament, Aruppukottai</td>
                                                </tr>
                                                <tr>
                                                    <td>Sivakasi Chess Club State level tournament</td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="3">2012 </td>
                                                    <td>Akshaya  State level tournament IA S Ganesh Babu</td>
                                                </tr>
                                                <tr>
                                                    <td>Rotary Club of Sivakasi Open    SS Manigandan, Madurai</td>
                                                </tr>
                                                <tr>
                                                    <td>Geojit PNB Paribas State level, Sivakasi  Dharmaraj P, Thoothukudi</td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="4">2013 </td>
                                                    <td>CM state level tournament FM Maheswaran P</td>
                                                </tr>
                                                <tr>
                                                    <td>PSR Engineering College State level tournament, Rajapalayam  Ram S Krishnan Chennai  </td>
                                                </tr>
                                                <tr>
                                                    <td>Sri Vidya Engineering State level Team tournament for Schools Adarsh KV Nagercoil</td>
                                                </tr>
                                                <tr>
                                                    <td>Thillai Masala State level, Virudhunagar – Kunal M & Maheswaran P</td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="3">2014 </td>
                                                    <td>Rotary Club of Sivakasi Children  Vishwa Anand Thoothukudi (under 17) </td>
                                                </tr>
                                                <tr>
                                                    <td>Thillai Masala State level, Virudhunagar Syed Anvar Shazuli</td>
                                                </tr>
                                                <tr>
                                                    <td>Round Table Rajapalayam @ Sivakasi Kunal M, Trichy</td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="3">2015 </td>
                                                    <td>Thillai Masala State level, Virudhunagar Syed Anvar Shazuli Y, ICF</td>
                                                </tr>
                                                <tr>
                                                    <td><span style="color: red;">2015 Basque Chess – </span>Sivakasi   IM Shyaamnikhil P, ICF</td>
                                                </tr>
                                                <tr>
                                                    <td>TP Textiles State Level, Rajapalayam   Maheswaran P, Sivakasi</td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="2">2016 </td>
                                                    <td>Round Table 158 State level tournament </td>
                                                </tr>
                                                <tr>
                                                    <td>Thillai Masala State level, Virudhunagar Subramanaian RM, Madurai </td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="2">2017 </td>
                                                    <td>TP Textiles State Level Blitz & Doubles – Ram S Krishnan (Blitz) & Viyugam, Chennai </td>
                                                </tr>
                                                <tr>
                                                    <td>Rotary Club of Virudhunagar State level tournament, Virudhunagar -  RV Adith, Coimbatore</td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="2">2018</td>
                                                    <td>TP Textiles State level tournament – Manigandan SS, Madurai </td>
                                                </tr>
                                                <tr>
                                                    <td>SCS State level – MA Alaguraja Madurai</td>
                                                </tr>
                                                <tr>
                                                    <td>2019</td>
                                                    <td>Rotary Club of Virudhunagar State level tournament, Virudhunagar M Vaisnav, Tirupur District League 2014 – Paramasivam M, Aruppukottai </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
            <?php include 'footer.php'; ?>
            </div>
<?php include'js.php'; ?>
    </body>
</html>