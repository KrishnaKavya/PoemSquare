<!--

The poem.php has the Implemetation of the Poem Square activity. 

-->

<?php
require_once('mysqli_connect.php'); 
session_start();
//Testing
$tableName="trail4";

//original
//$tableName=$_SESSION['TableName'];
include "display.php";
?>

<!DOCTYPE html>
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
	<script src="js/Radio.js"></script>
	<script src="js/PoemSquareName.js"></script>
	<script src="js/UploadValidation.js"></script>
	<script src="js/play.js"></script>
	<title>PoemSquare Work Space</title>
</head>
<body onload="disableLink();">

<!--Title-->  
<h1 class="title">PoemSquare</h1>

<!--Instructions-->

<br/><p class="instructions">
<b>Instructions:</b><br>  Select one of the three play modes: manual, slideshow, sparkle.  Select a tile, upload media files, and choose settings.  Add text, if you wish.  Preview.  Repeat the process for each tile you want to play in your PoemSquare.  Delete any tiles you will not use.  Click <sup>"</sup>FINISH.<sup>"</sup>  Play your creation from the PoemSquare Showcase.  For more detailed instructions, print out <sup>"</sup>PoemSquare Instructions <sup>"</sup> in <sup>"</sup>Resources.<sup>"</sup>
</p>
<br>
<!--Div  has poem on the first column and poem square on the second-->
<div class="container-fluid">

<div class="row">
<!--Column 1 Poem -->
<div  class="col-sm-5 col-md-5 col-lg-5">

<p id="left" > 
Black A, white E, red I, green U, blue O - vowels,<br>		
Some day I will open your silent pregnancies:<br>
A, black belt, hairy with burst flies,<br>
Bumbling and buzzing over stinking cruelties,<br>
<br>
Pits of night; E, candour of sand pavilions,<br>
High glacial spears, white kings, trembling Queen Anne's lace;<br>
I, bloody spittle, laughter dribbling from a face<br>
In wild denial or in anger, vermilions;<br>
<br>
U,&#46;&#46;&#46; divine movement of viridian seas,<br>
Peace of pastures animal-strewn, peace of calm lines<br>
Drawn on foreheads worn with heavy alchemies;<br>
<br>
O, supreme Trumpet, harsh with strange stridencies,<br>
Silences traced in angels and astral designs:<br>
O&#46;&#46;&#46;Omega&#46;&#46;&#46;the violet light of His Eyes!<br>

</p>
</div>

<!-- Column 2-->
<div class="col-sm-7 col-md-7 col-lg-7">
<!--Main Container-->
<div class="container-fluid">
<!--First Row-->
<div class="row" align="center">

<!--Tile 1 -->
<div id="Tile" class="col-sm-2">

<!--Title of the tile -->
<div class="TileName">A</div>

<!-- Input Text.-->
<!--Text upload icon Start-->
<input type="radio" name="RadioTile1" id="RadioTile1Text" onchange="enableTile1()" />
<a href="#openTextUpload" id="TextIconTile1">
	<img src="images/textupload.png" class="icon" title="Add Text">
</a>
<!--Text upload icon End-->
<!--Pop up for text upload-->
<div id="openTextUpload" class="modalDialog">
	<div> 
	<a href="#close" title="Close" class="close">
		<img src="images/close.png" class="button">
	</a>
	<h2>Enter Text of Choice</h2>
	<br>
	<form method="post" enctype="multipart/form-data">
	<label id="alert"></label>
	<textarea rows="5" cols="15" id="text_tile1" name="textTile1"></textarea><br>
	<input type="submit" value="Add Text" name="Add_text_Tile1" id="add_text" class="add_text"/>
	</form>
	</div>

	<?php 
	if(isset($_POST['Add_text_Tile1'])){
		$tile_no=1;
		$dataEntered=$_POST['textTile1'];
		//ORiginal
		//$path=$_SESSION['TilePath']."1/Tile1Text.txt";
		//Testing
		$path='Showcase/17/trail4/Tile1Text/Tile1Text.txt';
		$TextFileTile1=fopen($path,"w+");
		file_put_contents($path, "");
		fwrite($TextFileTile1, $dataEntered);
		fclose($TextFileTile1);
		$textUploadTile1="UPDATE $tableName SET Text_File='Tile1Text.txt', Image=NULL, Video=NULL, Audio= NULL where Tile_ID=$tile_no";
		$res=@mysqli_query($dbc, $textUploadTile1);

	}

	?> 
	<!--Close Pop Up when clicked on Add Start-->
	 <script>
 	 $( "#add_text" ).click(function() { $(location).attr('href', '#close');});
 	 </script>
 	 <!--Close Pop Up when clicked on Add Start-->

	
</div>
<!--Pop up for text upload End-->



<!-- Upload Image-->
<!--Image Upload Icon Start -->
<input type="radio" name="RadioTile1" id="RadioTile1Image" onchange="enableTile1()"/>
<a href="#openImageUpload1" id="ImageIconTile1">
	<img src="images/imageupload.png" class="icon" title="Add Image">
</a>
<!--Image Upload Icon End -->
<!-- Pop up for Image Upload Start-->
<div id="openImageUpload1" class="modalDialog">
	<div>
	<a href="#close" title="Close" class="close">
		<img src="images/close.png" class="button">
	</a>
	<h2>Choose an Image</h2>
	<br>
	<form method="post" enctype="multipart/form-data">
	<input type="file" name="image_tile1" accept="image/*"/>
	<input type="submit" value="Add Image" name="Add_image_Tile1" id="add_image"/>
	</form>		
	</div>
	<!--Close Pop Up when clicked on Add Start-->
	 <script>
 	 $( "#add_image" ).click(function() { $(location).attr('href', '#close');});
 	 </script>
 	 <!--Close Pop Up when clicked on Add Start-->
 	 <?php

 	 if(isset($_POST['Add_image_Tile1'])){
 	 	$tile_no=1; 
 	 	$name_file=$_FILES['image_tile1']['name'];
		$tmp_name=$_FILES['image_tile1']['tmp_name'];
		//orginal syntax:
		//$local_image="$_SESSION['TilePath']"."1/$name_file";
		//Testing
		$local_image="ShowCase/17/trail4/Tile1/$name_file";
		move_uploaded_file($tmp_name, $local_image);
		$imageUpload="UPDATE $tableName SET Text_File=NULL, Image='$name_file', Video=NULL, Audio= NULL where Tile_ID=$tile_no";
		$res=@mysqli_query($dbc, $imageUpload);

 	 }
 	 ?>
</div>
<!-- Pop up for Image Upload End-->
<!--Image Upload end-->

<br><br>

<!-- Upload Video -->
<!--Video Upload Icon Start -->
<input type="radio" name="RadioTile1" id="RadioTile1Video" onchange="enableTile1()"/>
<a href="#openVideoUpload1" id="VideoIconTile1">
	<img src="images/videoupload.png" class="icon" title="Add Video">
</a>
<!--Video Upload Icon End -->
<!--Pop up for video upload Start-->
<div id="openVideoUpload1" class="modalDialog">
	<div>
	<a href="#close" title="Close" class="close">
		<img src="images/close.png" class="button">
	</a>
	<h2>Choose a Video </h2>
	<br>
	<form method="post" enctype="multipart/form-data">
	<input type="file" name="uploaded_video" accept="video/*"/>
	<input type="submit" value="Add Video" name="Add_video_Tile1" id="add_video1"/>
	</form>		
	</div>
	
	<!--Close Pop Up when clicked on Add Start-->
	 <script>
 	 $( "#add_video1" ).click(function() { $(location).attr('href', '#close');});
 	 </script>
 	 <!--Close Pop Up when clicked on Add Start-->
	 <?php

 	 if(isset($_POST['Add_video_Tile1'])){
 	 	$tile_no=1; 
 	 	$name_file=$_FILES['uploaded_video']['name'];
		$tmp_name=$_FILES['uploaded_video']['tmp_name'];
		//orginal syntax:
		//$local_video="$_SESSION['TilePath']"."1/$name_file";
		//Testing
		$local_video="ShowCase/17/trail4/Tile1/$name_file";
		move_uploaded_file($tmp_name, $local_video);
		$videoUpload="UPDATE $tableName SET Text_File=NULL, Image=NULL, Video='$name_file', Audio= NULL where Tile_ID=$tile_no";
		mysqli_query($dbc, $videoUpload);
 	 }


 	 ?>
</div>
<!--Video Upload Icon End -->
<!--Video Upload end-->



<!-- Upload Audio -->
<!--Audio upload icon Start-->
<input type="radio" name="RadioTile1" id="RadioTile1Audio" onchange="enableTile1()"/>
<a href="#openAudioUpload1" id="AudioIconTile1">
	<img src="images/audioupload.jpg" class="icon" title="Add Audio">
</a>
<!--Audio upload icon End-->
<br>
<!--Pop up for Audio upload Start-->
<div id="openAudioUpload1" class="modalDialog">
	<div>
	<a href="#close" title="Close" class="close">
		<img src="images/close.png" class="button">
	</a>
	<h2>Choose an Audio</h2>
	<br>
	<form method="post" enctype="multipart/form-data">
	<input type="file" name="uploaded_file" accept="audio/*"/>
	<input type="submit" value="Add Audio" name="Add_audio_Tile1" id="add_audio"/>
	</form>		
	</div>
	<!--Close Pop Up when clicked on Add Start-->
	 <script>
 	 $( "#add_audio" ).click(function() { $(location).attr('href', '#close');});
 	 </script>
 	 <!--Close Pop Up when clicked on Add Start-->

 	 <?php

 	 if(isset($_POST['Add_audio_Tile1'])){
 	 	$tile_no=1; 
 	 	$name_file=$_FILES['uploaded_file']['name'];
		$tmp_name=$_FILES['uploaded_file']['tmp_name'];
		//orginal syntax:
		//$local_audio="$_SESSION['TilePath']"."1/$name_file";
		//Testing
		$local_audio="ShowCase/17/trail4/Tile1/$name_file";
		move_uploaded_file($tmp_name, $local_audio);
		$audioUpload="UPDATE $tableName SET Text_File=NULL, Image=NULL, Video=NULL, Audio= '$name_file' where Tile_ID=$tile_no";
		mysqli_query($dbc, $audioUpload);
 	 }
 	 ?>

</div>
<br>
<!--Pop up for Audio upload end-->
<!--Audio Upload End-->


<!--Play button-->
<a href="#playbutton" id="PlayIConTile1">
	<img src="images/playbutton.png" class="button" title="Play">
</a>
<div id="playbutton" class="modalDialog">
	<div>
	<!--close button-->
	<a href="#close" title="Close" id="close1" class="close">
		<img src="images/close.png" class="button">
	</a>

	<?php
	$close="close1";
	$id="PlayIConTile1";
	$tile_no=1;
	$query="select * from $tableName where Tile_ID=$tile_no";
	$result=mysqli_query($dbc, $query);

	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    $text=$row["Text_File"];
    $imageName=$row['Image'];
    $videoName=$row['Video'];
    $audioName=$row['Audio'];
     if($text!=null){
     	$type1="text";
    	//orginal syntax:
		//$path=$_SESSION['TilePath']."1/Tile1Text.txt";
		//Testing
		$path="ShowCase/17/trail4/Tile1/".$text;
    	displayText($path);
    }else if($imageName!=NULL){
    	$type1="image";
    	//orginal syntax:
		//$path=$_SESSION['TilePath']."1/".$imageName;
		//Testing
		$path="ShowCase/17/trail4/Tile1/".$imageName;
		displayImage($path);
    }else if($videoName!=NULL){
    	$type1="video";
    	$videoid="video1";
    	//orginal syntax:
		//$path=$_SESSION['TilePath']."1/".$videoName;
		//Testing
		$path="ShowCase/17/trail4/Tile1/".$videoName;
		displayVideo($path,$id, $close, $videoid);
    } else if($audioName!=NULL){
    	$type1="audio";
    	$audioid="audio1";
    	//orginal syntax:
		//$path=$_SESSION['TilePath']."1/".$audioName;
		//Testing
		$path="ShowCase/17/trail4/Tile1/".$audioName;
		displayAudio($path,$id,$close, $audioid);
    }else{
    	$type1="empty";
    }
    ?> <input type="hidden" name="type" value="<?=$type1 ?>" id="Tile1Type"/>
<?php 
	
}
}
	?>


	
	</div>
</div>
<!--Play End-->


<!--Delete Button-->

<form method="post" style="display: inline-block;">
<button type=submit" id="DeleteTile1" style="background-color:#ffffff; border:0px;padding:0px" name="Deletedata1">
<img src="images/deletebutton.png" class="button"  title="Delete Tile" id="DeleteIcon1" style="display:block;">
<img src="images/reloadbutton.png" class="reload" id="Del-swap1" style="display:none;"/>
</button>
</form>



