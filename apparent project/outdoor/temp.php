<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
	<title>OBN Customers Information</title>
    <link rel="stylesheet" href="css/temp.css">
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
         <input type="search" name="search" id="search" placeholder="Search Here">
         <label style="float: right;" for="search">Search:</label>
        
       
        </div>
        
<div class="tab">
    <table id="example-teb" class="display nowrap" style="width:100%">
			<thead>
			<tr>
			<th>No</th>
            <th>Maqaa</th>
            <th>yuuniivarsitii</th>
            <th>Jalqabu</th>
            <th>Xuummuruu</th>
            <th>Student ID</th>
            <th>Photo</th>
			</tr>
			</thead>
			<tbody id="example">
			<?php
       $conn = mysqli_connect("localhost", "root", "", "pro");
       
       if (isset($_POST['disbtn'])) {
        $search = $_POST['search'];
        $sql = "select * from apparent where Maqaa ='".$search."'";
        $query = mysqli_query($conn, $sql);

                if($query->num_rows>0){
                    while ($row = mysqli_fetch_array($query)){
                    echo "<tr><td>" . $row['id'] . "<td>" . $row['Maqaa'] . "<td>" . $row['yuuniivarsitii'] . "<td>" . $row['Jalqabu'] .
                    "<td>" . $row['Xuummuruu'] . "<td>" . $row['IDstu'] . "<td>" . $row['Photo'] .
                    "<td>";
                                } 
                               echo "</table>";      
           }
     else if ($search==""){
              if ($conn->connect_error) {
               die("Connection failed:" . $conn->connect_error);
           }

           $sql = "select * from apparent";

           $result = mysqli_query($conn, $sql);

           if ($result->num_rows > 0) {

               while ($row = mysqli_fetch_array($result)) {
                  echo "<tr><td>" . $row['id'] . "<td>" . $row['Maqaa'] . "<td>" . $row['yuuniivarsitii'] . "<td>" . $row['Jalqabu'] .
                    "<td>" . $row['Xuummuruu'] . "<td>" . $row['IDstu'] . "<td>" . $row['Photo'] .
                    "<td>";
                }
               echo "</table>";
           } else {
               echo "0 result";
           }
        }    
       
    }
   elseif (isset($_POST['serbtn'])) {
        $search = $_POST['searc'];
        $sql = "select * from apparent where Maqaa='".$search."'";
        $query = mysqli_query($conn, $sql);
                if($query->num_rows > 0){
                      while ($row = mysqli_fetch_array($query)){
        
                    
                    echo "<tr><td>" . $row['id'] . "<td>" . $row['Maqaa'] . "<td>" . $row['yuuniivarsitii'] . "<td>" . $row['Jalqabu'] .
                    "<td>" . $row['Xuummuruu'] . "<td>" . $row['IDstu'] . "<td>" . $row['Photo'] .
                    "<td>";}
                    
                               echo "</table>";
      
           }
        else if ($search==""){
              if ($conn->connect_error) {
               die("Connection failed:" . $conn->connect_error);
           }

           $sql = "select * from apparent";

           $result = mysqli_query($conn, $sql);

           if ($result->num_rows > 0) {

               while ($row = mysqli_fetch_array($result)) {
                   echo "<tr><td>" . $row['id'] . "<td>" . $row['Maqaa'] . "<td>" . $row['yuuniivarsitii'] . "<td>" . $row['Jalqabu'] .
                    "<td>" . $row['Xuummuruu'] . "<td>" . $row['IDstu'] . "<td>" . $row['Photo'] .
                    "<td>"; }
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

           $sql = "select * from apparent";
                $da = date('y-m-d');
                $sqli = "delete from apparent where Xuummuruu < '$da';";
                mysqli_query($conn, $sqli);

           $result = mysqli_query($conn, $sql);
                    
           

           if ($result->num_rows > 0) {

               while ($row = mysqli_fetch_array($result)) {
                   echo "<tr><td>" . $row['id'] . "<td>" . $row['Maqaa'] . "<td>" . $row['yuuniivarsitii'] . "<td>" . $row['Jalqabu'] .
                    "<td>" . $row['Xuummuruu'] . "<td>" . $row['IDstu'] . "<td>"."<img src='image/".$row['Photo']."'>"."<td>";}
               echo "</table>";
                    
         
           } else {
               echo "0 result";
           }
       }
       ?>
       
        
       
            	
       				
		</tbody>
        
				
		</table>
        <div class="tt"></div>
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
