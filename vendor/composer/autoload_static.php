<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit83d02e91c8cbc886c800390e04edb3aa
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Proekt\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Proekt\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Steampixel' => 
            array (
                0 => __DIR__ . '/..' . '/steampixel/simple-php-router/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit83d02e91c8cbc886c800390e04edb3aa::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit83d02e91c8cbc886c800390e04edb3aa::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit83d02e91c8cbc886c800390e04edb3aa::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit83d02e91c8cbc886c800390e04edb3aa::$classMap;

        }, null, ClassLoader::class);
    }
}
