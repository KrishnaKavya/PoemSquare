<!--

The Display.php has the methods used to display the audio, video, Image and Text.

-->
<html>
<head>
	<!--Style Sheet-->
	<link rel="stylesheet" type="text/css" href="js/style.css">
	<link rel="stylesheet" type="text/css" href="style/DisplayStyle.css">
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


<!--

The displayText method gets the argument of the file path. 
The Text file is opened and the content is fetched and is read in the file handler. 
The text is displayed in the Screen and the file handler is closed. 
-->
<?php

function displayText($arg){
$myfile = fopen($arg, "r") or die("Unable to open file!");
echo "<br>";
$text=fread($myfile,filesize($arg));
 echo "<div class=\"text\">$text</div>";
fclose($myfile);
}


/* 

The displayImage gets the path of the image along with the name of the image. 
The image is added to the page. 

*/
function displayImage($path){

echo "<img src='$path' height=400px width=400px>";
}

/*

The displayVideo method displays the video 
$path- has the path of the Video in the directory. 
$id- ID of the video in the Tile. 
$close- Close ID of the Tile.
$video Id- ID of the video. 

The Video is added to the video tag. 
The Video starts playing as soon as the mediator clicks on the Play button of the Tile. 
The Video Stops Playing once the Mediator closes the Playing Pop Up. 

*/
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


/*

display audio method is used to display the audio 

$path- has the path of the Audio in the directory. 
$id- ID of the Audio in the Tile. 
$close- Close ID of the Tile.
$audio Id- ID of the audio. 

The audio is added to the audio tag. 
The audio starts playing as soon as the mediator clicks on the Play button of the Tile. 
The audio Stops Playing once the Mediator closes the Playing Pop Up. 

*/
function displayAudio($path,$id,$close, $audioid){
echo "<audio id='$audioid' controls>
<source src='$path' type='audio/ogg'>
Your browser does not support the audio element.
</audio>";
echo "<script>$('#$id').click(function(){
 	document.getElementById('$audioid').play();
      });</script>";

echo "<script>$('#$close').click(function(){
 	document.getElementById('$audioid').pause();
      });</script>";
}
?>

</html>