<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5b9369fcf0fff595cc17ec4907376867
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Rave\\' => 5,
        ),
        'D' => 
        array (
            'Dotenv\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Rave\\' => 
        array (
            0 => __DIR__ . '/..' . '/gladcodes/ravephp/src/Rave',
        ),
        'Dotenv\\' => 
        array (
            0 => __DIR__ . '/..' . '/vlucas/phpdotenv/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'U' => 
        array (
            'Unirest\\' => 
            array (
                0 => __DIR__ . '/..' . '/mashape/unirest-php/src',
            ),
        ),
        'M' => 
        array (
            'Monolog' => 
            array (
                0 => __DIR__ . '/..' . '/monolog/monolog/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5b9369fcf0fff595cc17ec4907376867::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5b9369fcf0fff595cc17ec4907376867::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit5b9369fcf0fff595cc17ec4907376867::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
