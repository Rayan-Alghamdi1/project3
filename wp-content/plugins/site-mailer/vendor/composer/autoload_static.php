<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitffbb9644fe96e304772e236f7954809e
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitffbb9644fe96e304772e236f7954809e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitffbb9644fe96e304772e236f7954809e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitffbb9644fe96e304772e236f7954809e::$classMap;

        }, null, ClassLoader::class);
    }
}
