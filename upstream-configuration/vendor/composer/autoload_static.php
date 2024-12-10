<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitba11bd0b81c3d4fa9b8c25ee3eb404e5
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitba11bd0b81c3d4fa9b8c25ee3eb404e5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitba11bd0b81c3d4fa9b8c25ee3eb404e5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitba11bd0b81c3d4fa9b8c25ee3eb404e5::$classMap;

        }, null, ClassLoader::class);
    }
}
