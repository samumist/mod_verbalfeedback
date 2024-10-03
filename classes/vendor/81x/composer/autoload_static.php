<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb09adac1e675505f480ac5a16d86c6f1
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'Goat1000\\SVGGraph\\' => 18,
        ),
        'D' => 
        array (
            'Dallgoot\\Yaml\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Goat1000\\SVGGraph\\' => 
        array (
            0 => __DIR__ . '/..' . '/goat1000/svggraph',
        ),
        'Dallgoot\\Yaml\\' => 
        array (
            0 => __DIR__ . '/..' . '/dallgoot/yaml/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb09adac1e675505f480ac5a16d86c6f1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb09adac1e675505f480ac5a16d86c6f1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb09adac1e675505f480ac5a16d86c6f1::$classMap;

        }, null, ClassLoader::class);
    }
}
