<?php
class AnimalFactory 
{
    public static function create($type): animal
    {
        if($type == "tiger") {
            return new tiger;
        }else if($type == "cat"){
            return new cat;
        }else if($type == "dog"){
            return new dog;
        }
    }
}