<?php
	include("./inc/header.php");
  include("./mod_edit_employee.php");
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
        <h1 class="mb-4"><i class="fa fa-edit"></i> Edit Employee</h1>
        <form action="./mod_edit_employee.php" method="post" enctype="multipart/form-data">
          <div class="row">
            <div class="col-md-6">
              <div class="mb-3">
                <label class="form-label">Employee ID</label>
                <input type="text" class="form-control" name="employee_id" value="<?php echo $employee_id ?>"/>
                <input type="hidden" name="id" value="<?php echo $id; ?>">
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="form-label">First Name</label>
                <input type="text" class="form-control" name="firstname" value="<?php echo $firstname ?>"/>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="mb-3">
                <label class="form-label">Last Name</label>
                <input type="text" class="form-control" name="lastname" value="<?php echo $lastname ?>"/>
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="form-label">Phone Number</label>
                <input type="text" class="form-control" name="phone" value="<?php echo $phonenum ?>"/>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="mb-3">
                <label class="form-label">Date Employed</label>
                <input type="date" class="form-control" name="demployed" value="<?php echo $demployed ?>"/>
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="form-label">Employment Status</label>
                <select class="form-select" name="estatus">
                  <option value="<?php echo $estatus ?>"><?php echo $estatus ?></option>
                  <option value="Former Employee">Former Employee</option>
                  <option value="Employee">Employee</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="mb-3">
                <label class="form-label">Residential Address</label>
                <input type="text" class="form-control" name="address" value="<?php echo $address ?>"/>
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="form-label">State</label>
                <input type="text" class="form-control" name="state" value="<?php echo $state ?>"/>
              </div>
            </div>
          </div>
          <div class="d-grid">
            <button class="btn btn-danger" type="submit" name="update">Update Record</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</body>
</html>
