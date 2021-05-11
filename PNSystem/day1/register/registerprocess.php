

<?php 


    include '../connection.php';
    
    // if the form's submit button is clicked, we need to process the form
        if (isset($_POST['submit'])) {
            // get variables from the form
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $hashed_password = sha1($password);
            $image =$_POST['image'];


            $select = mysqli_query($conn, "SELECT `email` FROM `register` WHERE `email` = '".$_POST['email']."'") or exit(mysqli_error($conn));
            if(mysqli_num_rows($select)) {
                
                    $Emailexist ="
                    <!DOCTYPE html>
                    <html lang='en'>
                    <head>
                    <title>Bootstrap Example</title>
                    <meta charset='utf-8'>
                    <meta name='viewport' content='width=device-width, initial-scale=1'>
                    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css'>
                    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
                    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js'></script>
                    </head>
                    <body>

                    <div class='container'>



                    <!-- Modal -->
                    <div class='modal fade' id='WrongemailModal' role='dialog'>
                    <div class='modal-dialog modal-sm'>
                    <div class='modal-content'>
                    <div class='modal-header'>
                    <button type='button' class='close' data-dismiss='modal'>&times;</button>
                    <h4 class='modal-title'>Email Already in used! </h4>
                    </div>
                    <div class='modal-body'>
                    <p>Try another email!</p>
                    </div>
                    <div class='modal-footer'>
                    <form action ='/pnsystem/day1/register/register.php'>
                    <button type='submit' class='btn btn-default wrong'>Close</button>
                    </form>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>

                    </body>
                    </html>

                    <script>
                    $('#WrongemailModal').modal('show');

                    // $('.wrong').on('click',function()({
                    //     alert('rwrw');
                    // })

                    </script>




                    ";
                    echo $Emailexist;

                     
                }   
            else{

                if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                    $return ="
                                    <!DOCTYPE html>
                       <html lang='en'>
                       <head>
                       <title>Bootstrap Example</title>
                       <meta charset='utf-8'>
                       <meta name='viewport' content='width=device-width, initial-scale=1'>
                       <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css'>
                       <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
                       <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js'></script>
                       </head>
                       <body>
   
                       <div class='container'>
                   
                       
   
                       <!-- Modal -->
                       <div class='modal fade' id='WrongemailModal' role='dialog'>
                           <div class='modal-dialog modal-sm'>
                           <div class='modal-content'>
                               <div class='modal-header'>
                               <button type='button' class='close' data-dismiss='modal'>&times;</button>
                               <h4 class='modal-title'>Email is Invalid </h4>
                               </div>
                               <div class='modal-body'>
                               <p>Try this format ex.zigm@gmail.com</p>
                               </div>
                               <div class='modal-footer'>
                               <form action ='/pnsystem/day1/register/register.php'>
                               <button type='submit' class='btn btn-default wrong'>Close</button>
                               </form>
                               </div>
                           </div>
                           </div>
                       </div>
                       </div>
   
                       </body>
                       </html>
   
                       <script>
                       $('#WrongemailModal').modal('show');
                       
                       // $('.wrong').on('click',function()({
                       //     alert('rwrw');
                       // })
   
                       </script>
   
                   
                    
                    
                    ";
                    echo $return;
              
           
               }
                //CHECKING FOR THE EMAIL VALIDATON..
                else{

                    $sql = "INSERT INTO `register`(`firstname`, `lastname`, `email`, `password`,`image`) VALUES ('$firstname','$lastname','$email','$hashed_password','$image')";

                // execute the query

                $result = $conn->query($sql);


                if ($result == TRUE) {
                header('Location: /pnsystem/day1/landingpage.php');



                }else{
                echo "Error:'. $sql . '<br>". $conn->error;
                }

                $conn->close();
                    
                }



            }    


           
          
    
        }
    
    ?>