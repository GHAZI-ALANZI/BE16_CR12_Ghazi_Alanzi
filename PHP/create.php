<?php

require_once "../components/bootstrap.php";
require_once "../components/db_connect.php";


require_once "./uploud.php";



  
echo $table="

<div class='card  border-0 text-light' >
    <div class='row g-0'>
    <h1 class='text-center bg-dark 'style='height:15vh;padding:20px'>Cpanel for Admin</h1>
    <form method='POST' enctype='multipart/form-data'style='background-color: rgba(0, 0, 0, 0.44);height:100%;'>

        <div class='col-md-5'>
        </div>
        <div class='col-md-8'>
            <div class='card-body'>
                <h1 class='card-title'>Address:<input type='text' class='bg-dark text-light' name='address'>
                </h1>
                <hr>
                <h4 class='card-title'>Uploud_image:<input type='file' class='bg-dark text-light' name='img' >
                </h4>
                <hr>
                <h4 class='card-title'>Area:<input type='text' class='bg-dark text-light'
                        name='area'></h4>
                <hr>
                <h4 class='card-title'>Longitude: <input type='text' class='bg-dark text-light' name='longitude'> 
                </h4>
                <hr>
                <h4 class='card-title'>description: <input type='text' class='bg-dark text-light'
                    name='des'> </h4>
                <hr>
                <h4 class='card-title'>Latitude:<input type='text' class='bg-dark text-light' name='latitude'> 
                </h4>
                <hr>
                <h4 class='card-title'>Reduction: <select name='reduction'>
                <option value='Yes'name='reduction'>Yes</option>
                <option value='No'name='reduction'>No</option>
                
              </select></h4>
                <hr>
                <h4 class='card-title'>Price: <input type='text' class='bg-dark text-light' name='price'>
                </h4>
                <hr>
                <h4 class='card-title'>Status: <select name='status'>
                <option value='Available'name='status'>Available</option>
                <option value='Not available'name='status'>Not available</option>
                
              </select>
                </h4><hr>
                <button type='submit' class='btn btn-warning mb-3'name='creat'><h4>create</h4></button>
<a href='cpanel_adm.php' class='btn btn-success mb-3'><h4>back</h4></a>
            </div>
        </div>
    </div>
</div>




</form>";



    
    if(isset($_POST['creat'])){
       
        $address=$_POST['address'];
        $area=$_POST['area'];
        $description=$_POST['des'];
        $latitude=$_POST['latitude'];
        $longitude=$_POST['longitude'];
        $reduction=$_POST['reduction'];
        $price=$_POST['price'];
        $status=$_POST['status'];
        $img = $filename . "." . $extension;
    
        
        $sql=" INSERT INTO `lacasamia`( `image`, `address`, `latitude`, `longitude`, `reduction`, `describtion`, `price`, `status`, `area`) VALUES ('$img','$address','$latitude','$longitude','$reduction','$description','$price','$status','$area')";
        $result = mysqli_query($conn, $sql);
        header("location:success_create.php");
        

}




  


?>

</body>

</html>