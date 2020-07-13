  <!-- table -->

  <div class="tab-content">
            <h2>Animals List</h2>
            <table id="animalsTable" class="display mb-0 table table-bordered">
                <thead class="">
                    <?php $sn = 1; ?>
                    <tr>
                        <th>Sn</th>
                        <th>Id</th>
                        <th>Profile</th>
                        <th>Name</th>
                        <th>Specie</th>
                        <th>Category</th>
                        <th>Joined Zoo</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($allAnimals as $row) { 
                        // category name
                        $c = $tbl_specie_categories->search('id',$row['specie_category_id']);
                        $catName= $c->fetch();
                        //specie name
                        $s= $tbl_species->search('id',$row['specie_id']);
                        $specieName= $s->fetch();
                        ?> 
                        <tr>
                            <td><?php echo $sn; ?></td>
                            <td><?php echo $row['id']; ?></td>
                            <td><img class="table_image" src="../../images/animalprofile/<?php echo $row['animal_photo']; ?>" alt=""></td>
                            <td><a href="manageanimals&animalId=<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a></td>
                           
                            <td><?php echo $specieName['specie_name']; ?></td>
                            <th><?php echo $catName['category'];?></th>

                            <th><?php echo $row['date_joined_zoo'];?></th>
                            <td>
                                <a href="addanimals&animalId=<?php echo $row['id']; ?>"><img src="../../images/icons/edit.png" alt="" class="table_icon" title="Edit category"></a>

                                <button type="button" id="deletebtn<?php echo $row['id']; ?>" class="deletebtn btn btn-edit" data-toggle="modal" >
                                    <img src="../../images/icons/trash.png" alt="" class="table_icon" title="Delete category">
                                    <div id="tooltip<?php echo $row['id']; ?>" class="tooltiptext">
                                        <p>Are you sure?</p>
                                        <a class="tip-arch" id="<?php echo $row['id']; ?>" href="manageanimals&deleteanimalId=<?php echo $row['id']; ?>">Delete</a>
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
                $('#animalsTable').DataTable(
                    {
                         'dom': 'Rlfrtip',
                        "columnDefs": [
    { "width": "1%", "targets": 0 },{ "width": "1%", "targets": 1 },{ "width": "10%", "targets": 2 }]
                    });


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