             
<!-- IF USER DIDNT LOG IN SUCCESSFULLY THEN CONDITION BELOW IS TRUE -->


<?php
session_start();
include_once("../connection.php");

if(!isset($_SESSION['email'])){


$queryupdate =("UPDATE register SET Status='Offline' WHERE email= 'miguel@gmail.com'");
$query_run = mysqli_query($conn,$queryupdate);  
  
header('location:/pnsystem/day1/landingpage.php');
 
}


?>

<!DOCTYPE html>
<html lang="en">

<head>

 <!-- SWEET ALERT LINKS -->


 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">


<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Open+Sans">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">



<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>

<link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>

    <!-- HEADER LINKS  -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- ICONS FAFA LINK -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- END OF FAFA -->

    <link rel="stylesheet" href="../header/style.css">
    <link rel="stylesheet" href="./usercss.css">


    <script src="../header/jquery.min.js"></script>
    <script src="../header/popper.js"></script>
    <script src="../header/bootstrap.min.js"></script>
    <script src="../header/main.js"></script>


    <!-- END -->


    <!-- PRODUCT LINK WITH FUNCTIONS -->

    <!-- Roboto Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700&display=swap">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="../product/boostrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="../product/mdb-pro.min.css">
    <!-- Material Design Bootstrap Ecommerce -->
    <link rel="stylesheet" href="../product/mdb.ecommerce.min.css">
    <!-- TRENDING BOOSTRAP -->
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css'>

    <!-- FONT -->
    <link href='https://fonts.googleapis.com/css?family=Actor' rel='stylesheet'>


    <!-- END OF PRODUCTS -->

    <!-- LINK USER DASHBOARD -->

    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css'>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js'></script>
    <link href='https://use.fontawesome.com/releases/v5.7.2/css/all.css'>
    <link rel="stylesheet" href="usercss.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Open+Sans">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- END USER DASHBOARD -->


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style=" background-image: url('https://source.unsplash.com/BtbjCFUvBXs/1920x1080');
background-size: cover;
background-position: center;
background-repeat: no-repeat;

display: flex;
flex-direction: column;
min-height: 100vh;">
    <!--HEADER  -->

    <section class="ftco-section">
        <div class="wrap">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col">
                        <p class="mb-0 phone"><span class="fa fa-phone" style="color: white;"></span> <a href="#">+00
                                1234 567</a></p>
                    </div>
                    <div class="col d-flex justify-content-end">
                        <div class="social-media">
                            <p class="mb-0 d-flex">
                                <a href="#" class="d-flex align-items-center justify-content-center"><span
                                        class="fa fa-envelope"><i class="sr-only">Facebook</i></span></a>
                                <a href="#" class="d-flex align-items-center justify-content-center"><span
                                        class="fa fa-credit-card"><i class="sr-only">Twitter</i></span></a>
                                <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-link	

"><i class="sr-only">Instagram</i></span></a>
                                <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-truck
"><i class="sr-only">Dribbble</i></span></a>


                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar  ftco-navbar-light" id="ftco-navbar"
            style="color:black;">
            <div class="container">
                <a class="navbar-brand" href="#" style="color: black;"> MIZADA <span>Shoppe</span></a>
                <form action="#" class="searchform order-sm-start order-lg-last">
                    <div class="form-group d-flex">
                        <input type="text" class="form-control pl-3" placeholder="Search">
                        <button type="submit" placeholder="" class="form-control search"><span
                                class="fa fa-search"></span></button>
                    </div>
                </form>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                    aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fa fa-bars"></span> Menu
                </button>
                <div class="collapse navbar-collapse" id="ftco-nav">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item active"><a href="/pnsystem/day1/userdashboard/newlandingpage.php"
                                class="nav-link">Home</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false" style="color:black;">Page</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown04">
                                <a class="dropdown-item" href="#">Page 1</a>
                                <a class="dropdown-item" href="#">Page 2</a>
                                <a class="dropdown-item" href="#">Page 3</a>
                                <a class="dropdown-item" href="#">Page 4</a>
                            </div>
                        </li>
                        <li class="nav-item"><a href="#" class="nav-link" style="color:black;">Promo Sells</a></li>
                        <li class="nav-item"><a href="#" class="nav-link" style="color:black;">Offers</a></li>
                        <li class="nav-item"><a href="#" class="nav-link" style="color:black;">Admin</a></li>
                    </ul>
                </div>
            </div>
        </nav>

    </section>


    <!-- END HEADER -->





    <!-- DASHBOARDDDDDDDDDDDDDD -->


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container"> <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#mynav" aria-controls="mynav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span> </button>
            <a class="navbar-brand" href="#">
                <div class="d-flex">

                    <div class="ms-3 d-flex flex-column">

                        <?php
  include_once("../connection.php");
