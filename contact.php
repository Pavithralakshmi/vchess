<?php
include 'db.php';
$fname = $email_id = $message = '';
$current_file_name = basename($_SERVER['PHP_SELF']);
?>
<?php
if (isset($_POST['submit'])) {
    $cdate = date('y/m/d');
    $fname = $_POST['fname'];
    $email_id = $_POST['email_id'];
    $message = $_POST['message'];
    $str = "INSERT INTO `vdca_feedback`( `fname`, `email_id`, `message`,`date`) VALUES ('$fname','$email_id','$message','$cdate')";
    $res = mysqli_query($mysqli, $str);
    if ($res > 0) {
        echo "<script type='text/javascript'>alert('Thank You!!Your Feedback Successfully Recived');</script>";
    }
}
?>

<!DOCTYPE html>
<html class="no-js">
    <head>
        <title>Virudhunagar District Chess Association</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php include 'style.php'; ?>
        <style>
            @media screen and (max-width: 640px) {
                #toTop:after {
                    font-size: 20px;
                    line-height: 48px;
                } 
            }
            #toTop:after {
                font-size: 30px;
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
                                <h2>Contacts</h2>
                                <ol class="breadcrumb greylinks">
                                    <li> <a href="index.php">
                                            Home
                                        </a> </li>
                                    <li class="active">Contacts</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="ls columns_padding_25 section_padding_top_100 section_padding_bottom_100">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-8 to_animate" data-animation="scaleAppear">
                                <h3>Contact Form</h3>
                                <form class=" row columns_padding_10" method="post" action="contact.php">
                                    <div class="col-sm-6">
                                        <div class="form-group bottommargin_0"> <label for="name">Full Name <span class="required">*</span></label> <input type="text" aria-required="true" size="30" value="" name="fname" id="fname" class="form-control" placeholder="Full Name*"> </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group bottommargin_0"> <label for="email">Email address<span class="required">*</span></label> <input type="email" aria-required="true" size="30" value="" name="email_id" id="email_id" class="form-control" placeholder="Email Address*"> </div>
                                    </div>
                                    <!--                                    <div class="col-sm-6">
                                                                            <div class="form-group bottommargin_0"> <label for="phone">Phone Number</label> <input type="text" size="30" value="" name="phone" id="phone" class="form-control" placeholder="Phone Number"> </div>
                                                                        </div>-->
                                    <!--                                    <div class="col-sm-6">
                                                                            <div class="form-group bottommargin_0"> <label for="subject">Subject</label> <input type="text" size="30" value="" name="subject" id="subject" class="form-control" placeholder="Your Subject"> </div>
                                                                        </div>-->
                                    <div class="col-sm-12">
                                        <div class="form-group bottommargin_0"> <label for="message">Message</label> <textarea aria-required="true" rows="5" cols="45" name="message" id="message" class="form-control" placeholder="Your Message..."></textarea> </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <!--<button class="btn academy-btn mt-30"  type="submit" name="submit" class="">Contact Us</button>-->
                                        <div class="contact-form-submit topmargin_20"> <button type="submit" id="submit" name="submit" class="theme_button color2 min_width_button margin_0">Send now</button> </div>
                                    </div>
                                </form>
                            </div>
                            <!--.col-* -->
                            <div class="col-sm-4 to_animate" data-animation="scaleAppear">
                                <h3>Contact Info</h3>
                                <div class="media small-media">
                                    <div class="media-left"> <i class="fa fa-map-marker highlight2"></i> </div>
                                    <div class="media-body"> 158, New Road, Opp To Jainsons, Sivakasi – 626 123, Tamil Nadu.</div>
                                </div>
                                <div class="media small-media greylinks">
                                    <div class="media-left"> <i class="fa fa-pencil highlight2"></i> </div>
                                    <div class="media-body"> <a href="mailto:vdcachess@gmail.com">vdcachess@gmail.com</a> </div>
                                </div>
                                <div class="media small-media">
                                    <div class="media-left"> <i class="fa fa-phone highlight2"></i> </div>
                                    <div class="media-body"> <a href="tel:94870 51730">Phone No : +91 94870 51730</a> </div>
                                </div>
                            </div>
                            <!--.col-* -->
                        </div>
                        <!--.row -->
                    </div>
                    <!--.container -->
                </section>
                <?php include 'footer.php'; ?>
            </div>
        <?php include'js.php'; ?></body>
</html>