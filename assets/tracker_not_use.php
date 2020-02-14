<?php

include_once '../db.php';
if (isset($_POST['click'])) {
    $type = $_POST['type'];
    $link = $_POST['link'];
    $name = $_POST['name'];
    $cookie_type = $_POST['cookie_type'];
    if ($link != "https://www.nithra.mobi/") {
        $sql1 = "INSERT INTO `native_tracker`(`type`, `link`, `name`, `cookie_type`, `cookie_time`,`httpreferer`, `campaign`, `source`, `referer`, `session_id`, `ip`, `cdate`) VALUES ('$type','$link','$name','$cookie_type', '$cookie_time', '$httpreferer', '$_SESSION[campaign]', '$_SESSION[source]', '$_SESSION[referrer]', '$session_id', '$_SERVER[REMOTE_ADDR]', '$datetime')";
        $result1 = mysqli_query($mysqli, $sql1);
        $sql = "SELECT `set_name`, `description` from `general_settings` where `set_name` IN ('chargable_types', 'max_click_day' ) ";
        $result = mysqli_query($mysqli, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            if ($row['set_name'] == 'chargable_types') {
                $chargable_types = $row['description'];
            }
            if ($row['set_name'] == 'max_click_day') {
                $max_click_day = $row['description'];
            }
        }
        $sql2 = "SELECT count(*) as count from `native_tracker` where Date(`cdate`) = Date(NOW()) AND `type` IN ($chargable_types)";
        $result2 = mysqli_query($mysqli, $sql2);
        while ($row2 = mysqli_fetch_assoc($result2)) {
            $count = $row2['count'];
        }
        if (($count == $max_click_day) OR ( $count == ($max_click_day + 100))) {
            ob_start();
            $msg = "Nativespecial crosses " . $count . " views today";
            $ch = curl_init();
            $msg = urlencode($msg);
            // $url = "http://asspi.msg91.com/api/sendhttp.php?sender=NITHRA&route=4&mobiles=9865951029,9944853520&authkey=221068AW6ROwfK5b2782c0&country=91&campaign=nsnithra&message=" . $msg;
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_exec($ch);
            curl_close($ch);
//            ob_end_clean();
            echo $url;
        }
    }
}
?>