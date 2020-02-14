<?php
include 'db.php';
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
            .headcolor{
                background-color: #f3702b;
            }
            td{
                /*font-weight: 600;*/
            }
            .responsive-card-table {
                border-collapse: collapse;
            }

            .responsive-card-table.unstriped tbody {
                background-color: transparent;
            }
            @media screen and (max-width: 640px) {
                .responsive-card-table th {
                    /*background-color: #72bf50;*/
                    background-color: #a1d276;
                }
                #toTop:after {
                    font-size: 25px;
                }
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
                    color: #e85242;
                    background: #ffffff;
                    text-align: justify;
                    text-justify: inter-word;
                }
                .test4{
                    color: #e85242;
                    background: #ffffff;
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
            thead, tfoot {
                /*background:#f9f9f9;*/
                display:table;
                width:100%;
                /*width:calc(100% - 17px);*/
            }
            tbody {
                height:300px;
                overflow:auto;
                overflow-x:hidden;
                display:block;
                width:100%;
            }
            tbody tr {
                display:table;
                width:100%;
                table-layout:fixed;
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
                                <h2>Arbiter's Profile</h2>
                                <ol class="breadcrumb greylinks">
                                    <li> <a href="index.php">
                                            Home
                                        </a> </li>
                                    <li class="active">Arbiter's Profile</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="ls section_padding_top_100 section_padding_bottom_100">
                    <div class="container">
                        <div class="row">
                            <h2 style="color:red;"><b style="font-size: 22px;">R. Anantharam, International Arbiter</b></h2>
                            <div class="table-responsive col-lg-6">   
                                <table class=" unstriped table">
                                    <thead class="headcolor">
                                        <tr>
                                            <th scope="col" ><h5  style="color: white; ">Chief arbiter for international tournaments</h5></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>      
                                                <ul class="list-group ">
                                                    <li class="list-group-item" >&#8226;<span style="padding-left:5px;"> World Junior Chess Championships, Chennai 2011, 2013 and 2016.</span></li>
                                                    <li class="list-group-item" >&#8226;<span style="padding-left:5px;">World Schools Chess championships. – Singapore, 2008</span></li>
                                                    <li class="list-group-item" >&#8226;<span style="padding-left:5px;"> World Youth Olympiad 2017</span></li>
                                                    <li class="list-group-item" >&#8226;<span style="padding-left:5px;"> World Team Championships for Blind 2012</span></li>
                                                    <li class="list-group-item" >&#8226;<span style="padding-left:5px;"> Commonwealth Chess Championships., Delhi 2008, 2010 and 2012</span></li>
                                                    <li class="list-group-item" >&#8226;<span style="padding-left:5px;"> Asian Youth Chess Championships. Delhi 2009</span></li>
                                                    <li class="list-group-item" >&#8226;<span style="padding-left:5px;">Asian Senior Chess Championships, Lebanon 2010</span></li>
                                                    <li class="list-group-item" >&#8226;<span style="padding-left:5px;">Asian Amateur Chess Championships, Lebanon 2010</span></li>
                                                    <li class="list-group-item" >&#8226;<span style="padding-left:5px;">Asian Junior Chess Championships, Mumbai 2007, Chennai 2008, Sri Lanka 2009 and Chennai 2010</span></li>
                                                    <li class="list-group-item" >&#8226;<span style="padding-left:5px;">Asian Team championships, Kolkata 2009</span></li>
                                                    <li class="list-group-item" >&#8226;<span style="padding-left:5px;">Asian Men Championship, Hyderabad 2005</span></li>
                                                    <li class="list-group-item" >&#8226;<span style="padding-left:5px;">Women Grand Prix, Russia 2016</span></li>
                                                    <li class="list-group-item" >&#8226;<span style="padding-left:5px;">TATA Steel Chess India 2018</span></li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="table-responsive col-lg-6">   
                                <table class=" unstriped table">
                                    <thead class="headcolor">
                                        <tr>
                                            <th style="color: white; " scope="col " ><h5  style="color: white; ">Chief arbiter for National Championships</h5></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>      
                                                <ul class="list-group ">
                                                    <li class="list-group-item" >&#8226;<span style="padding-left:5px;"> National Premiers Visakhapatnam 2005, Atul 2006, Chennai 2007. Mangalore 2008</span></li>
                                                    <li class="list-group-item" >&#8226;<span style="padding-left:5px;"> Mumbai 2009, Delhi 2010, Aurangabad 2011, Kolkata 2012, Jalgaon 2013, Kottayam 2014, Tiruvarur 2015, and Patna 2017</span></li>
                                                    <li class="list-group-item" >&#8226;<span style="padding-left:5px;"> National Women Premier Kolkata 2013</span></li>
                                                    <li class="list-group-item" >&#8226;<span style="padding-left:5px;">National Team championships Vijayawada 2003, Pondicherry 2007, Gurgaon 2010</span></li>
                                                    <li class="list-group-item" >&#8226;<span style="padding-left:5px;"> Bhopal 2017, Kolkata 2019</span></li>
                                                    <li class="list-group-item" >&#8226;<span style="padding-left:5px;"> National Challengers (B) Vijayawada 2004</span></li>
                                                    <li class="list-group-item" >&#8226;<span style="padding-left:5px;"> National Under 25, Vijayawada 2003</span></li>
                                                    <li class="list-group-item" >&#8226;<span style="padding-left:5px;"> National Junior Sivakasi 1999, Thirupathi 2004, Sivakasi 2005</span></li>
                                                    <li class="list-group-item" >&#8226;<span style="padding-left:5px;"> National Under 18 Chennai 2002, Vijayawada 2003</span></li>
                                                    <li class="list-group-item" >&#8226;<span style="padding-left:5px;"> National Sub Junior Sivakasi 1996, Visakhapatnam 2007</span></li>
                                                    <li class="list-group-item" >&#8226;<span style="padding-left:5px;"> National Under 12 & 14, Chennai 2002</span></li>
                                                    <li class="list-group-item" >&#8226;<span style="padding-left:5px;"> National Cities, Visakapatnam 2009</span></li>
                                                    <li class="list-group-item" >&#8226;<span style="padding-left:5px;"> National Rapid, Hyderabad 2009, Ahmedabad 2018</span></li>
                                                    <li class="list-group-item" >&#8226;<span style="padding-left:5px;"> National Blitz, Vijayawada 2003</span></li>
                                                    <li class="list-group-item" >&#8226;<span style="padding-left:5px;"> National Schools, Nagpur 2016 and 2017</span></li>
                                                    <li class="list-group-item" >&#8226;<span style="padding-left:5px;"> National Under 7, Tumkur 2018,Pondicherry 2016</span></li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="table-responsive col-lg-6">   
                                <table class=" unstriped table">
                                    <thead class="headcolor">
                                        <tr>
                                            <th style="color: white; " scope="col " ><h5  style="color: white; ">Deputy chief arbiter for international tournaments</h5></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>      
                                                <ul class="list-group ">
                                                    <li class="list-group-item" >&#8226;<span style="padding-left:5px;"> World Youth Chess Championships – Turkey 2009 and Vietnam 2008</span></li>
                                                    <li class="list-group-item" >&#8226;<span style="padding-left:5px;"> Asian Youth Chess Championships, Philippines 2011, UAE 2007 and Iran 2008</span></li>
                                                    <li class="list-group-item" >&#8226;<span style="padding-left:5px;"> Asian Indoor Games, Vietnam 2009</span></li>
                                                    <li class="list-group-item" >&#8226;<span style="padding-left:5px;"> Asian Cities, Indonesia 2011</span></li>
                                                    <li class="list-group-item" >&#8226;<span style="padding-left:5px;"> Commonwealth Chess Championships, South Africa 2011</span></li>
                                                    <li class="list-group-item" >&#8226;<span style="padding-left:5px;"> Asian Team championships, Visakhapatnam 2007</span></li>
                                                    <li class="list-group-item" >&#8226;<span style="padding-left:5px;"> Chief of Indian delegate – World Youth Chess Championships, Brazil, 1995</span></li>
                                                    <li class="list-group-item" >&#8226;<span style="padding-left:5px;">Indian team manager – British Chess Championships, London, 2002</span></li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="table-responsive col-lg-6">   
                                <table class=" unstriped table">
                                    <thead class="headcolor">
                                        <tr>
                                            <th style="color: white; " scope="col " ><h5  style="color: white; ">World Chess Federation </h5></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>      
                                                <ul class="list-group ">
                                                    <li class="list-group-item" >&#8226;<span style="padding-left:5px;"> Member,</span></li>
                                                    <li class="list-group-item" >&#8226;<span style="padding-left:5px;"> Arbiters’ Commission,</span></li>
                                                    <li class="list-group-item" >&#8226;<span style="padding-left:5px;"> Former Councilor,</span></li>
                                                    <li class="list-group-item" >&#8226;<span style="padding-left:5px;"> Former Member,</span></li>
                                                    <li class="list-group-item" >&#8226;<span style="padding-left:5px;">Qualification Commission,</span></li>
                                                    <li class="list-group-item" >&#8226;<span style="padding-left:5px;">SPP (Pairings) Commission,</span></li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="table-responsive col-lg-6">   
                                <table class=" unstriped table">
                                    <thead class="headcolor">
                                        <tr>
                                            <th style="color: white; " scope="col " ><h5  style="color: white; ">Served as Chess Technical Official in</h5></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>      
                                                <ul class="list-group ">
                                                    <li class="list-group-item" >&#8226;<span style="padding-left:5px;"> Asian Games – China 2010</span></li>
                                                    <li class="list-group-item" >&#8226;<span style="padding-left:5px;"> World Mind Sports, China 2008</span></li>
                                                    <li class="list-group-item" >&#8226;<span style="padding-left:5px;">Asian Cities Indonesia 2011</span></li>
                                                    <li class="list-group-item" >&#8226;<span style="padding-left:5px;"> Asian Indoor Games – China, 2007, Vietnam 2009, Korea 2014,Turkmenistan 2017</span></li>
                                                    <li class="list-group-item" >&#8226;<span style="padding-left:5px;"> World Cities Chess Championships, Al Ain 2012</span></li>
                                                    <li class="list-group-item" >&#8226;<span style="padding-left:5px;"> Asian Chess Championships, Al Ain 2015</span></li>
                                                    <li class="list-group-item" >&#8226;<span style="padding-left:5px;"> Asian Team Championships Abu Dhabi 2016</span></li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="table-responsive col-lg-6">   
                                <table class=" unstriped table">
                                    <thead class="headcolor">
                                        <tr>
                                            <th style="color: white; " scope="col " ><h5  style="color: white; ">Chairman, Arbiters’ Commission in</h5></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>      
                                                <ul class="list-group ">
                                                    <li class="list-group-item" >&#8226;<span style="padding-left:5px;"> All India Chess Federation</span></li>
                                                    <li class="list-group-item" >&#8226;<span style="padding-left:5px;"> IBCA</span></li>
                                                    <li class="list-group-item" >&#8226;<span style="padding-left:5px;">Tamil Nadu State Chess Association</span></li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr class="headcolor">
                                            <th style="color: white; " scope="col " ><h5  style="color: white; ">Asian Chess Federation</h5></th>
                                        </tr>

                                        <tr>
                                            <td>      
                                                <ul class="list-group ">
                                                    <li class="list-group-item" >&#8226;<span style="padding-left:5px;">Member</span></li>
                                                    <li class="list-group-item" >&#8226;<span style="padding-left:5px;"> Arbiters’ Council,</span></li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <table class=" unstriped table">
                            <tbody style="display: contents;">
                                <tr>
                                    <td>      
                                        <ul class="list-group ">
                                            <li class="list-group-item" >&#8226;<span style="padding-left:5px;"> Vice President of Tamil Nadu State Chess Association</span></li>
                                            <li class="list-group-item" >&#8226;<span style="padding-left:5px;"> First Indian to serve as deputy chief arbiter in World Youth Chess Chps. – Turkey 2007, 2009 and Vietnam 2008</span></li>
                                            <li class="list-group-item" >&#8226;<span style="padding-left:5px;">Only Indian to serve as Sector arbiter in three World Chess Olympiads - Norway 2014,Azerbaijan 2016 and Batumi Georgia 2018</span></li>
                                        </ul>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="row">
                            <h2 style="color:red;"><b style="font-size: 22px;">R. Gurusamy, Rajapalayam</b></h2>
                        </div>
                        <div class="table-responsive">   
                            <table class=" unstriped table">
                                <tbody style="display: contents;">
                                    <tr>
                                        <td>      
                                            <ul class="list-group ">
                                                <li class="list-group-item" >&#8226;<span style="padding-left:5px;"> FIDE Arbiter from 2009</span></li>
                                                <li class="list-group-item" >&#8226;<span style="padding-left:5px;">Chief arbiter for State championships</span></li>
                                                <li class="list-group-item" >&#8226;<span style="padding-left:5px;">State U 17, Aruppukottai 2002 and Rajapalayam 2004, Sivakasi 2009</span></li>
                                                <li class="list-group-item" >&#8226;<span style="padding-left:5px;">State Junior Sivakasi 2007</span></li>
                                                <li class="list-group-item" >&#8226;<span style="padding-left:5px;">State Under 9 Hosur 2009 and Erode 2010</span></li>
                                                <li class="list-group-item" >&#8226;<span style="padding-left:5px;">Arbiter, ONGC Cup GM tournament, Hyderabad 2006, several national championships, FIDE rated tournaments and state championships.</span></li>
                                            </ul>
                                        </td>
                                    </tr>
<!--                                        <thead class="headcolor"><th style="color: white; " scope="col " ><h5 style="color: white;">Arbiter, ONGC Cup GM tournament, Hyderabad 2006, several national
championships, FIDE rated tournaments and state championships</h5></th></thead>-->
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <h2 style="color:red;"><b style="font-size: 22px;">V. Bala Saravanan, National Arbiter</b></h2>
                        </div>
                        <div class="table-responsive">   
                            <table class=" unstriped table">
                                <tbody style="display: contents;">
                                    <tr>
                                        <td>      
                                            <ul class="list-group ">
                                                <li class="list-group-item" >&#8226;<span style="padding-left:5px;">Arbiter, National Junior championships Sivakasi 1999 and 2005</span></li>
                                                <li class="list-group-item" >&#8226;<span style="padding-left:5px;">Arbiter, Inter Petroleum tournament, Ooty 2008</span></li>
                                                <li class="list-group-item" >&#8226;<span style="padding-left:5px;">Arbiter for many state championships</span></li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <h2 style="color:red;"><b style="font-size: 22px;"> B. Sridhar, National Arbiter</b></h2>
                        </div>
                        <div class="table-responsive">   
                            <table class=" unstriped table">
                                <tbody style="display: contents;">
                                    <tr>
                                        <td>      
                                            <ul class="list-group ">
                                                <li class="list-group-item" >&#8226;<span style="padding-left:5px;">Arbiter, National Junior championships Sivakasi 1999 and 2005</span></li>
                                                <li class="list-group-item" >&#8226;<span style="padding-left:5px;">Arbiter for many state championships</span></li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <h2 style="color:red;"><b style="font-size: 22px;">P. Arumugam, National Arbiter</b></h2>
                        </div>
                        <div class="table-responsive">   
                            <table class=" unstriped table">
                                <tbody style="display: contents;">
                                    <tr>
                                        <td>      
                                            <ul class="list-group ">
                                                <li class="list-group-item" >&#8226;<span style="padding-left:5px;">Tamil Nadu Team Manager for National Team Championships Bhopal 2017 and Kolkata 2019.</span></li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                </section>
            </div>
        <?php include 'footer.php'; ?>
        </div>
<?php include'js.php'; ?>
    </body>
</html>