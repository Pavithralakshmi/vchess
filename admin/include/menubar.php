<?php
$foldername = 'dashboard';
$url = $_SERVER['REQUEST_URI'];
if (strpos($url, '/dashboard.php') !== false) {
    $foldername = 'dashboard';
} if (strpos($url, '/master/') !== false) {
    $foldername = 'master';
} if (strpos($url, '/report/') !== false) {
    $foldername = 'report';
}
?>
<aside class="pmd-sidebar sidebar-default pmd-sidebar-slide-push pmd-sidebar-left pmd-sidebar-open bg-fill-darkblue sidebar-with-icons" role="navigation">
    <ul class="nav pmd-sidebar-nav">

        <!-- User info -->
        <li class="dropdown pmd-dropdown pmd-user-info visible-xs visible-md visible-sm visible-lg">
            <a aria-expanded="false" data-toggle="dropdown" class="btn-user dropdown-toggle media" data-sidebar="true" aria-expandedhref="javascript:void(0);">
                <div class="media-left">
                    <img src="<?php echo $prefix; ?>assets/images/user-icon.png" alt="New User">
                </div>
                <div class="media-body media-middle" style="font-size: large; font-weight: 500;"><?php echo $user; ?></div>
                <div class="media-right media-middle"><i class="dic-more-vert dic"></i></div>
            </a>
            <!--			<ul class="dropdown-menu">
                                            <li><a href="<?php // echo $prefix; ?>index.php">Logout</a></li>
                                    </ul>-->
        </li><!-- End user info -->

        <li style="font-size: large; font-weight: 400;"> 
            <a class="pmd-ripple-effect <?php if ($foldername == 'dashboard') {
    echo 'active';
} ?>" href= <?php echo $prefix; ?>dashboard.php>	
                <i class="media-left media-middle"><svg version="1.1" x="0px" y="0px" width="19.83px" height="18px" viewBox="287.725 407.535 19.83 18" enable-background="new 287.725 407.535 19.83 18"
                                                        xml:space="preserve">
                    <g>
                    <path fill="#C9C8C8" d="M307.555,407.535h-9.108v10.264h9.108V407.535z M287.725,407.535v6.232h9.109v-6.232H287.725z
                          M296.834,415.271h-9.109v10.264h9.109V415.271z M307.555,419.303h-9.108v6.232h9.108V419.303z"/>
                    </g>
                    </svg></i>
                <span class="media-body" style="color:black;">Dashboard</span>
            </a> 
        </li>

        <li class="dropdown pmd-dropdown" style="font-size: large; font-weight: 400;"> 
            <a aria-expanded="true" data-toggle="dropdown" class="btn-user dropdown-toggle media <?php if ($foldername == 'master') {
    echo 'active expanded';
} ?>" data-sidebar="true" href="javascript:void(0);">	
                <i class="media-left media-middle"><svg x="0px" y="0px" width="18px" height="18px" viewBox="288.64 337.535 18 18" enable-background="new 288.64 337.535 18 18" xml:space="preserve">
                    <title>022-layout view</title>
                    <desc>Created with Sketch.</desc>
                    <g>
                    <g>
                    <path fill="#C9C8C8" d="M298.765,353.285v-2.25h3.375v-3.375h2.25v5.625H298.765z M290.89,347.66h2.25v3.375h3.375v2.25h-5.625
                          V347.66z M296.515,339.785v2.25h-3.375v3.375h-2.25v-5.625H296.515z M295.39,348.785h4.5v-4.5h-4.5V348.785z M304.39,345.41h-2.25
                          v-3.375h-3.375v-2.25h5.625V345.41z M288.64,355.535h18v-18h-18V355.535z"/>
                    </g>
                    </g>
                    <text transform="matrix(1 0 0 1 -0.0154 1202.2578)" font-family="'HelveticaNeue-Bold'" font-size="186.0251">Created by Richard Wearn</text>
                    <text transform="matrix(1 0 0 1 -0.0154 1388.2891)" font-family="'HelveticaNeue-Bold'" font-size="186.0251">from the Noun Project</text>
                    </svg></i> 
                <span class="media-body" style="color:black;">Menu</span>
                <div class="media-right media-bottom"><i class="dic-more-vert dic"></i></div>
            </a> 
            <ul class="dropdown-menu">
                <li style="font-size: 16px;font-weight: 500;"> &nbsp;&nbsp;<i class='fas fa-tags'  style='color:red;'><a href=<?php echo $prefix; ?>master/events.php style="color:green;padding-left: 18px;">Events/News</a></i></li>
                <li style="font-size: 16px;font-weight: 500;"> &nbsp;&nbsp;<i class='fas fa-edit' style='color:red;'><a href = <?php echo $prefix; ?>master/playersdb.php style="color:green;padding-left: 17px;"> Player's Database</a></i></li>
                <li style="font-size: 16px;font-weight: 500;"> &nbsp;&nbsp;<i class='fa fa-sticky-note' style='color:red;'><a href = <?php echo $prefix; ?>master/ratedplayer.php  style="color:green;padding-left: 26px;">Rated Player's </a></i></li>
                <li style="font-size: 16px;font-weight: 500;"> &nbsp;&nbsp;<i class='fas fa-images' style='color:red;'><a href= <?php echo $prefix; ?>master/gallery.php style="color:green;padding-left: 21px;">Gallery</a></i></li>
                <li style="font-size: 16px;font-weight: 500;"> &nbsp;&nbsp;<i class='fas fa-images' style='color:red;'><a href= <?php echo $prefix; ?>master/slider.php style="color:green;padding-left: 17px;"> Slider </a></i></li>
                <li style="font-size: 16px;font-weight: 500;"> &nbsp;&nbsp;<i class='fa fa-upload' style='color:red;'><a href = <?php echo $prefix; ?>master/filesupload.php style="color:green;">Download Files To Upload</a></i></li>
                <!--<li style="font-size: 16px;font-weight: 500;"> &nbsp;&nbsp;<i class='fa fa-sticky-note' style='color:red;'><a href = <?php // echo $prefix; ?>master/registeredplayer.php  style="color:green;">Registered Player's </a></i></li>-->
                <li style="font-size: 16px;font-weight: 500;"> &nbsp;&nbsp;<i class='fa fa-sticky-note' style='color:red;'><a href= <?php echo $prefix; ?>master/feedback.php style="color:green;">Feedback</a></i></li>
            </ul>
        </li>
