<!-- for MCN -->
<?php 
include_once('link.php');
include_once('header1.php');
include_once('connection.php'); 
$query="select s.Studentid,p.perc from tbluser s,mcncutoff p where s.cg_cat=p.cg_cat and s.Sch_flag='0'"; 
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
			color: #88cc00;
			font-family: monospace;
			font-size: 25px;
			text-align: left;
			}
			th {
			background-color: #88cc00;
			color: white;
			}
			tr:nth-child(even) {background-color: #f2f2f2}
		</style>
	</head> 
	<body> 
	<table align="center" border="1px" style="width:600px; line-height:40px;"> 
	<tr> 
		<th colspan="4"><h2>Student with MCN offer</h2></th> 
		</tr> 
			  <th> Student ID </th> 
			  <th> Percentage Offered </th>  
			  
		</tr> 
		
		<?php while($rows=mysqli_fetch_assoc($result)) 
		{ 
		?> 
		<tr> <td><?php echo $rows['Studentid'] ; ?></td> 
		<td><?php echo $rows['perc'];echo "%"; ?></td> 
		</tr> 
	<?php 
               } 
          ?> 

	</table> 
	</body> 
	</html>