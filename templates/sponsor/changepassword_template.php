<!-- home page of sponsor displayed after succesful login -->
<?php 
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) { 
	?>
<style>
.field-icon {
  float: right;
  margin-right: 10px;
  margin-top: -25px;
  position: relative;
  z-index: 2;
}

.container{
  padding-top:50px;
  margin: auto;
}
</style>

<div class="row">
<div class="col-md-6">
    <div class="main-card mb-3 card">
        <div class="card-header">Change Password</div>
        <div class="card-body">
          <form method="POST">
              <div class="form-group">
                  <label>
                      Current Password
                  </label>
                    <input id="password-field" type="password" class="form-control" name="oldpassword" >
                    <span toggle="#password-field" class="fa fa-fw fa-eye-slash field-icon toggle-password"></span>
              </div>

              <div class="form-group">
                  <label>
                      New Password
                  </label>

                   <input id="password2" type="password" class="form-control" name="newpassword" >
                    <span toggle="#password2" class="fa fa-fw fa-eye-slash field-icon toggle-password"></span>

              </div>

               <div class="form-group">
                  <label>
                      Confirm Password
                  </label>

                   <input id="password3" type="password" class="form-control" name="confirmpassword" >
                    <span toggle="#password3" class="fa fa-fw fa-eye-slash field-icon toggle-password"></span>

              </div>

              <div class="form-group">
                  <input type="submit" name="changePassword" value="Save" class=" btn btn-outline-success">
              </div>
          </form>
        </div>
    </div>
    
</div>

	<?php }	?>


    <script>

$(".toggle-password").click(function() {

  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});
    </script>
	
