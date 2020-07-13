        <!-- form to add new specie  -->
        <div class="tab-content">
            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-card mb-3 card">
                            <div class="card-body">
                                <h5 class="card-title">Add New Ticket</h5>
                                <form class="" action="" method="POST">
                                    <input type="hidden" name="id">
                                    <div class="row">
                                    <div class="position-relative form-group col-md-6">
                                        <label for="type" class="">Type</label>
                                        <input name="ticket_type" id="type" value="" placeholder="Enter Type" type="text" class="form-control" required="">
                                    </div>

                                  <div class="position-relative form-group col-md-6">
                                        <label for="price" class="">Price (£)</label>
                                       <input type="text" name="price"  class="form-control">
                                    </div>
                                    </div>

                                    
                                     
                                    <input type="submit" value="Submit" name="saveTicket" class="mt-1 btn btn-primary">
                            </div>
                        </div>
                    </div>

                </div>

                <!-- main body ends -->
            </div>
        </div>


<!-- table -->
 <div class="tab-content">
<h2>Tickets</h2>
	<table id="eventsTable">
		<thead>
		<tr>
			<th>SN</th>
			<th>Type</th>
			<th>Price</th>
			<th>Action</th>
		</tr>
	</thead>
		<?php $c=1; ?>
		<?php foreach ($allTickets as $row) {?>
		<tr>
			<td><?php echo $c;?></td>
			<td><?php echo $row['ticket_type'];?></td>
			<td><?php echo $row['price'];?></td>
			<td><a href="tickets&delTicketId=<?php echo $row['id'];?>">Delete</a></td>
		</tr>

		<?php $c++; } ?>
		</thed>
	</table>
</div> 	

   <script>
            $(document).ready(function() {
                $('#eventsTable').DataTable();
            });

            $('.tip-can').click(function(ev) {
                $(this).parent().css({
                    "display": "none"
                });
                ev.stopPropagation();
            });
            $('.deletebtn').click(function(ev) {
                $(this).children()[1].style.display = 'block';
                ev.stopPropagation();
            });
        </script>
