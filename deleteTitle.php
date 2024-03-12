<?php

  //read form's data

  $idTitles=$_POST["idTitles"];
  $title=$_POST["title"];
  $type=$_POST["type"];
  $price=$_POST["price"];
  $downPayment=$_POST["downPayment"];
  $totalSales=$_POST["totalSales"];
  $publicationDate=$_POST["publicationDate"];
  $note=$_POST["note"];

  //connect to the database

  include 'conection.php';



   $sql = "DELETE FROM titles WHERE id_titles= $idTitles ";

//echo "$sql";


  // Execute the query
    if (mysqli_query($conection, $sql)) {
        echo "Record updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conection);
    }


    // Close the connection
  mysqli_close($conection);

  header("location:list_titles.php");

?>
