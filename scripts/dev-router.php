<?php
// Run from repository root:
// php -S localhost:8000 scripts/dev-router.php

$uri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';

if ($uri === '/') {
    readfile(__DIR__ . '/../index.html');
    return true;
}

if (preg_match('#^/student/([a-z0-9-]+)$#', $uri, $match)) {
    $_GET['username'] = $match[1];
    require __DIR__ . '/../api/index.php';
    return true;
}

$path = realpath(__DIR__ . '/..' . $uri);
$root = realpath(__DIR__ . '/..');
if ($path !== false && $root !== false && str_starts_with($path, $root . DIRECTORY_SEPARATOR) && is_file($path)) {
    return false;
}

http_response_code(404);
echo '404 Not Found';
return true;
