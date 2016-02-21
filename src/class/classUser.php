<?php
/**
 * Created by PhpStorm.
 * User: yura
 * Date: 21.02.2016
 * Time: 14:25
 */
class user
{
    private $name;
    private $age;

    function __construct($name = false,$age = false)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }
    public function getAge()
    {
        return $this->age ;
    }
    public function __sleep()
    {
        echo "<br> ok serialize";
        return ['name','age'];
    }
    public function __wakeup() {
        echo '<br> unserialize';
    }

}