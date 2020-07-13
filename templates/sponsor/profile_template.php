<!-- home page of sponsor displayed after succesful login -->
<?php 
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) { 
	?>


<div class="row">
<div class="col-md-6">
    <div class="main-card mb-3 card">
        <div class="card-header">My Details</div>
        <div class="card-body">
            <span class="agreement-bold" style="font-size: 18px; font-weight: bold;">Client / Company Name:  </span>
                                            <span style="font-size: 16px; color: #000; font-weight: bold;"><?php echo $_SESSION['sponsorName'];?></span></p>

                                           

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
                                            </p>
                                            <p>
                                                <span class="agreement-bold" >Signage Area:</span> <span><?php echo $sponsors['sinage_area_percentage'];?>%</span>
                                            </p>
                                          

                                             <p>
                                                <span class="agreement-bold" >Sponsorship Review Date:</span> <span>Jan 12, 2021</span>
                                            </p>    

        </div>
    </div>
    
</div>
<div class="col-md-6">
    <div class="main-card mb-3 card">
         <div class="card-header">Profile</div>
        <div class="card-body">
             <?php if($sponsors['sponsor_photo']!=null) {?>
                                                <img  style="width: 20em; border: 1px solid  #efefef;" src="../../images/sponsors/<?php echo $sponsors['sponsor_photo'] ;?>">
                                            <?php } ?>
            <br>
</div>
<div class="card-footer">
            <form method="POST" enctype="multipart/form-data"> 
                <div class="form-group">
                <label class="text">Change photo:</label>
                <input type="file" name="sponsor_photo" class="">
                </div>
                <div class="form-group">
                <input type="submit" name="changePhoto" value="Update Profile" class=" btn btn-success">
                </div>

            </form>
        </div>
    </div>
   
</div>
</div>
	<?php }	?>
	
