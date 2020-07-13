<form class="" method="POST" action="" enctype="multipart/form-data">
    <div class="main-card mb-3 card">
        <div class="card-body">
            <h5 class="card-title">Animal Details</h5>
            
            <div class="custom-checkbox custom-control custom-control-inline">
                        <input type="checkbox" 
                        <?php if (isset($_GET['animalId'])) 
                        {
                            if($animalQuery['is_featured']==1) echo "checked";
                        } ?> 
                        value="1" name="is_featured" id="animalFeatured" class="custom-control-input">
                        <label class="custom-control-label" for="animalFeatured">Mark as featured</label>
                    </div>

                    <div class="custom-checkbox custom-control custom-control-inline">
                        <input type="checkbox"
                        <?php if (isset($_GET['animalId'])) 
                        {
                            if($animalQuery['is_for_sponsorship']==1) echo "checked";
                        } ?> 
                         value="1" name="is_for_sponsorship" id="animalForSponsor" class="custom-control-input">
                        <label class="custom-control-label" for="animalForSponsor">Mark for Sponsorship</label>
                    </div>

                    <div class="custom-checkbox custom-control custom-control-inline">
                        <input type="checkbox" 
                         <?php if (isset($_GET['animalId'])) 
                        {
                            if($animalQuery['is_sponsored']==1) echo "checked";
                        } ?>
                        value="1" name="is_sponsored" id="animalSponsored" class="custom-control-input">
                        <label class="custom-control-label" for="animalSponsored">Animal is Sponsored</label>
                    </div>
                    <hr>

                  
            <!-- name -->
            <div class="position-relative row form-group">
                <input type="hidden" name="id" value="<?php if (isset($_GET['animalId'])) echo $animalQuery['id']; ?>">
                <label for="animalName" class="col-sm-2 col-form-label">Given Name</label>
                <div class="col-sm-10">
                    <input name="name" id="animalName" value="<?php if (isset($_GET['animalId'])) echo $animalQuery['name']; ?>" placeholder="Animal's given name" type="text" class="form-control">
                </div>
            </div>

            <!-- species -->
            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label">Specie</label>
                <div class="col-sm-10">
                    <select name="specie_id" id="exampleSelect" class="form-control">
                        <?php foreach ($species as $row) { ?>
                            <option value="<?php echo $row['id']; ?>" <?php if (isset($_GET['animalId'])) {
                                                                            if ($animalQuery['specie_id'] == $row['id'])
                                                                                echo 'selected';
                                                                        } ?>>
                                <?php echo $row['specie_name']; ?>
                            </option>
                        <?php } ?>

                    </select></div>
            </div>

            <!-- Specie Category -->
            <div class="position-relative row form-group"><label for="categorySelect" class="col-sm-2 col-form-label">Specie Category/ Classification</label>
                <div class="col-sm-10">
                    <select name="specie_category_id" id="categorySelect" class="form-control">
                    <?php foreach ($categories as $row) { ?>
                            <option value="<?php echo $row['id']; ?>" <?php if (isset($_GET['animalId'])) {
                                                                            if ($animalQuery['specie_category_id'] == $row['id'])
                                                                                echo 'selected';
                                                                        } ?> id="<?php echo $row['category']; ?>">
                                <?php echo $row['category']; ?>
                            </option>
                        <?php } ?>
                    </select></div>
            </div>
            <!-- Location -->
            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label">Location</label>
                <div class="col-sm-10">
                    <select name="location_id" id="exampleSelect" class="form-control">
                        <?php foreach ($locations as $row) { ?>
                            <option value="<?php echo $row['id']; ?>" <?php if (isset($_GET['animalId'])) {
                                                                            if ($animalQuery['location_id'] == $row['id'])
                                                                                echo 'selected';} ?>>
                                <?php echo $row['location']; ?>
                            </option>
                        <?php } ?>

                    </select></div>
            </div>
            <!-- gender -->
            <div class="position-relative row form-group"><label for="animalGender" class="col-sm-2 col-form-label">Gender</label>
                <div class="col-sm-10">
                    <select name="gender" id="animalGender" class="form-control">
                        <option value="Female" <?php if (isset($_GET['animalId'])) {
                                                                            if ($animalQuery['gender'] =='Female')
                                                                                echo 'selected';} ?>
                                                                            >Female</option>
                        <option value="Male" <?php if (isset($_GET['animalId'])) {
                                                                            if ($animalQuery['gender'] =='Male ')
                                                                                echo 'selected';} ?>>Male</option>
                    </select>
                </div>
            </div>

            <!-- dob -->
            <div class="position-relative row form-group">
                <label for="animalDob" class="col-sm-2 col-form-label">Date of Birth</label>
                <div class="col-sm-10">
                    <input type="datetime-local" name="dob" id="animlaDob" class="form-control  col-lg-3"
                    value="<?php if (isset($_GET['animalId']))
                      echo date('Y-m-d\TH:i:s', strtotime($animalQuery['dob']));
                        ?>" >
                </div>
            </div>

            <!-- age -->
            <div class="position-relative row form-group"><label for="animalAge" class="col-sm-2 col-form-label">Age (in months)</label>
                <div class="col-sm-10">
                    <input type="number"  value="<?php if (isset($_GET['animalId']))
                      echo $animalQuery['age_months'];
                        ?>"
                        name="age_months" id="animalAge" class="form-control">
                </div>
            </div>

            <!-- date joined zoo -->
            <div class="position-relative row form-group"><label for="date_joined_zoo" class="col-sm-2 col-form-label">Date Joined Zoo</label>
                <div class="col-sm-10">
                    <input type="datetime-local"  value="<?php if (isset($_GET['animalId']))
                      echo date('Y-m-d\TH:i:s', strtotime($animalQuery['date_joined_zoo']));
                        ?>"
                        name="date_joined_zoo" id="date_joined_zoo" class="form-control col-lg-3">
                </div>
            </div>

            <!-- born in captivity or wild -->
            <div class="position-relative row form-group"><label for="captivityWild" class="col-sm-2 col-form-label">Born in Captivity or Wild</label>
                <div class="col-sm-10"><select name="captivity_wild" id="captivityWild" class="form-control">
                        <option value="captivity" 
                        <?php if (isset($_GET['animalId'])) {
                            if ($animalQuery['captivity_wild'] =='captivity')
                                echo 'selected';}
                            ?> 
                        >Captivity</option>
                        <option value="wild"
                         <?php if (isset($_GET['animalId'])) {
                            if ($animalQuery['captivity_wild'] =='wild')
                                echo 'selected';}
                            ?>
                        >Wild</option>
                    </select></div>
            </div>


            <!-- height and weight -->
            <div class="position-relative row form-group">
                <label for="animalHeight" class="col-sm-2 col-form-label">Height (in metres)</label>
                <div class="col-sm-10">
                    <input type="number" 
                    value="<?php if(isset($_GET['animalId'])) echo $animalQuery['height_metres'];?>" 
                    name="height_metres" id="animalHeight" class="form-control">
                </div>
            </div>
            <div class="position-relative row form-group"><label for="animalWeight" class="col-sm-2 col-form-label">Weight (in kg)</label>
                <div class="col-sm-10">
                    <input type="number"
                     value="<?php if(isset($_GET['animalId'])) echo $animalQuery['weight_kg'];?>" 
                    name="weight_kg" id="animalWeight" class=" form-control">
                </div>
            </div>

            <!-- life span in months -->
            <div class="position-relative row form-group">
                <label for="animalLifeSpan" class="col-sm-2 col-form-label">Average Life Span (months/years)</label>
                <div class="col-sm-10">
                    <input type="number" 
                    value="<?php if(isset($_GET['animalId'])) echo $animalQuery['life_span_months'];?>" 
                    name="life_span_months" id="animalLifeSpan" class=" form-control" placeholder="example: 20-30 years ">
                </div>
            </div>

            <!-- dietary requirements -->
            <div class="position-relative row form-group">
                <label for="animalDietary" class="col-sm-2 col-form-label">Dietary Requirements</label>
                <div class="col-sm-10">
                    <textarea name="dietary" id="animalDietary" class="form-control"><?php if(isset($_GET['animalId'])) echo $animalQuery['dietary'];?>
                    </textarea></div>
            </div>

            <!-- natural habitat -->
            <div class="position-relative row form-group">
                <label for="animalNaturalHabitat" class="col-sm-2 col-form-label">Natural Habitat</label>
                <div class="col-sm-10">
                    <textarea name="natural_habitat" id="animalNaturalHabitat" class="form-control" placeholder="Habitat Description"><?php if(isset($_GET['animalId'])) echo $animalQuery['natural_habitat'];?>
                    </textarea></div>
            </div>

            <!-- global population -->
            <div class="position-relative row form-group">
                <label for="globalPopulation" class="col-sm-2 col-form-label">Global Population</label>
                <div class="col-sm-10">
                    <input type="text"
                    value="<?php if(isset($_GET['animalId'])) echo $animalQuery['global_population'];?>" 
                     name="global_population" id="globalPopulation" class="form-control" placeholder="example: 1,000"></div>
            </div>

            <!-- description -->
            <div class="position-relative row form-group">
                <label for="animalDescription" class="col-sm-2 col-form-label">Special notes</label>
                <div class="col-sm-10">
                    <textarea name="animal_description" id="animalDescription" class="form-control" placeholder="Animal Description"><?php if(isset($_GET['animalId'])) echo $animalQuery['animal_description'];?>
                </textarea>
                </div>
            </div>

            <div class="position-relative row form-group"><label class="col-sm-2 col-form-label">Photo on arrival</label>
                <div class="col-sm-10">
                    <input name="animal_photo" type="file" class="form-control-file"/> 
                    <span name="old" value="<?php if(isset($_GET['animalId']))  echo $animalQuery['animal_photo'];?>"><?php if(isset($_GET['animalId']))  echo $animalQuery['animal_photo'];?></span>
                    <small class="form-text text-muted"> Animals photo</small>
                   <?php  if(isset($_GET['animalId']))  if($animalQuery['animal_photo']!= null){?>
                   <img style="width: 150px;" src="../../images/animalProfile/<?php echo $animalQuery['animal_photo'];?>"> <?php } ?> 
                </div>
            </div>


        </div>
        <!--title-->
    </div> <!-- card ends-->


    <!-- animal medical history -->
    <div class="main-card mb-3 card">
        <div class="card-body">
            <h5 class="card-title">Medical History</h5>
            <!-- medical condition -->
            <input type="hidden" name="health_id">
            <div class=" custom-checkbox custom-control custom-control-inline">
                    <input type="checkbox" 
                     <?php if (isset($_GET['animalId'])) 
                        {
                            if($animalQuery['is_sick']==1) echo "checked";
                        } ?>
                        value="1" name="is_sick" id="isSick" placeholder=""  class="custom-control-input"> 
                    <label class="custom-control-label" for="isSick">Animal is sick </label>
            </div>
            <hr>
            <!-- medical condition -->
            <div class="position-relative row form-group"><label for="animalCondition" class="col-sm-2 col-form-label">Any Medical Condition</label>
                <div class="col-sm-10">
                    <input type="text" 
                    value="<?php if (isset($_GET['animalId'])) echo $health['medical_condition'];  ?>" 
                    name="medical_condition" id="animalCondition" class=" form-control" placeholder="">
                </div>
            </div>
            <!-- treatment -->
            <div class="position-relative row form-group"><label for="animalCondition" class="col-sm-2 col-form-label">Treatments</label>
                <div class="col-sm-10">
                    <textarea name="treatment" id="animalCondition" class="form-control" placeholder="Any treament given or on going"><?php if (isset($_GET['animalId'])) echo $health['treatment'];  ?>
                    </textarea></div>
            </div>

            <!-- title end -->
        </div>
        <!-- card end -->
    </div>


    <!-- any transfer or death -->
    <div class="main-card mb-3 card">
        <div class="card-body">
            <h5 class="card-title">Transfers or Death</h5>
            <!-- check boxes -->
            <div class="position-relative form-group">
                <div>
                    <!-- death -->
                    <div class="custom-checkbox custom-control custom-control-inline">
                        <input type="checkbox" 
                        <?php if (isset($_GET['animalId'])) 
                        {
                            if($animalQuery['is_dead']==1) echo "checked";
                        } ?>
                        value="1" name="is_dead" id="animalDeathCheckBox" class="custom-control-input">
                        <label class="custom-control-label" for="animalDeathCheckBox">Animal is Dead</label>
                    </div>
                    <!-- transfer -->
                    <div class="custom-checkbox custom-control custom-control-inline">
                        <input type="checkbox" 
                         <?php if (isset($_GET['animalId'])) 
                        {
                            if($animalQuery['is_transferred']==1) echo "checked";
                        } ?>
                        value="1" name="is_transferred" id="animalTransferredCheckbox" class="custom-control-input">
                        <label class="custom-control-label" for="animalTransferredCheckbox">Animal was transferred</label>
                    </div>
                    <hr>
                </div>
            </div>

            <!--death detail-->
            <!-- date of death -->
            <input type="hidden" name="death_id">
            <input type="hidden" name="transfer_id">
            <div class="position-relative row form-group">
                <label for="animalDeathDate" class="col-sm-2 col-form-label">Date of Death</label>
                <div class="col-sm-10">
                    <input type="date"  
                    value="<?php if (isset($_GET['animalId']))
                      echo date('Y-m-d\TH:i:s', strtotime($deaths['death_date']));
                        ?>"
                    disabled="" name="death_date" id="animalDeathDate" class="form-control col-lg-3" placeholder="">
                </div>
            </div>
            <!-- death cause -->
            <div class="position-relative row form-group"><label for="deathCause" class="col-sm-2 col-form-label">Cause of Death</label>
                <div class="col-sm-10">
                    <input type="text" 
                        value="<?php if (isset($_GET['animalId'])) echo $deaths['cause'];?>" 
                    disabled="" name="cause" id="deathCause" class=" form-control" placeholder="">
                </div>
            </div>

            <!-- incenaration date -->
            <div class="position-relative row form-group">
                <label for="incinerationDate" class="col-sm-2 col-form-label">Date of Incineration</label>
                <div class="col-sm-10">
                    <input type="date" 
                    value="<?php if (isset($_GET['animalId']))
                      echo date('Y-m-d\TH:i:s', strtotime($deaths['incineration_date']));
                        ?>"
                         disabled="" name="incineration_date" id="incinerationDate" class="form-control col-lg-3" placeholder="">
                </div>
            </div>

            <!-- incineration locaiton -->
            <div class="position-relative row form-group"><label for="incenarationLocation" class="col-sm-2 col-form-label">Incineration Location</label>
                <div class="col-sm-10">
                    <input type="text" 
                     value="<?php if (isset($_GET['animalId'])) echo $deaths['incineration_location'];?>"
                      disabled="" name="incineration_location" id="incenarationLocation" class=" form-control" placeholder="">
                </div>
            </div>

            <hr>
            <!-- transfer detail -->

            <!-- transfer date -->
            <div class="position-relative row form-group">
                <label for="transferDate" class="col-sm-2 col-form-label">Date of Transfer</label>
                <div class="col-sm-10">
                    <input type="date" disabled="" 
                    value="<?php if (isset($_GET['animalId']))
                      echo date('Y-m-d\TH:i:s', strtotime($transfers['transfer_date']));
                        ?>"
                     name="transfer_date" id="transferDate" class="form-control col-lg-3" placeholder="">
                </div>
            </div>

            <!-- transfer reason -->
            <div class="position-relative row form-group">
                <label for="transferReason" class="col-sm-2 col-form-label">Reason of Transfer</label>
                <div class="col-sm-10">
                    <textarea disabled=""  name="transfer_reason" id="transferReason" class="form-control" placeholder="Any treament given or on going"><?php if (isset($_GET['animalId'])) echo $transfers['transfer_reason'];?></textarea></div>
            </div>

            <!-- transfer destionation -->
            <div class="position-relative row form-group">
                <label for="transferDestination" class="col-sm-2 col-form-label">Transfer Destination</label>
                <div class="col-sm-10">
                    <input type="text" disabled="" 
                     value="<?php if (isset($_GET['animalId'])) echo $transfers['transfer_destination'];?>"
                     name="transfer_destination" id="transferDestination" class="form-control" placeholder="">
                </div>
            </div>

            <!-- title end -->


        </div>
        <!-- card end -->
    </div>


    <!-- specific category cards -->

    <!-- birds card start -->
    <div class="main-card mb-3 card" id="bird-div">
        <div class="card-body">
            <h5 class="card-title">Bird's Details</h5>
            <input type="hidden" name="bird_id">
            <!-- nest construction method -->
            <div class="position-relative row form-group">
                <label for="nestConstructionMethod" class="col-sm-2 col-form-label">Nest Construction Method</label>
                <div class="col-sm-10">
                    <input type="text" 
                    value="<?php if (isset($_GET['animalId'])) echo $birds['nest_construction_method'];?>" 
                    name="nest_construction_method" id="nestConstructionMethod" class="form-control" placeholder="">
                </div>
            </div>

            <!-- clutch size -->
            <div class="position-relative row form-group">
                <label for="clutchSize" class="col-sm-2 col-form-label">Clutch Size</label>
                <div class="col-sm-10">
                    <input type="number"  value="<?php if (isset($_GET['animalId'])) echo $birds['clutch_size'];?>" 
                    name="clutch_size" id="clutchSize" class="form-control" placeholder="No. of eggs">
                </div>
            </div>

            <!-- clutch size -->
            <div class="position-relative row form-group">
                <label for="wingspan" class="col-sm-2 col-form-label">Wingspan (in metres)</label>
                <div class="col-sm-10">
                    <input type="number" value="<?php if (isset($_GET['animalId'])) echo $birds['wingspan_in_metres'];?>" 
                    name="wingspan_in_metres" id="wingspan" class="form-control" placeholder="Ex: 2 ">
                </div>
            </div>

            <!-- ability of fly-->
            <div class="position-relative row form-group">
                <label for="flyingAbility" class="col-sm-2 col-form-label">Can fly? </label>
                <div class="col-sm-10">
                    <select class="form-control" id="flyingAbility" name="ability_to_fly">
                        <option value="Yes" <?php if (isset($_GET['animalId'])){if($birds['ability_to_fly']=='Yes') echo "checked";} ?>>
                        Yes</option>
                        <option value="No" <?php if (isset($_GET['animalId'])){if($birds['ability_to_fly']=='No') echo "checked";} ?>
                        >No</option>
                    </select>
                </div>
            </div>

            <!-- plumage color variants -->
            <div class="position-relative row form-group">
                <label for="plumage" class="col-sm-2 col-form-label">Plumage Colour Variants</label>
                <div class="col-sm-10">
                    <input type="text"  value="<?php if (isset($_GET['animalId'])) echo $birds['plumage_colour_variants'];?>"
                     name="plumage_colour_variants" id="plumage" class="form-control" placeholder=" ">
                </div>
            </div>

            <!--  -->
            <!-- end  -->

        </div>
    </div>
    <!-- birds card end -->


    <!-- mammals card start -->
    <div class="main-card mb-3 card" id="mammal-div">
        <div class="card-body">
            <h5 class="card-title">Mammal's Details</h5>
            <input type="hidden" name="mammal_id">
            <!-- gestational period -->
            <div class="position-relative row form-group">
                <label for="gestationalPeriod" class="col-sm-2 col-form-label">Gestational Period (in months)</label>
                <div class="col-sm-10">
                    <input type="text" value="<?php if (isset($_GET['animalId'])) echo $mammals['gestational_period_months'];?>"
                    name="gestational_period_months" id="gestationalPeriod" class="form-control" placeholder="">
                </div>
            </div>

            <!-- avg body temp -->
            <div class="position-relative row form-group">
                <label for="bodyTemperature" class="col-sm-2 col-form-label">Average Body Temperature (in Celsius)</label>
                <div class="col-sm-10">
                    <input type="number" value="<?php if (isset($_GET['animalId'])) echo $mammals['average_body_temperature'];?>"
                    name="average_body_temperature" id="bodyTemperature" class="form-control" placeholder="">
                </div>
            </div>



            <!-- Mammal type-->
            <div class="position-relative row form-group">
                <label for="mammalType" class="col-sm-2 col-form-label">Mammal Category </label>
                <div class="col-sm-10">
                    <select class="form-control" id="mammalType" name="mammal_category">
                        <option value="Prototheria"  <?php if (isset($_GET['animalId'])){if($mammals['mammal_category']=='Prototheria') echo "selected";} ?>>Prototheria</option>
                        <option value="Metatheria"  <?php if (isset($_GET['animalId'])){if($mammals['mammal_category']=='Metatheria') echo "selected";} ?>>Metatheria</option>
                        <option value="Eutheria"  <?php if (isset($_GET['animalId'])){if($mammals['mammal_category']=='Eutheria') echo "selected";} ?>>Eutheria</option>
                    </select>
                </div>
            </div>

            <!-- plumage color variants -->
            <div class="position-relative row form-group">
                <label for="mammalColourVariants" class="col-sm-2 col-form-label">Colour Variants</label>
                <div class="col-sm-10">
                    <input type="text" value="<?php if (isset($_GET['animalId'])) echo $mammals['color_variants'];?>"
                     name="color_variants" id="mammalColourVariants" class="form-control" placeholder=" ">
                </div>
            </div>

            <!--  -->
            <!-- end of form -->

        </div>
    </div>

    <!-- mammals end -->


    <!-- Fish details start -->
    <div class="main-card mb-3 card" id="fish-div">
        <div class="card-body">
            <h5 class="card-title">Fish's Details</h5>
            <input type="hidden" name="fish_id">
            <!-- avg body temp -->
            <div class="position-relative row form-group">
                <label for="fishTemp" class="col-sm-2 col-form-label">Average Body Temperature (in Celsius)</label>
                <div class="col-sm-10">
                    <input type="number"  value="<?php if (isset($_GET['animalId'])) echo $fishes['fish_average_body_temperature'];?>" 
                    name="fish_average_body_temperature" id="fishTemp" class="form-control" placeholder="">
                </div>
            </div>



            <!-- water type-->
            <div class="position-relative row form-group">
                <label for="waterType" class="col-sm-2 col-form-label">Water Type </label>
                <div class="col-sm-10">
                    <select class="form-control" id="waterType" name="water_type">
                        <option value="Salt"  <?php if (isset($_GET['animalId'])){if($fishes['water_type']=='Salt') echo "selected";} ?>>
                        Salt</option>
                        <option value="Fresh" <?php if (isset($_GET['animalId'])){if($fishes['water_type']=='Fresh') echo "selected";} ?>
                        >Fresh</option>
                    </select>
                </div>
            </div>

            <!-- fish color variants -->
            <div class="position-relative row form-group">
                <label for="fishColorVariants" class="col-sm-2 col-form-label">Colour Variants</label>
                <div class="col-sm-10">
                    <input type="text"   value="<?php if (isset($_GET['animalId'])) echo $fishes['fish_colour_variants'];?>" 
                     name="fish_colour_variants" id="fishColorVariants" class="form-control" placeholder=" ">
                </div>
            </div>

            <!--  -->
            <!-- end of form -->

        </div>
    </div>
    <!-- fist details end -->


    <!-- reptiles start -->
    <div class="main-card mb-3 card" id="reptiles-div">
        <div class="card-body">
            <h5 class="card-title">Reptiles and Amphibian's Details</h5>
            <input type="hidden" name="reptile_id">


            <!-- reproduction type -->
            <div class="position-relative row form-group">
                <label for="reproductionType" class="col-sm-2 col-form-label">Reproduction Type </label>
                <div class="col-sm-10">
                    <select class="form-control" id="reproductionType" name="reproduction_type">
                        <option value="Egg Layer" <?php if (isset($_GET['animalId'])){if($reptiles['reproduction_type']=='Egg Layer') echo "selected";} ?>>Egg Layer</option>
                        <option value="Livebearer" <?php if (isset($_GET['animalId'])){if($reptiles['reproduction_type']=='Livebearer') echo "selected";} ?> >Livebearer</option>
                    </select>
                </div>
            </div>

            <!-- clutch size -->
            <div class="position-relative row form-group">
                <label for="repClutchSize" class="col-sm-2 col-form-label">Clutch Size</label>
                <div class="col-sm-10">
                    <input type="number"  value="<?php if (isset($_GET['animalId'])) echo $reptiles['rep_average_clutch_size'];?>" 
                     name="rep_average_clutch_size" id="repClutchSize" class="form-control" placeholder="No. of eggs where reptile/amphibian is an egg layer">
                </div>
            </div>


            <!-- avag offspring  -->
            <div class="position-relative row form-group">
                <label for="repOffspring" class="col-sm-2 col-form-label">Average offspring</label>
                <div class="col-sm-10">
                    <input type="number"  value="<?php if (isset($_GET['animalId'])) echo $reptiles['rep_average_offspring'];?>" 
                     name="rep_average_offspring" id="repOffspring" class="form-control" placeholder="No. of offspring where reptile/amphibian is a livebearer">
                </div>
            </div>



        </div>
    </div>
    <div class="">
        <div class="mb-3">
            <input type="submit" value="Submit" name="saveAnimal" class=" btn btn-primary">
        </div>
    </div>
