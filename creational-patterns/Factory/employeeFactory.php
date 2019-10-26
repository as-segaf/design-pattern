<?php
class EmployeeFactory
{
    static function createManager($name): Employee
    {
        return new Employee($name, "manager", "10juta");
    }

    static function createOb ($name): Employee
    {
        return new Employee($name , "ob", "1juta");
    }
}