<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit71b052ce1977aed61a13084332800ab8
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPImageWorkshop\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPImageWorkshop\\' => 
        array (
            0 => __DIR__ . '/..' . '/sybio/image-workshop/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit71b052ce1977aed61a13084332800ab8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit71b052ce1977aed61a13084332800ab8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit71b052ce1977aed61a13084332800ab8::$classMap;

        }, null, ClassLoader::class);
    }
}
