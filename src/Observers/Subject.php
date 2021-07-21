<?php

class Subject implements SplSubject 
{
     protected $observers;
     protected $data;

     public function __construct()
     {
         $this->observers = new SplObjectStorage();
     } 
      
     public function attach(SplObserver $observer)
     {
         $this->observers->attach($observer);
     }

     public function detach(SplObserver $observer)
     {
         $this->observers->detach($observer);
     }

     public function notify()
     {
         foreach ($this->observers as $observer) {
             $observer->update($this);
         }        
     }

     public function setMessage($data)
     {
        $this->data = $data;        
     }
 
     public function getMessage()
     {
        return $this->data;
     }

}