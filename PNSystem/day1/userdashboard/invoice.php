
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


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
                    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
                    crossorigin="anonymous"></script>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


<?php


include_once("../connection.php");




if (isset($_POST['invoicesubmit'])){

    $TotalPayment = $_POST['TotalPayment'];

    if($TotalPayment>0){
        
    $UserId = $_POST['UserId'];
    $Address = $_POST['Address'];
    $ContactEmail = $_POST['ContactEmail'];
    $TypeOfPayment = $_POST['TypeOfPayment'];
    $Comments = $_POST['Comments'];
    $ProductName = $_POST['ProductName'];


    




    $conn->query("INSERT INTO invoice( UserId,Address, ContactEmail, TypeOfPayment, Comments,TotalPayment,ProductName) VALUES 
    (' $UserId', '$Address',' $ContactEmail', ' $TypeOfPayment', ' $Comments', ' $TotalPayment', ' $ProductName')") or die ($conn->error);


   

    $ProductId = $_POST['ProductId'];
    
    $conn->query("DELETE FROM cart WHERE UserId='$UserId'") or die($conn->error);



    $_SESSION['message'] = "Record has been saved!";
    $_SESSION['msg_type'] = "Success";
    
    
    header("location:deliveredcart.php");



    }else{
        echo " 
    
        <script>   
        Swal.fire({
          type: 'error',
          icon: 'warning',    
          text: 'You Must do Order first!📦',
          confirmButtonColor: '#DD6B55',
          customClass: 'swal-wide',
          showConfirmButton: true,         
          timer: 10000
        })
        

        </script>";
     

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

body{
    color:white;
}

</style>

<button type="button" class="btn btn-light"><a href="newlandingpage.php"><i class="fas fa-chevron-circle-left"></i></a></button> <span style="color: black;">GO BACK</span>