</form>
<!-- reptiles end -->

<!-- js -->
<script>

    // to show the category form
$("#categorySelect").ready(function() {
  var id = $("#categorySelect").children(":selected").attr("id");
  if(id=='Bird')
  {
      $("#bird-div").show();
      $("#reptiles-div").hide();
      $("#fish-div").hide();
      $("#mammal-div").hide();

  }
  if(id=='Mammal')
  {
      $("#bird-div").hide();
      $("#reptiles-div").hide();
      $("#fish-div").hide();
      $("#mammal-div").show();
  }

  if(id=='Reptiles and Amphibians')
  {
      $("#bird-div").hide();
      $("#reptiles-div").show();
      $("#fish-div").hide();
      $("#mammal-div").hide();
  }
  if(id=='Fish')
  {
      $("#bird-div").hide();
      $("#reptiles-div").hide();
      $("#fish-div").show();
      $("#mammal-div").hide();
  }
});


$("#categorySelect").change(function() {
  var id = $(this).children(":selected").attr("id");
  if(id=='Bird')
  {
      $("#bird-div").show();
      $("#reptiles-div").hide();
      $("#fish-div").hide();
      $("#mammal-div").hide();
  }
  if(id=='Mammal')
  {
      $("#bird-div").hide();
      $("#reptiles-div").hide();
      $("#fish-div").hide();
      $("#mammal-div").show();
  }

  if(id=='Reptiles and Amphibians')
  {
      $("#bird-div").hide();
      $("#reptiles-div").show();
      $("#fish-div").hide();
      $("#mammal-div").hide();
  }
  if(id=='Fish')
  {
      $("#bird-div").hide();
      $("#reptiles-div").hide();
      $("#fish-div").show();
      $("#mammal-div").hide();
  }
});
// category card functions end

