<?php
	include("./inc/header.php");
?>
<ul class="nav-head">
  <li class="nav-item">
    <a class="nav-link" href="index.php"><i class="fa fa-user"></i> Employee Record System</a>
  </li>
</ul>
<div class="container p-3">
  <div class="row">
    <div class="col-md-3">
      <?php
        include("./inc/sidebar.php");
      ?>
    </div>
    <div class="col-md-9">
      <div class="p-3">
        <h1 class="mb-4"><i class="fa fa-plus"></i> Add Employee</h1>
        <form method="post" action="mod_add_employee.php" enctype="multipart/form-data">
          <div class="row">
            <div class="col-md-6">
              <div class="mb-3">
                <label class="form-label">Employee ID</label>
                <input type="text" class="form-control" name="employee_id"/>
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="form-label">First Name</label>
                <input type="text" class="form-control" name="firstname"/>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="mb-3">
                <label class="form-label">Last Name</label>
                <input type="text" class="form-control" name="lastname"/>
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="form-label">Phone Number</label>
                <input type="text" class="form-control" name="phonenum"/>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="mb-3">
                <label class="form-label">Date Employed</label>
                <input type="date" class="form-control" name="demployed"/>
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="form-label">Employment Status</label>
                <select class="form-select" name="estatus">
                  <option value="">-- Select status --</option>
                  <option value="former">Former employee</option>
                  <option value="employee">Employee</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="mb-3">
                <label class="form-label">Residential Address</label>
                <input type="text" class="form-control" name="address"/>
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="form-label">State</label>
                <input type="text" class="form-control" name="state"/>
              </div>
            </div>
          </div>
          <div class="d-grid">
            <button class="btn btn-danger" name="submit" type="submit">Submit Record</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</body>
</html>
