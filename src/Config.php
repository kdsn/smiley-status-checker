<?php

namespace Src;

require_once __DIR__ . '/../vendor/autoload.php';

use Dotenv\Dotenv;

class Config
{
    private static $config;

    public static function load()
    {
        if (self::$config === null) {
            $dotenv = Dotenv::createImmutable(__DIR__ . '/../');
            $dotenv->load();
            self::$config = $_ENV;
        }
    }

    public static function get($key)
    {
        self::load();
        return self::$config[$key] ?? null;
    }

    public static function getDatabaseConfig()
    {
        self::load();
        if (self::isProduction()) {
            return [
                'host' => self::get('PRODUCTION_DB_HOST'),
                'name' => self::get('PRODUCTION_DB_NAME'),
                'user' => self::get('PRODUCTION_DB_USER'),
                'pass' => self::get('PRODUCTION_DB_PASS')
            ];
        } else {
            return [
                'host' => self::get('DB_HOST'),
                'name' => self::get('DB_NAME'),
                'user' => self::get('DB_USER'),
                'pass' => self::get('DB_PASS')
            ];
        }
    }

    public static function isProduction()
    {
        return isset($_SERVER['ENV']) && $_SERVER['ENV'] === 'production';
    }
}
