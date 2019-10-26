<?php

$manager1 = new Employee("bambang" , "manager", "10juta");
$manager2 = new Employee("agus", "manager" , "10juta");
$ob1 = new Employee("qwer", "ob", "1juta");
$ob2 = new Employee("asdf", "ob", "1juta");

//jika terbatas maka di sarankan menggunakan factory, tidak membuat secara manual

$manager1 = EmployeeFactory::createManager("bambang");
$ob1 = EmployeeFactory::createOb("agus");

//contoh lain

$tiger = new tiger();
$cat = new cat();

//menggunakan factory
$tiger = AnimalFactory::create("tiger");
$cat = AnimalFactory::create("cat");
