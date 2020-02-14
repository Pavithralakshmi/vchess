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
         #toTop:after {
                    font-size: 25px;
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
            }
            @media only screen and (max-width: 767px){
                #ofcb{
                    padding-top: 45px;
                }
                .test{
                    font-size:18px;
                }
                #toTop:after {
                    font-size: 30px;
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
                                <h2>Office Bearers</h2>
                                <ol class="breadcrumb greylinks">
                                    <li> <a href="index.php">
                                            Home
                                        </a> </li>
                                    <li class="active">Office Bearers</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="ls section_padding_top_100 section_padding_bottom_100">
                    <div class="container">
                        <div class="row">
                            <div class=" col-sm-12 ">
                                <div >
                                    <h6 class="test1">
                                        <center><a role="button" class="collapsed"><b class="test ">Office Bearers of Virudhunagar District Chess Association Office Bearers 2014 - 2017</b></a> </center>
                                    </h6>
                                    <h6 class="test2">
                                        <table class=" unstriped table "><th class="test3"><div class="">Office Bearers of Virudhunagar District Chess Association Office Bearers 2014 - 2017</div></th></table>
                                    </h6>
                                </div>
                                <div class="table-responsive">
                                    <table class="responsive-card-table unstriped table">
                                        <thead>
                                            <tr>
                                                <th style="color: white;">Designation</th>
                                                <th style="color: white;">Name</th>
                                                <th style="color: white;">Place</th>
                                                <th style="color: white;">Mobile No</th>
                                                <th style="color: white;">E-mail Id</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th data-label="Designation" style="color: white;">Patron</th>
                                                <td data-label="Name">G. Ramamoorthy</td>
                                                <td data-label="Place">Sivakasi</td>
                                                <td data-label="Mobile No." ><i class="icon-telephone-2">&nbsp;&nbsp;<a href="tel: 92442 21199"><span style="font-weight: 600;display: inline;color: black;font-size: 14px;">(+91)  92442 21199</span> </a></i></td>
                                                <td data-label="E-mail Id"><a href="mailto: arasanmoorthy@gmail.com" target="_blank">arasanmoorthy@gmail.com</a></td>
                                            </tr>
                                            <tr>
                                                <th data-label="Designation" style="color: white;">President</th>
                                                <td data-label="Name">A. Gopalsamy	</td>
                                                <td data-label="Place">Rajapalayam</td>
                                                <td data-label="Mobile No." ><i class="icon-telephone-2">&nbsp;&nbsp;<a href="tel:98421 21747"><span style="font-weight: 600;display: inline;color: black;font-size: 14px;">(+91)  98421 21747</span> </a></i></td>
                                                <td data-label="E-mail Id"><a href="mailto: tpgopalsamy@gmail.com" target="_blank">tpgopalsamy@gmail.com</a></td>
                                            </tr>
                                            <tr>
                                                <th data-label="Designation" style="color: white;">Vice Presidents</th>
                                                <td data-label="Name">VMG Rajasekaraan</td>
                                                <td data-label="Place">Virudhunagar</td>
                                                <td data-label="Mobile No." ><i class="icon-telephone-2">&nbsp;&nbsp;<a href="tel: 94431 43823"><span style="font-weight: 600;display: inline;color: black;font-size: 14px;">(+91) 94431 43823</span> </a></i></td>
                                                <td data-label="E-mail Id"><a href="" target="_blank"></a></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td data-label="Name">VR Muthu</td>
                                                <td data-label="Place">Virudhunagar</td>
                                                <td data-label="Mobile No." ><i class="icon-telephone-2">&nbsp;&nbsp;<a href="tel:  93444 52866"><span style="font-weight: 600;display: inline;color: black;font-size: 14px;">(+91)   93444 52866</span> </a></i></td>
                                                <td data-label="E-mail Id"><a href="mailto:threevee@idhayam.com" target="_blank">threevee@idhayam.com</a></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td data-label="Name">Sakthivel</td>
                                                <td data-label="Place">Srivilliputtur</td>
                                                <td data-label="Mobile No." ><i class="icon-telephone-2">&nbsp;&nbsp;<a href="tel: 94431 60249"><span style="font-weight: 600;display: inline;color: black;font-size: 14px;">(+91) 94431 60249</span> </a></i></td>
                                                <td data-label="E-mail Id"><a href="mailto:hareshperians@yahoo.co.in" target="_blank">hareshperians@yahoo.co.in</a></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td data-label="Name">R. Malai Rajan</td>
                                                <td data-label="Place">Sattur</td>
                                                <td data-label="Mobile No." ><i class="icon-telephone-2">&nbsp;&nbsp;<a href="tel: 93612 60504"><span style="font-weight: 600;display: inline;color: black;font-size: 14px;">(+91) 93612 60504</span> </a></i></td>
                                                <td data-label="E-mail Id"><a href="mailto:info@drkvs.com" target="_blank">info@drkvs.com</a></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td data-label="Name">Kesavan V</td>
                                                <td data-label="Place">Sivakasi</td>
                                                <td data-label="Mobile No." ><i class="icon-telephone-2">&nbsp;&nbsp;<a href="tel:  94433 85661"><span style="font-weight: 600;display: inline;color: black;font-size: 14px;">(+91)  94433 85661</span> </a></i></td>
                                                <td data-label="E-mail Id"><a href="mailto:kesavanv222@gmail.com" target="_blank">kesavanv222@gmail.com</a></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>(one more to be co-opted)</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th  data-label="Designation" style="color: white;">Secretary</th>
                                                <td    data-label="Name">SR Rajan</td>
                                                <td  data-label="Place" >Sivakasi</td>
                                                <td data-label="Mobile No." ><i class="icon-telephone-2">&nbsp;&nbsp;<a href="tel:  96779 56616"><span style="font-weight: 600;display: inline;color: black;font-size: 14px;">(+91)  96779 56616</span> </a></i></td>
                                                <td data-label="E-mail Id"><a href="mailto: vdcachess@gmail.com" target="_blank">vdcachess@gmail.com</a></td>
                                            </tr>
                                            <tr>
                                                <th  data-label="Designation" style="color: white;">Treasurer</th>
                                                <td    data-label="Name">V. Sundara Pandian</td>
                                                <td  data-label="Place" >Sivakasi</td>
                                                <td data-label="Mobile No." ><i class="icon-telephone-2">&nbsp;&nbsp;<a href="tel:  94433 74894"><span style="font-weight: 600;display: inline;color: black;font-size: 14px;">(+91)  94433 74894</span> </a></i></td>
                                                <td data-label="E-mail Id"><a href="mailto:" target="_blank"></a></td>
                                            </tr>
                                            <tr>
                                                <th  data-label="Designation" style="color: white;">Joint Secretaries</th>
                                                <td    data-label="Name">M. Paramasivam</td>
                                                <td  data-label="Place" >Aruppulottai</td>
                                                <td data-label="Mobile No." ><i class="icon-telephone-2">&nbsp;&nbsp;<a href="tel: 98653 46334"><span style="font-weight: 600;display: inline;color: black;font-size: 14px;">(+91) 98653 46334</span> </a></i></td>
                                                <td data-label="E-mail Id"><a href="mailto:sivam.chess@rediffmail.com" target="_blank">	sivam.chess@rediffmail.com</a></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td   data-label="Name">R. Anantharam</td>
                                                <td  data-label="Place" >Sivakasi</td>
                                                <td data-label="Mobile No." ><i class="icon-telephone-2">&nbsp;&nbsp;<a href="tel: 94431 55852"><span style="font-weight: 600;display: inline;color: black;font-size: 14px;">(+91) 94431 55852</span> </a></i></td>
                                                <td data-label="E-mail Id"><a href="mailto:vranantharam@gmail.com" target="_blank">vranantharam@gmail.com</a></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td    data-label="Name">M. Meyyappan</td>
                                                <td  data-label="Place" >Rajapalayam</td>
                                                <td data-label="Mobile No." ><i class="icon-telephone-2">&nbsp;&nbsp;<a href="tel: 94437 42996"><span style="font-weight: 600;display: inline;color: black;font-size: 14px;">(+91) 94437 42996</span> </a></i></td>
                                                <td data-label="E-mail Id"><a href="mailto: " target="_blank"></a></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td    data-label="Name">M. Sundarrajan</td>
                                                <td  data-label="Place">Virudhunagar</td>
                                                <td data-label="Mobile No." ><i class="icon-telephone-2">&nbsp;&nbsp;<a href="tel: 94870 51730"><span style="font-weight: 600;display: inline;color: black;font-size: 14px;">(+91) 94870 51730</span> </a></i></td>
                                                <td data-label="E-mail Id"><a href="mailto:bcasundar67@gmail.com" target="_blank">bcasundar67@gmail.com</a></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td    data-label="Name">Dr. Vinodh Madhusudhanan</td>
                                                <td  data-label="Place">Srivilliputtur</td>
                                                <td data-label="Mobile No." ><i class="icon-telephone-2">&nbsp;&nbsp;<a href="tel: 99407 66114"><span style="font-weight: 600;display: inline;color: black;font-size: 14px;">(+91) 99407 66114</span> </a></i></td>
                                                <td data-label="E-mail Id"><a href="mailto:mpvino007@gmail.com" target="_blank">mpvino007@gmail.com</a></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td    data-label="Name">Rm. Manikandan</td>
                                                <td  data-label="Place">Sivakasi</td>
                                                <td data-label="Mobile No." ><i class="icon-telephone-2">&nbsp;&nbsp;<a href="tel: 94433 66433"><span style="font-weight: 600;display: inline;color: black;font-size: 14px;">(+91) 94433 66433</span> </a></i></td>
                                                <td data-label="E-mail Id"><a href="" target="_blank"></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <br>
                            <div class=" col-sm-12 ">
                                <div >
                                    <h6 class="test1">
                                        <center><a role="button" class="collapsed"><b class="test ">Office Bearers of Virudhunagar District Chess Association 2018-19 to 2020-21</b></a> </center>
                                    </h6>
                                    <h6 class="test2">
                                        <table class=" unstriped table "><th class="test3"><div class="">Office Bearers of Virudhunagar District Chess Association 2018-19 to 2020-21</div></th></table>
                                    </h6>
                                </div>
                                <div class="table-responsive">
                                    <table class="responsive-card-table unstriped table">
                                        <thead>
                                            <tr>
                                                <th style="color: white;">Designation</th>
                                                <th style="color: white;">Name</th>
                                                <th style="color: white;">Place</th>
                                                <th style="color: white;">Mobile No.</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th data-label="Designation" style="color: white;">President</th>
                                                <td data-label="Name">A. Gopalsamy	</td>
                                                <td data-label="Place">Rajapalayam</td>
                                                <td data-label="Mobile No." ><i class="icon-telephone-2">&nbsp;&nbsp;<a href="tel:98421 21747"><span style="font-weight: 600;display: inline;color: black;font-size: 14px;">(+91)  98421 21747</span> </a></i></td>
                                            </tr>
                                            <tr>
                                                <th data-label="Designation" style="color: white;">Vice Presidents</th>
                                                <td data-label="Name">VMG Rajasekaraan</td>
                                                <td data-label="Place">Virudhunagar</td>
                                                <td data-label="Mobile No." ><i class="icon-telephone-2">&nbsp;&nbsp;<a href="tel: 94431 43823"><span style="font-weight: 600;display: inline;color: black;font-size: 14px;">(+91)   94431 43823</span> </a></i></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td data-label="Name">Rajan SR</td>
                                                <td data-label="Place" >Sivakasi</td>
                                                <td data-label="Mobile No."><i class="icon-telephone-2"></i></td>
                                            </tr>
                                            <tr>
                                                <td ></td>
                                                <td data-label="Name">Shanmuganathan LPA</td>
                                                <td data-label="Place" >Sattur</td>
                                                <td data-label="Mobile No." ><i class="icon-telephone-2"></i></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td data-label="Name">Iyan Adeendran A</td>
                                                <td  data-label="Place" >Sivakasi</td>
                                                <td data-label="Mobile No." ><i class="icon-telephone-2"></i></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td    data-label="Name">Chithravel K</td>
                                                <td   data-label="Place">Aruppukottai</td>
                                                <td data-label="Mobile No." ><i class="icon-telephone-2"></i> </td>
                                            </tr>
                                            <tr>
                                                <th  data-label="Designation" style="color: white;">Treasurer</th>
                                                <td    data-label="Name">Chockalingam SP</td>
                                                <td  data-label="Place" >Sivakasi</td>
                                                <td  ><i class="icon-telephone-2"></i></td>
                                            </tr>
                                            <tr>
                                                <th data-label="Designation" style="color: white;">Secretary</th>
                                                <td    data-label="Name">Sundar Rajan M</td>
                                                <td   data-label="Place">Virudhunagar,VDCA</td>
                                                <td  data-label="Mobile No."><i class="icon-telephone-2"></i></td>
                                            </tr>
                                            <tr>
                                                <th  data-label="Designation" style="color: white;">Joint Secretaries</th>
                                                <td    data-label="Name">Narendran Kamak</td>
                                                <td   data-label="Place">Sivakasi</td>
                                                <td  data-label="Mobile No."><i class="icon-telephone-2"></i></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td   data-label="Name">Sundarapandian V</td>
                                                <td  data-label="Place" >Sivakasi</td>
                                                <td data-label="Mobile No." ><i class="icon-telephone-2"></i> </td>
                                            </tr>
                                            <tr>
                                                <td ></td>
                                                <td   data-label="Name">M. Meyyappan</td>
                                                <td  data-label="Place" >Rajapalayam</td>
                                                <td  data-label="Mobile No."><i class="icon-telephone-2"></i></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td   data-label="Name">M. Sundarrajan</td>
                                                <td  data-label="Place" >Virudhunagar</td>
                                                <td data-label="Mobile No." ><i class="icon-telephone-2">&nbsp;&nbsp;<a href="tel:  94870 51730"><span style="font-weight: 600;display: inline;color: black;font-size: 14px;">(+91) 94870 51730</span> </a></i></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td    data-label="Name">Ramar P</td>
                                                <td  data-label="Place" >Aruppukottai</td>
                                                <td  data-label="Mobile No." ><i class="icon-telephone-2"></i></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td    data-label="Name">Kandhasamy R</td>
                                                <td  data-label="Place">Thiruchuzhi</td>
                                                <td  data-label="Mobile No." ><i class="icon-telephone-2"></i></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <br>
                            <div class=" col-sm-12 ">
                                <div >
                                    <h6 class="test1">
                                        <center><a role="button" class="collapsed"><b class="test ">Office Bearers of the past and present</b></a> </center>
                                    </h6>
                                    <h6 class="test2">
                                        <table class=" unstriped table "><th class="test3"><div class="">Office Bearers of the past and present</div></th></table>
                                    </h6>
                                </div>
                                <div class="table-responsive">
                                    <table class="responsive-card-table unstriped table">
                                        <thead>
                                            <tr>
                                                <th style="color: white;width: 500px;">Presidents</th>
                                                <th style="color: white;width: 500px;"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td data-label="Name">N.K. Ramasuwamy Raja, Rajapalayam</td>
                                                <td>24.05.1973 - 1979</td>
                                            </tr>
                                            <tr>
                                                <td data-label="Name">N.P.S.S. Rathina Nadar, Sivakasi</td>
                                                <td>	1979 - 1981</td>                            
                                            </tr>
                                            <tr>
                                                <td data-label="Name">A.S.C. Bose, Sivakasi</td>
                                                <td>	1981 - 1990</td>                             
                                            </tr>
                                            <tr>
                                                <td data-label="Name">A.M.S.G. Ramamoorthy, Sivakasi</td>
                                                <td>	1990 - 2014</td>                             
                                            </tr>
                                            <tr>
                                                <td data-label="Name">A. Gopalsamy</td>
                                                <td>	 2014</td>                             
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class=" col-sm-12 ">
                                <div class="table-responsive">
                                    <table class="responsive-card-table unstriped table">
                                        <thead>
                                            <tr>
                                                <th style="color: white;width: 500px;">Secretaries</th>
                                                <th style="color: white;width: 500px;"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td data-label="Name">N. Balasubramanian, Rajapalayam</td>
                                                <td>1973 - 1979</td>
                                            </tr>
                                            <tr>
                                                <td data-label="Name">R. Anantharam, Sivakasi i</td>
                                                <td>1979 - 1986</td>                            
                                            </tr>
                                            <tr>
                                                <td data-label="Name">Ashok Mehta, Sivakasi</td>
                                                <td>	1986 - 1998</td>                             
                                            </tr>
                                            <tr>
                                                <td data-label="Name">R. Vijayann, Sivakasi</td>
                                                <td>1998 - 2012</td>                             
                                            </tr>
                                            <tr>
                                                <td data-label="Name">Mrs. Brindha Ragavan J</td>
                                                <td>	2012 - 2014</td>                             
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class=" col-sm-12 ">
                                <div class="table-responsive">
                                    <table class="responsive-card-table unstriped table">
                                        <thead>
                                            <tr>
                                                <th style="color: white;width: 500px;">Vice Presidents</th>
                                                <th style="color: white;width: 500px;"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td data-label="Name">V.M.G. Rajasekaran, Virudhunagar</td>
                                                <td>1998</td>
                                            </tr>
                                            <tr>
                                                <td data-label="Name">A. Gopalsamy, Rajapalayam</td>
                                                <td>1998 - 2014</td>                            
                                            </tr>
                                            <tr>
                                                <td data-label="Name">Ashok Mehta, Sivakasi</td>
                                                <td>	1998 - 2001</td>                             
                                            </tr>
                                            <tr>
                                                <td data-label="Name">P.P. Lakhani, Sivakasi</td>
                                                <td>1998 - 2009</td>                             
                                            </tr>
                                            <tr>
                                                <td data-label="Name">Annadurai Selvan, Srivilliputtur</td>
                                                <td>	2003 - 2006</td>                             
                                            </tr>
                                            <tr>
                                                <td data-label="Name">Dr. D. Sridhar, Sivakasi</td>
                                                <td>	2009 - 2013</td>                             
                                            </tr>
                                            <tr>
                                                <td data-label="Name">TSPM Sankara Pandian</td>
                                                <td>	2010 - 2014</td>                             
                                            </tr>
                                            <tr>
                                                <td data-label="Name">VR Muthu</td>
                                                <td>2014</td>                             
                                            </tr>
                                            <tr>
                                                <td data-label="Name">V. Kesavan</td>
                                                <td>	2014 -</td>                             
                                            </tr>
                                            <tr>
                                                <td data-label="Name">R. Malairajan</td>
                                                <td>	2014</td>                             
                                            </tr>
                                            <tr>
                                                <td data-label="Name">K. Sakthivel</td>
                                                <td>	2014</td>                             
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class=" col-sm-12 ">
                                <div class="table-responsive">
                                    <table class="responsive-card-table unstriped table">
                                        <thead>
                                            <tr>
                                                <th style="color: white;width: 500px;">Joint Secretaries</th>
                                                <th style="color: white;width: 500px;"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td data-label="Name">R. Gurusamy, Rajapalayam</td>
                                                <td>1998 - 2013</td>
                                            </tr>
                                            <tr>
                                                <td data-label="Name">R. Ganesan, Sattur</td>
                                                <td>	1998 - 2013</td>                            
                                            </tr>
                                            <tr>
                                                <td data-label="Name">S. Thanasekaran, Virudhunagar</td>
                                                <td>1998 - 2014</td>                             
                                            </tr>
                                            <tr>
                                                <td data-label="Name">M. Paramasivam, Aruppukottai</td>
                                                <td>1998</td>                             
                                            </tr>
                                            <tr>
                                                <td data-label="Name">V. Bala Saravanan, Sivakasi</td>
                                                <td>1998 - 2006, 2009 - 2011</td>                             
                                            </tr>
                                            <tr>
                                                <td data-label="Name">Dr. D. Sridhar, Sivakasi</td>
                                                <td>	2009 - 2013</td>                             
                                            </tr>
                                            <tr>
                                                <td data-label="Name">N. Sivasamy, Srivilliputtur</td>
                                                <td>	1998 - 2006</td>                             
                                            </tr>
                                            <tr>
                                                <td data-label="Name">B. Sridhar, Sivakasi</td>
                                                <td>2006 - 2009</td>                             
                                            </tr>
                                            <tr>
                                                <td data-label="Name">S.R. Rajan, Sivakasi</td>
                                                <td>2009 - 2014</td>                             
                                            </tr>
                                            <tr>
                                                <td data-label="Name">R. Anantharam, Sivakasi</td>
                                                <td>2009</td>                             
                                            </tr>
                                            <tr>
                                                <td data-label="Name">M. Meyyappan</td>
                                                <td>2009</td>                             
                                            </tr>
                                            <tr>
                                                <td data-label="Name">M. Sundar rajan</td>
                                                <td>	2014</td>                             
                                            </tr>
                                            <tr>
                                                <td data-label="Name">Dr. Vinodh Madhusudhanan</td>
                                                <td>	2014</td>                             
                                            </tr>
                                            <tr>
                                                <td data-label="Name">Rm Manikandan</td>
                                                <td>	2014</td>                             
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class=" col-sm-12 ">
                                    <div class="panel single-accordion">
                                        <h6 class="test1">
                                            <center><a role="button" class="collapsed"><b style="color:black;font-size: 28px;text-align: justify; text-justify: inter-word;">Office bearers of TN State Association from the District</b></a> </center>
                                        </h6>
                                        <h6 class="test2">
                                            <table class=" unstriped table "><th class="test4"><div>Office bearers of TN State Association from the District</div></th></table>
                                        </h6>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div>
                                                <h6 class="test1">
                                                    <center> <a role="button" class="collapsed"><b style="font-size: 18px;color: #f3702b;">Patron </b></a></center>
                                                </h6>
                                                <h6 class="test2">
                                                    <table class=" unstriped table "><th class="test5"><div class="">Patron</div></th></table>
                                                </h6>
                                            </div>
                                            <div class="table-responsive">   
                                                <table class="table">
                                                    <tr>
                                                        <td  style="    width: 70%;">A.M.S.G. Ramamoorthy, Sivakasi</td>
                                                        <td>2014</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div>
                                                <h6 class="test1">
                                                    <center><a role="button" class="collapsed"><b style="font-size: 18px;color: #f3702b;">Joint secretary</b></a></center>
                                                </h6>
                                                <h6 class="test2">
                                                    <table class=" unstriped table "><th class="test5"><div class="">Joint secretary</div></th></table>
                                                </h6>
                                            </div>
                                            <div class="table-responsive">   
                                                <table class="table">
                                                    <tr>
                                                        <td style="    width: 54%;">R. Anantharam, Sivakasi</td>
                                                        <td>1980 - 1986</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div>
                                                <h6 class="test1">
                                                    <center><a role="button" class="collapsed"><b style="font-size: 18px;color: #f3702b;">Vice Presidents</b></a></center>
                                                </h6>
                                                <h6 class="test2">
                                                    <table class=" unstriped table "><th class="test5"><div class="">Vice Presidents</div></th></table>
                                                </h6>
                                            </div>
                                            <div class="table-responsive">   
                                                <table class="table">
                                                    <tr>
                                                        <td>N.P.S.S. Rathina Nadar, Sivakasi</td>
                                                        <td>1979 - 1981</td>
                                                    </tr>
                                                    <tr>
                                                        <td>A.S.C. Bose, Sivakasi,</td>
                                                        <td>1981 - 1986</td>
                                                    </tr>
                                                    <tr>
                                                        <td>A.M.S.G. Vijayakumar, Sivakasi</td>
                                                        <td>1986 - 1988</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Ashok Mehta, Sivaksi</td>
                                                        <td>1990 - 1994</td>
                                                    </tr>
                                                    <tr>
                                                        <td>A.M.S.G. Ramamoorthy, Sivakasi</td>
                                                        <td>1994 - 2002</td>
                                                    </tr>
                                                    <tr>
                                                        <td>A. Gopalsamy, Rajapalayam</td>
                                                        <td>2002 - 2009</td>
                                                    </tr>
                                                    <tr>
                                                        <td>A.P. Selvarajan, Sivakasi</td>
                                                        <td>2009 </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div>
                                                <h6 class="test1">
                                                    <center><a role="button" class="collapsed"><b style="font-size:18px;color: #f3702b;text-align: justify; text-justify: inter-word;">Joint Secretaries</b></a></center>
                                                </h6>
                                                <h6 class="test2">
                                                    <table class=" unstriped table "><th class="test5"><div class="">Joint Secretaries</div></th></table>
                                                </h6>
                                            </div>
                                            <div class="table-responsive">   
                                                <table class="table">
                                                    <tr>
                                                        <td  >R. Gurusamy, Rajapalayam</td>
                                                        <td>1998 - 2013</td>
                                                    </tr>
                                                    <tr>
                                                        <td  >R. Ganesan, Sattur</td>
                                                        <td>1998 - 2013</td>
                                                    </tr>
                                                    <tr>
                                                        <td  >S. Thanasekaran, Virudhunagar</td>
                                                        <td>1998 - 2014</td>
                                                    </tr>
                                                    <tr>
                                                        <td  >M. Paramasivam, Aruppukottai</td>
                                                        <td>1998</td>
                                                    </tr>
                                                    <tr>
                                                        <td  >V. Bala Saravanan, Sivakasi</td>
                                                        <td>1998 - 2006, 2009 - 2011</td>
                                                    </tr>
                                                    <tr>
                                                        <td  >N. Sivasamy, Srivilliputtur</td>
                                                        <td>1998 - 2006</td>
                                                    </tr>
                                                    <tr>
                                                        <td  >B. Sridhar, Sivakasi</td>
                                                        <td>2006 - 2009</td>
                                                    </tr>
                                                    <tr>
                                                        <td  >S.R. Rajan, Sivakasi</td>
                                                        <td>2009 - 2014</td>
                                                    </tr>
                                                    <tr>
                                                        <td  >R. Anantharam, Sivakasi</td>
                                                        <td>2009</td>
                                                    </tr>
                                                    <tr>
                                                        <td  >M. Meyyappan</td>
                                                        <td>2009</td>
                                                    </tr>
                                                    <tr>
                                                        <td  >M. Sundar rajan</td>
                                                        <td>2014</td>
                                                    </tr>
                                                    <tr>
                                                        <td  >Dr. Vinodh Madhusudhanan</td>
                                                        <td>2014 </td>
                                                    </tr>
                                                    <tr>
                                                        <td  >Rm Manikandan</td>
                                                        <td>2014</td>
                                                    </tr>
                                                </table>
                                            </div>
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