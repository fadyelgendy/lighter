<?php

$container = new \Lighter\Framework\Container();

$container->bind(\Lighter\Framework\Request::class, function () {
    return new \Lighter\Framework\Request(new \Lighter\Framework\Router());
});

\Lighter\Framework\Application::setContainer($container);