<?php
/**
 * Created by Maus 30.04.2019 18:48 mygomel@gmail.com
 */

class View
{
    protected $data = [];

    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function __get($name)
    {
        return $this->data[$name] ?? null;
    }

    public function __isset($name)
    {
        return isset($this->data[$name]);
    }

    public function render($template)
    {
        require __DIR__."/../templates/".$template.".php";
    }
}