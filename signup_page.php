<?php
    $conn = mysqli_connect('localhost','root','','project');

    if(mysqli_connect_errno()){
        echo 'Failed to connect to MYSQL'. mysqli_connect_errno();
    }
    
session_start();

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


                <title>Signup</title>
            </head>

            <body>

        <div class="container-fluid" style="background-color: #333333; background-image: url(Appartment3.jpg); background-repeat: no-repeat; background-size: 2500px;">
                <div class="row" style="background-color: #4d77d0">
        <form 
        action="signup_page.php" method="post">
                    <div class="col">
                        <br />
                        <a href="home_page.html"><img src="RSlogo.png" alt="RS logo" width="125"></a
                        <br />
                    </div>
                    </div>
                <div class="row">
                        <div class="col-5">
                                
                        </div> 
            <br/> <br/> <br/>

            <!-- Form -->
            <div class="container">
                   
                    <h1 style="color: white; font-size:40px;margin-left: 390px">Create Account</h1>

                <br/><br/><br/>
                    <form role="form">

                        <!-- Rows-->

                        <!-- FN -->
                        <div class="row">
                                <div class="col"> </div>
                                <div class="form-group col-lg-7 ">
                                    <label for="code" style="font-size: 21px">First Name</label>
                                    <input name="FirstName"type="text" class="form-control input-normal" placeholder="" required />
                                </div>
                                <div class="col"> </div>
                        </div>
                        <br/>

                        <!-- LN -->
                        <div class="row">
                                <div class="col"> </div>
                                <div class="form-group col-lg-7 ">
                                    <label for="code" style="font-size: 21px">Last Name</label>
                                    <input name="LastName" type="text" class="form-control input-normal" placeholder="Last Name" required/>
                                </div>
                                <div class="col"> </div>
                        </div>
                        <br/>

                         <!-- Email -->
                        <div class="row" style="margin-inline-start: -1pc; margin-inline-end: -1pc">
                            <div class="col"> </div>
                            <div class="form-group col-lg-7 ">
                                <label for="code" style="font-size: 21px"> Email</label>
                                <input name="Email" type="text" class="form-control input-normal" placeholder="Email"required />
                            </div>
                            <div class="col"> </div>
                        </div>
                        <br/>

                        <!-- Telephone -->
                        <div class="row" style="margin-inline-start: -1pc; margin-inline-end: -1pc">
                            <div class="col"> </div>
                            <div class="form-group col-lg-7 ">
                                <label for="code" style="font-size: 21px"> Telephone Number</label>
                                <input name="Telephone"type="text" class="form-control input-normal" placeholder="Telephone Number" required />
                            </div>
                            <div class="col"> </div>
                        </div>
                        <br/>

                        <!-- Budget -->
                        <div class="row" style="margin-inline-start: -1pc; margin-inline-end: -1pc">
                            <div class="col"> </div>
                            <div class="form-group col-lg-7 ">
                                <label for="code" style="font-size: 21px">Budget</label>
                                <input name="Budget"type="text" class="form-control input-normal" placeholder="Budget" required/>
                            </div>
                            <div class="col"> </div>
                        </div>
                        <br/>

                        <!-- Username -->
                        <div class="row">
                                <div class="col"> </div>
                                <div class="form-group col-lg-7 ">
                                    <label for="code" style="font-size: 21px"> Username
                                            <br/> <div style="font-size: 17px"> Must be under 15 characters</div>
                                    </label>
                                    <input name="Username" type="text" class="form-control input-normal" placeholder="Username"required />
                                </div>
                                <div class="col"> </div>
                        </div>
                        <br/>

                         <!-- Password -->
                        <div class="row" style="margin-inline-start: -1pc; margin-inline-end: -1pc">
                            <div class="col"> </div>
                            <div class="form-group col-lg-7 ">
                                <label for="code" style="font-size: 22px"> Password
                                        <br/> <div style="font-size: 17px"> Must be under 15 characters</div>
                                </label>
                                <input name="password"type="text" class="form-control input-normal" placeholder="Password" required/>
                            </div>
                            <div class="col"> </div>
                        </div>
                        <br/>

                        <!-- Confirm Password -->
                        <div class="row" style="margin-inline-start: -1pc; margin-inline-end: -1pc">
                            <div class="col"> </div>
                            <div class="form-group col-lg-7 ">
                                <label for="code" style="font-size: 22px"> Confirm Password
                                        <br/> <div style="font-size: 17px"> Must be under 15 characters</div>
                                </label>
                                <input name="Cpassword"type="text" class="form-control input-normal" placeholder="Password"required />
                            </div>
                            <div class="col"> </div>
                        </div>
                        <br/>


                        <!-- Checkboxes -->
                        <div class="form-group form-check" style="margin-left: 14.9pc;font-size:20px">
                                <input name="TCButton"type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Agree to Terms and Conditions</label>
                        </div>

                        <!-- Buttons -->
                        <input name="SubmitButton" type="submit" value="SignUp" class="btn" onclick="window.location.href = 'branch.php';" style="margin-left: 14.9pc; background-color:#4d77d0; color: white" >
                        <a href="login.php" style=" background-color:#4d77d0;font-size:25px;color: white;margin-left: 350px;margin-top: 200px">Login</a>
                    </form>

                <?php

                  if(isset($_POST['TCButton']) && isset($_POST['SubmitButton']))
                  { 
                      $FirstName=$_POST['FirstName'];
                      $LastName=$_POST['LastName'];
                      $Email=$_POST['Email'];
                      $Telephone=$_POST['Telephone'];
                      $Budget=$_POST['Budget'];
                      $Username=$_POST['Username'];
                      $password=$_POST['password'];
                      $Cpassword=$_POST['Cpassword'];

         

                      if($password==$Cpassword)
                    { $query="select * from user_info where username='$Username' ";
                      $query_run=mysqli_query($conn,$query);


                          if(mysqli_num_rows($query_run)>0)
                          {
                             echo '<script type="text/javascript"> alert ("User Already exists choose a unique one") </script>';
                            //echo '<script type="text/javascript"> alert (""user already exists ! username should be unique") </script>script>';
                            //$errorMsg=  "user already exists, choose unique username";
                            
                          }
                          else
                         {
                            $query="insert into user_info(First_name,Last_name,User_email,username,password,budget,user_telephone) values ('$FirstName','$LastName','$Email','$Username','$password','$Budget','$Telephone') ";
                            $query_run=mysqli_query($conn,$query);



                                if($query_run)
                                {   
                                echo '<script type="text/javascript"> alert ("You successfully Registered please click on Login ") </script>';
                                    
                              
                                }
                                else
                                {
                                    echo '<script type="text/javascript"> alert ("User Not Registered") </script>';
                                    //echo'<script type ="tesxt/javascrpt"> alert("user not register! please try again ")</script>';
                                    //$errorMsg="user not registered! Try Again";
                                }
                         }
                     
                        }//if pass=cpass


                    else
                    {echo '<script type="text/javascript"> alert ("Password does not match") </script>';
                    //echo'<script type ="tesxt/javascrpt"> alert("password does not match ")</script>';
                    //$errorMsg=  "password doesn't match";
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

    