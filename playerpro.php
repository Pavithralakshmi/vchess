<?php include 'db.php'; 
$current_file_name = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html class="no-js">
    <head>
        <title>Virudhunagar District Chess Association</title>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php include 'style.php'; ?>
        <style>
            td{
                /*font-weight: 600;*/
            }
            .responsive-card-table {
                border-collapse: collapse;
            }

            .responsive-card-table.unstriped tbody {
                background-color: transparent;
            }

            .responsive-card-table th {
                /*background-color: #72bf50;*/
                /*background-color: #a1d276;*/
                background-color: #f3702b;
            }

            .responsive-card-table tr,
            .responsive-card-table th,
            .responsive-card-table td {
                border: 1px solid #0a0a0a;
            }
            @media screen and (max-width: 640px) {
                .responsive-card-table th{
                    width: 400px;
                }
                         #toTop:after {
                    font-size: 25px;
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
            }
            @media only screen and (max-width: 767px){
                .vdcatit {
                    display: none;
                }
                .test1 {
                    display: none;

                }
                .test3{
                    padding: 14px;
                    text-align: inherit;
                    font-size: 12px;
                    font-weight: bolder;
                    color: white;
                    background: #a1d276;;
                }
                .test4{
                    color: black;
                    font-size: 18px;
                    text-align: justify;
                    text-justify: inter-word;
                    font-weight: bolder;
                }
                .test5{
                    background-color:#f3702b;
                    padding:10px 60px 10px 104px;
                    text-align: inherit;
                    font-size: 13px;
                    font-weight: bold;
                    color: white;
                }

            }
            @media only screen and (min-width: 767px){
                .test2{
                    display: none;
                }
            }
            @media only screen and (min-width: 767px){
                .test{
                    text-align: justify;
                    font-size:25px;
                }
                         #toTop:after {
                    font-size: 30px;
                }
               
            }
            @media only screen and (max-width: 767px){
                #ofcb{
                    padding-top: 45px;
                }
                .test{
                    font-size:18px;
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
                                <h2>Player Profiles</h2>
                                <ol class="breadcrumb greylinks">
                                    <li> <a href="index.php">
                                            Home
                                        </a> </li>
                                    <li class="active">Player Profiles</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="ls section_padding_top_100 section_padding_bottom_100">
                    <div class="container" style="padding-top: 17px;">
                        <div class="row"> 
                            <p style="text-align: justify; text-justify: inter-word;padding: 8px;">
                                Virudhunagar district has played a stellar role in the southern part of Tamil Nadu in producing many national and state champions. Some of the shining stars of the district are given below:
                            </p>
                        </div>
                        <h3 style="color:red;">
                            <a role="button"> <b style="font-size: 18px;">M. Safira Shanaz</b></a>
                        </h3><p style="text-align: justify; text-justify: inter-word;"><span style="padding-left: 30px;">
                                The unassuming girl </span> from Rajapalayam is one of the most talented players of our district. She learned the game from her father A. Malik Jan Mohamed, who himself is a good player. Her brother, Asif Mohamed’s state Under 10 title at Mettur in 1985 inspired her to take her to the game. Winning national and state championships was her hobby. She represented India at senior level too winning medal in the Asian Women Team Championship at Macau, China.Besides, she has played for the country on several occasions. Though she completed three WIM norms, she has to reach Elo rating of 2200 to achieve the title. She also has played in many National Women A championships.  
                            <br><span style="padding-left: 30px;">Some of her important </span>credentials are
                            <br>
                        </p>
                        <table class="col-5 offset-lg-3 adop" >
                            <tr>
                                <td style="width: 340px;">›› Former India No. 3</td>
                            </tr><tr>
                                <td style="width: 340px;">›› Women FIDE Master</td>
                            </tr><tr>
                                <td style="width: 340px;">›› Has 3 WIM norms</td>
                            </tr><tr>
                                <td style="width: 340px;">›› National Under 12 champion, Chennai 1988</td>
                            </tr><tr>
                                <td style="width: 340px;">›› National Under 14 champion, Kannur 1991</td>
                            </tr><tr>
                                <td style="width: 340px;">›› National Under 17 champion</td>
                            </tr><tr>
                                <td style="width: 100px;color: green;font-family: italic;"><span style="color:black;">››</span><span style="padding-left: 2px;">Represented</span>India in Asian Women Championship, Calicut 2003</td>
                            </tr><tr>
                                <td style="width: 340px;">›› World Youth Championships, Poland</td>
                            </tr><tr>
                                <td style="width: 340px;">›› World Youth Championships, Czech Republic</td>
                            </tr>
                            <tr>
                                <td style="width: 340px;">›› World Junior, Calicut</td>
                            </tr><tr>
                                <td style="width: 340px;">›› Asian Women team Championship, Macau China</td>
                            </tr>
                            <tr>
                                <td style="width: 340px;">›› Tamil Nadu State Women and age categories champion  - several times</td>
                            </tr>
                        </table>

                        <h3 style="color:red;">
                            <a role="button"> <b style="font-size: 18px;">FIDE Master P. Maheswaran</b></a>
                        </h3><p style="text-align: justify; text-justify: inter-word;">
                            <span style="padding-left: 30px;">Maheswaran is the strongest </span> player from S.R. Rajan’s Rathinam Chess Academy, Sivakasi. A former Tamil Nadu junior champion (2004), he has captained the state team in the National team championship at Gurgaon in 2010, besides being a member of the state team in the Kochi Nationals in 2011. He has the distinction of representing Tamil Nadu in the National Premier championship in Mumbai 2009. He has represented the state in national championships many a time.  His highest rating was 2355, but his true potential is yet to be revealed. He also represented Madurai Kamaraj University for three years and then University of Madras for three years during his MCA course. After joining the Postal Services, he has been instrumental in winning the Tamil Nadu winning the All India Postal Services for the past five years (up to 2019).
                        </p>
                        <table class="col-5 offset-lg-3 adop" >
                            <tr>
                                <td style="width: 340px;">›› FIDE Master</td>
                            </tr><tr>
                                <td style="width: 340px;">›› Tamil Nadu junior champion 2004, Karur</td>
                            </tr><tr>
                                <td style="width: 340px;">›› Tamil Nadu State Blitz champion 2012, Sivakasi</td>
                            </tr>
                            <tr>
                                <td style="width: 100px;color: green;font-family: italic;"><span style="padding-left: 20px;">Represented Tamil Nadu in the</span></td>
                            </tr>
                            <tr>
                                <td style="width: 100px;"><span style="padding-left: 40px;">National Premier Championship 2009</span></td>
                            </tr>
                            <tr>
                                <td style="width: 100px;"><span style="padding-left: 40px;">National Challengers 2009, 2010</span></td>
                            </tr>
                            <tr>
                                <td style="width: 100px;"><span style="padding-left: 40px;">National Team championship 2010 -11</span></td>
                            </tr>
                            <tr>
                                <td style="width: 100px;"><span style="padding-left: 40px;">National Under 18 Vijayawada 2001</span></td>
                            </tr>
                            <tr>
                                <td style="width: 100px;"><span style="padding-left: 40px;">National Under 15 Goa 2001</span></td>
                            </tr>
                            <tr>
                                <td style="width: 100px;"><span style="padding-left: 40px;">National Junior Thirupathy 2004</span></td>
                            </tr>
                            <tr>
                                <td style="width: 100px;"><span style="padding-left: 40px;">National Junior Goa 2003</span></td>
                            </tr>
                            <tr>
                                <td style="width: 100px;"><span style="padding-left: 40px;">National Junior Vijayawada 2002</span></td>
                            </tr>
                            <tr>
                                <td style="width: 100px;"><span style="padding-left: 40px;">National Junior Mumbai 2001</span></td>
                            </tr>
                            <tr>
                                <td style="width: 340px;">›› All India Postal champion 2017</td>
                            </tr><tr>
                                <td style="width: 340px;">›› Runner up – All India Postal Services 2018</td>
                            </tr>
                            <tr>
                                <td style="width: 340px;">›› Runner up – RSC Cochin Rated tournament 2014</td>
                            </tr><tr>
                                <td style="width: 340px;">›› Runner up – ACC Rated tournament, Calicut 2016</td>
                            </tr>
                            <tr>
                                <td style="width: 340px;">›› Member of the Tamil Nadu team which won gold medal in the All India Postal tournament from 2016 – 19</td>
                            </tr>
                            <tr>
                                <td style="width: 340px;">›› Represented MK University and University of Madras for six years</td>
                            </tr>
                            <tr>
                                <td style="width: 340px;">›› Won the SPIC Rating tournament in 2012</td>
                            </tr>
                            <tr>
                                <td style="width: 340px;">›› Won the Goa Rating tournament in 2012</td>
                            </tr>
                        </table>

                        <h3 style="color:red;">
                            <a role="button"> <b style="font-size: 18px;">R. Visalatchi</b></a>
                        </h3><p style="text-align: justify; text-justify: inter-word;">
                            <span style="padding-left: 30px;">One more feather to the</span> district cap. Hailing from a chess family, where her three other sisters are also good rated players, Vislatchi finished third in the National Under 17 championships in Jammu 2010. Thus, she received the honour of representing India in the Asian Youth championships 2011 in Philippines. Another moment of her glory was winning the board prize on behalf of Tamil Nadu in the National team championships at Gurgaon in 2010. With hardly a day before the commencement of her 12th standard board examination, she had the courage and confidence to play in the National team event in Kochi 2011. She also has won several medals in the national and state school games regularly.
                        </p>
                        <h3 style="color:red;">
                            <a role="button"> <b style="font-size: 18px;">K Marimuthu</b></a>
                        </h3><p style="text-align: justify; text-justify: inter-word;">
                            <span style="padding-left: 30px;">The partially blind boy</span> has brought several laurels to the district. He is the reigning state champion (visually challenged) for the past four years (2016 – 19). He won the Under 15 national championship for the visually challenged held at Shirdi, Maharashtra in November 2016. He is only the second national champion from VDCA, after M Safira Shanaz. He also represented India in the Asian Championship for visually challenged held at Mangalore in March 2017, a rare honour bestowed on him. He also won the TN State Premier Chess League for visually challenged held at Madurai in 2017. He is representing regularly Tamil Nadu in the National A championship for visually challenged (elite 14 players) and he finished fifth in 2019, a splendid achievement.
                            <br><span style="padding-left: 30px;">He has won several </span>rated tournaments for visually challenged.
                            <br>
                        </p>
                        <table class="col-5 offset-lg-3 adop" >
                            <tr>
                                <td style="width: 340px;">›› National Under 15 champion for visually challenged 2016 </td>
                            </tr><tr>
                                <td style="width: 340px;">›› Represented India in the Asian Championship for visually challenged 2017 </td>
                            </tr><tr>
                                <td style="width: 340px;">›› State champion for visually challenged 2016 – 19</td>
                            </tr><tr>
                                <td style="width: 340px;">›› Winner of Tamil Nadu State Premier Chess League 2016</td>
                            </tr> 
                            <tr>
                                <td style="width: 340px;">›› University of Madras 2019 – 20</td>
                            </tr> 
                            <tr>
                                <td style="width: 340px;">›› Winner of fide rated tournament for visually challenged Hyderabad 2018, Chennai 2019</td>
                            </tr> 
                            <tr>
                        </table>
                        <h3 style="color:red;">
                            <a role="button"> <b style="font-size: 18px;">S.R. Rajan</b></a>
                        </h3><p style="text-align: justify; text-justify: inter-word;">
                            <span style="padding-left: 30px;">Rajan is the first player </span>from Sivakasi and Virudhunagar district to represent the state in the National Challengers, after clinching the runner up spot in the state men championship in 1974. He was the second best after the then national champion IM Raja Ravishekhar in the prestigious Palani tournament, the only All India tournament held regularly in India in 1980s. After the playing career, he has turned as a coach and has produced many rated players.
                        </p>
                        <h3 style="color:red;">
                            <a role="button"> <b style="font-size: 18px;">M. Paramasivam</b></a>
                        </h3><p style="text-align: justify; text-justify: inter-word;">
                            <span style="padding-left: 30px;">Though serving as a coach,</span>his passion for playing chess has not diminished and produces good results even now. He had represented Tamil Nadu in the National team championships in Moha and has won many state level tournaments like Pearl City Open, Tuticorin and State level tournament at Dindigul. He has also won a few fide rated tournaments including SPIC, Thoothukudi. He tied for the first place at the Rating tournament Thiruvananthapuram in 2012 - 13.
                        </p>
                        <h3 style="color:red;">
                            <a role="button"> <b style="font-size: 18px;">R. Shaadurshan</b></a>
                        </h3><p style="text-align: justify; text-justify: inter-word;">
                            <span style="padding-left: 30px;">Another young boy from Aruppukottai </span> is doing creditably well. As a member of the gold winning Tamil Nadu state team in the Under 14 SGFI games 2018, he received two lakh rupees as the prize money.</p>
                        <h3 style="color:red;">
                            <a role="button"> <b style="font-size: 18px;">Jagendran Kamak</b></a>
                        </h3><p style="text-align: justify; text-justify: inter-word;">
                            <span style="padding-left: 30px;">Jagendran won </span>the gold medal in the Under 14 boys category of the All India PYKA games in New Delhi 2019.
                        </p>
                        <h3 style="color:red;">
                            <a role="button"> <b style="font-size: 18px;">G. Akilan</b></a>
                        </h3><p style="text-align: justify; text-justify: inter-word;">
                            <span style="padding-left: 30px;">2011 - G. Akilan </span>of Kalasalingam University won silver medal in the tournament at Tashkent, Uzbekistan in the chess tournament for hearing impaired players.
                        </p>
                        <h3 style="color:red;">
                            <a role="button"> <b style="font-size: 18px;">Boopathy Raja</b></a>
                        </h3><p style="text-align: justify; text-justify: inter-word;">
                            <span style="padding-left: 30px;">The Aruppukottai </span>player won the 1 st CAK fide rated tournament (B 1600) at Kochi 2015 . Vishnu Viswanathan, Sivakasi joint first KCF fide rated (B 1600) Chennai 2014 - 15
                        </p>
                        <div class="row">
                            <div>
                                <h6 class="test1">
                                    <center> <a role="button" class="collapsed"><b style="font-size: 18px;color: #f3702b;">State Champions From Virudhunagar District </b></a></center>
                                </h6>
                                <h6 class="test2">
                                    <table class=" unstriped table "><th class="test5"><div class="">State Champions From Virudhunagar District</div></th></table>
                                </h6>
                            </div>
                            <div class="table-responsive">   
                                <table class="table">
                                    <tr>
                                        <th style="width: 25%;font-weight: 900;">M. Safira Shanaz, Rajapalayam</th>
                                        <td>State women champion, Rajapalayam 1995, Tirunelveli 2001</td>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <td>State Under 12 champion, Salem, 1987</td>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <td>State Under 13 champion Kovai 1989, Pollachi1990 and Salem1991</td>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <td>State Under 15 champion Sivakasi 1990</td>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <td>State Under 17 champion Rajapalayam 1993</td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 900;">P. Maheswaran, Sivakasi</th>
                                        <td>State junior champion, Karur 2004, State Blitz champion 2011 - 12</td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 900;">K. Marimuthu, Sivakasi</th>
                                        <td>TN State champion for visually challenged – 2019, 18, 17 and 16</td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 900;">M. Asif Mohamed, Rajapalayam</th>
                                        <td>Under 10, Mettur 1985</td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 900;">A. Chithra Selvi, Sivakasi</th>
                                        <td> Under 12 champion, Coimbatore 1989</td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 900;">R. Giri Rajakumari, Sivakasi</th>
                                        <td> Under 10 champion, Coimbatore 1989</td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 900;">J.J. Vale Prasad, Sivakasi</th>
                                        <td>Under 8 champion, Nagercoil, 1998</td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 900;">Sri Vishnu Prabha, Rajapalayam </th>
                                        <td>Under 14 Rapid Championship at Salem 2012</td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 900;">TJ Rathish, Virudhunagar </th>
                                        <td>Under 16 Rapid runner up – 2012 </td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 900;">V. Sakthivel Pandian, Sivakasi </th>
                                        <td>TN State Inter Medicals champion 2014 </td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 900;">A. Yogesh Kumar, Sivakasi </th>
                                        <td>Under 14 Rapid champion Namakkal 2014 -15 </td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 900;">P. Arun Kumar</th>
                                        <td> Under 16 Rapid champion, Namakkal 2014 -15</td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 900;">P. Vishnu Viswanathan, Sivakasi </th>
                                        <td>Under 14 Rapid 2015</td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 900;">P. Akashaya, Sivakasi </th>
                                        <td>Under 14 Girls Rapid 2015, State Schools Under 14 Ooty 2016</td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 900;">M. Sundar Rajan</th>
                                        <td>Veteran, Thoothukudi 2017 (C Kalidass was runner up)</td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 900;">C. Kalidass Veteran,</th>
                                        <td> Karur 2019 and runner up in 2017</td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 900;">M. Asif Mohamed, Rajapalayami</th>
                                        <td>Under 12 champion, Coimbatore 1989</td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 900;">R. Shadhurshhaan</th>
                                        <td> TN State Schools Under 14 in 2018</td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 900;">SR Rajan</th>
                                        <td> State Championship for mrn – runner up, Tirunelveli, 1974</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div>
                                <h6 class="test1">
                                    <center> <a role="button" class="collapsed"><b style="font-size: 18px;color: #f3702b;">Players from the district, who have represented Tamil Nadu State in the Nationals (donor entries excluded) & All India School Games</b></a></center>
                                </h6>
                                <h6 class="test2">
                                    <table class=" unstriped table "><th class="test5"><div class="">Players from the district, who have represented Tamil Nadu State in the Nationals (donor entries excluded) & All India School Games</div></th></table>
                                </h6>
                            </div>
                            <div class="table-responsive">   
                                <table class="table">
                                    <tr>
                                        <th style="width: 25%;font-weight: 900;">M. Safira Shanaz - Rajapalayam</th>
                                        <td>several times</td>
                                    </tr>
                                    <tr>
                                        <th style="width:350px;font-weight: 900;">P. Maheswaran - Sivakasi</th>
                                        <td style="text-align: justify; text-justify: inter-word;">National Premiers Mumbai 2007, National Team Kochi 2010, Gurgaon 2009  National challengers 2010, 2009  National Junior Sivakasi, 2005 Thiruppathi 2004, Goa 2003, Vijayawada 2002, Mumbai 2001, National Under 18 Vijayawada 2001, National Under 15 Goa 2001</td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 900;">R. Visalatchi</th>
                                        <td style="text-align: justify; text-justify: inter-word;">National team Kochi 2010, Gurgaon 2009, National challengers 2010, National Under 17, Jammu &amp; Kashmir 2010, National U 13, Delhi 2006</td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 900;">S.R. Rajan</th>
                                        <td>1980 National B, Delhi</td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 900;">M. Ganesan, Sivakasi</th>
                                        <td>National Junior, Cuddalore 1980</td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 900;">M. Paramasivam, Aruppukottai</th>
                                        <td>National team Moha, Punjab 1999</td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 900;">M. Asif Mohamed - Rajapalayam</th>
                                        <td>1985, 1986, 1988 and 1989</td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 900;">R.S. Rajan, Srivilliputtur</th>
                                        <td>National Under 15, Calicut 1984</td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 900;">A. Chithra Selvi, Sivakasi</th>
                                        <td>National Under 12, Ooty 1989</td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 900;">R. Giri Rajakumari , Sivakasi</th>
                                        <td>National Under 12, Ooty 1989</td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 900;">A. Kanmani Priya</th>
                                        <td>National Under 10, Ooty 1989</td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 900;">A. Sathish Babu, Sivakasi</th>
                                        <td>National Under 14, Ooty 1989</td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 900;">A. Siva Prakash, Sivakasi</th>
                                        <td>National Under 10, Ooty 1989</td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 900;">S. Arun Prasath, Virudhunagar </th>
                                        <td>National Under 10, Thiruvananthapuram 1992, Sub Junior Sivakasi 1996</td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 900;">A. Nagaarjuna,	</th>
                                        <td>National U 13, Delhi 2006</td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 900;">J.J. Vale Prasadh, Sivakasi</th>
                                        <td>Under 8 Nationals 1998</td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 900;">M. Paramasivam, Aruppukottai</th>
                                        <td>National team Moha, Punjab 1999</td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 900;">A. Gokul Ananth, Sivakasi</th>
                                        <td>National Sub Junior, Sivakasi 1996</td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 900;">P. Murali Krishnan, Rajapalayam</th>
                                        <td>National Sub Junior, Sivakasi 1996</td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 900;">2007- R Visalatchi </th>
                                        <td>Champion, TN State schools, championship, Erode</td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 900;">A Ketharnath </th>
                                        <td>runner up TN State schools, championship, Erode</td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 900;">A. Nagaarjuna</th>
                                        <td>National U 13, Delhi 2006 and 2007 – A runner up in TN State under 11 – played the nationals in Haryana</td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 900;">R. Nandhuja, Sivakasi</th>
                                        <td>National Team Championship, Kanpur 2014,TN State schools, championship, Erode</td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 900;">M. Jothi Sankari</th>
                                        <td>National Junior Championship 2016</td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 900;">R. Shadhursshaan</th>
                                        <td>Aruppukottai SGFI Games 2018</td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 900;">K Marimuthu</th>
                                        <td>National A for visually challenged 2016 – 19</td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 900;">KK Jayashri</th>
                                        <td>SGFI games – gold medal 2016</td>
                                    </tr>

                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div>
                                <h6 class="test1">
                                    <center> <a role="button" class="collapsed"><b style="font-size: 18px;color: #f3702b;">University Blues</b></a></center>
                                </h6>
                                <h6 class="test2">
                                    <table class=" unstriped table "><th class="test5"><div class="">University Blues</div></th></table>
                                </h6>
                            </div>
                            <div class="table-responsive">   
                                <table class="table">
                                    <tr>
                                        <th style="width: 25%;font-weight: 900;">M. Ganesan, Sivakasi</th>
                                        <td>1982 Madurai Kamaraj University</td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 900;">M. Safira Shanaz - Rajapalayam</th>
                                        <td>several times – 1997 – 2000 Anna University</td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 900;">M. Asif Mohamed</th>
                                        <td>Madurai Kamaraj University 1995 and 1996</td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 900;">A. Sathish Babu</th>
                                        <td>Madurai Kamaraj University 1997</td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 900;">G. Sasikala, Rajapalayam</th>
                                        <td>2001Madurai Kamaraj University (All India Runner up), Anna University 2004</td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 900;">G. Suresh Kumar, Rajapalayam</th>
                                        <td> Madurai Kamaraj University 2007</td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 900;">R. Nanduja</th>
                                        <td>Sathyabama University 2010</td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 900;">P. Maheswaran, Sivakasi</th>
                                        <td style="text-align: justify; text-justify: inter-word;">2004, 05 and 06 Madurai Kamaraj University and University of Madras 2007, 08 and 2009 2007, 08 and 09 (twice winner of All India Inter University)</td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 900;">K. Hariraj, Virudhunagar </th>
                                        <td>Sathyabama University 2010</td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 900;">R. Nanduja, Sivakasi</th>
                                        <td>Sathyabama University 2010</td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 900;">S. Saravana Ganesh Pandian, Sivakasi</th>
                                        <td>Anna University 2010</td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 900;">V. S. Saravana Ganesh Pandian,a</th>
                                        <td>Anna University 2011</td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 900;">Anandharaj K  Thiruthangal</th>
                                        <td>Madurai Kamaraj University 2019, 2018, & 2017</td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 900;">ACG Hariharan, Sivakasi</th>
                                        <td>Madurai Kamaraj University 2019</td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 900;">K Marimuthu, Sivakasi </th>
                                        <td>University of Madras 2019</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div>
                                <h6 class="test1">
                                    <center> <a role="button" class="collapsed"><b style="font-size: 18px;color: #f3702b;">FIDE Rated Tournaments</b></a></center>
                                </h6>
                                <h6 class="test2">
                                    <table class=" unstriped table "><th class="test5"><div class="">FIDE Rated Tournaments</div></th></table>
                                </h6>
                            </div>
                            <div class="table-responsive">   
                                <table class="table">
                                    <tr>
                                        <th style="width: 25%;font-weight: 900;">M. Paramasivam, Aruppukottai</th>
                                        <td>SPIC Thoothukudi</td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 900;">P. Maheswaran, Sivakasi</th>
                                        <td>SPIC Thoothukudi 2012</td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 900;">P. Maheswaran, Sivakasi</th>
                                        <td>Goa fide rated 2012</td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 900;">P. Maheswaran, Sivakasi</th>
                                        <td>runner up, SIvakasi 2012</td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 900;">Boopathy Raja, Aruppukottai</th>
                                        <td>He won the 1 st CAK fide rated tournament (B 1600) at Kochi 2015</td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 900;">P. Vishnu Viswanathan, Sivakasi</th>
                                        <td> He joint first KCF fide rated (B 1600) Chennai 2014 - 15</td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 900;">R. Shadhursshaan, , Aruppukottai </th>
                                        <td>Runner up (below 1600) Kottayam 2017</td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="row">
                            <div>
                                <h6 class="test1">
                                    <center> <a role="button" class="collapsed"><b style="font-size: 18px;color: #f3702b;">State Tournaments</b></a></center>
                                </h6>
                                <h6 class="test2">
                                    <table class=" unstriped table "><th class="test5"><div class="">State Tournaments</div></th></table>
                                </h6>
                            </div>
                            <div class="table-responsive">   
                                <table class="table">
                                    <tr>
                                        <th style="width: 25%;font-weight: 900;">2002</th>
                                        <td>Sivakasi Jaycees School finished first in the state level inter school tournament at Chennai</td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 900;">2003</th>
                                        <td>Sivakasi Jaycees School finished first in the state level inter school tournament at Coimbatore</td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 900;">2004</th>
                                        <td>Nagarjuna A was third in the TN State Rapid, Thanjavur</td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 900;">2005</th>
                                        <td>Maheswaran P, Winner, state level tournament, Erode</td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 900;">2006</th>
                                        <td>Paramasivam M, Aruppukottai, winner, Pearl City Open, Thoothukudi</td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 900;">2007</th>
                                        <td>Maheswaran P - winner, Pearl City Open, Thoothukudi </td>
                                    </tr>
                                    <tr>
                                        <th style="font-weight: 900;">2008</th>
                                        <td>TN State Schools, Kanchi – A Nagarjuna, R Visalatchi and VS Sakthivel Pandian finished 2nd Yogesh Kumar A – runner up in state level open at Salem 2016 Maheswaran P won the state level tournament at Karur </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div>
                                <h6 class="test1">
                                    <center> <a role="button" class="collapsed"><b style="font-size: 18px;color: #f3702b;">Miscellaneous</b></a></center>
                                </h6>
                                <h6 class="test2">
                                    <table class=" unstriped table "><th class="test5"><div class="">Miscellaneous</div></th></table>
                                </h6>
                            </div>
                            <div class="table-responsive">   
                                <table class="table">
                                    <tr>
                                        <th style="line-height: 1.9;">
                                            <span style="padding-left: 20px;">A. Gokul Ananth, </span>Sivakasi served as Technical official in the World Junior championships, Goa 2002, Commonwealth Championships Mumbai 2003 and January 2004 and Win TV international tournament 2004
                                        </th>
                                    </tr>
                                </table>
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