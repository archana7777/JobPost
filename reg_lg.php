<?php
include 'db.php';

$id = 0;
$qry1 = "select reg_id from tbl_reg where e_id='".$_POST['eid']."' and pwd='". $_POST['pd']."'";
foreach($conn->query($qry1) as $var)
{
$id = $var['reg_id'];
}

if($id > 0)
{

$_SESSION['id'] = $id;
session_write_close();
header('Location:recruiter/dashboard.php');
}
else
{

$_SESSION['wm']="Invalid id or password. Try Again!!";
session_write_close();
header('Location:reg.php');
exit;
}

?>