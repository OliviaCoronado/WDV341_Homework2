<?php

//Get the id of the record we just entered. We are going to use a GET parameter.
//Access the database to ge the record we just entered
//Use the information on thi spage to personalize the confirmation message

$eventId = $_GET['eventId'];    //get the parameter from the URL GET name value pair
echo "<h3> You Entered a new Record with an id of $eventId. We will look that info up from the database and display it to you.";

//The plan
    //-connect to database
    //-create the SQL statement. -using SELECT with WHERE clause
    //-prepare the SQL statement
    //-bind parametters into the prepared statement
    //-execute the prepared statement
    //-fetch the row from the statement object into a php associative array - on inputEvent.php
    //-display the fields on the page as needed.  

    try{
 
    require 'dbConnect.php';   //-connect to database

    $sql = "SELECT events_name, events_description, events_presenter, events_date, events_times FROM wdv341_events WHERE events_id=:eventId";   //-create the SQL statement. -using SELECT with WHERE clause
    $stmt = $conn->prepare($sql);     //-prepare the SQL statement 
    $stmt->bindParam(':eventId' ,$eventId);    //-bind parametters into the prepared statement

    $stmt->execute(); //-execute the prepared statement

    echo "Works so far!!";  //Check if it works

    $eventRecord = $stmt->fetch(PDO::FETCH_ASSOC);
    //echo $eventRecord['events_name'];
    //echo $eventRecord['events_description'];


    }//end of try

    catch(PDOException $e)
    {
        $message = "There has been a problem. The system administrator has been contacted. Please try again later.";

        error_log($e->getMessage());			//Delivers a developer defined error message to the PHP log file at c:\xampp/php\logs\php_error_log
        error_log(var_dump(debug_backtrace()));
    
        //Clean up any variables or connections that have been left hanging by this error.		
    
        //header('Location: files/505_error_response_page.php');	//sends control to a User friendly page					
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name=viewpoint content="width=device=width, initial-scale=1.0">
        <title> Document</title>

    </head>

    <body>

    <h1>WDV341 Events Input Response Page</h1>
    <h2>Your Event has been submitted.</h2>

    <p>Event Name: <?php echo $eventRecord['events_name']; ?></p>   <!-- display the fields on the page as needed.-->
    <p>Event Description: <?php echo $eventRecord['events_description']; ?></p>  <!-- display the fields on the page as needed.-->
    <p>Event Description: <?php echo $eventRecord['events_presenter']; ?></p> <!-- display the fields on the page as needed.-->

    <p>Event Description: <?php echo $eventRecord['events_date']; ?></p>
    <p>Event Description: <?php echo $eventRecord['events_times']; ?></p>  
    </body>
</html>