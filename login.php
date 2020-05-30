<?php
require 'config.php';
session_start();

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

    <title>Log In</title>
</head>

<body>
        <div class="container-fluid" style="background-color: #333333; background-image: url(Appartment3.jpg); background-repeat: no-repeat; background-size: 1700px;">
                <div class="row" style="background-color: #4d77d0">
                    <div class="col">
                        <br />
                        <a href="home_page.html"><img src="RSlogo.png" alt="RS logo" width="125"></a
                        <br />
                    </div>
                    </div>
                <div class="row">
                        <div class="col-5">
                                
                        </div> 
                    <div class="col">
                        <br />
                        <br />
                        <br />
                        <br />
                        <p class="headings" style="color: white; font-size:40px; margin-left: 55px;">Log In</p>
                        <br />
                        <br />
                    </div> 
                </div>
                <div class="row">
                    <div class="col-5">
                            
                    </div> 
                    <div class="col">
                        <form action="login.php" method="post">
                            <div class="form-group headings">
                                <label for="exampleInputEmail1" style="font-size:20px;color: white;">Username</label>
                                <input name="userr"type="text" class="form-control input-normal" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1" style="font-size:20px;color: white;">Password</label>
                                <input name="pass"type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <input name="login" type="submit" value="LogIn" class="btn"  onclick="window.location.href = 'branch.php';" style="font-size:20px; margin-left:65px;color: white; background-color: #4d77d0;"/>
                            <a href="signup_page.php" style="font-size:20px;color: white;margin-left: 150px">Don't have an account?</a>
                        </form>
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />
                      </div>

                      <?php

                    if(isset($_POST['login']))
                    {$userr =$_POST['userr'];
                    $pass=$_POST['pass'];


                    $query="select * from user_info where username='$userr' AND password='$pass' ";
                  
                    $query_run=mysqli_query($conn,$query);

                    if(mysqli_num_rows($query_run)>0)
                    {
                        $_SESSION['user']=$userr;
                        header('location:branch.php');
                    }
                    else
                    {
                        echo '<script type="text/javascript"> alert ("Invalid credentials") </script>';
                    }


                    }

?>

                    </div>
                    <div class="col-5">
                            
                        </div> 
                </div>
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

</html>
