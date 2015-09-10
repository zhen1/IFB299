<?php if($_SESSION['user_type'] == 'Admin'){ ?>
<h1>Welcome Admin</h1>
<?php } else if($_SESSION['user_type'] == 'Manager') { ?>
<h1>Welcome Manager</h1>
<?php } else if($_SESSION['user_type'] == 'Volunteer') { ?>
<h1>Welcome Volunteer</h1>
<?php } else if($_SESSION['user_type'] == 'Migrant') { ?>
<h1>Welcome Migrant</h1>
<?php } else { ?>
<h1>Welcome</h1>
<?php } ?>