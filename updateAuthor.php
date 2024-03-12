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


  $sql = "UPDATE author SET au_name='$name', au_last_name='$lastName', phone_number='$phoneNumber', street='$street', city='$city', state='$state', country='$country' WHERE id_author= $idAuthor ";




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