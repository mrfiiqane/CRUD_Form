<?php 
include 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>List</title>
  <!-- <link rel="stylesheet" href="./style.css"> -->
  <link rel="stylesheet" href="./bootstrap-5.3.8-dist/css/bootstrap.min.css">
  
</head>
<body>
  <div class="container">
    <div class="row justify-content-center m-5">
      <div class="col-sm-8">
        <table class="table">
          <thead class="table-white bg-dark text-light"> 
            <!-- ciwaanka tableka -->
            <tr>
              <th>Id</th>
              <th>Name</th>
              <th>Class</th>  
              <th>Action</th>  
            </tr>
          </thead>
          <tbody>
              <?php 
                  $query = "SELECT * FROM student";
                  $result = $connection->query($query);
                  $htmlTable = "";
                  if($result){
                    // 1 qof table tr u fur 
                    while($row = $result->fetch_assoc()){
                      $htmlTable .= "<tr>";
                      $htmlTable .= "<td>" . $row['id'] . "</td>";
                      $htmlTable .= "<td>" . $row['name'] . "</td>";
                      $htmlTable .= "<td>" . $row['class'] . "</td>";
                      $insert_link = "index.php";
                      $Update_link = "index.php?" . "id=" . $row['id'] . "&name=" . $row['name'] . "&class=" . $row['class'];  
                      $delete_link = "operations.php?" . "id=" . $row['id'];
                      $htmlTable .= "<td>" . '<a href="'.$insert_link.'" class="btn btn-success">Add</a> <a href="'.$Update_link.'" class="btn btn-success">Update</a> <a href="'.$delete_link.'" class="btn btn-danger">Delete</a>' ."</td>";
                      $htmlTable .= "</tr>";
                    }
                    echo $htmlTable;

                  }else{
                    echo $connection->error;
                  }
              ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  
</body>

<script src="./bootstrap-5.3.8-dist/js/bootstrap.bundle.min.js"></script>
</html>