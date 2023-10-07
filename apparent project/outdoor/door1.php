
 <?php
       $conn = mysqli_connect("localhost", "root", "", "pro");
       
       if (isset($_POST['searchbtn'])) {
        $search = $_POST['psearch'];
        $sql = "select * from person , material where person.IDMaammila = material.IDMaammila and person.IDMaammila='".$search."'";
        $query = mysqli_query($conn, $sql);
           if(mysqli_num_rows($query)){
           
            while ($row = mysqli_fetch_array($query)){

                if($query->num_rows>0){
                   echo $search;
                    
                   }

                
           }

        }
        else{
              $err= "no result!";
        }
       
    } 
        ?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Person display</title>
  <link rel="stylesheet" href="css/door1.css">

</head>

<body>
  <div class="box">

<div class="title">      
      <h1>Guca Maamilaa </h1>
      <from action="door1.php" method="post" >
      <input type="button" value="search" name="searchbtn"> <input type="search" placeholder="Search Here By ID" name="psearch">
    </div>
        
      <div class="imag"><span>ID Photo :</span> <input type="file"><img src="css/img/abbageda.jpg" alt="ID Photo"
          style="border:1px solid black ;width: 500px;height: 400px;"><br>
        <span>Lakk. Wara:</span> <input type="text" value="
        
        " placeholder="lakk.Waraqaa Enyummaa" name="idno" disabled>
        <br>
        <span>ID Maammila :</span> <input type="text" placeholder="Lakk. Waraqaa Eynuma Maamilaa"   disabled>
        
      </div>
      <div class="content"><span>Maqaa Maamilaa :</span><input type="text"  placeholder="Maqaa Maamilaa Galchii" name="fullname" disabled>

        <br>
        <span>Bilbila :</span> <input type="tel"  placeholder="Bilbila Maamilaa Galchii" name="phone" disabled>
        <br>
        <span>Essaa Dhufan :</span><input type="text"  placeholder="Magaalaa" name="essa" disabled>
        <br>
        <br>
        <span>Dhimmi Barbaadan :</span><input type="text"  placeholder="Dhimma" name="dhimmi" disabled>
        <br>
        <br>
        <span>Kutaa Hojii Maamilli Itti Simatamu :</span><input type="text"  placeholder="Kutaa Hojii Maamilli Itti Simatamu" name="hoji" disabled>
        <fieldset>
          <legend>Qaama Simatee</legend>
          <br>
          <span>Maqaa : </span> <input type="text"  placeholder="Maqaa Simataa" name="maqaa" disabled>
          <br>
          <br>
          <span>Kan Mirkaneessee :</span><input type="text"  name="maqaa" disabled>

        </fieldset>
        <div class="mat"><br><span>Maqaa :</span>
          <input type="text" placeholder="Maqaa Meeshaa Galchii"  name="matname" disabled><br>
          <span>Gosa Meeshaa :</span>
          <input type="text" name="mattype"  placeholder="Gosa Meeshaa Galchii" disabled><br><br>
          <span>Baayinaa Meeshaa :</span>
          <input type="text" name="matquan"  placeholder="Baayinaa Meeshaa Galchii" disabled><br><br>
          <span>Ibsa :</span><br>
          <textarea name="matdisc" id="matdisc"  placeholder="Ibsa Waa'ee Meeshichaa irratti qabdan" cols="70" rows="4" disabled></textarea><br>
          <br>
      </div>
        <div class="pre">
          
        
        <pre>



          <span> Eeyyamaa Galumsa qaba? </span>
                      <span>Eyyeen</span><input type="radio" style="background-color:blue" name="per" disabled>
                      <span>Lakkii</span> <input type="radio" name="per" disabled> 
                      
                      
                      <input type="submit" name="sub" form="form1" value="Seene">
          </pre>
          </div>
      </div>

    </form>

  </div>

</body>

</html>
