<!-- IF LOG OUT IS CLICK THEN THE THE CONDITION BELOW IS TRUE -->
<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('location:/pnsystem/day1/landingpage.php');
}

?>



<!DOCTYPE html>
<html lang="en" class="no-js">

<head>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MIZADA Shoppe</title>
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:400,600" rel="stylesheet">
    <link rel="stylesheet" href="/pnsystem/day1/dist/css/style.css">
    <script src="https://unpkg.com/animejs@3.0.1/lib/anime.min.js"></script>
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>

    <link rel="icon" href="https://www.edigitalagency.com.au/wp-content/uploads/Instagram-igtv-logo-circle-png-transparent.png" type="image/x-icon">

 <!-- SWEET ALERT LINKS -->
 <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>

 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">


<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>


    <!-- HEADER LINKS  -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/pnsystem/day1/header/style.css">


    <script src="/pnsystem/day1/header/jquery.min.js"></script>
    <script src="/pnsystem/day1/header/popper.js"></script>
    <script src="/pnsystem/day1/header/bootstrap.min.js"></script>
    <script src="/pnsystem/day1/header/main.js"></script>


    <!-- PRODUCTS -->


    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="../header/boostrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="homecssandjs/mdb-pro.min.css">
    <!-- Material Design Bootstrap Ecommerce -->
    <link rel="stylesheet" href="homecssandjs/mdb.ecommerce.min.css">
    <!-- TRENDING BOOSTRAP -->
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css'>

    <!-- FONT -->
    <link href='https://fonts.googleapis.com/css?family=Actor' rel='stylesheet'>




    <!-- END PRODUTS -->


    <!-- END -->


    <!-- SLIDER PRODUCTS LINKS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Open+Sans">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">



    <script>
        $(document).ready(function() {

            $(".wish-icon i").click(function() {
                $(this).toggleClass("fa-heart fa-heart-o");
            });
        });
    </script>


    <!-- END OF SLIDER PRODUCTS -->

    <!-- PRODUCT LINKS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"> -->
    <!-- Roboto Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700&display=swap">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <!-- <link rel="stylesheet" href="product/boostrap.min.css"> -->
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="/pnsystem/day1/product/mdb-pro.min.css">
    <!-- Material Design Bootstrap Ecommerce -->
    <link rel="stylesheet" href="/pnsystem/day1/product/mdb.ecommerce.min.css">
    <!-- TRENDING BOOSTRAP -->
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css'>

    <!-- FONT -->
    <link href='https://fonts.googleapis.com/css?family=Actor' rel='stylesheet'>


    <!-- Ahref verification -->
    <meta name="ahrefs-site-verification" content="cd945a30a32beb9f20f22626c5f801f2063a726c6fd9af1db55ce27eafaa1e45">

</head>

