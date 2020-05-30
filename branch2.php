<?php
require 'config.php';

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
        <div class="container-fluid" style="background-color: #333333; background-image: url(Appartment3.jpg); background-repeat: no-repeat; background-size: 1700px;">
                <div class="row" style="background-color: #4d77d0">
        <form action="readyHome.html" method="POST">
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
                   
                    <h1 style="color: white;margin-left:400px;margin-top: 0px">Choose Branch</h1>

                <br/><br/><br/>
 <!-- User Level -->

     

   
<?php
$query="select Branch_name from branch";
$result = mysqli_query($conn,$query);
    
    echo "<html>";
    echo "<body>";
    echo "<select name='id'>";

    while ($row = $result->fetch_assoc()) {

                  unset($id, $name);
                  $id = $row['branchId'];
                  $name = $row['Branch_name']; 
                  echo '<option value="'.$id.'">'.$name.'</option>';
                 
}

    echo "</select>";
    echo "</body>";
    echo "</html>";
  ?>
                    
  <br/>
                                                <!-- Buttons -->
 <button type="submit" class="btn" onclick="window.location.href = 'readyHome.html';" style="margin-left: 520px;margin-bottom: 100px; background-color:#4d77d0; color: white" >Go</button>
  </form>



      <!-- Cards -->
      <div class="container">
          <div class="card-deck">
              <div class="card text-center" >
                  <div class="card-block">
                      <h4 class="card-title" style="background-color:#4d77d0">Cairo</h4>
                      <p class="card-text" style="background-color:white;"> <a href = "https://www.w3schools.com">Rs_cairo@hotmail.com</a>
                        <br>
                          <br> <a href = "https://www.w3schools.com">El Obour st., off El Tesaeen St., 5th Compound, New Cairo</a>
                          <br/>
                          <br> <a href = "https://www.w3schools.com">16754</a>
                          <br/>
                          <br>
                      </p>
                  </div>
              </div>
      
              <div class="card text-center">
                  <div class="card-block">
                      <h4 class="card-title" style="background-color:#4d77d0">Ismaileya</h4>
                       <p class="card-text" style="background-color:white;"> <a href = "https://www.w3schools.com">Rs_Ismaileya@hotmail.com</a>
                        <br>
                          <br> <a href = "https://www.w3schools.com">173 El Tahrir st. off El Sultan Hussein St., Downtown</a>
                          <br/>
                          <br> <a href = "https://www.w3schools.com">16753</a>
                          <br/>
                          <br>
                      </p>
                  </div>
              </div>
      
              <div class="card text-center">
                  <div class="card-block">
                      <h4 class="card-title" style="background-color:#4d77d0">Alexandria</h4>
                      <p class="card-text" style="background-color:white;"> <a href = "https://www.w3schools.com">Rs_Alexandria@hotmail.com</a>
                        <br>
                          <br> <a href = "https://www.w3schools.com">14th of May Rd,Semouha,inside Green PLaza Mall</a>
                          <br/>
                          <br> <a href = "https://www.w3schools.com">16752</a>
                          <br/>
                          <br>
                      </p>
                  </div>
              </div>
                            <div class="card text-center">
                  <div class="card-block">
                      <h4 class="card-title" style="background-color:#4d77d0">Port Said</h4>
                      <p class="card-text" style="background-color:white;"> <a href = "https://www.w3schools.com">Rs_PortSaid@hotmail.com</a>
                        <br>
                          <br> <a href = "https://www.w3schools.com">193 El Gomhoureya st., El shark district, Port Said</a>
                          <br/>
                          <br> <a href = "https://www.w3schools.com">16751</a>
                          <br/>
                          <br>
                      </p>
                  </div>
              </div>
      
      <br/>


            </body>