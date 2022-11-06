<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita699e0b0c05e351f6f775ee55ba49833
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Src\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Src\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInita699e0b0c05e351f6f775ee55ba49833::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita699e0b0c05e351f6f775ee55ba49833::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita699e0b0c05e351f6f775ee55ba49833::$classMap;

        }, null, ClassLoader::class);
    }
}