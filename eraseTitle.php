<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link rel="stylesheet" href="css/footersimple.css">

    <title>Consult Title</title>
  </head>
  <body>


<header>
   <?php include 'header.php'; ?>
</header>



    <?php
      //read the id coming from list_titles
      $id=$_GET['id_titles'];
      //$id=$REQUEST['id_titles'];

      include 'conection.php';
      $consult = "SELECT * FROM titles WHERE id_titles= $id";
      $result = mysqli_query($conection, $consult);

      //leer registro de la tabla y lo guarda en row
      $row = mysqli_fetch_array($result)
    ?>


    <!-- Agregamos Tabla -->
<div class="container">

  <div class="card border-primary mb-2 " >
    <div class="card-header">
      <center> <h4>Consult Title</h4> </center>
    </div>
  </div>    



<div class="card border-primary " >
    <div class="card-body">

      <form action="deleteTitle.php" method="POST">

            <div class="form-group">
              <label for="idTitles">id_titles</label>
              <input type="text" class="form-control" name="idTitles"
              placeholder= "captura el nombre de la editorial" value="<?php echo $row['id_titles']; ?>" readonly>
            </div>
    
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control" name="title"
              placeholder= "captura el nombre de la editorial" value="<?php echo $row['title']; ?>" readonly>
            </div>


            <div class="form-group">
              <label for="type">Type</label>
              <input type="text" class="form-control" name="type"
              placeholder= "captura el nombre de la editorial" value="<?php echo $row['type']; ?>" readonly>
            </div>


            <div class="form-group">
              <label for="price">Price</label>
              <input type="text" class="form-control" name="price"
              placeholder= "captura el nombre de la editorial" value="<?php echo $row['price']; ?>" readonly>
            </div>


            <div class="form-group">
              <label for="downPayment">Down Payment</label>
              <input type="text" class="form-control" name="downPayment"
              placeholder= "captura el nombre de la editorial" value="<?php echo $row['down_payment']; ?>" readonly>
            </div>


            <div class="form-group">
              <label for="totalSales">Total sales</label>
              <input type="text" class="form-control" name="totalSales"
              placeholder= "captura el nombre de la editorial" value="<?php echo $row['total_sales']; ?>" readonly>
            </div>


            <div class="form-group">
              <label for="publicationDate">Publication date</label>
              <input type="text" class="form-control" name="publicationDate"
              placeholder= "captura el nombre de la editorial" value="<?php echo $row['publication_date']; ?>" readonly>
            </div>


            <div class="form-group">
              <label for="note">Note</label>
              <input type="text" class="form-control" name="note"
              placeholder= "captura el nombre de la editorial" value="<?php echo $row['note']; ?>" readonly>
            </div>
            


            <div class="row">
                    <div class="col-md-3 offset-md-6">
                        <a href="list_titles.php " class="btn btn-danger">Cancel</a>
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