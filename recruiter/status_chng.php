<?php
include 'db.php';
$conn->beginTransaction();
$status = '' ;
$qry = "select j_status from tbl_jobpost where j_id=".$_GET['id']."";
foreach($conn->query($qry) as $var)
{
$status = $var['j_status'];
}

if($status == "Active")
{
	$j_status = "Inactive";
}
else
{
	$j_status = "Active";
}

$qry1 = "update tbl_jobpost set j_status=? where j_id=?";
$res1 = $conn->prepare($qry1);
$data1 = array($j_status,$_GET['id']);
$success1 = $res1->execute($data1);

if($success1 == true)
{
$conn->commit();


$_SESSION['sm']="Status Update Successful";
session_write_close();
header('Location:dashboard.php');
exit;

}
else
{
$conn->rollback();


$_SESSION['wm']="Status Updation Failed, Try Again";
session_write_close();
header('Location:dashboard.php');
exit;
}
?>