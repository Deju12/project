<?php 
$fname="";
$username="";
$job="";
$password="";
$repassword="";
$err=array();
$congra="";
$funame = "";
$uname = "";
$pass = "";
$errr = "";
$jobb = "";
$search = "";
//database connection

$conn = mysqli_connect("localhost","root","","pro");

if(isset($_POST["addbtn"])){
     
    $fname=$_POST["adminname"];
    $username=$_POST["adminusername"];
    $job = $_POST["adminjob"];
    $password=$_POST["adminpass"];
    $repassword=$_POST["adminrepass"];
    if(empty($fname) or empty($username) or empty($job) or (empty($password) and empty($repassword)) ){
        if(empty($fname)){
        $errr = "maqaa guutuu barbaachisa!";
      }
     elseif(empty($username)){
        $errr = "maqaan fayyadamaa barbaachisaa dha!";
        
     }
     elseif(empty($job)){
         $errr = "hojii barbaachisaa dha!";
        
     }
     elseif(empty($password) and empty($repassword)){
            $errr = "password barbaachisaa dha!";

     }
    }
    
  elseif($password!=$repassword){
    array_push($err,"The Password is not match!");
  }
  elseif(count($err)==0){

    $query="insert into login (fullname, username, job, password) value ('$fname','$username','$job','$password')";
    mysqli_query($conn,$query);
    $congra="You are successfully registerd!";
}
}
if(isset($_POST['deletebtn'])){
    $search = $_POST['serch'];
    if(empty($search)){
        $errr = "fill first search field";
    }
    $sql = "select * from login where username='" . $search . "'";
    $query = mysqli_query($conn, $sql);
    if(mysqli_num_rows($query) == false){
      $errr = "Dhifama! Maqaa Fayyadamaa kun hin galmoofnee";
    }
    else{
        $sql = "delete from login where username='" . $search . "'";
    $query = mysqli_query($conn, $sql);
    $congra="Deleted!";
    }
}
if(isset($_POST["updatebtn"])){
    $search = $_POST['serch'];
    $fname=$_POST["adminname"];
    $username=$_POST["adminusername"];
    $job = $_POST["adminjob"];
    $password=$_POST["adminpass"];
    $repassword=$_POST["adminrepass"];
    if(empty($fname) or empty($username) or empty($job) or (empty($password) and empty($repassword)) ){
        if(empty($fname)){
        $errr = "maqaa guutuu barbaachisa!";
      }
     elseif(empty($username)){
        $errr = "maqaan fayyadamaa barbaachisaa dha!";
        
     }
     elseif(empty($job)){
         $errr = "hojii barbaachisaa dha!";
        
     }
     elseif(empty($password) and empty($repassword)){
            $errr = "password barbaachisaa dha!";

     }
    }
    
  elseif($password!=$repassword){
    array_push($err,"The Password is not match!");
  }
  elseif(count($err)==0){

    $query="update login set fullname='" . $_POST["adminname"] . "',username='" . $_POST["adminusername"] . "',job='" . $_POST["adminjob"] . "',password='" . $_POST["adminpass"] . "' where username='" . $search . "'  ";
    mysqli_query($conn,$query);
    $congra="You are successfully updated!";
}
    

}


if (isset($_POST['searchbtn'])) {
    $search = $_POST['serch'];
    $sql = "select * from login where username='" . $search . "'";
    $query = mysqli_query($conn, $sql);
    if(mysqli_num_rows($query) == false){
      $errr = "Dhifama! Maqaa Fayyadamaa kun hin galmoofnee";
    }
    if (mysqli_num_rows($query)) {
        while ($row = mysqli_fetch_array($query)) {
            if ($query->num_rows > 0) {
                $funame = $row["fullname"];
                $uname = $row["username"];
                $jobb = $row["job"];
                $pass = $row["password"];
                 } 
     
            }    
        }
          
    } 
        

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration Form </title>

    <link rel="stylesheet" href="css/addadmin.css">
</head>
<body>
    <div class="cont">
        <div class="pic">
              <div class="pics">
                <p><img src="css/img/R2.png" class="image"> </p>
              </div>
        </div>
    <div class="box">
       <h1 style="color:red; font-size:30px;">Admin registration form</h1>
      <div class="err">
        <p><?php
         echo $errr;
        include "errr.php";
        ?>
        <span><?php  echo $congra; ?></p></span> 
      </div>
      <div class="form">
        <form action="" method="post">
           <div style="width: 100%;"><a href="index.php">Logout</a><a href="police.php">Add Police</a></div>
            <div class="textform">
                <ul>
                    <li><span>Full Name:</span><input type="text" name="adminname" value="<?php echo $funame; ?>" placeholder="Enter Director Name">
                </li>
                <li><span>Username:</span><input type="text" name="adminusername" value="<?php echo $uname; ?>" placeholder="Enter Director username">
                 </li>
                 <li><span>Job:</span><input type="text" name="adminjob" value="<?php echo $jobb; ?>" placeholder="Enter Director job">
               </li>
               <li><span>Password:</span><input type="password" name="adminpass" value="<?php echo $pass; ?>" placeholder="Enter password">
             </li>
             <li><span>Confirmation</span><input type="password" name="adminrepass" value="<?php echo $pass; ?>" placeholder="Re-Password">
           </li>

                </ul>
                 
            </div>
            <div class="sub">
                <input type="submit" name="addbtn" value="Register">
                <input type="submit" name="deletebtn" value="Delete">
                <input type="submit" name="updatebtn" value="Update">
                <input type="search" name="serch" value="<?php echo $search; ?>">
                <input type="submit" name="searchbtn" value="Search">
                
            </div>
           
            
        </form>

      </div>
        
        

    </div>
    </div>
    
    
</body>
</html>