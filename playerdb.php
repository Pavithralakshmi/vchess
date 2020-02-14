<?php
include 'db.php';
$current_file_name = basename($_SERVER['PHP_SELF']);

if (isset($_GET['pageno'])) {
    $pageno = $_GET['pageno'];
} else {
    $pageno = 1;
}
$no_of_records_per_page = 25;
$offset = ($pageno - 1) * $no_of_records_per_page;

$total_pages_sql = "SELECT COUNT(*) FROM vdca_players_db";
$result = mysqli_query($mysqli, $total_pages_sql);
$total_rows = mysqli_fetch_array($result)[0];
$total_pages = ceil($total_rows / $no_of_records_per_page);

$sql2 = "SELECT * FROM vdca_players_db LIMIT $offset, $no_of_records_per_page";
//        $res_data = mysqli_query($mysqli,$sql2);
//        while($row = mysqli_fetch_array($res_data)){
//            //here goes the data
//        }
if (isset($_POST['name_search'])) {
    $search = $_POST['name_search'];
    ?>

    <table class="responsive-card-table unstriped table">
        <thead class="headcolor">
            <tr>
                <th style="color: white;width: 60px;">S No</th>
                <th style="color: white;width: 103px;">FIDE Id</th>
                <th style="color: white;width: 118px;">Name</th>
                <th style="color: white;width: 92px;">Gender</th>
                <th style="color: white;width: 100px;">Birth Year</th>
                <th style="color: white;width: 128px;">Father's Name</th>
                <th style="color: white;width: 110px;">City</th>
                <th style="color: white;width: 110px;">VDCA ID</th>
                <th style="color: white;width: 95px;">Rating</th>
                <th style="color: white;width: 95px;">AICF</th>
                <th style="color: white;width: 95px;">TNSCA</th>
                <th style="color: white;"></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 1;
            $sql2 = "SELECT `id`,`fide_id`, `name`, `gender`,  `father_name`, `city`, `vdca_id`, `rating`, `aicf`, `tnsca`,`dob` FROM vdca_players_db WHERE name like '%$search%' ";
            $result2 = mysqli_query($mysqli, $sql2);
            while ($row2 = mysqli_fetch_assoc($result2)) {
                $name = $row2['name'];
                $dob = $row2['dob'];
                $fide_id = $row2['fide_id'];
                $gender = $row2['gender'];
                $father_name = $row2['father_name'];
                $vdca_id = $row2['vdca_id'];
                $rating = $row2['rating'];
                $aicf = $row2['aicf'];
                $tnsca = $row2['tnsca'];
                $city = $row2['city'];
                ?>
                <tr>
                    <td data-label="S No"style="width: 60px;" ><?php echo $i; ?></th>
                    <td data-label="FIDE Id" style="width: 103px;"><?php echo $fide_id; ?></td>
                    <td data-label="Name"style="width: 118px;" ><?php echo $name; ?></th>
                    <td data-label="Gender" style="width: 92px;"><?php echo $gender; ?></th>
                    <td data-label="Dob"  style="width: 100px;"><?php echo date('Y', strtotime($dob)); ?></td>
                    <td data-label="Fathers Name" style="width: 128px;"><?php echo $father_name; ?></td>
                    <td data-label="City" style="width: 110px;"><?php echo $city; ?></td>
                    <td data-label="VDCA ID" style="width: 110px;"><?php echo $vdca_id; ?></td>
                    <td data-label="Rating" style="width: 95px;"><?php echo $rating; ?></td>
                    <td data-label="AICF" style="width: 95px;"><?php echo $aicf; ?></td>
                    <td data-label="TNSCA" style="width: 95px;"><?php echo $tnsca; ?></td>
                    <td> <button type="button" class="btn btn-primary MyModal" id="MyModal<?php echo $vdca_id; ?>" data-vdca_id="<?php echo $vdca_id; ?>" onclick="mydfunction('<?php echo $vdca_id; ?>')">Show Id Card</button></td>

                </tr>
                <?php
                $i++;
            }
            ?>
        </tbody>
    </table>
    <?php
    exit;
}
?>
<?php
if (isset($_FILES['image'])) {
//        echo 'file';exit;
    if ($_FILES["image"]["name"]) {
        $file_name = "../../upload_category/" . round(microtime(true)) . '_1.' . pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
        //$file= round(microtime(true)) . '.' . pathinfo($_FILES["players_image"]["name"], PATHINFO_EXTENSION);
        //$filename = pathinfo($file_name);
//            print_r($file_name);exit;
        $file_tmp = $_FILES['image']['tmp_name'];
        move_uploaded_file($file_tmp, $file_name);
    }
}

