<?php include 'db.php'; ?>

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

            .pagination a.active {
                background-color: #4CAF50;
                color: white;
                border-radius: 5px;
            }

            .pagination a:hover:not(.active) {
                background-color: #ddd;
                border-radius: 5px;
            }

            thead, tfoot {
                /*background:#f9f9f9;*/
                display:table;
                width:100%;
                width:calc(100% - 25px);
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
                width:98%;
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

                        </div>
                    </div>
                </section>

                <section class="ls section_padding_top_90 section_padding_bottom_110">
                    <div class="container">
                        <div class="row">
                            <h4 style="color:#e85242;"><center>Click Here To Download Files</center></h4>
                        </div>
                        <div class="row">
                            <div class=" col-sm-12 ">
                                <div class="table-responsive" style="height: 390px;overflow: auto;" id="append_table">
                                    <table class="responsive-card-table unstriped table">
                                        <thead class="headcolor">
                                            <tr>
                                                <th style="color: white; width: 250px;" scope="col">File Name</th>
                                                <th style="color: white;width: 250px;" scope="col">File</th>
                                                <th style="color: white;width: 250px;" scope="col">View</th>
                                                <th style="color: white;width: 250px;" scope="col">Download</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;
//                                            $sql2 = "SELECT `id`,`fide_id`, `name`,`irtg`,`club` ,`dob`  FROM vdca_ratedplayer order by id desc LIMIT $offset, $no_of_records_per_page";
                                            $sql2 = "SELECT  *  FROM vdca_files where `active` = '0'  order by id desc ";
                                            $result2 = mysqli_query($mysqli, $sql2);
                                            while ($row = mysqli_fetch_assoc($result2)) {
                                                ?>
                                                <tr>
                                                    <td data-label="File Name" ><?php echo $row['title']; ?></th>
                                                    <td data-label="File" ><?php echo $row['image']; ?></td>
                                                    <td data-label="View" ><a href="admin/master/uploads/<?php echo $row['image']; ?>" target="_blank">View</a></td>
                                                    <td data-label="Download" ><a href="admin/master/uploads/<?php echo $row['image']; ?>" download>Download</a></td>
                                                </tr>
                                                <?php
                                                $i++;
                                            }
                                            ?>
                                        </tbody>
                                    </table>
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