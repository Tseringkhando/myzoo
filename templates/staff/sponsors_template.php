        <!-- table to show list -->


        <div class="tab-content">
            <h2>Sponsors List</h2>
            <table id="sponsorTable" class="display mb-0 table table-bordered">
                <thead class="">
                    <?php $sn = 1; ?>
                    <tr>
            <th>sn</th>
             <th>Profile</th>
            <th>Name</th>
            <th>Contact</th>
            <th>Address</th>
            <th>Sinage Area</th>
            <th>Band</th>
            <th>Approved?</th>
            <th>Joined</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
          <!--  -->
                    <?php foreach ($allSponsors as $row) { ?>
              <tr>
              <td><?php echo $sn; ?></td>
              <td><img class="table_image" src="../../images/sponsors/<?php echo $row['sponsor_photo'];?>"></td>
              <td><?php echo $row['client_name'];?></td>
              <td><?php echo $row['primary_contact'];?></td>
              <td><?php echo $row['address'];?></td>
               <td><?php echo $row['sinage_area_percentage'];?></td>
                <td><?php echo $row['sponsorship_band'];?></td>
                 <td><?php 

                if($row['is_approved']==1) echo 'YES'; else echo '<a href="" >Approve </a>';?></td>
              <td><?php echo $row['date_joined'];?></td>
                            <td>
                                <a href=""><img src="../../images/icons/edit.png" alt="" class="table_icon" title="Edit category"></a>

                                <button type="button" id="deletebtn<?php echo $row['id']; ?>" class="deletebtn btn btn-edit" data-toggle="modal" data-target=".bd-deletecat-modal-sm">
                                    <img src="../../images/icons/trash.png" alt="" class="table_icon" title="Delete category">
                                    <div id="tooltip<?php echo $row['id']; ?>" class="tooltiptext">
                                        <p>Are you sure?</p>
                                        <a class="tip-arch" id="<?php echo $row['id']; ?>" href="managestaff&deleteStaffId=<?php echo $row['id']; ?>">Delete</a>
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
                $('#sponsorTable').DataTable(
                  {
                         'dom': 'Rlfrtip',
                        "columnDefs": [
    { "width": "1%", "targets": 0 },{ "width": "1%", "targets": 1 },{ "width": "10%", "targets": 2 },{ "width": "10%", "targets": 3 }
    ,{ "width": "20%", "targets": 4 }]
                    }
                    );
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