<!--Delete and reload tile Function JQuery-->
<script>
$( "#DeleteTile1" ).click(function() {
  $( "#TextIconTile1, #ImageIconTile1, #PlayIConTile1, #AudioIconTile1, #VideoIconTile1, #Del-swap1, #DeleteIcon1, #RadioTile1Text, #RadioTile1Image, #RadioTile1Video, #RadioTile1Audio").toggle();
});
</script>

<?php
	if(isset($_POST['Deletedata1'])){
	$query="UPDATE $tableName SET Text_File=NULL, Image=NULL, Video=NULL, Audio=NULL where Tile_ID=1";
	mysqli_query($dbc, $query);
	}
?>
<!--Delete End-->
<!--End of Tile 1-->
</div>


<!--Tile 2 start -->
<div id="Tile" class="col-sm-2">

<!--Title of the tile -->
<div class="TileName">B</div>

<!-- Input Text.-->
<!--Text upload icon Start-->
<input type="radio" name="RadioTile2" id="RadioTile2Text"  onchange="enableTile2()"/>
<a href="#openTextUpload2"  id="TextIconTile2">
	<img src="images/textupload.png" class="icon" title="Add Text">
</a>
<!--Text upload icon End-->
<!--Pop up for text upload-->
<div id="openTextUpload2" class="modalDialog">
	<div>
	<a href="#close" title="Close" class="close">
		<img src="images/close.png" class="button">
	</a>
	<h2>Enter Text of Choice</h2>
	<br>
	<form method="post" enctype="multipart/form-data" >
	<label id="alertTextTile2"></label>
	<textarea rows="5" cols="15" id="text_tile2" name="textTile2" onblur="validateTextTile2()"></textarea><br>
	<input type="submit" value="Add Text" name="Add_text_Tile" id="add_text2"  class="add_text"/>
	</form>
	</div>
		<!--Close Pop Up when clicked on Add Start-->
	 <script>
 	 $( "#add_text2" ).click(function() { $(location).attr('href', '#close');});
 	 </script>
 	 <!--Close Pop Up when clicked on Add Start-->


	<?php 
	if(isset($_POST['Add_text_Tile'])){

		$tile_no=2;
		$dataEntered=$_POST['textTile2'];
		// Original:$path=$_SESSION['TilePath']."2/Tile2Text.txt";
		//Testing:
		$path='Showcase/17/trail4/Tile2/Tile2Text.txt';
		$TextFileTile2=fopen($path,"w+");
		file_put_contents($path, "");
		fwrite($TextFileTile2, $dataEntered);
		fclose($TextFileTile2);
		$textUploadTile2="UPDATE $tableName SET Text_File='Tile2Text.txt', Image=NULL, Video=NULL, Audio= NULL where Tile_ID=$tile_no";
		$re=@mysqli_query($dbc, $textUploadTile2);

	}
	?>
</div>
<!--Pop up for text upload End-->
<!--Upload Text End-->


<!-- Upload Image-->
<!--Image Upload Icon Start -->
<input type="radio" name="RadioTile2" id="RadioTile2Image" onchange="enableTile2()"/>
<a href="#openImageUpload2" id="ImageIconTile2">
	<img src="images/imageupload.png" class="icon" title="Add Image">
</a>
<!--Image Upload Icon End -->
<!-- Pop up for Image Upload Start-->
<div id="openImageUpload2" class="modalDialog">
	<div>
	<a href="#close" title="Close" class="close">
		<img src="images/close.png" class="button">
	</a>
	<h2>Choose an Image</h2>
	<br>
	<form method="post" enctype="multipart/form-data">
	<input type="file" name="image_tile2" accept="image/*"/>
	<input type="submit" value="Add Image" name="Add_image_Tile2" id="add_image2"/>
	</form>		
	</div>
	<!--Close Pop Up when clicked on Add Start-->
	 <script>
 	 $( "#add_image2" ).click(function() { $(location).attr('href', '#close');});
 	 </script>
 	 <!--Close Pop Up when clicked on Add Start-->

	 <?php

 	 if(isset($_POST['Add_image_Tile2'])){
 	 	$tile_no=2; 
 	 	$name_file=$_FILES['image_tile2']['name'];
		$tmp_name=$_FILES['image_tile2']['tmp_name'];
		//orginal syntax:
		//$local_image="$_SESSION['TilePath']"."2/$name_file";
		//Testing
		$local_image="ShowCase/17/trail4/Tile2/$name_file";
		move_uploaded_file($tmp_name, $local_image);
		$imageUpload="UPDATE $tableName SET Text_File=NULL, Image='$name_file', Video=NULL, Audio= NULL where Tile_ID=$tile_no";
		$res=@mysqli_query($dbc, $imageUpload);
 	 }
 	 ?>
</div>
<!-- Pop up for Image Upload End-->
<!--Image Upload end-->

<br><br>
<!-- Upload Video -->
<!--Video Upload Icon Start -->
<input type="radio" name="RadioTile2" id="RadioTile2Video" onchange="enableTile2()"/>
<a href="#openVideoUpload2" id="VideoIconTile2">
	<img src="images/videoupload.png" class="icon" title="Add Video">
</a>
<!--Video Upload Icon End -->
<!--Pop up for video upload Start-->
<div id="openVideoUpload2" class="modalDialog">
	<div>
	<a href="#close" title="Close" class="close">
		<img src="images/close.png" class="button">
	</a>
	<h2>Choose a Video </h2>
	<br>
	<form method="post" enctype="multipart/form-data">
	<input type="file" name="uploaded_video" accept="video/*"/>
	<input type="submit" value="Add Video" name="Add_video_Tile2" id="add_video2"/>
	</form>		
	</div>
	<!--Close Pop Up when clicked on Add Start-->
	 <script>
 	 $( "#add_video2" ).click(function() { $(location).attr('href', '#close');});
 	 </script>
 	 <!--Close Pop Up when clicked on Add Start-->
	 <?php

 	 if(isset($_POST['Add_video_Tile2'])){
 	 	$tile_no=2; 
 	 	$name_file=$_FILES['uploaded_video']['name'];
		$tmp_name=$_FILES['uploaded_video']['tmp_name'];
		//orginal syntax:
		//$local_image="$_SESSION['TilePath']"."2/$name_file";
		//Testing
		$local_video="ShowCase/17/trail4/Tile2/$name_file";
		move_uploaded_file($tmp_name, $local_video);
		$videoUpload="UPDATE $tableName SET Text_File=NULL, Image=NULL, Video='$name_file', Audio= NULL where Tile_ID=$tile_no";
		mysqli_query($dbc, $videoUpload);
 	 }


 	 ?>
</div>
<!--Pop up for video upload end-->
<!--Video Upload end-->

<!-- Upload Audio -->
<!--Audio upload icon start-->
<input type="radio" name="RadioTile2" id="RadioTile2Audio" onchange="enableTile2()"/>
<a href="#openAudioUpload" id="AudioIconTile2">
	<img src="images/audioupload.jpg" class="icon" title="Add Audio">
</a>
<!--Audio upload icon End-->
<br>
<!--Pop up for Audio upload Start-->
<div id="openAudioUpload" class="modalDialog">
	<div>
	<a href="#close" title="Close" class="close">
		<img src="images/close.png" class="button">
	</a>
	<h2>Choose an Audio</h2>
	<br>
	<form method="post" enctype="multipart/form-data">
	<input type="file" name="uploaded_file" accept="audio/*"/>
	<input type="submit" value="Add Audio" name="Add_audio_Tile2" id="add_audio2"/>
	</form>		
	</div>
		<!--Close Pop Up when clicked on Add Start-->
	 <script>
 	 $( "#add_audio2" ).click(function() { $(location).attr('href', '#close');});
 	 </script>
 	 <!--Close Pop Up when clicked on Add Start-->

 	 <?php

 	 if(isset($_POST['Add_audio_Tile2'])){
 	 	$tile_no=2; 
 	 	$name_file=$_FILES['uploaded_file']['name'];
		$tmp_name=$_FILES['uploaded_file']['tmp_name'];
		//orginal syntax:
		//$local_audio="$_SESSION['TilePath']"."2/$name_file";
		//Testing
		$local_audio="ShowCase/17/trail4/Tile2/$name_file";
		move_uploaded_file($tmp_name, $local_audio);
		$audioUpload="UPDATE $tableName SET Text_File=NULL, Image=NULL, Video=NULL, Audio= '$name_file' where Tile_ID=$tile_no";
		mysqli_query($dbc, $audioUpload);
 	 }
 	 ?>
</div>
<br>
<!--Pop up for Audio upload end-->
<!--Audio Upload End-->

<!--Play button-->
<a href="#playbutton2" id="PlayIConTile2">
	<img src="images/playbutton.png" class="button" title="Play">
</a>
<div id="playbutton2" class="modalDialog">
	<div>
	<!--close button-->
	<a href="#close" title="Close" id="close2"  class="close">
		<img src="images/close.png" class="button">
	</a>

	<?php
	$close="close2";
	$id="PlayIConTile2";
	$tile_no=2;
	$query="select * from $tableName where Tile_ID=$tile_no";
	$result=mysqli_query($dbc, $query);
	echo $row['Tile_ID'];

	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    $text=$row["Text_File"];
    $imageName=$row['Image'];
    $videoName=$row['Video'];
    $audioName=$row['Audio'];
     if($text!=null){
     	$type2="text";
    	//orginal syntax:
		//$path=$_SESSION['TilePath']."2/Tile1Text.txt";
		//Testing
		$path="ShowCase/17/trail4/Tile2/".$text;
    	displayText($path);
    }else if($imageName!=NULL){
    	$type2="image";
    	//orginal syntax:
		//$path=$_SESSION['TilePath']."2/".$imageName;
		//Testing
		$path="ShowCase/17/trail4/Tile2/".$imageName; 
		displayImage($path);
    }else if($videoName!=NULL){
    	$type2="video";
    	$videoid="video2";
    	//orginal syntax:
		//$path=$_SESSION['TilePath']."2/".$videoName;
		//Testing
		$path="ShowCase/17/trail4/Tile2/".$videoName;
		displayVideo($path,$id, $close, $videoid);
    } else if($audioName!=NULL){
    	$type2="audio";
    	$audioid="audio2";
    	//orginal syntax:
		//$path=$_SESSION['TilePath']."2/".$audioName;
		//Testing
		$path="ShowCase/17/trail4/Tile2/".$audioName;
		displayAudio($path,$id, $close, $audioid);
    }else{
    	$type2="empty";
    }
    ?> <input type="hidden" name="type" value="<?=$type2 ?>" id="Tile2Type"/>
<?php 
	
}
}
	?>
	</div>
</div>
<!--Play End-->


<!--Delete Button-->
<form method="post" style="display: inline-block;">
<button  type="submit" id="DeleteTile2" style="background-color:#ffffff; border:0px;padding:0px" name="Deletedata2">
<img src="images/deletebutton.png" class="button"  title="Delete Tile" id="DeleteIcon2" style="display:block;">
<img src="images/reloadbutton.png" class="reload" id="Del-swap2" style="display:none;"/>
</button>
</form>

<!--Delete and reload tile Function JQuery-->

<script>
$( "#DeleteTile2" ).click(function() {
  $( "#TextIconTile2, #ImageIconTile2, #PlayIConTile2, #AudioIconTile2, #VideoIconTile2, #Del-swap2, #DeleteIcon2,  #RadioTile2Text, #RadioTile2Image, #RadioTile2Video, #RadioTile2Audio").toggle();
});
</script>

<?php
	$tile_no=2;
	if(isset($_POST['Deletedata2'])){
	$query="UPDATE $tableName SET Text_File=NULL, Image=NULL, Video=NULL, Audio=NULL where Tile_ID=$tile_no";
	mysqli_query($dbc, $query);
	}
?>
<!--Delete End-->

<!--End of Tile 2-->
</div>


<!-- Start of Tile 3  -->
<div id="Tile" class="col-sm-2">
<!-- Title of the Tile-->
<div class="TileName">C</div>

<!-- Input Text.-->

<!--Text upload icon Start-->
<input type="radio" name="RadioTile3" id="RadioTile3Text" onchange="enableTile3()"/>
<a href="#openTextUpload3" id="TextIconTile3">
	<img src="images/textupload.png" class="icon" title="Add Text">
