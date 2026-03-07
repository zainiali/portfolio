<?php

// Vercel serverless: filesystem is read-only except /tmp — use /tmp for all writable paths
if (getenv('VERCEL') === '1') {
    putenv('APP_CONFIG_CACHE=/tmp/config.php');
    putenv('APP_EVENTS_CACHE=/tmp/events.php');
    putenv('APP_PACKAGES_CACHE=/tmp/packages.php');
    putenv('APP_ROUTES_CACHE=/tmp/routes.php');
    putenv('APP_SERVICES_CACHE=/tmp/services.php');
    putenv('VIEW_COMPILED_PATH=/tmp');
    putenv('LOG_CHANNEL=stderr');
    putenv('SESSION_DRIVER=cookie');
    putenv('CACHE_STORE=array');
}

require __DIR__ . '/../public/index.php';
