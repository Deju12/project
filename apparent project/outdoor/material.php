<?php
$err = array();
$congra = "";
$permission = "";


$conn=mysqli_connect("localhost","root","","pro");

if(isset($_POST['matbtn'])){

    $name = $_POST['matname'];
    $type = $_POST['mattype'];
    $quant = $_POST['matquan'];
    $disc = $_POST['matdisc'];
    $permission=$_POST['per'];
    
    session_start();
    $_SESSION['idm'];

    if(count($err)==0){

        $sql = "select * from material where IDMaammila='".$_SESSION['idm']."'  limit 1";
        $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)==1){
        $query = "update material set name='".$name."',GosaMeeshaa='".$type."',BaayinaaMeeshaa='".$quant."',
        Ibsa='".$disc."',permission='".$permission."' where IDMaammila='".$_SESSION['idm']."'";
   
        mysqli_query($conn, $query);
   
       $congra="You are successfully registerd!";
    }
    else if(mysqli_num_rows($result)!=0){
        array_push($err, "Please try again!");
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
    <title>Formii Meeshaa</title>
    <link rel="stylesheet" href="css/material.css">
</head>

<body>

    <div class="container">
        <form action="material.php" method="post" enctype="multipart/form-data">
            <div class="top">
                <div class="message" class="err">
                    <p style="color:green;">
                        <?php echo $congra;
                        ?>
                        <?php         
          include "err.php";
          ?>
                    </p>

                </div>
            </div>
            <div class="center">
                <div class="centop">

                    <div class="centform">
                        <div class="centerlist">

                        </div>
                    </div>
                </div>
                <div class="ceneterform">
                    <div class="centertop">
                        <ol>
                            <li>
                                <label for="fullname">Maqaa :</label>
                                <input type="text" placeholder="Maqaa Meeshaa Galchii" name="matname">
                            </li>
                            <li>
                                <label for="phone">Gosa Meeshaa :</label>
                                <input type="text" name="mattype" placeholder="Gosa Meeshaa Galchii">
                            </li>
                            <li>
                                <label for="essa">Baayinaa Meeshaa :</label>
                                <input type="text" name="matquan" placeholder="Baayinaa Meeshaa Galchii">
                            </li>
                            <li>
                                <label for="dhimmi"> Ibsa :</label>
                                <textarea name="matdisc" id="matdisc"
                                    placeholder="Ibsa Waa'ee Meeshichaa irratti qabdan" cols="70" rows="2"></textarea>
                            </li><br>
                            <li id="radio">
                                <span class="oo">Meeshaa Eeyyamaa Galumsa qaba? </span><br>
                                <label for="per">Eyyeen</label>
                                <input value="eyyeen" name="per" readonly type="radio" <?php if($permission=="eyyeen" ){
                                    echo "checked" ; }?>
                                >
                                <label for="per">Lakkii</label>
                                <input value="lakkii" name="per" readonly type="radio" <?php if($permission=="lakkii" ){
                                    echo "checked" ; }?>
                                >
                            </li>
                        </ol>

                        <ul>


                        </ul>
                    </div>
                    <div class="centerbott">

                    </div>
                    <div class="bottom">
                        <div class="sene">
                            <input type="submit" name="matbtn" value="Submit">
                        </div>
                    </div>
                </div>

            </div>
        </form>

    </div>
</body>

</html>