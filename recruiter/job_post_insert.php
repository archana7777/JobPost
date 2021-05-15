<?php
include 'db.php';
$conn->beginTransaction();
$date = date("Y-m-d");
$qry1 = "insert into tbl_jobpost(j_title,date_posted,listing_expire,j_loc,j_type,j_cat,j_qualification,j_exp,j_sal,j_desc,j_vac,j_reg_id,c_name,c_loc,c_web,c_mail,c_contact) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
$res = $conn->prepare($qry1);
$data = array($_POST['j_title'],$date,$_POST['j_expire'],$_POST['j_loc'],$_POST['j_type'],$_POST['j_cat'],$_POST['j_qualification'],$_POST['j_exp'],$_POST['j_sal'],$_POST['j_desc'],$_POST['j_vac'],$_SESSION['id'],$_POST['c_name'],$_POST['c_loc'],$_POST['c_web'],$_POST['c_mail'],$_POST['c_contact']);
$success = $res->execute($data);

if($success == true)
{
$conn->commit();
$_SESSION['sm']="Job posting is Successfully Done!!!";
session_write_close();
header('Location:dashboard.php');
exit;
}
else
{
$conn->rollback();
$_SESSION['wm']="Failed to posting Job";
session_write_close();
header('Location:job_post.php');
exit;
}
?>