<body class="is-boxed has-animations" >
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
                                <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-envelope"><i class="sr-only">Facebook</i></span></a>
                                <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-credit-card"><i class="sr-only">Twitter</i></span></a>
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
        <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar  ftco-navbar-light" id="ftco-navbar" style="color:black;">
            <div class="container">
                <a class="navbar-brand" href="#" style="color: black;"> MIZADA <span>Shoppe</span></a>
                <form action="#" class="searchform order-sm-start order-lg-last">
                    <div class="form-group d-flex">
                        <input type="text" class="form-control pl-3" placeholder="Search">
                        <button type="submit" placeholder="" class="form-control search"><span class="fa fa-search"></span></button>
                    </div>
                </form>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fa fa-bars"></span> Menu
                </button>
                <div class="collapse navbar-collapse" id="ftco-nav">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item active"><a href="#" class="nav-link">Home</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:black;">Account</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown04">
                                <a class="dropdown-item" href="/pnsystem/day1/userdashboard/userhome.php">Dashboard</a>

                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:black;">Categories</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown04">
                                <a class="dropdown-item" href="/pnsystem/day1/userdashboard/userhome.php">Shoes</a>
                                <a class="dropdown-item" href="/pnsystem/day1/userdashboard/userhome.php">Clothes</a>

                            </div>
                        </li>


                        <li class="nav-item"><a href="/pnsystem/day1/logout.php" class="nav-link" style="color:black;">Log Out</a></li>
                    </ul>
                </div>
            </div>
        </nav>

    </section>

    



    <div class="body-wrap">
        <header class="site-header">
            <div class="container">
                <!-- <div class="site-header-inner">
                    <div class="brand header-brand">
                        <h1 class="m-0">
                            <a href="#">
                                <img class="header-logo-image" src="dist/images/logo.svg" alt="Logo">
                            </a>
                        </h1>
                    </div>
                </div> -->


            </div>
        </header>

        <main>
            <section class="hero">
                <div class="container">
                    <div class="hero-inner">
                        <div class="hero-copy">


                            <?php
                            include_once("../connection.php");
                            $email = $_SESSION['email'];

                            $query = ("SELECT * FROM register WHERE email= '$email'");
                            $query_run = mysqli_query($conn, $query);
                            while ($row = mysqli_fetch_array($query_run)) {

                            ?>




                                <h1 class="hero-title mt-0"> Welcome <?php echo $row['firstname'] ?> Happy Shopping! </h1>

                            <?php
                                include_once("../connection.php");
                                if (!isset($_SESSION['email'])) {
                                    $email = $_SESSION['email'];
                                    $queryupdate = ("UPDATE register SET Status='Offline' WHERE email= '$email'");
                                    $query_run = mysqli_query($conn, $queryupdate);
                                }
                            }


                            ?>

                            <p class="hero-paragraph">Our landing page template works on all devices, so you only have to set it up once, and get beautiful results forever.</p>
                            <div class="hero-cta" ><a class="button btn-warning" href="#" ">Pre order now</a><a class="button" href="#">Get in touch</a></div>
                        </div>
                        <div class="hero-figure anime-element">
                            <svg class="placeholder" width="528" height="396" viewBox="0 0 528 396">
                                <rect width="528" height="396" style="fill:transparent;" />
                            </svg>
                            <div class="hero-figure-box hero-figure-box-01" data-rotation="45deg"></div>
                            <div class="hero-figure-box hero-figure-box-02" data-rotation="-45deg"></div>
                            <div class="hero-figure-box hero-figure-box-04" data-rotation="-135deg"></div>
                            <div class="hero-figure-box hero-figure-box-05"></div>
                            <div class="hero-figure-box hero-figure-box-06"></div>
                            <div class="hero-figure-box hero-figure-box-07"></div>
                            <div class="hero-figure-box hero-figure-box-08" data-rotation="-22deg"></div>
                            <div class="hero-figure-box hero-figure-box-09" data-rotation="-52deg"></div>
                            <div class="hero-figure-box hero-figure-box-10" data-rotation="-50deg"></div>
                        </div>
                    </div>
                </div>