// for death form
$("#animalDeathCheckBox").ready(function(){
    if($("#animalDeathCheckBox").prop("checked") == true){
                $("#animalDeathDate").prop("disabled", false);
                $("#deathCause").prop("disabled", false);
                $("#incinerationDate").prop("disabled", false);
                $("#incenarationLocation").prop("disabled", false);
            }
            else if($("#animalDeathCheckBox").prop("checked") == false){
                $("#animalDeathDate").prop("disabled", true);
                $("#deathCause").prop("disabled", true);
                $("#incinerationDate").prop("disabled", true);
                $("#incenarationLocation").prop("disabled", true);
            }
}); 

$("#animalDeathCheckBox").click(function(){
    if($("#animalDeathCheckBox").prop("checked") == true){
                $("#animalDeathDate").prop("disabled", false);
                $("#deathCause").prop("disabled", false);
                $("#incinerationDate").prop("disabled", false);
                $("#incenarationLocation").prop("disabled", false);
            }
            else if($("#animalDeathCheckBox").prop("checked") == false){
                $("#animalDeathDate").prop("disabled", true);
                $("#deathCause").prop("disabled", true);
                $("#incinerationDate").prop("disabled", true);
                $("#incenarationLocation").prop("disabled", true);
            }
});

//transfer form
$("#animalTransferredCheckbox").ready(function(){
    if($("#animalTransferredCheckbox").prop("checked") == true){
                $("#transferDate").prop("disabled", false);
                $("#transferDestination").prop("disabled", false);
                $("#transferReason").prop("disabled", false);
    }
            else if($("#animalTransferredCheckbox").prop("checked") == false){
                $("#transferDate").prop("disabled", true);
                $("#transferDestination").prop("disabled", true);
                $("#transferReason").prop("disabled", true);
             
            }
});

$("#animalTransferredCheckbox").click(function(){
    if($("#animalTransferredCheckbox").prop("checked") == true){
                $("#transferDate").prop("disabled", false);
                $("#transferDestination").prop("disabled", false);
                $("#transferReason").prop("disabled", false);
    }
            else if($("#animalTransferredCheckbox").prop("checked") == false){
                $("#transferDate").prop("disabled", true);
                $("#transferDestination").prop("disabled", true);
                $("#transferReason").prop("disabled", true);
             
            }
});

</script>