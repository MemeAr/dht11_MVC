<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitec3f513a859bdcb51fcfccfb4454b627
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MéméMya\\Dht11_MVC\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MéméMya\\Dht11_MVC\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitec3f513a859bdcb51fcfccfb4454b627::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitec3f513a859bdcb51fcfccfb4454b627::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