$email=$_SESSION['email'];

$query =("SELECT * FROM register WHERE email= '$email'");
$query_run = mysqli_query($conn,$query);
while ($row = mysqli_fetch_array ($query_run)) {
  
?>

                        <img class="rounded-circle z-depth-1" alt="" src="<?php echo $row['image']; ?>"
                            data-holder-rendered="true">

                        <?php
  
}
   
   
  ?>





                    </div>
                </div>
            </a>
            <div class="collapse navbar-collapse" id="mynav">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"> <a class="nav-link active" aria-current="page" href="#">Categories <span
                                class="fa fa-list-alt px-1"></span></a> </li>
                    <li class="nav-item"> <a class="nav-link" href="#">Exclusive</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="#">Collections</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="#">Blogs</a> </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <div class="cart bg-purple"> <span class="fa fa-shopping-cart text-white"></span> </div>
                        </a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="/pnsystem/day1/logout.php"> <span class="fa fa-user pe-2"></span> Sign
                            out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-lg-3 my-lg-0 my-md-1">
                <div id="sidebar" class="bg-purple">
                    <div class="h4 text-white">Account</div>
                    <ul>
                        <li class="active">
                            <a href="#" class="text-decoration-none d-flex align-items-start">
                                <div class="fas fa-box pt-2 me-3"></div>
                                <div class="d-flex flex-column">
                                    <div class="link">History Transaction</div>
                                    <div class="link-desc">History of the Products buy</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="order.php" class="text-decoration-none d-flex align-items-start">
                                <div class="fas fa-box-open pt-2 me-3"></div>
                                <div class="d-flex flex-column">
                                    <div class="link myorders">My Orders</div>
                                    <div class="link-desc">Products currently in process</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="deliveredcart.php" class="text-decoration-none d-flex align-items-start">
                                <div class="far fa-address-book pt-2 me-3"></div>
                                <div class="d-flex flex-column">
                                    <div class="link">Delivered Products..</div>
                                    <div class="link-desc">View & Manage Addresses</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-decoration-none d-flex align-items-start">
                                <div class="far fa-user pt-2 me-3"></div>
                                <div class="d-flex flex-column">
                                    <div class="link">My Profile</div>
                                    <div class="link-desc">Change your profile details & password</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-decoration-none d-flex align-items-start">
                                <div class="fas fa-headset pt-2 me-3"></div>
                                <div class="d-flex flex-column">
                                    <div class="link">Help & Support</div>
                                    <div class="link-desc">Contact Us for help and support</div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9 my-lg-0 my-1">
                <div id="main-content" class="bg-white border">
                    <div class="d-flex flex-column">



                        <?php
include_once("../connection.php");


$query =("SELECT * FROM register WHERE email= '$email'");
$query_run = mysqli_query($conn,$query);
while ($row = mysqli_fetch_array ($query_run)) {

?>

                        <div class="h5">Hello <?php  echo $row['firstname']?></div>

                        <?php

}


?>



                        <div>Logged in as: <?php  echo $_SESSION['email']; ?></div>
                    </div>
                    <div class="d-flex my-4 flex-wrap">
                        <div class="box me-4 my-1 bg-light"> <img
                                src="https://www.freepnglogos.com/uploads/box-png/cardboard-box-brown-vector-graphic-pixabay-2.png"
                                alt="">

                            <?php
                            
                            include_once("../connection.php");
                            $userId =$_SESSION['UserId'];
                            $count=0;

                            $query =("SELECT * FROM invoice WHERE UserId ='$userId'");
                            $query_run = mysqli_query($conn,$query);
                            while ($row = mysqli_fetch_array ($query_run)) {
                            $count++;
                            }
                            ?>


                            <div class="d-flex align-items-center mt-2">



                                <div class="tag">On Delivered</div>
                                <div class="ms-auto number"><?php  echo $count?></div>
                            </div>

                            <?php




