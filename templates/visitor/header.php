<!-- header -->
<!-- ################################################################################################ -->
<div class="wrapper row0">
    <header id="header" class="hoc clear">
        <!-- ################################################################################################ -->
        <div id="logo" class="one_quarter first">
            <a href="home"><img src="../images/zooimages/logo.png"></a>
        </div>
        <div class="three_quarter">
            <ul class="nospace clear">
                <li class="one_quarter first">
                    <div class="block clear"><a href="#"><i class="fas fa-phone"></i></a> <span><strong>Give us a call:</strong> +00 (123) 456 7890</span></div>
                </li>
                <li class="one_quarter">
                    <div class="block clear"><a href="#"><i class="fas fa-envelope"></i></a> <span><strong>Send us a mail:</strong> claybrook@clyabrook.com</span></div>
                </li>
                <li class="one_quarter">
                    <div class="block clear"><a href="#"><i class="fas fa-clock"></i></a> <span><strong> Mon. - Sat.:</strong> 08:00am - 06:00pm</span></div>
                </li>
                <li class="one_quarter">
                    <div class="block clear">
                    <?php 
                    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){

                        if($_SESSION['sessusertype']=='sponsor') {?>
                          <a href="sponsor/signout"><i class="fas fa-sign-in-alt"></i>
                            <span><strong>Sign Out</strong></span></a>
                        <?php }
                            if($_SESSION['sessusertype']=='visitor') {?>
                          <a href="signout"><i class="fas fa-sign-in-alt"></i>
                            <span><strong>Sign Out</strong></span></a>
                         ?>


              <?php } } else {?>
                       <a href="signin"><i class="fas fa-sign-in-alt"></i>
                            <span><strong>Sign In</strong></span></a>
                        <?php } ?>
                            <!-- <a href="sponsorsignup"><img src="../images/icons/sponsoricon.png" alt=""></a> -->
                    </div>
                </li>
            </ul>
        
        </div>

      
    
      
        <!-- ################################################################################################ -->
    </header>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
    <section class="hoc clear">
        <!-- ################################################################################################ -->
        <nav id="mainav">
            <ul class="clear">
                <li <?php if($_GET['page']=='home'){ ?>class="active" <?php } ?>><a href="home">Home</a></li>
                <li <?php if($_GET['page']=='about'){ ?>class="active" <?php } ?>><a href="about">About us</a></li>
                <li <?php if($_GET['page']=='gallery'){ ?>class="active" <?php } ?>><a href="gallery">Gallery</a></li>
                <li <?php if($_GET['page']=='ticket'){ ?>class="active" <?php } ?>><a href="ticket">Tickets</a></li>
                <li <?php if($_GET['page']=='animals'){ ?>class="active" <?php } ?>><a class="" href="animals">Animals</a>
                </li>
                <li <?php if($_GET['page']=='events'){ ?>class="active" <?php } ?>><a href="events">Events</a></li>
                <li  <?php if($_GET['page']=='sponsorsignup'){ ?>class="active" <?php } ?>>
                <?php if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true && $_SESSION['sessusertype']='sponsor'){ ?>
                <a href="sponsor/sponsor_home">My Dashboard</a>
                <?php  } else { ?>
                    <a href="sponsorsignup">Sponsor</a>
                    <?php } ?> </li>

            </ul>
        </nav>
        <!-- ################################################################################################ -->
        <div id="searchform">
            <div>
                <form action="animals" method="POST">
                    <fieldset>
                        <legend>Quick Search:</legend>
                        <input type="text" name="searchKeyword"
                        placeholder="Enter search term&hellip;" style="color: #fff;">
                        <button type="submit" name="search"><i class="fas fa-search"></i></button>
                    </fieldset>
                </form>
            </div>
        </div>
        <!-- ################################################################################################ -->
    </section>
</div>