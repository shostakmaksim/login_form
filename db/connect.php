<?php

/* Singltone realization */

class DBConnect {
    
    private $link;
    private static $_instance = null;
    public static function getInstance() {
        if(is_null(self::$_instance)){
            self::$_instance = new self();
        }
        return self::$_instance;
    }
    
    private function __construct() {
        // приватный конструктор ограничивает реализацию getInstance()
        $this->link = mysqli_connect('localhost', 'mysql', 'mysql', 'service');
        
        if (!$this->link) {
            echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
            exit;
        }
    }
    private function __clone() {
        // ограничивает клонирование объекта
    }
    private function __wakeup() {
        // ограничивает deserialyze object;
    }
    
    public function getLink(){
        return $this->link;
    }
    
}