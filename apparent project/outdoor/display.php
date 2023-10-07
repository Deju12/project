<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Display</title>
    <link rel="stylesheet" href="css/display.css">

<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://www.datatables.net/rss.xml">
	
	
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css">
	
	
	</style>
	<script type="text/javascript" src="/media/js/site.js?_=1d5abd169416a09a2b389885211721dd" data-domain="datatables.net" data-api="https://plausible.sprymedia.co.uk/api/event"></script>
	<script src="https://media.ethicalads.io/media/client/ethicalads.min.js"></script>
	<script type="text/javascript" src="/media/js/dynamic.php?comments-page=extensions%2Fbuttons%2Fexamples%2Finitialisation%2Fexport.html" async></script>
	<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script>
	<script type="text/javascript" language="javascript" src="../../../../examples/resources/demo.js"></script>
	<script type="text/javascript" class="init">
	


$(document).ready(function() {
	$('#example').DataTable( {
		dom: 'Bfrtip',
		buttons: [
			'copy', 'csv', 'excel', 'pdf', 'print'
		]
	} );
} );



	</script>

</head>
<body>
    
    <div class="box">
           <div style="width: 100%; height: 50px;">

           </div>

 <div style="margin-top: 10px;">
					<table id="example">
						<thead>
							<tr>
								<th>ID Maammila</th>
                                <th>Maqaa Maamilaa</th>
                                <th>Lakk. Wara.</th>
                                 <th>Bilbila</th>
                                  <th>Essaa Dhufan</th>
                                 <th>Dhimmi Barbaadan</th>
                                 <th>Kutaa Hojii Maamilli Itti Simatamu</th>
                                <th>Maqaa Simatee</th>
                               <th>Kan Mirkaneessee</th>
                                <th> Maqaa Meeshaa</th>
                              <th> Gosa Meeshaa</th>
                               <th> Baayinaa Meeshaa</th>
                               <th> Ibsa Meeshaa</th>
                                <th> Permission</th>
                                 <th>seene</th>
							</tr>
						</thead>
						<tbody>
							<?php
       $conn = mysqli_connect("localhost", "root", "", "pro");
       
      
    
           if ($conn->connect_error) {
               die("Connection failed:" . $conn->connect_error);
           }

           $sql = "select * from person , material where person.IDMaammila = material.IDMaammila";

           $result = mysqli_query($conn, $sql);

           if ($result->num_rows > 0) {

               while ($row = mysqli_fetch_array($result)) {
                   echo "<tr><td>" . $row['IDMaammila'] . "<td>" . $row['MaqaaMaamilaa'] . "<td>" . $row['LakkWara'] .
                       "<td>" . $row['Bilbila'] . "<td>" . $row['EssaaDhufan'] . "<td>" . $row['DhimmiBarbaadan'] .
                       "<td>" . $row['KutaaHojiiMaamilli'] . "<td>" . $row['MaqaaSimatee'] . "<td>". $row['KanMirkanee'] . "<td>"
                       . $row['name'] . "<td>" . $row['GosaMeeshaa'] . "<td>" . $row['BaayinaaMeeshaa'] . "<td>"
                       . $row['Ibsa'] . "<td>" . $row['permission'] . "<td>" . $row['senee'] . "</tr>";
                       
               }
               echo "</tbody></table>";
           } else {
               echo "0 result";
           }
       
       ?>
							
	</tbody>
						
</table>
</div>
    
      
</div>

</body>
</html>