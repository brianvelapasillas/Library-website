<?php

echo "estoy aqui";

	//read form's data
	$library_name=$_POST["library_name"];
	$home_address=$_POST["home_address"];
	$city=$_POST["city"];
	$country=$_POST["country"];
	$zip_code=$_POST["zip_code"];

echo $library_name;


	//connect to the database

	include 'conection.php';


	$sql = "INSERT INTO libraries(library_name, home_address, city, country, zip_code) VALUES ('$library_name', '$home_address', '$city','$country', '$zip_code')";

echo "<br>";
echo $sql;


	// Execute the query
    if (mysqli_query($conection, $sql)) {
        echo "Record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conection);
    }
echo "estoy despues de la ejecucion del query";

    // Close the connection
	mysqli_close($conection);

	header("location:list_library.php");

?>