</a>
<!--Text upload icon End-->
<!--Pop up for text upload Start-->
<div id="openTextUpload3" class="modalDialog">
	<div>
	<a href="#close" title="Close" class="close">
		<img src="images/close.png" class="button">
	</a>
	<h2>Enter Text of Choice</h2>
	<br>
	<form method="post" enctype="multipart/form-data" >
	<textarea rows="5" cols="15" id="text_tile3" name="textTile3"></textarea><br>
	<input type="submit" value="Add Text" name="Add_text_Tile3" id="add_text3"  class="add_text"/>
	</form>
	</div>
	
	<!--Close Pop Up when clicked on Add Start-->
	 <script>
 	 $( "#add_text3" ).click(function() { $(location).attr('href', '#close');});
 	 </script>
 	 <!--Close Pop Up when clicked on Add Start-->
	<?php 
	if(isset($_POST['Add_text_Tile3'])){

		$tile_no=3;
		$dataEntered=$_POST['textTile3'];
		// Original:$path=$_SESSION['TilePath']."3/Tile3Text.txt";
		//Testing:
		$path='Showcase/17/trail4/Tile3/Tile3Text.txt';
		$TextFileTile3=fopen($path,"w+");
		file_put_contents($path, "");
		fwrite($TextFileTile3, $dataEntered);
		fclose($TextFileTile3);
		$textUploadTile3="UPDATE $tableName SET Text_File='Tile3Text.txt', Image=NULL, Video=NULL, Audio= NULL where Tile_ID=$tile_no";
		$re=@mysqli_query($dbc, $textUploadTile3);

	}
	?>


</div>
<!--Pop up for text upload End-->
<!--Upload Text End-->


<!-- Upload Image-->

<!--Image Upload Icon Start -->
<input type="radio" name="RadioTile3" id="RadioTile3Image" onchange="enableTile3()"/>
<a href="#openImageUpload3" id="ImageIconTile3">
	<img src="images/imageupload.png" class="icon" title="Add Image">
</a>
<!--Image Upload Icon End -->
<!-- Pop up for Image Upload Start-->
<div id="openImageUpload3" class="modalDialog">
	<div>
	<a href="#close" title="Close" class="close">
		<img src="images/close.png" class="button">
	</a>
	<h2>Choose an Image</h2>
	<br>
	<form method="post" enctype="multipart/form-data">
	<input type="file" name="image_tile3" accept="image/*"/>
	<input type="submit" value="Add Image" name="Add_image_Tile3" id="add_image3"/>
	</form>		
	</div>
	<!--Close Pop Up when clicked on Add Start-->
	 <script>
 	 $( "#add_image3" ).click(function() { $(location).attr('href', '#close');});
 	 </script>
 	 <!--Close Pop Up when clicked on Add Start-->

	 <?php

 	 if(isset($_POST['Add_image_Tile3'])){
 	 	$tile_no=3; 
 	 	$name_file=$_FILES['image_tile3']['name'];
		$tmp_name=$_FILES['image_tile3']['tmp_name'];
		//orginal syntax:
		//$local_image="$_SESSION['TilePath']"."3/$name_file";
		//Testing
		$local_image="ShowCase/17/trail4/Tile3/$name_file";
		move_uploaded_file($tmp_name, $local_image);
		$imageUpload="UPDATE $tableName SET Text_File=NULL, Image='$name_file', Video=NULL, Audio= NULL where Tile_ID=$tile_no";
		mysqli_query($dbc, $imageUpload);
 		
 	 }


 	 ?>
</div>
<!-- Pop up for Image Upload End-->
<!--Image Upload end-->

<br><br>

<!-- Upload Video -->
<!--Video Upload Icon Start -->
<input type="radio" name="RadioTile3" id="RadioTile3Video" onchange="enableTile3()"/>
<a href="#openVideoUpload3" id="VideoIconTile3">
	<img src="images/videoupload.png" class="icon" title="Add Video">
</a>
<!--Video Upload Icon End-->
<!--Pop up for video upload Start-->
<div id="openVideoUpload3" class="modalDialog">
	<div>
	<a href="#close" title="Close" class="close">
		<img src="images/close.png" class="button">
	</a>
	<h2>Choose a Video </h2>
	<br>
	<form method="post" enctype="multipart/form-data">
	<input type="file" name="uploaded_video" accept="video/*"/>
	<input type="submit" value="Add Video" name="Add_video_Tile3" id="add_video3"/>
	</form>		
	</div>
	<!--Close Pop Up when clicked on Add Start-->
	 <script>
 	 $( "#add_video3" ).click(function() { $(location).attr('href', '#close');});
 	 </script>
 	 <!--Close Pop Up when clicked on Add Start-->
	 <?php

 	 if(isset($_POST['Add_video_Tile3'])){
 	 	$tile_no=3; 
 	 	$name_file=$_FILES['uploaded_video']['name'];
		$tmp_name=$_FILES['uploaded_video']['tmp_name'];
		//orginal syntax:
		//$local_image="$_SESSION['TilePath']"."3/$name_file";
		//Testing
		$local_video="ShowCase/17/trail4/Tile3/$name_file";
		move_uploaded_file($tmp_name, $local_video);
		$videoUpload="UPDATE $tableName SET Text_File=NULL, Image=NULL, Video='$name_file', Audio= NULL where Tile_ID=$tile_no";
		mysqli_query($dbc, $videoUpload);
 	 }


 	 ?>
</div>
<!--Pop up for video upload end-->
<!--Video Upload end-->

<!-- Upload Audio -->
<!--Audio upload icon start-->
<input type="radio" name="RadioTile3" id="RadioTile3Audio" onchange="enableTile3()"/>
<a href="#openAudioUpload3" id="AudioIconTile3">
	<img src="images/audioupload.jpg" class="icon" title="Add Audio">
</a>
<!--Audio upload icon start-->
<br>
<!--Pop up for Audio upload Start-->
<div id="openAudioUpload3" class="modalDialog">
	<div>
	<a href="#close" title="Close" class="close">
		<img src="images/close.png" class="button">
	</a>
	<h2>Choose an Audio</h2>
	<br>
	<form method="post" enctype="multipart/form-data">
	<input type="file" name="uploaded_file" accept="audio/*"/>
	<input type="submit" value="Add Audio" name="Add_audio_Tile3" id="add_audio3"/>
	</form>		
	</div>
	<!--Close Pop Up when clicked on Add Start-->
	 <script>
 	 $( "#add_audio3" ).click(function() { $(location).attr('href', '#close');});
 	 </script>
 	 <!--Close Pop Up when clicked on Add Start-->

 	 <?php

 	 if(isset($_POST['Add_audio_Tile3'])){
 	 	$tile_no=3; 
 	 	$name_file=$_FILES['uploaded_file']['name'];
		$tmp_name=$_FILES['uploaded_file']['tmp_name'];
		//orginal syntax:
		//$local_audio="$_SESSION['TilePath']"."3/$name_file";
		//Testing
		$local_audio="ShowCase/17/trail4/Tile3/$name_file";
		move_uploaded_file($tmp_name, $local_audio);
		$audioUpload="UPDATE $tableName SET Text_File=NULL, Image=NULL, Video=NULL, Audio= '$name_file' where Tile_ID=$tile_no";
		mysqli_query($dbc, $audioUpload);
 	 }
 	 ?>
</div>
<br>
<!--Pop up for Audio upload end-->
<!--Audio Upload End-->

<!--Play button-->
<a href="#playbutton3" id="PlayIConTile3">
	<img src="images/playbutton.png" class="button" title="Play">
</a>
<div id="playbutton3" class="modalDialog">
	<div>
	<!--close button-->
	<a href="#close" title="Close" id="close3" class="close">
		<img src="images/close.png" class="button">
	</a>

	<?php
	$close="close3";
	$id="PlayIConTile3";
	$tile_no=3;
	$query="select * from $tableName where Tile_ID=$tile_no";
	$result=mysqli_query($dbc, $query);
	echo $row['Tile_ID'];

	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    $text=$row["Text_File"];
    $imageName=$row['Image'];
    $videoName=$row['Video'];
    $audioName=$row['Audio'];
     if($text!=null){
     	$type3="text";
    	//orginal syntax:
		//$path=$_SESSION['TilePath']."3/Tile1Text.txt";
		//Testing
		$path="ShowCase/17/trail4/Tile3/".$text;
    	displayText($path);
    }else if($imageName!=NULL){
    	$type3="image";
    	//orginal syntax:
		//$path=$_SESSION['TilePath']."3/".$imageName;
		//Testing
		$path="ShowCase/17/trail4/Tile3/".$imageName; 
		displayImage($path);
    }else if($videoName!=NULL){
    	$type3="video";
    	$videoid="video3";
    	//orginal syntax:
		//$path=$_SESSION['TilePath']."3/".$videoName;
		//Testing
		$path="ShowCase/17/trail4/Tile3/".$videoName;
		displayVideo($path,$id, $close,$videoid);
    } else if($audioName!=NULL){
    	$type3="audio";
    	$audioid="audio3";
    	//orginal syntax:
		//$path=$_SESSION['TilePath']."3/".$audioName;
		//Testing
		$path="ShowCase/17/trail4/Tile3/".$audioName;
		displayAudio($path,$id, $close, $audioid);
    }else{
    	$type3="empty";
    }
    ?> <input type="hidden" name="type" value="<?=$type3 ?>" id="Tile3Type"/>
<?php 
	
}
}
	?>
	</div>
</div>
<!--Play End-->


<!--Delete Button-->
<form method="post" style="display: inline-block;">
<button id="DeleteTile3" style="background-color:#ffffff; border:0px;padding:0px" name="Deletedata3">
<img src="images/deletebutton.png" class="button"  title="Delete Tile" id="DeleteIcon3" style="display:block;">
<img src="images/reloadbutton.png" class="reload" id="Del-swap3" style="display:none;"/>
</button>
</form>

<!--Delete and reload tile Function JQuery-->

<script>
$( "#DeleteTile3" ).click(function() {
  $( "#TextIconTile3, #ImageIconTile3, #PlayIConTile3, #AudioIconTile3, #VideoIconTile3, #Del-swap3, #DeleteIcon3,  #RadioTile3Text, #RadioTile3Image, #RadioTile3Video, #RadioTile3Audio").toggle();
});
</script>
<?php
	$tile_no=3;
	if(isset($_POST['Deletedata3'])){
	$query="UPDATE $tableName SET Text_File=NULL, Image=NULL, Video=NULL, Audio=NULL where Tile_ID=$tile_no";
	mysqli_query($dbc, $query);
	}
?>
<!--Delete End-->

<!--End of Tile 3-->
</div>

<br>
<!--First Row end-->
</div>

<!--Second row start -->
<div class="row" align="center">

<!-- Start of Tile 4  -->
<div id="Tile" class="col-sm-2">

<!-- Title of the tile.-->
<div class="TileName">L</div>

<!-- Input Text.-->
<!--Text upload icon Start-->
<input type="radio" name="RadioTile4" id="RadioTile4Text" onchange="enableTile4()"/>
<a href="#openTextUpload4" id="TextIconTile4">
	<img src="images/textupload.png" class="icon" title="Add Text">
</a>
<!--Text upload icon End-->
<!--Pop up for text upload-->
<div id="openTextUpload4" class="modalDialog">
	<div>
	<a href="#close" title="Close" class="close">
		<img src="images/close.png" class="button">
	</a>
	<h2>Enter Text of Choice</h2>
	<br>
	<form method="post" enctype="multipart/form-data" >
	<textarea rows="5" cols="15" id="text_tile4" name="textTile4"></textarea><br>
	<input type="submit" value="Add Text" name="Add_text_Tile4" id="add_text4"  class="add_text"/>
	</form>
	</div>
	<!--Close Pop Up when clicked on Add Start-->
	 <script>
 	 $( "#add_text4" ).click(function() { $(location).attr('href', '#close');});
 	 </script>
 	 <!--Close Pop Up when clicked on Add Start-->

 	 	<?php 
	if(isset($_POST['Add_text_Tile4'])){

		$tile_no=4;
		$dataEntered=$_POST['textTile4'];
		// Original:$path=$_SESSION['TilePath']."4/Tile4Text.txt";
		//Testing:
		$path='Showcase/17/trail4/Tile4/Tile4Text.txt';
		$TextFileTile4=fopen($path,"w+");
		file_put_contents($path, "");
		fwrite($TextFileTile4, $dataEntered);
		fclose($TextFileTile4);
		$textUploadTile4="UPDATE $tableName SET Text_File='Tile4Text.txt', Image=NULL, Video=NULL, Audio= NULL where Tile_ID=$tile_no";
		$re=@mysqli_query($dbc, $textUploadTile4);

	}
	?>

</div>
<!--Pop up for text upload End-->
<!--Upload Text End-->

<!-- Upload Image-->

<!--Image Upload Icon Start -->
<input type="radio" name="RadioTile4" id="RadioTile4Image" onchange="enableTile4()"/>
<a href="#openImageUpload4" id="ImageIconTile4">
	<img src="images/imageupload.png" class="icon" title="Add Image">
