<?php
/*
    Test the autoload.
*/
    require __DIR__.'/../vendor/autoload.php';

    $appKey = 'YOUR_APP_KEY';

    $i = new \Instagram($appKey);

    if( $i->getApiKey($appKey) ) {
        echo 'Success!',PHP_EOL;
    }

?>
