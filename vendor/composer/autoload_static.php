<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1e65995309ff96bf8738321a5c4bcf89
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PrestaShop\\Module\\Dottgnotices\\' => 31,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PrestaShop\\Module\\Dottgnotices\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1e65995309ff96bf8738321a5c4bcf89::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1e65995309ff96bf8738321a5c4bcf89::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1e65995309ff96bf8738321a5c4bcf89::$classMap;

        }, null, ClassLoader::class);
    }
}