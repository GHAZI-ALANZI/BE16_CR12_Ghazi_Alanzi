<?php
require_once "../components/bootstrap.php";
require_once "../components/navbar.php";
require_once "../components/db_connect.php";






?>
<div class="card text-bg-dark">
    <img src="https://st.depositphotos.com/1194063/2151/i/600/depositphotos_21515189-stock-photo-agent-with-house-model-and.jpg"
        class="card-img" style="max-height:49vh;min-height:5vh;">

</div>


<div class="container px-4 px-lg-5 mt-5">
    <div class="row gx-4 gx-lg-4 row-cols-md-3 row-cols-xl-4 ">

        <?php 
$sql = "SELECT * FROM lacasamia";
$result = mysqli_query($conn,$sql);
$card=''; 
if(mysqli_num_rows($result)  > 0) {    
   while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
echo $card='<div class="col mb-2">
               
                <div class="overflow-hidden shadow product-holder">
                    <img class="card-img-top w-100 product-cover"
                        src="..\picture\\'.$row["image"].'"
                        alt="..." />
                        <h5 class="card-title w-100 font-weight-bolder ms-3">'.$row['address'].'</h5>
                        <p class="m-0 ms-3">Area ' .$row['area'].' &#13217</p>
                        <p class="m-0 ms-3">Price' .$row['price'].' $</p>
                        <a class="btn btn-warning text-decoration-none mt-2 mb-2 ms-3" href="details.php?id='.$row["id"].'">details</a>

                </div>
               
                
                   
                 
                
        </div>



';}}?>
    </div>

</div>
<?php require_once "../components/footer.php";