<?php

include 'db.php';
$conn->beginTransaction();
if(!empty($_FILES['resume']['name']))
{

$qry = "update stud_reg set name=?,qualification=?,resume=?,experience=?,address=?,mobile_no=? where reg_id=?";
$res = $conn->prepare($qry);
$newfile = $_FILES['resume']['name'];
move_uploaded_file($_FILES['resume']['tmp_name'],"student_resumes/".$newfile);
$data = array($_POST['name'],$_POST['qualification'],$newfile,$_POST['experience'],$_POST['address'],$_POST['c_contact'],$_SESSION['s_id']);

}
else
{
$qry = "update stud_reg set name=?,qualification=?,experience=?,address=?,mobile_no=? where reg_id=?";
$res = $conn->prepare($qry);
$data = array($_POST['name'],$_POST['qualification'],$_POST['experience'],$_POST['address'],$_POST['c_contact'],$_SESSION['s_id']);
}
$success = $res->execute($data);


if($success == true)
{
$conn->commit();
$_SESSION['sm']="Update Successful";
session_write_close();
header('Location:edit_profile.php');
exit;
}
else
{
$conn->rollback();
$_SESSION['wm']="Updation Failed, Try Again";
session_write_close();
header('Location:edit_profile.php');
exit;
}
?>