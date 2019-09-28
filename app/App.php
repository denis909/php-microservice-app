<?php
/**
 * @license MIT
 * @author denis909
 */
use App\Config\Local\Db as DbConfig;
use App\Config\Local\View as ViewConfig;

use App\Components\Db;
use App\Components\DbMySQLiAdapter;
use App\Components\View;

class App extends \App\Components\ServiceLocator
{

    public static function view()
    {
        return static::getService(__FUNCTION__, function() {

            $config = new ViewConfig;

            $view = new View($config);

            return $view;
        });
    }

    public static function db()
    {
        return static::getService(__FUNCTION__, function() {
            
            $config = new DbConfig;

            $adapter = new DbMySQLiAdapter($config);

            $db = new Db($adapter);

            return $db;
        });
    }

}