<section style="width: 82vw;margin-left: 15%;position: static ; ">
    <div class="row gap" style=" padding:30px;" >

      <?php
    include_once('../connection.php');
    //  echo $_SESSION['UserId'];
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }else{
      
      $sql = "SELECT * FROM `products`";
      $result = $conn->query($sql);
      $count=1;
      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
          
      ?>

<style>
.gap {
  grid-gap: 50px;
}

.card{
  font-family: 'Abel';
  font-size: 22px;
  background-color:yellow;

}

.wew{
  background-color: #f1bc31;
background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='800' height='800' viewBox='0 0 200 200'%3E%3Cdefs%3E%3ClinearGradient id='a' gradientUnits='userSpaceOnUse' x1='88' y1='88' x2='0' y2='0'%3E%3Cstop offset='0' stop-color='%23666866'/%3E%3Cstop offset='1' stop-color='%23a3a5a2'/%3E%3C/linearGradient%3E%3ClinearGradient id='b' gradientUnits='userSpaceOnUse' x1='75' y1='76' x2='168' y2='160'%3E%3Cstop offset='0' stop-color='%2387691b'/%3E%3Cstop offset='0.09' stop-color='%23a98422'/%3E%3Cstop offset='0.18' stop-color='%23be9527'/%3E%3Cstop offset='0.31' stop-color='%23cfa22a'/%3E%3Cstop offset='0.44' stop-color='%23dbab2d'/%3E%3Cstop offset='0.59' stop-color='%23e5b32f'/%3E%3Cstop offset='0.75' stop-color='%23ecb830'/%3E%3Cstop offset='1' stop-color='%23f1bc31'/%3E%3C/linearGradient%3E%3Cfilter id='c' x='0' y='0' width='200%25' height='200%25'%3E%3CfeGaussianBlur in='SourceGraphic' stdDeviation='12' /%3E%3C/filter%3E%3C/defs%3E%3Cpolygon fill='url(%23a)' points='0 174 0 0 174 0'/%3E%3Cpath fill='%23000' fill-opacity='.5' filter='url(%23c)' d='M121.8 174C59.2 153.1 0 174 0 174s63.5-73.8 87-94c24.4-20.9 87-80 87-80S107.9 104.4 121.8 174z'/%3E%3Cpath fill='url(%23b)' d='M142.7 142.7C59.2 142.7 0 174 0 174s42-66.3 74.9-99.3S174 0 174 0S142.7 62.6 142.7 142.7z'/%3E%3C/svg%3E");

background-repeat: no-repeat;
background-position: top left;
}
</style>
    


   
      <div class="card col-sm-3  wew" style=" width:20rem;";>
        <form method="POST">
          <div class="view zoom overlay">
            <img class="img-fluid w-100" style="width:50%;" src="<?php echo $row['ProductPhoto']; ?>" alt="Sample">
            <h4 class="mb-0"><span class="badge badge-primary badge-pill badge-news">Sale</span></h4>

          </div>
      
          <h1 style="visibility:hidden;height:10px;width:20px;margin:0px"><?php echo $row['Description']?></h1>
          <div class="card-body text-center">
          <h2 style="visibility:hidden;height:10px;width:20px;margin:0px"><?php echo $row['ProductId']?></h2>
            <h5 style=" font-family: 'Actor';font-size: 22px; background-color:white; border-radius: 40px;">
              <?php echo  $row['ProductName']; ?>
            </h5>
            <input id="productId" name="productId" style="visibility:hidden;height:10px;width:20px;margin:0px " value="<?php echo $row['ProductId']?>">
            <p class="small  text-uppercase mb-2 " style="color:white;">
              <?php echo $row['ProductType']; ?>
            </p>
           
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
            
            <h6 class="mb-3">
              <span class="text-white mr-1">
                <?php echo $row['Price']; ?>
              </span>
              <span class="text-danger"><s>
                  <?php echo '₱'.$row['OriginalPrice']; ?>
                </s></span>
            </h6>
           
            <div id="<?php echo $count ?>" class="collapse" style="text-align: justify">
           
         
                    <p style="font-size: 16px; " class="text-white ml-1">Available Sizes and Colors</p>
                
              <select class="custom-select">
                <?php
        
                $sql2 = "SELECT * FROM `stocks` where ProductId='".$row['ProductId']."'";
                $result2 = $conn->query($sql2);
                if ($result2->num_rows > 0) {
                  // $stocksCount=0;
                  while($stocks=$result2->fetch_assoc()){
                    // echo $stocks['Size'] . $stocks["Colors"].$stocks['Quantity'];
                  // $sizes=array_unique($stocks['Size']);
                ?>     
                  <option value="<?php echo $stocks['Size']." ".$stocks['Colors']?>"><?php echo $stocks['Size']." ".$stocks['Colors']?>
                  Stocks:<?php echo " ".$stocks['Quantity']?></option>
                <?php
                    }
                  }
              
                ?>
              </select>
              <input type="hidden"class="productSizeAndColor" name="productSizeAndColor" style="height:10px; width:20px;margin:0px" >
              <div class="container"><br>
                  <label style="font-size:16px;">Quantity:</label>
                  <input type="text" name="quantity" class="quantity" style="width:70px"><br>
                  <label style="font-size: 16px;"> ₱Total:</label>
                  <span class="totalAmount" name="totalAmount"></span>
                  <input class=total type="text" name="total" style="visibility:hidden;height:5px;margin:0px;width:20px;"
                    value="">
              </div>
              <!-- <input class="size" name='size' style="visibility:hidden;height:5px;margin:0pxwidth:20px;" value="">  -->
            </div>
    
                
           

            <button class=" btn-primary btn-sm mr-1 mb-2 sizesAndColors" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            See More
        </button>
   
            <button type="submit"  name="orderButton" class="btn btn-warning addtocart btn-sm mr-1 mb-2 addtocart orderButton">
                              <i class="fas fa-shopping-cart pr-2"></i>Add
                                 </button>

          
           
            <button type="button" class="btn btn-light btn-sm mr-1 mb-2 details">
                                            <i class="fas fa-info-circle pr-2"></i>Details
            </button>
            
            <!-- <button type="button" class="btn btn-danger btn-sm px-3 mb-2 material-tooltip-main" data-toggle="tooltip"
              data-placement="top" title="Add to wishlist">
              <i class="far fa-heart"></i>
            </button> -->
        </form>
      </div>

     
   
      </div>


      
    

  <?php
  // $_SESSION["id"] = $row['ProductId'];
  // echo $_SESSION['id'];
        $count++;
        
      }
    }
  }
      ?> 
