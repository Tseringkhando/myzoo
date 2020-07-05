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
                    <a href="staff_home" class="staffhomelogo d-flex" style="text-decoration:none;">
                        <h2 style="color: #1d2a4a;">Claybrook</h2><h2 style="color:#d8cc3f;">Panel</h2>
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
                    <div class="search-wrapper active">
                        <div class="input-holder">
                            <input type="text" class="search-input" placeholder="Type to search" style="opacity: 1;">
                            <button class="search-icon"><span></span></button>
                        </div>
                        <!-- <button class="close"></button> -->
                    </div>
                    <ul class="header-menu nav">

                    </ul>
                </div>



                <!-- user info -->
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading mr-3">
                                        Admin Name
                                    </div>
                                    <div class="widget-subheading">
                                        Admin
                                    </div>
                                </div>
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                           <img class="admin_icon" src="../../images/icons/adminprofile.png" alt="">
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="logout"> <img class="admin_icon" src="../../images/icons/signout.png" alt="">Sign Out</a>
                                            <!--  <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                            <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                            <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                            <div tabindex="-1" class="dropdown-divider"></div>
                                            <button type="button" tabindex="0" class="dropdown-item">Dividers</button> -->
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
                            <li class="app-sidebar__heading">Home</li>
                            <li>
                                <a href="index.html" class="mm-active">
                                <img class="admin_icon" src="../../images/icons/dashboard.png" alt="">
                                    Dashboard
                                </a>
                            </li>
                            <li class="app-sidebar__heading">Manage</li>
                            <li>
                                <a href="#"><img class="admin_icon" src="../../images/icons/visitors.png" alt="">Manage Employees</a>
                            </li>
                            <li>
                                <a href="#"><img class="admin_icon" src="../../images/icons/species.png" alt="">Manage Species</a>
                            </li>
                            <li>
                                <a href="#"><img class="admin_icon" src="../../images/icons/cat.png" alt="">Manage Categories</a>
                            </li>
                            <li>
                                <a href="manage_animals.html"><img class="admin_icon" src="../../images/icons/animals.png" alt="">Manage Animals</a>
                            </li>

                            <li>
                                <a href="#"><img class="admin_icon" src="../../images/icons/sponsors.png" alt="">Manage Sponsors</a>
                            </li>
                            <li>
                                <a href="#"><img class="admin_icon" src="../../images/icons/locations.png" alt="">Manage Locations</a>
                            </li>
                            <li>
                                <a href="#"><img class="admin_icon" src="../../images/icons/tickets.png" alt="">Manage Tickets</a>
                            </li>

                            <li class="app-sidebar__heading"> Add </li>

                            <li>
                                <a href="addzookeeper"> <img class="admin_icon" src="../../images/icons/adduser.png" alt="">Add Employees</a>
                            </li>
                            <li>
                                <a href="addanimals"><img class="admin_icon" src="../../images/icons/addanimal.png" alt="">Add Animals</a>
                            </li>

                            <li>
                                <a href="#"><img class="admin_icon" src="../../images/icons/addsponsor.png" alt="">Add Sponsors</a>
                            </li>
                            <li>
                                <a href="addcategory"><img class="admin_icon" src="../../images/icons/addcat.png" alt="">Add Category</a>
                            </li>
                            <li>
                                <a href="addspecies"><img class="admin_icon" src="../../images/icons/addspecie.png" alt="">Add Species</a>
                            </li>
                            <li>
                                <a href="addlocation"><img class="admin_icon" src="../../images/icons/addloc.png" alt="">Add Location</a>
                            </li>
                            <li>
                                <a href="addticket"><img class="admin_icon" src="../../images/icons/addticket.png" alt="">Add Ticket</a>
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
<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
<script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script> -->
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> -->
<script type="text/javascript" src="../../adminassets/scripts/main.js"></script>

</html>


  