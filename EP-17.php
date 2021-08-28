<?php

//=========================== magic function __get __set ===========================
class Student{
    protected $name, $age, $class ;
    function __construct($name='', $age='', $class='')
    {
       $this->name = $name;
       $this->age = $age;
       $this->class = $class; 
    }

    function __get($pro) {
     return $this->$pro;
    }
    function __set($pro, $val){
    $this->$pro = $val;
    }

    // function getName($name){
    //    echo $this->name = $name;
    // }
    // function setName($name){
    //     $this->name = $name;
    // }
    // function getAge($Age){
    //    return $this->age = $Age;
    // }
    // function setAge($Age){
    //     $this->age = $Age;
    // }
    // function getClass($Class){
    //    return $this->class = $Class;
    // }
    // function setClass($Class){
    //     $this->class = $Class;
    // }
}

 $stu = new Student("Rahim",16,10);
 
 $stu->name = "Rayhan";
 echo $stu->name;


