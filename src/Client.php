<?php

class Client
{

    public function __construct()
    {
        $sub = new Subject();
        $sub->setMessage("Hi");
        $obj1 = new Observer();
        $obj2 = new Observer();
 
        $sub->attach($obj1);
        $sub->attach($obj2);
        //$sub->detach($obj1);
        $sub->notify();
        echo "<br>"; 
    }

}