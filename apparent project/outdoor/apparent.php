<?php
$congra = "";
$err = "";
$row = "";
$conn = mysqli_connect("localhost","root","","pro" );
$rows = 1;
if(isset($_GET['row'])){
    $rows = $_GET['num'];
}
if(isset($_POST['submit'])){
    for($i = 0; $i <= $rows-1; $i++){
    $maqaa = $_POST['fname'.$i];
    $unive = $_POST['univ'.$i];
    $ID= $_POST['stuid'.$i];
    $Jalqabu = $_POST['sdate'.$i];
    $Xuummuruu = $_POST['edate'.$i];
    $target = "image/".basename($_FILES['file'.$i]['name']);
    $idphoto = $_FILES['file'.$i]['name'];
    $sql = "insert into apparent (Maqaa,yuuniivarsitii,Jalqabu,Xuummuruu,IDstu,Photo) values ('$maqaa','$unive','$Jalqabu','$Xuummuruu','$ID','$idphoto')";
mysqli_query($conn, $sql);
if(move_uploaded_file($_FILES['file'.$i]['tmp_name'],$target)){
       
  }
        $res = "SET @num := 0";
        $ress = "UPDATE apparent SET id = @num := (@num+1)";
        
mysqli_query($conn, $res);
mysqli_query($conn, $ress);

    $congra = "successfully registered!";

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
    <link rel="stylesheet" href="css/apparent.css">
    
     <script src="https://code.jquery.com/jquery-3.6.2.js"
        integrity="sha256-pkn2CUZmheSeyssYw3vMp1+xyub4m+e+QK4sQskvuo4=" crossorigin="anonymous"></script>

    <script src="js/image.js"></script>
    
</head>

<body>
<div class="cotainer">
    <div class="err">
        <h3><?php echo $err; ?><span><?php echo $congra; ?></span>
               </h3>
    </div>
    <div class="top">
        <form action="" method="get">
            <input type="number" name="num" value="<?php echo $rows;?>" min="1" max="50" placeholder="insert number of rows">
            <input type="submit" value="Row" name="row">
        </form>
    </div>
    <div class="bot">
    <form action="" method="post" enctype="multipart/form-data">
        <ol>
            <li class="no"><label>NO:</label></li>
            <li class="ma"><label for="fname">Maqaa:</label></li>
            <li class="yu"><label for="fname">yuuniivarsitii/koolleejjii:</label></li>
            <li class="idd"><label for="lname">ID Barataa:</label></li>
            <li class="jal"><label for="lname">Guyyaa Itti Jalqabu:</label></li>
            <li class="xu"><label for="lname">Guyyaa Itti Xuummuruu:</label></li>
            
            <li class="img"><label for="photo">Photo:</label></li>
        </ol>
<?php
for($i=0; $i< $rows; $i++ ){
    ?>
    <div class="form">
            <ul>
                <li class="nu"><input required type="number" name="fname<?php echo $i;?>" value="<?php echo $i+1;?>"></li></li>
                <li class="ma">
                    
                <input type="text" required name="fname<?php echo $i;?>" placeholder="Maqaa Barataa"></li>
 
                <li class="yu">
                <input type="text" required name="univ<?php echo $i;?>" placeholder="yuuniivarsitii/koolleejjii irraa dhufe"></li>
                <li class="idd">
                <input type="text" required name="stuid<?php echo $i;?>" placeholder="ID Barataa"></li>
                <li class="jal">
                <input type="date" required name="sdate<?php echo $i;?>" placeholder="Guyyaa Itti Jalqabu"></li>
                <li class="xu">
                <input type="date" required name="edate<?php echo $i;?>" placeholder="Guyyaa Itti Xuummuruu"></li>
                
                <li class="img">
                    
                    <div class="image"> 
                        <div class="selectedBanner" id="selectedBanner<?php echo $i;?>"></div>
                    </div>
                    <div class="choos">
                         <p><input class="file" onclick="fun<?php echo $i;?>()" type="file" name="file<?php echo $i;?>" id="img<?php echo $i;?>" accept="image/*"></p>
                    </div>  
                </li>
            </ul>
        </div>

        <script>
            function fun<?php echo $i;?>(){
                
            
                var selDiv = "";
        var storedFiles = [];

        $(document).ready(function () {
            $("#img<?php echo $i;?>").on("change", handleFileSelect);
            selDiv = $("#selectedBanner<?php echo $i;?>");
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
                        "' class='avatar rounded lg' alt='catagory Image' height='100%' width='100%'>";
                    selDiv.html(html);
                };
                reader.readAsDataURL(f);
            })
        }

            }

        
    </script>
        
        <?php          
}
        ?>
        
       <div class="subm">
         <input type="submit" name="submit">
       </div>
        
    </form>
    </div>
</div>
</body>

</html>