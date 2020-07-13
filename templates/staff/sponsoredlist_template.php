        <!-- table to show list -->


        <div class="tab-content">
            <h2>Sponsorship List</h2>
            <table id="sponsorTable" class="display mb-0 table table-bordered">
                <thead class="">
                    <?php $sn = 1; ?>
                    <tr>
            <th>sn</th>
            <th>Animal</th>
            <th>Sponsor</th>
            <th>Start</th>
            <th>End</th>
            <th>Band</th>
            <th>Approved?</th>
            <th>Action</th>
                    </tr>
                </thead>
                <tbody>
          <!--  -->
                    <?php
                    if($allRequests!=[]){
                     foreach ($allRequests as $row) { 
                        $c = $tbl_animals->search('id',$row['animal_id']);
                        $animals= $c->fetch();
                        //specie name
                        $s= $tbl_sponsors->search('id',$row['sponsor_id']);
                        $sponsors= $s->fetch(); 
                        ?>
              <tr>
              <td><?php echo $sn; ?></td>
              <td><img class="table_image" src="../../images/animalprofile/<?php echo $animals['animal_photo'];?>"> <h6>
                  <?php echo $animals['name'];?>
              </h6  ></td>
              <td><img class="table_image" src="../../images/sponsors/<?php echo $sponsors['sponsor_photo'];?>">
                <h6>
                    <?php echo $sponsors['client_name'];?>
                </h6></td>
              <td><?php echo $row['start_date'];?></td>
              <td><?php echo $row['end_date'];?></td>
                <td><?php echo $sponsors['sponsorship_band'];?></td>
                 <td>
                    <?php if($row['is_approved']==1) echo 'YES';
                    else echo '<a href="" >Approve </a>';?>
                     
                 </td>
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
                    }
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
    { "width": "1%", "targets": 0 },{ "width": "20%", "targets": 1 },{ "width": "20%", "targets": 2 },{ "width": "10%", "targets": 3 }
    ,{ "width": "10%", "targets": 4 },{ "width": "10%", "targets": 5 },{ "width": "10%", "targets": 6 }]
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