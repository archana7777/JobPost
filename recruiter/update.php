<?php
include 'db.php';
$conn->beginTransaction();
$qry = "update tbl_jobpost set j_title=?,j_type=?,j_qualification=?,j_exp=?,j_sal=?,j_desc=?,j_vac=?,c_name=?,c_web=?,c_mail=?,c_contact=? where j_id=?";
$res = $conn->prepare($qry);
$data = array($_POST['j_title'],$_POST['j_type'],$_POST['j_qualification'],$_POST['j_exp'],$_POST['j_sal'],$_POST['j_desc'],$_POST['j_vac'],$_POST['c_name'],$_POST['c_web'],$_POST['c_mail'],$_POST['c_contact'],$_POST['jid']);
$success = $res->execute($data);
if($success == true)
{
$conn->commit();


$_SESSION['sm']="Update Successful";
session_write_close();
header('Location:dashboard.php');
exit;

}
else
{
$conn->rollback();


$_SESSION['wm']="Updation Failed, Try Again";
session_write_close();
header('Location:dashboard.php');
exit;
}
?>