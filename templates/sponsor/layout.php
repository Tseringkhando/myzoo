<!doctype html>
<html lang="en">

<head>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $title;?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
        <link rel="shortcut icon" href="../../images/zooimages/logo.png" type="image/ico" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="../../css/admin.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../css/datatable/datatables.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="../../css/datatable/datatables.min.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>

  <!--  Modal -->

</head>

<body>
    <!-- header of the page -->
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="logo-src">
                    <a href="sponsor_home" class="staffhomelogo d-flex" style="text-decoration:none;">
                        <h2 style="color: #1d2a4a;">Claybrook</h2><h2 style="color:#d8cc3f;">Zoo</h2>
                    </a>
                </div>
                <!-- <img src="../../adminassets/images/logo-inverse.png" style="width: 100%;"> -->

            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>
            <div class="app-header__content">
                <div class="app-header-left">
                    
                    <ul class="header-menu nav">
                            <li><a href="../home">Visit Zoo Page</a></li>
                    </ul>
                </div>



                <!-- user info -->
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading mr-3">
                                       <?php echo $_SESSION['sponsorName'];?>
                                    </div>
                                    <div class="widget-subheading">
                                        Sponsor
                                    </div>
                                </div>
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                           <img class="admin_icon" src="../../images/icons/adminprofile.png" alt="">
                                        </a>
                                     <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="profile"><img class="admin_icon" style="width: 10%" src="../../images/icons/setting.png" alt="">Profile</a>
                                            <a class="dropdown-item" href="changepassword"> <img class="admin_icon" style="width: 10%" src="../../images/icons/pw.png" alt="">Change Password</a>
                                            <a class="dropdown-item" href="signout"> <img class="admin_icon" style="width: 10%" src="../../images/icons/signout.png" alt="">Sign Out</a>
                                        </div>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- HEADER ENDS HERE -->


        <!-- BODY STARTS -->
        <div class="app-main">
            <!-- HEADER -->
            <div class="app-sidebar sidebar-shadow">
                <div class="app-header__logo">
                    <div class="logo-src"></div>
                    <div class="header__pane ml-auto">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="app-header__mobile-menu">
                    <div>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="app-header__menu">
                    <span>
                        <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                            </span>
                        </button>
                    </span>
                </div>
                <!-- SIDE BAR NAV -->

                <div class="scrollbar-sidebar">
                    <div class="app-sidebar__inner">
                        <ul class="vertical-nav-menu">
                            <li>
                                <a href="sponsor_home"<?php if($_GET['page']=='sponsor_home'){ ?>class="mm-active" <?php } ?> >
                                <img class="admin_icon" src="../../images/icons/dashboard.png" alt="">
                                    Dashboard
                                </a>
                            </li>
                            <li>
                                <a href="notice" <?php if($_GET['page']=='notice'){ ?>class="mm-active" <?php } ?>><img class="admin_icon" src="../../images/icons/species.png" alt="">Notices</a>
                            </li>
                            <li>
                                <a href="animalsponsored" <?php if($_GET['page']=='animalsponsored'){ ?>class="mm-active" <?php } ?>><img class="admin_icon" src="../../images/icons/visitors.png" alt="">Animals Sponsored</a>
                            </li>
                            <li>
                                <a href="agreementform" <?php if($_GET['page']=='agreementform'){ ?>class="mm-active" <?php } ?>><img class="admin_icon" src="../../images/icons/cat.png" alt="">Agreegemt</a>
                            </li>
                            

                            
                        </ul>
                    </div>
                </div>
            </div>
            <!-- SIDE BAR NAV ENDS -->


            <div class="app-main__outer">
                <div class="app-main__inner">
                    <?php echo $content; ?>


                </div>
            </div>
            <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        </div>
    </div>
  
  

</body>
<script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
<script type="text/javascript" src="../../adminassets/scripts/main.js"></script>

</html>


  