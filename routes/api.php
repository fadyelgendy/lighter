<?php

\Lighter\Framework\Facades\Router::get('/api', function () {
    return json_encode(['name' => 'Fady']);
});