</a>
<!--Image Upload Icon End -->
<!-- Pop up for Image Upload Start-->
<div id="openImageUpload4" class="modalDialog">
	<div>
	<a href="#close" title="Close" class="close">
		<img src="images/close.png" class="button">
	</a>
	<h2>Choose an Image</h2>
	<br>
	<form method="POST" enctype="multipart/form-data">
	<input type="file" name="image_tile4" accept="image/*"/>
	<input type="submit" value="Add Image" name="Add_image_Tile4" id="add_image4"/>

	</form>		
	</div>
	<!--Close Pop Up when clicked on Add Start-->
	 <script>
 	 $( "#add_image4" ).click(function() { $(location).attr('href', '#close');});
 	 </script>
 	 <!--Close Pop Up when clicked on Add Start-->

	 <?php

 	 if(isset($_POST['Add_image_Tile4'])){
 	 	$tile_no=4; 
 	 	$name_file=$_FILES['image_tile4']['name'];
		$tmp_name=$_FILES['image_tile4']['tmp_name'];
		//orginal syntax:
		//$local_image="$_SESSION['TilePath']"."4/$name_file";
		//Testing
		$local_image="ShowCase/17/trail4/Tile4/$name_file";
		move_uploaded_file($tmp_name, $local_image);
		$imageUpload="UPDATE $tableName SET Text_File=NULL, Image='$name_file', Video=NULL, Audio= NULL where Tile_ID=$tile_no";
		mysqli_query($dbc, $imageUpload);
 	 }


 	 ?>
</div>
<!-- Pop up for Image Upload End-->
<!--Image Upload end-->

<br><br>

<!-- Upload Video -->
<!--Video Upload Icon Start -->
<input type="radio" name="RadioTile4" id="RadioTile4Video" onchange="enableTile4()"/>
<a href="#openVideoUpload4" id="VideoIconTile4">
	<img src="images/videoupload.png" class="icon" title="Add Video">
</a>
<!--Video Upload Icon End-->
<!--Pop up for video upload Start-->
<div id="openVideoUpload4" class="modalDialog">
	<div>
	<a href="#close" title="Close" class="close">
		<img src="images/close.png" class="button">
	</a>
	<h2>Choose a Video </h2>
	<br>
	<form method="post" enctype="multipart/form-data"> 
	<input type="file" name="uploaded_video" accept="video/*"/>
	<input type="submit" value="Add Video" name="Add_video_Tile4" id="add_video4"/>
	</form>		
	</div>
	<!--Close Pop Up when clicked on Add Start-->
	 <script>
 	 $( "#add_video4" ).click(function() { $(location).attr('href', '#close');});
 	 </script>
 	 <!--Close Pop Up when clicked on Add Start-->
	 <?php

 	 if(isset($_POST['Add_video_Tile4'])){
 	 	$tile_no=4; 
 	 	$name_file=$_FILES['uploaded_video']['name'];
		$tmp_name=$_FILES['uploaded_video']['tmp_name'];
		//orginal syntax:
		//$local_image="$_SESSION['TilePath']"."4/$name_file";
		//Testing
		$local_video="ShowCase/17/trail4/Tile4/$name_file";
		move_uploaded_file($tmp_name, $local_video);
		$videoUpload="UPDATE $tableName SET Text_File=NULL, Image=NULL, Video='$name_file', Audio= NULL where Tile_ID=$tile_no";
		mysqli_query($dbc, $videoUpload);
 	 }


 	 ?>
</div>
<!--Pop up for video upload end-->
<!--Video Upload end-->

<!-- Upload Audio -->
<!--Audio upload icon start-->
<input type="radio" name="RadioTile4" id="RadioTile4Audio" onchange="enableTile4()"/>
<a href="#openAudioUpload4" id="AudioIconTile4">
	<img src="images/audioupload.jpg" class="icon" title="Add Audio">
</a>
<!--Audio upload icon End-->
<br>
<!--Pop up for Audio upload Start-->
<div id="openAudioUpload4" class="modalDialog">
	<div>
	<a href="#close" title="Close" class="close">
		<img src="images/close.png" class="button">
	</a>
	<h2>Choose an Audio</h2>
	<br>
	<form method="post" enctype="multipart/form-data">
	<input type="file" name="uploaded_file" accept="audio/*"/>
	<input type="submit" value="Add Audio" name="Add_audio_Tile4" id="add_audio4"/>
	</form>		
	</div>
	<!--Close Pop Up when clicked on Add Start-->
	 <script>
 	 $( "#add_audio4" ).click(function() { $(location).attr('href', '#close');});
 	 </script>
 	 <!--Close Pop Up when clicked on Add Start-->

 	 <?php

 	 if(isset($_POST['Add_audio_Tile4'])){
 	 	$tile_no=4; 
 	 	$name_file=$_FILES['uploaded_file']['name'];
		$tmp_name=$_FILES['uploaded_file']['tmp_name'];
		//orginal syntax:
		//$local_audio="$_SESSION['TilePath']"."4/$name_file";
		//Testing
		$local_audio="ShowCase/17/trail4/Tile4/$name_file";
		move_uploaded_file($tmp_name, $local_audio);
		$audioUpload="UPDATE $tableName SET Text_File=NULL, Image=NULL, Video=NULL, Audio= '$name_file' where Tile_ID=$tile_no";
		mysqli_query($dbc, $audioUpload);
 	 }
 	 ?>
</div>
<br>
<!--Pop up for Audio upload end-->
<!--Audio Upload End-->

<!--Play button-->
<a href="#playbutton4" id="PlayIConTile4">
	<img src="images/playbutton.png" class="button" title="Play">
</a>
<div id="playbutton4" class="modalDialog">
	<div>
	<!--close button-->
	<a href="#close" title="Close" id="close4"  class="close">
		<img src="images/close.png" class="button">
	</a>

	<?php
	$close="close4";
	$id="PlayIConTile4";
	$tile_no=4;
	$query="select * from $tableName where Tile_ID=$tile_no";
	$result=mysqli_query($dbc, $query);
	echo $row['Tile_ID'];

	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    $text=$row["Text_File"];
    $imageName=$row['Image'];
    $videoName=$row['Video'];
    $audioName=$row['Audio'];
     if($text!=null){
     	$type4="text";
    	//orginal syntax:
		//$path=$_SESSION['TilePath']."4/Tile1Text.txt";
		//Testing
		$path="ShowCase/17/trail4/Tile4/".$text;
    	displayText($path);
    }else if($imageName!=NULL){
    	$type4="image";
    	//orginal syntax:
		//$path=$_SESSION['TilePath']."4/".$imageName;
		//Testing
		$path="ShowCase/17/trail4/Tile4/".$imageName; 
		displayImage($path);
    }else if($videoName!=NULL){
    	$type4="video";
    	$videoid="video4";
    	//orginal syntax:
		//$path=$_SESSION['TilePath']."4/".$videoName;
		//Testing
		$path="ShowCase/17/trail4/Tile4/".$videoName;
		displayVideo($path,$id, $close,  $videoid);
    } else if($audioName!=NULL){
    	$type4="audio";
    	$audioid="audio4";
    	//orginal syntax:
		//$path=$_SESSION['TilePath']."4/".$audioName;
		//Testing
		$path="ShowCase/17/trail4/Tile4/".$audioName;
		displayAudio($path,$id, $close, $audioid);
    }else{
    	$type4="empty";
    }
    ?> <input type="hidden" name="type" value="<?=$type4 ?>" id="Tile4Type"/>
<?php 
	
}
}
	?>
	</div>
</div>
<!--Play End-->


<!--Delete Button-->
<form method="post" style="display: inline-block;">
<button id="DeleteTile4" style="background-color:#ffffff; border:0px;padding:0px" name="Deletedata4">
<img src="images/deletebutton.png" class="button"  title="Delete Tile" id="DeleteIcon4" style="display:block;">
<img src="images/reloadbutton.png" class="reload" id="Del-swap4" style="display:none;"/>
</button>
</form>

<!--Delete and reload tile Function JQuery-->

<script>
$( "#DeleteTile4" ).click(function() {
  $( "#TextIconTile4, #ImageIconTile4, #PlayIConTile4, #AudioIconTile4, #VideoIconTile4, #Del-swap4, #DeleteIcon4,  #RadioTile4Text, #RadioTile4Image, #RadioTile4Video, #RadioTile4Audio").toggle();
});
</script>
<?php
	$tile_no=4;
	if(isset($_POST['Deletedata4'])){
	$query="UPDATE $tableName SET Text_File=NULL, Image=NULL, Video=NULL, Audio=NULL where Tile_ID=$tile_no";
	mysqli_query($dbc, $query);
	}
?>
<!--Delete End-->

<!--End of Tile 4-->
</div>

<!-- Start of Tile 5  -->
<div id="Tile"  class="col-sm-2">

<!-- Title of the Tile.-->
<div class="TileName">M</div>

<!-- Input Text.-->

<!--Text upload icon Start-->
<input type="radio" name="RadioTile5" id="RadioTile5Text" onchange="enableTile5()"/>
<a href="#openTextUpload5" id="TextIconTile5">
	<img src="images/textupload.png" class="icon" title="Add Text">
</a>
<!--Text upload icon End-->
<!--Pop up for text upload-->
<div id="openTextUpload5" class="modalDialog">
	<div>
	<a href="#close" title="Close" class="close">
		<img src="images/close.png" class="button">
	</a>
	<h2>Enter Text of Choice</h2>
	<br>
	<form method="post" enctype="multipart/form-data" >
	<textarea rows="5" cols="15" id="text_tile5" name="textTile5"></textarea><br>
	<input type="submit" value="Add Text" name="Add_text_Tile5" id="add_text5"  class="add_text"/>
	</form>
	</div>
	<!--Close Pop Up when clicked on Add Start-->
	 <script>
 	 $( "#add_text5" ).click(function() { $(location).attr('href', '#close');});
 	 </script>
 	 <!--Close Pop Up when clicked on Add Start-->

 	 <?php 
	if(isset($_POST['Add_text_Tile5'])){

		$tile_no=5;
		$dataEntered=$_POST['textTile5'];
		// Original:$path=$_SESSION['TilePath']."5/Tile5Text.txt";
		//Testing:
		$path='Showcase/17/trail4/Tile5/Tile5Text.txt';
		$TextFileTile5=fopen($path,"w+");
		file_put_contents($path, "");
		fwrite($TextFileTile5, $dataEntered);
		fclose($TextFileTile5);
		$textUploadTile5="UPDATE $tableName SET Text_File='Tile5Text.txt', Image=NULL, Video=NULL, Audio= NULL where Tile_ID=$tile_no";
		$re=@mysqli_query($dbc, $textUploadTile5);

	}
	?>

</div>
<!--Pop up for text upload End-->
<!--Upload Text End-->

<!-- Upload Image-->

<!--Image Upload Icon Start -->
<input type="radio" name="RadioTile5" id="RadioTile5Image" onchange="enableTile5()"/>
<a href="#openImageUpload5" id="ImageIconTile5">
	<img src="images/imageupload.png" class="icon" title="Add Image">
</a>
<!--Image Upload Icon End -->
<!-- Pop up for Image Upload Start-->
<div id="openImageUpload5" class="modalDialog">
	<div>
	<a href="#close" title="Close" class="close">
		<img src="images/close.png" class="button">
	</a>
	<h2>Choose an Image</h2>
	<br>
	<form method="post" enctype="multipart/form-data">
	<input type="file" name="image_tile5" accept="image/*"/>
		<input type="submit" value="Add Image" name="Add_image_Tile5" id="add_image5"/>
	</form>		
	</div>
		<!--Close Pop Up when clicked on Add Start-->
	 <script>
 	 $( "#add_image5" ).click(function() { $(location).attr('href', '#close');});
 	 </script>
 	 <!--Close Pop Up when clicked on Add Start-->

	 <?php

 	 if(isset($_POST['Add_image_Tile5'])){
 	 	$tile_no=5; 
 	 	$name_file=$_FILES['image_tile5']['name'];
		$tmp_name=$_FILES['image_tile5']['tmp_name'];
		//orginal syntax:
		//$local_image="$_SESSION['TilePath']"."5/$name_file";
		//Testing
		$local_image="ShowCase/17/trail4/Tile5/$name_file";
		move_uploaded_file($tmp_name, $local_image);
		$imageUpload="UPDATE $tableName SET Text_File=NULL, Image='$name_file', Video=NULL, Audio= NULL where Tile_ID=$tile_no";
		mysqli_query($dbc, $imageUpload);
 	 }


 	 ?>

</div>
<!-- Pop up for Image Upload End-->
<!--Image Upload end-->

<br><br>

<!-- Upload Video -->
<!--Video Upload Icon Start -->
<input type="radio" name="RadioTile5" id="RadioTile5Video" onchange="enableTile5()"/>
<a href="#openVideoUpload5" id="VideoIconTile5">
	<img src="images/videoupload.png" class="icon" title="Add Video">
