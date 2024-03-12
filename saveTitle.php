<?php

	//read form's data

	$title=$_POST["title"];
	$type=$_POST["type"];
	$price=$_POST["price"];
	$downPayment=$_POST["downPayment"];
	$totalSales=$_POST["totalSales"];
	$publicationDate=$_POST["publicationDate"];
	$note=$_POST["note"];
	$idEditorials=$_POST["idEditorials"];




	//connect to the database

	include 'conection.php';


	$sql = "INSERT INTO titles(title, type, price, down_payment, total_sales, publication_date, note, id_editorials) VALUES ('$title', '$type', '$price','$downPayment', '$totalSales', '$publicationDate', '$note', '$idEditorials')";
	



	// Execute the query
    if (mysqli_query($conection, $sql)) {
        echo "Record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conection);
    }


    // Close the connection
	mysqli_close($conection);

	header("location:list_titles.php");

?>