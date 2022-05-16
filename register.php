<?php 
  include("./inc/header.php");
?>
<div class="container-fluid">
  <div class="row">
    <div class="offset-md-4 col-md-4">
      <div class="back p-4 mt-4">
        <div class="text-center">
          <i class="fa fa-user fa-3x text-white"></i>
          <h3 class="mt-2">REGISTER PAGE</h3>
        </div>
        <form method="post" action="./mod_register.php">
          <div class="mb-3">
            <label for="Name" class="form-label text-white">Full Name:</label>
            <input type="text" class="form-control" placeholder="Enter your full name" name="fname" required />
          </div>
          <div class="mb-3">
            <label for="Name" class="form-label text-white">Role:</label>
            <select class="form-select" aria-label="Default select example" name="role" required>
              <option selected>Select Role</option>
              <option value="Admin">Admin</option>
              <option value="User">User</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="Email" class="form-label text-white">Email:</label>
            <input type="email" class="form-control" placeholder="Enter your email" name="email" required />
          </div>
          <div class="mb-3">
            <label for="Password" class="form-label text-white">Password:</label>
            <input type="password" class="form-control" placeholder="Enter your password" name="password" required />
          </div>
          <div class="d-grid">
            <button type="submit" class="btn btn-warning" name="signup">Sign Up</button>
          </div>
          <div class="row mt-3">
            <div class="col-md-8">
              <p class="text-white">Already have an account?</p>
            </div>
            <div class="col-md-4">
              <div class="float-end">
                <a href="./login.php" class="btn btn-danger">Sign In</a>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</body>
</html>