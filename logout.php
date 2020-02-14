<?php
include_once 'db.php';
if (isset($_COOKIE['mobile_number'])) {
    unset($_COOKIE['mobile_number']); 
    setcookie('mobile_number', null, -1, '/'); 
    header('location:index.php');
    return true;

} else {
   header('location:index.php');
}
if (isset($_COOKIE['vdca_id'])) {
    unset($_COOKIE['vdca_id']); 
    setcookie('vdca_id', null, -1, '/'); 
    header('location:index.php');
    return true;

} else {
 header('location:index.php');
}
?>

