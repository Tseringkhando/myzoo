
<div class="d-flex flex-column col-lg-3 col-md-3 col-sm-8 " style="margin: 0 auto; padding-top:2%; padding-bottom:5%; ">
<p class="title center">Know terms and conditions <a href="" data-toggle="modal" data-target="#exampleModal">here.</a></p>
		<h6 class="center ">Register your account</h6>


<form method="POST">

<input type="hidden" name="user_id" value="">
<input type="hidden" name="id" value="">
<div class="form-group">
    <label for="userfname">First Name</label>
    <input name="firstname" type="text" class="form-control" id="userfname"  >
  </div>

  <div class="form-group">
    <label for="userlname">Last Name</label>
    <input name="lastname" type="text" class="form-control" id="userlname" required="true">
  </div>
  
  <div class="form-group">
    <label for="userGender" >Gender</label>
    <select name="gender" id="userGender" class="form-control">
    <option value="Female">Female</option>
    <option value="Male">Male</option>
    <option value="Others">Others</option>
    </select>
  </div>
  <!-- organame -->
  <div class="form-group">
    <label for="orgname">Organisation </label>
    <input name="client_name" type="text" class="form-control" id="orgname" required="true">
  </div>
<!-- contact -->
<div class="form-group">
    <label for="orgcontact">Primary contact </label>
    <input name="primary_contact" type="text" placeholder="+zip- your contact" class="form-control" id="orgcontact" required="true">
  </div>

  <!-- org address -->
  <div class="form-group">
    <label for="orgadd">Address</label>
    <input name="address" type="text" placeholder="Address" class="form-control" id="orgadd" required="true">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Email id</label>
    <input name="user_email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  required="true">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" >Create Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="user_password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword2" >Confirm Password</label>
    <input type="password" class="form-control" id="exampleInputPassword2" name="user_confirmpassword">
  </div>


  <div class="form-group">
    <label for="band" >Sponsorship Band</label>
    <select name=" sponsorship_band" id="band" class="form-control">
    <option value="A">A</option>
    <option value="B">B</option>
    <option value="C">C</option>
    <option value="D">D</option>
    <option value="E">E</option>
    </select>
  </div>

  <div class="form-group">
    <label>Signage Area(%)</label>
    <input  class="form-control" min="0" type="number" name="sinage_area_percentage">
  </div>


  <div class="form-group">
    <label for="org" >Date of Establishment</label>
    <input type="date" class="form-control" id="org" name="dob">
  </div>
<div class="form-check">
    <input type="checkbox" name="agreeCheck" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1"> I agree to <a href="" data-toggle="modal" data-target="#exampleModal">terms and conditions.</a></label>
  </div>
  <div class="form-group"></div>
    <button class="btn btn-success mx-auto" type="submit" value="submit" name="sponsor_signup">Register</button>
    <span><p class="mt-2">Already got an account? <a href="signin">Sign in here!</a></p></span>
</form>
	</div>




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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