<?php
  $connection = mysqli_connect("localhost","root","","my_first_database");

  if (!$connection){
    exit("An error occurred".mysqli_connect_errno());

  } else {
    echo "connection successful";
  }

  if(isset($_POST['submit'])){
    $first_name = htmlentities($_POST['first_name']);
    $last_name = htmlentities($_POST['last_name']);
    $date_of_birth = htmlentities($_POST['date_of_birth']);
  }

  $query = "INSERT INTO students(first_name, last_name, date_of_birth) VALUES ('$first_name','$last_name','$date_of_birth');";

  $results = mysqli_query($connection, $query,);

  if(!$results = mysqli_query($connection, $query)){
    exit("An error occurred while inserting");
  } else {
    echo "Data inserted successfully";
  }




?>


<h1>Yo, this is my first get down with PHP </h1>
<h3>Type in you name and birthday and Ill store it in my database.</h3>
<form action="index.php" method="POST">
  <input type="text" name="first_name">
  <input type="text" name="last_name">
  <input type="date" name="date_of_birth">
  <input type="submit" name="submit" value="submit">
</form>

