<?php

/**
 * The project name
 * @ignore
 */
define("PROJECT_NAME", 'Alpha Bank');

/**
 * The installation directory
 * Defines the directory where the Alpha Bank project is installed
 */
define("ROOT_DIR", realpath( __DIR__ . "/../") );

/**
 * The core directory
 * Defines the directory which contains the main components of Alpha Bank
 */
define("CORE_DIR", ROOT_DIR . "/uss-core");

/**
 * The Modules Directory
 * Defines the directory that contain modules created by developers to modify functionalities and appearance in Alpha Bank
 */
define("MOD_DIR", ROOT_DIR . '/uss-modules');

/**
 * The resource & third party directory
 * Defines the directory which contains front-end scripts and libraries used by Alpha Bank
 */
define("ASSETS_DIR", CORE_DIR . '/assets');

/**
 * The display directory
 * Defines the directory that contain files responsible for output in Alpha Bank
 */
define("VIEW_DIR", CORE_DIR . '/view');

/**
 * The class directory
 * Defines the directory that contain class files which empowers Alpha Bank
 */
define("CLASS_DIR", CORE_DIR . '/class');
