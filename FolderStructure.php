<!--

The Folder Structure requests for the Mediator to assign a name of the Poem Square he is creating.
Showcase is the Master folder that stores all the PoemSquares created by different Mediators. 

-->

<!-- 

mysqli_connect.php Estalishes the connection with the PoemSquare Database. 
The sessions contains all the details about the Mediator. 
Showcase is the Master folder that stores all the PoemSquares. 
Every Mediator has his unique Folder in the Master Folder represented by his user ID. 
We check if the Directory already exists. In the Other case we create a unique directory for the Mediator. 

-->
<?php
require_once('mysqli_connect.php'); 
session_start();
$userID=$_SESSION['ID'];
$userName=$_SESSION['user_login'];
$DirectoryPath='ShowCase/'.$userID;
if(!is_dir($DirectoryPath)){
	mkdir($DirectoryPath, 0777, true);
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Create PoemSquare</title>
	<!-- java Script file for validation of PoemSquare Name. -->
	<script src="js/PoemSquareName.js"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--CSS File-->
	<link rel="stylesheet" type="text/css" href="style/FolderStructureStyle.css">
</head>

<!--The disableContinue Method Diables the Continue button on the page when the page is loaded.-->
<body onload="disableContinue()">
<div class="container container-table">
<div class="row vertical-center-row">
 <div class="text-center col-md-4 col-md-offset-4">

<!--The UserName is feteched from the session variable and is displayed.-->
<!-- 

The Mediator enters the name he wishes to give to the poemSquare in Text Box. 
When the Mediator enters the Name. Few conditions are checked. 
•	The name of PoemSquare cannot be Empty.
•	It can have alpha numeric values. 
•	It cannot be more than 15 characters

If Any of the above conditions are not met. Alert message is displayed to the Mediator. 

Once the naming is given successfully, The Name of the PoemSquare the mediator creates is added to the session variables. 

Once All the conditions are satisfied, The Continue button is enabled. 
-->
<h1> Welcome <?php echo $userName ?> </h1>
<h6> <b>Instructions:</b> Give a name to the PoemSquare. The maximum length of characters can be 10. </h6>
<form method="post" >
	Name:  <input type="text" name="PoemSquareName" id="poemSquareName" onblur ="validateName()" /> 
	
	<label id="alert"></label><br>
	<label id="alreadyExists"></label>
	<br>
	<input type="submit" name="submitName" id="continueButton" value=" " >
	<br><br>
</form>
</div>
</div>
</div>

<!-- 

Once the Mediator Enters the name and clicks of the continue button the isset is set to true.

The table poemSquareNames in the databasekeeps track of all the PoemSquares created by the mediator. 
The Name is inserted into the Table. The response variable returns false when the Mediator already has the PoemSquare by his name. Then an alert is given to the Mediator requesting for a new Name. 

When the Name satisfies all the conditions and is inserted into PoemSquareNames. 
The Following steps are performed.
•	A table is created in the database with the name given By the Mediator having the Fields Tile_ID, Image, Audio, Video, 		Text Fields. 
•	9 Rows are inserted into the Table with the Tile_ID 1,2,3, ...,9 and Null in all the other Fields. 
•	A Folder Structure is Created in the Showcase Folder( Master Folder) 
•	Every Mediator has his own Folder in the Master Folder. 
•	In the Mediator's Folder A folder is created with the name of the PoemSquare entered. 
•	Inside the new Folder created 9 folders are created with having the names Tile 1, Tile 2.... Tile 9. 

-->
<?php
if(isset($_POST['submitName'])){

	$PoemSquareNameEntered=$_POST['PoemSquareName'];
	
	$query = "INSERT INTO poemSquareNames (ID,PoemSquareName)
			  VALUES ('$userID', '$PoemSquareNameEntered')";
	$response = @mysqli_query($dbc, $query);
	if($response){
		$newPoemSquareFolderPath=$DirectoryPath."/".$PoemSquareNameEntered;
		mkdir($newPoemSquareFolderPath,0777,true);

		$TilePath=$newPoemSquareFolderPath."/"."Tile";
		$_SESSION['TilePath']=$TilePath;

		for($i=1;$i<10;$i++){
			mkdir($TilePath.$i, 0777,true);
		}
		
		//Creating PoemSquare table in the database.

		 $createTable="CREATE TABLE `poemsquare`.`$PoemSquareNameEntered` ( `Tile_ID` INT NOT NULL , `Text_File` VARCHAR(1000) NULL , `Image` VARCHAR(30) NULL , `Video` VARCHAR(30) NULL , `Audio` VARCHAR(30) NULL , PRIMARY KEY (`Tile_ID`));";

		 $createPoemSquare = @mysqli_query($dbc, $createTable);
		 if($createPoemSquare){
		 	$_SESSION['TableName']=$PoemSquareNameEntered;

		$insertQuery="INSERT INTO `$PoemSquareNameEntered` (`Tile_ID`, `Text_File`, `Image`, `Video`, `Audio`) VALUES ('1', NULL, NULL, NULL, NULL), ('2', NULL, NULL, NULL, NULL), ('3', NULL, NULL, NULL, NULL), ('4', NULL, NULL, NULL, NULL), ('5', NULL, NULL, NULL, NULL), ('6', NULL, NULL, NULL, NULL), ('7', NULL, NULL, NULL, NULL), ('8', NULL, NULL, NULL, NULL), ('9', NULL, NULL, NULL, NULL);";

		$insertData=  @mysqli_query($dbc, $insertQuery);

		// Once the process is done The page Folder structure page is redirected to PoemSquare Page. 
		echo "<script> redirect();</script>";
	}
	}else{

		// When the conditions are not met the Mediator is given an alert and is asked to give a new name. 
		echo "<script> disableContinue(); alreadyExists();</script>"; 
	}
}
?>
</body>
</html>