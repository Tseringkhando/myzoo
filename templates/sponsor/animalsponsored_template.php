  <!-- table -->

  <div class="tab-content">
            <h2>Animals List</h2>
            <table id="animalsTable" class="display mb-0 table table-bordered">
                <thead class="">
                    <?php $sn = 1; ?>
                    <tr>
                        <th>Sn</th>
                        <th>Profile</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Start </th>
                        <th>End</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($spoAnimal as $row) { 
                        $a= $tbl_animals->search('id', $row['animal_id']);
                        $animals=$a->fetch();
                        // category name
                        $c = $tbl_specie_categories->search('id',$animals['specie_category_id']);
                        $catName= $c->fetch();
                     
                        ?> 
                        <tr>
                            <td><?php echo $sn;?></td>
                            <td>
                                <img class="table_image" src="../../images/animalprofile/<?php echo $animals['animal_photo']; ?>">
                                    
                                </img>
                            </td>
                            <td><?php echo $animals['name']; ?></td>
                            <td><?php echo $catName['category']; ?></td>
                            <td><?php echo $row['start_date']; ?></td>
                            <td><?php echo $row['end_date']; ?></td>
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