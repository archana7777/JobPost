<?php
include 'db.php';
$conn->beginTransaction();
$cnt = 0;
$qry1 = "select count(*) as cnt from tbl_reg where e_id='".$_POST['e_id']."'";
foreach($conn->query($qry1) as $var)
{
$cnt = $var['cnt'];
}
if($cnt > 0)
{
$_SESSION['wm']="Email-id Already Exist";
session_write_close();
header('Location:reg.php');
exit;
}
else
{
$qry2 = "insert into tbl_reg(e_id,pwd) values (?,?)";
$res = $conn->prepare($qry2);
$data = array($_POST['e_id'],$_POST['pwd']);
$success = $res->execute($data);
if($success == true)
{
$conn->commit();
$_SESSION['sm']="Registration Successful, Please LOGIN to continue";
session_write_close();
header('Location:reg.php');
exit;
}
else
{
$conn->rollback();
$_SESSION['wm']="Registration Failed, Try Again";
session_write_close();
header('Location:reg.php');
exit;
}
}
?>
