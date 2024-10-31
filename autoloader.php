<?php
class Autoloader
{
  public static function register()
  {
    spl_autoload_register(function ($class) {
      $directory = new RecursiveDirectoryIterator(__DIR__ . "/src/");
      $iterator = new RecursiveIteratorIterator($directory);
      $paths = new RegexIterator($iterator, "/^.+\.php$/i", RecursiveRegexIterator::GET_MATCH);

      foreach ($paths as $path) {
        require_once $path[0];
      }
    });
  }
}