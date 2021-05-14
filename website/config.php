<?php

/**
 * Used to store website configuration information.
 *
 * @var string
 */
function config($key = '')
{
    $config = [
        'name' => 'Simple Google Website',
        'nav_menu' => [
            '' => 'Home',
            'content/about-us.php' => 'Gaurav',
            'content/products.php' => 'Kumar',
            'content/contact.php' => 'Dubey',
        ],
        'template_path' => 'template',
        'content_path' => 'content',
        'pretty_uri' => true,
        'version' => 'v2.0',
    ];

    return isset($config[$key]) ? $config[$key] : null;
}
