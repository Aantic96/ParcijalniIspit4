<?php

use Core\Database;

require_once 'vendor/autoload.php';

try {
    $connection = Database::getInstance();
    echo "Successfully connected!\n";
}
catch (\Exception $e)
{
    echo $e->getMessage();
}


