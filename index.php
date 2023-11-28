<?php

require_once 'routes.php';

const BASE_URL = '/SlimRouter/';
$page = substr($_SERVER['REQUEST_URI'], strlen(BASE_URL));
echo 'Page "'.htmlspecialchars($page).'"';

if (isset($routes[$page]))
{
    # Include right page
    require $routes[$page]['redirect_to'];

    if (isset($routes[$page]['callback']))
    {
        # Call function if specified
        $routes[$page]['callback']();
    }
}
else
{
    # Send 404
    require 'view/404.php';
}
