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
         #toTop:after {
                    font-size: 25px;
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
                                <h2>Coaches</h2>
                                <ol class="breadcrumb greylinks">
                                    <li> <a href="index.php">
                                            Home
                                        </a> </li>
                                    <li class="active">Coaches</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="ls section_padding_top_100 section_padding_bottom_100">
                    <div class="container">
                        <div class="row">
                            <div class=" col-sm-12 ">
                                <div class="panel single-accordion">
                                    <h6 class="test1">
                                        <center><a role="button" class="collapsed"><b style="color:black;font-size: 28px;text-align: justify; text-justify: inter-word;">Chess Clubs and Academies in Virudhunagar District</b></a> </center>
                                    </h6>
                                    <h6 class="test2">
                                        <table class=" unstriped table "><th class="test4"><div>Chess Clubs and Academies in Virudhunagar District</div></th></table>
                                    </h6>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div>
                                            <h6 class="test1">
                                                <center> <a role="button" class="collapsed"><b style="font-size: 18px;color: #f3702b;">S.R. Rajan, Sivakasi - ( 76398 20568 ) </b></a></center>
                                            </h6>
                                            <h6 class="test2">
                                                <table class=" unstriped table "><th class="test5"><div class="">S.R. Rajan, Sivakasi - ( 76398 20568 ) </div></th></table>
                                            </h6>
                                        </div>
                                        <div class="table-responsive">   
                                            <table class="table">
                                                <tr><td><span style="padding-left: 37px;"> The most sought after coach in the district. </span>State champions Maheswaran, Visalatchi, Nagaarjuna and Vel Prasadh are his students.</td> </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div>
                                            <h6 class="test1">
                                                <center><a role="button" class="collapsed"><b style="font-size: 18px;color: #f3702b;">C. Kalidas, Sivakasi - ( 99445 31153 )</b></a></center>
                                            </h6>
                                            <h6 class="test2">
                                                <table class=" unstriped table "><th class="test5"><div class="">C. Kalidas, Sivakasi - ( 99445 31153 )</div></th></table>
                                            </h6>
                                        </div>
                                        <div class="table-responsive">   
                                            <table class="table">
                                                <tr>
                                                    <td>  <span style="padding-left: 37px;"> Though started chess coaching late, </span>Kalidas from Sivakasi has produced some good players.</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div>
                                            <h6 class="test1">
                                                <center> <a role="button" class="collapsed"><b style="font-size: 18px;color: #f3702b;">M. Sundarrajan, Virudhunagar - ( 94870 51730 ) </b></a></center>
                                            </h6>
                                            <h6 class="test2">
                                                <table class=" unstriped table "><th class="test5"><div class="">M. Sundarrajan, Virudhunagar - ( 94870 51730 )</div></th></table>
                                            </h6>
                                        </div>
                                        <div class="table-responsive">   
                                            <table class="table">
                                                <tr><td><span style="padding-left: 37px;"> He also relinquished his job, </span>seeking a chess career and it has rewarded him well. After he started coaching stint at Virudhunagar, the number of rated players in the town is on the rise.</td> </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div>
                                            <h6 class="test1">
                                                <center><a role="button" class="collapsed"><b style="font-size: 18px;color: #f3702b;">M.Paramasivam, Aruppukottai - ( 98653 46334 )</b></a></center>
                                            </h6>
                                            <h6 class="test2">
                                                <table class=" unstriped table "><th class="test5"><div class="">M.Paramasivam, Aruppukottai - ( 98653 46334 )</div></th></table>
                                            </h6>
                                        </div>
                                        <div class="table-responsive">   
                                            <table class="table">
                                                <tr>
                                                    <td>  <span style="padding-left: 37px;"> Playing chess and coaching are the two</span> eyes of Paramasivam. A dedicated player and sincere coach. His assignment as a coach in many schools of the district has earned him a good reputation.</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                      <br>
                                <div class="row">
                                    <div class=" col-sm-12 ">
                                        <div >
                                            <h6 class="test1">
                                                <center><a role="button" class="collapsed"><b class="test ">Coaches of Virudhunagar District</b></a> </center>
                                            </h6>
                                            <h6 class="test2">
                                                <table class=" unstriped table "><th class="test3"><div class="">Coaches of Virudhunagar District</div></th></table>
                                            </h6>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="responsive-card-table unstriped table">
                                                <thead class="headcolor">
                                                    <tr>
                                                        <th style="color: white;    width: 35%;">Name</th>
                                                        <th style="color: white;    width: 35%;">Place</th>
                                                        <th style="color: white;    width: 35%;">Phone No</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td data-label="Name" >Rajan S R</td>
                                                        <td data-label="Place" >Sivakasi</td>
                                                        <td data-label="Phone No">76398 20568</td>
                                                    </tr>
                                                    <tr>
                                                        <td data-label="Name" > Paramasivam M</td>
                                                        <td data-label="Place" >Aruppukottai</td>
                                                        <td data-label="Phone No">98653 46334</td>
                                                    </tr>
                                                    <tr>
                                                        <td data-label="Name" >Sundarrajan M</td>
                                                        <td data-label="Place" >Virudhunagar</td>
                                                        <td data-label="Phone No">94870 51730</td>
                                                    </tr>
                                                    <tr>
                                                        <td data-label="Name" >Kalidass C</td>
                                                        <td data-label="Place" >Sivakasi</td>
                                                        <td data-label="Phone No">99445 31153</td>
                                                    </tr>
                                                    <tr>
                                                        <td data-label="Name" >Saravanan G</td>
                                                        <td data-label="Place" >Sivakasi</td>
                                                        <td data-label="Phone No">99425 99399 </td>
                                                    </tr>
                                                    <tr>
                                                        <td data-label="Name" >Arumugam P</td>
                                                        <td data-label="Place" >Rajapalayam</td>
                                                        <td data-label="Phone No">81221 63268</td>
                                                    </tr>
                                                    <tr>
                                                        <td data-label="Name" >Thirumoorthy R</td>
                                                        <td data-label="Place" >Sivakasi</td>
                                                        <td data-label="Phone No">96776 29609</td>
                                                    </tr>
                                                    <tr>
                                                        <td data-label="Name" >Subramanaian</td>
                                                        <td data-label="Place" >Rajapalayam</td>
                                                        <td data-label="Phone No">89039 68137</td>
                                                    </tr>
                                                    <tr>
                                                        <td data-label="Name" >Sundarrajan K</td>
                                                        <td data-label="Place" >Rajapalayam</td>
                                                        <td data-label="Phone No">99522 91074</td>
                                                    </tr>
                                                    <tr>
                                                        <td data-label="Name" >Ramar P</td>
                                                        <td data-label="Place" >Aruppukottai</td>
                                                        <td data-label="Phone No">97887 27426</td>
                                                    </tr>
                                                    <tr>
                                                        <td data-label="Name" >Sundarrajan K</td>
                                                        <td data-label="Place" >Srivilliputtur</td>
                                                        <td data-label="Phone No">99522 91074</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class=" col-sm-12 ">
                                        <div >
                                            <h6 class="test1">
                                                <center><a role="button" class="collapsed"><b class="test ">List of Life Members</b></a> </center>
                                            </h6>
                                            <h6 class="test2">
                                                <table class=" unstriped table "><th class="test3"><div class="">List of Life Members</div></th></table>
                                            </h6>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="responsive-card-table unstriped table">
                                                <thead class="headcolor">
                                                    <tr>
                                                        <th style="color: white;    width: 35%;">Name</th>
                                                        <th style="color: white;    width: 35%;">Place</th>
                                                        <th style="color: white;    width: 35%;">Date Of Join</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td data-label="Name" >TR Dhinakaran</td>
                                                        <td data-label="Place" >Aruppukottai</td>
                                                        <td data-label="Date Of Join">26.02.2002</td>
                                                    </tr>
                                                    <tr>
                                                        <td data-label="Name" > PP Lakhani</td>
                                                        <td data-label="Place" >Sivakasi</td>
                                                        <td data-label="Date Of Join">27.02.2002</td>
                                                    </tr>
                                                    <tr>
                                                        <td data-label="Name" >Dr. D Sridhar</td>
                                                        <td data-label="Place" >Sivakasi</td>
                                                        <td data-label="Date Of Join">27.02.2002</td>
                                                    </tr>
                                                    <tr>
                                                        <td data-label="Name" >M. Vairamuthu</td>
                                                        <td data-label="Place" >Sivakasi</td>
                                                        <td data-label="Date Of Join">03.03.2002</td>
                                                    </tr>
                                                    <tr>
                                                        <td data-label="Name" >S Thanasekaran</td>
                                                        <td data-label="Place" >Virudhunagar</td>
                                                        <td data-label="Date Of Join">05.03.2002</td>
                                                    </tr>
                                                    <tr>
                                                        <td data-label="Name" >R Vijayann</td>
                                                        <td data-label="Place" >Sivakasi</td>
                                                        <td data-label="Date Of Join">05.03.2002</td>
                                                    </tr>
                                                    <tr>
                                                        <td data-label="Name" >M Murugappan</td>
                                                        <td data-label="Place" >Sivakasi</td>
                                                        <td data-label="Date Of Join">05.03.2002</td>
                                                    </tr>
                                                    <tr>
                                                        <td data-label="Name" >PMAND Sasidharan</td>
                                                        <td data-label="Place" >Virudhunagar</td>
                                                        <td data-label="Date Of Join">03.07.2003</td>
                                                    </tr>
                                                    <tr>
                                                        <td data-label="Name" >A, Gopalsamy</td>
                                                        <td data-label="Place" >Rajapalayam</td>
                                                        <td data-label="Date Of Join">03.07.2003</td>
                                                    </tr>
                                                    <tr>
                                                        <td data-label="Name" >G. Ramamoorthy</td>
                                                        <td data-label="Place" >Sivakasi</td>
                                                        <td data-label="Date Of Join">03.07.2003</td>
                                                    </tr>
                                                    <tr>
                                                        <td data-label="Name" >VMG Rajasekaran</td>
                                                        <td data-label="Place" >Virudhunagar</td>
                                                        <td data-label="Date Of Join"></td>
                                                    </tr>
                                                    <tr>
                                                        <td data-label="Name" >R. Anantharam</td>
                                                        <td data-label="Place" >Sivakasi</td>
                                                        <td data-label="Date Of Join"></td>
                                                    </tr>
                                                    <tr>
                                                        <td data-label="Name" >MPTND Ponnappan</td>
                                                        <td data-label="Place" >Virudhunagar</td>
                                                        <td data-label="Date Of Join"></td>
                                                    </tr>
                                                    <tr>
                                                        <td data-label="Name" >SSPK Thilagar</td>
                                                        <td data-label="Place" >Virudhunagar</td>
                                                        <td data-label="Date Of Join">17.07.2010</td>
                                                    </tr>
                                                    <tr>
                                                        <td data-label="Name" >ONC Madhavan</td>
                                                        <td data-label="Place" >Virudhunagar</td>
                                                        <td data-label="Date Of Join">17.07.2010</td>
                                                    </tr>
                                                    <tr>
                                                        <td data-label="Name" >R. Mariappan</td>
                                                        <td data-label="Place" >Virudhunagar</td>
                                                        <td data-label="Date Of Join">17.07.2010</td>
                                                    </tr>
                                                    <tr>
                                                        <td data-label="Name" >Sankara Pandian TKSP</td>
                                                        <td data-label="Place" >Virudhunagar</td>
                                                        <td data-label="Date Of Join"></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class=" col-sm-12 ">
                                        <div >
                                            <h6 class="test1">
                                                <center><a role="button" class="collapsed"><b class="test ">Affilated Clubs	</b></a> </center>
                                            </h6>
                                            <h6 class="test2">
                                                <table class=" unstriped table "><th class="test3"><div class="">Affilated Clubs</div></th></table>
                                            </h6>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="responsive-card-table unstriped table">
                                                <thead class="headcolor">
                                                    <tr>
                                                        <th style="color: white;    width: 35%;"></th>
                                                        <th style="color: white;    width: 35%;">Place</th>
                                                        <!--<th style="color: white;">Mobile No.</th>-->
                                                        <th style="color: white;    width: 35%;">E-mail id</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th data-label="Name" >Sivakasi Chess Club</th>
                                                        <td data-label="Place" >Sivakasi</td>
                                                        <!--<td data-label="Mobile No." ><i class="icon-telephone-2">&nbsp;&nbsp;<a href="tel: 92442 21199"><span style="font-weight: 600;display: inline;color: black;font-size: 14px;">(+91)   92442 21199</span> </a></i></td>-->
                                                        <td  data-label="E-mail id"><a href="vranantharam@gmail.com" target="_blank" style="font-weight: 600;">vranantharam@gmail.com</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th data-label="Name" >Rathinam Chess Academy</th>
                                                        <td data-label="Place" >Sivakasi</td>
                                                        <!--<td data-label="Mobile No." ><i class="icon-telephone-2">&nbsp;&nbsp;<a href="tel: 92442 21199"><span style="font-weight: 600;display: inline;color: black;font-size: 14px;">(+91)   92442 21199</span> </a></i></td>-->
                                                        <td  data-label="E-mail id"><a href="mailto:" target="_blank" style="font-weight: 600;"></a></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Fireworks Representatives Club</th>
                                                        <td data-label="Place" >Sivakasi</td>
                                                        <!--<td data-label="Mobile No." ><i class="icon-telephone-2">&nbsp;&nbsp;<a href="tel: 92442 21199"><span style="font-weight: 600;display: inline;color: black;font-size: 14px;">(+91)   92442 21199</span> </a></i></td>-->
                                                        <td  data-label="E-mail id"><a href="mailto:" target="_blank" style="font-weight: 600;"></a></td>
                                                    </tr>
                                                    <tr>
                                                        <th data-label="Name" >Virudhunagar Chess Club</th>
                                                        <td data-label="Place" >Virudhunagar</td>
                                                        <!--<td data-label="Mobile No." ><i class="icon-telephone-2">&nbsp;&nbsp;<a href="tel: 92442 21199"><span style="font-weight: 600;display: inline;color: black;font-size: 14px;">(+91)   92442 21199</span> </a></i></td>-->
                                                        <td  data-label="E-mail id"><a href="mailto:sakthitradersvnr@yahoo.co.in" target="_blank" style="font-weight: 600;">sakthitradersvnr@yahoo.co.in</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th data-label="Name" >Brilliant Chess Academy</th>
                                                        <td data-label="Place" >Virudhunagar</td>
                                                        <!--<td data-label="Mobile No." ><i class="icon-telephone-2">&nbsp;&nbsp;<a href="tel: 92442 21199"><span style="font-weight: 600;display: inline;color: black;font-size: 14px;">(+91)   92442 21199</span> </a></i></td>-->
                                                        <td  data-label="E-mail id"><a href="mailto:bcasundar67@gmail.com" target="_blank" style="font-weight: 600;">bcasundar67@gmail.com</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th data-label="Name" >Rajapalayam Chess Club</th>
                                                        <td data-label="Place" >Rajapalayam</td>
                                                        <!--<td data-label="Mobile No." ><i class="icon-telephone-2">&nbsp;&nbsp;<a href="tel: 92442 21199"><span style="font-weight: 600;display: inline;color: black;font-size: 14px;">(+91)   92442 21199</span> </a></i></td>-->
                                                        <td  data-label="E-mail id"><a href="mailto:tpgopalsamy@gmail.com" target="_blank" style="font-weight: 600;">tpgopalsamy@gmail.com</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th data-label="Name" >APS Chess Academy</th>
                                                        <td data-label="Place" >Rajapalayam</td>
                                                        <!--<td data-label="Mobile No." ><i class="icon-telephone-2">&nbsp;&nbsp;<a href="tel: 92442 21199"><span style="font-weight: 600;display: inline;color: black;font-size: 14px;">(+91)   92442 21199</span> </a></i></td>-->
                                                        <td  data-label="E-mail id"><a href="mailto:apschessacademy@gmail.com" target="_blank" style="font-weight: 600;">apschessacademy@gmail.com</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th data-label="Name" >Sree Sowdambika CE</th>
                                                        <td data-label="Place" >Aruppukottai</td>
                                                        <!--<td data-label="Mobile No." ><i class="icon-telephone-2">&nbsp;&nbsp;<a href="tel: 92442 21199"><span style="font-weight: 600;display: inline;color: black;font-size: 14px;">(+91)   92442 21199</span> </a></i></td>-->
                                                        <td  data-label="E-mail id"><a href="mailto:" target="_blank" style="font-weight: 600;"></a></td>
                                                    </tr>
                                                    <tr>
                                                        <th data-label="Name" >Aruppukottai Chess Club</th>
                                                        <td data-label="Place" >Aruppukottai </td>
                                                        <!--<td data-label="Mobile No." ><i class="icon-telephone-2">&nbsp;&nbsp;<a href="tel: 92442 21199"><span style="font-weight: 600;display: inline;color: black;font-size: 14px;">(+91)   92442 21199</span> </a></i></td>-->
                                                        <td  data-label="E-mail id"><a href="mailto:pramar1987@gmail.com" target="_blank" style="font-weight: 600;">pramar1987@gmail.com</a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
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