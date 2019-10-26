<?php

class Employee
{
    private $name;

    private $title;

    private $salary;
    
    public function __construct($name,$title,$salary)
    {
        $this->name = $name;
        $this->title = $title;
        $this->salary = $salary;
    }

    /**
     * Get the value of salary
     */ 
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }
}
