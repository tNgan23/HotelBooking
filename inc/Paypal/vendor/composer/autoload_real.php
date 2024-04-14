<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit2668ad7f0dc9a2dcc39d0bd88fd9ea5b
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit2668ad7f0dc9a2dcc39d0bd88fd9ea5b', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit2668ad7f0dc9a2dcc39d0bd88fd9ea5b', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit2668ad7f0dc9a2dcc39d0bd88fd9ea5b::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
