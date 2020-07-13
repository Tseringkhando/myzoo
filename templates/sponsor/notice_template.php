<!-- home page of sponsor displayed after succesful login -->
<?php 
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) { 
	?>


   <div class="row">
                                    <div class="col-md-12">
                                        <div class="main-card mb-3 card">
                                             <div class="card-header">Notice</div>
                                            <div class="card-body">
                                                <ul style="list-style: none;">
                                                    <li>
                                                         <i class="pe-7s-attention"> </i>Your sponsorship has come to an end.
                                                        <a href="">Renew here</a>
                                                    </li>
                                                </ul>
                                               
                                            </div>
                                        </div>
                                    </div>
                                  
                                </div>
	<?php }	?>
	
