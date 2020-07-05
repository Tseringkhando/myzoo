<form class="" method="POST" action="" enctype="multipart/form-data">
<div class="main-card mb-3 card">
    <div class="card-body">
        <h5 class="card-title">Animal Details</h5>
        <!-- <form class="" method="POST" action=""> -->
            <!-- name -->
            <div class="position-relative row form-group">
                <input type="hidden" name="id" value="<?php if(isset($_GET['animalId'])) echo $animalQuery['id'];?>">
                <label for="animalName" class="col-sm-2 col-form-label">Given Name</label>
                <div class="col-sm-10">
                    <input name="name" id="animalName" value="<?php if(isset($_GET['animalId'])) echo $animalQuery['name'];?>" placeholder="Animal's given name" type="text" class="form-control">
            </div>
            </div>

            <!-- species -->
            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label">Specie</label>
                <div class="col-sm-10">
                <select name="specie_id" id="exampleSelect" class="form-control">
                <?php foreach($species as $row)
                {?>
                 <option value="<?php echo $row['id'];?>" <?php if(isset($_GET['animalId'])) {
                     if($animalQuery['specie_id']==$row['id']) 
                     echo 'selected';
                 }?> >
                 <?php echo $row['specie_name'];?>
                </option>
                <?php } ?>
                       
                    </select></div>
            </div>

            <!-- Specie Category -->
            <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label">Specie Category/ Classification</label>
                <div class="col-sm-10"><select name="specie_category_id" id="exampleSelect" class="form-control">
                <?php foreach($categories as $row)
                {?>
                 <option value="<?php echo $row['id'];?>" <?php if(isset($_GET['animalId'])) {
                     if($animalQuery['specie_category_id']==$row['id']) 
                     echo 'selected';
                 }?> >
                 <?php echo $row['category'];?>
                </option>
                <?php } ?>
                    </select></div>
            </div>
