<?php
session_start();
$maqamamila = "";
$bilbila = "";
$essa = "";
$dhimmi = "";
$kutaa = "";
$maqaasimate = "";
$kan = "";
$idphoto = "";
$lakkwara = "";
$idmamila = "";
$err = array();
$congra = "";
$msg = "";
$seene = "";
$idm="";
$yadeno = "";
$geree = "";
$out = "";

$conn = mysqli_connect("localhost", "root", "", "pro");
 $sql1 = "select * from person order by IDMaammila desc limit 1";
    $result1 = mysqli_query($conn, $sql1);
    $row = mysqli_fetch_array($result1);
    if(mysqli_num_rows($result1)){
      foreach($result1 as $row){
        $last =  $row['IDMaammila'] + 1;
      }
    }
    else{
  $last = "1";

    }

if(isset($_POST["addbtn"])){


  $maqamamila = $_POST["fullname"];
  $bilbila = $_POST["phone"];
  $essa = $_POST["essa"];
  $dhimmi = $_POST["dhimmi"];
  $kutaa = $_POST["hoji"];
  $maqaasimate = $_POST["maqaa"];
  $target = "image/".basename($_FILES['file']['name']);
  $idphoto = $_FILES['file']['name'];
  $kan = $_POST["kanm"];
  $lakkwara = $_POST["idno"];
  $idmamila = $_POST["idmami"];
  $seene = $_POST["seene"];
 $out = $_POST["out"];
    $yadeno = $_POST["yadeno"];
    $garee = $_POST["group"];
  if(count($err)==0){
    $sql = "select * from person where IDMaammila='".$idmamila."' limit 1";
    $result = mysqli_query($conn, $sql);
    
   
    if(mysqli_num_rows($result)==0){
      $query = "insert into person (MaqaaMaamilaa,Bilbila,EssaaDhufan,DhimmiBarbaadan,	senee,baheera,
      KutaaHojiiMaamilli,
      MaqaaSimatee,KanMirkanee,IDPhoto,LakkWara,IDMaammila,yaadannoo,baay’ina) value ('$maqamamila',
      '$bilbila','$essa','$dhimmi','$seene','$out',' $kutaa','$maqaasimate','$kan',
      '$idphoto','$lakkwara','$idmamila','$yadeno','$garee')";
      $query1 = "insert into material (IDMaammila)
        value ('$idmamila')";
       $id = mysqli_insert_id($conn);
            
 
      mysqli_query($conn, $query);
      mysqli_query($conn, $query1);
  
      $congra="You are successfully registerd!";
      
    $_SESSION['idm']=$idmamila;
    
            
    }

    else if(mysqli_num_rows($result)!=0){
      array_push($err, "Please Enter another ID Maammila!");
    }
  
  }

  if(move_uploaded_file($_FILES['file']['tmp_name'],$target)){
       
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Person Registration Form</title>
    <link rel="stylesheet" href="css/personform.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/pad.css">
    <script src="js/image.js"></script>
    <script src="img.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.2.js"
        integrity="sha256-pkn2CUZmheSeyssYw3vMp1+xyub4m+e+QK4sQskvuo4=" crossorigin="anonymous"></script>

    <script>

        var selDiv = "";
        var storedFiles = [];

        $(document).ready(function () {
            $("#img").on("change", handleFileSelect);
            selDiv = $("#selectedBanner");


        });

        function handleFileSelect(e) {
            var files = e.target.files;
            var filesArr = Array.prototype.slice.call(files);
            filesArr.forEach(function (f) {
                if (!f.type.match("image.*")) {
                    return;
                }
                storedFiles.push(f);

                var reader = new FileReader();
                reader.onload = function (e) {
                    var html = '<img src="' +
                        e.target.result +
                        "\" data-file='" +
                        f.name +
                        "' class='avatar rounded lg' alt='catagory Image' height='300px' width='400px'>";
                    selDiv.html(html);
                };
                reader.readAsDataURL(f);
            })
        }
    </script>
</head>

<body>

    <div class="container">
        <form action="personform.php" method="post" enctype="multipart/form-data">
            <div class="top">
                <div class="message">
                    <p style="color:green;">
                        <?php echo $congra;?>
                       <span>
                        <?php  
if(count($err)>0):?>
<?php foreach($err as $error):?>
    <?php echo $error ?>
    <?php endforeach ?>
<?php endif;?>
                       </span> 
                         </p>
       
                </div>
            </div>
            <div class="center">
                <div class="centop">
                    <div class="image">
                        <span>ID Photo :</span>
                        <div id="selectedBanner">
                        </div>
                    </div>
                    <div class="centform">
                        <div class="centerlist">
                            <ul>
                                <li>
                                    <input class="file" type="file" name="file" id="img" accept="image/*">
                                </li>
                                <li>
                                    <label for="idno">Lakk. Wara:</label>
                                    <input type="text" placeholder="lakk.Waraqaa Enyummaa" name="idno" required>
                                </li>
                                <li>
                                    <label for="idmami">ID Maammila:</label>
                                    <input type="text" value="<?php echo$last;?>" name="idmami" required readonly>
                                </li>
                            </ul>
                            <ol>
                                <li>
                                    <label style="text-align: center;" for="yadeno">Yaadannoo:</label>
                                    <select onchange="fun(this.value);" name="yadeno" id="yadeno" required>
                                        <option value="Kanbira">Kanbira</option>
                                        <option value="VIP">VIP</option>
                                        <option value="Garee">Garee</option>
                                    </select>
                                </li>
                                <li id="gr">
                                    <label style="text-align: left;width:400px"  for="group">Baay’ina Miseensaa:</label>
                                    <input type="number" id="group" name="group">
                                </li>
                                 <script>
                                    function fun(str){
                                        var gr=document.getElementById("yadeno");
                                        if(str=="Garee"){
                                            document.getElementById("gr").style.visibility="visible";
                                        }
                                        else if(str=="VIP"){
                                            document.getElementById("gr").style.visibility="hidden";
                                        }
                                        else if(str=="Kanbira"){
                                            document.getElementById("gr").style.visibility="hidden";
                                        }
                                        }
                                </script>
                               
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="ceneterform">
                    <div class="centertop">
                        <ul>
                            <li>
                                <label for="fullname">Maqaa Maamilaa :</label>
                                <input type="text" placeholder="Maqaa Maamilaa Galchii" name="fullname" required>
                            </li>
                            <li>
                                <label for="phone">Bilbila :</label>
                                <input type="tel" placeholder="Bilbila Maamilaa Galchii" name="phone" required>
                            </li>
                            <li>
                                <label for="essa">Dhufan :</label>
                                <input type="text" placeholder="Magaalaa" name="essa" required><br>
                            </li>
                            <li>
                                <label for="dhimmi"> Dhimmi Barbaadan :</label>
                                <input type="text" placeholder="Dhimma" name="dhimmi" required>
                            </li>
                            <li>
                                <label for="hoji">Kutaa Hojii Maamilli Itti Simatamu :</label>
                                <input type="text" placeholder="Kutaa Hojii Maamilli Itti Simatamu" name="hoji"
                                    required>
                            </li>
                        </ul>

                        <ol>
                            <li>
                                <h2>Qaama Simatee</h2>
                            </li>
                            <li>
                                <label for="maqaa">Maqaa : </label>
                                <input type="text" placeholder="Maqaa Simataa" name="maqaa" required>
                            </li>
                            <li>
                                <label for="kanm">Kan Mirkaneessee :</label>
                                <input type="text" name="kanm" value="<?php echo $_SESSION['kinm'];?>" required
                                    readonly>
                            </li>
                            <li class="submit">
                              <div class="bottom">
                        <div class="sene">
                            <input type="submit" name="addbtn">
                            <input type="text" style="width: 100px;display:none;" value="hinseenne" name="seene"
                                readonly>
                            <input type="text" style="width: 100px;display:none;" value="keessaa" name="out"
                                readonly>

                        </div>
                    </div>
                            </li>

                        </ol>
                    </div>
                    <div class="centerbott">

                    </div>
                    
                </div>

            </div>
        </form>

    </div>
</body>

</html>