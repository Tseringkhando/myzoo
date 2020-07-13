<!-- home page of sponsor displayed after succesful login -->
<?php 
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) { 
	?>

   <!-- DASHBOARD WIDGETS -->
   <div class="row">
            <div class="col-md-6 col-xl-4">
                <div class="card mb-3 widget-content">
                    <div class="widget-content-wrapper ">
                        <div class="widget-content-left">
                            <div class="widget-heading">Total Animals Sponsored</div>
                            <div class="widget-subheading"></div>
                        </div>
                        <div class="widget-content-right">
                            <?php $countAnimals=0;
                            foreach($spoAnimal as $animals){$countAnimals++;}?>
                            <div class="widget-numbers text-success"><span><?php echo $countAnimals;?></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card mb-3 widget-content ">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="widget-heading">Sponsorship pending</div>
                            <!-- <div class="widget-subheading">Total Clients Profit</div> -->
                        </div>
                        <div class="widget-content-right">
                            
                            <div class="widget-numbers text-warning"><span>0</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card mb-3 widget-content ">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="widget-heading">Agreement days left</div>
                            <!-- <div class="widget-subheading">People Interested</div> -->
                        </div>
                        <div class="widget-content-right">
                            
                            <div class="widget-numbers text-primary"><span>320 </span></div>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
   <!-- DASHBOARD WIDGETS ENDS -->

   <div class="row">
                                    <div class="col-md-6">
                                        <a href="">
                                        <div class="main-card mb-3 card">
                                            <div class="card-header">Animal Sponsored</div>
                                            <div class="card-body">
                                                <?php if($spoAnimal!=[]){?>
                                                <h5 class="card-title">RedWell</h5>
                                                <img class="card-img-top" src="../../images/animalprofile/black-gorilla-in-close-up-photography-39571.jpg"> 
                                            <?php } else {?>
                                                <h5 class="card-title">None</h5>
                                            <?php } ?>
                                            </div>
                                        </div>
                                        </a>
                                        
                                    </div>
                                    <div class="col-md-6">
                                        <div class="main-card mb-3 card">
                                             <div class="card-header">Notice</div>
                                            <div class="card-body">
                                                Your sponsorship has come to an end.
                                                <br>
                                                <a href="">Renew here</a>
                                            </div>
                                        </div>
                                        <div class="main-card mb-3 card">
                                            <div class="card-header">Notice</div>
                                            <div class="card-body">
                                            </div>
                                        </div>
                                    </div>
                                </div>
	<?php }	?>
	
