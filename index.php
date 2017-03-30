<?php

use KzykHys\Parallel\Parallel;


require __DIR__ . "/vendor/autoload.php";

$parallel = new Parallel();
$values = $parallel->map([1, 2, 3], function ($value) {
   return DateTime::createFromFormat('U.u', microtime(true));
});

var_dump($values);

