        <!-- form to add new specie  -->
        <div class="tab-content">
            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-card mb-3 card">
                            <div class="card-body">
                                <h5 class="card-title">Add New Event</h5>
                                <form class="" action="" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="id">
                                    <div class="row">
                                    <div class="position-relative form-group col-md-6">
                                        <label for="event_title" class="">Event Title</label>
                                        <input name="title" id="event_title" value="" placeholder="Enter Title" type="text" class="form-control" required="">
                                    </div>

                                    <div class="position-relative form-group col-md-6">
                                        <label for="on_date" class="">Event Date</label>
                                       <input type="date" name="on_date" class="form-control">
                                    </div>
                                    </div>

                                     <div class="row">
                                    <div class="position-relative form-group col-md-6">
                                        <label for="description" class="">Description</label>
                                       <textarea name="description" id="description" class="form-control"></textarea>
                                    </div>

                                     <div class="position-relative form-group col-md-6">
                                        <label for="price" class="">Price (£)</label>
                                       <input type="number" name="price" min="0" class="form-control">
                                    </div>

                                </div>
                                     <div class="position-relative form-group">
                                    <input type="file" name="event_photo">
                                </div>
                                    <input type="submit" value="Submit" name="saveEvent" class="mt-1 btn btn-primary">
                            </div>
                        </div>
                    </div>

                </div>

                <!-- main body ends -->
            </div>
        </div>


<!-- table -->
 <div class="tab-content">
<h2>Events</h2>
	<table id="eventsTable">
		<thead>
		<tr>
			<th>SN</th>
			<th>Event</th>
			<th>Description</th>
			<th>Picture</th>
			<th>Date</th>
			<th>Price</th>
			<th>Action</th>
		</tr>
	</thead>
		<?php $c=1; ?>
		<?php foreach ($allEvents as $row) {?>
		<tr>
			<td><?php echo $c;?></td>
			<td><?php echo $row['title'];?></td>
			<td><?php echo $row['description'];?></td>
			<td> <?php if($row['event_photo']!=''){?> <img  class="table_image" src="../../images/events/<?php echo $row['event_photo'];?>"> <?php } ?></td>
			<td><?php echo $row['on_date'];?></td>
			<td> <?php if($row['price']!=''){?><?php echo $row['price'];?> <?php } ?></td>
			<td><a href="">Delete</a></td>
		</tr>

		<?php } ?>
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
