<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WDV101 Basic Form Handler Example</title>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-image: url("frontpage_background.jpg");
}
* {box-sizing: border-box;}

.container {
  margin: auto;
  width:800px;
  border-radius: 5px;
  background-color: #e6d4ec;
  padding: 20px;
  align-items: center;
}

.containerHeader{
  margin: auto;
  width:1000px;
  border-radius: 5px;
  color: white;
  padding: 20px;
  text-align: center;
 
}
</style>
</head>

<body>
<header class="containerHeader">
<h1>WDV101 Intro HTML and CSS</h1>
<h2>UNIT 3 Forms - Lesson 2 Server Side Processes</h2>
</header>

<!--
	-variable firstName 
	-variable emailAddress
	-radio buttons - academicStanding
		-Values:
			-High School
			-Freshman
			-Sophomore
	-selectMajor - dropdown -acronym for the value attribute
		-Values:
			-Default option
			-Computer Information Systems
			-Graphic Design
			-Web Development
	-2 checkbox
		-Values:
			-Please contact me with program information
			-I would like to contact an program advisor
	?textbox
-->
<div class="container">

<p>Dear, <strong><?php echo $_POST["first_name"];?> </strong></p>
<p>Thank for you for your interest in DMACC. We have you listed as a <strong> <?php echo $_POST["academicStanding"];?> </strong> starting this fall. You have declared<strong> <?php echo $_POST["selectedMajor"]; ?> </strong> as your major. <p>
<p>Based upon your responses we will provide the following information in our confirmation email to you at<strong> <?php echo $_POST["email_address"];?></strong>. </p>
<p><strong><em><?php echo $_POST["contact"];?></em></strong></p><br>



<p>You have shared the following comments which we will review:</p>
<p><strong> <?php echo $_POST["comment"];?> </strong></p>
<div>

</body>
</html>
