<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb47d7fa6e05ce6f08bbb08ab012c1422
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb47d7fa6e05ce6f08bbb08ab012c1422::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb47d7fa6e05ce6f08bbb08ab012c1422::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb47d7fa6e05ce6f08bbb08ab012c1422::$classMap;

        }, null, ClassLoader::class);
    }
}
