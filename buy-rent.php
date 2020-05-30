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
                  <form action="buy-rent.php" method="POST">
                    <div class="col">
                        <br />
                        <a href="readyHome.php"><img src="RSlogo.png" alt="RS logo" width="125"></a
                        <a  style="color:#ffffff;margin-left:1000px" ><?php echo  $user ; ?> <span class="sr-only">(current)</span></a>
                        <br />
                    </div>
                    </div>

           





                          <div class="form-group headings">
                          <label for="exampleInputEmail1" style="font-size:20px;color: white;">Property Id</label>
                          <input name="PropId"type="text" class="form-control input-normal" placeholder="Enter the Id of the property you want to buy here">
                          </div>
                
    </br>
               <input name="Buy" type="submit" class="btn" value="Buy" onclick="window.location.href = 'Bank.php';" style="margin-left: 20px;margin-top:-40px;margin-bottom: 100px; background-color:#4d77d0; color: white" ></button>

</form>


            <?php

            $query5="select * from property where branch_name='$BrName'";
            $result5=mysqli_query($conn,$query5);
            $row = mysqli_fetch_all($result5, MYSQLI_ASSOC);
            ?>

<?php
            if(isset($_POST['Buy']))
            {
            $PropId =$_POST["PropId"];

            $_SESSION['user']=$user;
            $_SESSION['PropId']=$PropId;
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