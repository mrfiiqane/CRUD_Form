<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD - Form</title>
  <link rel="stylesheet" href="./bootstrap-5.3.8-dist/css/bootstrap.min.css">
</head>
<body>
  <?php 

  if(isset($_GET['id'])){
    $id = $_GET['id'];
    $name = $_GET['name'];
    $class = $_GET['class'];
  }else{
    $id = "";
    $name = "";
    $class = "";
  }
  ?>
  <div class="container m-5">
    <h1 class="display-6 text-center">Enter Student Information</h1>
    <div class="row justify-content-center mt-20">
      <div class="col-sm-8">
        <div class="card">
          <div class="card-body">
            <form action="operations.php" method="POST">
              <div class="form-group m-2">
                <label for="id">Student id</label>
                <input type="text" name="student_id" id="" class="form-control" value="<?php echo $id ?>">
              </div>
              <div class="form-group m-2">
                <label for="id">Student name</label>
                <input type="text" name="student_name" id="" class="form-control" value="<?php echo $name ?>">
              </div>
              <div class="form-group m-2">
                <label for="id">Student class</label>
                <input type="text" name="student_class" id="" class="form-control" value="<?php echo $class ?>">
              </div>
              <button type="submit" class="btn btn-success btn-block m-2" name="insert">Save info<button>
              <button type="submit" class="btn btn-info btn-block m-2" name="update">Update info<button>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>
</body>
<script src="./bootstrap-5.3.8-dist/js/bootstrap.bundle.min.js"></script>
</html>