?>





                        </div>
                        <div class="box me-4 my-1 bg-light"> <img
                                src="https://www.freepnglogos.com/uploads/shopping-cart-png/shopping-cart-campus-recreation-university-nebraska-lincoln-30.png"
                                alt="">


                                <?php
                            include_once("../connection.php");
                            $userId =$_SESSION['UserId'];
                            $cartcount=0;

                            $query =("SELECT * FROM cart WHERE UserId ='$userId'");
                            $query_run = mysqli_query($conn,$query);
                            while ($row = mysqli_fetch_array ($query_run)) {
                            $cartcount++;
                            }
                            ?>



                                <div class="d-flex align-items-center mt-2">
                                <div class="tag">Items in Cart</div>
                                <div class="ms-auto number"><?php  echo $cartcount?></div>
                            </div>

                            </div>

                            <?php
                            ?>


                       



                        </div>
                       
                    </div>


                    <!-- PRODUCTS -->

                    <div class="row gap" style=" padding:20px;">


                        <style>
                        .gap {
                            grid-gap: 50px;
                        }

                        .cardbackground{
                     
                          
                         
                            font-family: 'Abel';
                            font-size: 17px;

                          
                            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='800' height='800' viewBox='0 0 200 200'%3E%3Cdefs%3E%3ClinearGradient id='a' gradientUnits='userSpaceOnUse' x1='88' y1='88' x2='0' y2='0'%3E%3Cstop offset='0' stop-color='%23868684'/%3E%3Cstop offset='1' stop-color='%23d5d6d1'/%3E%3C/linearGradient%3E%3ClinearGradient id='b' gradientUnits='userSpaceOnUse' x1='75' y1='76' x2='168' y2='160'%3E%3Cstop offset='0' stop-color='%238f8f8f'/%3E%3Cstop offset='0.09' stop-color='%23b3b3b3'/%3E%3Cstop offset='0.18' stop-color='%23c9c9c9'/%3E%3Cstop offset='0.31' stop-color='%23dbdbdb'/%3E%3Cstop offset='0.44' stop-color='%23e8e8e8'/%3E%3Cstop offset='0.59' stop-color='%23f2f2f2'/%3E%3Cstop offset='0.75' stop-color='%23fafafa'/%3E%3Cstop offset='1' stop-color='%23ffffff'/%3E%3C/linearGradient%3E%3Cfilter id='c' x='0' y='0' width='200%25' height='200%25'%3E%3CfeGaussianBlur in='SourceGraphic' stdDeviation='12' /%3E%3C/filter%3E%3C/defs%3E%3Cpolygon fill='url(%23a)' points='0 174 0 0 174 0'/%3E%3Cpath fill='%23000' fill-opacity='.5' filter='url(%23c)' d='M121.8 174C59.2 153.1 0 174 0 174s63.5-73.8 87-94c24.4-20.9 87-80 87-80S107.9 104.4 121.8 174z'/%3E%3Cpath fill='url(%23b)' d='M142.7 142.7C59.2 142.7 0 174 0 174s42-66.3 74.9-99.3S174 0 174 0S142.7 62.6 142.7 142.7z'/%3E%3C/svg%3E");
                         
                            background-repeat: no-repeat;
                            background-position: top left;
  


                        }

                        body{
                            font-family: 'Abel';
                            font-size: 15px;
                            
                        }

                        .producttype{
                            
                        }
                     
                            
                        

                        </style>

                        <?php
   
                        include_once('../connection.php');
                       
                        // echo $_SESSION['UserId'];
                        if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                        }else{  
                            $userId =$_SESSION['UserId'];
                     
                            $sql="SELECT products.ProductId, products.ProductName,products.ProductPhoto,products.ProductType,products.Description,products.OriginalPrice, 
                            products.Price, products.Rating, cart.CartId,cart.Size,cart.Color, cart.Quantity, cart.TotalAmount FROM (cart INNER JOIN products ON products.ProductId = cart.ProductId) Where UserId='".$userId."'";
                        $result = $conn->query($sql);
                        
                        if ($result->num_rows > 0) {

                        while($row = $result->fetch_assoc()){
                        
                        ?>

                        <div class="card col-sm-4 cardbackground" style=" width:20rem;height: fit-content">
                            <form method="POST">

                                <input id="userId" name="userId"
                                    style="visibility:hidden;height:10px;width:20px;margin:0px"
                                    value="<?php echo $_SESSION['UserId']?>">
                                <input id="cartId" name="cartId"
                                    style="visibility:hidden;height:10px;width:20px;margin:0px"
                                    value="<?php echo $row['CartId']?>">
                                <input name="productId" style="visibility:hidden;height:10px;width:20px;margin:0px"
                                    value="<?php echo $row['ProductId']?>">
                                <div class="view zoom overlay">
                                    <img class="img-fluid w-100" src="<?php echo $row['ProductPhoto']; ?>" alt="Sample">
                                    <h4 class="mb-0"><span class="badge badge-primary badge-pill badge-news">Sale</span>
                                    </h4>

                                </div>
                                <h5 style=" font-family: 'Abel'">
                                    <?php echo $row['ProductName']; ?>
                                </h5>
                                <h4 class="small  producttype text-uppercase mb-2 " style=" font-family: 'Abel';font-size: 14px;color:black; background-color:#f1bc31; border-radius:2px; ">
                                    <?php echo $row['ProductType']; ?>
                                </h4>
                                <ul class="rating">
                                                        <?php
                                $i=0;
                                $rating= $row['Rating'];
                                while($i<$rating){
                                ?>
                                                        <li>
                                                            <i class="fas fa-star fa-sm text-primary"></i>
                                                        </li>
                                                        <?php
                                $i++;
                                };
                                if($rating<5){
                                for($x=$rating;$x<5;$x++){
            ?>
                                    <li>
                                        <i class="far fa-star fa-sm text-primary"></i>
                                    </li>
                                    <?php
            
            }
            }
            
            ?>

                                </ul>
                                <hr>
                                <center>
                                <h3class="mb-3">
                                    <span class="text-white mr-1" style=" font-family: 'Abel'">
                                    ₱ <?php echo $row['Price']; ?>
                                    </span>
                                    </h3>
                                    
                                    <span class="text-danger" style=" font-family: 'Abel'"><s>
                                            <?php echo '₱ '.$row['OriginalPrice']; ?>
                                        </s></span>
                              
                                <div class="container">
                                    <label><strong  style=" font-family: 'Abel'">Color:</strong></label> <span><?php echo $row['Color']; ?></span>
                                    <input name="color" style="visibility:hidden;height:10px;width:20px;margin:0px; font-family: 'Abel'"
                                        value="<?php echo $row['Color']?>">
                                    <label><strong  style=" font-family: 'Abel'">Size:</strong></label>
                                    <span><?php echo $row['Size']; ?></span>
                                    <input name="size" style="visibility:hidden;height:10px;width:20px;margin:0px"
                                        value="<?php echo $row['Size']?>">
                                </div>
                                <div class="container">
                                    <label><strong  style=" font-family: 'Abel'">Quantity:</strong></label><span><?php echo $row['Quantity']; ?></span>
                                    <input id="quantity" name="quantity"
                                        style="visibility:hidden;height:10px;width:20px;margin:0px; font-family: 'Abel'" 
                                    value=" <?php echo $row['Quantity']?>">
                                    <label ><strong style=" font-family: 'Abel'">Total Payment:</strong> </label>
                                    <span class="totalAmount"  style=" font-family: 'Abel'"
                                        name="totalAmount">₱ <?php echo $row['TotalAmount']; ?></span>
                                </div>
                                <!-- <input class="size" name='size' style="visibility:hidden;height:5px;margin:0pxwidth:20px;" value="">  -->
                                <center>
                                <button id="<?php echo $row['CartId']?>" type="submit" name="orderButton"
                                  class="btn btn-primary orderButton " width="16" height="16">
                 
                                    <i class="fas fa-shopping-cart pr-2"></i>Order Now
                                </button>

                                <!-- <button type="button" class="btn btn-danger btn-sm px-3 mb-2 material-tooltip-main" data-toggle="tooltip"
  data-placement="top" title="Add to wishlist">
  <i class="far fa-heart"></i>
</button> -->
                                <a href="deleteCart.php?id=<?php echo $row['CartId']; ?>">
                                    <button id="<?php echo $row['CartId']?>" type="button"
                                        class="btn btn-outline-danger delete" >
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path
                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z">
                                            </path>
                                            <path fill-rule="evenodd"
                                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z">
                                            </path>
                                        </svg>
                                        Delete
                                    </button>
                                </a>
                            </form>
                        </div>
                        </center>
                        <br><br>

                        <?php
  }
}
  }
  ?>
                    </div>
                </div>













                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
                    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
                    crossorigin="anonymous"></script>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


                <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

                <script>
                $(document).ready(function() {





                    // console.log($('.orderButton').parents().filter(".mask").html());
                    $(".orderButton").click(function() {
                        $('#productDetails').modal('show');
                        var productName = $(this).siblings('h5').html();


                        console.log(productName);
                        var price = $(this).siblings('.mb-3');
                        price = price.clone();
                        console.log(price)
                        var price2 = price.children('.text-danger').html();
                        $('#price').val(price2);
                        price = price.children('.text-danger').html().substr(1);
                        var product = $(this).siblings().not('button');
                        product = product.clone();
                        var img = $(this).parent();
                        img = img.siblings('.view').children('img');
                        img = img.clone();
                        img = img.css({
                            'border-radius': '5%'
                        });
                        $('#productName').val(productName);
                        $('.head1').prepend(img);
                        $(".head1").append(product);

                        $('#color').val($('#colors').val());
                        $('#size').val($('#sizes').val());
                        $('#sizes').change(() => {
                            $('#size').val($('#sizes').val());
                        })
                        $('#sizes').change(() => {
                            $('#color').val($('#colors').val());
                        })
                        $('.quantity').keyup(() => {
                            var quantity = $('.quantity').val();
                            $('.totalAmount').html('$' + Math.round(price * quantity * 100.00) /
                                100.00);
                            $('#total').val('$' + Math.round(price * quantity * 100.00) /
                                100.00);
                        });
                        $('.addToCart').click(() => {
                            console.log("added to carts");
                            $('.addToCart').html("Added to Cart");

                        })
                        $("#cancelOrder").click(() => {
                            $('#productDetails').modal('hide');
                            $('.head1').html('');


                        })
                        if (window.history.replaceState) {
                            window.history.replaceState(null, null, window.location.href);
                        }

                    })


                    $(".delete").on("click",function(){

                        Swal.fire({
                        type: 'error',
                        icon: 'error',    
                        text: 'Product Deleted',
                        confirmButtonColor: '#DD6B55',
                        customClass: 'swal-wide',
                        showConfirmButton: true,         
                        timer: 2500
                        })
                    })




                });
                </script>




             