</div>

</section>


<!-- ADS  BANNER  BELOW -->


<section class="pricing section">
                    <div class="container-sm">
                        <div class="pricing-inner section-inner">
                            <div class="pricing-header text-center">
                                <h2 class="section-title mt-0">Shop with no Hasol</h2>
                                <br>
                                <p class="section-paragraph mb-0">
                                    Mizada is the leading name in online shopping for fashion, carrying an ever-expanding line-up of top local and international brands tailored for consumers in the Philippines. Our selection of over 120.000 products covers every aspect of fashion, from
                                    shirts to dresses, sneakers to slip-ons, sportswear to watches, and so much more.
                                </p>
                            </div>
                            <div class="pricing-tables-wrap">
                                <div class="pricing-table">
                                    <div class="pricing-table-inner is-revealing">
                                        <div class="pricing-table-main">
                                            <div class="pricing-table-header pb-24">
                                                <div class="pricing-table-price"><span class="pricing-table-price-currency h2">$</span><span class="pricing-table-price-amount h1">1</span><span class="text-xs">Buy2take1</span></div>
                                                <span style="color: black;">Sulit na Sulit maka hilis og wallet!</span>
                                            </div>



                                            <ul class="pricing-table-features list-reset text-xs">
                                                <li>
                                                    <span>Libreng Sabon sa iro</span>
                                                </li>
                                                <li>
                                                    <span>Discount sa posporo.</span>
                                                </li>
                                                <li>
                                                    <span>Libreng eyeglass sa mga buta.</span>
                                                </li>
                                                <li>
                                                    <span>Libreng anthena sa mga way TV.</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="pricing-table-cta mb-8">
                                            <a class="button button-primary button-shadow button-block" href="#">Pre order
                                                now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="cta section">
                    <div class="container">
                        <div class="cta-inner section-inner">
                            <h3 class="section-title mt-0" style="color: white;">Still not convinced on buying?</h3>
                            <div class="cta-cta">
                                <a class="button button-primary button-wide-mobile" href="#">Get in touch</a>
                            </div>
                        </div>
                    </div>
                </section>
        </main>

        <footer class="site-footer">
            <div class="container">
                <div class="site-footer-inner">
                    <div class="brand footer-brand">
                        <a href="#">
                            <img class="header-logo-image" src="dist/images/logo.svg" alt="Logo">
                        </a>
                    </div>
                    <ul class="footer-links list-reset">
                        <li>
                            <a href="#">Contact</a>
                        </li>
                        <li>
                            <a href="#">About us</a>
                        </li>
                        <li>
                            <a href="#">FAQ's</a>
                        </li>
                        <li>
                            <a href="#">Support</a>
                        </li>
                    </ul>
                    <ul class="footer-social-links list-reset">
                        <li>
                            <a href="#">
                                <span class="screen-reader-text">Facebook</span>
                                <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.023 16L6 9H3V6h3V4c0-2.7 1.672-4 4.08-4 1.153 0 2.144.086 2.433.124v2.821h-1.67c-1.31 0-1.563.623-1.563 1.536V6H13l-1 3H9.28v7H6.023z" fill="#0270D7" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="screen-reader-text">Twitter</span>
                                <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16 3c-.6.3-1.2.4-1.9.5.7-.4 1.2-1 1.4-1.8-.6.4-1.3.6-2.1.8-.6-.6-1.5-1-2.4-1-1.7 0-3.2 1.5-3.2 3.3 0 .3 0 .5.1.7-2.7-.1-5.2-1.4-6.8-3.4-.3.5-.4 1-.4 1.7 0 1.1.6 2.1 1.5 2.7-.5 0-1-.2-1.5-.4C.7 7.7 1.8 9 3.3 9.3c-.3.1-.6.1-.9.1-.2 0-.4 0-.6-.1.4 1.3 1.6 2.3 3.1 2.3-1.1.9-2.5 1.4-4.1 1.4H0c1.5.9 3.2 1.5 5 1.5 6 0 9.3-5 9.3-9.3v-.4C15 4.3 15.6 3.7 16 3z" fill="#0270D7" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="screen-reader-text">Google</span>
                                <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.9 7v2.4H12c-.2 1-1.2 3-4 3-2.4 0-4.3-2-4.3-4.4 0-2.4 2-4.4 4.3-4.4 1.4 0 2.3.6 2.8 1.1l1.9-1.8C11.5 1.7 9.9 1 8 1 4.1 1 1 4.1 1 8s3.1 7 7 7c4 0 6.7-2.8 6.7-6.8 0-.5 0-.8-.1-1.2H7.9z" fill="#0270D7" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                    <div class="footer-copyright">&copy; 2019 Solid, all rights reserved</div>
                </div>
            </div>
        </footer>
    </div>




