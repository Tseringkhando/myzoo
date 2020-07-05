   <!-- form to add new category  -->
   <div class="tab-content">
   	<div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
   		<div class="row">
   			<div class="col-md-6">
   				<div class="main-card mb-3 card">
   					<div class="card-body">
   						<h5 class="card-title">Add New Category</h5>
   						<form class="" method="POST">
   							<input type="hidden" name="id" value="<?php if(isset($_GET['catid']))echo $catQuery['id'];?>">
							   <div class="position-relative form-group"><label for="categoryname" class="">Category Name</label>
							   <input name="category" id="categoryname" value="<?php if(isset($_GET['catid']))echo $catQuery['category'];?>" placeholder="Enter category name" type="text" class="form-control" required=""></div>
   							<input type="submit" name="saveCategory" value="Submit" class="mt-1 btn btn-primary">
   						</form>
   					</div>
   				</div>
   			</div>
   		</div>
   	</div>
   </div>

   <div class="tab-content">
	   <h2>Specie Category Lists</h2>
	   <table id="catTable" class="display">
    <thead>
        <tr>
            <th>Sn</th>
			<th>Category</th>
			<th></th>
        </tr>
    </thead>
    <tbody>
		<?php foreach($allCategories as $row){ ?>
        <tr>
            <td>1</td>
			<td><?php echo $row['category'];?></td>
			<td></td>
		</tr>
		<?php } ?>
       
    </tbody>
</table>

   </div>


 <script>
   $(document).ready( function () {
    $('#catTable').DataTable();
} );
</script>