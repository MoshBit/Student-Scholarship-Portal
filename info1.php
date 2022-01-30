<!-- for Merit -->
<?php 
include_once('link.php');
include_once('header1.php');
include_once('connection.php'); 
$query="select s.Studentid,p.merit_perc from tbluser s,meritcutoff p where s.cg_cat=p.merit_cg_cat and s.Sch_flag='1'"; 
$result=mysqli_query($conn,$query); 
?> 
<!DOCTYPE html> 
<html> 
	<head> 
		<title> Merit-Cum-Need List </title> 
		<style>
			table {
			border-collapse: collapse;
			width: 600%;
			color: #992600;
			font-family: monospace;
			font-size: 25px;
			text-align: left;
			}
			th {
			background-color: #992600;
			color: white;
			}
			tr:nth-child(even) {background-color: #f2f2f2}
		</style>
	</head> 
	<body> 
	<table align="center" border="1px" style="width:600px; line-height:40px;"> 
	<tr> 
		<th colspan="4"><h2>Student with Merit offer</h2></th> 
		</tr> 
			  <th> Student ID </th> 
			  <th> Percentage Offered </th>  
			  
		</tr> 
		
		<?php while($rows=mysqli_fetch_assoc($result)) 
		{ 
		?> 
		<tr> <td><?php echo $rows['Studentid'] ; ?></td> 
		<td><?php echo $rows['merit_perc'];echo "%"; ?></td> 
		</tr> 
	<?php 
               } 
          ?> 

	</table> 
	</body> 
	</html>