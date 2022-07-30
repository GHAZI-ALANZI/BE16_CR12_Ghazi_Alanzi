<?php

require_once "..\components\bootstrap.php";
require_once "..\components\\db_connect.php";


require_once ".\uploud.php";


$id=$_GET['id'];
$sql = "SELECT * FROM `lacasamia` where id=$id ";
$result = mysqli_query($conn, $sql);
$table ='';
$row = mysqli_fetch_assoc($result);
  
echo $table="

<div class='card  border-0 text-light' >


    <div class='row g-0'>
    <h1 class='text-center bg-dark 'style='height:15vh;padding:20px'>Cpanel for Admin</h1>

    <form method='POST' enctype='multipart/form-data'style='background-color: rgba(0, 0, 0, 0.44);height:100%;'>
    <div class='col-md-5'>
<img src='..\picture\\{$row["image"]}' class='img-fluid rounded-start'>
</div>
        <div class='col-md-5'>
        </div>
        <div class='col-md-8'>
            <div class='card-body'>
                <h1 class='card-title'>Address:<input type='text' class='bg-dark text-light' value='{$row["address"]}'
                name='address'>
                </h1>
                <hr>
           
                <hr>
                <h4 class='card-title'>Area:<input type='text' class='bg-dark text-light' value='{$row["area"]}'

                        name='area'></h4>
                <hr>
                <h4 class='card-title'>Longitude: <input type='text' class='bg-dark text-light' value='{$row["longitude"]}'
                name='longitude'> 
                </h4>
                <hr>
                <h4 class='card-title'>description: <input type='text' class='bg-dark text-light' value='{$row["describtion"]}'

                    name='des'> </h4>
                <hr>
                <h4 class='card-title'>Latitude:<input type='text' class='bg-dark text-light' value='{$row["latitude"]}'
                name='latitude'> 
                </h4>
                <hr>
                <h4 class='card-title'>Reduction: <select name='reduction'>
                <option value='Yes'name='reduction'>Yes</option>
                <option value='No'name='reduction'>No</option>
                
              </select></h4>
                <hr>
                <h4 class='card-title'>Price: <input type='text' class='bg-dark text-light' value='{$row["price"]}' 
                name='price'>
                </h4>
                <hr>
                <h4 class='card-title'>Status: <select name='status'>
                <option value='Available'name='status'>Available</option>
                <option value='Not available'name='status'>Not available</option>
                
              </select>
                </h4><hr>
                <button type='submit' class='btn btn-warning mb-3'name='update'><h4>update</h4></button>
<a href='cpanel_adm.php' class='btn btn-success mb-3'><h4>back</h4></a>
            </div>
        </div>
    </div>
</div>




</form>";



    
    if(isset($_POST['update'])){
        $address=$_POST['address'];
        $area=$_POST['area'];
        $description=$_POST['des'];
        $latitude=$_POST['latitude'];
        $longitude=$_POST['longitude'];
        $reduction=$_POST['reduction'];
        $price=$_POST['price'];
        $status=$_POST['status'];
        $sql=" UPDATE `lacasamia` SET `address`='$address',`latitude`='$latitude',`longitude`='$longitude',`reduction`='$reduction',`describtion`='$description',`price`='$price',`status`='$status',`area`='$area' WHERE id='$id' ";

        $result = mysqli_query($conn, $sql);
        

}




  


?>

</body>

</html>