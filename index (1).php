
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

$sql1 = "SELECT *FROM products where pstatus = 'sale'";
$res1 = mysqli_query($conn,$sql1);



?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


     <!--font-awesome-->
    
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/new_arrivals.css">
    <link rel="stylesheet" href="./css/collections.css">

    <!------------------------>

    <link
      href="https://cdn.jsdelivr.net/npm/daisyui@3.3.1/dist/full.css"
      rel="stylesheet"
      type="text/css"
    />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;700;800&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              clifford: "#da373d",
            },
          },
        },
      };
    </script>

    <style>
      .font-rope {
        font-family: "Manrope", sans-serif;
      }
        body {
            background-color: #f7f7f7;
            font-family: "Manrope", sans-serif;
        }

        .about-us {
            max-width: 800px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
        }

        .about-us h2 {
            font-size: 24px;
            margin-bottom: 30px;
        }

        .about-us p {
            line-height: 1.8;
        }
    </style>

  </head>

   



  <body>


        <div id="banner" class="items-center relative" style="align-items:center;">
             
           <div class="overlay absolute bg-gradient-to-t from-transparent to-gray-950 ... z-0 opacity-70 w-full h-full top-0 left-0 ">
           
           </div>
           <div class="header relative">
              <div class="container">
                  <div class=" flex items-center justify-between">
                      <div class=" w-[200px] rounded-2xl ">              
                           <a href="index.php"> <img src="./images/coverrr.png"   class="mt-1 pl-2 pr-2 pb-2 border-spacing-2" style="width:250px;height:100px;border-radius:10px; color:white;"></a>
                      </div>

                      <div class="">
                          <ul id="menu" class="float-md-right flex z-20 items-center font-bold" style="font-weight: 800;">
                              <li><a href="index.php" class="font-bold" style="color:white; font-weight:800;font-size:18px;">Home</a></li>
                              <li><a href="sell.php"style="color:white; font-weight:800;font-size:18px;">Sell</a></li>
                              <li><a href="products.php" style="color:white; font-weight:800;font-size:18px;">Products</a></li>
                              <li><a href="contact us.php" style="color:white; font-weight:800;font-size:18px;">Contact Us</a></li>
                              <li><a href="login.php" style="color:white; font-weight:800;font-size:18px;">Login</a></li>
                              <li><a href="profile.php"><img src="./images/<?php echo $image_name;?>" style="height:35px;width:35px;border:none;border-radius:20px;" alt=""></a></li>
                        
                          </ul>
                      </div>
                  </div>
                </div>
           </div>



       
    <form action="" method="POST">    
             <div class="container mt-5 p-5 search-box" style="margin-top:110px;" >
              <div class="row" style="margin-top:15%;">
                <div class="col-1"></div>
                <div class="col-9">
                  <h3 class="ml-5 mt-0 md:-mt-5 text-xl md:text-3xl text-yellow-50 font-extrabold" style="text-align:center;font-weight:900;font-style:cursive;">Welcome to CUET's online marketplace for second-hand treasures. Find and sell quality items at unbeatable prices</h3><br>
                  <div class="input-group ">
                    <input type="text" id="live_search" name="submitt" class="form-control ml-5" placeholder="Search Your Product..." style=" margin-left:40px;height:45px;border:none;border-bottom-left-radius:20px;border-top-left-radius:20px;">

                    <div class="input-group-append mb-8 md:mb-3">
                      <button class="btn btn-secondary" id="myBtn" name="submittt"  type="submit" class="mb-1" style="background:black; border:1px solid black; height:45px;border-bottom-right-radius:20px;border-top-right-radius:20px;">  
                      <i class="fa fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
             </div>
    </form>

    <div id="searchresult">

    </div>

    <?php
                         if(isset($_POST['submittt']))
                         {
                             $key = $_POST['submitt'];
                            ?>
                            <script>   
                            window.location.href="livesearch.php?key=<?php echo $key ?>";   
                            </script>
                            <?php
                         }
                        
                         
            ?>


 
      </div>
      <br><br>





      <!--products-->

      <section id="collection" class="py-5">
        <div class="container">
            <div class="title text-center">
                <h2 class="position-relative d-inline-block text-5xl mt-3 font-extrabold  border-l-8 pl-2 border-l-orange-500" style="">Collections</h2>
            </div>

            <div class="row">
            
                <br><br><br>



            <?php

                 $count1 = mysqli_num_rows($res1);
                 if($count1>0)
                 {
                     while($row1 = mysqli_fetch_assoc($res1))
                     {
                         $image =$row1['pimage'];
                         $pid = $row1['pid'];
             ?> 

                <div class="col-md-3 best text-center">
                    <div class="collection-list mt-xl-5 mx-auto" style="margin-top:20px";>
                        <div class="collection-img ">
                                        
                           <a href="post_details.php?id=<?php echo $pid;?>">  <img src="images/<?php echo $image ?>"  style="height:345px; width:306px;" class=""></a>

                           
                            <!-- <div class="w-100"></div> -->
                            <span class=" position-absolute top-4 left-8"><?php echo $row1['pstatus'];?></span>
                            <div class="add position-absolute " style="padding-top:20px;">Add to Cart</div>
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
                            <span class="text-xl font-bold" style=""><?php echo "$".$row1['price'];?></span>
                        </div>

                   </div>
                </div>
                <?php
                     }
                 }
                ?>



        </div>
      </section>




      <!--Categories...-->
      <br><br>
      <section>
        <div class="container">
            <div class="title text-center ">
                <h2 class="position-relative d-inline-block text-5xl mt-3 font-extrabold border-l-8 pl-2 border-l-orange-500" style="">Categories</h2>
            </div>
            <br>

            <div class="row flex flex-col justify-center mx-auto items-center md:flex-row">
               <div class="col-md-2 ">
                    <div class="mt-xl-5" style="margin-top:20px";>
                        <div class="collection-imgg ">
                            <a href="books.php">  <img src="images/books.jpg" style="height:200px; width:200px;" class=""></a>
                            <!-- <div class="w-100"></div> -->
                            
                        </div>
                        <div class="text-center justify-content-center">

                            <p class="">Books</p>
    
                        </div>

                   </div>
                </div>

                <div class="col-md-2">
                    <div class="mt-xl-5" style="margin-top:20px";>
                        <div class="collection-imgg ">
                        <a href="sports.php">  <img src="images/sports.jpg" style="height:200px; width:200px;" class=""></a>
                            <!-- <div class="w-100"></div> -->
                            
                        </div>
                        <div class="text-center justify-content-center">

                            <p class="">Sports</p>
    
                        </div>

                   </div>
                </div>


                <div class="col-md-2">
                    <div class="mt-xl-5" style="margin-top:20px";>
                        <div class="collection-imgg ">

                         <a href="clothes.php">  <img src="images/clothes.jpg" style="height:200px; width:200px;" class=""></a>

                            <!-- <div class="w-100"></div> -->
                            
                        </div>
                        <div class="text-center justify-content-center">

                            <p class="">Clothes</p>
    
                        </div>

                   </div>
                </div>

                <div class="col-md-2">
                    <div class="mt-xl-5" style="margin-top:20px";>
                        <div class="collection-imgg ">
                        <a href="furniture.php">  <img src="images/products1899.jpg" style="height:200px; width:200px;" class=""></a>

                            <!-- <div class="w-100"></div> -->
                            
                        </div>
                        <div class="text-center justify-content-center">

                            <p class="">Furniture</p>
    
                        </div>

                   </div>
                </div>

                <div class="col-md-2">
                    <div class="mt-xl-5" style="margin-top:20px";>
                        <div class="collection-imgg ">
                        <a href="vehicles.php">  <img src="images/bicycles.jpg" style="height:200px; width:200px;" class=""></a>
                            <!-- <div class="w-100"></div> -->
                            
                        </div>
                        <div class="text-center justify-content-center">

                            <p class="">vehicles</p>
    
                        </div>

                   </div>
                </div>

                <div class="col-md-2">
                    <div class="mt-xl-5" style="margin-top:20px";>
                        <div class="collection-imgg ">
                        <a href="electronics.php">  <img src="images/iphones.jpg" style="height:200px; width:200px;" class=""></a>                            <!-- <div class="w-100"></div> -->
                            
                        </div>
                        <div class="text-center justify-content-center">

                            <p class="">electronic devices</p>
    
                        </div>

                   </div>
                </div>

              </div>
        </div>

      
          
      </section>
     <br><br><br>










           <!--superclients section-->
           <section class=" container mx-auto my-24 ml-0 md:ml-24 mr-0 md:mr-24 flex flex-col items-center gap-12 lg:flex-row rounded-xl py-24 bg-gradient-to-r from-[#FF8938] to-[#F00] px-16">
          <div class="space-y-5 pr-28">
            <h2 class="text-5xl font-extrabold text-white">
              Meet Our Super<br>Clients
            </h2>
            <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias laboriosam, molestiae quia id debitis quibusdam ab soluta neque, eum optio, itaque 
              quam autem enim perferendis suscipit quaerat blanditiis. Quasi, odio!</p>
            
            <button class="btn btn-primary border-0 bg-white font-2xl text-red-500"><a href="./superclients.php">Show All</a></button>   

          </div>
          <div class="relative">
            
              <div class="p-10 mb-16 z-10 relative rounded-lg opacity-40 bg-white">
                <img src="./images/client.png" class="absolute -left-5 border-4 border-white rounded-full -top-3" alt="">
                We are providing the best and suitable home insurance services for the people 
                who are interested to treatment 
                <h4 class="font-bold mt-6">Yalham Huda</h4>
                <p class="font-medium mt-3">Student</p>
                <div class="flex justify-end">
                  <img src="./images/circles.png" alt="">
                </div>
              </div>  
                
              <div class="p-10 absolute top-40 lg:-left-32 z-20 rounded-lg lg:w-[490px] bg-white">
                <img src="./images/client.png" class="absolute -left-5 border-4 border-white rounded-full -top-3" alt="">
                We are providing the best and suitable home insurance services for the people 
                who are interested to treatment 
                <h4 class="font-bold mt-6">Yalham Huda</h4>
                <p class="font-medium mt-3">Student</p>
                <div class="flex justify-end">
                  <img src="./images/circles.png" alt="">
                </div>
              </div>
                
              <div class="p-10 z-15 relative rounded-lg opacity-40 bg-white">
                <img src="./images/client.png" class="absolute -left-5 border-4 border-white rounded-full -top-3" alt="">
                We are providing the best and suitable home insurance services for the people 
                who are interested to treatment 
                <h4 class="font-bold mt-6">Yalham Huda</h4>
                <p class="font-medium mt-3">Student</p>
                <div class="flex justify-end">
                  <img src="./images/circles.png" alt="">
                </div>
              </div>
             
          </div>

