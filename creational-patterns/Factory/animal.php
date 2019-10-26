<?php
interface animal
{
    function speak();
}

class tiger implements animal
{
    function speak()
    {
        echo "roar!!!";
    }
}
    
class cat implements animal
{
    function speak()
    {
        echo "meow!!!";
    }
}

class dog implements animal
{
    function speak()
    {
        echo "woof!!!";
    }
}