</a>
<!--Video Upload Icon End -->
<!--Pop up for video upload Start-->
<div id="openVideoUpload5" class="modalDialog">
	<div>
	<a href="#close" title="Close" class="close">
		<img src="images/close.png" class="button">
	</a>
	<h2>Choose a Video </h2>
	<br>
	<form method="post" enctype="multipart/form-data">
	<input type="file" name="uploaded_video" accept="video/*"/>
	<input type="submit" value="Add Video" name="Add_video_Tile5" id="add_video5"/>
	</form>		
	</div>
	<!--Close Pop Up when clicked on Add Start-->
	 <script>
 	 $( "#add_video5" ).click(function() { $(location).attr('href', '#close');});
 	 </script>
 	 <!--Close Pop Up when clicked on Add Start-->
	 <?php

 	 if(isset($_POST['Add_video_Tile5'])){
 	 	$tile_no=5; 
 	 	$name_file=$_FILES['uploaded_video']['name'];
		$tmp_name=$_FILES['uploaded_video']['tmp_name'];
		//orginal syntax:
		//$local_image="$_SESSION['TilePath']"."5/$name_file";
		//Testing
		$local_video="ShowCase/17/trail4/Tile5/$name_file";
		move_uploaded_file($tmp_name, $local_video);
		$videoUpload="UPDATE $tableName SET Text_File=NULL, Image=NULL, Video='$name_file', Audio= NULL where Tile_ID=$tile_no";
		mysqli_query($dbc, $videoUpload);
 	 }


 	 ?>
</div>
<!--Pop up for video upload end-->
<!--Video Upload end-->

<!-- Upload Audio -->
<!--Audio upload icon start-->
<input type="radio" name="RadioTile5" id="RadioTile5Audio" onchange="enableTile5()"/>
<a href="#openAudioUpload5" id="AudioIconTile5">
	<img src="images/audioupload.jpg" class="icon" title="Add Audio">
</a>
<!--Audio upload icon End-->
<br>
<!--Pop up for Audio upload Start-->
<div id="openAudioUpload5" class="modalDialog">
	<div>
	<a href="#close" title="Close" class="close">
		<img src="images/close.png" class="button">
	</a>
	<h2>Choose an Audio</h2>
	<br>
	<form method="post" enctype="multipart/form-data">
	<input type="file" name="uploaded_file" accept="audio/*"/>
	<input type="submit" value="Add Audio" name="Add_audio_Tile5" id="add_audio5"/>
	</form>		
	</div>
	<!--Close Pop Up when clicked on Add Start-->
	 <script>
 	 $( "#add_audio5" ).click(function() { $(location).attr('href', '#close');});
 	 </script>
 	 <!--Close Pop Up when clicked on Add Start-->

 	 <?php

 	 if(isset($_POST['Add_audio_Tile5'])){
 	 	$tile_no=5; 
 	 	$name_file=$_FILES['uploaded_file']['name'];
		$tmp_name=$_FILES['uploaded_file']['tmp_name'];
		//orginal syntax:
		//$local_audio="$_SESSION['TilePath']"."5/ $name_file";
		//Testing
		$local_audio="ShowCase/17/trail4/Tile5/$name_file";
		move_uploaded_file($tmp_name, $local_audio);
		$audioUpload="UPDATE $tableName SET Text_File=NULL, Image=NULL, Video=NULL, Audio= '$name_file' where Tile_ID=$tile_no";
		mysqli_query($dbc, $audioUpload);
 	 }
 	 ?>
</div>
<br>
<!--Pop up for Audio upload end-->
<!--Audio Upload End-->

<!--Play button-->
<a href="#playbutton5" id="PlayIConTile5">
	<img src="images/playbutton.png" class="button" title="Play">
</a>
<div id="playbutton5" class="modalDialog">
	<div>
	<!--close button-->
	<a href="#close" title="Close"  id="close5" class="close">
		<img src="images/close.png" class="button">
	</a>

	<?php
	$close="close5";
	$id="PlayIConTile5";
	$tile_no=5;
	$query="select * from $tableName where Tile_ID=$tile_no";
	$result=mysqli_query($dbc, $query);

	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    $text=$row["Text_File"];
    $imageName=$row['Image'];
    $videoName=$row['Video'];
    $audioName=$row['Audio'];
     if($text!=null){
     	$type5="text";
    	//orginal syntax:
		//$path=$_SESSION['TilePath']."5/Tile1Text.txt";
		//Testing
		$path="ShowCase/17/trail4/Tile5/".$text;
    	displayText($path);
    }else if($imageName!=NULL){
    	$type5="image";
    	//orginal syntax:
		//$path=$_SESSION['TilePath']."5/".$imageName;
		//Testing
		$path="ShowCase/17/trail4/Tile5/".$imageName; 
		displayImage($path);
    }else if($videoName!=NULL){
    	$type5="video";
    	$videoid="video5";
    	//orginal syntax:
		//$path=$_SESSION['TilePath']."5/".$videoName;
		//Testing
		$path="ShowCase/17/trail4/Tile5/".$videoName;
		displayVideo($path,$id, $close, $videoid);
    } else if($audioName!=NULL){
    	$type5="audio";
    	$audioid="audio5";
    	//orginal syntax:
		//$path=$_SESSION['TilePath']."5/".$audioName;
		//Testing
		$path="ShowCase/17/trail4/Tile5/".$audioName;
		displayAudio($path,$id, $close, $audioid);
    }else{
    	$type5="empty";
    }
  	?> <input type="hidden" name="type" value="<?=$type5 ?>" id="Tile5Type"/>
	<?php 
	
}
}
	?>
	</div>
</div>
<!--Play End-->


<!--Delete Button-->
<form method="post" style="display: inline-block;">
<button id="DeleteTile5" style="background-color:#ffffff; border:0px;padding:0px" name="Deletedata5">
<img src="images/deletebutton.png" class="button"  title="Delete Tile" id="DeleteIcon5" style="display:block;">
<img src="images/reloadbutton.png" class="reload" id="Del-swap5" style="display:none;"/>
</button>
</form>

<!--Delete and reload tile Function JQuery-->

<script>
$( "#DeleteTile5" ).click(function() {
  $( "#TextIconTile5, #ImageIconTile5, #PlayIConTile5, #AudioIconTile5, #VideoIconTile5, #Del-swap5, #DeleteIcon5,  #RadioTile5Text, #RadioTile5Image, #RadioTile5Video, #RadioTile5Audio").toggle();
});
</script>

<?php
	$tile_no=5;
	if(isset($_POST['Deletedata5'])){
	$query="UPDATE $tableName SET Text_File=NULL, Image=NULL, Video=NULL, Audio=NULL where Tile_ID=$tile_no";
	mysqli_query($dbc, $query);
	}
?>
<!--Delete End-->

<!--End of Tile 5-->
</div>


<!-- Start of Tile 6  -->
<div id="Tile" class="col-sm-2">

<!-- Title of the Tile.-->
<div class="TileName">N</div>

<!-- Input Text.-->

<!--Text upload icon Start-->
<input type="radio" name="RadioTile6" id="RadioTile6Text" onchange="enableTile6()" />
<a href="#openTextUpload6" id="TextIconTile6">
	<img src="images/textupload.png" class="icon" title="Add Text">
</a>
<!--Text upload icon End-->
<!--Pop up for text upload-->
<div id="openTextUpload6" class="modalDialog">
	<div>
	<a href="#close" title="Close" class="close">
		<img src="images/close.png" class="button">
	</a>
	<h2>Enter Text of Choice</h2>
	<br>
	<form method="post" enctype="multipart/form-data" >
	<textarea rows="5" cols="15" id="text_tile6" name="textTile6"></textarea><br>
	<input type="submit" value="Add Text" name="Add_text_Tile6" id="add_text6"  class="add_text"/>
	</form>
	</div>
	<!--Close Pop Up when clicked on Add Start-->
	 <script>
 	 $( "#add_text6" ).click(function() { $(location).attr('href', '#close');});
 	 </script>
 	 <!--Close Pop Up when clicked on Add Start-->

 	 	<?php 
	if(isset($_POST['Add_text_Tile6'])){

		$tile_no=6;
		$dataEntered=$_POST['textTile6'];
		// Original:$path=$_SESSION['TilePath']."6/Tile6Text.txt";
		//Testing:
		$path='Showcase/17/trail4/Tile6/Tile6Text.txt';
		$TextFileTile6=fopen($path,"w+");
		file_put_contents($path, "");
		fwrite($TextFileTile6, $dataEntered);
		fclose($TextFileTile6);
		$textUploadTile6="UPDATE $tableName SET Text_File='Tile6Text.txt', Image=NULL, Video=NULL, Audio= NULL where Tile_ID=$tile_no";
		$re=@mysqli_query($dbc, $textUploadTile6);

	}
	?>
</div>
<!--Pop up for text upload End-->
<!--Upload Text End-->

<!-- Upload Image-->
<!--Image Upload Icon Start -->
<input type="radio" name="RadioTile6" id="RadioTile6Image" onchange="enableTile6()"/>
<a href="#openImageUpload6" id="ImageIconTile6">
	<img src="images/imageupload.png" class="icon" title="Add Image">
</a>
<!--Image Upload Icon End -->
<!-- Pop up for Image Upload Start-->
<div id="openImageUpload6" class="modalDialog">
	<div>
	<a href="#close" title="Close" class="close">
		<img src="images/close.png" class="button">
	</a>
	<h2>Choose an Image</h2>
	<br>
	<form method="post" enctype="multipart/form-data">
	<input type="file" name="image_tile6" accept="image/*"/>
		<input type="submit" value="Add Image" name="Add_image_Tile6" id="add_image6"/>
	</form>		
	</div>
			<!--Close Pop Up when clicked on Add Start-->
	 <script>
 	 $( "#add_image6" ).click(function() { $(location).attr('href', '#close');});
 	 </script>
 	 <!--Close Pop Up when clicked on Add Start-->

	 <?php

 	 if(isset($_POST['Add_image_Tile6'])){
 	 	$tile_no=6; 
 	 	$name_file=$_FILES['image_tile6']['name'];
		$tmp_name=$_FILES['image_tile6']['tmp_name'];
		//orginal syntax:
		//$local_image="$_SESSION['TilePath']"."6/$name_file";
		//Testing
		$local_image="ShowCase/17/trail4/Tile6/$name_file";
		move_uploaded_file($tmp_name, $local_image);
		$imageUpload="UPDATE $tableName SET Text_File=NULL, Image='$name_file', Video=NULL, Audio= NULL where Tile_ID=$tile_no";
		mysqli_query($dbc, $imageUpload);
 	 }


 	 ?>
</div>
<!-- Pop up for Image Upload End-->
<!--Image Upload end-->

<br><br>

<!-- Upload Video -->
<!--Video Upload Icon Start -->
<input type="radio" name="RadioTile6" id="RadioTile6Video" onchange="enableTile6()"/>
<a href="#openVideoUpload6" id="VideoIconTile6">
	<img src="images/videoupload.png" class="icon" title="Add Video">
</a>
<!--Video Upload Icon End -->
<!--Pop up for video upload Start-->
<div id="openVideoUpload6" class="modalDialog">
	<div>
	<a href="#close" title="Close" class="close">
		<img src="images/close.png" class="button">
	</a>
	<h2>Choose a Video </h2>
	<br>
	<form method="post" enctype="multipart/form-data">
	<input type="file" name="uploaded_video" accept="video/*"/>
	<input type="submit" value="Add Video" name="Add_video_Tile6" id="add_video6"/>
	</form>		
	</div>
	<!--Close Pop Up when clicked on Add Start-->
	 <script>
 	 $( "#add_video6" ).click(function() { $(location).attr('href', '#close');});
 	 </script>
 	 <!--Close Pop Up when clicked on Add Start-->
	 <?php

 	 if(isset($_POST['Add_video_Tile6'])){
 	 	$tile_no=6; 
 	 	$name_file=$_FILES['uploaded_video']['name'];
		$tmp_name=$_FILES['uploaded_video']['tmp_name'];
		//orginal syntax:
		//$local_image="$_SESSION['TilePath']"."6/$name_file";
		//Testing
		$local_video="ShowCase/17/trail4/Tile6/$name_file";
		move_uploaded_file($tmp_name, $local_video);
		$videoUpload="UPDATE $tableName SET Text_File=NULL, Image=NULL, Video='$name_file', Audio= NULL where Tile_ID=$tile_no";
		mysqli_query($dbc, $videoUpload);
 	 }


 	 ?>
</div>
<!--Pop up for video upload Start-->
<!--Video Upload end-->

<!-- Upload Audio -->
<!--Audio upload icon start-->
<input type="radio" name="RadioTile6" id="RadioTile6Audio" onchange="enableTile6()"/>
<a href="#openAudioUpload6" id="AudioIconTile6">
	<img src="images/audioupload.jpg" class="icon" title="Add Audio">
