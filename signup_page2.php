<?php
    $conn = mysqli_connect('localhost','root','','project');

    if(mysqli_connect_errno()){
        echo 'Failed to connect to MYSQL'. mysqli_connect_errno();
    }


if(isset($_REQUEST['TCButton']) && isset($_REQUEST['SubmitButton']))
                  {   $FirstName=mysqli_real_escape_string($conn,$_REQUEST['FirstName']);
                      $LastName=mysqli_real_escape_string($conn,$_REQUEST['LastName']);
                      $Email=mysqli_real_escape_string($conn,$_REQUEST['Email']);
                      $Telephone=mysqli_real_escape_string($conn,$_REQUEST['Telephone']);
                      $Budget=mysqli_real_escape_string($conn,$_REQUEST['Budget']);
                      $Username=mysqli_real_escape_string($conn,$_REQUEST['Username']);
                      $password=mysqli_real_escape_string($conn,$_REQUEST['password']);
                      $Cpassword=mysqli_real_escape_string($conn,$_REQUEST['Cpassword']);
                      $TCButton=mysqli_real_escape_string($conn,$_REQUEST['TCButton']);
                      $SubmitButton=mysqli_real_escape_string($conn,$_REQUEST['SubmitButton']);

        $query = "insert into user_info(First_name,Last_name,User_email,username,password,budget,user_telephone) values ('$FirstName','$LastName','$Email','$Username','$password','$Budget','$Telephone') ";


      
      if(mysqli_query($conn, $query))
        {
            session_start();
            $_SESSION['firstname'] = $FirstName;
            $_SESSION['lastname'] = $LastName;
            $_SESSION['user_ID'] = $Username;
            header("location:branch.html");
          
        }
        else {
            echo mysqli_error($conn);
        }
    }

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


                <title>Signup</title>
            </head>

            <body>

        <div class="container-fluid" style="background-color: #333333; background-image: url(Appartment3.jpg); background-repeat: no-repeat; background-size: 2500px;">
                <div class="row" style="background-color: #4d77d0">
        <form 
        action="signup_page2.php" method="POST">
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
                                    <input name="FirstName"type="text" class="form-control input-normal" placeholder="First Name" required />
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
                        <input name="SubmitButton" type="submit" class="btn" onclick="window.location.href = 'branch.html';" style="margin-left: 14.9pc; background-color:#4d77d0; color: white" >
                    </form>
                          
                <br/> <br/>
                </div>

            </body>


</HTML>