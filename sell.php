<?php
require 'config.php';

session_start();

$user=$_SESSION['user'];
$BrName= $_SESSION['BrName']; 
//$PropId=$_SESSION['PropId'];
?>
<!DOCTYPE html>
<html>

        <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="style.css">


                <title>Sell</title>
            </head>

            <body>

        <div class="container-fluid" style="background-color: #333333; background-image: url(Appartment3.jpg); background-repeat: no-repeat; background-size: 2500px;">
                <div class="row" style="background-color: #4d77d0">
        <form 
        action="sell.php" method="post">
                    <div class="col">
                        <br />
                        <a href="readyHome.php"><img src="RSlogo.png" alt="RS logo" width="125"></a
                        <br />
                    </div>
                    </div>
                <div class="row">
                        <div class="col-5">
                                
                        </div> 
            <br/> <br/> <br/>

            <!-- Form -->
            <div class="container">
                   
                    <h1 style="color: white; font-size:40px;margin-left: 390px">Add Property</h1>

                <br/><br/><br/>
                    <form role="form">

                        <!-- Rows-->

                        <!-- FN -->
                        <div class="row">
                                <div class="col"> </div>
                                <div class="form-group col-lg-7 ">
                                    <label for="code" style="font-size: 21px">Address</label>
                                    <input name="address"type="text" class="form-control input-normal" placeholder="Adress" required />
                                </div>
                                <div class="col"> </div>
                        </div>
                        <br/>

                        <!-- LN -->
                        <div class="row">
                                <div class="col"> </div>
                                <div class="form-group col-lg-7 ">
                                    <label for="code" style="font-size: 21px">Area</label>
                                    <input name="area" type="text" class="form-control input-normal" placeholder="Area" required/>
                                </div>
                                <div class="col"> </div>
                        </div>
                        <br/>

                         <!-- Email -->
                        <div class="row" style="margin-inline-start: -1pc; margin-inline-end: -1pc">
                            <div class="col"> </div>
                            <div class="form-group col-lg-7 ">
                                <label for="code" style="font-size: 21px"> Number of Bedrooms</label>
                                <input name="Bedroom" type="text" class="form-control input-normal" placeholder="Number of Bedrooms"required />
                            </div>
                            <div class="col"> </div>
                        </div>
                        <br/>

                        <!-- Telephone -->
                        <div class="row" style="margin-inline-start: -1pc; margin-inline-end: -1pc">
                            <div class="col"> </div>
                            <div class="form-group col-lg-7 ">
                                <label for="code" style="font-size: 21px"> Number of Bathrooms</label>
                                <input name="Bathroom"type="text" class="form-control input-normal" placeholder="Number of Bathrooms" required />
                            </div>
                            <div class="col"> </div>
                        </div>
                        <br/>

                        <!-- Budget -->
                        <div class="row" style="margin-inline-start: -1pc; margin-inline-end: -1pc">
                            <div class="col"> </div>
                            <div class="form-group col-lg-7 ">
                                <label for="code" style="font-size: 21px">price</label>
                                <input name="price"type="text" class="form-control input-normal" placeholder="price" required/>
                            </div>
                            <div class="col"> </div>
                        </div>
                        <br/>

                        <!-- Username -->
                        <div class="row">
                                <div class="col"> </div>
                                <div class="form-group col-lg-7 ">
                                    <label for="code" style="font-size: 21px"> year Built
                                            
                                    </label>
                                    <input name="year" type="text" class="form-control input-normal" placeholder="year"required />
                                </div>
                                <div class="col"> </div>
                        </div>
                        <br/>

                         <!-- Password -->
                        <div class="row" style="margin-inline-start: -1pc; margin-inline-end: -1pc">
                            <div class="col"> </div>
                            <div class="form-group col-lg-7 ">
                                <label for="code" style="font-size: 22px"> Picture
                                        
                                </label>
                                <input name="picture"type="text" class="form-control input-normal" placeholder="Picture" required/>
                            </div>
                            <div class="col"> </div>
                        </div>
                        <br/>




                      
                        <!-- Buttons -->
                        <input name="Add" type="submit" value="Add" class="btn" style="margin-left: 14.9pc; background-color:#4d77d0; color: white" >
                        <a href="buy-rent.php" style=" background-color:#4d77d0;font-size:25px;color: white;margin-left: 350px;margin-top: 200px">Properties</a>
                        
                    </form>

                <?php
                    if(isset($_POST['Add']))
                     {$Bathroom =$_POST['Bathroom'];
                     $Bedroom=$_POST['Bedroom'];
                     $price=$_POST['price'];
                     $area=$_POST['area'];
                     $year=$_POST['year'];
                     $picture=$_POST['picture'];
                     $address=$_POST['address'];

                    $query="insert into property( Property_area, Property_year, Beds_no, bathrooms_no, Property_address, Property_picture, price, branch_name, owner) VALUES ('$area','$year','$Bedroom','$Bathroom','$address','$picture','$price','$BrName','$user') ";
                  
                    $query_run=mysqli_query($conn,$query);
                    if($query_run)
                    {
                    echo '<script type="text/javascript"> alert ("Click on properties to see your AD") </script>';
                    
                    }


                }

?>

                <br/> <br/>
                </div>


      <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/da4a83f506.js"></script>

            </body>


</HTML>

    