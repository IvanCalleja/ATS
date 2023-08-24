<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit1ce923394a59dd218557c4560f1dc4da
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

        spl_autoload_register(array('ComposerAutoloaderInit1ce923394a59dd218557c4560f1dc4da', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit1ce923394a59dd218557c4560f1dc4da', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit1ce923394a59dd218557c4560f1dc4da::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
