        <!-- form to add new specie  -->
        <div class="tab-content">
            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                <div class="row">
                    <div class="col-md-6">
                        <div class="main-card mb-3 card">
                            <div class="card-body">
                                <h5 class="card-title">Add New Location</h5>
                                <form class="" action="" method="POST">
                                    <input type="hidden" name="id" value="<?php if (isset($_GET['locationId'])) echo $locations['id']; ?>">
                                    <div class="position-relative form-group">
                                        <label for="locationname" class="">Location Name</label>
                                        <input name="location" id="locationname" value="<?php if (isset($_GET['locationId'])) echo $locations['location']; ?>" placeholder="Enter Location" type="text" class="form-control" required="">
                                    </div>

                                    <div class="position-relative form-group">
                                        <label for="vacant" class="">Vacant?</label>
                                        <select name="vacant" id="vaacant" class="form-control">
                                            <option value="Y" <?php if (isset($_GET['locationId'])) {if($locations['vacant']=='Y') echo 'selected';} ?>>Yes</option>
                                            <option value="N" <?php if (isset($_GET['locationId'])) {if($locations['vacant']=='N') echo 'selected';} ?>>No</option>
                                        </select>
                                    </div>

                                    <div class="position-relative form-group">
                                        <label for="dimensions" class="">Dimension (sq ft)</label>
                                        <input name="dimension_sqft" id="dimensions" value="<?php if (isset($_GET['locationId'])) echo $locations['dimension_sqft']; ?>" placeholder="sq ft dimensions" type="number" class="form-control" required="">
                                    </div>


                                    <input type="submit" value="Submit" name="saveLocation" class="mt-1 btn btn-primary">
                            </div>
                        </div>
                    </div>

                </div>

                <!-- main body ends -->
            </div>
        </div>

        <!-- table -->

        <div class="tab-content">
            <h2>Locations List</h2>
            <table id="locationTable" class="display mb-0 table table-bordered">
                <thead class="">
                    <?php $sn = 1; ?>
                    <tr>
                        <th>Sn</th>
                        <th>Locations</th>
                        <th>Vacant</th>
                        <th>Dimensions</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($allLocations as $row) { ?>
                        <tr>
                            <td><?php echo $sn; ?></td>
                            <td><a href="addlocation&locationId=<?php echo $row['id']; ?>"><?php echo $row['location']; ?></a></td>
                            <td><?php echo $row['vacant']; ?></td>
                            <td><?php echo $row['dimension_sqft']; ?></td>
                            <td>
                                <a href="addlocation&locationId=<?php echo $row['id']; ?>"><img src="../../images/icons/edit.png" alt="" class="table_icon" title="Edit category"></a>

                                <button type="button" id="deletebtn<?php echo $row['id']; ?>" class="deletebtn btn btn-edit" data-toggle="modal" data-target=".bd-deletecat-modal-sm">
                                    <img src="../../images/icons/trash.png" alt="" class="table_icon" title="Delete category">
                                    <div id="tooltip<?php echo $row['id']; ?>" class="tooltiptext">
                                        <p>Are you sure?</p>
                                        <a class="tip-arch" id="<?php echo $row['id']; ?>" href="addlocation&deletelocationId=<?php echo $row['id']; ?>">Delete</a>
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
                $('#locationTable').DataTable();
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