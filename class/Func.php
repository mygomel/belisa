<?php
/**
 * Created by Maus 01.05.2019 15:25 mygomel@gmail.com
 */


class Func
{
    public static function check(array $arr)
    {
        foreach ($arr as $param) {
            if (!isset($_REQUEST[$param])) exit('Error: missing parameters');
        }
    }

    public static function accessUser()
    {
        if (!isset($_SESSION['level']) OR $_SESSION['level']<1) {
            exit("Access denied");
        }
    }

    public static function accessAdmin()
    {
        if (!isset($_SESSION['level']) OR $_SESSION['level']<5) {
            exit("Access denied");
        }
    }
}