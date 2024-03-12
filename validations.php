<?php

      //read form's data
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
      $username=$_POST["username"];
      $password=$_POST["password"];


      $total_user = 0;

      //connect to the database

      include 'conection.php';


      $sql = "SELECT * FROM users WHERE (username = '$username') AND (password = '$password') ";


      // Execute the query
    if (mysqli_query($conection, $sql)) {
        $result = mysqli_query($conection, $sql);
        $total_user = mysqli_num_rows($result);
        //echo $total_user;
        if ($total_user > 0)
        {
           header("location:home.php"); 
        }
        else
        {
           header("location:index.php");
        }    
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conection);
    }


    // Close the connection
      mysqli_close($conection);

  }
  else
    echo "No data was read";

?>