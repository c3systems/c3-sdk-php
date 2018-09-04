<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd15f726da20f026e794c66da00f9643b
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Brick\\Math\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Brick\\Math\\' => 
        array (
            0 => __DIR__ . '/..' . '/brick/math/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'E' => 
        array (
            'Evenement' => 
            array (
                0 => __DIR__ . '/..' . '/evenement/evenement/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd15f726da20f026e794c66da00f9643b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd15f726da20f026e794c66da00f9643b::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitd15f726da20f026e794c66da00f9643b::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
