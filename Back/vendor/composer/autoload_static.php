<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9ad48663a6f40bc25f447d457cf55edf
{
    public static $files = array (
        '253c157292f75eb38082b5acb06f3f01' => __DIR__ . '/..' . '/nikic/fast-route/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'League\\Plates\\' => 14,
        ),
        'F' => 
        array (
            'FastRoute\\' => 10,
        ),
        'E' => 
        array (
            'Escola\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'League\\Plates\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/plates/src',
        ),
        'FastRoute\\' => 
        array (
            0 => __DIR__ . '/..' . '/nikic/fast-route/src',
        ),
        'Escola\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit9ad48663a6f40bc25f447d457cf55edf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9ad48663a6f40bc25f447d457cf55edf::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9ad48663a6f40bc25f447d457cf55edf::$classMap;

        }, null, ClassLoader::class);
    }
}
