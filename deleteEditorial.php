<?php

  //read form's data

  $idEditorials=$_POST["idEditorials"];
  $name=$_POST["name"];
  $city=$_POST["city"];
  $state=$_POST["state"];

  //connect to the database

  include 'conection.php';


  $sql = "DELETE FROM editorials WHERE id_editorials= $idEditorials ";




  // Execute the query
    if (mysqli_query($conection, $sql)) {
        echo "Record deleted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conection);
    }


    // Close the connection
  mysqli_close($conection);

  header("location:listing.php");

?>