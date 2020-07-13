        <!-- table to show list -->


        <div class="tab-content">
            <h2>Visitors List</h2>
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
                               
                                <!-- delete -->
                                <button type="button" id="deletebtn<?php echo $row['id']; ?>" class="deletebtn btn btn-edit" data-toggle="modal" data-target=".bd-deletecat-modal-sm">
                                    <img src="../../images/icons/trash.png" alt="" class="table_icon" title="Delete user">
                                    <div id="tooltip<?php echo $row['user_id']; ?>" class="tooltiptext">
                                        <p>Are you sure?</p>
                                        <a class="tip-arch" id="<?php echo $row['user_id']; ?>" href="userlist&deleteUserId=<?php echo $row['user_id']; ?>">Delete</a>
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