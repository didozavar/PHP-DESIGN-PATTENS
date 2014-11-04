<?php
/**
 * Created by PhpStorm.
 * User: DianAndreev
 * Date: 11/4/2014
 * Time: 8:51 PM
 */

namespace Singleton;


class SingletonClass
{
    private $value;

    private static $instance = null;

    public static function getInstance()
    {
        if(self::$instance === null)
        {
            self::$instance = new SingletonClass();
        }
        return self::$instance;
    }

    private function __construct()
    {
        //now we cant create instance of this class with NEW keyword
    }

    private function __clone()
    {
        //this is called when someone is trying to copy instance of this object
        //return new self;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

} 