<!-- END -->
<style>

.modal-dialog .modal-content .modal-header {
    border-top-left-radius: .125rem;
    border-top-right-radius: .125rem;
    background-color: black;
   
}
</style>


  <div class="modal fade  " id="productDetails" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" style="border-radius:50px"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content" style="width:80%; margin-left:auto; margin-right:auto; text-align:center ;border-radius:40px;">
          <div class="modal-header" style="border-radius:10px;">
            <h5 class="modal-title" id="exampleModalLongTitle" style="color:#ffc107 ;">Product Description</h5>
            <button type="button" class="close" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div id="modalContainer" class="container"></div>
            <div class="modal-footer">
            <button id="cancelOrder"  type="button" class="close"><i class="fa fa-thumbs-up" style="color:black" aria-hidden="true" ></i></button>
            </div>
      </div>
    </div>
    
  </div>


<!-- END OF THE PRODUCTS -->






  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script> -->


  <!-- Latest compiled JavaScript -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
    crossorigin="anonymous"></script>
  <script>

    $(document).ready(function (){
     
      $('.quantity').keyup(function(){
        price=$(this).parent();
        price=price.parent().siblings(".mb-3");
        price=price.children(".text-white").html();
    
        var quantity = $(this).val();
        console.log(quantity);
          $(this).siblings("span").html('₱ ' + Math.round(price * quantity * 100.00) / 100.00);
          $(this).siblings("input").val(Math.round(price * quantity * 100.00) / 100.00);
        });

     x=0;   
      $('.sizesAndColors').click(function () {
      if(x%2==0){
        $(this).html('<i class="fas fa-angle-double-up"></i>See Less')
        var pId = $(this).parent();        
        pId = pId.children('h2').html();       
        $('#' + pId).collapse('show');
      }else{
        $(this).html('<i class="fas fa-angle-double-down"></i>See More')
        var pId = $(this).parent();        
        pId = pId.children('h2').html();
        $('#' + pId).collapse('hide');
      }
      x++;
      

      })

      $('.productSizeAndColor').val($('.custom-select').val());
      $('select.custom-select').click(function(){
        $(this).change(() => {
          $('.productSizeAndColor').val($(this).val());
        })
      })
       

            $(".orderButton").click(function () {
              $(this).html("Added to Cart");

            }) 


    $(".details").click(function(){
      
      $('#productDetails').modal({ backdrop: 'static', keyboard: false })
      $('#productDetails').modal('show');
      var pId = $(this).parent();
      pId = pId.siblings('h1').html();
      // console.log(pId)
      $("#modalContainer").html(pId);

      $(".close").click(() => {
          $('#productDetails').modal('hide');


        })
    })
    })
    //prevent form to submit on page reload
    if (window.history.replaceState) {
      window.history.replaceState(null, null, window.location.href);
    }
  </script>
  <?php

