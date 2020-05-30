<?php
require 'config.php';

session_start();
$user=$_SESSION['user'];
?>



<!DOCTYPE html>
<html>

        <head>
                <!-- Required meta tags -->
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            
                <!-- Bootstrap CSS -->
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
                <link rel="stylesheet" href="style.css">

                <!-- Optional JavaScript -->
                <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
                
                <!-- FB Plugin -->
                <div id="fb-root"></div>
                <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.3"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
                
                <!-- Font Awesome -->
                <script src="https://kit.fontawesome.com/21f9c2d1ea.js"></script>

                <title>Branch</title>
            </head>

            <body>

            <!-- Nav Bar -->
        <div class="container-fluid" style="background-color: #333333; background-image: url(Appartment3.jpg); background-repeat: no-repeat; background-size: 2200px;">
                <div class="row" style="background-color: #4d77d0">
        <form action="branch.php" method="POST">
                    <div class="col">
                        <br />
                        <a href="readyHome.html"><img src="RSlogo.png" alt="RS logo" width="125"></a
                        <br />
                    </div>
                    </div>

                <div class="row">
                        <div class="col-5">
                                
                        </div> 
            <br/> <br/> <br/>

            <!-- Form -->
            <div class="container">
                    <h1 style="color: white;margin-left:400px;margin-top: 0px">Welcome <?php echo  $user ; ?>!</h1>
                    <h1 style="color: white;margin-left:400px;margin-top: 0px">Choose Branch</h1>
                    

                <br/><br/><br/>
 <!-- User Level -->

   <?php
     $query="select Branch_name from branch";
     $result=mysqli_query($conn,$query);

     $Number_rows=mysqli_num_rows($result); //number of rows out this result
     $data=array(); //array of data for branch names

  while($row=mysqli_fetch_array($result))
  {
  array_push($data,$row["Branch_name"]);   //filling data array
  }
    echo "<html>";
    echo "<body>";
    echo "<select name='id'>";


for ($x = 0; $x < $Number_rows; $x++) {
    echo '<option value="'.$data[$x].'">'.$data[$x].'</option>';
}

  
    echo "</select>";
    echo "</body>";
    echo "</html>";


    ?>
    


                        
          <br/>
          <!-- Buttons -->
          <input name="Go" type="submit" class="btn" value="Go" onclick="window.location.href = 'readyHome.php';" style="margin-left: 200px;margin-top:-30px;margin-bottom: 100px; background-color:#4d77d0; color: white" ></button>
                    </form>

            <?php
            $BrName =$_POST["id"];
            if(isset($_POST['Go']))
            { $_SESSION['user']=$user;
              $_SESSION['BrName']=$BrName;
              header('location:readyHome.php');
            }

            ?>



      <!-- Cards -->
<?php
$query5="select * from branch";
$result5=mysqli_query($conn,$query5);
$row = mysqli_fetch_all($result5, MYSQLI_ASSOC);
?>

<!-- Cards -->
<br>

<br/>

  <div class="container">
  <div class="card-deck">

<?php foreach ($row as $rows): ?>
        
              <div class="card text-center" >
                  <div class="card-block">
                      <h4 class="card-title" style="background-color:#4d77d0"><?php echo  $rows['Branch_name'] ; ?></h4>
                      <p class="card-text" style="background-color:white;"> <a href = "https://www.w3schools.com"><?php echo  $rows['Branch_email'] ; ?></a>
                        <br>
                          <br> <a href = "https://www.w3schools.com"><?php echo  $rows['Branch_address'] ; ?></a>
                          <br/>
                          <br> <a href = "https://www.w3schools.com"><?php echo  $rows['Branch_telephone'] ; ?></a>
                          <br/>
                          <br>
                      </p>
                  </div>
              </div>

<?php endforeach;?> 
              
<br/>
</body>

</html>

      
