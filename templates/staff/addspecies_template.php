        <!-- form to add new specie  -->
        <div class="tab-content">
            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                <div class="row">
                    <div class="col-md-6">
                        <div class="main-card mb-3 card">
                            <div class="card-body">
                                <h5 class="card-title">Add New Specie</h5>
                                <form class="" action="" method="POST">
                                    <input type="hidden" name="id" value="<?php if (isset($_GET['specieId'])) echo $specieQuery['id']; ?>">
                                    <div class="position-relative form-group">
                                        <label for="specieName" class="">Specie Name</label>
                                        <input name="specie_name" id="specieName" value="<?php if (isset($_GET['specieId'])) echo $specieQuery['specie_name']; ?>" placeholder="Enter species name" type="text" class="form-control" required=""></div>

                                    <input type="submit" value="Submit" name="saveSpecie" class="mt-1 btn btn-primary">
                            </div>
                        </div>
                    </div>

                </div>

                <!-- main body ends -->
            </div>
        </div>

        <!-- table to show list -->


        <div class="tab-content">
            <h2>Species List</h2>
            <table id="specieTable" class="display mb-0 table table-bordered">
                <thead class="">
                    <?php $sn = 1; ?>
                    <tr>
                        <th>Sn</th>
                        <th>Species</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($allSpecies as $row) { ?>
                        <tr>
                            <td><?php echo $sn; ?></td>
                            <td><a href="addspecies&specieId=<?php echo $row['id']; ?>"><?php echo $row['specie_name']; ?></a></td>
                            <td>
                                <a href="addspecies&specieId=<?php echo $row['id']; ?>"><img src="../../images/icons/edit.png" alt="" class="table_icon" title="Edit category"></a>

                                <button type="button" id="deletebtn<?php echo $row['id']; ?>" class="deletebtn btn  btn-edit" data-toggle="modal" data-target=".bd-deletecat-modal-sm">
                                    <img src="../../images/icons/trash.png" alt="" class="table_icon" title="Delete category">
                                    <div id="tooltip<?php echo $row['id']; ?>" class="tooltiptext">
                                        <p>Are you sure?</p>
                                        <a class="tip-arch" id="<?php echo $row['id']; ?>" href="addspecies&deletespecieId=<?php echo $row['id']; ?>">Delete</a>
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