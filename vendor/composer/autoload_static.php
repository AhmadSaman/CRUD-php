<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfc399f798917e05192d37f84fbadc9b7
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfc399f798917e05192d37f84fbadc9b7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfc399f798917e05192d37f84fbadc9b7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfc399f798917e05192d37f84fbadc9b7::$classMap;

        }, null, ClassLoader::class);
    }
}