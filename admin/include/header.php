<nav class="navbar navbar-inverse navbar-fixed-top pmd-navbar pmd-z-depth" style="background-color: #f3702b;">

    <div class="container-fluid">
        <div class="pmd-navbar-right-icon pull-right navigation">
     <!-- Notifications -->
  <div class="dropdown notification icons pmd-dropdown">
                <a href="javascript:void(0)" title="Logout" class="dropdown-toggle pmd-ripple-effect"  data-toggle="dropdown" role="button" aria-expanded="true">
                    <div data-badge="3" class="material-icons md-light pmd-sm" style="padding-top: 17px;font-size: 32px;">power_settings_new </div>
                 </a>

                <div class="dropdown-menu dropdown-menu-right pmd-card pmd-card-default pmd-z-depth" role="menu" >

                    <div class="pmd-card-title" >
                        <div class="media-body media-middle">
                            <a href="<?php echo $prefix; ?>logout.php" class="pull-right"><h3>Logout</h3></a>
                            <h3>  <?php echo $user; ?></h3>
                        </div>
                    </div>

                </div>


            </div> 
        </div>
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <a href="javascript:void(0);" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect pull-left margin-r8 pmd-sidebar-toggle"><i class="material-icons" style="color: aliceblue;">menu</i></a>	
          
            <a href="../dashboard.php" class="navbar-brand" style="color: aliceblue;">Virudhunagar District Chess Association </a>
        </div>
    </div>

</nav><!--End Nav bar -->