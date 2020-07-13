        <!-- table to show list -->


        <div class="tab-content">
            <h2>Admins List</h2>
            <table id="specieTable" class="display mb-0 table table-bordered">
                <thead class="">
                    <?php $sn = 1; ?>
                    <tr>
						<th>sn</th>
                        <th>UserId</th>
						<th>Name</th>
						<th>Email</th>
						<th>Date Joined</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
					<!--  -->
                    <?php foreach ($allUsers as $row) { ?>
                        <tr>
					
                            <td><?php echo $sn; ?></td>
							<td><?php echo $row['user_id']; ?></td>
							<td><?php echo $row['firstname'].' '.$row['lastname'];?></td>
							<td><?php echo $row['user_email'];?></td>
							<td><?php echo $row['joined_date'];?></td>
                            <td>
                                <!-- edit -->
                                <a href=""><img src="../../images/icons/edit.png" alt="" class="table_icon" title="Edit category"></a>
                                <!-- delete -->
                                <button type="button" id="deletebtn<?php echo $row['id']; ?>" class="deletebtn btn btn-edit" data-toggle="modal" data-target=".bd-deletecat-modal-sm">
                                    <img src="../../images/icons/trash.png" alt="" class="table_icon" title="Delete category">
                                    <div id="tooltip<?php echo $row['user_id']; ?>" class="tooltiptext">
                                        <p>Are you sure?</p>
                                        <a class="tip-arch" id="<?php echo $row['user_id']; ?>" href="managestaff&deleteStaffId=<?php echo $row['user_id']; ?>">Delete</a>
                                        <span class="tip-can">Cancel</span>

                                    </div>
                                </button>

                                <!-- make admin -->
                                    <button type="button" id="deletebtn<?php echo $row['user_id']; ?>" class="deletebtn btn btn-edit" data-toggle="modal" data-target=".bd-deletecat-modal-sm">
                                    <img src="../../images/icons/makeadmin.png" alt="" class="table_icon" title="Make user admin">
                                    <div id="tooltip<?php echo $row['user_id']; ?>" class="tooltiptext">
                                        <p>Sure to make user admin?</p>
                                        <a class="tip-arch" style="background: #2ecc71;" id="<?php echo $row['user_id']; ?>" href="adminslist&removeAdminId=<?php echo $row['user_id']; ?>">Yes</a>
                                        <span class="tip-can">No</span>

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
                $('#specieTable').DataTable();
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