</section>


<h1 class="text-center text-6xl font-extrabold mt-[140px]"> <span class=" border-l-8 pl-2 border-l-orange-500 "></span>Our Team</h1>

<section class="mt-[50px] pb-[50px] flex justify-center md:mt-[70px] container mx-auto bg-[url('./images/a.jpg')] bg-no-repeat  bg-cover relative">
     
     <div class="overlay absolute bg-black z-0 opacity-70 w-full h-full top-0 left-0 ">
           
     </div>

    <div class=" flex  flex-col justify-center space-y-6 items-center z-50 md:px-[230px] md:py-[130px]">
      <h1 class="text-white text-2xl font-bold md:text-6xl pt-[60px]  md:font-bold md:text-center"> <span class=""></span>Meet Our Team</h1>
      <p class="text-white md:text-2xl max-w-[70%] md:max-w-[700px] text-center ">Contrary to popular belief, is not simply random text. It has roots in a piece of classical Latin 
        literature from 45 BC, making it over 2000 years old.</p>

      <div class="text-white grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-[50px] md:gap-[130px]">
         <div class="member text-center justify-center">
            <img src="./images/profile7003.jpg" class="rounded-full h-[140px] w-[140px] mb-[30px]">
            <h2 class="text-xl font-bold">Mohi</h2>
            <p class="font-base mb-4">Web Developer</p>
            <div class="social flex justify-center gap-2  text-[#F85559]">
              <i class="fa-brands fa-facebook  rounded-full text-2xl"></i>
              <i class="fa-brands fa-twitter text-2xl"></i>
              <i class="fa-brands fa-linkedin text-2xl"></i>
            </div>
         </div>
         <div class="member text-center justify-center">
            <img src="./images/member2.png" class="mb-[30px]">
            <h2 class="text-xl font-bold">Alwad Hossain</h2>
            <p class="font-base mb-4">Backend Developer</p>
            <div class="social flex justify-center gap-2  text-[#F85559]">
              <i class="fa-brands fa-facebook  rounded-full text-2xl"></i>
              <i class="fa-brands fa-twitter text-2xl"></i>
              <i class="fa-brands fa-linkedin text-2xl"></i>
            </div>
         </div>
         <div class="member text-center justify-center">
            <img src="./images/member3.png" class="mb-[30px]">
            <h2 class="text-xl font-bold">Alwad Hossain</h2>
            <p class="font-base mb-4">AI Expert</p>
            <div class="social flex justify-center gap-2  text-[#F85559]">
              <i class="fa-brands fa-facebook  rounded-full text-2xl"></i>
              <i class="fa-brands fa-twitter text-2xl"></i>
              <i class="fa-brands fa-linkedin text-2xl"></i>
            </div>
         </div>
         <div class="member text-center justify-center">
            <img src="./images/member4.png" class="mb-[30px]">
            <h2 class="text-xl font-bold">Alwad Hossain</h2>
            <p class="font-base mb-4">Frontend Developer</p>
            <div class="social flex justify-center gap-2  text-[#F85559]">
              <i class="fa-brands fa-facebook rounded-full text-2xl"></i>
              <i class="fa-brands fa-twitter text-2xl"></i>
              <i class="fa-brands fa-linkedin text-2xl"></i>
            </div>
         </div>

    
      </div>
    </div>

   
  </section>


  <!--why choose us-->
  <section class="mt-[50px] md:mt-[140px] container mx-auto">
    <h1 class="text-center text-3xl md:text-5xl font-extrabold mb-[24px] "> <span class="border-l-8 pl-2 border-l-orange-500"></span>Why Choose Us?</h1>
    <p class="text-center max-w-[277px] md:max-w-[615px] mb-[48px] text-base mx-auto text-[#12121299]">Contrary to popular belief, is not simply random text. It has roots in 
      a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>

      

    <div class=" grid grid-cols-1 md:grid-cols-1 lg:grid-cols-3 gap-16">

      <div class="md:hidden mt-8  md:mt-1 flex flex-col">
        <img src="./images/whychoose1.png" alt="">
      </div>

      <div class=" flex flex-col md:items-center">

        <div class="flex gap-3 mb-10 flex-col items-center md:justify-start md:items-start md:flex-row">
          <div class="bg-gray-300 p-2 mt-4 h-[50px] rounded-full w-[53px] text-black flex justify-center items-center">
            <i class="fa-solid fa-users "></i>
          </div>
          <div class="flex flex-col items-center md:items-start  ">
            <h2 class="text-2xl font-extrabold ">Dedicated team</h2>
            <hr class="w-[40%] bg-[#12121299] h-[3px] text-base mt-2 mb-5">
            <p class="text-[#12121299] max-w-[260px] text-center md:text-left md:max-w-[354px] ">Professional employees are there for you to pick the most amazing and fresh fruits.</p>
          </div>
  
        </div>

        <div class="flex gap-3 mb-10 flex-col items-center md:justify-start  md:items-start md:flex-row">
          <div class="bg-gray-300 p-2 mt-4 h-[50px] rounded-full w-[53px] text-black flex justify-center items-center">
            <i class="fa-solid fa-heart-circle-check"></i>
          </div>
          <div class="flex flex-col items-center md:items-start ">
            <h2 class="text-2xl font-extrabold ">Good Products</h2>
            <hr class="w-[40%] bg-[#12121299] h-[3px] text-base mt-2 mb-5">
            <p class="text-[#12121299] max-w-[260px] text-center md:text-left md:max-w-[354px]">Professional employees are there for you to pick the most amazing and fresh fruits.</p>
          </div>
  
        </div>
        <div class="flex gap-3 mb-10 flex-col items-center md:justify-start  md:items-start md:flex-row">
          <div class="bg-gray-300 p-2 mt-4 h-[50px] rounded-full w-[53px] text-black flex justify-center items-center">
            <i class="fa-solid fa-gift"></i>
          </div>
          <div class="flex flex-col items-center md:items-start  ">
            <h2 class="text-2xl font-extrabold ">Gift Certificates</h2>
            <hr class="w-[40%] bg-[#12121299] h-[3px] text-base mt-2 mb-5">
            <p class="text-[#12121299] max-w-[260px] text-center md:text-left md:max-w-[354px] ">Professional employees are there for you to pick the most amazing and fresh fruits.</p>
          </div>
        </div> 



      </div>





      <div class="hidden md:flex flex-col">
        <img src="./images/why.jpg" class="h-[500px] rounded-xl" alt="">
      </div>



      <div class="-mt-14 md:mt-1 flex flex-col md:items-center">
          <div class="flex flex-col-reverse items-center md:flex-row gap-3 mb-10  ">
  
            <div class=" flex flex-col items-center md:items-end ">
              <h2 class="text-2xl font-extrabold ">Ensure uality</h2>
              <hr class="w-[40%]   bg-[#12121299] h-[3px] text-base mt-2 mb-5 ">
              <p class="text-[#12121299] text-center md:max-w-[354px] max-w-[260px]  md:mx-w-auto md:text-right ">Professional employees are there for you to pick the most amazing and fresh fruits.</p>
            </div>
            <div class="bg-gray-300 p-2 mt-4 h-[50px] rounded-full md:w-[53px] w-[53px] text-black flex justify-center items-center">
              <i class="fa-solid fa-users "></i>
            </div>
    
          </div>
          <div class="flex flex-col-reverse items-center md:flex-row gap-3 mb-10  ">
  
            <div class=" flex flex-col items-center md:items-end ">
              <h2 class="text-2xl font-extrabold ">Reliable Products</h2>
              <hr class="w-[40%]   bg-[#12121299] h-[3px] text-base mt-2 mb-5 ">
              <p class="text-[#12121299] text-center md:max-w-[354px] max-w-[260px]  md:mx-w-auto md:text-right ">Professional employees are there for you to pick the most amazing and fresh fruits.</p>
            </div>
            <div class="bg-gray-300 p-2 mt-4 h-[50px] rounded-full md:w-[53px] w-[53px] text-black flex justify-center items-center">
              <i class="fa-solid fa-users "></i>
            </div>
    
          </div>
          <div class="flex flex-col-reverse items-center md:flex-row gap-3 mb-10  ">
  
            <div class=" flex flex-col items-center md:items-end ">
              <h2 class="text-2xl font-extrabold ">Proper Service</h2>
              <hr class="w-[40%]   bg-[#12121299] h-[3px] text-base mt-2 mb-5 ">
              <p class="text-[#12121299] text-center md:max-w-[354px] max-w-[260px]  md:mx-w-auto md:text-right ">Professional employees are there for you to pick the most amazing and fresh fruits.</p>
            </div>
            <div class="bg-gray-300 p-2 mt-4 h-[50px] rounded-full md:w-[53px] w-[53px] text-black flex justify-center items-center">
              <i class="fa-solid fa-users "></i>
            </div>
    
          </div>

       </div>
  
        
    </div>  
  
  </section>












    




  



      <!--footer-->
      
    <footer class="bg-dark text-white pt-24 pb-24 mt-[200px]">
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
    <!--isotope.js -->
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>