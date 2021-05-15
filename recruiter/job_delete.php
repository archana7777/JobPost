<?php
include 'db.php';
$conn->beginTransaction();
$qry = "delete from tbl_jobpost where j_id=?";
$res = $conn->prepare($qry);
$data = array($_GET['id']);
$success = $res->execute($data);
echo("success");
if($success == true)
{
$conn->commit();
$_SESSION['sm']="Deleted Successfully";
session_write_close();
header('Location:dashboard.php');
exit;
}
else
{
$conn->rollback();
$_SESSION['wm']="Deletion Failed, Try Again";
session_write_close();
header('Location:dashboard.php');
exit;
}
?>