</a>
<!--Audio upload icon end-->
<br>
<!--Pop up for Audio upload Start-->
<div id="openAudioUpload6" class="modalDialog">
	<div>
	<a href="#close" title="Close" class="close">
		<img src="images/close.png" class="button">
	</a>
	<h2>Choose an Audio</h2>
	<br>
	<form method="post" enctype="multipart/form-data">
	<input type="file" name="uploaded_file" accept="audio/*"/>
	<input type="submit" value="Add Audio" name="Add_audio_Tile6" id="add_audio6"/>
	</form>		
	</div>
	<!--Close Pop Up when clicked on Add Start-->
	 <script>
 	 $( "#add_audio6" ).click(function() { $(location).attr('href', '#close');});
 	 </script>
 	 <!--Close Pop Up when clicked on Add Start-->

 	 <?php

 	 if(isset($_POST['Add_audio_Tile6'])){
 	 	$tile_no=6; 
 	 	$name_file=$_FILES['uploaded_file']['name'];
		$tmp_name=$_FILES['uploaded_file']['tmp_name'];
		//orginal syntax:
		//$local_audio="$_SESSION['TilePath']"."6/ $name_file";
		//Testing
		$local_audio="ShowCase/17/trail4/Tile6/$name_file";
		move_uploaded_file($tmp_name, $local_audio);
		$audioUpload="UPDATE $tableName SET Text_File=NULL, Image=NULL, Video=NULL, Audio= '$name_file' where Tile_ID=$tile_no";
		mysqli_query($dbc, $audioUpload);
 	 }
 	 ?>
</div>
<br>
<!--Pop up for Audio upload end-->
<!--Audio Upload End-->

<!--Play button-->
<a href="#playbutton6" id="PlayIConTile6">
	<img src="images/playbutton.png" class="button" title="Play">
</a>
<div id="playbutton6" class="modalDialog">
	<div>
	<!--close button-->
	<a href="#close" title="Close"  id="close6" class="close">
		<img src="images/close.png" class="button">
	</a>
	
	<?php
	$close="close6";
	$id="PlayIConTile6";
	$tile_no=6;
	$query="select * from $tableName where Tile_ID=$tile_no";
	$result=mysqli_query($dbc, $query);
	echo $row['Tile_ID'];

	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    $text=$row["Text_File"];
    $imageName=$row['Image'];
    $videoName=$row['Video'];
    $audioName=$row['Audio'];
     if($text!=null){
     	$type6="text";
    	//orginal syntax:
		//$path=$_SESSION['TilePath']."6/Tile1Text.txt";
		//Testing
		$path="ShowCase/17/trail4/Tile6/".$text;
    	displayText($path);
    }else if($imageName!=NULL){
    	$type6="image";
    	//orginal syntax:
		//$path=$_SESSION['TilePath']."6/".$imageName;
		//Testing
		$path="ShowCase/17/trail4/Tile6/".$imageName; 
		displayImage($path);
    }else if($videoName!=NULL){
    	$type6="video";
		$videoid="video6";
    	//orginal syntax:
		//$path=$_SESSION['TilePath']."6/".$videoName;
		//Testing
		$path="ShowCase/17/trail4/Tile6/".$videoName;
		displayVideo($path,$id, $close, $videoid);
    } else if($audioName!=NULL){
    	$type6="audio";
    	$audioid="audio6";
    	//orginal syntax:
		//$path=$_SESSION['TilePath']."6/".$audioName;
		//Testing
		$path="ShowCase/17/trail4/Tile6/".$audioName;
		displayAudio($path,$id, $close, $audioid);
    }else{
    	$type6="empty";
    }
?> <input type="hidden" name="type" value="<?=$type6 ?>" id="Tile6Type"/>
<?php 
	
}
}
	?>
	</div>
</div>
<!--Play End-->


<!--Delete Button-->
<form method="post" style="display: inline-block;">
<button id="DeleteTile6" style="background-color:#ffffff; border:0px;padding:0px" name="Deletedata6">
<img src="images/deletebutton.png" class="button"  title="Delete Tile" id="DeleteIcon6" style="display:block;">
<img src="images/reloadbutton.png" class="reload" id="Del-swap6" style="display:none;"/>
</button>
</form>

<!--Delete and reload tile Function JQuery-->

<script>
$( "#DeleteTile6" ).click(function() {
  $( "#TextIconTile6, #ImageIconTile6, #PlayIConTile6,#AudioIconTile6, #VideoIconTile6, #Del-swap6, #DeleteIcon6,  #RadioTile6Text, #RadioTile6Image, #RadioTile6Video, #RadioTile6Audio").toggle();
});
</script>

<?php
	$tile_no=6;
	if(isset($_POST['Deletedata6'])){
	$query="UPDATE $tableName SET Text_File=NULL, Image=NULL, Video=NULL, Audio=NULL where Tile_ID=$tile_no";
	mysqli_query($dbc, $query);
	}
?>
<!--Delete End-->

<!--End of Tile 6-->
</div>

<br>
<!--second Row end-->
</div>


<div class="row" align="center">

<!-- Start of Tile 7  -->
<div id="Tile"  class="col-sm-2">

<!--Title of the Tile-->
<div class="TileName">X</div>

<!-- Input Text.-->
<!--Text upload icon Start-->
<input type="radio" name="RadioTile7" id="RadioTile7Text" onchange="enableTile7()"/>
<a href="#openTextUpload7" id="TextIconTile7">
	<img src="images/textupload.png" class="icon" title="Add Text">
</a>
<!--Text upload icon End-->
<!--Pop up for text upload-->
<div id="openTextUpload7" class="modalDialog">
	<div>
	<a href="#close" title="Close" class="close">
		<img src="images/close.png" class="button">
	</a>
	<h2>Enter Text of Choice</h2>
	<br>
	<form method="post" enctype="multipart/form-data" >
	<textarea rows="5" cols="15" id="text_tile7" name="textTile7"></textarea><br>
	<input type="submit" value="Add Text" name="Add_text_Tile7" id="add_text7"  class="add_text"/>
	</form>
	</div>
	<!--Close Pop Up when clicked on Add Start-->
	 <script>
 	 $( "#add_text7" ).click(function() { $(location).attr('href', '#close');});
 	 </script>
 	 <!--Close Pop Up when clicked on Add Start-->

 	 	<?php 
	if(isset($_POST['Add_text_Tile7'])){

		$tile_no=7;
		$dataEntered=$_POST['textTile7'];
		// Original:$path=$_SESSION['TilePath']."7/Tile7Text.txt";
		//Testing:
		$path='Showcase/17/trail4/Tile7/Tile7Text.txt';
		$TextFileTile7=fopen($path,"w+");
		file_put_contents($path, "");
		fwrite($TextFileTile7, $dataEntered);
		fclose($TextFileTile7);
		$textUploadTile7="UPDATE $tableName SET Text_File='Tile7Text.txt', Image=NULL, Video=NULL, Audio= NULL where Tile_ID=$tile_no";
		$re=@mysqli_query($dbc, $textUploadTile7);

	}
	?>
</div>
<!--Pop up for text upload End-->
<!--Upload Text End-->

<!-- Upload Image-->
<!--Image Upload Icon Start -->
<input type="radio" name="RadioTile7" id="RadioTile7Image" onchange="enableTile7()"/>
<a href="#openImageUpload7" id="ImageIconTile7">
	<img src="images/imageupload.png" class="icon" title="Add Image">
</a>
<!--Image Upload Icon End -->
<!-- Pop up for Image Upload Start-->
<div id="openImageUpload7" class="modalDialog">
	<div>
	<a href="#close" title="Close" class="close">
		<img src="images/close.png" class="button">
	</a>
	<h2>Choose an Image</h2>
	<br>
	<form method="post" enctype="multipart/form-data">
	<input type="file" name="image_tile7" accept="image/*"/>
		<input type="submit" value="Add Image" name="Add_image_Tile7" id="add_image7"/>
	</form>		
	</div>
				<!--Close Pop Up when clicked on Add Start-->
	 <script>
 	 $( "#add_image7" ).click(function() { $(location).attr('href', '#close');});
 	 </script>
 	 <!--Close Pop Up when clicked on Add Start-->

	 <?php

 	 if(isset($_POST['Add_image_Tile7'])){
 	 	$tile_no=7; 
 	 	$name_file=$_FILES['image_tile7']['name'];
		$tmp_name=$_FILES['image_tile7']['tmp_name'];
		//orginal syntax:
		//$local_image="$_SESSION['TilePath']"."7/$name_file";
		//Testing
		$local_image="ShowCase/17/trail4/Tile7/$name_file";
		move_uploaded_file($tmp_name, $local_image);
		$imageUpload="UPDATE $tableName SET Text_File=NULL, Image='$name_file', Video=NULL, Audio= NULL where Tile_ID=$tile_no";
		mysqli_query($dbc, $imageUpload);
 	 }


 	 ?>
</div>
<!-- Pop up for Image Upload Start-->
<!--Image Upload end-->

<br><br>

<!-- Upload Video -->
<!--Video Upload Icon Start -->
<input type="radio" name="RadioTile7" id="RadioTile7Video" onchange="enableTile7()"/>
<a href="#openVideoUpload7" id="VideoIconTile7">
	<img src="images/videoupload.png" class="icon" title="Add Video">
</a>
<!--Video Upload Icon End-->
<!--Pop up for video upload Start-->
<div id="openVideoUpload7" class="modalDialog">
	<div>
	<a href="#close" title="Close" class="close">
		<img src="images/close.png" class="button">
	</a>
	<h2>Choose a Video </h2>
	<br>
	<form method="post" enctype="multipart/form-data">
	<input type="file" name="uploaded_video" accept="video/*"/>
	<input type="submit" value="Add Video" name="Add_video_Tile7" id="add_video7"/>
	</form>		
	</div
	<!--Close Pop Up when clicked on Add Start-->
	 <script>
 	 $( "#add_video7" ).click(function() { $(location).attr('href', '#close');});
 	 </script>
 	 <!--Close Pop Up when clicked on Add Start-->
	 <?php

 	 if(isset($_POST['Add_video_Tile7'])){
 	 	$tile_no=7; 
 	 	$name_file=$_FILES['uploaded_video']['name'];
		$tmp_name=$_FILES['uploaded_video']['tmp_name'];
		//orginal syntax:
		//$local_image="$_SESSION['TilePath']"."7/$name_file";
		//Testing
		$local_video="ShowCase/17/trail4/Tile7/$name_file";
		move_uploaded_file($tmp_name, $local_video);
		$videoUpload="UPDATE $tableName SET Text_File=NULL, Image=NULL, Video='$name_file', Audio= NULL where Tile_ID=$tile_no";
		mysqli_query($dbc, $videoUpload);
 	 }


 	 ?></div>
<!--Pop up for video upload Start-->
<!--Video Upload end-->

<!-- Upload Audio -->
<!--Audio upload icon start-->
<input type="radio" name="RadioTile7" id="RadioTile7Audio" onchange="enableTile7()"/>
<a href="#openAudioUpload7" id="AudioIconTile7">
	<img src="images/audioupload.jpg" class="icon" title="Add Audio">
</a>
<!--Audio upload icon end-->
<br>
<!--Pop up for Audio upload Start-->
<div id="openAudioUpload7" class="modalDialog">
	<div>
	<a href="#close" title="Close" class="close">
		<img src="images/close.png" class="button">
	</a>
	<h2>Choose an Audio</h2>
	<br>
	<form method="post" enctype="multipart/form-data">
	<input type="file" name="uploaded_file" accept="audio/*"/>
	<input type="submit" value="Add Audio" name="Add_audio_Tile7" id="add_audio7"/>
	</form>		
	</div>
	<!--Close Pop Up when clicked on Add Start-->
	 <script>
 	 $( "#add_audio7" ).click(function() { $(location).attr('href', '#close');});
 	 </script>
 	 <!--Close Pop Up when clicked on Add Start-->

 	 <?php

 	 if(isset($_POST['Add_audio_Tile7'])){
 	 	$tile_no=7; 
 	 	$name_file=$_FILES['uploaded_file']['name'];
		$tmp_name=$_FILES['uploaded_file']['tmp_name'];
		//orginal syntax:
		//$local_audio="$_SESSION['TilePath']"."7/ $name_file";
		//Testing
		$local_audio="ShowCase/17/trail4/Tile7/$name_file";
		move_uploaded_file($tmp_name, $local_audio);
		$audioUpload="UPDATE $tableName SET Text_File=NULL, Image=NULL, Video=NULL, Audio= '$name_file' where Tile_ID=$tile_no";
		mysqli_query($dbc, $audioUpload);
 	 }
 	 ?>
</div>
<br>
<!--Pop up for Audio upload end-->
<!--Audio Upload End-->

<!--Play button-->
<a href="#playbutton7" id="PlayIConTile7">
	<img src="images/playbutton.png" class="button" title="Play">
