<?php 

//The Event class used to decribe the properties and methods available to the events 
//from the wdv events table

/*
Structure:
    comments
    properies
    constructor method
    setter/getters
    processing methods
*/

class Event{ //Need to be the same name as file

    //comments
    //properies - (public) access identifer
    public $eventId;
    public $eventName;
    public $eventDescription;
    public $eventPresenter;
    public $eventDate;
    public $eventTime;


    //constructor method

    //setter/getters
    function setEventId($inId){         //apply a value to property
        $this-> eventId = $inId;
    }
    function getEventId(){              //display/pull the value of the properity out of the object so I can use it.
        return $this->eventId;
    }

    function setEventName($inName){
        $this-> eventName = $inName;
    }
    function getEventName(){
        return $this->eventName;
    }

    function setEventDescription($inDescription){
        $this-> eventDescription = $inDescription;
    }
    function getEventDescription(){
        return $this->eventDescription;
    }

    function setEventPresenter($inPresenter){
        $this-> eventPresenter = $inPresenter;
    }
    function getEventPresenter(){
        return $this->eventPresenter;
    }

    function setEventDate($inDate){
        $this-> eventDate = $inDate;
    }
    function getEventDate(){
        return $this->eventDate;
    }

    function setEventTime($inTime){
        $this-> eventTime = $inTime;
    }
    function getEventTime(){
        return $this->eventTime;
    }

    //processing methods

}//end Event




?>