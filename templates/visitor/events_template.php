<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
  
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="content three_quarter"> 
      <!-- ################################################################################################ -->
      <div id="gallery">
        <figure>

          <header class="heading">Events</header>

          <ul class="row nospace">
            <?php foreach($events as $row){?>
            <li class="">
           
            <div class="card" style="width: 18rem; margin-right: 1rem;">
              <div class="card-header text-center bold" style="font-family: Amita; font-size: 1.32em" >
                 <?php echo $row['title'];?>
              </div>
              <?php if($row['event_photo']!=''){?>
            <img class="card-img-top" src="../images/events/<?php echo $row['event_photo'];?>" alt="Card image cap" style="height: 15rem; object-fit: cover;">
            <?php }?>
            <div class="card-body ">   <?php echo $row['description'];?></div>
           <cite class="text-right mr-2 "> <?php echo $row['on_date'];?></cite>
            <div class="card-footer">
          
              <?php if($row['price']!=''){?>
             <div class="text-right">£ <?php echo $row['price'];?></div>  <?php }?>
            </div>
          </div>

            </li>
          <?php } ?>
           
          </ul>
        </figure>
      </div>
     
      <!-- ################################################################################################ -->
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>