<?php 
include 'db.php';
$conn->beginTransaction();
$qry = "select pwd from stud_reg where reg_id=".$_SESSION['s_id']."";
foreach($conn->query($qry) as $var)
{
$pwd = $var['pwd'];
}
$old_pwd = $_POST['pwd'];
if($pwd == $old_pwd)
{
$qry1 = "update stud_reg set pwd=? where reg_id=?";
$res = $conn->prepare($qry1);
$data = array($_POST['c_pwd'],$_SESSION['s_id']);
$success = $res->execute($data);
if($success == true)
{
$conn->commit();
$_SESSION['sm']="password changed successfully!!!";
session_write_close();
header('Location:chng_ps.php');
}
else
{
$conn->rollback();
$_SESSION['wm']="Failed to change password";
session_write_close();
header('Location:chng_ps.php');
exit;
}
}
else
{
$_SESSION['wm']="invalid current password";
session_write_close();
header('Location:chng_ps.php');
exit;

}
?>
