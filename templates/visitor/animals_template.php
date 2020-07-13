<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="sidebar one_quarter first"> 
      <!-- ################################################################################################ -->
      <h6>Search </h6>
      <nav class="sdb_holder">
      
       <form method="POST" action="animals">
        <div class="form-group">
        <label>Enter animal:</label>
         <input type="text" name="searchKeyword" class="form-control">
       </div>

       <div class="form-group">
         <label>Select Category</label>
         <select name="searchCategory" class="form-control">
          <option value="all">All</option>
           <?php foreach($categories as $row){?>
            <option value="<?php echo $row['id'];?>"><?php echo $row['category']; }?></option>
         </select>
       </div>

        <div class="form-group">
        <label>Is for sponsorship?</label>
        <select name="searchIsSponsered" class="form-control">
          <option value="all">All</option>
          <option  value="1">Yes</option>
          <option  value="0">No</option>
        </select>
      </div>

        <input type="submit" name="search" class="form-control btn-success" value="Search">
       
       </form>
      </nav>

      
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="content three_quarter"> 
      <!-- ################################################################################################ -->
      <div id="gallery">
        <figure>

          <header class="heading"><?php echo $pagetitle; ?></header>

          <ul class="row nospace ">
            <?php foreach($allAnimals as $row){?>
            <li class="">
           
            <div class="card" style="width: 18rem; margin-right: 1rem;">
              <a href="animalsingle&animalSingleId=<?php echo $row['id'];?>">
            <img class="card-img-top" src="../images/animalprofile/<?php echo $row['animal_photo'];?>" alt="Card image cap" style="height: 15rem; object-fit: cover;">
            <div class="card-body">
              <p class="card-text"><?php echo $row['name'];?></p>
            </div>
            </a>
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