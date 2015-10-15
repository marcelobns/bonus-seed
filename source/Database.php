<?php
/**
 * @author PHP Bonus Framework
 */
namespace Anotherwise\Bonus;

class Database {
    public static $schema = 'default';
    public static function connection(){
        $connections = array(
            'default' => array(
                'driver'    => 'mysql',
                'host'      => 'localhost',
                'database'  => 'bonus',
                'username'  => 'root',
                'password'  => '',
                'charset'   => 'utf8',
                'collation' => 'utf8_unicode_ci',
                'prefix'    => ''
            ),
            'test' => array(
                'driver'    => 'mysql',
                'host'      => 'localhost',
                'database'  => 'bonus',
                'username'  => 'root',
                'password'  => '',
                'charset'   => 'utf8',
                'collation' => 'utf8_unicode_ci',
                'prefix'    => ''
            )
        );
        return $connections[$schema];
    }
}
