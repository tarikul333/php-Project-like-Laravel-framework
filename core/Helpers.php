<?php

namespace Core;

class Helpers
{
    /**
     * Load environment variables from a .env file
     *
     * @param string $path
     * @return void
     */
    public static function loadEnv(string $path): void
    {
        if (!file_exists($path)) {
            throw new \Exception(".env file not found at $path");
        }

        $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($lines as $line) {
            $line = trim($line);
            if ($line === '' || str_starts_with($line, '#')) {
                continue;
            }

            [$name, $value] = explode('=', $line, 2);
            $name = trim($name);
            $value = trim($value);

            // Avoid overwriting existing env vars
            if (!isset($_ENV[$name])) {
                $_ENV[$name] = $value;
            }
        }
    }

    /**
     * Return the full base path to a file
     *
     * @param string $path
     * @return string
     */
    public static function basePath(string $path = ''): string
    {
        return dirname(__DIR__) . '/' . ltrim($path, '/');
    }
}
