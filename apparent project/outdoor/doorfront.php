<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OBN Customer Permission System</title>
    <link rel="stylesheet" href="css/doorfront.css">
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
                        <li onclick="dashboard();" >
                            <a href="dashboard.php" target="fram">Dashboard</a>
                        </li>
                        <li onclick="Maamilaa();">
                            <a href="door.php" target="fram">Maamilaa</a>
                        </li>
                        <li onclick="Apparentii();">
                            <a href="temp.php " target="fram">Apparentii</a>
                        </li>
                        <li onclick="out();">
                            <a href="out.php " target="fram">Bahuumsaa</a>
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
                <script>
                    function Maamilaa(){
                        document.getElementById("top").innerHTML="Guca Maamilaa";
                    }
                    function dashboard(){
                        document.getElementById("top").innerHTML="Guca Maamilii OBN Mooraa Ittin Seenu";
                    }
                    function Apparentii(){
                        document.getElementById("top").innerHTML="Guca Apparentii ";
                    }
                    function out(){
                        document.getElementById("top").innerHTML="Guca Bahuumsaa";
                    }
                </script>
            </div>
            <div class="bottom">
                <iframe src="dashboard.php" name="fram" frameborder="0"></iframe>

            </div>
        </div>
    </div>
</body>

</html>