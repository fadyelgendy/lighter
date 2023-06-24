<?php

require dirname(__DIR__) ."/vendor/autoload.php";
require dirname(__DIR__) ."/bootstrap/bootstrap.php";

require dirname(__DIR__) . "/routes/web.php";
require dirname(__DIR__) . "/routes/api.php";

\Lighter\Framework\Application::run();
