<?php  
$accounttype = $_SESSION['user_type'];
?>

<?php if ($accounttype == 'Migrant') { ?>
	<div id="sub_menu">
      <ul>
      <li><a href="details.php">Account Details</a></li>
	  <li><a href="job_status.php">Job Status</a></li>
	  </ul>
	</div>
<?php } else { ?>
	<div id="sub_menu">
      <ul>
      <li><a href="details.php">Account Details</a></li>
	  <li><a href="job.php">Jobs</a></li>
	  </ul>
	</div>
<?php } ?>