<?php

/**
 * The registry for Third Party Plugins Integration files.
 *
 * This file is only used to include the integration files/classes.
 * This works as an entry point for the initial add_action for the
 * detect function.
 *
 * It is not required to add all integration files here, this just provides
 * a common place for plugin authors to append their file to.
 *
 */

include_once(dirname(__FILE__) . '/class-litespeed-cache-thirdparty-bbpress.php');
include_once(dirname(__FILE__) . '/class-litespeed-cache-thirdparty-nextgengallery.php');
include_once(dirname(__FILE__) . '/class-litespeed-cache-thirdparty-woocommerce.php');


