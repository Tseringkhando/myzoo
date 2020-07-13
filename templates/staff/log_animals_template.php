  <!-- table -->

  <div class="tab-content">
            <h2>Log - Animals</h2>
            <table id="animalsTable" class="display mb-0 table table-bordered">
                <thead class="">
                    <?php $sn = 1; ?>
                    <tr>
                        <th>Sn</th>
                        <th>Animal_id</th>
                        <th>User_id</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($allAnimals as $row) { ?> 
                        <tr>
                            <td><?php echo $sn; ?></td>
                            <td><a href="addanimals&animalId=<?php echo $row['animal_id'];?>"><?php echo $row['animal_id'];?></a></td>
                            <td><a href="profile&userId=<?php echo $row['created_by'];?>"><?php echo $row['created_by'];?></a></td>
                            <td><?php echo $row['date_created'];?></td>
                            <td><?php echo $row['action'];?></td>
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