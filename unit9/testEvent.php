<?php 
    //test the Event class

    require 'Event.php';    //use required because if it don't work then nothing really matters on the page
    
    //create an Event object
    $newEvent = new Event();    //shows if we have access to file - shows nothing means it WORKED!
/**/ 
    //test name setter
    $newEvent -> setEventId("WDV341"); 
    //test name getter
    echo $newEvent->getEventId();
/*
    $newEvent -> setEventName("WDV341"); 
    echo $newEvent->getEventName();

    $newEvent -> setEventDescription("WDV341"); 
    echo $newEvent->getEventDescription();

    $newEvent -> setEventPresenter("WDV341"); 
    echo $newEvent->getEventPresenter();

    $newEvent -> setEventDate("WDV341"); 
    echo $newEvent->getEventDate();

    $newEvent -> setEventTime("WDV341"); 
    echo $newEvent->getEventTime();
*/



?>