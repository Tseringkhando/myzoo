 <!-- form to add new category  -->
 <div class="tab-content">
 	<div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
 		<div class="row">
 			<div class="col-md-6">
 				<div class="main-card mb-3 card">
 					<div class="card-body">
 						<h5 class="card-title">Add New Category</h5>
 						<form class="" method="POST">
 							<input type="hidden" name="id" value="<?php if (isset($_GET['catid'])) echo $catQuery['id']; ?>">
 							<div class="position-relative form-group"><label for="categoryname" class="">Category Name</label>
 								<input name="category" id="categoryname" value="<?php if (isset($_GET['catid'])) echo $catQuery['category']; ?>" placeholder="Enter category name" type="text" class="form-control" required=""></div>
 							<input type="submit" name="saveCategory" value="Submit" class="mt-1 btn btn-primary">
 						</form>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>
 </div>

 <div class="tab-content">
 	<h2>Specie Categories List</h2>
 	<table id="catTable" class="display mb-0 table table-bordered">
 		<thead class="">
 			<?php $sn = 1; ?>
 			<tr>
 				<th>Sn</th>
 				<th>Category</th>
 				<th>Action</th>
 			</tr>
 		</thead>
 		<tbody>
 			<?php foreach ($allCategories as $row) { ?>
 				<tr>
 					<td><?php echo $sn; ?></td>
 					<td><a href="addcategory&catid=<?php echo $row['id']; ?>"><?php echo $row['category']; ?></a></td>
 					<td>
 						<a href="addcategory&catid=<?php echo $row['id']; ?>"><img src="../../images/icons/edit.png" alt="" class="table_icon" title="Edit"></a>
 						<!-- archive -->
                                  <button  style="padding: 0;" type="button" id="deletebtn<?php echo $row['id']; ?>" class="deletebtn btn btn-edit" data-toggle="modal" >
                                    <img src="../../images/icons/archive.png" alt="" class="table_icon" title="Archive">
                                    <div id="archivetooltip<?php echo $row['id']; ?>" class="tooltiptext">
                                        <p>Are you sure?</p>
                                        <a class="tip-arch" id="<?php echo $row['id']; ?>" href="addcategory&archiveCatId=<?php echo $row['id']; ?>">Archive</a>
                                        <span class="tip-can">Cancel</span>

                                    </div>
                                </button>



 						<button style="padding: 0;" type="button" id="deletebtn<?php echo $row['id']; ?>" class=" table_icon deletebtn btn  btn-edit" data-toggle="modal" data-target=".bd-deletecat-modal-sm">
 							<img src="../../images/icons/trash.png" alt="" class="table_icon" title="Delete">
 							<div id="tooltip<?php echo $row['id']; ?>" class="tooltiptext">
 								<p>Are you sure?</p>
 								<a class="tip-arch" id="<?php echo $row['id']; ?>" href="addcategory&deleteCatId=<?php echo $row['id']; ?>">Delete</a>
 								<span class="tip-can">Cancel</span>

 							</div>
 						</button>
 					</td>
 				</tr>
 			<?php $sn++;
				} ?>
 		</tbody>
 	</table>
 </div>

 <!-- jquery -->

 <script>
 	$(document).ready(function() {
 		$('#catTable').DataTable();
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