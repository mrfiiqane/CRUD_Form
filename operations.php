<?php 

// CRUD operations - we need register

// methods
// POST = userka xogtiisa laso marsiina iyadoo aan la arkeyn
// GET = url ka lasoo marina userku u arkaa


// soo jiido fileka connectionka 
include 'conn.php';

// isset = haddi lasoo diro POST, $_Post waa global variable
if(isset($_POST['insert'])){

  // soo qabo names ka formka
  $studentId = $_POST['student_id'];
  $studentName = $_POST['student_name'];
  $studentClass = $_POST['student_class'];

  // prepering query
  $query = "INSERT INTO student(id,name,class) VALUES('$studentId', '$studentName', '$studentClass')";

  // executing query
  $result = $connection->query($query);

  if($result){
    echo "Successfully Registration";
    header("location: list.php");
  }else{
    $connection->error;
  }

}else if(isset($_POST['update'])){

  // soo qabo names ka formka
  $studentId = $_POST['student_id'];
  $studentName = $_POST['student_name'];
  $studentClass = $_POST['student_class'];

  // prepering query
  $query = "UPDATE student set name = '$studentName', class = '$studentClass' WHERE id = '$studentId'";

  // executing query
  $result = $connection->query($query);

  if($result){
    echo "Successfully Updated";
    header("location: list.php");
  }else{
    $connection->error;
  }

}  
if(isset($_GET['id'])){

  // soo qabo names ka formka
  $studentId = $_GET['id'];

  // prepering query
  $query = "DELETE FROM student WHERE id = '$studentId'";

  // executing query
  $result = $connection->query($query);

  if($result){
    echo "Successfully Updated";
    header("location: list.php");
  }else{
    $connection->error;
  }
}

?>

