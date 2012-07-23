<?php
define('AT_INCLUDE_PATH', '../../include/');
require (AT_INCLUDE_PATH.'vitals.inc.php');
admin_authenticate(AT_ADMIN_PRIV_SUBSITE_SUPPORT);
require (AT_INCLUDE_PATH.'header.inc.php');
?>

<div>
<p>Support is available by contacting your <a href="mailto:<?php echo SUBSITE_SUPPORT_EMAIL; ?>">ATutor System Administrator</a></p>

</div>

<?php require (AT_INCLUDE_PATH.'footer.inc.php'); ?>