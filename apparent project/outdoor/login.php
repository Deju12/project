<?php 
   $fname="";
   $password="";
   $err="";


   $conn=mysqli_connect("localhost","root","","pro");
   if(isset($_POST['submit'])){
    $fname=$_POST['username'];
    $password=$_POST['password'];

   $sql= "select * from login where username='".$fname."' and password='".$password."' limit 1";
    $result=mysqli_query($conn,$sql);
    if(empty($fname)){
        $err="Username is required!";
    }

    else if(empty($password)){
        $err="Password is required!";
    }
    else if(mysqli_num_rows($result)==1){

        while ($row = mysqli_fetch_array($result)) {
            session_start();
            $_SESSION['kinm'] = $row['fullname'];
        }
        
        header('location:directfront.php');

    }
    else{
        $err="Username or password is incorrect!";
    }



   }
?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OBN Customer Permission System</title>
    <link rel="stylesheet" href="css\login.css">
</head>

<body>
    <div class="container">

        <div class="right">
            <div class="link">
                <div class="box">
                    <div class="back">
                        <a href="index.php">
                            <-- Back </a>
                    </div>
                    <div class="login">
                        <h2>Login Here</h2>
                        <div class="err">
                            <?php 
                            echo $err;
                            ?>
                        </div>

                    </div>
                    <div class="form">
                        <form action="login.php" method="post">

                            <input type="text" name="username" placeholder="Enter your Username">
                            <input type="password" name="password" placeholder="Enter your password">

                            <input type="submit" name="submit" value="LOGIN">
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <div class="left">

            <div class="title">
                <h1>Guca Maamilii OBN Mooraa Ittin Seenu</h1>
            </div>
            <div class="image">
                <p><img src="css/img/R2.png" class="image"> </p>
            </div>
        </div>
    </div>

</body>

</html>