<?php

class N {
    public static $database;
    public static $DIR = "/fadgram";
    public static $GMAIL = "abc@gmail.com";
    public static $GMAIL_PASSWORD = "abc";

    public static function _DB() {
        try {
            self::$database = new PDO('mysql:host=localhost;dbname=fadgram;charset=utf8mb4', 'root', '');
            self::$database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return self::$database;
    }
}

?>
