<?php
/*
 $Id: reg_backup_mysql.php, v 1.4 2011/11/24  $																    
                                                     
  By PRO-Webs.net 12.9.2011
                                                      
  Powered by Zen-Cart (www.zen-cart.com)              
  Portions Copyright (c) 2006 The Zen Cart Team       
                                                      
  Released under the GNU General Public License       
  available at www.zen-cart.com/license/2_0.txt       
  or see "license.txt" in the downloaded zip          

  DESCRIPTION: Add Export Orders to Tools Menu
*/

if (!defined('IS_ADMIN_FLAG')) {
    die('Illegal Access');
}

if (function_exists('zen_register_admin_page')) {
    if (!zen_page_key_exists('todopago')) {
        zen_register_admin_page('todopago', 'BOX_TOOLS_TODOPAGO','FILENAME_TODOPAGO', '', 'tools', 'Y', 17);
    }
}