<?php
include_once('link.php');
include_once('header1.php');
require_once('connection.php');
$id = $_SESSION['id'];
$scholarship= $fincome = $mincome = '';
$scholarship = $_POST['sch_flag'];
$fincome = $_POST['fatherincome'];
$mincome = $_POST['motherincome'];

$sql = "UPDATE tbluser  SET Sch_flag = '$scholarship',Motherincome = '$mincome',Fatherincome = '$fincome' WHERE ID='$id'";


$result = mysqli_query($conn, $sql);
if($result)
{
	header("Location: welcome.php");
}
else
{
	echo "Error :".$sql;
}
?>

<!-- UPDATE `tbluser` SET `cg_cat`= 1 WHERE `Studentcg`<=10 AND `Studentcg`>9;
UPDATE `tbluser` SET `cg_cat`= 2 WHERE `Studentcg`<=9 AND `Studentcg`>8;
UPDATE `tbluser` SET `cg_cat`= 3 WHERE `Studentcg`<=8 AND `Studentcg`>7;
UPDATE `tbluser` SET `cg_cat`= 4 WHERE `Studentcg`<=7 AND `Studentcg`>6;
UPDATE `tbluser` SET `cg_cat`= 5 WHERE `Studentcg`<=6 AND `Studentcg`>5;
UPDATE `tbluser` SET `cg_cat`= 6 WHERE `Studentcg`<=5 AND `Studentcg`>4;
-->