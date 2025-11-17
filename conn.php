<?php 

// types connection 
//1: object orianted
//2: proccecual 

// Host = serverka
// User = database username
// Password = password (default: empty for XAMPP)
// Database = magaca database-ka

$connection = new mysqli("localhost:4306","root","","mydb");

if($connection->connect_error){
  echo $connection->error; 
  
}else{
  // echo "Successfully connected!";
}














?>