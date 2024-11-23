<?php

/****************************** Required Files */
//globals
require_once(__DIR__ . '/inc/cyn-global.php');

//classes
require_once(__DIR__ . '/inc/classes/cyn-theme-init.php');
require_once(__DIR__ . '/inc/classes/cyn-customize.php');
require_once(__DIR__ . '/inc/classes/cyn-register.php');
require_once(__DIR__ . '/inc/classes/cyn-search.php');
require_once(__DIR__ . '/inc/classes/cyn-custom-code.php');
require_once(__DIR__ . '/inc/classes/cyn-actions.php');
require_once(__DIR__ . '/inc/classes/cyn-rest.php');



//functions
require_once(__DIR__ . '/inc/functions/cyn-general.php');
// require_once(__DIR__ . '/inc/functions/cyn-update-checker.php');
require_once(__DIR__ . '/inc/functions/cyn-menu.php');


//acf
include_once(CYN_ACF_PATH . 'acf.php');
require_once(__DIR__ . '/inc/functions/cyn-acf-fields.php');
require_once(__DIR__ . '/inc/functions/cyn-acf.php');

//instance classes
new cyn_theme_init(true, '1.1.0');
new cyn_register();
new cyn_customize();
new cyn_search();
new cyn_custom_code();
new cyn_actions();
new cyn_rest();
