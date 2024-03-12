<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link rel="stylesheet" href="css/footersimple.css">

    <title>Delete Author</title>
  </head>
  <body>


<header>
   <?php include 'header.php'; ?>
</header>



    <?php
      //read the id coming from listing
      $id=$_GET['id_author'];
      //$id=$REQUEST['id_author'];

      include 'conection.php';
      $consult = "SELECT * FROM author WHERE id_author= $id";
      $result = mysqli_query($conection, $consult);

      //leer registro de la tabla y lo guarda en row
      $row = mysqli_fetch_array($result)
    ?>


    <!-- Agregamos Tabla -->
<div class="container">

  <div class="card border-primary mb-2 " >
    <div class="card-header">
      <center> <h4>Delete Author</h4> </center>
    </div>
  </div>    



<div class="card border-primary " >
    <div class="card-body">
    
          <form action="deleteAuthor.php" method="POST">

                <div class="form-group">
                  <label for="idAuthor">ID_Author</label>
                  <input type="text" class="form-control" name="idAuthor"
                  placeholder= "captura el nombre de la editorial" value="<?php echo $row['id_author']; ?>" readonly>
                </div>
                
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" name="name"
                  placeholder= "captura el nombre de la editorial" value="<?php echo $row['au_name']; ?>" readonly>
                </div>


            <div class="form-group">
              <label for="lastName">Last Name</label>
              <input type="text" class="form-control" name="lastName"
              placeholder= "captura el nombre de la editorial" value="<?php echo $row['au_last_name']; ?>" readonly>
            </div>


            <div class="form-group">
              <label for="phoneNumber">Phone Number</label>
              <input type="text" class="form-control" name="phoneNumber"
              placeholder= "captura el nombre de la editorial" value="<?php echo $row['phone_number']; ?>" readonly>
            </div>


            <div class="form-group">
              <label for="street">Street</label>
              <input type="text" class="form-control" name="street"
              placeholder= "captura el nombre de la editorial" value="<?php echo $row['street']; ?>" readonly>
            </div>


            <div class="form-group">
              <label for="city">City</label>
              <input type="text" class="form-control" name="city"
              placeholder= "captura el nombre de la editorial" value="<?php echo $row['city']; ?>" readonly>
            </div>


            <div class="form-group">
              <label for="state">State</label>
              <input type="text" class="form-control" name="state"
              placeholder= "captura el nombre de la editorial" value="<?php echo $row['state']; ?>" readonly>
            </div>


            <div class="form-group">
              <label for="country">Country</label>
              <input type="text" class="form-control" name="country"
              placeholder= "captura el nombre de la editorial" value="<?php echo $row['country']; ?>" readonly>
            </div>
            


            <div class="row">
                    <div class="col-md-3 offset-md-6">
                        <a href="listing.php " class="btn btn-danger">Cancel</a>
                    </div>

                    <div class="col-md-3">
                      
                       <!-- <input type="submit" name="add" value="add" class="btn btn-primary">-->
                       <button type="submit" class="btn btn-primary">Delete</button>
                    </div>

            </div>




          </form>

    </div>
</div> 


</div>


<footer>
  <?php include 'footer.php'; ?>
</footer>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

  </body>
</html>