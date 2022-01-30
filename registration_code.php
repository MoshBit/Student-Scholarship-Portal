<!--
Here, we write code for registration.
-->
<?php
require_once('connection.php');
$sname = $sid = $scg = $sdeptid = $mname  = $fname  = $sbatch = $email = $password = $pwd = '';

$sname = $_POST['studentname'];
$sid = $_POST['studentid'];
$scg = $_POST['studentcg'];
$sbatch = $_POST['studentbatch'];
$sdeptid = $_POST['studentdeptid'];
$mname = $_POST['mothername'];
//$mincome = $_POST['motherincome'];
$fname = $_POST['fathername'];
//$fincome = $_POST['fatherincome'];
$email = $_POST['email'];
$pwd = $_POST['password'];
$password = MD5($pwd);

$sql = "INSERT INTO tbluser (Studentname,Studentid,Studentcg,Studentdeptid,Sbatch,Mothername,Fathername,Email,Password) VALUES ('$sname','$sid','$scg','$sdeptid','$sbatch','$mname','$fname','$email','$password')";
$result = mysqli_query($conn, $sql);
if($result)
{
	header("Location: login.php");
}
else
{
	echo "Error :".$sql;
}
?>