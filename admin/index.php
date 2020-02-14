<?php
session_start();
//session_destroy();
$error = $prefix = "";
include_once $prefix . '../db.php';
if (isset($_POST['login'])) {
    $user = mysqli_real_escape_string($mysqli, $_POST['username']);
    $pass = mysqli_real_escape_string($mysqli, $_POST['password']);
    //echo $username.$password; exit;
    $sql = "select * from `vdcalogin` where username='$user' AND password='$pass' ";
    $result = mysqli_query($mysqli, $sql) or trigger_error("Query Failed! SQL: $sql - Error: " . mysqli_error($sql));
    $num = mysqli_num_rows($result);
    if ($num) {
        while ($row = mysqli_fetch_assoc($result)) {
            $role = $row['role'];
            $apps = $row['apps'];
        }
        $apps1 = explode(",", $apps);
        $applist = array_map(function($piece) {
            return (string) $piece;
        }, $apps1);
        $roles1 = explode(",", $role);
        $rolelist = array_map(function($piece) {
            return (string) $piece;
        }, $roles1);
//        session_start();
        //echo session_id();
        $_SESSION['user'] = $user;
        $_SESSION['role'] = $role;
        $_SESSION['applist'] = $applist;
        $_SESSION['rolelist'] = $rolelist;
        //echo $role;
        //exit;
        $sql = "INSERT INTO `vdca_access_report`(`uname`, `pass`, `page`, `datetime`, `ip`, `success`) VALUES ('$user','$pass', 'Sri Vani School', '$datetime', '$_SERVER[REMOTE_ADDR]', 'YES')";
        $result = mysqli_query($mysqli, $sql) or trigger_error("Query Failed! SQL: $sql - Error: " . mysqli_error());
        header('Location: dashboard.php');
        //die();
    } else {
        $sql = "INSERT INTO `vdca_access_report`(`uname`, `pass`, `page`, `datetime`, `ip`, `success`) VALUES ('$user','$pass', 'Sri Vani School', '$datetime', '$_SERVER[REMOTE_ADDR]', 'NO')";
        $result = mysqli_query($mysqli, $sql) or trigger_error("Query Failed! SQL: $sql - Error: " . mysqli_error());
        $error = 1;
    }
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
        <title>Virudhunagar District Chess Association  | Login</title>
        <!-- Google icon -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Bootstrap css -->
        <?php include_once $prefix . 'include/css.php'; ?>
    </head>

    <body class="body-custom" style="background-color: #e8f5f9;">
    <center>
        <div class="logincard" style="    max-width: min-content;">
            <div class="pmd-card card-default pmd-z-depth">
                <div class="login-card">
                    <form method="POST">	
                        <div class="pmd-card-title card-header-border text-center">
                            <div class="loginlogo">
                                <a href="javascript:void(0);"><img src="../img/core-img/logo.png" alt="Logo"></a>
                            </div>
                            <h3>Sign In <span>with <strong>Virudhunagar District Chess Association </strong></span></h3>
                        </div>

                        <div class="pmd-card-body">
                            <!--<div class="alert alert-success" role="alert"> Oh snap! Change a few things up and try submitting again. </div>-->
                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                <label for="inputError1" class="control-label pmd-input-group-label">Username</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="material-icons md-dark pmd-sm">perm_identity</i></div>
                                    <input type="text" class="form-control" id="exampleInputAmount" name="username" tabindex="1" required autofocus>
                                </div>
                            </div>

                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                <label for="inputError1" class="control-label pmd-input-group-label">Password</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="material-icons md-dark pmd-sm">lock_outline</i></div>
                                    <input type="password" class="form-control" id="exampleInputAmount" name="password" tabindex="1" required autocomplete>
                                </div>
                            </div>
                        </div>
                        <div class="pmd-card-footer card-footer-no-border card-footer-p16 text-center">
                            <div class="form-group clearfix">
                            </div>
                            <button class="btn pmd-ripple-effect btn-primary btn-block" type="submit" name="login">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </center>
        <?php include_once $prefix . 'include/js.php'; ?>
        <script>
<?php if ($error) {
    ?>
                Command: toastr["error"]("In-correct User name and Password", "Error")
<?php }
?>

        </script>
    </body>
</html>
