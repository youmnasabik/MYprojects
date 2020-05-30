<?php
require 'config.php';

session_start();

$user=$_SESSION['user'];
$BrName= $_SESSION['BrName']; 
$PropId=$_SESSION['PropId'];
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

    <title>Invoice</title>
</head>

<body>
        <div class="container-fluid" style="background-color: #333333; background-image: url(Appartment3.jpg); background-repeat: no-repeat; background-size: 1900px;">


                <div class="row" style="background-color: #4d77d0">
                    <div class="col">
                        <br />
                        <a href="readyHome.php"><img src="RSlogo.png" alt="logo" width="125"></a
                        <br />
                    </div>
                    </div>

                <form action="Invoice.php" method="post">
                <div class="row">
                        <div class="col-5">
                                
                        </div> 
                    <div class="col">
                        <br />
                        <br />
                        <br />
                        <br />
                        <p class="headings" style="color: white; font-size:40px; margin-left: 0px;"><?php echo  $user ; ?>'s Invoice</p>
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />
                    </div> 



<?php
$query5="select * from property where Property_no='$PropId'"; //hardcoded now
$result5=mysqli_query($conn,$query5);
$row = mysqli_fetch_all($result5, MYSQLI_ASSOC);

                           
?>  

<?php
$query10="DELETE FROM property WHERE Property_no='$PropId'";
$result10=mysqli_query($conn,$query10);
?>

</br>         
<div class="container">
  <div class="card-deck">

 <?php foreach ($row as $rows): ?>
        
              <div class="card text-center" >
                  <div class="card-block">
                      <h4 class="card-title" style="background-color:#4d77d0">Invoice</h4>
                      <p class="card-text" style="background-color:white;"> <a href = "https://www.w3schools.com">Property Number :<?php echo  $rows['Property_no'] ; ?></a>
                        <br>
                          <br/>
                          <br> <a href = "https://www.w3schools.com">Seller is :<?php echo  $rows['owner'] ; ?></a>
                          <br/>
                          <br/>
                          <br> <a href = "https://www.w3schools.com"> Purchase Date is 22-4-2020</a>
                          <br/>
                          <br/>
                          <br> <a href = "https://www.w3schools.com">Total price is <?php echo  $rows['price'] ; ?></a>
                          <br/>
                          <br/>
                          <br> <a href = "https://www.w3schools.com"><?php echo  $rows['Property_address'] ; ?></a>
                          <br/>
                          <br>
                      </p>
                  </div>
              </div>
              <?php
              $price=$rows['price'];
              $seller=$rows['owner'];

              ?>
<?php endforeach;?> 


<?php
$query="insert into invoice(datePurchase,buyerName, propertyNo,price,SellerName) values ('24-4-2020','$user','$PropId','$price','$seller')";
$query_run=mysqli_query($conn,$query);

?>
</br>   
</br>   
</form>

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

</html>