<!-- ORDER FUNCTIONS/ -->
<?php
if(isset($_POST['orderButton'])){
 
$cart=$_POST['cartId'];
$id=$_POST['userId'];
$size=$_POST['size'];
$color=$_POST['color'];
$quantity=$_POST['quantity'];
$productId=$_POST['productId'];



if($cart!="" && $id!=""){
$sql = "insert into orders(CartId,UserId,Status) VALUES('".$cart."','".$id."',1) ";

if ($conn->query($sql) === TRUE) {
if($size!="" && $color!="" && $quantity!=""){
$query="update stocks set Quantity=(Quantity-'".$quantity."') where ProductId= '".$productId."' and Size= '".$size."' and Colors= '".$color."'";

if ($conn->query($query) === TRUE) {




echo "<script>   
Swal.fire({
  position: 'center',
  icon: 'success',
  title: 'Successfully Ordered! 🛒',
  text:'Product is in process!',
  customClass: 'swal-success',
  showConfirmButton: true,
  timer: 5000
}) </script>";

}


}

               
} else {
    echo " 
    
    <script>   
    Swal.fire({
      type: 'error',
      icon: 'warning',    
      text: 'Product already Ordered!📦',
      confirmButtonColor: '#DD6B55',
      customClass: 'swal-wide',
      showConfirmButton: true,         
      timer: 3500
    }) </script>";

// echo "Error: " . $sql . "<br>" . $conn->error;
}
}
}
?>