<!-- Location -->
<div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label">Location</label>
                <div class="col-sm-10">
                <select name="location_id" id="exampleSelect" class="form-control">
                <?php foreach($locations as $row)
                {?>
                 <option value="<?php echo $row['id'];?>" <?php if(isset($_GET['animalId'])) {
                     if($animalQuery['location_id']==$row['id']) 
                     echo 'selected';
                 }?> >
                 <?php echo $row['location'];?>
                </option>
                <?php } ?>
                       
                    </select></div>
            </div>
            <!-- gender -->
            <div class="position-relative row form-group"><label for="animalGender" class="col-sm-2 col-form-label">Gender</label>
                <div class="col-sm-10">
                    <select name="gender" id="animalGender" class="form-control">
                        <option value="female" >Female</option>
                        <option value="male">Male</option>
                    </select>
                </div>
            </div>

            <!-- dob -->
            <div class="position-relative row form-group">
                <label for="animalDob" class="col-sm-2 col-form-label">Date of Birth</label>
                <div class="col-sm-10">
                    <input type="datetime-local" name="dob" id="animlaDob" class="form-control  col-lg-3">
                </div>
            </div>

            <!-- age -->
            <div class="position-relative row form-group"><label for="animalAge" class="col-sm-2 col-form-label">Age (in months)</label>
                <div class="col-sm-10">
                    <input type="number" name="age_months" id="animalAge" class="form-control">
                </div>
            </div>

            <!-- date joined zoo -->
            <div class="position-relative row form-group"><label for="date_joined_zoo" class="col-sm-2 col-form-label">Date Joined Zoo</label>
                <div class="col-sm-10">
                    <input type="datetime-local" name="date_joined_zoo" id="date_joined_zoo" class="form-control col-lg-3">
                </div>
            </div>

            <!-- born in captivity or wild -->
            <div class="position-relative row form-group"><label for="captivityWild" class="col-sm-2 col-form-label">Born in Captivity or Wild</label>
                <div class="col-sm-10"><select name="captivity_wild" id="captivityWild" class="form-control">
                        <option value="captivity">Captivity</option>
                        <option value="wild">Wild</option>
                    </select></div>
            </div>


            <!-- height and weight -->
            <div class="position-relative row form-group"><label for="animalHeight" class="col-sm-2 col-form-label">Height (in metres)</label>
                <div class="col-sm-10">
                    <input type="number" name="height_metres" id="animalHeight" class="form-control">
                </div>
            </div>
            <div class="position-relative row form-group"><label for="animalWeight" class="col-sm-2 col-form-label">Weight (in kg)</label>
                <div class="col-sm-10">
                    <input type="number" name="weight_kg" id="animalWeight" class=" form-control">
                </div>
            </div>

            <!-- life span in months -->
            <div class="position-relative row form-group"><label for="animalLifeSpan" class="col-sm-2 col-form-label">Average Life Span (months/years)</label>
                <div class="col-sm-10">
                    <input type="number" name="life_span_months" id="animalLifeSpan" class=" form-control" placeholder="example: 20-30 years ">
                </div>
            </div>

            <!-- dietary requirements -->
            <div class="position-relative row form-group">
                <label for="animalDietary" class="col-sm-2 col-form-label">Dietary Requirements</label>
                <div class="col-sm-10"><textarea name="dietary" id="animalDietary" class="form-control"></textarea></div>
            </div>

            <!-- natural habitat -->
            <div class="position-relative row form-group">
                <label for="animalNaturalHabitat" class="col-sm-2 col-form-label">Natural Habitat</label>
                <div class="col-sm-10"><textarea name="dietary" id="animalNaturalHabitat" class="form-control" placeholder="Habitat Description"></textarea></div>
            </div>

            <!-- global population -->
            <div class="position-relative row form-group">
                <label for="globalPopulation" class="col-sm-2 col-form-label">Global Population</label>
                <div class="col-sm-10"><input type="text" name="global_population" id="globalPopulation" class="form-control" placeholder="example: 1,000"></div>
            </div>

            <!-- description -->
            <div class="position-relative row form-group">
                <label for="animalDescription" class="col-sm-2 col-form-label">Special notes</label>
                <div class="col-sm-10"><textarea name="animal_description" id="animalDescription" class="form-control" placeholder="Animal Description"></textarea></div>
            </div>

            <div class="position-relative row form-group"><label class="col-sm-2 col-form-label">Photo on arrival</label>
                <div class="col-sm-10">
                    <input name="animal_photo" type="file" class="form-control-file">
                    <small class="form-text text-muted"> Animals photo</small>
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
         <div class="position-relative row form-group">
             <label for="isSick" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
                <input type="checkbox" name="is_sick" id="isSick" placeholder=""> is sick
            </div>
        </div>
        <!-- medical condition -->
        <div class="position-relative row form-group"><label for="animalCondition" class="col-sm-2 col-form-label">Any Medical Condition</label>
            <div class="col-sm-10">
                <input type="text" name="medical_condition" id="animalCondition" class=" form-control" placeholder="">
            </div>
        </div>
        <!-- treatment -->
        <div class="position-relative row form-group"><label for="animalCondition" class="col-sm-2 col-form-label">Treatments</label>
            <div class="col-sm-10"><textarea name="treatment" id="animalCondition" class="form-control" placeholder="Any treament given or on going"></textarea></div>
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
                    <div class="custom-checkbox custom-control custom-control-inline"><input type="checkbox" name="is_dead" id="animalDeath" class="custom-control-input"><label class="custom-control-label" for="animalDeath">Animal is Dead</label></div>
                    <!-- transfer -->
                    <div class="custom-checkbox custom-control custom-control-inline"><input type="checkbox" name="is_transferred" id="animalTransferred" class="custom-control-input"><label class="custom-control-label" for="animalTransferred">Animal was transferred</label>
                    </div>
                </div>
            </div>

            <!--death detail-->
            <!-- date of death -->
            <div class="position-relative row form-group">
                <label for="animalDeathDate" class="col-sm-2 col-form-label">Date of Death</label>
                <div class="col-sm-10">
                    <input type="date" name="death_date" id="animalDeathDate" class="form-control col-lg-3" placeholder="">
                </div>
            </div>
            <!-- death cause -->
            <div class="position-relative row form-group"><label for="deathCause" class="col-sm-2 col-form-label">Cause of Death</label>
                <div class="col-sm-10">
                    <input type="text" name="cause" id="deathCause" class=" form-control" placeholder="">
                </div>
            </div>

            <!-- incenaration date -->
            <div class="position-relative row form-group">
                <label for="incinerationDate" class="col-sm-2 col-form-label">Date of Incineration</label>
                <div class="col-sm-10">
                    <input type="date" name="incineration_date" id="incinerationDate" class="form-control col-lg-3" placeholder="">
                </div>
            </div>

            <!-- incineration locaiton -->
            <div class="position-relative row form-group"><label for="incenarationLocation" class="col-sm-2 col-form-label">Incineration Location</label>
                <div class="col-sm-10">
                    <input type="text" name="incenaration_location" id="incenarationLocation" class=" form-control" placeholder="">
                </div>
            </div>

            <hr>
            <!-- transfer detail -->

            <!-- transfer date -->
            <div class="position-relative row form-group">
                <label for="transferDate" class="col-sm-2 col-form-label">Date of Transfer</label>
                <div class="col-sm-10">
                    <input type="date" name="transfer_date" id="transferDate" class="form-control col-lg-3" placeholder="">
                </div>
            </div>

            <!-- transfer reason -->
            <div class="position-relative row form-group">
                <label for="transferReason" class="col-sm-2 col-form-label">Reason of Transfer</label>
                <div class="col-sm-10"><textarea name="transfer_reason" id="transferReason" class="form-control" placeholder="Any treament given or on going"></textarea></div>
            </div>

            <!-- transfer destionation -->
            <div class="position-relative row form-group">
                <label for="transferDestination" class="col-sm-2 col-form-label">Transfer Destination</label>
                <div class="col-sm-10">
                    <input type="text" name="transfer_destination" id="transferDestination" class="form-control" placeholder="">
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
            <input type="hidden" name="animal_id">

            <!-- nest construction method -->
            <div class="position-relative row form-group">
                <label for="nestConstructionMethod" class="col-sm-2 col-form-label">Nest Construction Method</label>
                <div class="col-sm-10">
                    <input type="text" name="nest_construction_method" id="nestConstructionMethod" class="form-control" placeholder="">
                </div>
            </div>

            <!-- clutch size -->
            <div class="position-relative row form-group">
                <label for="clutchSize" class="col-sm-2 col-form-label">Clutch Size</label>
                <div class="col-sm-10">
                    <input type="number" name="clutch_size" id="clutchSize" class="form-control" placeholder="No. of eggs">
                </div>
            </div>

            <!-- clutch size -->
            <div class="position-relative row form-group">
                <label for="wingspan" class="col-sm-2 col-form-label">Wingspan (in metres)</label>
                <div class="col-sm-10">
                    <input type="number" name="wingspan_in_metres" id="wingspan" class="form-control" placeholder="Ex: 2 ">
                </div>
            </div>

            <!-- ability of fly-->
            <div class="position-relative row form-group">
                <label for="flyingAbility" class="col-sm-2 col-form-label">Can fly? </label>
                <div class="col-sm-10">
                    <select class="form-control" id="flyingAbility" name="ability_to_fly">
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>
            </div>

            <!-- plumage color variants -->
            <div class="position-relative row form-group">
                <label for="plumage" class="col-sm-2 col-form-label">Plumage Colour Variants</label>
                <div class="col-sm-10">
                    <input type="text" name="plumage_colour_variants" id="plumage" class="form-control" placeholder=" ">
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
            <input type="hidden" name="animal_id">

            <!-- gestational period -->
            <div class="position-relative row form-group">
                <label for="gestationalPeriod" class="col-sm-2 col-form-label">Gestational Period (in months)</label>
                <div class="col-sm-10">
                    <input type="text" name="gestational_period_months" id="gestationalPeriod" class="form-control" placeholder="">
                </div>
            </div>

            <!-- avg body temp -->
            <div class="position-relative row form-group">
                <label for="bodyTemperature" class="col-sm-2 col-form-label">Average Body Temperature (in Celsius)</label>
                <div class="col-sm-10">
                    <input type="number" name="average_body_temperature" id="bodyTemperature" class="form-control" placeholder="">
                </div>
            </div>



            <!-- Mammal type-->
            <div class="position-relative row form-group">
                <label for="mammalType" class="col-sm-2 col-form-label">Mammal Category </label>
                <div class="col-sm-10">
                    <select class="form-control" id="mammalType" name="mammal_category">
                        <option value="Prototheria">Prototheria</option>
                        <option value="Metatheria">Metatheria</option>
                        <option value="Eutheria">Eutheria</option>
                    </select>
                </div>
            </div>

            <!-- plumage color variants -->
            <div class="position-relative row form-group">
                <label for="mammalColourVariants" class="col-sm-2 col-form-label">Colour Variants</label>
                <div class="col-sm-10">
                    <input type="text" name="color_variants" id="mammalColourVariants" class="form-control" placeholder=" ">
                </div>
            </div>

            <!--  -->
            <!-- end of form -->
       
    </div>
