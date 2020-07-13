

 <div class="tab-content">
 	<h2>Specie Categories List - Archived</h2>
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
                                  <button  style="padding: 0;" type="button" id="deletebtn<?php echo $row['id']; ?>" class="deletebtn btn btn-edit" data-toggle="modal" >
                                    <img src="../../images/icons/restore.png" alt="" class="table_icon" title="Restore">
                                    <div id="archivetooltip<?php echo $row['id']; ?>" class="tooltiptext">
                                        <p>Are you sure?</p>
                                        <a class="tip-arch" id="<?php echo $row['id']; ?>" href="categoryarchived&unarchiveCatId=<?php echo $row['id']; ?>">Restore</a>
                                        <span class="tip-can">Cancel</span>

                                    </div>
                                </button>



 						<button style="padding: 0;" type="button" id="deletebtn<?php echo $row['id']; ?>" class=" table_icon deletebtn btn  btn-edit" data-toggle="modal" data-target=".bd-deletecat-modal-sm">
 							<img src="../../images/icons/trash.png" alt="" class="table_icon" title="Delete">
 							<div id="tooltip<?php echo $row['id']; ?>" class="tooltiptext">
 								<p>Are you sure?</p>
 								<a class="tip-arch" id="<?php echo $row['id']; ?>" href="categoryarchived&deleteCatId=<?php echo $row['id']; ?>">Delete</a>
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