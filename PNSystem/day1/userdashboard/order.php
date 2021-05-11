
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Roboto Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700&display=swap">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="homecssandjs/boostrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="homecssandjs/mdb-pro.min.css">
  <!-- Material Design Bootstrap Ecommerce -->
  <link rel="stylesheet" href="homecssandjs/mdb.ecommerce.min.css">
  <!-- TRENDING BOOSTRAP -->
  <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css'>


  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">


  <!-- FONT -->
  <link href='https://fonts.googleapis.com/css?family=Actor' rel='stylesheet'>

  <!-- Ahref verification -->
  <meta name="ahrefs-site-verification" content="cd945a30a32beb9f20f22626c5f801f2063a726c6fd9af1db55ce27eafaa1e45">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
</head>
<body>


<style>

.btn-light {
    color: #000;
    background-color: #f8f9fa;
    border-color: #f8f9fa;
    margin-left: 67px;
}

.gap {
                            grid-gap: 50px;
 }
</style>
<br><br>

<button type="button" class="btn btn-light"><a href="userhome.php"><i class="fas fa-chevron-circle-left"></i></a></button>
<br><br><br><br>

<div class="container" style="max-width:60vw;margin-left:25%">
<button type="button" class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#usuario_info" style="    margin-left: 462px;
    margin-top: -4px;">
Confirm Details<i class="fa fa-shopping-cart" aria-hidden="true"></i>
</button>

<h1 class="jumbotron">Order List</h1>
<img src="https://i.ibb.co/P1tDnHc/undraw-Order-confirmed-re-g0if.png" alt="undraw-Order-confirmed-re-g0if" border="0" style="float:right; margin-bottom:-300px; position:absolute;">

<form method="post" action="invoice.php">     
    <div class="row gap" >
        <?php
        
        $userid=$_SESSION['UserId'];
        include_once('../connection.php');

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }else{
        
            $sql="SELECT cart.CartId,cart.Quantity, cart.TotalAmount, orderstatus.Description FROM ((orders INNER JOIN orderstatus ON orders.Status = orderstatus.StatusId) INNER JOIN cart on cart.CartId=orders.CartId)";
            // $sql="sele";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
            $allproductname='';
            $productID='';
            while($row = $result->fetch_assoc()){

             
                $cartId=$row['CartId'];
                $sql2="SELECT products.ProductId,products.ProductPhoto,products.ProductName FROM (cart INNER JOIN products ON products.ProductId = cart.ProductId) where cart.CartId='".$cartId."'";
                $result2 = $conn->query($sql2);
                while($row2 = $result2->fetch_assoc()){
                  $allproductname=$allproductname." ".$row2['ProductName'];
                  $productID=$productID." ".$row2['ProductId'];

                  
                  
            ?>
        <div class="card col-sm-4" style="width: 18rem; " >
        <img class="card-img-top" src="<?php echo $row2['ProductPhoto']?>" alt="Product Photo">
        <div class="card-body">
            <h5 class="card-title"><?php echo $row2['ProductName']?></h5>
            <p class="card-text"><label><strong>Quantity:</strong></label><?php  echo " ".$row['Quantity']?></p>
            <p class="card-text"><label><strong>Payment:</strong></label><?php  echo " Php".$row['TotalAmount']?></p>
            <p class="card-text"><label><strong>Status:</strong></label><?php  echo " ".$row['Description']?></p>
           
           
            
        </div>
       
        </div>
        <script>
            if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
            }
        </script>
<?php   
        }
        ?>
        <input type="hidden" name="ProductName" value="<?php echo $allproductname; ?>">
        <input type="hidden" name="ProductId" value="<?php echo $productID; ?>">

        <?php
           
        

        
      }
    }
  }
?>

    </div>



</div>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
<!-- Button trigger modal -->


<div class="modal fade" id="usuario_info" abindex="-1" role="dialog" aria-labelledby="myInfoUser" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <center>

           


                <?php
  include_once("../connection.php");
$email=$_SESSION['email'];

$query =("SELECT * FROM register WHERE email= '$email'");
$query_run = mysqli_query($conn,$query);
while ($row = mysqli_fetch_array ($query_run)) {
  
?>
                          <img src="<?php echo $row['image']; ?>" name="aboutme" width="96" height="96" border="0" class="img-circle" data-holder-rendered="true">

                          <input type="hidden" name="UserId" value="<?php echo $row['UserId']; ?>>;

                        <?php






  
}
   
   
  ?>





                  
                    <h3 class="media-heading" id="bookId"></h3>
                </center>
                <br>
                <div class="panel panel-primary">
                <center>
                    <div class="panel-heading">
                        <h3 class="panel-title">On Process</h3>
                    </div>
                    <p class="cuerpo-info-user">fill up the details below to confirm the order</p>
                </div>
                </center>


                <form>
         

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Address:</label>
            <input type="text" class="form-control" id="recipient-name" name="Address"  required>
          </div>


          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Contact Email:</label>
            <input type="text" class="form-control" id="recipient-name" name="ContactEmail"  required>
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Type of Payment:</label>
            <input type="text" class="form-control" id="recipient-name" name="TypeOfPayment" required placeholder=" suggested COD">
          </div>




          <?php
            
            include_once("../connection.php");
            
            $sql="SELECT cart.CartId,cart.Quantity, cart.TotalAmount, orderstatus.Description FROM ((orders INNER JOIN orderstatus ON orders.Status = orderstatus.StatusId) INNER JOIN cart on cart.CartId=orders.CartId)";
            // $sql="sele";
            $result = $conn->query($sql);
            $total=0;
            
            if ($result->num_rows > 0) {

            
            while($row = $result->fetch_assoc()){


                $total+=$row['TotalAmount'];

               

            
           
                
 

            }
            
            echo"<br>";
          
            echo "<h3 class='text-muted' > Total Payment: </h3><input type='hidden'name='TotalPayment' class='TotalPayment' value='$total'> <h5>₱ $total </h5>";
         
            


            
        }
        

            ?>
             
                 
         


           
       
         
        



          <div class="form-group">
            <label for="message-text" class="col-form-label">Comments</label>
            <textarea class="form-control" id="message-text" name="Comments"></textarea>
          </div>
   

               
            </div>

            <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="submit" name="invoicesubmit" class="btn btn-primary invoice" >Submit</button>
      </div>
        </div>
    </div>
</div><!-- End modal -->    


</div>
<style>

.button-infousuario{
    display:inline-block;
}

</style>


<script>








</script>



</body>
</html>