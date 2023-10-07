<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OBN Customer Permission System</title>
    <link rel="stylesheet" href="css/directfront.css">
</head>

<body>
    <div class="container">
        <div class="left">
            <div class="logo">
                <div class="image"><img src="css/img/obn logo.png" alt=""></div>
                <div class="title">
                    <h2>Guca Maamilaa </h2>
                </div>
            </div>
            <div class="link">
                <div class="list">
                    <ul>
                        <li onclick="dashboard();">
                            <a href="dashboard.php" target="fram">Dashboard</a>
                        </li>
                        <li onclick="Maamilaa();">
                            <a href="personform.php" target="fram">Maamilaa</a>
                        </li>
                        <li onclick="Meeshaa();">
                            <a href="material.php" target="fram">Meeshaa</a>
                        </li>

                        <li onclick="Apparentii();">
                            <a href="apparent.php" target="fram">Apparentii</a>
                        </li>
                        <li class="diss">
                            <a class="d">Display</a>
                           <div class="disdiv">
                            <ul>
                                <li onclick="disMaamilaa();"><a href="disp.php" target="fram">Maamilaa</a></li>
                            <li onclick="disApparentii();"><a href="temp.php" target="fram">Apparentii</a></li>
                            
                        
                            </ul>
                            
                           </div>
                                
                        </li>
                        <li id="logout">
                            <a href="index.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="right">
            <div class="top">
                <h1 id="top">Guca Maamilii OBN Mooraa Ittin Seenu</h1>
            </div>
            <script>
                    function Maamilaa(){
                        document.getElementById("top").innerHTML="Guca Maamilaa";
                    }
                    function dashboard(){
                        document.getElementById("top").innerHTML="Guca Maamilii OBN Mooraa Ittin Seenu";
                    }
                    function Apparentii(){
                        document.getElementById("top").innerHTML="Guca Apparentii";
                    }
                    function Meeshaa(){
                        document.getElementById("top").innerHTML="Guca Meeshaa";
                    }
                    function disMaamilaa(){
                        document.getElementById("top").innerHTML=" Display Maamilaa";
                    }
                    function disApparentii(){
                        document.getElementById("top").innerHTML=" Display Apparentii";
                    }
                    
                </script>
            <div class="bottom">
                <iframe src="dashboard.php" name="fram" frameborder="0"></iframe>

            </div>
        </div>
    </div>
</body>

</html>