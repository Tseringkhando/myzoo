<div class="wrapper row3">
  <main class="hoc container clear"  style="padding: 20px 0;"> 
    <div class="content"> 
     
      <div class="group btmspace-50 demo">
         <h2 class="heading"><?php echo $allAnimals['name'];?></h2>
        <div class="one_half first">
          <img style="width: 100%;" src="../images/animalprofile/<?php echo $allAnimals['animal_photo'];?>">
        </div>
        <div class="one_half">
           <div>
             <span class="font-weight-bold desc_title" style="color: #000;">Specie:</span>
           <?php echo $species['specie_name'];?>
           </div>

           <div>
             <span class="font-weight-bold desc_title">Category:</span>
           <?php echo $categories['category'];?>
           </div>

           <div>
             <span class="font-weight-bold desc_title">Gender:</span>
           <?php echo $allAnimals['gender'];?>
           </div>

           <div>
             <span class="font-weight-bold desc_title">Captivity/Wild:</span>
           <?php echo $allAnimals['captivity_wild'];?>
           </div>

           <div>
             <span class="font-weight-bold desc_title">Height:</span>
           <?php echo $allAnimals['height_metres'];?> metres
           </div>

           <div>
             <span class="font-weight-bold desc_title">Weight:</span>
           <?php echo $allAnimals['weight_kg'];?> kg
           </div>

           <div>
             <span class="font-weight-bold desc_title">Natural habitat:</span>
           <?php echo $allAnimals['natural_habitat'];?>
           </div>

           <div>
             <span class="font-weight-bold desc_title">Global population:</span>
           <?php echo $allAnimals['global_population'];?>
           </div>


           <div>
             <span class="font-weight-bold desc_title">Life Span:</span>
           <?php if($allAnimals['life_span_months']>12) {echo $allAnimals['life_span_months']/12;?> years 
           <?php }else echo $allAnimals['life_span_months']." "; ?>months 
           </div>
          

          <div>
            <span class="font-weight-bold desc_title">Location: </span>
             <?php echo $locations['location'];?>
          </div>

<?php if($allAnimals['animal_description']!=''){?>
          <div>
            <h2 style="padding: 0; margin: 0;">Notes</h2>
            <span class="font-weight-bold desc_title"> 
             <?php echo $allAnimals['animal_description'];?>
            </span>
          </div>
        <?php }?>



          <!-- for sponsor -->
           <?php if($allAnimals['is_for_sponsorship']==1){?>
            <?php if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true && $_SESSION['sessusertype']='sponsor'){?>
          <button  style ="margin-top: 5em;"type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            <h1 style="margin: 0"> <i class=" fas fa-hand-holding-heart"></i>Animal is available for sponsorship! Click to sponsor! </h1>
          </button>
            <?php } else { ?>
             <button  style ="margin-top: 5em;" class="btn btn-primary" onclick="window.location.href='signin';">
            <h1 style="margin: 0"> <i class=" fas fa-hand-holding-heart"></i>Animal is available for sponsorship! Click to sponsor! </h1>
          </button>
          <?php } }?>

          <!-- sponsored -->
           <?php if($allAnimals['is_sponsored']==1){?>
            <div style="background: #2b7903; color: #fff; padding:2%; text-align: center;  margin-top: 2em;">
              <h1 style="margin: 0"><i class="fas fa-hand-holding-usd"> </i>  Sponsored by:</h1> 
            </div>
            <img style="width: 80%;
    border: 1px solid;
    margin-top: 5%;"
            src="../images/sponsors/<?php echo $sponsors['sponsor_photo'];?>">
           <?php }?>
        </div>
      </div>




    </div>
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Apply for sonsorship?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        This will send your request to sponsor this animal to the Zoo's database. Are you sure?
      </div>
      <div class="modal-footer">
        <form method="POST" action="animalsingle">
        <button type="button" class="btn btn-danger" style="background: #dc3545" data-dismiss="modal">No</button>
        <button type="submit" name="applySponsorship" class="btn btn-primary">Yes</button>
        </form>
      </div>
    </div>
  </div>
</div>