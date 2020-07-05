        <!-- form to add new specie  -->
        <div class="tab-content">
            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                <div class="row">
                    <div class="col-md-6">
                        <div class="main-card mb-3 card">
                            <div class="card-body">
                                <h5 class="card-title">Add New Specie</h5>
                                <form class="" action="" method="POST">
                                    <input type="hidden" name="id" value="<?php if(isset($_GET['specieId']))echo $specieQuery['id'];?>">
                                    <div class="position-relative form-group">
                                    <label for="specieName" class="">Specie Name</label>
                                    <input name="specie_name" id="specieName" value="<?php if(isset($_GET['specieId']))echo $specieQuery['specie_name'];?>" placeholder="Enter species name" type="text" class="form-control" required=""></div>

                                    <input type="submit" value="Submit" name="saveSpecie" class="mt-1 btn btn-primary">
                            </div>
                        </div>
                    </div>

                </div>

                <!-- main body ends -->
            </div>
        </div>