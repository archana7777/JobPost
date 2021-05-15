<?php
include 'db.php';
$conn->beginTransaction();
$cnt = 0;
$qry1 = "select count(*) as cnt from stud_reg where e_id='".$_POST['e_id']."'";
foreach($conn->query($qry1) as $var)
{
$cnt = $var['cnt'];
}
if($cnt > 0)
{
$_SESSION['wm']="Email-id Already Exist";
session_write_close();
header('Location:signup.php');
exit;
}
else
{
$qry2 = "insert into stud_reg(name,qualification,resume,mobile_no,e_id,pwd) values (?,?,?,?,?,?)";
$res = $conn->prepare($qry2);
$newfile = $_FILES['resume']['name'];
move_uploaded_file($_FILES['resume']['tmp_name'],"student_resumes/".$newfile);
$data = array($_POST['name'],$_POST['qualification'],$newfile,$_POST['mobile_no'],$_POST['e_id'],$_POST['pwd']);
$success = $res->execute($data);
if($success == true)
{
$conn->commit();
$_SESSION['sm']="Registration Successful, Please LOGIN to continue";
session_write_close();
header('Location:login.php');
exit;
}
else
{
$conn->rollback();
$_SESSION['wm']="Registration Failed, Try Again";
session_write_close();
header('Location:signup.php');
exit;
}
}
?>
