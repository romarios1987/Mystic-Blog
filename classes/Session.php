<?php

/**
 * Class Session
 */
class Session
{
    public static function init()
    {
        session_start();
    }

    /**
     * @param $key
     * @param $val
     */
    public static function set($key, $val)
    {
        $_SESSION['$key'] = $val;
    }

    /**
     * @param $key
     * @return bool
     */
    public static function get($key)
    {
        if (isset($_SESSION['$key'])) {
            return $_SESSION['$key'];
        } else {
            return false;
        }
    }

    public static function checkSession()
    {
        self::init();
        if (self::get("login") == false) {
            self::destroy();
            header("Location: login.php");
        }
    }

    public static function destroy()
    {
        session_destroy();
        header("Location: login.php");
    }
}























