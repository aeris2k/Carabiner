<?php

require_once('file_helper.php');

Autoloader::directories(array(
    Bundle::path('carabiner').'libraries',
));


IoC::singleton('carabiner', function() {
    return new Carabiner();
});