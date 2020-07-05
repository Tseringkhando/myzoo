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