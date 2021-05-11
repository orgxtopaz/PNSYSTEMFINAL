



<?php
session_start();
include_once("../connection.php");

if(!isset($_SESSION['email'])){



  
header('location:/pnsystem/day1/landingpage.php');
 
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
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
	</head>
<body>





<style>
			.invoice-box {
				max-width: 800px;
				margin: auto;
				padding: 30px;
				border: 1px solid #eee;
				box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
				font-size: 16px;
				line-height: 24px;
				font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
				color: #555;
			}

			.invoice-box table {
				width: 100%;
				line-height: inherit;
				text-align: left;
			}

			.invoice-box table td {
				padding: 5px;
				vertical-align: top;
			}

			.invoice-box table tr td:nth-child(2) {
				text-align: right;
			}

			.invoice-box table tr.top table td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.top table td.title {
				font-size: 45px;
				line-height: 45px;
				color: #333;
			}

			.invoice-box table tr.information table td {
				padding-bottom: 40px;
			}

			.invoice-box table tr.heading td {
				background: #eee;
				border-bottom: 1px solid #ddd;
				font-weight: bold;
			}

			.invoice-box table tr.details td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.item td {
				border-bottom: 1px solid #eee;
			}

			.invoice-box table tr.item.last td {
				border-bottom: none;
			}

			.invoice-box table tr.total td:nth-child(2) {
				border-top: 2px solid #eee;
				font-weight: bold;
			}

			@media only screen and (max-width: 600px) {
				.invoice-box table tr.top table td {
					width: 100%;
					display: block;
					text-align: center;
				}

				.invoice-box table tr.information table td {
					width: 100%;
					display: block;
					text-align: center;
				}
			}

			/** RTL **/
			.invoice-box.rtl {
				direction: rtl;
				font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
			}

			.invoice-box.rtl table {
				text-align: right;
			}

			.invoice-box.rtl table tr td:nth-child(2) {
				text-align: left;
			}
		</style>




	<body>
    <button type="button" class="btn btn-light"><a href="userhome.php"><i class="fas fa-chevron-circle-left"></i></a></button> <span style="color: black;">GO BACK</span>

		
                        <?php
						 include "../connection.php";
						 //write the query to get data from users table
						  $UserId= $_SESSION['UserId'];
						 $sql = "SELECT * FROM invoice 
						 WHERE UserId='$UserId'; ";
						 $result = $conn->query($sql);
                         $invoicenumber=0;

                                if ($result->num_rows > 0) {
                                //output data of each row
                                while ($row = $result->fetch_assoc()) {
                                    $invoicenumber+=1;
                                ?>

<div class="invoice-box">
			<table cellpadding="0" cellspacing="0">


                      
				<tr class="top">
					<td colspan="2">
                   
						<table>
                        <tbody>
							<tr>
								<td class="title">
									<!-- <img src="" style="width: 100%; max-width: 300px" /> -->
                                    <a class="navbar-brand" href="newlandingpage.php" style="color: black;"> MIZADA <span>Shoppe</span></a>
								</td>

								<td>


									Invoice #:<?php echo $invoicenumber?> <br />
                                    Created: <?php echo $row['Created'] ?> <br />
									Status: <?php echo $row['Status'] ?> <br />
								
								</td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="information">
					<td colspan="2">
						<table>
							<tr>
								<td>
                                     -Address-<br />
									<?php echo $row['Address'] ?><br/>
									
								
								</td>

								<td>
									- Email Contact -<br />
                                    <?php echo $row['ContactEmail'] ?><br/>
								</td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="heading">
					<td>Payment Method</td>

					<td><?php echo $row['TypeOfPayment'] ?></td>
				</tr>

				<!-- <tr class="details">
					<td>Check</td>

					<td>1000</td>
				</tr> -->
                 <td>

                 </td>
				<tr class="heading">
					<td>Item</td>

					<td>Price</td>
				</tr>

				<tr class="item">
				


					<td><?php echo $row['ProductName'] ?> </td>

				
				</tr>


				<tr class="total">
					<td></td>

					<td>Total:<?php echo $row['TotalPayment'] ?> </td>
				</tr>
			</table>
		</div>
        <?php     }?>
        <?php }?>




</body>
</html>