<!--        <li class="dropdown pmd-dropdown" style="font-size: large; font-weight: 400;"> 
            <a aria-expanded="true" data-toggle="dropdown" class="btn-user dropdown-toggle media <?php if ($foldername == 'report') {
    echo 'active expanded';
} ?>" data-sidebar="true" href="javascript:void(0);">	
                <i class="media-left media-middle"> <svg version="1.1" x="0px" y="0px" width="14.187px" height="18px" viewBox="0 0 14.187 18" enable-background="new 0 0 14.187 18" xml:space="preserve">
                    <path fill="#C9C8C8" d="M0,0v18h14.187V0H0z M3.121,3.293h2.023v4.767H3.121V3.293z M11.211,14.764H2.948v-2.022h8.263V14.764
                          L11.211,14.764z M11.211,11.585H2.948V9.563h8.263V11.585L11.211,11.585z M11.211,8.407H7.455V6.385h3.756V8.407z M11.211,5.229
                          H7.455V3.207h3.756V5.229z"/>
                    </svg></i>
                <span class="media-body" style="color:black;">Report</span>
                <div class="media-right media-bottom"><i class="dic-more-vert dic"></i></div>
            </a> 
            <ul class="dropdown-menu">
                <li><a href = <?php // echo $prefix; ?>report/feedback.php>Feedback</a></li>


            </ul>
        </li>-->

    </ul>
</aside><!-- End Left sidebar -->
