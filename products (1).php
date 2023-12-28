<?php include('config/constants.php'); ?>
<?php

if(isset( $_SESSION['user']))
{
    // echo "welcome ". $_SESSION['user'];
    // unset( $_SESSION['user']);
    $id = $_SESSION['user'];
    $sql = "SELECT *FROM user WHERE id = '$id'";
    $res = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($res);
    // echo $count;
     if($count>0)
     {
         $row = mysqli_fetch_assoc($res);
         $image_name = $row['image'];
     }
 

}

$sql1 = "SELECT *FROM products WHERE pstatus='Sale'";
$res1 = mysqli_query($conn,$sql1);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" href="./css/products.css">
  <link rel="stylesheet" href="./css/footer.css">
   
  <title>Products</title>
  <style>

  </style>


</head>

<body>

  <!--header-->
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                <a href="index.php"> <img src="./images/coverrr.png"  class="mt-1 pl-2 pr-2 pb-2" style="width:230px;height:100px;border-radius:10px;"></a>
                </div>

                <div class="col">
                    <ul id="menu" class="float-md-right">
                        <li><a href="index.php" >Home</a></li>
                        <li><a href="sell.php">Sell</a></li>
                        <li><a href="products.php">Products</a></li>
                        <li><a href="contact us.php">Contact Us</a></li>
                        <li><a href="login.php">Login</a></li>
                        <li><a href="profile.php"><img src="./images/<?php echo $image_name;?>" style="height:35px;width:35px;border:none;border-radius:20px;" alt=""></a></li>
                  
                    </ul>
                </div>
            </div>
          </div>
     </div>






     <!--products-->
     
     <section id="collection" class="py-5">
        <div class="container">


            <div class="row">


            <?php

                 $count1 = mysqli_num_rows($res1);
                 if($count1>0)
                 {
                     while($row1 = mysqli_fetch_assoc($res1))
                     {
                         $image =$row1['pimage'];
                         $pid = $row1['pid'];
             ?> 

                <div class="col-md-3 best">
                    <div class="collection-list mt-xl-5" style="margin-top:20px";>
                        <div class="collection-img ">
                                        
                        <a href="post_details.php?id=<?php echo $pid;?>">  <img src="images/<?php echo $image ?>"  style="height:345px; width:306px;" class=""></a>
                           
                            <!-- <div class="w-100"></div> -->
                            <span class=" position-absolute"><?php echo $row1['pstatus'];?></span>
                            <div class="add position-absolute" style="padding-top:20px;">Add to Cart</div>
                        </div>
                        <div class="text-center justify-content-center">
                        <div class="rating text-orange-500">
                                <span class=""><i class="fas fa-star"></i></span>
                                <span class=""><i class="fas fa-star"></i></span>
                                <span class=""><i class="fas fa-star"></i></span>
                                <span class=""><i class="fas fa-star"></i></span>
                                <span class=""><i class="fas fa-star"></i></span>

                            </div>
                            <p class=""><?php echo $row1['pname'];?></p>
                            <span class="" style="font-weight:600;"><?php echo "$".$row1['price'];?></span>
                        </div>

                   </div>
                </div>
                <?php
                     }
                 }
                ?>



             

            </div>
        </div>
      </section>










  
      <!--footer-->
      
      <footer class="bg-dark text-white pt-24 pb-24 mt-[200px]" style="padding-top: 100px; padding-bottom:100px;">
      <div class="container text-center text-md-left">
          <div class="row text-center text-md-left">
              <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                  <h5 class="text-uppercase mb-4 font-weight-bold text-warning">CUETmart</h5>
                  <p>We ensure good quality of products!!</p>
              </div>
              <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                  <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Products</h5>
                  <p>
                      <a href="" class="text-white" style="text-decoration:none;">Books</a>
                  </p>
                  <p>
                      <a href="" class="text-white" style="text-decoration:none;">Electronics</a>
                  </p>
                  <p>
                      <a href="" class="text-white" style="text-decoration:none;">Vehicles</a>
                  </p>
               
              </div>  
              <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                  <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Useful links</h5>
                  
                  <p>
                      <a href="./Home.php" class="text-white" style="text-decoration:none;">Home</a>
                  </p>
                  <p>
                      <a href="./products.php" class="text-white" style="text-decoration:none;">Products</a>
                  </p>
                  <p>
                      <a href="./login.php" class="text-white" style="text-decoration:none;">login</a>
                  </p>
                  
              </div>

              <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                  <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Contacts</h5>
                  <p>
                     <i class="fas fa-home mr-3"></i>Home
                  </p>
                  <p>
                      <i class="fas fa-envelope mr-3"></i>Gmail
                  <p>
                      <i class="fas fa-phone mr-3"></i>+8801625680207
                  </p>
                  <p>
                      <i class="fas fa-print mr-3"></i>print
                  </p>

              </div>
               
          </div>

          <hr clas="mb-4 mt-4">
          
          <div class="row align-items-center mt-20">
              <div class="col-md-7 col-lg-8 ">
                  <p>Copyright 02020 All rights reserved by:
                      <a href="" class="text-decoration-none">
                          <strong class="text-warning">CUETmart</strong>
                      </a>
                  </p>
                    
              </div>
        

              <div class="col-md-5 col-lg-4">
                  
                  <div class="text-center text-md-right">

                      <ul class="list-unstyled list-inline">
                          <li class="list-inline-item">
                              <a href="" class="btn-floating btn-sm text-white" style="font-size:23px;"><i class="fab fa-facebook"></i></a>
                          </li>
                          <li class="list-inline-item">
                              <a href="" class="btn-floating btn-sm text-white" style="font-size:23px;"><i class="fab fa-twitter"></i></a>
                          </li>
                          <li class="list-inline-item">
                              <a href="" class="btn-floating btn-sm text-white" style="font-size:23px;"><i class="fab fa-google-plus"></i></a>
                          </li>
                          <li class="list-inline-item">
                              <a href="" class="btn-floating btn-sm text-white" style="font-size:23px;"><i class="fab fa-linkedin-in"></i></a>
                          </li>
                          <li class="list-inline-item">
                            <a href="" class="btn-floating btn-sm text-white" style="font-size:23px;"><i class="fab fa-youtube"></i></a>
                        </li>

                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </footer>









  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/your-font-awesome-kit.js" crossorigin="anonymous"></script>
</body>

</html>
