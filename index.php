<?php
	include("./inc/db_connect.php");
  include("./inc/header.php");
  /* include("./delete_employee.php"); */

  $sql = "SELECT * FROM employee_tb";
  $result = $db_connect->query($sql);
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
        <a href="./add_employee.php" class="btn btn-danger mb-4"><i class="fa fa-plus"></i> Add Employee</a>
        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
          <div class="alert alert-warning">
             <h3>Employee Table</h3>
          </div>
          <thead>
            <tr>
              <th>EmployeeID</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Phone Number</th>                                  
              <th>Date Employed</th>                                  
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php 
              if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
            ?>
              <tr>
                <td> <?php echo $row['id']; ?> </td>
                <td> <?php echo $row['first_name']; ?> </td>
                <td> <?php echo $row['last_name']; ?> </td>
                <td> <?php echo $row['phone']; ?> </td>
                <td> <?php echo $row['date_employed']; ?> </td>
                <td><a class="btn btn-info" href="edit_employee.php?id=<?php echo $row['id']; ?>"><i class="fa fa-edit"></i> Edit</a>&nbsp;
                    <a class="btn btn-danger" href="delete_employee.php?id=<?php echo $row['id']; ?>"><i class="fa fa-trash"></i> Delete</a> 
                </td>
              </tr>
              
              <!-- user delete modal 
              <div id="course_id<?php echo $teacher_id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-header">
                  </div>
                  <div class="modal-body">
                      <div class="alert alert-danger">Are you Sure you Want to <strong>Delete</strong>&nbsp; this Teacher?</div>
                  </div>
                  <div class="modal-footer">
                      <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
                      <a href="delete_course.php<?php echo '?id=' . $teacher_id; ?>" class="btn btn-danger"><i class="icon-trash icon-large"></i>&nbsp;Delete</a>
                  </div>
              </div>
              end delete modal

              </tr> -->
              
          <?php 
              }
            }
          ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</body>
</html>
