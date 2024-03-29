<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit53ba924e5c5e484af3eb255e4061e41c
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'NumberToWords\\' => 14,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'NumberToWords\\' => 
        array (
            0 => __DIR__ . '/..' . '/kwn/number-to-words/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit53ba924e5c5e484af3eb255e4061e41c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit53ba924e5c5e484af3eb255e4061e41c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit53ba924e5c5e484af3eb255e4061e41c::$classMap;

        }, null, ClassLoader::class);
    }
}
