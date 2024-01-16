<?php

spl_autoload_register(static function ($class) {
    $namespace = 'heyaender\\LaraExcelintar\\';
    if (0 === strpos($class, $namespace)) {
        include __DIR__ . '/LaraExcelintar/' . str_replace($namespace, '', $class) . '.php';
    }
});

// EOF