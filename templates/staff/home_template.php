<!-- home page of admin displayed after succesful login -->
<?php 
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) { 
	// include('header.php');
	?>
	<!-- if the admin is logged in the mesage is shown else login page opens -->
	

   <!-- DASHBOARD WIDGETS -->
   <div class="row">
            <div class="col-md-6 col-xl-4">
                <div class="card mb-3 widget-content">
                    <div class="widget-content-wrapper ">
                        <div class="widget-content-left">
                            <div class="widget-heading">Total Animals</div>
                            <div class="widget-subheading"></div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers"><span>100</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card mb-3 widget-content ">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="widget-heading">Employees</div>
                            <!-- <div class="widget-subheading">Total Clients Profit</div> -->
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers"><span>50</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card mb-3 widget-content ">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="widget-heading">Anything</div>
                            <!-- <div class="widget-subheading">People Interested</div> -->
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers"><span>5</span></div>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
   <!-- DASHBOARD WIDGETS ENDS -->
	<?php }	
	else{header('Location:login');}?>
	
