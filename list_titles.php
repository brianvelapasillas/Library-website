<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link rel="stylesheet" href="css/footersimple.css">

    <title>Titles List</title>
  </head>
  <body>


<header>
   <?php include 'header.php'; ?>
</header>


    <?php
      include 'conection.php';
      $consult = "SELECT * FROM titles";
      $result = mysqli_query($conection, $consult);


      $titles_per_page = 5;
      $total_titles = mysqli_num_rows($result);
      $pages = $total_titles/5;
      $pages = ceil($pages);
      $page = 0;


      if(!$_GET){
        header('location:list_titles.php?page=1');
      }

      $start = ($_GET['page']-1)*$titles_per_page;

      $consult = "SELECT * FROM titles LIMIT ".$start.",".$titles_per_page;
      $result = mysqli_query($conection, $consult); 
    ?>



    <!-- Agregamos Tabla -->
<div class="container">

  <div class="card border-primary mb-2 " >
    <div class="card-header">
      <a href="addTitle.php"class=" btn btn-outline-success">Add</a>
    </div>
  </div>    



<div class="card border-primary " >
    <div class="card-body">
        <table class="table table-bordered table-hover table-striped">
      <thead class="bg-success">
        <tr>
          <th scope="col">id_titles</th>
          <th scope="col">Title</th>
          <th scope="col">Type</th>
          <th scope="col">Price</th>
          <th scope="col">Down Payment</th>
          <th scope="col">Total Sales</th>
          <th scope="col">Publication Date</th>
          <th scope="col">Note</th>
          <th scope="col">id_editorials</th>
          <th scope="col">Modify</th>
          <th scope="col">Delete</th>
          <th scope="col">Consult</th>
        </tr>
      </thead>
      <tbody>

        <?php

          while($row = mysqli_fetch_array($result)){


            echo '<tr>';
            echo '<td>'.$row['id_titles'].'</td>';
            echo '<td>'.$row['title'].'</td>';
            echo '<td>'.$row['type'].'</td>';
            echo '<td>'.$row['price'].'</td>';
            echo '<td>'.$row['down_payment'].'</td>';
            echo '<td>'.$row['total_sales'].'</td>';
            echo '<td>'.$row['publication_date'].'</td>';
            echo '<td>'.$row['note'].'</td>';
            echo '<td>'.$row['id_editorials'].'</td>';
           echo '<td>'.'<a href= "modifyTitle.php?id_titles='.$row['id_titles'].'" class="btn btn-success">Modify</a>'.'</td>';
            echo '<td>'.'<a href= "eraseTitle.php?id_titles='.$row['id_titles'].'" class="btn btn-danger">Delete</a>'.'</td>';
            echo '<td>'.'<a href= "consultTitle.php?id_titles='.$row['id_titles'].'" class="btn btn-primary">Consult</a>'.'</td>';
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
            href= "list_titles.php?page=<?php echo $_GET['page']-1 ?>">

            Previous
            </a> 

        </li>


          <?php for($i=0; $i<$pages; $i++): ?>
          <li class="page-item <?php echo $_GET['page']==$i+1 ? 'active' : '' ?>">
            <a class="page-link" href="list_titles.php?page=<?php echo $i+1 ?>">
              <?php echo $i+1 ?> 
            </a>
          </li>
          <?php endfor ?>


          <li class="page-item <?php echo $_GET['page']>=$pages ? 'disabled' : '' ?>">
            <a class="page-link"
              href= "list_titles.php?page=<?php echo $_GET['page']+1 ?>">

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