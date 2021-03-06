<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8c3253ad58d462db6795f8b0fe27551f
{
    public static $files = array (
        '70c2cc8e471afe501c2cdffcff4501b1' => __DIR__ . '/../..' . '/common/function.php',
        'b0bb28d4fd1217fce1b0755b3211f6a6' => __DIR__ . '/../..' . '/common/helper.php',
    );

    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Input' => __DIR__ . '/../..' . '/lib/Input.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8c3253ad58d462db6795f8b0fe27551f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8c3253ad58d462db6795f8b0fe27551f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8c3253ad58d462db6795f8b0fe27551f::$classMap;

        }, null, ClassLoader::class);
    }
}
