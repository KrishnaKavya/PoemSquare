<html>
<head>
	<!--Style Sheet-->
	<link rel="stylesheet" type="text/css" href="js/style.css">
	<!--Jquery Library-->
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<style type="text/css">
.text{
	font-size: 40pt;
	font-weight: bold;
	font-family: 'Oswald', 'sans-serif'; 
	text-align: center;

}
</style>



<?php

function displayText($arg){
$myfile = fopen($arg, "r") or die("Unable to open file!");
echo "<br>";
$text=fread($myfile,filesize($arg));
 echo "<div class=\"text\">$text</div>";
fclose($myfile);
}


function displayImage($path){

echo "<img src='$path' height=400px width=400px>";
}

function displayVideo($path, $id,$close, $videoid){
echo "<video id='$videoid' controls>
<source src='$path' type='video/mp4'>Your browser does not support the video tag.</video>";
echo "<script>

	$('#$id').click(function(){
	document.getElementById('$videoid').play();
 	
      });</script>";

echo "<script>

		$('#$close').click(function(){
 	document.getElementById('$videoid').pause();

      });</script>";
}

function displayAudio($path,$id,$close){
echo "<audio id='audio' controls>
<source src='$path' type='audio/ogg'>
Your browser does not support the audio element.
</audio>";
echo "<script>$('#$id').click(function(){
 	document.getElementById('audio').play();
      });</script>";

echo "<script>$('#$close').click(function(){
 	document.getElementById('audio').pause();
      });</script>";
}

function deleteTile(){
echo "<script>alert('Testing')</script>";
}

?>

</html>