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

<div class="d-flex flex-column col-lg-3 col-md-3 col-sm-8 " style="margin: 0 auto; padding-top:2%; padding-bottom:5%; ">
		<!-- <img  class="rounded mx-auto d-block mb-3" style="width: 25%;" src="images/zoosignin.jpg" alt="logo"> -->
		<h4 class="center ">Sign In</h4>
<form method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input name="user_email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <p id="pw" class="text-danger"></p>
    <label>Password</label>
     <input id="password2" type="password" class="form-control" name="user_password" >
     <span toggle="#password2" class="fa fa-fw fa-eye-slash field-icon toggle-password"></span>
  </div>

    <button class="btn btn-success mx-auto" type="submit" value="submit" name="user_login">Sign In</button>
    <span><p class="mt-2">Got no account? <a href="signup">Sign up here!</a></p></span>
</form>
	</div>

<!-- modal -->
<!-- Modal -->
<div class="modal fade" id="incorrectModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
          Terms and Conditions
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        By signing the agreement, you are confirming the following to be true:-
        <ol>
          <li>I agree to sponsor the above named animal(s) for the period specified above.</li>
<li> I understand that the sponsorship fee is due in full by the 30th November 2010 and I will ensure that this fee is paid to Claybrook Zoo Ltd by this date.</li>
<li> I understand that all sponsorship fees are non-refundable.</li>
<li>I agree with the above signage layout/dimensions and understand these cannot be changed once the agreement has started.
</li>
        </ol>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Okay</button>
      </div>
    </div>
  </div>
</div>
</div>

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






  
