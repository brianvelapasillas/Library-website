<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link rel="stylesheet" href="css/footersimple.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">


    <title>Editorials List</title>
  </head>

  <body>


<header>
   <?php include 'header.php'; ?>
</header>



    <?php
      include 'conection.php';
      $consult = "SELECT * FROM editorials";
      $result = mysqli_query($conection, $consult); 


      $publishers_per_page = 5;
      $total_publishers = mysqli_num_rows($result);
      $pages = $total_publishers/5;
      $pages = ceil($pages);
      $page = 0;


      if(!$_GET){
        header('location:listing.php?page=1');
      }

      $start = ($_GET['page']-1)*$publishers_per_page;

      $consult = "SELECT * FROM editorials LIMIT ".$start.",".$publishers_per_page;
      $result = mysqli_query($conection, $consult); 


    ?>


    <!-- Agregamos Tabla -->
<div class="container-fluid">

  <div class="card border-primary mb-2 " >
    <div class="card-header">
      <a href="addEditorial.php"class=" btn btn-outline-success">Add <i class="fas fa-plus"></i> </a>
    </div>
  </div>    



<div class="card border-primary " >
    <div class="card-body">
        <table class="table table-bordered table-hover table-striped">
      <thead class="bg-success">
        <tr>
          <th scope="col">id</th>
          <th scope="col">Name</th>
          <th scope="col">City</th>
          <th scope="col">State</th>
          <th scope="col">Modify</th>
          <th scope="col">Delete</th>
          <th scope="col">Consult</th>
        </tr>
      </thead>
      <tbody>

        <?php

          while($row = mysqli_fetch_array($result)){

            echo '<tr>';
            echo '<td>'.$row['id_editorials'].'</td>';
            echo '<td>'.$row['name_editorial'].'</td>';
            echo '<td>'.$row['city'].'</td>';
            echo '<td>'.$row['state'].'</td>';
            echo '<td>'.'<a href= "modifyEditorial.php?id_editorials='.$row['id_editorials'].'" class="btn btn-success">Modify <i class="fas fa-edit"></i> </a>'.'</td>';

            echo '<td>'.'<a href= "eraseEditorial.php?id_editorials='.$row['id_editorials'].'" class="btn btn-danger">Delete <i class="fas fa-trash-alt"></i> </a>'.'</td>';

            echo '<td>'.'<a href= "consultEditorial.php?id_editorials='.$row['id_editorials'].'" class="btn btn-primary">Consult <i class="fas fa-search"></i> </a>'.'</td>';

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