include_once('../connection.php');
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['orderButton'])){
 
  //get the user id using session after logging in
    $email= $_SESSION['email'] ;  
    $userId =$_SESSION['UserId'];

    $productId=$_POST['productId'];
    $sizeAndColor=$_POST['productSizeAndColor'];  
    $sizeAndColor=explode(" ", $sizeAndColor);
    $quantity=$_POST['quantity'];
    $size=$sizeAndColor[0];
    $color=$sizeAndColor[1];
    $totalAmount=$_POST['total'];


    
    // echo "<script>alert('$UserId+$productId+$quantity+$size+$color+$totalAmount+$valid');</script>";
  if($userId!="" && $productId!="" && $quantity!="" && $size!="" && $color!="" && $totalAmount!=""){
    $sql = "insert into cart(UserId,ProductId, Size, Color, Quantity, TotalAmount) VALUES('".$userId."','".$productId."', '".$size."', '".$color."', '".$quantity."', '".$totalAmount."')";



 
    echo "<script>   
    Swal.fire({
      position: 'center',
      icon: 'success',
      title: 'Successfully Added to Cart! 🛒',
      customClass: 'swal-success',
      showConfirmButton: false,
      timer: 2500
    }) </script>";


  if ($conn->query($sql) === TRUE) {
      // echo "inserted successfully";
  } else {


    echo "Error: " . $sql . "<br>" . $conn->error;

  }
  
  $conn->close();
  
  }else{

    echo " 
    
    
    
    <script>   
    Swal.fire({
      type: 'error',
      icon: 'error',    
      text: 'Please Provide Details',
      confirmButtonColor: '#DD6B55',
      customClass: 'swal-wide',
      showConfirmButton: true,         
      timer: 2500
    }) </script>";

  }

}
?>

<style>

