<!-- home page of admin displayed after succesful login -->
<?php 
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) { 
	// include('header.php');
	?>
	<!-- if the admin is logged in the mesage is shown else login page opens -->
	

   <!-- DASHBOARD WIDGETS -->
   <div class="row">
            <div class="col-md-6 col-xl-4">
              <a href="manageanimals" class="dashboardLink">
                <div class="card mb-3 widget-content dashboardLink">
                    <div class="widget-content-wrapper ">
                        <div class="widget-content-left">
                            <div class="widget-heading">Total Animals</div>
                            <div class="widget-subheading"></div>
                        </div>

                        <div class="widget-content-right text-success">
                            <?php $countAnimals=0;
                            foreach($allAnimals as $animals){$countAnimals++;}?>
                            <div class="widget-numbers"><span><?php echo $countAnimals;?></span></div>
                        </div>
                    </div>
                </div>
              </a>
            </div>
            <div class="col-md-6 col-xl-4">
                <a href="managestaff" class="dashboardLink">
                <div class="card mb-3 widget-content dashboardLink ">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="widget-heading">Zookeepers</div>
                            <!-- <div class="widget-subheading">Total Clients Profit</div> -->
                        </div>
                        <div class="widget-content-right text-primary">
                            <?php $countZookeepers=0;
                                foreach ($zookeepers as $zookeepers) {
                                    $countZookeepers++;
                                }
                            ?>
                            <div class="widget-numbers"><span><?php echo  $countZookeepers;?></span></div>
                        </div>
                    </div>
                </div>
              </a>
            </div>
            <div class="col-md-6 col-xl-4  ">
                <a href="sick_animals" class="dashboardLink">
                <div class="card mb-3 widget-content dashboardLink ">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                             <div class="mb-2 mr-2 badge badge-warning">Sick Animals</div>
                            <!-- <div class="widget-subheading">People Interested</div> -->
                        </div>
                        <div class="widget-content-right text-danger">
                           

                            <?php $countSick=0;
                            foreach($sickAnimals as $sickanimals){$countSick++;}?>
                            <div class="widget-numbers"><span><?php echo $countSick;?></span></div>
                        </div>
                    </div>
                </div>
              </a>
            </div>
        </div>
   <!-- DASHBOARD WIDGETS ENDS -->


     <div class="row">
                                    <div class="col-md-6">
                                        <div class="main-card mb-3 card">
                                            <div class="card-header">Animal Sponsored </div>
                                            <div class="card-body">
                                               <table class="display mb-0 table table-bordered">
                                                   <thead>
                                                       <th>Name</th>
                                                       <th>Photo</th>
                                                       <th>Date of Birth</th>
                                                   </thead>
                                                   <tbody>
                                                    <?php foreach($sponsoredAnimals as $row){ ?>
                                                      <tr>
                                                           <td><?php echo $row['name'];?></td>
                                                           <td>
                                                               <img class ="table_image" src="../../images/animalprofile/<?php echo $row['animal_photo'];?>">
                                                           </td>
                                                       <td><?php echo $row['dob'];?></td>
                                                      </tr>
                                                   <?php } ?>
                                                   </tbody>
                                               </table>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="col-md-6">
                                        <div class="main-card mb-3 card">
                                             <div class="card-header">New Sponsors</div>
                                            <div class="card-body">
                                                <table  class="display mb-0 table table-bordered">
                                                   <thead>
                                                       <th>Name</th>
                                                       <th>Photo</th>
                                                   </thead>
                                                   <tbody>
                                                    <?php foreach($sponsors as $row){ ?>
                                                      <tr>
                                                           <td><?php echo $row['client_name'];?></td>
                                                           <td>
                                                               <img class ="table_image" src="../../images/sponsors/<?php echo $row['sponsor_photo'];?>">
                                                           </td>
                                                      </tr>
                                                   <?php } ?>
                                                   </tbody>
                                               </table>
                                            </div>
                                        </div>
                                     
                                    </div>
                                </div>
	<?php }	?>
	
