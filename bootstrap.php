<?php

// Load Config
require_once 'config/config.php';




// Load libraries

require_once 'libraries/TemplateEngine.php';
require_once 'libraries/Core.php';
require_once 'libraries/Controller.php';
require_once 'libraries/Database.php';
require_once 'views/admin/articles/articles.php';
require_once 'views/admin/articles/modal.php';


// Autoload Core Libraries
spl_autoload_register(function ($className) {
    require_once 'libraries/' . $className . '.php';
});
