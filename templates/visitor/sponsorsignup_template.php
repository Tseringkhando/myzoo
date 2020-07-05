
<div class="d-flex flex-column col-lg-3 col-md-3 col-sm-8 " style="margin: 0 auto; padding-top:2%; padding-bottom:5%; ">
<p class="title center">Know terms and conditions <a href="#">here.</a></p>
		<h6 class="center ">Register your account</h6>
<form method="POST">

<input type="hidden" name="user_id" value="">
<input type="hidden" name="id" value="">
<div class="form-group">
    <label for="userfname">First Name</label>
    <input name="firstname" type="text" class="form-control" id="userfname" required="true" >
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
    <label for="org" >Date of Establishment</label>
    <input type="date" class="form-control" id="org" name="dob">
  </div>


    <button class="btn btn-success mx-auto" type="submit" value="submit" name="sponsor_signup">Register</button>
    <span><p class="mt-2">Already got an account? <a href="signin">Sign in here!</a></p></span>
</form>
	</div>