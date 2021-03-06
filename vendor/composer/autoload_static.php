<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit68b59b278a50b5c43ec5803bf44407dc
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'App\\libraries\\Controller' => __DIR__ . '/../..' . '/app/libraries/Controller.php',
        'App\\libraries\\Core' => __DIR__ . '/../..' . '/app/libraries/Core.php',
        'App\\libraries\\Database' => __DIR__ . '/../..' . '/app/libraries/Database.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit68b59b278a50b5c43ec5803bf44407dc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit68b59b278a50b5c43ec5803bf44407dc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit68b59b278a50b5c43ec5803bf44407dc::$classMap;

        }, null, ClassLoader::class);
    }
}
