<?php

namespace MokiniaiApp;

class Mokiniai{
    public $name;
    public $surname;
    public $id;
    public $date;
    public $marks;
    public $average;
    public $count;
    public $class;


    //setter
    public function __construct($class ,$name, $surname, $marks)
    {
        $this->class = $class;
        $this->name = $name;
        $this->surname = $surname;
        $this->marks = $marks;
        $this->id =rand(1000, 9999);
        $this->date = date("Y/m/d");
        $this->count = 0;
        foreach($this->marks as $mark){
            $this->count += 1;
            $this->average += $mark;
        }
        $this->average = $this->average / $this->count;

    }

    //getter
    public function showStudents(){
        return [
            $this->class,
            $this->id,
            $this->name,
            $this->surname,
            $this->average,
            $this->date
        ];
    }
}