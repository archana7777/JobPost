<?php
include 'db.php';
$conn->beginTransaction();
/*$qry1 = "insert into apply_job(jb_id,nm,qua,exp,ac,ur) values (?,?,?,?,?,?)";
$res = $conn->prepare($qry1);
$newfile = $_FILES['ur']['name'];
move_uploaded_file($_FILES['ur']['tmp_name'],"student_resumes/".$newfile);
$data = array($_POST['jb_id'],$_POST['nm'],$_POST['qua'],$_POST['exp'],$_POST['ac'],$newfile);
*/
$date = date("Y-m-d");
$qry1 = "insert into apply_job(jb_id,stud_id,posting_date) values (?,?,?)";
$res = $conn->prepare($qry1);

$data = array($_GET['id'],$_SESSION['s_id'],$date);

$success = $res->execute($data);

if($success == true)
{
$conn->commit();
$_SESSION['sm']="Job Apply Successfully Done!!!";
session_write_close();
header('Location:single_job.php?id='.$_GET['id']);
exit;
}
else
{
$conn->rollback();
$_SESSION['wm']="Failed to posting Job";
session_write_close();
header('Location:single_job.php?id='.$_GET['id']);
exit;
}
?>
