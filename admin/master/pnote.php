<?php
session_start();
$user = $_SESSION['user'];
$prefix = '../';
include_once $prefix . 'db.php';
$location = $prefix . "index.php";
if (isset($_SESSION['user'])) {
    
} else {
    header("Location: $location");
    exit;
}
$msg =$id=$newfile= '';
$title=$desc=$description='';
if (isset($_GET['info'])) {
    $info = $_GET['info'];
}
$sql="SELECT * FROM `notes` where `info`='$info'";
$result= mysqli_query($mysqli,$sql);
while ($row = mysqli_fetch_array($result)) {
    $description=$row['description'];
}

if (isset($_POST['save'])) {    
        $description = $_POST['description'];      
        $sql1 = "UPDATE `notes` SET  `info` = '$info',`description` = '$description', `mby` = CONCAT (`mby`,'|','$user'), `mdate` = CONCAT (`mdate`,'|','$datetime'), `mip` = CONCAT (`mip`,'|','$_SERVER[REMOTE_ADDR]') where `info`= '$info' ";                                                         
        $result1 = mysqli_query($mysqli, $sql1) or trigger_error("Query Failed! SQL: $sql - Error: " . mysqli_error($mysqli));
        header("Location: pnote.php?info=$info&msg=3");              
      
}

if (isset($_GET['msg'])) {
        $msg = $_GET['msg'];
}
?>
<!doctype html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Vani Vidyalaya Admin">
        <meta content="width=device-width, initial-scale=1, user-scalable=no" name="viewport">
        <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
        <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.css" rel="stylesheet">
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.js"></script>

        <title>Vani Vidyalaya | Notes</title>
        <?php include_once $prefix . 'include/css.php'; ?>
        <style>
                #summernote {
                        font-family: Helvetica, sans-serif;
                        font-size: 12px;
                        letter-spacing: 0.5px;
                    }
        </style>
    </head>

    <body>
        <!-- Header Starts -->
        <!--Start Nav bar -->
        <?php include_once $prefix . 'include/header.php'; ?>
        <!-- Header Ends -->

        <!-- Sidebar Starts -->
        <div class="pmd-sidebar-overlay"></div>

        <!-- Left sidebar -->
        <?php include_once $prefix . 'include/menubar.php'; ?>
        <!-- Sidebar Ends -->

        <!--content area start-->
        <div id="content" class="pmd-content inner-page">

            <!--tab start-->
            <div class="container-fluid full-width-container">

                <div class="section col-md-10 col-lg-offset-1 billinfo sp"> 			
                    <!-- section content start-->
                    <form id="validationForm" action="" method="post" >
                        <div class="pmd-card pmd-z-depth">
                            <div class="card-head style-primary">
                               <?php if($info=='chairman'){?>
                                <header class="head">Chairman's Notes</header>
                                 <?php } else if($info=='principal'){?>
                                 <header class="head">Principal's Notes</header>
                                 <?php } ?>
                            </div> 
                            <div class="pmd-card-body">                                                                                       
                                <div class="group-fields clearfix row">                                   
                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">                                            
                                                    <textarea id="summernote" name="description"><?php echo $description; ?></textarea>                                               
                                        </div>                                                                                                                              
                                </div>    
                            </div>		
                            <div class="pmd-card-actions">
                                <button type="submit" class="btn btn-primary next" tabindex="1" name="save" onclick="return confirm('You are going to update ?')">Submit</button>
                                <a href="javascript:void(0);" class="btn btn-default" tabindex="1">Cancel</a>
                            </div>
                        </div> <!-- section content end -->  
                    </form>
                </div>
     </div>
   
              
       
     
        <!-- Scripts Starts -->
<?php include_once $prefix . 'include/js.php'; ?>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.js"></script>

        
        <!-- Scripts Ends -->
        <script>
<?php if ($msg == '2') { ?>
                        Command: toastr["success"]("Notes added sucesssfully", "Sucesss")
<?php } elseif ($msg == '1') {
        ?>
                        Command: toastr["error"]("Notes already exist", "Error")
<?php } elseif ($msg == '3') { ?>
                        Command: toastr["success"]("Notes Updated Sucesssfully", "Sucesss")
<?php } elseif ($msg == '4') { ?>
                        Command: toastr["success"]("Notes Deleted Sucesssfully", "Sucesss")
<?php } ?>

        </script>       
        <script>
          $('#summernote').summernote({
                        height: 300,                         
                        minHeight: null,          
                        maxHeight: null,         
                        focus: true                  
                      });
              </script>           
    </body>
</html>
