<!-- home page of sponsor displayed after succesful login -->
<?php 
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) { 
	?>


<div class="row">
<div class="col-md-6">
    <div class="main-card mb-3 card">
        <div class="card-header">My Details</div>
        <div class="card-body">
            <p>
        <span class="agreement-bold" style="font-size: 18px; font-weight: bold;">Name:  </span>
        <span style="font-size: 16px; color: #000; font-weight: bold;">
        <?php echo $users['firstname'].' '.$users['lastname'];?>
        </span></p>



        <p>
        <span class="agreement-bold" >Email: </span> <span><?php echo $users['user_email'];?></span>
        </p>
        <p>
        <span class="agreement-bold" >Gender:</span> <span><?php echo $users['gender'];?></span>
        </p>

        <p>
        <span class="agreement-bold" >Date of birth:</span> <span><?php echo $users['dob'];?></span>
        </p>

        <p>
        <span class="agreement-bold" >Joined Date:</span> <span><?php echo $users['joined_date'];?></span>
        </p>


        <p>
        <span class="agreement-bold" >Role:</span> <span><?php echo $users['role'];?></span>
        </p>    

        </div>
        </div>

        </div>
</div>

	<?php }	?>
	
