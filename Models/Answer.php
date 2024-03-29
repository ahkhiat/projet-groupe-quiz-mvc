<?php

class Answer extends Model
{
    protected $bd;

    private static $instance=null;

    public static function get_model()
    {

        if(is_null(self::$instance))
        {
            self::$instance=new Answer();
        }
        return self::$instance;
    }
    
    protected function __construct() {
        parent::__construct(); 
    }



}