<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link rel="stylesheet" href="css/footersimple.css">

    <title>Author List</title>
  </head>
  <body>


<header>
   <?php include 'header.php'; ?>
</header>


    <?php
      include 'conection.php';
      $consult = "SELECT * FROM author";
      $result = mysqli_query($conection, $consult);
    ?>


    <!-- Agregamos Tabla -->
<div class="container">

  <div class="card border-primary mb-2 " >
    <div class="card-header">
      <a href="addAuthor.php"class=" btn btn-outline-success">Add</a>
    </div>
  </div>    



<div class="card border-primary " >
    <div class="card-body">
        <table class="table table-bordered table-hover table-striped">
      <thead class="bg-success">
        <tr>
          <th scope="col">id_author</th>
          <th scope="col">Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Phone Number</th>
          <th scope="col">Street</th>
          <th scope="col">City</th>
          <th scope="col">State</th>
          <th scope="col">Country</th>
          <th scope="col">Modify</th>
          <th scope="col">Delete</th>
          <th scope="col">Consult</th>
        </tr>
      </thead>
      <tbody>

        <?php

          while($row = mysqli_fetch_array($result)){


            echo '<tr>';
            echo '<td>'.$row['id_author'].'</td>';
            echo '<td>'.$row['au_name'].'</td>';
            echo '<td>'.$row['au_last_name'].'</td>';
            echo '<td>'.$row['phone_number'].'</td>';
            echo '<td>'.$row['street'].'</td>';
            echo '<td>'.$row['city'].'</td>';
            echo '<td>'.$row['state'].'</td>';
            echo '<td>'.$row['country'].'</td>';
            echo '<td>'.'<a href= "modifyAuthor.php?id_author='.$row['id_author'].'" class="btn btn-success">Modify</a>'.'</td>';
            echo '<td>'.'<a href= "eraseAuthor.php?id_author='.$row['id_author'].'" class="btn btn-danger">Delete</a>'.'</td>';
            echo '<td>'.'<a href= "consultAuthor.php?id_author='.$row['id_author'].'" class="btn btn-primary">Consult</a>'.'</td>';
            echo '</tr>';

          }
        ?>
      </tbody>
    </table>
    



    </div>

    <div class="card-footer bg-transparent">
        <nav aria-label="...">
        <ul class="pagination">

        <li class="page-item <?php echo $_GET['page']<=1 ? 'disabled' : '' ?>"> 

            <a class="page-link"
            href= "listing.php?page=<?php echo $_GET['page']-1 ?>">

            Previous
            </a> 

        </li>


          <?php for($i=0; $i<$pages; $i++): ?>
          <li class="page-item <?php echo $_GET['page']==$i+1 ? 'active' : '' ?>">
            <a class="page-link" href="listing.php?page=<?php echo $i+1 ?>">
              <?php echo $i+1 ?> 
            </a>
          </li>
          <?php endfor ?>


          <li class="page-item <?php echo $_GET['page']>=$pages ? 'disabled' : '' ?>">
            <a class="page-link"
              href= "listing.php?page=<?php echo $_GET['page']+1 ?>">

              Next
            </a> 
          </li>

        </ul>
      </nav>
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