
<form method="POST">
<div class="main-card mb-3 card">
    <div class="card-body">
        <h5 class="card-title">Employee Details</h5>
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
    <label for="exampleInputEmail1">Email address</label>
    <input name="user_email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  required="true">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" >Create Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="user_password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" >Confirm Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="user_confirmpassword">
  </div>

  <div class="form-group">
    <label for="userGender" >Gender</label>
    <select name="gender" id="userGender">
    <option value="Female">Female</option>
    <option value="Male">Male</option>
    <option value="Others">Others</option>
    </select>
  </div>

  <div class="form-group">
    <label for="userDob" >Date of Birth</label>
    <input type="date" class="form-control" id="userDob" name="dob">
  </div>


    <button class="btn btn-success mx-auto" type="submit" value="submit" name="save_zookeeper">Save</button>

    </div>
</div>
</form>