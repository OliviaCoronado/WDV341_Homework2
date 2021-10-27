<?php 
    include 'dbConnect.php';

try{
    $sql = "SELECT * FROM wdv341_events WHERE events_id=2" ; //saying - select (*ALL) the Columns from wdv341_event table   
                                          //best not to use the * - to much memory used       
    $stmt = $conn->prepare($sql);   //prepare the statement
                                    //connect to prepare(make in to sql)???
    $stmt->execute();           //the result Object is sitll in database format


 /*  Works but works better with fetchAll() 
    $result = $stmt->fetch(PDO::FETCH_ASSOC); //fetch - only get on row
        echo $result['events_id'];
        echo $result['wdv341_events_name'];
        echo $result['events_description'];

//fetchAll - all rows so need foreach - goes through only once //row[the index/column name]
    foreach($stmt->fetchAll(PDO::FETCH_ASSOC) as $row){ 
        echo "<p>";
        echo $row['events_name'];
        echo "<p>";
        echo $row['events_id'];
        echo "<p>";
        echo $row['events_description'];
        echo "<p>"; 

    }*/ 

}

catch(PDOException $e){
    echo "Errors: " . $e->getMessage();
}


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="example of meta">
    <meta name=viewpoint content="width=device=width, initial-scale=1.0">
    <title> WDV321 Intro Javascript</title>
    <style> 
    body{
  background: #c8bbc8;
}
.table {
    
    display: grid;
    grid-template-columns: 1fr 1fr 60%; 
    max-width: 600px;
    padding: 10px;
    background-color: #476930;
}

.table div {
  margin: 2px;
  background: #86B049;
  padding: 5px;
}

    </style>    

    </head>
    <body>
    <h1> All Events for the Events Table</h1>
    <h2> WHERE events_id=2 </h2>

    <?php foreach($stmt->fetchAll(PDO::FETCH_ASSOC) as $row){ 

?> 

<div class="table">
  <div><?php echo $row['events_name']; ?></div>
  <div><?php  echo $row['events_id']; ?></div>
  <div><?php echo $row['events_description']; ?> </div> 
</div>

<?php 
}    
?>
    </body>
</html>