</div>

<!-- mammals end -->


<!-- Fish details start -->
<div class="main-card mb-3 card" id="fish-id">
    <div class="card-body">
        <h5 class="card-title">Fish's Details</h5>
        
            <input type="hidden" name="fish_id">
            <input type="hidden" name="animal_id">



            <!-- avg body temp -->
            <div class="position-relative row form-group">
                <label for="fishTemp" class="col-sm-2 col-form-label">Average Body Temperature (in Celsius)</label>
                <div class="col-sm-10">
                    <input type="number" name="fish_average_body_temperature" id="fishTemp" class="form-control" placeholder="">
                </div>
            </div>



            <!-- water type-->
            <div class="position-relative row form-group">
                <label for="waterType" class="col-sm-2 col-form-label">Water Type </label>
                <div class="col-sm-10">
                    <select class="form-control" id="waterType" name="water_type">
                        <option value="Salt">Salt</option>
                        <option value="Fresh">Fresh</option>
                    </select>
                </div>
            </div>

            <!-- fish color variants -->
            <div class="position-relative row form-group">
                <label for="mammalColourVariants" class="col-sm-2 col-form-label">Colour Variants</label>
                <div class="col-sm-10">
                    <input type="text" name="color_variants" id="mammalColourVariants" class="form-control" placeholder=" ">
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
            <input type="hidden" name="animal_id">


            <!-- reproduction type -->
            <div class="position-relative row form-group">
                <label for="reproductionType" class="col-sm-2 col-form-label">Reproduction Type </label>
                <div class="col-sm-10">
                    <select class="form-control" id="reproductionType" name="reproduction_type">
                        <option value="Egg Layer">Egg Layer</option>
                        <option value="Livebearer">Livebearer</option>
                    </select>
                </div>
            </div>

            <!-- clutch size -->
            <div class="position-relative row form-group">
                <label for="repClutchSize" class="col-sm-2 col-form-label">Clutch Size</label>
                <div class="col-sm-10">
                    <input type="number" name="rep_average_clutch_size" id="repClutchSize" class="form-control" placeholder="No. of eggs where reptile/amphibian is an egg layer">
                </div>
            </div>


            <!-- avag offspring  -->
            <div class="position-relative row form-group">
                <label for="repOffspring" class="col-sm-2 col-form-label">Average offspring</label>
                <div class="col-sm-10">
                    <input type="number" name="rep_average_offspring" id="repOffspring" class="form-control" placeholder="No. of offspring where reptile/amphibian is a livebearer">
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