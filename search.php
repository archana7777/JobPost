<?php
include 'db.php';
$qry = "select count(*) as cnt from tbl_jobpost where j_status='Active' and j_title like '%".$_POST['val']."%'";
							foreach($conn->query($qry) as $row)
							{
							$cnt = $row['cnt'];
							}
                             
 echo '<b>'.$row['cnt'].'</b> jobs found';
$qry1 = "select * from tbl_jobpost where j_status='Active' and j_title like '%".$_POST['val']."%'";
foreach($conn->query($qry1) as $var)
{
echo '<div class="list-item">
									<div class="list-item-main-info">

										<p class="list-item-title">
											<a href="single_job.php?id='.$var ['j_id'].'">'.$var ['j_title'].'</a>
										</p>

										<div class="list-item-meta">
                                        	<a href="#" class="list-item-tag item-badge job-type-full-time">'.$var ['j_type'].'</a>
											<span class="list-item-company">'.$var ['c_name'].'</span>
											</div>
                                        </div>

									<div class="list-item-secondary-info">
										<p class="list-item-location?id='.$var ['j_id'].'">'.$var ['j_loc'].'</p>
										<time class="list-item-time" datetime="2017-01-01?id='.$var ['j_id'].'">'.date("d-M-Y",strtotime( $var ['listing_expire'])).'</time>
									</div>
                             </div>';
}
							
?>
