<?php
$congra = "";
$maqamamila = "";
$bilbila = "";
$essa ="";
$dhimmi = "";
$kutaa = "";
$maqaasimate = "";
$seene = "";
$target ="";
// $idphoto ="";
$kan ="";
$lakkwara ="";
$idmamila = "";
$name ="";
$type ="";
$quant ="";
$disc ="";
$img = "";
$permission = "";
$date="";
$mess = "";
$yadeno = "";
$geree = "";
$conn = mysqli_connect("localhost", "root", "", "pro");
if (isset($_POST['searchbtn'])) {
    $search = $_POST['psearch'];
    $sql = "select * from person , material where person.IDMaammila = material.IDMaammila and person.IDMaammila='" . $search . "'";
    $query = mysqli_query($conn, $sql);
    if(mysqli_num_rows($query) == false){
      $mess = "Dhifama! ID kun hin galmoofnee";
    }
    if (mysqli_num_rows($query)) {
        while ($row = mysqli_fetch_array($query)) {
          
            if ($query->num_rows > 0) {
                $seene = $row["senee"];
                 if($seene=="hinseenne"){
                $maqamamila = $row["MaqaaMaamilaa"];
                $bilbila = $row["Bilbila"];
                $essa = $row["EssaaDhufan"];
                $dhimmi = $row["DhimmiBarbaadan"];
                $kutaa = $row["KutaaHojiiMaamilli"];
                $maqaasimate = $row["MaqaaSimatee"];
                $kan = $row["KanMirkanee"];
                $lakkwara = $row["LakkWara"];
                $idmamila = $row["IDMaammila"];
                $name = $row['name'];
                $type = $row['GosaMeeshaa'];
                $quant = $row['BaayinaaMeeshaa'];
                $disc = $row['Ibsa'];
                $permission=$row['permission'];
                $img = $row['IDPhoto'];
                $date=$row['date'];
                $yadeno = $row['yaadannoo'];
                $garee = $row['baay’ina'];
                 }
                 else{
                    $mess = "Mammallii kun kessumeesameera";
                 }   
            }    
        }
          
    } 
        
}
if(isset($_POST['sene'])){
  $idmam = $_POST['idmami'];
  $sql = "update person set senee='seene' where IDMaammila='".$idmam."'";
  mysqli_query($conn, $sql);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Person Registration Form</title>
    <link rel="stylesheet" href="css/door.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/pad.css">
    <script src="js/image.js"></script>
</head>

<body>

    <div class="container">
        <form action="door.php" method="post" enctype="multipart/form-data">
            <div class="top">
                <div class="message">
                    <p>
                        <?php echo $mess;?>
                    </p>
                </div>
                <div class="search">
                    <input type="search" style="float: right;" placeholder="Search Here By ID" name="psearch">
                    <input type="submit" style="float: right;" value="search" name="searchbtn">

                </div>
            </div>
            <div class="center">
                <div class="centop">
                    <div class="image">
                        <span>ID Photo :</span>
                        <div id="dispimg">
                            <img alt="Photo" src="<?php
                            echo " image/$img"; ?>">

                        </div>

                    </div>
                    <div class="centform">
                        <div class="centerlist">
                            <ul>
                                <li>
                                    <label for="idno">Date And Time:</label>
                                    <input type="datetime-local" value="<?php echo $date; ?>" readonly>
                                </li>
                                <li>
                                    <label for="idno">Lakk. Wara:</label>
                                    <input type="text" value="<?php echo $lakkwara; ?>" name="idno" readonly>
                                </li>
                                <li>
                                    <label for="idmami">ID Maammila :</label>
                                    <input type="text" value="<?php echo $idmamila; ?>" name="idmami" readonly>
                                </li>
                            </ul>
                            <ol>
                                <li>
                                    <label style="text-align: center;" for="yadeno">Yaadannoo:</label>
                                    <input style="font-weight: 600;"  name="yadeno" value="<?php echo $yadeno; ?>" id="yadeno" readonly>
                                </li>
                                <li id="gr">
                                    <label style="text-align: left;width:400px"  for="group">Baay’ina Miseensaa:</label>
                                    <input type="number" id="group" value="<?php echo $garee; ?>" name="group" readonly>
                                </li>          
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="ceneterform">
                    <div class="centertop">
                        <ul>
                            <li>
                                <label for="fullname">Maqaa Maamilaa :</label>
                                <input type="text" value="<?php echo $maqamamila; ?>" readonly name="fullname">
                            </li>
                            <li>
                                <label for="phone">Bilbila :</label>
                                <input type="tel" value="<?php echo $bilbila; ?>" readonly name="phone">
                            </li>
                            <li>
                                <label for="essa">Dhufan :</label>
                                <input type="text" value="<?php echo $essa; ?>" readonly name="essa">
                            </li>
                            <li>
                                <label for="dhimmi"> Dhimmi Barbaadan :</label>
                                <input type="text" value="<?php echo $dhimmi; ?>" readonly name="dhimmi">
                            </li>
                            <li>
                                <label for="hoji">Kutaa Hojii Maamilli Itti Simatamu :</label>
                                <input type="text" value="<?php echo $kutaa; ?>" readonly name="hoji">
                            </li>
                        </ul>
                        <ol>
                            <li>
                                <label for="matname">Maqaa Meeshaa :</label>
                                <input type="text" value="<?php echo $name; ?>" readonly name="matname"><br>
                            </li>
                            <li>
                                <label for="mattype">Gosa Meeshaa :</label>
                                <input type="text" value="<?php echo $type; ?>" name="mattype" readonly><br>
                            </li>
                            <li>
                                <label for="matquant">Baayinaa Meeshaa :</label>
                                <input type="text" value="<?php echo $quant; ?>" name="matquan" readonly><br>
                            </li>
                            <li>
                                <label for="matdisc">Ibsa Meeshaa :</label>
                                <textarea name="matdisc" id="matdisc" readonly cols="70"
                                    rows="2"><?php echo $disc; ?></textarea>
                            </li>
                            <li id="radio">
                                <span class="oo">Meeshaa Eeyyamaa Galumsa qaba? </span>
                                <label for="per">Eyyeen</label>
                                <input value="eyyeen" name="per" readonly type="radio" <?php if($permission=="eyyeen" ){
                                    echo "checked" ; }?>
                                >
                                <label for="per">Lakkii</label>
                                <input value="lakkii" name="per" readonly type="radio" <?php if($permission=="lakkii" ){
                                    echo "checked" ; }?>
                                >
                            </li>
                            <li>
                              <div class="bottom">
                        <div class="sene">
                            <input type="submit" name="sene" value="seene">
                        </div>
                    </div>
                            </li>
                        </ol>
                    </div>
                    <div class="centerbott">
                        <h2>Qaama Simatee</h2>
                        <ul>
                            <li>
                                <label for="maqaa">Maqaa : </label>
                                <input type="text" value="<?php echo $maqaasimate; ?>" readonly name="maqaa">
                            </li>
                            <li>
                                <label for="kanm">Kan Mirkaneessee :</label>
                                <input type="text" value="<?php echo $kan; ?>" name="kanm" readonly>
                            </li>

                        </ul>
                    </div>
                    
                </div>

            </div>
        </form>

    </div>
</body>

</html>