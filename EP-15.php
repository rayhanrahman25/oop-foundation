<?php
// ============================= static private/public/protected variable ===================
class X{
    protected static $name;
    static function a(){
        echo "Hi Form X\n";
    }
}
class Y extends X{
    static function b(){
        self::$name = "Hello This is Z";
        echo self::$name."\n";
        parent::a();
        echo "Hi Form Y\n";
    }
}

Y::b();