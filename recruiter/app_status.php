<?php
include 'db.php';
$conn->beginTransaction();
$status = '' ;
$qry = "select * from apply_job where a_id=".$_GET['id']."";
foreach($conn->query($qry) as $var)
{
$status = $var['status'];
$jbid = $var['jb_id'];
}


if($status == "Not Accepted")
{
	$status = "Accepted";
}
else
{
	$status = "Not Accepted";
}

$qry1 = "update apply_job set status=? where a_id=?";
$res1 = $conn->prepare($qry1);
$data1 = array($status,$_GET['id']);
$success1 = $res1->execute($data1);

if($success1 == true)
{
$conn->commit();


$_SESSION['sm']="Status Update Successful";
session_write_close();
header('Location:application_details.php?id='.$jbid);
exit;

}
else
{
$conn->rollback();


$_SESSION['wm']="Status Updation Failed, Try Again";
session_write_close();
header('Location:application_details.php?id='.$jbid);
exit;
}
?>