<?php

global $project;
$project = 'mysite';

global $databaseConfig;

$databaseConfig = array(
        "type" => 'MySQLDatabase',
        "server" => 'db685846262.db.1and1.com',
        "username" => 'dbo685846262',
        "password" => 'Silverstripe-demo1',
        "database" => 'db685846262',
        "path" => ''
    );

require_once 'conf/ConfigureFromEnv.php';

Security::setDefaultAdmin('admin','admin');

// Set the site locale
i18n::set_locale('en_US');
