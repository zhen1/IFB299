<?php 
$accounttype = $_SESSION['user_type'];
?>

<?php if ($accounttype == 'Migrant') { ?>
	<div id="sub_menu">
      <ul>
      <li><a href="account/details.php">Account Details</a></li>
	  <li><a href="account/job_status.php">Job Status</a></li>
	  </ul>
	</div>
<?php } else { ?>
	<div id="sub_menu">
      <ul>
      <li><a href="account/details.php">Account Details</a></li>
	  <li><a href="account/job.php">Jobs</a></li>
	  </ul>
	</div>
<?php } ?>