if (isset($_POST['MyModal'])) {
    $id1 = $_POST['MyModal'];
    ?>
    <div class="body-message">
        <div class="row" style="display: flex;">
            <?php
//            $sql3 = "SELECT * FROM `vdca_players_db`order by id desc LIMIT $offset, $no_of_records_per_page";
            $sql3 = "SELECT * FROM `vdca_players_db` where `vdca_id`='$id1'";
            $result3 = mysqli_query($mysqli, $sql3);
            while ($row3 = mysqli_fetch_assoc($result3)) {
                $id = $row3['id'];
                $name = $row3['name'];
                $dob = $row3['dob'];
                $fide_id = $row3['fide_id'];
                $vdca_id = $row3['vdca_id'];
                $gender = $row3['gender'];
                $father_name = $row3['father_name'];
                $rating = $row3['rating'];
                $aicf = $row3['aicf'];
                $tnsca = $row3['tnsca'];
                $city = $row3['city'];
                $image = $row3['photo'];
                ?>
                <div class="col-lg-3 smbody">
                    <img  data-id='<?php echo "../../" . $image; ?>' width="100px" alt="No Image"  height="100px"src="<?php if ($image) {
            echo $image;
        } else {
            if ($gender == "Male") {
                echo 'images/man.jpg';
            } else {
                echo 'images/woman.jpg';
            }
        } ?>"<br>
                </div>
                <div class="col-lg-6  smbody">
                    <strong> <span class="lg1print">Name <span  class="lgprint">:</span> <?php echo $name; ?></span></strong><br>
                    <strong> <span> VDCA Regn.No<span>:</span> <?php echo $vdca_id; ?></span></strong><br>
                    <strong><span>City <span class="lgprint1">: </span> <?php echo $city; ?></span></strong><br>
                    <strong><span>Valid Upto <span class="lgprint2">: </span><?php echo date('F Y', strtotime($row3['lapsed'])); ?></span></strong>
                </div>
                <div class="col-lg-3 smbody1" style="margin-left: 48px;margin-right: 45px;margin-top: 55px;">
                    <span style="float:right;"><img src="sign.png" alt="sign" width="250"/></span>
                </div>
            </div>
        </div>
        <?php
    }
    exit;
}
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
            @media screen and (min-width: 768px) {
                .lgprint{
                    padding-left: 67px;
                }
                .lgprint1{
                    padding-left: 78px;
                }
                .lgprint2{
                    padding-left:33px;
                }
                .lg1print{
                    padding-left: 5px;
                }
            }
            @media screen and (max-width: 768px) {
                .lgprint{
                    padding-left: 0;
                }
                .lgprint1{
                    padding-left: 0;
                }
                .lgprint2{
                    padding-left:0;
                }
                .smbody{
                    width: 69%;
                }
                .smbody1{
                    width: 21%;
                    margin-left: 0; 
                    margin-right: 0;
                }
            }
            .modal-state:checked + .modal {
                opacity: 1;
                visibility: visible;
            }

            .modal-state:checked + .modal .modal__inner {
                top: 0;
            }

            .modal__inner {
                transition: top .25s ease;
                /*position: absolute;
    top: -20%;
    right: 0;
    bottom: 0;
    left: 0;
    /*width: 55%;*/
                margin: auto;
                overflow: auto;
                background: #fff;
                border:10px solid #ccc;
                /*border-radius: 5px;*/
                padding: 1em 1em;
                height: 36%;
            }

            .modal__close {
                position: absolute;
                right: 1em;
                top: 1em;
                width: 1.1em;
                height: 1.1em;
                cursor: pointer;
            }

            .modal__close:after,
            .modal__close:before {
                content: '';
                position: absolute;
                width: 2px;
                height: 1.5em;
                background: #ccc;
                display: block;
                transform: rotate(45deg);
                left: 50%;
                margin: -3px 0 0 -1px;
                top: 0;
            }

            .modal__close:hover:after,
            .modal__close:hover:before {
                background: #aaa;
            }

            .modal__close:before {
                transform: rotate(-45deg);
            }

            @media screen and (max-width: 768px) {

                .modal__inner {
                    width: 90%;
                    height: 90%;
                    box-sizing: border-box;
                }
                .model-title1{
                    font-size: 12px;
                }
                .imgsm{
                    max-width: 100%;
                }
                .flexsm{
                    display: flex;
                }
                .smsize{
                    color: #797878;
                    line-height: 10px;
                    margin: 5px;
                    font-size: 11px;
                }
            }

            /* Other
             * =============================== */
            /*body {
              padding: 1%;
              font: 1/1.5em sans-serif;
              text-align: center;
              font-family: 'Roboto', sans-serif;
            }
            */
            .btn {
                cursor: pointer;
                background: #27ae60;
                display: inline-block;
                padding: .5em 1em;
                color: #fff;
                border-radius: 3px;
                font-size: 11px;
            }

            .btn:hover,
            .btn:focus {
                background: #2ecc71;
            }

            .btn:active {
                background: #27ae60;
                box-shadow: 0 1px 2px rgba(0,0,0, .2) inset;
            }

            .btn--blue {
                background: #2980b9;
            }

            .btn--blue:hover,
            .btn--blue:focus {
                background: #3498db;
            }

            .btn--blue:active {
                background: #2980b9;
            }

            p img {
                max-width: 200px;
                height: auto;
                float: left;
                margin: 0 1em 1em 0; 
            }
            .logo_name
            {
                font-family:avalon;
                font-size:24px;
                color:#B50708;
                /*  float:left;*/
                margin-top:10px;
                margin-bottom:5px;
            }
            @font-face
            {
                font-family:avalon;
                src:url(ufonts.com_avalon-regular.ttf);
            }
            .sub_part {
                color:#797878;
                line-height:25px;
                margin:5px ;
            }
            .table_style{ font-weight:500; font-size:15px;}


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

            .modal {
                opacity: 0;
                /*    visibility: hidden;
                    position: fixed;*/
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                text-align: left;
                background: rgba(0,0,0, .9);
                transition: opacity .25s ease;
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
            th, td {
                padding:5px 10px;
                border:1px solid #000;
            }
            thead, tfoot {
                /*background:#f9f9f9;*/
                display:table;
                width:100%;
                width:calc(100% - 18px);
            }
            tbody {
                height:300px;
                overflow:auto;
                overflow-x:hidden;
                display:block;
                width:100%;
                width: calc(100% - 18px);
            }
            tbody tr {
                display:table;
                width:100%;
                table-layout:fixed;
            }
            @media screen {
                #printSection {
                    display: none;
                }
            }

            @media print {
                body * {
                    visibility:hidden;
                }
                #printSection, #printSection * {
                    visibility:visible;
                }
                #printSection {
                    position:absolute;
                    left:0;
                    top:0;
                }
            }
            @media (min-width: 992px){
                .modal-lg {
                    width: 706px;
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
                                <h2>Player DataBase</h2>
                                <ol class="breadcrumb greylinks">
                                    <li> <a href="index.php">
                                            Home
                                        </a> </li>
                                    <li class="active">Player DataBase</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="ls section_padding_top_100 section_padding_bottom_100">
                    <div class="container" style="padding: 30px 0px 0px 0px;width: 99%; margin-left: 20px;">

          <!--                        <center>
                                      <ul class="pagination" style="display: inline-block;">
                                          <li class="<?php
//                                if ($pageno <= 1) {
//                                    echo 'disabled';
//                                }
                        ?>">
                                              <a href="<?php
//                                    if ($pageno <= 1) {
//                                        echo '#';
//                                    } else {
//                                        echo "?pageno=" . ($pageno - 1);
//                                    }
                        ?>">Prev</a>
                                          </li>
                        <?php // for ($i = max(1, $pageno - 5); $i <= min($pageno + 5, $total_pages); $i++) {     ?>
                                              <li class="">
                                                  <a href="<?php
//                                        if ($pageno < 1) {
//                                            echo '#';
//                                        } else {
//                                            echo "?pageno=" . ($i);
//                                        }
                        ?>"  class="<?php
//                                           if ($pageno == $i) {
//                                               echo 'active';
//                                           }
                        ?>"><?php // echo $i    ?></a>
                                              </li>
                        <?php // }     ?> 
                                          <li class="<?php
//                                if ($pageno >= $total_pages) {
//                                    echo 'disabled';
//                                }
                        ?>">
                                              <a href="<?php
//                                    if ($pageno >= $total_pages) {
//                                        echo '#';
//                                    } else {
//                                        echo "?pageno=" . ($pageno + 1);
//                                    }
                        ?>">Next</a>
                                          </li>
                                      </ul>
                                  </center>-->


                        <div class="widget widget_search">
                            <div class="form-group margin_0" style="margin: 0px 38px 0px 0px !important;">
                                <label class="sr-only" for="widget-search">Search for:</label> 
                                <input pattern="[a-zA-Z]" oninvalid="setCustomValidity('Please enter on alphabets only. ')"  type="text" id="name_search"name="name_search" class="form-control" placeholder="Search Here..." style="width: 34%; float: right;padding: 2px 2px 2px 10px; "/>
                                <button name="search" id="search_id" class="theme_button color1"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col-sm-12 ">
                                <div class="table-responsive" id="append_table">
                                    <table class="responsive-card-table unstriped table">
                                        <thead class="headcolor">
                                            <tr>
                                                <th style="color: white;width: 108px;">S No</th>
                                                <th style="color: white;width: 108px;">FIDE Id</th>
                                                <th style="color: white;width: 108px;">Name</th>
                                                <th style="color: white;width: 108px;">Gender</th>
                                                <th style="color: white;width: 108px;">YOB</th>
                                                <th style="color: white;width: 108px;">Father's Name</th>
                                                <th style="color: white;width: 108px;">City</th>
                                                <th style="color: white;width: 108px;">VDCA ID</th>
                                                <th style="color: white;width: 108px;">Rating</th>
                                                <th style="color: white;width: 108px;">AICF</th>
                                                <th style="color: white;width: 110px;">TNSCA</th>
                                                <th style="color: white;"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;
//                                            $sql2 = "SELECT `id`,`fide_id`, `name`, `gender`,  `father_name`, `city`, `vdca_id`, `rating`, `aicf`, `tnsca`,`dob` FROM vdca_players_db order by id desc LIMIT $offset, $no_of_records_per_page";
                                            $sql2 = "SELECT `id`,`fide_id`, `name`, `gender`,  `father_name`, `city`, `vdca_id`, `rating`, `aicf`, `tnsca`,`dob` FROM vdca_players_db ORDER BY name ASC";
                                            $result2 = mysqli_query($mysqli, $sql2);
                                            while ($row2 = mysqli_fetch_assoc($result2)) {
                                                $id = $row2['id'];
                                                $name = $row2['name'];
                                                $dob = $row2['dob'];
                                                $fide_id = $row2['fide_id'];
                                                $gender = $row2['gender'];
                                                $father_name = $row2['father_name'];
                                                $vdca_id = $row2['vdca_id'];
                                                $rating = $row2['rating'];
                                                $aicf = $row2['aicf'];
                                                $tnsca = $row2['tnsca'];
                                                $city = $row2['city'];
                                                ?>
                                                <tr>
                                                    <td data-label="S no" ><?php echo $i; ?></th>
                                                    <td data-label="FIDE Id" ><a href="https://ratings.fide.com/card.phtml?event=<?php echo $fide_id; ?>" target="_blank" style="color:#0563b2;"><?php echo $fide_id; ?></a></td>
                                                    <td data-label="Name" ><?php echo $name; ?></th>
                                                    <td data-label="Gender" ><?php echo $gender; ?></th>
                                                    <td data-label="Dob"  ><?php echo date('Y', strtotime($dob)); ?></td>
                                                    <td data-label="Fathers Name" ><?php echo $father_name; ?></td>
                                                    <td data-label="City" ><?php echo $city; ?></td>
                                                    <td data-label="VDCA ID" ><?php echo $vdca_id; ?></td>
                                                    <td data-label="Rating" ><?php echo $rating; ?></td>
                                                    <td data-label="AICF" ><?php echo $aicf; ?></td>
                                                    <td data-label="TNSCA" ><?php echo $tnsca; ?></td>
                                                                        <td> <button type="button" class="btn btn-primary MyModal" id="MyModal<?php echo $vdca_id; ?>" data-vdca_id="<?php echo $vdca_id; ?>" onclick="mydfunction('<?php echo $vdca_id; ?>')">Show Id Card</button></td>
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
        </div>
        <div id="MyModalview" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div id="printThis<?php // echo $id1;       ?>">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">

                        <div class="modal-header">
                            <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
                            <div class="col-lg-12 row flexsm" style="width:100%">
                                <div style='width:10%;float:left'>
                                    <img src="logo.png" alt="logo" class="imgsm"/>
                                </div>
                                <div style='width:90%;float:right'>
                                    <center class='model-title1'>
                                        <h3 class="model-title1" id="gridSystemModalLabel" style="color: red;">Virudhunagar District Chess Association</h3>
                                        <p class="sub_part smsize">
                                            (Affiliated to TAMIL NADU STATE CHESS ASSOCIATION)<br />
                                            C/o Om Sakthi Rice Stores <br />   158, New Road (Opp. Jainsons),    Sivakasi - 62 6123.Tamil Nadu.<br />
                                            Ph: +91 94431 55852, 94870 51730
                                        </p>
                                    </center>
                                </div>
                            </div>
                        </div>

                        <div class="modal-body" id="openmodel1">

                        </div>

                    </div>
                </div>

            </div>
            <div style="float:right;padding-right:255px;padding-top: 1px;">
                <!--<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>-->
                <button id="btnPrint" type="button" class="btn btn-default">Print</button>
            </div>
        </div>


<?php include 'footer.php'; ?>
<?php include'js.php'; ?>

        <script>
            document.getElementById("btnPrint").onclick = function () {
                printElement(document.getElementById("printThis"));
            }

            function printElement(elem) {
                var domClone = elem.cloneNode(true);

                var $printSection = document.getElementById("printSection");

                if (!$printSection) {
                    var $printSection = document.createElement("div");
                    $printSection.id = "printSection";
                    document.body.appendChild($printSection);
                }

                $printSection.innerHTML = "";
                $printSection.appendChild(domClone);
                window.print();
            }
        </script>

        <script>
            $('#search_id').click(function () {
                var name_search = $('#name_search').val();
                var name_search1 = $('#name_search').val().length;
                if (name_search1 > 3) {
                    $.post("playerdb.php",
                            {
                                name_search: name_search
                            },
                            function (data, status) {
                                console.log(data);
                                $("#append_table").html(data);
                            });
                } else {
                    alert("Enter morethan 4 letters");
                }
            });

            $('#name_search').bind('keypress', testInput);

            function testInput(event) {
                var value = String.fromCharCode(event.which);
                var pattern = new RegExp(/[a-zåäö ]/i);
                return pattern.test(value);
            }

        </script>
        <script>

            function   mydfunction(playerid) {
//                   var playerid = $(this).data('vdca_id');
//                    alert(playerid);
//                 AJAX request
                    $.ajax({
                        url: 'playerdb.php',
                        type: 'post',
                        data: {MyModal: playerid},
                        success: function (response) {
                            // Add response in Modal body
                            $('#MyModalview').modal('show');
                            $('#openmodel1').html(response);

                            // Display Modal

                        }
                    });
            }
             </script>

    </body>
</html>