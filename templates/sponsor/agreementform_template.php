
<!-- home page of sponsor displayed after succesful login -->
<?php 
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) { 
	?>
<style>
    .agreement-bold{
    font-weight: bold;
    font-size: 1.1em;
}
</style>

   <div class="row">
                                    <div class="col-md-12">
                                        <div class="main-card mb-3 card">
                                             <div class="card-header">Sponsorship Agreement Form</div>
                                            <div class="card-body">
                                              <p>
                                            <span class="agreement-bold" style="font-size: 18px; font-weight: bold;">Client / Company Name:  </span>
                                            <span style="font-size: 16px; color: #000; font-weight: bold;"><?php echo $_SESSION['sponsorName'];?></span></p>

                                            <div class="row" style="margin-left: 0;">
                                                <span  class="agreement-bold" >Animals Sponsored:</span> 
                                                
                                                <span style="font-size: 14px; font-weight: bold;">
                                                    <ul>
                                                          <?php $no=0;
                                                          foreach ($spoAnimal as $row) { 
                                                            $no++;
                                                $a= $tbl_animals->search('id', $row['animal_id']);
                                                $animals=$a->fetch(); ?>
                                                <li><?php echo $animals['name'];?></li>   <?php } ?></ul></span> 
                                          
                                            </div>

                                            <p>
                                                <span class="agreement-bold" >Contact: </span> <span><?php echo $sponsors['primary_contact'];?></span>
                                            </p>
                                            <p>
                                                <span class="agreement-bold" >Address:</span> <span><?php echo $sponsors['address'];?></span>
                                            </p>
                                            
                                            <p>
                                                <span class="agreement-bold" >Sponsorship Band:</span> <span><?php echo $sponsors['sponsorship_band'];?></span>
                                            </p>
                                            <p>
                                                <span class="agreement-bold" >Total Price: £</span> <span>
                                                    <?php 
                                                    if($sponsors['sponsorship_band']=='A') {echo $no*2500;}
                                                    if($sponsors['sponsorship_band']=='B') {echo $no*2500;}
                                                    if($sponsors['sponsorship_band']=='C') {echo $no*2500;}
                                                    if($sponsors['sponsorship_band']=='D') {echo $no*2500;}
                                                    if($sponsors['sponsorship_band']=='E') {echo $no*2500;}
                                                    ?>

                                                </span>
                                            </p>
                                            <p>
                                                <span class="agreement-bold" >Period of Agreement:</span> <span>1232132</span>
                                            </p>
                                            <p>
                                                <span class="agreement-bold" >Signage Area:</span> <span><?php echo $sponsors['sinage_area_percentage'];?>%</span>
                                            </p>
                                            <p>
                                                <span class="agreement-bold" >Special Notes/Requests:</span> <span>Nothing</span>
                                            </p>
                                            <p>
                                                <span class="agreement-bold" >Customer Agreement:</span> <span></span>
                                            </p>

                                             <p>
                                                <span class="agreement-bold" >Payment Received:</span> <span>YES</span>
                                            </p>

                                             <p>
                                                <span class="agreement-bold" >Sponsorship Review Date:</span> <span>Jan 12, 2021</span>
                                            </p>    

                                            <p>
                                                <span class="agreement-bold" >Signage:</span>
                                                <?php if($sponsors['sponsor_photo']!=null) {?>
                                                <img src="../../images/sponsors/<?php echo $sponsors['sponsor_photo'] ;?>">
                                            <?php } ?>
                                            </p>

                                               
                                            </div>
                                        </div>
                                    </div>
                                  
                                </div>
	<?php }	?>
	
