<?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LODI HOOPS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
    <body class="body" style="background-image: url('kort.jpg');  background-repeat:no-repeat;
    background-size: cover;
    background-position: center;">
    <div class="row pt-5 ">
    
        <div class="div col-6-lg col-sm-2 col-6-md text-center container container-fluid" style="background-image: url('green.jpg');  background-repeat:no-repeat;  background-size: cover;  background-position: center;">
        <img src="logo.png" alt="" width="30%" class="logo-in">
        <div class="login"><h1 style="color: white;"> LOG IN</h1></div>
        <?php
        if (isset($_POST["login"])) {
           $email = $_POST["email"];
           $password = $_POST["password"];
            require_once "database.php";
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if ($user) {
                if (password_verify($password, $user["password"])) {
                    session_start();
                    $_SESSION["user"] = "yes";
                    header("Location: index.php");
                    die();
                }else{
                    echo "<div class='alert alert-danger'>Password does not match</div>";
                }
            }else{
                echo "<div class='alert alert-danger width'>Email does not match</div>";
            }
        }
  
        ?>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
         
    
      
      
           <form action="login.php" method="post" class="form ">
                <div class="form-group ">
                    <input  type="email" placeholder="Enter Email:" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Enter Password:" name="password" class="form-control">
                </div>
                <div class="form-btn">
                    <input type="submit" value="Login" name="login" class="btn-grad3 text-dark ">
                </div>
            </form>
            <div class="register"><p style="color: #grey;">Not registered yet <a href="registration.php" style="color: #c61aff;"><b>Register Here</a></p></b></div>
                 
             
     </div>
        <div class="lamelo col-lg-5 col-6-md pt-5 d-flex justify-content-center">
            <img src="bol.png" alt="" srcset="" width="70%" style="background-image: url('hp.png');  
    background-size: cover;
    background-position: center; " >
            

        </div>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    
    
</body>
</html>