.swal-wide{


width:350px;
background-color: #ffffff;
background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='800' height='800' viewBox='0 0 200 200'%3E%3Cdefs%3E%3ClinearGradient id='a' gradientUnits='userSpaceOnUse' x1='88' y1='88' x2='0' y2='0'%3E%3Cstop offset='0' stop-color='%238f8f8f'/%3E%3Cstop offset='1' stop-color='%23e3e3e3'/%3E%3C/linearGradient%3E%3ClinearGradient id='b' gradientUnits='userSpaceOnUse' x1='75' y1='76' x2='168' y2='160'%3E%3Cstop offset='0' stop-color='%238f8f8f'/%3E%3Cstop offset='0.09' stop-color='%23b3b3b3'/%3E%3Cstop offset='0.18' stop-color='%23c9c9c9'/%3E%3Cstop offset='0.31' stop-color='%23dbdbdb'/%3E%3Cstop offset='0.44' stop-color='%23e8e8e8'/%3E%3Cstop offset='0.59' stop-color='%23f2f2f2'/%3E%3Cstop offset='0.75' stop-color='%23fafafa'/%3E%3Cstop offset='1' stop-color='%23ffffff'/%3E%3C/linearGradient%3E%3Cfilter id='c' x='0' y='0' width='200%25' height='200%25'%3E%3CfeGaussianBlur in='SourceGraphic' stdDeviation='12' /%3E%3C/filter%3E%3C/defs%3E%3Cpolygon fill='url(%23a)' points='0 174 0 0 174 0'/%3E%3Cpath fill='%23000' fill-opacity='.5' filter='url(%23c)' d='M121.8 174C59.2 153.1 0 174 0 174s63.5-73.8 87-94c24.4-20.9 87-80 87-80S107.9 104.4 121.8 174z'/%3E%3Cpath fill='url(%23b)' d='M142.7 142.7C59.2 142.7 0 174 0 174s42-66.3 74.9-99.3S174 0 174 0S142.7 62.6 142.7 142.7z'/%3E%3C/svg%3E");
background-attachment: fixed;
background-repeat: no-repeat;
background-position: top left;
}


.swal-success{


width:750px;
background-color: #ffffff;
background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='800' height='800' viewBox='0 0 200 200'%3E%3Cdefs%3E%3ClinearGradient id='a' gradientUnits='userSpaceOnUse' x1='88' y1='88' x2='0' y2='0'%3E%3Cstop offset='0' stop-color='%238f8f8f'/%3E%3Cstop offset='1' stop-color='%23e3e3e3'/%3E%3C/linearGradient%3E%3ClinearGradient id='b' gradientUnits='userSpaceOnUse' x1='75' y1='76' x2='168' y2='160'%3E%3Cstop offset='0' stop-color='%238f8f8f'/%3E%3Cstop offset='0.09' stop-color='%23b3b3b3'/%3E%3Cstop offset='0.18' stop-color='%23c9c9c9'/%3E%3Cstop offset='0.31' stop-color='%23dbdbdb'/%3E%3Cstop offset='0.44' stop-color='%23e8e8e8'/%3E%3Cstop offset='0.59' stop-color='%23f2f2f2'/%3E%3Cstop offset='0.75' stop-color='%23fafafa'/%3E%3Cstop offset='1' stop-color='%23ffffff'/%3E%3C/linearGradient%3E%3Cfilter id='c' x='0' y='0' width='200%25' height='200%25'%3E%3CfeGaussianBlur in='SourceGraphic' stdDeviation='12' /%3E%3C/filter%3E%3C/defs%3E%3Cpolygon fill='url(%23a)' points='0 174 0 0 174 0'/%3E%3Cpath fill='%23000' fill-opacity='.5' filter='url(%23c)' d='M121.8 174C59.2 153.1 0 174 0 174s63.5-73.8 87-94c24.4-20.9 87-80 87-80S107.9 104.4 121.8 174z'/%3E%3Cpath fill='url(%23b)' d='M142.7 142.7C59.2 142.7 0 174 0 174s42-66.3 74.9-99.3S174 0 174 0S142.7 62.6 142.7 142.7z'/%3E%3C/svg%3E");
background-attachment: fixed;
background-repeat: no-repeat;
background-position: top left;
}
</style>



             


    <script src="dist/js/main.min.js"></script>

    <script>
        // $("#myModal").on



        $(".forgot").on("click", function() {
            $("#myModal").modal('hide');

        })


        // $(".forgotbutton").on("click",function(){



        //     if(forgotemail !=""){
        //         $("#forgotpassword").modal('hide');

        //     }



        // })

        $("#confirmation").modal('hide');

        $(".requestpassword").on("click", function() {
            var forgotemail = $(".forgotemail").val();

            if (forgotemail != "") {
                $("#forgotpassword").modal('hide');

                $("#confirmation").modal('show');

            }



        })
    </script>



</body>

</html>