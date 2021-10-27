<?php 
/* "Get data from the database" - this set of steps

Get data from a database
    -load info to datebase --'wdv341'
    -SQL - Select to get(connect to) database  - SQL Select
        prepare statement
        bind the parameters - WHERE 
        execute the statement - (run it!)

        pull data out - use fetch to pull the data from the statement/result object into PHP assoc array
        pull the data fields from teh array row['product_name' or the index/column name]

        place the new 'data' into a HTML area to display   (PHP)echo $....
        do for each piece of data in the record(just one)
            If this works then wel will do this for all the rows(all)       
                foreach loop - access each row to build the output

*/
$productArray = [];     // create array to store products

include 'dbConnect.php';
try{ //Try catch block - have to have to work

$sql = "SELECT  product_name,product_description,product_price,product_status,product_image,product_inStock FROM wdv341_products;";
//prep info ($sql) = pull data from datebase(SELECT)
$stmt = $conn ->prepare($sql);              //prepared statement
//statement object/container )$stmt => connect object($conn)->run a prepare method on $sql
$stmt->execute();
 
$result = $stmt->fetch(PDO::FETCH_ASSOC); // $result is an Array - fetch only gets a SINGLE row 
$productObj = new stdClass();                       //create generic PHP object
$productObj->product_Name = $result['product_name'];    //add propery to the PHP object
$productObj->product_description = $result['product_description']; 
$productObj->product_price = $result['product_price']; 
$productObj->product_status = $result['product_status']; 
$productObj->product_image = $result['product_image']; 
$productObj->product_inStock = $result['product_inStock'];

//echo $productObj->product_name;
//$productJSON = json_encode($productObj);    //convert PHP object into a JSON object.
//echo $productJSON;

array_push($productArray, $productObj); //add first product to array --PHP format still

foreach($stmt->fetchAll(PDO::FETCH_ASSOC) as $result){
//PHP JSON Object
    $productObj = new stdClass();                       //create generic PHP object
    $productObj->product_Name = $result['product_name'];    //add propery to the PHP object
    $productObj->product_description = $result['product_description']; 
    $productObj->product_price = $result['product_price']; 
    $productObj->product_status = $result['product_status']; 
    $productObj->product_image = $result['product_image']; 
    $productObj->product_inStock = $result['product_inStock']; 
//echo $productObj; //doesn't work still php object
//echo $productObj->product_Name; //WORKS

//$projectJSON = json_encode($productObj); // PHP object turns into JSON object

//echo $projectJSON; // Send results back to calling program //sends to response object

array_push($productArray, $productObj); //add first product to array  --Now you have an array of objects in PHP format

        }//end of forEach 


       //echo $productArray; //--produced an error
       $productArrayJSON = json_encode($productArray);  //Turn PHP object in to JSON
       echo $productArrayJSON;  //returns JSON formatted array of objects

}//end of try{}

catch(PDOException $e){
    echo "Errors: " . $e->getMessage(); //$result is an array
}//catch ends






?>