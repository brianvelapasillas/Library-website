<?php

  //read form's data

  $idAuthor=$_POST["idAuthor"];
  $name=$_POST["name"];
  $lastName=$_POST["lastName"];
  $phoneNumber=$_POST["phoneNumber"];
  $street=$_POST["street"];
  $city=$_POST["city"];
  $state=$_POST["state"];
  $country=$_POST["country"];

  //connect to the database

  include 'conection.php';


 $sql = "DELETE FROM author WHERE id_author= $idAuthor ";




  // Execute the query
    if (mysqli_query($conection, $sql)) {
        echo "Record updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conection);
    }


    // Close the connection
  mysqli_close($conection);

  header("location:list_author.php");

?>




