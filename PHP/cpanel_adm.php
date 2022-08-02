<?php

require_once "../components/bootstrap.php";
require_once "../components/db_connect.php";


require_once "./uploud.php";?>

<div class='card  border-0 text-light'>
    <div class='row g-0'>
        <h1 class='text-center bg-dark ' style='height:15vh;padding:20px'>Cpanel for Admin</h1>
        <a class="btn btn-warning text-dark bg-warning p-2" aria-current="page" href="index.php">
            <h1>Home</h1>
        </a>
        <div class="container bg-dark">
            <div class="row">

                <?php 
$sql = "SELECT * FROM lacasamia";
$result = mysqli_query($conn,$sql);
$card=''; 
if(mysqli_num_rows($result)  > 0) {    
   while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
echo $card='
  <div class="col-12">
      <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Image</th>
            <th scope="col">address</th>
            <th scope="col">latitude</th>
            <th scope="col">longitude</th>
            <th scope="col">reduction</th>
            <th scope="col">describtion</th>
            <th scope="col">price</th>
            <th scope="col">status</th>
            <th scope="col">area</th>
          </tr>
        </thead>
        <tbody>
          <tr>
          <form method="POST">

            <th scope="row">'.$row["id"].'</th>
            <td  style="height:8vh;width:10vw;">
                <img src="..\picture\\'.$row["image"].'"
                class="img-fluid img-thumbnail" >
            </td>
            <td>'.$row["address"].'</td>
            <td>'.$row["latitude"].'</td>
            <td>'.$row["longitude"].'</td>
            <td>'.$row["reduction"].'</td>
            <td>'.$row["describtion"].'</td>
            <td>'.$row["price"].'</td>
            <td>'.$row["status"].'</td>
            <td>'.$row["area"].'</td>

            <td><a class="btn btn-warning"  href="update.php?id='.$row["id"].' "> <h6>upated</h6></a>
            <td><a class="btn btn-danger"  href="delete.php?id='.$row["id"].' "> <h6>delete</h6></a>
            <td><a class="btn btn-success"  href="create.php"> <h6>create</h6></a>
            </td>
            </form>

          </tr>
          
        </tbody>
      </table><br>
  </div>



';


}

}



?>

            </div>

            </body>

            </html>