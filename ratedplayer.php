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

$total_pages_sql = "SELECT COUNT(*) FROM vdca_ratedplayer";
$result = mysqli_query($mysqli, $total_pages_sql);
$total_rows = mysqli_fetch_array($result)[0];
$total_pages = ceil($total_rows / $no_of_records_per_page);

$sql2 = "SELECT * FROM vdca_ratedplayer LIMIT $offset, $no_of_records_per_page";
//        $res_data = mysqli_query($mysqli,$sql2);
//        while($row = mysqli_fetch_array($res_data)){
//            //here goes the data
//        }
?>
<?php
if (isset($_POST['name_search'])) {
    $search = $_POST['name_search'];
    ?>

    <table class="responsive-card-table unstriped table">
        <thead class="headcolor">
            <tr>
                <th style="color: white; width: 238px;" scope="col " >Name</th>
                <th style="color: white;width: 237px;" scope="col">YOB</th>
                <th style="color: white;width: 237px;" scope="col">FIDE Id</th>
                <th style="color: white;width: 236px;" scope="col">IRTG</th>
                <th style="color: white;width: 236px;" scope="col">Club</th>
                <th style="color: white;width: 210px;" scope="col">Tittle</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 1;
            $sql2 = "SELECT `id`,`fide_id`, `name`,`irtg`,`club` ,`dob`,`title`  FROM vdca_ratedplayer  WHERE name like '%$search%' ";
//            echo $sql2;ex it;
            $result2 = mysqli_query($mysqli, $sql2);
            while ($row2 = mysqli_fetch_assoc($result2)) {
                $name = $row2['name'];
                $dob = $row2['dob'];
                $fide_id = $row2['fide_id'];
                $irtg = $row2['irtg'];
                $club = $row2['club'];
                $title = $row2['title'];
                ?>
                <tr>
                    <td data-label="Name" style="width: 230px;"><?php echo $name; ?></th>
                    <td data-label="Dob" style="width: 230px;"><?php echo date('Y', strtotime($dob)); ?></td>
                    <td data-label="Fide"style="width: 230px;"><a href="https://ratings.fide.com/card.phtml?event=<?php echo $fide_id; ?>" target="_blank" style="color:#0563b2;"><?php echo $fide_id; ?></a></th>
                    <td data-label="Irtg" style="width: 230px;"><?php echo $irtg; ?></td>
                    <td data-label="Club" style="width: 230px;"><?php echo $club ?></td>
                    <td data-label="Tittle" style="width: 230px;"><?php echo $title ?></td>
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
<!DOCTYPE html>
<html class="no-js">
    <head>
        <title>Virudhunagar District Chess Association</title>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php include 'style.php'; ?>
        <style>
            #toTop:after {
                font-size: 30px;
            }
            
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
                                <h2 >Rated Players'</h2>
                                <ol class="breadcrumb greylinks">
                                    <li> <a href="index.php">
                                            Home
                                        </a> </li>
                                    <li class="active">Rated Players'</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="ls section_padding_top_100 section_padding_bottom_100">
                    <div class="container">
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
                        <?php // for ($i = max(1, $pageno - 5); $i <= min($pageno + 5, $total_pages); $i++) {  ?>
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
                        ?>"><?php // echo $i ?></a>
                                    </li>
                        <?php // } ?> 
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
                            <div class="form-group margin_0">
                                <label class="sr-only" for="widget-search">Search for:</label> 
                                <input pattern="[a-zA-Z]" oninvalid="setCustomValidity('Please enter on alphabets only. ')"  type="text" id="name_search"name="name_search" class="form-control" placeholder="Search Here..."  style="width: 34%; float: right"/>
                                <button name="search" id="search_id" class="theme_button color1"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col-sm-12 ">
                                <div class="table-responsive" style="height: 390px;overflow: auto;" id="append_table">
                                    <table class="responsive-card-table unstriped table">
                                        <thead class="headcolor">
                                            <tr>
                                                <th style="color: white; width: 212px;" scope="col">Name</th>
                                                <th style="color: white;width: 212px;" scope="col">YOB</th>
                                                <th style="color: white;width: 212px;" scope="col">FIDE Id</th>
                                                <th style="color: white;width: 211px;" scope="col">IRTG</th>
                                                <th style="color: white;width: 210px;" scope="col">Club</th>
                                                <th style="color: white;width: 203px;" scope="col">Tittle</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;
//                                            $sql2 = "SELECT `id`,`fide_id`, `name`,`irtg`,`club` ,`dob`  FROM vdca_ratedplayer order by id desc LIMIT $offset, $no_of_records_per_page";
                                            $sql2 = "SELECT `id`,`fide_id`,`title`, `name`,`irtg`,`club` ,`dob`  FROM vdca_ratedplayer order by name ASC ";
                                            $result2 = mysqli_query($mysqli, $sql2);
                                            while ($row2 = mysqli_fetch_assoc($result2)) {
                                                $name = $row2['name'];
                                                $dob = $row2['dob'];
                                                $fide_id = $row2['fide_id'];
                                                $irtg = $row2['irtg'];
                                                $club = $row2['club'];
                                                $title = $row2['title'];
                                                ?>
                                                <tr>
                                                    <td data-label="Name" style="font-size: 15px;"><?php echo $name; ?></th>
                                                    <td data-label="Dob"  ><?php echo date('Y', strtotime($dob)); ?></td>
                                                    <td data-label="Fide" ><a href="https://ratings.fide.com/card.phtml?event=<?php echo $fide_id; ?>" target="_blank" style="color:#0563b2;"><?php echo $fide_id; ?></a></th>
                                                    <td data-label="Irtg" ><?php echo $irtg; ?></td>
                                                    <td data-label="Club" ><?php echo $club ?></td>
                                                    <td data-label="Title" ><?php echo $title ?></td>
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
        <script>
            $('#search_id').click(function () {
                var name_search = $('#name_search').val();
                var name_search1 = $('#name_search').val().length;
                if (name_search1 > 3) {
                    $.post("ratedplayer.php",
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
    </body>
</html>