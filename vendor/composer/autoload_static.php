<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit86b36d224a736fe7e96a2a19d5bd8709
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'sgoendoer\\json\\' => 15,
            'sgoendoer\\esquery\\' => 18,
            'sgoendoer\\Sonic\\' => 16,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
        'L' => 
        array (
            'Lcobucci\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'sgoendoer\\json\\' => 
        array (
            0 => __DIR__ . '/..' . '/sgoendoer/json/src',
        ),
        'sgoendoer\\esquery\\' => 
        array (
            0 => __DIR__ . '/..' . '/sgoendoer/esquery/src',
        ),
        'sgoendoer\\Sonic\\' => 
        array (
            0 => __DIR__ . '/..' . '/sgoendoer/sonic/src',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
        'Lcobucci\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/lcobucci/jwt/src',
        ),
    );

    public static $classMap = array (
        'Jsv4' => __DIR__ . '/..' . '/geraintluff/jsv4/jsv4.php',
        'Jsv4Error' => __DIR__ . '/..' . '/geraintluff/jsv4/jsv4.php',
        'SchemaStore' => __DIR__ . '/..' . '/geraintluff/jsv4/schema-store.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit86b36d224a736fe7e96a2a19d5bd8709::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit86b36d224a736fe7e96a2a19d5bd8709::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit86b36d224a736fe7e96a2a19d5bd8709::$classMap;

        }, null, ClassLoader::class);
    }
}
