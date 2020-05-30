            

                  <?php
require 'config.php';

session_start();
$user=$_SESSION['user'];
$BrName=$_SESSION['BrName'];
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Property</title>
</head>

<body>

        <div class="container-fluid" style="background-color: #333333; background-image: url(home.png); background-repeat: no-repeat; background-size: 2200px;">
                <div class="row" style="background-color: #4d77d0">
                    <div class="col">
                        <br />
                        <a href="readyHome.html"><img src="RSlogo.png" alt="RS logo" width="125"></a
                        <a  style="color:#ffffff;margin-left:1000px" ><?php echo  $user ; ?> <span class="sr-only">(current)</span></a>
                        <br />
                    </div>
                    </div>

           <div class="form-inline">

                <div class="control-group custom-control-inline">
                    <div class="controls">
                        <input name="MaxPrice"type="price" style= "margin-bottom:10px;margin-top:10px "id="price" placeholder="max Price" />
                    </div>
                </div>
                <div class="control-group custom-control-inline">
                    <div class="controls">
                        <input Name="MinPrice"type="Price" id="Price" placeholder="min Price" />
                    </div>
                </div>
                  <div class="control-group custom-control-inline">
                    <div class="controls">
                        <input name="MaxArea"type="Area" id="Area" placeholder="max Area" />
                    </div>
                </div>
                  <div class="control-group custom-control-inline">
                    <div class="controls">
                        <input name="MinArea"type="Area" id="Area" placeholder="min Area" />
                    </div>
                </div>
                                  <div class="control-group custom-control-inline">
                    <div class="controls">
                        <input name="MaxBed" type="Bed" id="Bed" placeholder="max Bed" />
                    </div>
                </div>
                                  <div class="control-group custom-control-inline">
                    <div class="controls">
                        <input name="MinBed" type="Bed" id="Bed" placeholder="min Bed" />
                    </div>
                </div>

            </div>



           <div class="form-inline">


      
 
                  <div class="control-group custom-control-inline">
                    <div class="controls">
                        <input name="Location"type="Search" id="Search" placeholder="City or Town or District" />
                    <input name="search" type="submit" class="btn" value="search" onclick="window.location.href = 'buy-rent.php';" style="font-size:20px; margin-left:65px;color: white; background-color: #4d77d0;"></button>
                    </div>
                </div>

            </div>



          
            /*
            <?php
            if(isset($_POST['search']))
            {
            $MaxPrice =$_POST["MaxPrice"];
            $MinPrice =$_POST["MinPrice"];
            $MaxArea =$_POST["MaxArea"];
            $MinArea =$_POST["MinArea"];
            $MinBed =$_POST["MinBed"];
            $MaxBed =$_POST["MaxBed"];
            $Location =$_POST["Location"];
 
            $query5="select * from property where branch_name='Cairo' and Property_area between '$MinArea' and '$MaxArea' and Beds_no between '$MinBed' and '$MaxBed' and price between '$MinPrice' and '$MaxPrice'and Property_address like '%$Location%'";
            $result5=mysqli_query($conn,$query5);
            $row = mysqli_fetch_all($result5, MYSQLI_ASSOC);
            }
      ?>*/

            <?php

            $query5="select * from property where branch_name='$BrName'";
            $result5=mysqli_query($conn,$query5);
            $row = mysqli_fetch_all($result5, MYSQLI_ASSOC);
            ?>

            <?php
            if(isset($_POST['Go']))
            {
            
            $_SESSION['user']=$user;
            $_SESSION['BrName']=$BrName;
          
            header('location:Bank.php');
            }
            ?>

<div class="container">
<div class="row large-gutters">

<?php foreach ($row as $rows): ?>

<div class="col-md-6 col-lg-4 mb-5 mb-lg-5 ">
            <div class="ftco-media-1">
              <div class="ftco-media-1-inner">
                <a href="Bank.php" class="d-inline-block mb-4"><img src="<?php echo  $rows['Property_picture'] ; ?>"height= "1000" width= "500" style="margin-top: 30px" alt="FImageo" class="img-fluid"></a>
                <div class="ftco-media-details">
                  <label for="exampleInputEmail1" style="font-size:20px;color: white;">Owner: <?php echo  $rows['owner'] ; ?></label>
                  <label for="exampleInputEmail1" style="font-size:20px;color: white;">Property Number:<?php echo  $rows['Property_no'] ; ?></label>
                  <label for="exampleInputEmail1" style="font-size:20px;color: white;">Adress:<?php echo  $rows['Property_address'] ; ?></label>
                  <label for="exampleInputEmail1" style="font-size:20px;color: white;">Area: <?php echo  $rows['Property_area'] ; ?></label>
                  <label for="exampleInputEmail1" style="font-size:20px;color: white;">Year: <?php echo  $rows['Property_year'] ; ?></label>
                  <label for="exampleInputEmail1" style="font-size:20px;color: white;">Beds: <?php echo  $rows['Beds_no'] ; ?></label>
                  <label for="exampleInputEmail1" style="font-size:20px;color: white;">Rooms: <?php echo  $rows['bathrooms_no'] ; ?></label>
                  <label for="exampleInputEmail1" style="font-size:22px;color: white;">Price: <?php echo  $rows['price'] ; ?></label>
                </div>
  
              </div> 
            </div>
          </div>

<?php endforeach;?> 
?>

        </div>
      </div>
    </div>
</body>

</html>