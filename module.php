<?php
/*******
* insert the email address subsite administrators can contact for help
* as the value SUBSITE_SUPPORT_EMAIL below
*/
define('SUBSITE_SUPPORT_EMAIL', "");

/*******
 * doesn't allow this file to be loaded with a browser.
 */
if (!defined('AT_INCLUDE_PATH')) { exit; }

/******
 * this file must only be included within a Module obj
 */
if (!isset($this) || (isset($this) && (strtolower(get_class($this)) != 'module'))) { exit(__FILE__ . ' is not a Module'); }

/*******
 * assign the instructor and admin privileges to the constants.
 */
define('AT_PRIV_SUBSITE_SUPPORT',       $this->getPrivilege());
define('AT_ADMIN_PRIV_SUBSITE_SUPPORT', $this->getAdminPrivilege());


/*******
 * add the admin pages when needed.
 */
if (admin_authenticate(AT_ADMIN_PRIV_SUBSITE_SUPPORT, TRUE) || admin_authenticate(AT_ADMIN_PRIV_ADMIN, TRUE)) {
	$this->_pages[AT_NAV_ADMIN] = array('mods/subsite_support/index_admin.php');
	$this->_pages['mods/subsite_support/index_admin.php']['title_var'] = 'subsite_support';
	$this->_pages['mods/subsite_support/index_admin.php']['parent']    = AT_NAV_ADMIN;
}


?>