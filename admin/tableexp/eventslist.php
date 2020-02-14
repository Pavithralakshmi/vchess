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
                    <header class="head"> Events / News</header>
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
                        <th>Date Time</th>
                        <th>Event Title</th>
                        <th>Description</th>
                        <!--<th>Image</th>-->
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    $sql2 = "SELECT * FROM vdca_event WHERE `active` = '0' ORDER BY `id` desc";
                    $result2 = mysqli_query($mysqli, $sql2);
                    while ($row2 = mysqli_fetch_assoc($result2)) {
                        $id = $row2['id'];
                        $event = $row2['title'];
                        $edate = $row2['datetime'];
                        $desc = $row2['description'];
                        $img = $row2['image'];
                        $upload = explode(',', $img);
                        ?>
                        <tr>                                           
                            <td><?php echo $i; ?></td>
                            <td><?php echo date('d/m/Y', strtotime($edate)); ?></td>
                            <td><?php echo $event; ?></td>
                            <td><?php echo $desc; ?></td>
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