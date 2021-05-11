<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
    <?php include_once('../../connection.php')?>

    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Edit Product</a>
           <a href="/pnsystem/day1/admindashboard/products.php"> <button type="button" class="btn btn-outline-light" >Go back</button></a>
        </div>
    </nav>
    <div class="container mt-5" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;border-radius:10px; width:30%;">
        <form action="../../connection.php" method="POST">
            <input type="hidden" name="StockId" value="<?php echo $row['StockId']; ?>">
            <br>


            
            <div class="mb-3">
                    <label for="inputName" class="form-label">Product ID:</label>
                    <input type="text" name="ProductId" class="form-control" id="inputName" value="<?php echo $row['ProductId']; ?>">
                
                    <div class="mb-3">
                    <label for="InputSize" class="form-label">Size</label>
                        <input type="text" name="Size" class="form-control" id="inputPhoto" placeholder="" value="<?php echo $row['Size']; ?>">
                        </div>

                        

                        <div class="mb-3">
                            <label for="inputColors" class="form-label">Colors</label>
                            <input type="text" name="Colors" class="form-control" id="inputType" value="<?php echo $row['Colors']; ?>">
                        </div>

                        <div class="mb-3">
                            <label for="inputQuantity" class="form-label">Quantity</label>
                            <input type="text" name="Quantity" class="form-control" id="inputDescription" value="<?php echo $row['Quantity']; ?>" >
                        </div>

                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
            </div>
            <?php 
                if ($update == true):
            ?>
            <button type="submit" name="updatestocks" class="btn btn-info">Update</button>
            <?php endif;?>
        </form>
    </div>
</body>

</html>