<style>

.swal-success{

width:550px;
background-color: #ffffff;
background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='800' height='800' viewBox='0 0 200 200'%3E%3Cdefs%3E%3ClinearGradient id='a' gradientUnits='userSpaceOnUse' x1='88' y1='88' x2='0' y2='0'%3E%3Cstop offset='0' stop-color='%238f8f8f'/%3E%3Cstop offset='1' stop-color='%23e3e3e3'/%3E%3C/linearGradient%3E%3ClinearGradient id='b' gradientUnits='userSpaceOnUse' x1='75' y1='76' x2='168' y2='160'%3E%3Cstop offset='0' stop-color='%238f8f8f'/%3E%3Cstop offset='0.09' stop-color='%23b3b3b3'/%3E%3Cstop offset='0.18' stop-color='%23c9c9c9'/%3E%3Cstop offset='0.31' stop-color='%23dbdbdb'/%3E%3Cstop offset='0.44' stop-color='%23e8e8e8'/%3E%3Cstop offset='0.59' stop-color='%23f2f2f2'/%3E%3Cstop offset='0.75' stop-color='%23fafafa'/%3E%3Cstop offset='1' stop-color='%23ffffff'/%3E%3C/linearGradient%3E%3Cfilter id='c' x='0' y='0' width='200%25' height='200%25'%3E%3CfeGaussianBlur in='SourceGraphic' stdDeviation='12' /%3E%3C/filter%3E%3C/defs%3E%3Cpolygon fill='url(%23a)' points='0 174 0 0 174 0'/%3E%3Cpath fill='%23000' fill-opacity='.5' filter='url(%23c)' d='M121.8 174C59.2 153.1 0 174 0 174s63.5-73.8 87-94c24.4-20.9 87-80 87-80S107.9 104.4 121.8 174z'/%3E%3Cpath fill='url(%23b)' d='M142.7 142.7C59.2 142.7 0 174 0 174s42-66.3 74.9-99.3S174 0 174 0S142.7 62.6 142.7 142.7z'/%3E%3C/svg%3E");
background-attachment: fixed;
background-repeat: no-repeat;
background-position: top left;
}


