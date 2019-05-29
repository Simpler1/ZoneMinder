<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit254e25e69fe049d603f41f5fd853ef2b
{
    public static $files = array (
        'e40631d46120a9c38ea139981f8dab26' => __DIR__ . '/..' . '/ircmaxell/password-compat/lib/password.php',
    );

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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit254e25e69fe049d603f41f5fd853ef2b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit254e25e69fe049d603f41f5fd853ef2b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}