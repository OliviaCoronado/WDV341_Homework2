<?php 
    require 'Event.php';
    $eventObject = new Event(); 
    $outputObj = [];  

    require 'dbConnect.php';   


    try{
        $sql = "SELECT events_id, events_name,events_description,events_presenter,events_date,events_times FROM wdv341_events" ; 
        $stmt = $conn->prepare($sql);                            
        $stmt->execute();              

        //$result = $stmt->fetch(PDO::FETCH_ASSOC); 


        foreach($stmt->fetchAll(PDO::FETCH_ASSOC) as $row){ 

            $eventObject = new Event();
            
            $eventObject->setEventId( $row['events_id'] );
            $eventObject->setEventName( $row['events_name'] );
            $eventObject->setEventDescription( $row['events_description'] );
            $eventObject->setEventPresenter( $row['events_presenter'] );
            $eventObject->setEventDate( $row['events_date'] );
            $eventObject->setEventTime( $row['events_times'] );

            array_push( $outputObj, $eventObject) ; 
        }//End of foreach

        json_encode ($outputObj);

    } //end of try
 

    catch(PDOException $e){ 
        echo "Errors: " . $e->getMessage();
    }//end of catch

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
<h1> WDV341 - Intro PHP </h1>
<h3> 9-1: PHP-JSON Event Object </h3>
<?php echo json_encode ($outputObj); ?>



        
    </body>
</html>