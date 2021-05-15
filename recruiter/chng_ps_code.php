<?php 
include 'db.php';
$conn->beginTransaction();
$qry = "select pwd from tbl_reg where reg_id=".$_SESSION['id']."";
foreach($conn->query($qry) as $var)
{
$pwd = $var['pwd'];
}
$old_pwd = $_POST['pwd'];
if($pwd == $old_pwd)
{
$qry1 = "update tbl_reg set pwd=? where reg_id=?";
$res = $conn->prepare($qry1);
$data = array($_POST['c_pwd'],$_SESSION['id']);
$success = $res->execute($data);
if($success == true)
{
$conn->commit();
$_SESSION['sm']="password changed successfully!!!";
session_write_close();
header('Location:change_password.php');
}
else
{
$conn->rollback();
$_SESSION['wm']="Failed to change password";
session_write_close();
header('Location:change_password.php');
exit;
}
}
else
{
$_SESSION['wm']="invalid current password";
session_write_close();
header('Location:change_password.php');
exit;

}
?>
