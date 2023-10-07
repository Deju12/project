<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
	<title>OBN Customers Information</title>
    <link rel="stylesheet" href="css/disp.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
    <link rel="stylesheet" href="css/print.css" media="print">
    <script src="js/table2excel.js"></script>
	
	
</head>
<body>
    <div class="container">
        <div class="top">
         <button onclick="window.print();" class="btn btn-primary" id="print-btn">Print</button>
         <button  class="btn btn-primary" id="excel-btn">Excel</button>
         <input type="search" name="search" id="search">
         <label style="float: right;" for="search">Search:</label>
        
       
        </div>
        
<div class="tab">
    <table>
			<thead>
			<tr>
			<th>.ID. </th>
            <th>Maqaa Maamilaa</th>
            <th>Lakk. Wara.</th>
            <th>Bilbila</th>
            <th>Essaa Dhufan</th>
            <th>Dhimmi Barbaadan</th>
            <th>Kutaa Hojii Maamilli Itti Simatamu</th>
            <th>Yaad annoo</th>
            <th>Baay’ ina</th>
            <th>Maqaa Simatee</th>
            <th>Kan Mirkaneessee</th>
            <th> Maqaa Meeshaa</th>
            <th> Gosa Meeshaa</th>
            <th> Baayinaa Meeshaa</th>
            <th> Ibsa Meeshaa</th>
            <th> hayyama</th>
            <th>Guyyaa Fi Sa'a</th>
            <th>seene</th>
            <th>Bahuumsaa</th>
            
            
			</tr>
			</thead>
			<tbody id="example">
			<?php
       $conn = mysqli_connect("localhost", "root", "", "pro");
       
       if (isset($_POST['disbtn'])) {
        $search = $_POST['search'];
        $sql = "select * from person , material where person.IDMaammila = material.IDMaammila and person.IDMaammila='".$search."'";
        $query = mysqli_query($conn, $sql);

                if($query->num_rows>0){
                    while ($row = mysqli_fetch_array($query)){
                    echo "<tr><td>" . $row['IDMaammila'] . "<td>" . $row['MaqaaMaamilaa'] . "<td>" . $row['LakkWara'] .
                    "<td>" . $row['Bilbila'] . "<td>" . $row['EssaaDhufan'] . "<td>" . $row['DhimmiBarbaadan'] .
                    "<td>" . $row['KutaaHojiiMaamilli'] . "<td>" .$row['yaadannoo'] . "<td>" .$row['baay’ina'] . "<td>" . $row['MaqaaSimatee'] . "<td>". $row['KanMirkanee'] . "<td>"
                    . $row['name'] . "<td>" . $row['GosaMeeshaa'] . "<td>" . $row['BaayinaaMeeshaa'] . "<td>"
                    . $row['Ibsa'] . "<td>" . $row['permission'] . "<td>" . $row['date'] . "<td>" . $row['senee'] ."<td>" . $row['baheera'] . "</tr>";
                                } 
                               echo "</table>";      
           }
     else if ($search==""){
              if ($conn->connect_error) {
               die("Connection failed:" . $conn->connect_error);
           }

           $sql = "select * from person , material where person.IDMaammila = material.IDMaammila";

           $result = mysqli_query($conn, $sql);

           if ($result->num_rows > 0) {

               while ($row = mysqli_fetch_array($result)) {
                   echo "<tr><td>" . $row['IDMaammila'] . "<td>" . $row['MaqaaMaamilaa'] . "<td>" . $row['LakkWara'] .
                       "<td>" . $row['Bilbila'] . "<td>" . $row['EssaaDhufan'] . "<td>" . $row['DhimmiBarbaadan'] .
                       "<td>" . $row['KutaaHojiiMaamilli'] . "<td>".$row['yaadannoo'] . "<td>" .$row['baay’ina'] . "<td>"  . $row['MaqaaSimatee'] . "<td>". $row['KanMirkanee'] . "<td>"
                       . $row['name'] . "<td>" . $row['GosaMeeshaa'] . "<td>" . $row['BaayinaaMeeshaa'] . "<td>"
                       . $row['Ibsa'] . "<td>" . $row['permission'] . "<td>" . $row['date'] . "<td>" .$row['senee'] ."<td>" . $row['baheera'] . "</tr>";
               }
               echo "</table>";
           } else {
               echo "0 result";
           }
        }    
       
    }
   elseif (isset($_POST['serbtn'])) {
        $search = $_POST['searc'];
        $sql = "select * from person , material where person.IDMaammila = material.IDMaammila and person.KanMirkanee='".$search."'";
        $query = mysqli_query($conn, $sql);
                if($query->num_rows > 0){
                      while ($row = mysqli_fetch_array($query)){
        
                    
                    echo "<tr><td>" . $row['IDMaammila'] . "<td>" . $row['MaqaaMaamilaa'] . "<td>" . $row['LakkWara'] .
                    "<td>" . $row['Bilbila'] . "<td>" . $row['EssaaDhufan'] . "<td>" . $row['DhimmiBarbaadan'] .
                    "<td>" . $row['KutaaHojiiMaamilli'] . "<td>".$row['yaadannoo'] . "<td>" .$row['baay’ina'] . "<td>"  . $row['MaqaaSimatee'] . "<td>". $row['KanMirkanee'] . "<td>"
                    . $row['name'] . "<td>" . $row['GosaMeeshaa'] . "<td>" . $row['BaayinaaMeeshaa'] . "<td>"
                    . $row['Ibsa'] . "<td>" . $row['permission'] . "<td>" .$row['date'] . "<td>" . $row['senee'] . "<td>" . $row['baheera'] . "</tr>";
                               }
                    
                               echo "</table>";
      
           }
        else if ($search==""){
              if ($conn->connect_error) {
               die("Connection failed:" . $conn->connect_error);
           }

           $sql = "select * from person , material where person.IDMaammila = material.IDMaammila";

           $result = mysqli_query($conn, $sql);

           if ($result->num_rows > 0) {

               while ($row = mysqli_fetch_array($result)) {
                   echo "<tr><td>" . $row['IDMaammila'] . "<td>" . $row['MaqaaMaamilaa'] . "<td>" . $row['LakkWara'] .
                       "<td>" . $row['Bilbila'] . "<td>" . $row['EssaaDhufan'] . "<td>" . $row['DhimmiBarbaadan'] .
                       "<td>" . $row['KutaaHojiiMaamilli'] . "<td>".$row['yaadannoo'] . "<td>" .$row['baay’ina'] . "<td>"  . $row['MaqaaSimatee'] . "<td>". $row['KanMirkanee'] . "<td>"
                       . $row['name'] . "<td>" . $row['GosaMeeshaa'] . "<td>" . $row['BaayinaaMeeshaa'] . "<td>"
                       . $row['Ibsa'] . "<td>" . $row['permission'] . "<td>" .$row['date'] . "<td>" . $row['senee'] . "<td>" . $row['baheera'] . "</tr>";
               }
               echo "</table>";
           } else {
               echo "0 result";
           }
        }
       
    }
    
    else {
           if ($conn->connect_error) {
               die("Connection failed:" . $conn->connect_error);
           }

           $sql = "select * from person , material where person.IDMaammila = material.IDMaammila";

           $result = mysqli_query($conn, $sql);

           if ($result->num_rows > 0) {

               while ($row = mysqli_fetch_array($result)) {
                   echo "<tr><td>" . $row['IDMaammila'] . "<td>" . $row['MaqaaMaamilaa'] . "<td>" . $row['LakkWara'] .
                       "<td>" . $row['Bilbila'] . "<td>" . $row['EssaaDhufan'] . "<td>" . $row['DhimmiBarbaadan'] .
                       "<td>" . $row['KutaaHojiiMaamilli'] . "<td>".$row['yaadannoo'] . "<td>" .$row['baay’ina'] . "<td>"  . $row['MaqaaSimatee'] . "<td>". $row['KanMirkanee'] . "<td>"
                       . $row['name'] . "<td>" . $row['GosaMeeshaa'] . "<td>" . $row['BaayinaaMeeshaa'] . "<td>"
                       . $row['Ibsa'] . "<td>" . $row['permission'] . "<td>" .$row['date'] . "<td>" . $row['senee'] . "<td>" . $row['baheera'] . "</tr>";
               }
               echo "</table>";
         
           } else {
               echo "0 result";
           }
       }
       ?>
       
		
          	
       
        
				
		</table>
       <div class="tt">
        <p></p>
       </div>
    </div>
     	
    </div>
   
<script>
   $(document).ready(function(){  
           $('#search').keyup(function(){  
                search_table($(this).val());  
           });  
           function search_table(value){  
                $('#example tr').each(function(){  
                     var found = 'false';  
                     $(this).each(function(){  
                          if($(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)  
                          {  
                               found = 'true';  
                          }  
                     });  
                     if(found == 'true')  
                     {  
                          $(this).show();  
                     }  
                     else  
                     {  
                          $(this).hide();  
                     }  
                });  
           }  
      });  
 </script>
 <script>
    document.getElementById('excel-btn').addEventListener('click',function(){
        var table2excel = new Table2Excel();
  table2excel.export(document.querySelectorAll("#example-teb"));
    });
 </script>     
				
	
</body>
</html>