.swal-wide{


width:350px;
background-color: #ffffff;
background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='800' height='800' viewBox='0 0 200 200'%3E%3Cdefs%3E%3ClinearGradient id='a' gradientUnits='userSpaceOnUse' x1='88' y1='88' x2='0' y2='0'%3E%3Cstop offset='0' stop-color='%238f8f8f'/%3E%3Cstop offset='1' stop-color='%23e3e3e3'/%3E%3C/linearGradient%3E%3ClinearGradient id='b' gradientUnits='userSpaceOnUse' x1='75' y1='76' x2='168' y2='160'%3E%3Cstop offset='0' stop-color='%238f8f8f'/%3E%3Cstop offset='0.09' stop-color='%23b3b3b3'/%3E%3Cstop offset='0.18' stop-color='%23c9c9c9'/%3E%3Cstop offset='0.31' stop-color='%23dbdbdb'/%3E%3Cstop offset='0.44' stop-color='%23e8e8e8'/%3E%3Cstop offset='0.59' stop-color='%23f2f2f2'/%3E%3Cstop offset='0.75' stop-color='%23fafafa'/%3E%3Cstop offset='1' stop-color='%23ffffff'/%3E%3C/linearGradient%3E%3Cfilter id='c' x='0' y='0' width='200%25' height='200%25'%3E%3CfeGaussianBlur in='SourceGraphic' stdDeviation='12' /%3E%3C/filter%3E%3C/defs%3E%3Cpolygon fill='url(%23a)' points='0 174 0 0 174 0'/%3E%3Cpath fill='%23000' fill-opacity='.5' filter='url(%23c)' d='M121.8 174C59.2 153.1 0 174 0 174s63.5-73.8 87-94c24.4-20.9 87-80 87-80S107.9 104.4 121.8 174z'/%3E%3Cpath fill='url(%23b)' d='M142.7 142.7C59.2 142.7 0 174 0 174s42-66.3 74.9-99.3S174 0 174 0S142.7 62.6 142.7 142.7z'/%3E%3C/svg%3E");
background-attachment: fixed;
background-repeat: no-repeat;
background-position: top left;
}

</style>