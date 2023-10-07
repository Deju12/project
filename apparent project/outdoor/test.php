<?php
$maqamamila = "";
$bilbila = "";
$esadu = "";
$dhimmibarba = "";
$kutaahoji = "";
$maqasimate="";
$mallato = "";
$idphoto="";
$lakkwari = "";
$idmamila = "";
$err =array();
$congra = "";
//database connection
$conn = mysqli_connect("localhost","root","","pro");

if(isset($_POST["adbtn"])){
  $maqamamila = $_POST["fullname"];
  $bilbila = $_POST["phone"];
  $esadu = $_POST["essa"];
  $dhimmibarba = $_POST["dhimmi"];
  $kutaahoji = $_POST["hoji"];
  $maqasimate = $_POST["maqaa"];
  $mallato = $_FILES["file"];
  $idphoto = $_FILES["idfile"];
  $lakkwari = $_POST["idno"];
  $idmamila = $_POST["idmami"];

  if (count($err) == 0) {
    $query = "insert into person (MaqaaMaamilaa,Bilbila,EssaDhufan,DhimmiBarbaadan,KutaaHojiiMaamilli,MaqaaSimatee,Mallattoo,IDPhoto,LakkWara,IDMaammila) value ('$maqamamila','$bilbila','$esadu','$dhimmibarba','$kutaahoji','$maqasimate','$mallato','$idphoto','$lakkwari','$idmamila')";
    mysqli_query($conn, $query);
    $congra = "You are successfully registerd!";

  }
}
?>