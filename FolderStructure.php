<?php
require_once('mysqli_connect.php'); 
session_start();
echo $_SESSION['ID'];
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
	<script src="js/PoemSquareName.js"></script>
		<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style type="text/css">


#continueButton{
	 background: url('images/continueButton.png') no-repeat;
	 height: 100px;
	 width:330px;
	 border: 0px;
}

html, body, .container-table {
    height: 100%;
}
.container-table {
    display: table;
}
.vertical-center-row {
    display: table-cell;
    vertical-align: middle;
}
#poemSquareName{
	border-radius: 25px;
	border: 2px solid;
}

</style>

<body onload="disableContinue()">
<div class="container container-table">
<div class="row vertical-center-row">
 <div class="text-center col-md-4 col-md-offset-4">


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

		echo "<script> redirect();</script>";

	}
	}else{

		echo "<script> disableContinue(); alreadyExists();</script>"; 
	}

}

?>
</body>
</html>