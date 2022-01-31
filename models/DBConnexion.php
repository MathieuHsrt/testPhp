<?php
require_once 'utils/dbConf.php';

abstract class DBConnexion{
    private static $pdo;

    private static function setBdd(){
        self::$pdo = getPDO();
        self::$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
    }

    protected function getBdd(){
        if(self::$pdo === null){
            self::setBdd();
        }
        return self::$pdo;
    }
}