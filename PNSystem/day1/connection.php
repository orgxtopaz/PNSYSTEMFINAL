
<?php



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mizada";

$conn = new mysqli($servername, $username, $password, $dbname);
   




$id = 0;
$update =false;
$productPhoto = '';
$productType = '';
$description = '';
$originalPrice = '';
$price = '';
$rating = '';


//PRODUCTS FUNCTIONS AND METHOD

if (isset($_POST['submit'])){
    $productPhoto = $_POST['ProductPhoto'];
    $productName = $_POST['ProductName'];
    $productType = $_POST['ProductType'];
    $description = $_POST['Description'];
    $originalPrice = $_POST['OriginalPrice'];
    $price = $_POST['Price'];
    $rating = $_POST['Rating'];

   
    $conn->query("INSERT INTO products( ProductPhoto,ProductName, ProductType, Description, OriginalPrice, Price, Rating) VALUES 
    ('$productPhoto', '$productName','$productType', '$description', '$originalPrice', '$price', '$rating')") or die ($conn->error);

    $_SESSION['message'] = "Record has been saved!";
    $_SESSION['msg_type'] = "Success";
    
    header("location: /pnsystem/day1/admindashboard/products.php");

}

if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $conn->query("DELETE FROM products WHERE ProductId=$id") or die($conn->error);

    $_SESSION['message'] = "Record has been deleted!";
    $_SESSION['msg_type'] = "danger";

    header("location: admindashboard/products.php");
}

if (isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update =true;
    $result = $conn->query("SELECT * FROM products WHERE ProductId=$id")or die ($conn->error);
    if (count([$result]) == 1){
        $row = $result->fetch_array();
        $productPhoto = $row['ProductPhoto'];
        $productName = $row['ProductName'];
        $productType = $row['ProductType'];
        $description = $row['Description'];
        $originalPrice = $row['OriginalPrice'];
        $price = $row['Price'];
        $rating = $row['Rating'];
    }
}

if (isset($_POST['update'])){
    $id = $_POST['id'];
    $productPhoto = $_POST['ProductPhoto'];
    $productName = $_POST['ProductName'];
    $productType = $_POST['ProductType'];
    $description = $_POST['Description'];
    $originalPrice = $_POST['OriginalPrice'];
    $price = $_POST['Price'];
    $rating = $_POST['Rating'];

    $conn->query("UPDATE products SET ProductPhoto='$productPhoto',ProductName='$productName',  ProductType='$productType', Description='$description',
     OriginalPrice='$originalPrice', Price='$price', Rating='$rating' WHERE ProductId=$id") 
    or die($conn->error);

    $_SESSION['message'] = "Record updated successfully!";
    $_SESSION['msg_type']= "warning";

    header("location: admindashboard/products.php");
}


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



// END PRODUCTS



// STOCKSSS


//INSERT

if (isset($_POST['submitstocks'])){
    $ProductId= $_POST['ProductId'];
    $Size = $_POST['Size'];
    $Colors = $_POST['Colors'];
    $Quantity = $_POST['Quantity'];

    

   
    $conn->query("INSERT INTO stocks( ProductId,Size, Colors, Quantity) VALUES 
    ('$ProductId', '$Size',' $Colors','$Quantity')") or die ($conn->error);

    $_SESSION['message'] = "Record has been saved!";
    $_SESSION['msg_type'] = "Success";
    
    header("location: /pnsystem/day1/admindashboard/stocks.php");

}


//DELETE
if (isset($_GET['deletestocks'])){
    $id = $_GET['deletestocks'];
    $conn->query("DELETE FROM stocks WHERE StockId=$id") or die($conn->error);

    $_SESSION['message'] = "Record has been deleted!";
    $_SESSION['msg_type'] = "danger";

    header("location: admindashboard/stocks.php");
}



//UPDATE

if (isset($_GET['editstocks'])){
    $id = $_GET['editstocks'];
    $update =true;
    $result = $conn->query("SELECT * FROM stocks WHERE StockId=$id")or die ($conn->error);
    if (count([$result]) == 1){
        $row = $result->fetch_array();
            $ProductId= $row['ProductId'];
            $Size = $row['Size'];
            $Colors = $row['Colors'];
            $Quantity = $row['Quantity'];
    }
}

if (isset($_POST['updatestocks'])){
    $id = $_POST['StockId'];

    
    $ProductId= $_POST['ProductId'];
    $Size = $_POST['Size'];
    $Colors = $_POST['Colors'];
    $Quantity = $_POST['Quantity'];

    $conn->query("UPDATE stocks SET ProductId='$ProductId',Size='$Size', Colors='$Colors', Quantity='$Quantity'WHERE StockId='$id'") 
    or die($conn->error);

    $_SESSION['message'] = "Record updated successfully!";
    $_SESSION['msg_type']= "warning";

    header("location: admindashboard/stocks.php");
}


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// END STOCKSS
?>

