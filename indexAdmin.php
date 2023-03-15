<?php
header("X-XSS-Protection: 1; mode=block");
?>
<?php $page_title = "Admin";
include('includeadmin/headeradmin.php');
include('includeadmin/navbaradmin.php');
include('includeadmin/contentAdmin.php');
include('includeadmin/dashboardAdmin.php');
include('includeadmin/tablePostAdmin.php');
include('includeadmin/tableUsersAdmin.php');
include('includeadmin/footeradmin.php');?>


