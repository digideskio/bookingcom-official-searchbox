<?php
// If uninstall not called from WordPress exit
if( !defined( 'WP_UNINSTALL_PLUGIN' ) )
exit ();
// Delete options from options table
delete_option( 'bos_searchbox_options' );
?>