</a>
<div id="playbutton7" class="modalDialog">
	<div>
	<!--close button-->
	<a href="#close" title="Close" id="close7" class="close">
		<img src="images/close.png" class="button">
	</a>

	<?php
	$close="close7";
	$id="PlayIConTile7";
	$tile_no=7;
	$query="select * from $tableName where Tile_ID=$tile_no";
	$result=mysqli_query($dbc, $query);
	echo $row['Tile_ID'];

	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    $text=$row["Text_File"];
    $imageName=$row['Image'];
    $videoName=$row['Video'];
    $audioName=$row['Audio'];
     if($text!=null){
     	$type7="text";
    	//orginal syntax:
		//$path=$_SESSION['TilePath']."7/Tile1Text.txt";
		//Testing
		$path="ShowCase/17/trail4/Tile7/".$text;
    	displayText($path);
    }else if($imageName!=NULL){
    	$type7="image";
    	//orginal syntax:
		//$path=$_SESSION['TilePath']."7/".$imageName;
		//Testing
		$path="ShowCase/17/trail4/Tile7/".$imageName; 
		displayImage($path);
    }else if($videoName!=NULL){
    	$type7="video";
    	$videoid="video7";
    	//orginal syntax:
		//$path=$_SESSION['TilePath']."7/".$videoName;
		//Testing
		$path="ShowCase/17/trail4/Tile7/".$videoName;
		displayVideo($path,$id, $close, $videoid);
    } else if($audioName!=NULL){
    	$type7="audio";
    	$audioid="audio7";
    	//orginal syntax:
		//$path=$_SESSION['TilePath']."7/".$audioName;
		//Testing
		$path="ShowCase/17/trail4/Tile7/".$audioName;
		displayAudio($path,$id, $close, $audioid);
    }else{
    	$type7="empty";
    }
?> <input type="hidden" name="type" value="<?=$type7 ?>" id="Tile7Type"/>
<?php 
	
}
}
?>
	</div>
</div>
<!--Play End-->


<!--Delete Button-->
<form method="post" style="display: inline-block;">
<button id="DeleteTile7" style="background-color:#ffffff; border:0px;padding:0px" name="Deletedata7">
<img src="images/deletebutton.png" class="button"  title="Delete Tile" id="DeleteIcon7" style="display:block;">
<img src="images/reloadbutton.png" class="reload" id="Del-swap7" style="display:none;"/>
</button>
</form>

<!--Delete and reload tile Function JQuery-->

<script>
$( "#DeleteTile7" ).click(function() {
  $( "#TextIconTile7, #ImageIconTile7, #PlayIConTile7, #AudioIconTile7, #VideoIconTile7, #Del-swap7, #DeleteIcon7,  #RadioTile7Text, #RadioTile7Image, #RadioTile7Video, #RadioTile7Audio").toggle();
});
</script>

<?php
	$tile_no=7;
	if(isset($_POST['Deletedata7'])){
	$query="UPDATE $tableName SET Text_File=NULL, Image=NULL, Video=NULL, Audio=NULL where Tile_ID=$tile_no";
	mysqli_query($dbc, $query);
	}
?>
<!--Delete End-->

<!--End of Tile 7-->
</div>

<!-- Start of Tile 8  -->
<div id="Tile"  class="col-sm-2">

<!--Title of Tile.-->
<div class="TileName">Y</div>

<!-- Input Text.-->

<!--Text upload icon Start-->
<input type="radio" name="RadioTile8" id="RadioTile8Text" onchange="enableTile8()"/>
<a href="#openTextUpload8" id="TextIconTile8">
	<img src="images/textupload.png" class="icon" title="Add Text">
</a>
<!--Text upload icon End-->
<!--Pop up for text upload-->
<div id="openTextUpload8" class="modalDialog">
	<div>
	<a href="#close" title="Close" class="close">
		<img src="images/close.png" class="button">
	</a>
	<h2>Enter Text of Choice</h2>
	<br>
	<form method="post" enctype="multipart/form-data" >
	<textarea rows="5" cols="15" id="text_tile8" name="textTile8"></textarea><br>
	<input type="submit" value="Add Text" name="Add_text_Tile8" id="add_text8"  class="add_text"/>
	</form>
	</div>
	<!--Close Pop Up when clicked on Add Start-->
	 <script>
 	 $( "#add_text8" ).click(function() { $(location).attr('href', '#close');});
 	 </script>
 	 <!--Close Pop Up when clicked on Add Start-->
 	 	<?php 
	if(isset($_POST['Add_text_Tile8'])){

		$tile_no=8;
		$dataEntered=$_POST['textTile8'];
		// Original:$path=$_SESSION['TilePath']."8/Tile8Text.txt";
		//Testing:
		$path='Showcase/17/trail4/Tile8/Tile8Text.txt';
		$TextFileTile8=fopen($path,"w+");
		file_put_contents($path, "");
		fwrite($TextFileTile8, $dataEntered);
		fclose($TextFileTile8);
		$textUploadTile8="UPDATE $tableName SET Text_File='Tile8Text.txt', Image=NULL, Video=NULL, Audio= NULL where Tile_ID=$tile_no";
		$re=@mysqli_query($dbc, $textUploadTile8);

	}
	?>
</div>
<!--Pop up for text upload End-->
<!--Upload Text End-->


<!-- Upload Image-->
<!--Image Upload Icon Start -->
<input type="radio" name="RadioTile8" id="RadioTile8Image"  onchange="enableTile8()"/>
<a href="#openImageUpload8" id="ImageIconTile8">
	<img src="images/imageupload.png" class="icon" title="Add Image">
</a>
<!--Image Upload Icon End -->
<!-- Pop up for Image Upload Start-->
<div id="openImageUpload8" class="modalDialog">
	<div>
	<a href="#close" title="Close" class="close">
		<img src="images/close.png" class="button">
	</a>
	<h2>Choose an Image</h2>
	<br>
	<form method="post" enctype="multipart/form-data">
	<input type="file" name="image_tile8" accept="image/*"/>
		<input type="submit" value="Add Image" name="Add_image_Tile8" id="add_image8"/>
	</form>		
	</div>
					<!--Close Pop Up when clicked on Add Start-->
	 <script>
 	 $( "#add_image8" ).click(function() { $(location).attr('href', '#close');});
 	 </script>
 	 <!--Close Pop Up when clicked on Add Start-->

	 <?php

 	 if(isset($_POST['Add_image_Tile8'])){
 	 	$tile_no=8; 
 	 	$name_file=$_FILES['image_tile8']['name'];
		$tmp_name=$_FILES['image_tile8']['tmp_name'];
		//orginal syntax:
		//$local_image="$_SESSION['TilePath']"."8/$name_file";
		//Testing
		$local_image="ShowCase/17/trail4/Tile8/$name_file";
		move_uploaded_file($tmp_name, $local_image);
		$imageUpload="UPDATE $tableName SET Text_File=NULL, Image='$name_file', Video=NULL, Audio= NULL where Tile_ID=$tile_no";
		mysqli_query($dbc, $imageUpload);
 	 }


 	 ?>
</div>
<!-- Pop up for Image Upload Start-->
<!--Image Upload end-->

<br><br>

<!-- Upload Video -->
<!--Video Upload Icon Start -->
<input type="radio" name="RadioTile8" id="RadioTile8Video"  onchange="enableTile8()"/>
<a href="#openVideoUpload8" id="VideoIconTile8">
	<img src="images/videoupload.png" class="icon" title="Add Video">
</a>
<!--Video Upload Icon End-->
<!--Pop up for video upload Start-->
<div id="openVideoUpload8" class="modalDialog">
	<div>
	<a href="#close" title="Close" class="close">
		<img src="images/close.png" class="button">
	</a>
	<h2>Choose a Video </h2>
	<br>
	<form method="post" enctype="multipart/form-data">
	<input type="file" name="uploaded_video" accept="video/*"/>
	<input type="submit" value="Add Video" name="Add_video_Tile8" id="add_video8"/>
	</form>		
	</div>
	<!--Close Pop Up when clicked on Add Start-->
	 <script>
 	 $( "#add_video8" ).click(function() { $(location).attr('href', '#close');});
 	 </script>
 	 <!--Close Pop Up when clicked on Add Start-->
	 <?php

 	 if(isset($_POST['Add_video_Tile8'])){
 	 	$tile_no=8; 
 	 	$name_file=$_FILES['uploaded_video']['name'];
		$tmp_name=$_FILES['uploaded_video']['tmp_name'];
		//orginal syntax:
		//$local_image="$_SESSION['TilePath']"."8/$name_file";
		//Testing
		$local_video="ShowCase/17/trail4/Tile8/$name_file";
		move_uploaded_file($tmp_name, $local_video);
		$videoUpload="UPDATE $tableName SET Text_File=NULL, Image=NULL, Video='$name_file', Audio= NULL where Tile_ID=$tile_no";
		mysqli_query($dbc, $videoUpload);
 	 }


 	 ?>
</div>
<!--Pop up for video upload end-->
<!--Video Upload end-->

<!-- Upload Audio -->
<!--Audio upload icon start-->
<input type="radio" name="RadioTile8" id="RadioTile8Audio"  onchange="enableTile8()"/>
<a href="#openAudioUpload8" id="AudioIconTile8">
	<img src="images/audioupload.jpg" class="icon" title="Add Audio">
</a>
<!--Audio upload icon End-->
<br>
<!--Pop up for Audio upload Start-->
<div id="openAudioUpload8" class="modalDialog">
	<div>
	<a href="#close" title="Close" class="close">
		<img src="images/close.png" class="button">
	</a>
	<h2>Choose an Audio</h2>
	<br>
	<form method="post" enctype="multipart/form-data">
	<input type="file" name="uploaded_file" accept="audio/*"/>
	<input type="submit" value="Add Audio" name="Add_audio_Tile8" id="add_audio8"/>
	</form>		
	</div>
	<!--Close Pop Up when clicked on Add Start-->
	 <script>
 	 $( "#add_audio8" ).click(function() { $(location).attr('href', '#close');});
 	 </script>
 	 <!--Close Pop Up when clicked on Add Start-->

 	 <?php

 	 if(isset($_POST['Add_audio_Tile8'])){
 	 	$tile_no=8; 
 	 	$name_file=$_FILES['uploaded_file']['name'];
		$tmp_name=$_FILES['uploaded_file']['tmp_name'];
		//orginal syntax:
		//$local_audio="$_SESSION['TilePath']"."8/ $name_file";
		//Testing
		$local_audio="ShowCase/17/trail4/Tile8/$name_file";
		move_uploaded_file($tmp_name, $local_audio);
		$audioUpload="UPDATE $tableName SET Text_File=NULL, Image=NULL, Video=NULL, Audio= '$name_file' where Tile_ID=$tile_no";
		mysqli_query($dbc, $audioUpload);
 	 }
 	 ?>
</div>
<br>
<!--Pop up for Audio upload end-->
<!--Audio Upload End-->

<!--Play button-->
<a href="#playbutton8" id="PlayIConTile8">
	<img src="images/playbutton.png" class="button" title="Play">
</a>
<div id="playbutton8" class="modalDialog">
	<div>
	<!--close button-->
	<a href="#close" title="Close"  id="close8" class="close">
		<img src="images/close.png" class="button">
	</a>

	<?php
	$close="close8";
	$id="PlayIConTile8";
	$tile_no=8;
	$query="select * from $tableName where Tile_ID=$tile_no";
	$result=mysqli_query($dbc, $query);

	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    $text=$row["Text_File"];
    $imageName=$row['Image'];
    $videoName=$row['Video'];
    $audioName=$row['Audio'];
    $type="";
     if($text!=null){
    	$type8="text";
    	//orginal syntax:
		//$path=$_SESSION['TilePath']."8/Tile1Text.txt";
		//Testing
		
		$path="ShowCase/17/trail4/Tile8/".$text;
    	displayText($path);
    }else if($imageName!=NULL){
    	$type8="image";
    	//orginal syntax:
		//$path=$_SESSION['TilePath']."8/".$imageName;
		//Testing
		$path="ShowCase/17/trail4/Tile8/".$imageName; 
		displayImage($path);
    }else if($videoName!=NULL){
    	$type8="video";
    	$videoid="video8";
    	//orginal syntax:
		//$path=$_SESSION['TilePath']."8/".$videoName;
		//Testing
		
		$path="ShowCase/17/trail4/Tile8/".$videoName;
		displayVideo($path,$id, $close,$videoid);
    } else if($audioName!=NULL){
    	$type8="audio";
    	$audioid="audio8";
    	//orginal syntax:
		//$path=$_SESSION['TilePath']."8/".$audioName;
		//Testing
		
		$path="ShowCase/17/trail4/Tile8/".$audioName;
		displayAudio($path,$id,$close, $audioid);

    }else{
    	$type8="empty";
    }
?> <input type="hidden" name="type" value="<?=$type8 ?>" id="Tile8Type"/>
<?php 
	
}
}
?>

	</div>
</div>
<!--Play End-->



<!--Delete Button-->
<form method="post" style="display: inline-block;">
<button id="DeleteTile8" style="background-color:#ffffff; border:0px;padding:0px" name="Deletedata8">
<img src="images/deletebutton.png" class="button"  title="Delete Tile" id="DeleteIcon8" style="display:block;">
<img src="images/reloadbutton.png" class="reload" id="Del-swap8" style="display:none;"/>
</button>
</form>

