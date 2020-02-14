<!DOCTYPE html>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>
        <script type="text/javascript" src="tableExport.js"></script>
        <script type="text/javascript" src="jquery.base64.js"></script>
        <script type="text/javascript" src="html2canvas.js"></script>
        <script type="text/javascript" src="jspdf/libs/sprintf.js"></script>
        <script type="text/javascript" src="jspdf/jspdf.js"></script>
        <script type="text/javascript" src="jspdf/libs/base64.js"></script>
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </head>
    <?php
    $prefix = '../';
    include_once $prefix . '../db.php';
    $location = $prefix . "index.php";
    ?>
    <div class="container">
        <div class="row">
            <div class="pmd-card pmd-z-depth" style="margin-top: 49px;">
                <div class="card-head style-primary" style="background-color: #164c84;height: 100%; padding: 18px; font-size: 18px;    color: aliceblue; font-weight: 900; text-align: center;">
                    <h1 style="color: #f3702b;">Virudhunagar District Chess Association</h1>
                    <header class="head"> Player's Database Information</header>
                </div> 
                <div class="btn-group pull-right" style=" padding: 10px;">
                    <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="background: #80f380;">
                            <span class="glyphicon glyphicon-th-list"></span> Export

                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <!--                        <li><a href="#" onclick="$('#employees').tableExport({type: 'json', escape: 'false'});"> <img src="images/json.jpg" width="24px"> JSON</a></li>
                            <li><a href="#" onclick="$('#employees').tableExport({type: 'json', escape: 'false', ignoreColumn: '[2,3]'});"><img src="images/json.jpg" width="24px">JSON (ignoreColumn)</a></li>
                            <li><a href="#" onclick="$('#employees').tableExport({type: 'json', escape: 'true'});"> <img src="images/json.jpg" width="24px"> JSON (with Escape)</a></li>
                            <li class="divider"></li>-->
    <!--                        <li><a href="#" onclick="$('#employees').tableExport({type: 'xml', escape: 'false'});"> <img src="images/xml.png" width="24px"> XML</a></li>
                            <li><a href="#" onclick="$('#employees').tableExport({type: 'sql'});"> <img src="images/sql.png" width="24px"> SQL</a></li>
                            <li class="divider"></li>-->
    <!--                        <li><a href="#" onclick="$('#employees').tableExport({type: 'csv', escape: 'false'});"> <img src="images/csv.png" width="24px"> CSV</a></li>
                            <li><a href="#" onclick="$('#employees').tableExport({type: 'txt', escape: 'false'});"> <img src="images/txt.png" width="24px"> TXT</a></li>
                            <li class="divider"></li>				-->

                            <li><a href="#" onclick="$('#employees').tableExport({type: 'excel', escape: 'false'});"> <img src="images/xls.png" width="24px"> XLS</a></li>
                            <li><a href="#" onclick="$('#employees').tableExport({type: 'doc', escape: 'false'});"> <img src="images/word.png" width="24px"> Word</a></li>
                            <!--<li><a href="#" onclick="$('#employees').tableExport({type: 'powerpoint', escape: 'false'});"> <img src="images/ppt.png" width="24px"> PowerPoint</a></li>-->
                            <!--<li class="divider"></li>-->
                            <!--<li><a href="#" onclick="$('#employees').tableExport({type: 'png', escape: 'false'});"> <img src="images/png.png" width="24px"> PNG</a></li>-->
                            <li><a href="#" id="btnExport" value="Export" onclick="Export()"> <img src="images/pdf.png" width="24px"> PDF</a></li>

                        </ul>
                    </div>
                </div>
            </div>	
        </div>
        <div class="row" style="height:300px !important;overflow:scroll;">
            <table id="employees" class="table table-striped">
                <thead>			
                    <tr  style="background: #f3702b;color: white;">
                        <th>S.No</th>
                        <th> Player Name</th>
                        <th>DOB</th>
                        <th>Mobile no</th>
                        <th>Email id</th>
                        <th>Gender</th>
                        <th>Father Name</th>
                        <th>Photo</th>
                        <th>address</th>
                        <th>City</th>
                        <th>Institution</th>
                        <th>FIDE</th>
                        <th>VDCA Id</th>
                        <th>Rating</th>
                        <th>AICF</th>
                        <th>TNSCA</th>
                        <!--<th>Year</th>-->
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    $sql2 = "SELECT * FROM vdca_players_db  ORDER BY `id` desc";
                    $result2 = mysqli_query($mysqli, $sql2);
                    while ($row2 = mysqli_fetch_assoc($result2)) {
                         $id = $row2['id'];
                                    $fide_id = $row2['fide_id'];
                                    $vdca_id = $row2['vdca_id'];
                                    $name = $row2['name'];
                                    $gender = $row2['gender'];
                                    $dob = $row2['dob'];
                                    $mobile_no = $row2['phone_no'];
                                    $email_id = $row2['email_id'];
                                    $father_name = $row2['father_name'];
                                    $photo = $row2['photo'];
                                    $address = $row2['address'];
                                    $city = $row2['city'];
                                    $institution = $row2['Institution'];
                                    $rating = $row2['rating'];
                                    $aicf = $row2['aicf'];
                                    $tnsca = $row2['tnsca'];
                        ?>
                          <tr>                                           
                                        <td><?php echo  $i;?></td>
                                        <td><?php echo $name; ?></td>
                                        <td><?php echo date('d-m-Y', strtotime($dob)); ?></td>
                                        <td><?php echo $mobile_no; ?></td>
                                        <td><?php echo $email_id; ?></td>
                                        <td><?php echo $gender; ?></td>
                                        <td><?php echo $father_name; ?></td>
                                        <td><?php echo $photo; ?></td>
                                        <td><?php echo $address; ?></td>
                                        <td><?php echo $city; ?></td>
                                        <td><?php echo $institution; ?></td>
                                        <td><?php echo $fide_id; ?></td>
                                        <td><?php echo $vdca_id; ?></td>
                                        <td><?php echo $rating; ?></td>
                                        <td><?php echo $aicf; ?></td>
                                        <td><?php echo $tnsca; ?></td>
                                        <!--<td><?php // echo $year;      ?></td>-->
                                        <td> 
                                            <?php
                                            $j = 1;
                                            $sql34 = "select `vp`.*,`vdb`.phone_no from `vdca_payment` `vp` cross join vdca_players_db `vdb` on `vp`.`pid`=`vdb`.`vdca_id` where `vdb`.`phone_no`='$mobile_no' ORDER by id DESC limit 1 ";
//                                           echo $sql34;
                                            $result22 = mysqli_query($mysqli, $sql34);
                                            if (mysqli_num_rows($result22)) {
                                                while ($row22 = mysqli_fetch_assoc($result22)) {
                                                    $phone_no = $row22['phone_no'];
                                                    $payment_status = $row22['txnStatus'];
                                                    if ($payment_status == "SUCCESS") {
                                                        ?>
                                                        <span style="font-weight: 900; font-size: 18px; color: #80c337;">ACTIVE</span>
                                                    <?php } else { ?>
                                                        <!--<a href="../../paytm/pg_site.php"   title="Go To payment page"><button type="button"  style="background-color: #ff3c2e;width: 152px;"class=" btn-danger input-field">InActive(Pay Now)</button></a>-->
                                                    <?php } ?>
                                                    <?php
                                                    $j++;
                                                }
                                                ?>
                                            <?php } else {
                                                ?>
                                                           <span style="font-weight: 900; font-size: 18px; color: red;">Inactive</span>
                                            <?php } ?>
                                        </td>
                                    </tr>
                                    <?php
                                   $i++; 
                                }
                                ?>
                </tbody>
            </table>
        </div>
        <center>
            <div style="padding-top: 53px;"> 
                <button style="background: #f3702b; /* color: white; */width: 95px; height: 30px;font-size: 15px;font-weight: 900;">
                    <a href="../dashboard.php"  style="width: 187px;color: white;">Home</a>
                </button>
            </div>
        </center>
    </div>

</body>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
<script type="text/javascript">
                                function Export() {
                                    html2canvas(document.getElementById('employees'), {
                                        onrendered: function (canvas) {
                                            var data = canvas.toDataURL();
                                            var docDefinition = {
                                                content: [{
                                                        image: data,
                                                        width: 500
                                                    }]
                                            };
                                            pdfMake.createPdf(docDefinition).download("Table.pdf");
                                        }
                                    });
                                }
</script>
<script type="text/javascript">
//$('#employees').tableExport();
    $(function () {
        $('#example').DataTable();
    });
</script>
</html>