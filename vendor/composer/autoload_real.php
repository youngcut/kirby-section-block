<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInita6ed7f11e77e16e391a6ead5be98cf34
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

        spl_autoload_register(array('ComposerAutoloaderInita6ed7f11e77e16e391a6ead5be98cf34', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInita6ed7f11e77e16e391a6ead5be98cf34', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInita6ed7f11e77e16e391a6ead5be98cf34::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