<!--Delete and reload tile Function JQuery-->

<script>
$( "#DeleteTile8" ).click(function() {
  $( "#TextIconTile8, #ImageIconTile8, #PlayIConTile8,#AudioIconTile8, #VideoIconTile8, #Del-swap8, #DeleteIcon8, #RadioTile8Text, #RadioTile8Image, #RadioTile8Video, #RadioTile8Audio").toggle();
});
</script>

<?php
	$tile_no=8;
	if(isset($_POST['Deletedata8'])){
	$query="UPDATE $tableName SET Text_File=NULL, Image=NULL, Video=NULL, Audio=NULL where Tile_ID=$tile_no";
	mysqli_query($dbc, $query);
	}
?>
<!--Delete End-->

<!--End of Tile 8-->
</div>


<!-- Start of Tile 9  -->
<div id="Tile" class="col-sm-2">

<!-- Title of the Tile.-->
<div class="TileName">Z</div>

<!-- Input Text.-->

<!--Text upload icon Start-->
<input type="radio" name="RadioTile9" id="RadioTile9Text"  onchange="enableTile9()"/>
<a href="#openTextUpload9" id="TextIconTile9">
	<img src="images/textupload.png" class="icon" title="Add Text">
</a>
<!--Text upload icon End-->
<!--Pop up for text upload-->
<div id="openTextUpload9" class="modalDialog">
	<div>
	<a href="#close" title="Close" class="close">
		<img src="images/close.png" class="button">
	</a>
	<h2>Enter Text of Choice</h2>
	<br>
	<form method="post" enctype="multipart/form-data" >
	<textarea rows="5" cols="15" id="text_tile19" name="textTile9"></textarea><br>
	<input type="submit" value="Add Text" name="Add_text_Tile9" id="add_text9"  class="add_text"/>
	</form>
	</div>
	<!--Close Pop Up when clicked on Add Start-->
	 <script>
 	 $( "#add_text9" ).click(function() { $(location).attr('href', '#close');});
 	 </script>
 	 <!--Close Pop Up when clicked on Add Start-->
 	 	<?php 
	if(isset($_POST['Add_text_Tile9'])){

		$tile_no=9;
		$dataEntered=$_POST['textTile9'];
		// Original:$path=$_SESSION['TilePath']."9/Tile9Text.txt";
		//Testing:
		$path='Showcase/17/trail4/Tile9/Tile9Text.txt';
		$TextFileTile9=fopen($path,"w+");
		file_put_contents($path, "");
		fwrite($TextFileTile9, $dataEntered);
		fclose($TextFileTile9);
		$textUploadTile9="UPDATE $tableName SET Text_File='Tile9Text.txt', Image=NULL, Video=NULL, Audio= NULL where Tile_ID=$tile_no";
		$re=@mysqli_query($dbc, $textUploadTile9);

	}
	?>
</div>
<!--Pop up for text upload End-->
<!--Upload Text End-->

<!-- Upload Image-->
<!--Image Upload Icon Start -->
<input type="radio" name="RadioTile9" id="RadioTile9Image" onchange="enableTile9()"/>
<a href="#openImageUpload9" id="ImageIconTile9">
	<img src="images/imageupload.png" class="icon" title="Add Image">
</a>
<!--Image Upload Icon End -->
<!-- Pop up for Image Upload Start-->
<div id="openImageUpload9" class="modalDialog">
	<div>
	<a href="#close" title="Close" class="close">
		<img src="images/close.png" class="button">
	</a>
	<h2>Choose an Image</h2>
	<br>
	<form method="post" enctype="multipart/form-data">
	<input type="file" name="image_tile9" accept="image/*"/>
	<input type="submit" value="Add Image" name="Add_image_Tile9" id="add_image9"/>
	</form>		
	</div>
					<!--Close Pop Up when clicked on Add Start-->
	 <script>
 	 $( "#add_image9" ).click(function() { $(location).attr('href', '#close');});
 	 </script>
 	 <!--Close Pop Up when clicked on Add Start-->

	 <?php

 	 if(isset($_POST['Add_image_Tile9'])){
 	 	$tile_no=9; 
 	 	$name_file=$_FILES['image_tile9']['name'];
		$tmp_name=$_FILES['image_tile9']['tmp_name'];
		//orginal syntax:
		//$local_image="$_SESSION['TilePath']"."9/$name_file";
		//Testing
		$local_image="ShowCase/17/trail4/Tile9/$name_file";
		move_uploaded_file($tmp_name, $local_image);
		$imageUpload="UPDATE $tableName SET Text_File=NULL, Image='$name_file', Video=NULL, Audio= NULL where Tile_ID=$tile_no";
		mysqli_query($dbc, $imageUpload);
 	 }


 	 ?>
</div>
<!-- Pop up for Image Upload End-->
<!--Image Upload end-->

<br><br>

<!-- Upload Video -->
<!--Video Upload Icon Start -->
<input type="radio" name="RadioTile9" id="RadioTile9Video" onchange="enableTile9()"/>
<a href="#openVideoUpload9" id="VideoIconTile9">
	<img src="images/videoupload.png" class="icon" title="Add Video">
</a>
<!--Video Upload Icon End -->
<!--Pop up for video upload Start-->
<div id="openVideoUpload9" class="modalDialog">
	<div>
	<a href="#close" title="Close" class="close">
		<img src="images/close.png" class="button">
	</a>
	<h2>Choose a Video </h2>
	<br>
	<form method="post" enctype="multipart/form-data">
	<input type="file" name="uploaded_video" accept="video/*"/>
	<input type="submit" value="Add Video" name="Add_video_Tile9" id="add_video9"/>
	
	</form>		
	</div>
	<!--Close Pop Up when clicked on Add Start-->
	 <script>
 	 $( "#add_video9" ).click(function() { $(location).attr('href', '#close');});
 	 </script>
 	 <!--Close Pop Up when clicked on Add Start-->
	 <?php

 	 if(isset($_POST['Add_video_Tile9'])){
 	 	$tile_no=9; 
 	 	$name_file=$_FILES['uploaded_video']['name'];
		$tmp_name=$_FILES['uploaded_video']['tmp_name'];
		//orginal syntax:
		//$local_image="$_SESSION['TilePath']"."9/$name_file";
		//Testing
		$local_video="ShowCase/17/trail4/Tile9/$name_file";
		move_uploaded_file($tmp_name, $local_video);
		$videoUpload="UPDATE $tableName SET Text_File=NULL, Image=NULL, Video='$name_file', Audio= NULL where Tile_ID=$tile_no";
		mysqli_query($dbc, $videoUpload);
 	 }


 	 ?>
</div>
<!--Pop up for video upload end-->
<!--Video Upload end-->

<!-- Upload Audio -->
<!--Audio upload icon start-->
<input type="radio" name="RadioTile9" id="RadioTile9Audio" onchange="enableTile9()"/>
<a href="#openAudioUpload9" id="AudioIconTile9">
	<img src="images/audioupload.jpg" class="icon" title="Add Audio">
</a>
<!--Audio upload icon End-->
<br>
<!--Pop up for Audio upload Start-->
<div id="openAudioUpload9" class="modalDialog">
	<div>
	<a href="#close" title="Close" class="close">
		<img src="images/close.png" class="button">
	</a>
	<h2>Choose an Audio</h2>
	<br>
	<form method="post" enctype="multipart/form-data">
	<input type="file" name="uploaded_file" accept="audio/*"/>
	<input type="submit" value="Add Audio" name="Add_audio_Tile9" id="add_audio9"/>
	</form>		
	</div>
	<!--Close Pop Up when clicked on Add Start-->
	 <script>
 	 $( "#add_audio9" ).click(function() { $(location).attr('href', '#close');});
 	 </script>
 	 <!--Close Pop Up when clicked on Add Start-->

 	 <?php

 	 if(isset($_POST['Add_audio_Tile9'])){
 	 	$tile_no=9; 
 	 	$name_file=$_FILES['uploaded_file']['name'];
		$tmp_name=$_FILES['uploaded_file']['tmp_name'];
		//orginal syntax:
		//$local_audio="$_SESSION['TilePath']"."9/ $name_file";
		//Testing
		$local_audio="ShowCase/17/trail4/Tile9/$name_file";
		move_uploaded_file($tmp_name, $local_audio);
		$audioUpload="UPDATE $tableName SET Text_File=NULL, Image=NULL, Video=NULL, Audio= '$name_file' where Tile_ID=$tile_no";
		mysqli_query($dbc, $audioUpload);
 	 }
 	 ?>
</div>
<br>
<!--Pop up for Audio upload End-->
<!--Audio Upload End-->

<!--Play button-->
<a href="#playbutton9" id="PlayIConTile9">
	<img src="images/playbutton.png" class="button" title="Play">
</a>
<div id="playbutton9" class="modalDialog">
	<div>
	<!--close button-->
	<a href="#close" title="Close"  id="close9" class="close">
		<img src="images/close.png" class="button">
	</a>
	
	<?php
	$close="close9";
	$id="PlayIConTile9";
	$tile_no=9;
	$query="select * from $tableName where Tile_ID=$tile_no";
	$result=mysqli_query($dbc, $query);
	echo $row['Tile_ID'];

	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    $text=$row["Text_File"];
    $imageName=$row['Image'];
    $videoName=$row['Video'];
    $audioName=$row['Audio'];
     if($text!=null){
     	$type9="text";
    	//orginal syntax:
		//$path=$_SESSION['TilePath']."9/Tile9Text.txt";
		//Testing
		$path="ShowCase/17/trail4/Tile9/".$text;
    	displayText($path);
    }else if($imageName!=NULL){
    	$type9="image";
    	//orginal syntax:
		//$path=$_SESSION['TilePath']."9/".$imageName;
		//Testing
		$path="ShowCase/17/trail4/Tile9/".$imageName; 
		displayImage($path);
    }else if($videoName!=NULL){
    	$type9="video";
    	$videoid="video9";
    	//orginal syntax:
		//$path=$_SESSION['TilePath']."9/".$videoName;
		//Testing
		$path="ShowCase/17/trail4/Tile9/".$videoName;
		displayVideo($path,$id,$close,$videoid);
    } else if($audioName!=NULL){
    	$type9="audio";
    	$audioid="audio8";
    	//orginal syntax:
		//$path=$_SESSION['TilePath']."9/".$audioName;
		//Testing
		$path="ShowCase/17/trail4/Tile9/".$audioName;
		displayAudio($path,$id,$close, $audioid);
  }else{
    	$type9="empty";
    }
?> <input type="hidden" name="type" value="<?=$type9 ?>" id="Tile9Type"/>
<?php 
	
}
}
?>
	</div>
</div>
<!--Play End-->


<!--Delete Button-->
<form method="post" style="display: inline-block;">
<button id="DeleteTile9" style="background-color:#ffffff; border:0px;padding:0px" name="Deletedata9">
<img src="images/deletebutton.png" class="button"  title="Delete Tile" id="DeleteIcon9" style="display:block;">
<img src="images/reloadbutton.png" class="reload" id="Del-swap9" style="display:none;"/>
</button>
</form>

<!--Delete and reload tile Function JQuery-->

<script>
$( "#DeleteTile9" ).click(function() {
  $( "#TextIconTile9, #ImageIconTile9, #PlayIConTile9,#AudioIconTile9, #VideoIconTile9, #Del-swap9, #DeleteIcon9,  #RadioTile9Text, #RadioTile9Image, #RadioTile9Video, #RadioTile9Audio").toggle();
});
</script>
<?php
	$tile_no=9;
	if(isset($_POST['Deletedata9'])){
	$query="UPDATE $tableName SET Text_File=NULL, Image=NULL, Video=NULL, Audio=NULL where Tile_ID=$tile_no";
	mysqli_query($dbc, $query);
	}
?>
<!--Delete End-->

<!--End of Tile 9-->
</div>

<br>
<!--Third Row end-->
</div>

<!--To be edited --> 
<!--Final container-->
</div>
<br>
<!--Modes-->
<!-- Instructions-->

<input type="button" value="Manual" class="modes" id="btnHome" onclick="play(['1','2','3','4','5','6','7','8','9'])" /><br>
<h6> Enter the Tile Sequence seperated by comas. You will have to enter the index of the deleted tiles also. <br> example: A,B,C,L,M,N,X,Y,Z </h6>
<input type="text" name="slideshow" id="slideshowsequence" size="40" style="border:2px solid; border-radius:25px;">
<label id="slideShowAlert" style="color:red"></label>
<input type="button" value="Slideshow" class="modes" id="slideshow" onclick="slideshow()" /><br>
<input type="button" value="sparkle" class="modes" id="sparkleButton" onclick="sparkle()" />
</div>

<!--End of Column 2-->
</div>
<!--End of the Div -->
</div>
</body>
</html>
