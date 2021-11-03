<?php 
 if(isset($_POST['honeyPot']) && $_POST['honeyPot'] !="")//https://www.youtube.com/watch?v=fdIsENbgBn8
       //Checking to see if honeyPot is filled out
    die();   
    
?>

<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WDV101 Basic Form Handler Example</title>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: #e6d4ec;

}
* {box-sizing: border-box;}

.container {
  margin: auto;
  width:800px;
  border-radius: 5px;
  background-color: #e6d4ec;
  padding: 20px;
  align-items: center;
  border: solid;
}

.containerHeader{
  margin: auto;
  width:1000px;
  border-radius: 5px;
  color: black;
  padding: 20px;
  text-align: center;
 
}
</style>
</head>

<body>
<header class="containerHeader">
<h1>WDV341 Intro PHP</h1>
<h2>10-1: Update Form Handler</h2>
</header>

<div class="container">

    <p>"Thank you, <?php echo $_POST["first_name"] . " " . $_POST["last_name"] . '!"';?></p>
    <p>Subscription Type: <?php echo $_POST["subType"];?></p>
    <p>Recieve Special Offers: <?php echo $_POST["updateCheck"];?></p>
    <p>How you found us: <?php echo $_POST["findUs"];?></p>
    <p>A signup confirmation has been sent to <?php echo $_POST["email"];?>. Thank you for your support!</p>

</div> 
    


</body>
</html>