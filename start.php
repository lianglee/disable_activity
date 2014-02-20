<?php
elgg_register_event_handler('init', 'system', 'disable_activity');

function disable_activity(){
 elgg_unregister_page_handler('activity');	
}
