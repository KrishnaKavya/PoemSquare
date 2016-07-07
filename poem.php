<!DOCTYPE html>
<html>
<head>
	<!--Style Sheet-->
	<link rel="stylesheet" type="text/css" href="style.css">
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
	<title>PoemSquare Work Space</title>
</head>
<body onload="disableLink()">
<!--Title-->  
<h1 class="title">PoemSquare</h1>
<!--Instructions-->

<br/><p class="instructions">
<b>Instructions:</b><br>  Select one of the four play modes: manual, slideshow, database, simulcast.  Select a tile, upload media files, and choose settings.  Add text, if you wish.  Preview.  Repeat the process for each tile you want to play in your PoemSquare.  Delete any tiles you will not use.  Click <sup>"</sup>FINISH.<sup>"</sup>  Play your creation from the PoemSquare Showcase.  For more detailed instructions, print out <sup>"</sup>PoemSquare Instructions <sup>"</sup> in <sup>"</sup>Resources.<sup>"</sup>
</p>
<br>
<!--Div  has poem on the first column and poem square on the second-->
<div class="container-fluid">

<div class="row">
<!--Column 1 Poem -->
<div  class="col-sm-5 col-md-5 col-lg-5">

<p id="left"> 
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
	<form method="post" enctype="multipart/form-data" >
	<textarea rows="5" cols="15" id="text_tile1"></textarea><br>
	<input type="submit" value="Add Text" name="Add_text" id="add_text"/>
	</form>
	</div>
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
<a href="#openImageUpload" id="ImageIconTile1">
	<img src="images/imageupload.png" class="icon" title="Add Image">
</a>
<!--Image Upload Icon End -->
<!-- Pop up for Image Upload Start-->
<div id="openImageUpload" class="modalDialog">
	<div>
	<a href="#close" title="Close" class="close">
		<img src="images/close.png" class="button">
	</a>
	<h2>Choose an Image</h2>
	<br>
	<form>
	<input type="file" name="uploaded_image" accept="image/*"/>
	<input type="submit" value="Add Image" name="Add_image" id="add_image"/>
	</form>		
	</div>
	<!--Close Pop Up when clicked on Add Start-->
	 <script>
 	 $( "#add_image" ).click(function() { $(location).attr('href', '#close');});
 	 </script>
 	 <!--Close Pop Up when clicked on Add Start-->
</div>
<!-- Pop up for Image Upload End-->
<!--Image Upload end-->

<br><br>

<!-- Upload Video -->
<!--Video Upload Icon Start -->
<input type="radio" name="RadioTile1" id="RadioTile1Video" onchange="enableTile1()"/>
<a href="#openVideoUpload" id="VideoIconTile1">
	<img src="images/videoupload.png" class="icon" title="Add Video">
</a>
<!--Video Upload Icon End -->
<!--Pop up for video upload Start-->
<div id="openVideoUpload" class="modalDialog">
	<div>
	<a href="#close" title="Close" class="close">
		<img src="images/close.png" class="button">
	</a>
	<h2>Choose a Video </h2>
	<br>
	<form>
	<input type="file" name="uploaded_video" accept="video/*"/>
	<input type="submit" value="Add Video" name="Add_video" id="add_video"/>
	</form>		
	</div>
	<!--Close Pop Up when clicked on Add Start-->
	 <script>
 	 $( "#add_video" ).click(function() { $(location).attr('href', '#close');});
 	 </script>
 	 <!--Close Pop Up when clicked on Add Start-->
</div>
<!--Video Upload Icon End -->
<!--Video Upload end-->

<!-- Upload Audio -->
<!--Audio upload icon Start-->
<input type="radio" name="RadioTile1" id="RadioTile1Audio" onchange="enableTile1()"/>
<a href="#openAudioUpload" id="AudioIconTile1">
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
	<form>
	<input type="file" name="uploaded_file" accept="audio/*"/>
	<input type="submit" value="Add Audio" name="Add_audio" id="add_audio"/>
	</form>		
	</div>
	<!--Close Pop Up when clicked on Add Start-->
	 <script>
 	 $( "#add_audio" ).click(function() { $(location).attr('href', '#close');});
 	 </script>
 	 <!--Close Pop Up when clicked on Add Start-->
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
	<a href="#close" title="Close" class="close">
		<img src="images/close.png" class="button">
	</a>
	<h2>Playing mode</h2>
	</div>
</div>
<!--Play End-->

<!--Delete Button-->
<button id="DeleteTile1" style="background-color:#ffffff; border:0px;padding:0px">
<img src="images/deletebutton.png" class="button"  title="Delete Tile" id="DeleteIcon1" style="display:block;">
<img src="images/reloadbutton.png" class="reload" id="Del-swap1" style="display:none;"/>
</button>

<!--Delete and reload tile Function JQuery-->

<script>
$( "#DeleteTile1" ).click(function() {
  $( "#TextIconTile1, #ImageIconTile1, #PlayIConTile1, #AudioIconTile1, #VideoIconTile1, #Del-swap1, #DeleteIcon1").toggle();
});
</script>
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
<a href="#openTextUpload"  id="TextIconTile2">
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
	<form method="post" enctype="multipart/form-data" >
	<textarea rows="5" cols="15" id="text_tile1"></textarea><br>
	<input type="submit" value="Add Text" name="Add_text" id="add_text"/>
	</form>
	</div>
</div>
<!--Pop up for text upload End-->
<!--Upload Text End-->


<!-- Upload Image-->
<!--Image Upload Icon Start -->
<input type="radio" name="RadioTile2" id="RadioTile2Image" onchange="enableTile2()"/>
<a href="#openImageUpload" id="ImageIconTile2">
	<img src="images/imageupload.png" class="icon" title="Add Image">
</a>
<!--Image Upload Icon End -->
<!-- Pop up for Image Upload Start-->
<div id="openImageUpload" class="modalDialog">
	<div>
	<a href="#close" title="Close" class="close">
		<img src="images/close.png" class="button">
	</a>
	<h2>Choose an Image</h2>
	<br>
	<form>
	<input type="file" name="uploaded_image" accept="image/*"/>
	<input type="submit" value="Add Image" name="Add_image" id="add_image"/>
	</form>		
	</div>
</div>
<!-- Pop up for Image Upload End-->
<!--Image Upload end-->

<br><br>
<!-- Upload Video -->
<!--Video Upload Icon Start -->
<input type="radio" name="RadioTile2" id="RadioTile2Video" onchange="enableTile2()"/>
<a href="#openVideoUpload" id="VideoIconTile2">
	<img src="images/videoupload.png" class="icon" title="Add Video">
</a>
<!--Video Upload Icon End -->
<!--Pop up for video upload Start-->
<div id="openVideoUpload" class="modalDialog">
	<div>
	<a href="#close" title="Close" class="close">
		<img src="images/close.png" class="button">
	</a>
	<h2>Choose a Video </h2>
	<br>
	<form>
	<input type="file" name="uploaded_video" accept="video/*"/>
	<input type="submit" value="Add Video" name="Add_video" id="add_video"/>
	</form>		
	</div>
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
	<form>
	<input type="file" name="uploaded_file" accept="audio/*"/>
	<input type="submit" value="Add Audio" name="Add_audio" id="add_audio"/>
	</form>		
	</div>
</div>
<br>
<!--Pop up for Audio upload end-->
<!--Audio Upload End-->

<!--Play button-->
<a href="#playbutton" id="PlayIConTile2">
	<img src="images/playbutton.png" class="button" title="Play">
</a>
<div id="playbutton" class="modalDialog">
	<div>
	<!--close button-->
	<a href="#close" title="Close" class="close">
		<img src="images/close.png" class="button">
	</a>
	<h2>Play button</h2>
	</div>
</div>
<!--Play End-->


<!--Delete Button-->
<button id="DeleteTile2" style="background-color:#ffffff; border:0px;padding:0px">
<img src="images/deletebutton.png" class="button"  title="Delete Tile" id="DeleteIcon2" style="display:block;">
<img src="images/reloadbutton.png" class="reload" id="Del-swap2" style="display:none;"/>
</button>

<!--Delete and reload tile Function JQuery-->

<script>
$( "#DeleteTile2" ).click(function() {
  $( "#TextIconTile2, #ImageIconTile2, #PlayIConTile2, #AudioIconTile2, #VideoIconTile2, #Del-swap2, #DeleteIcon2").toggle();
});
</script>
<!--Delete End-->

<!--End of Tile 2-->
</div>


<!-- Start of Tile 3  -->
<div id="Tile" class="col-sm-2">
<!-- Title of the Tile-->
<div class="TileName">C</div>

<!-- Input Text.-->

<!--Text upload icon Start-->
<input type="radio" name="RadioTile3" id="RadioTile3Text"/>
<a href="#openTextUpload" id="TextIconTile3">
	<img src="images/textupload.png" class="icon" title="Add Text">
</a>
<!--Text upload icon End-->
<!--Pop up for text upload Start-->
<div id="openTextUpload" class="modalDialog">
	<div>
	<a href="#close" title="Close" class="close">
		<img src="images/close.png" class="button">
	</a>
	<h2>Enter Text of Choice</h2>
	<br>
	<form method="post" enctype="multipart/form-data" >
	<textarea rows="5" cols="15" id="text_tile1"></textarea><br>
	<input type="submit" value="Add Text" name="Add_text" id="add_text"/>
	</form>
	</div>
</div>
<!--Pop up for text upload End-->
<!--Upload Text End-->


<!-- Upload Image-->

<!--Image Upload Icon Start -->
<input type="radio" name="RadioTile3" id="RadioTile3Image"/>
<a href="#openImageUpload" id="ImageIconTile3">
	<img src="images/imageupload.png" class="icon" title="Add Image">
</a>
<!--Image Upload Icon End -->
<!-- Pop up for Image Upload Start-->
<div id="openImageUpload" class="modalDialog">
	<div>
	<a href="#close" title="Close" class="close">
		<img src="images/close.png" class="button">
	</a>
	<h2>Choose an Image</h2>
	<br>
	<form>
	<input type="file" name="uploaded_image" accept="image/*"/>
	<input type="submit" value="Add Image" name="Add_image" id="add_image"/>
	</form>		
	</div>
</div>
<!-- Pop up for Image Upload End-->
<!--Image Upload end-->

<br><br>

<!-- Upload Video -->
<!--Video Upload Icon Start -->
<input type="radio" name="RadioTile3" id="RadioTile3Video"/>
<a href="#openVideoUpload" id="VideoIconTile3">
	<img src="images/videoupload.png" class="icon" title="Add Video">
</a>
<!--Video Upload Icon End-->
<!--Pop up for video upload Start-->
<div id="openVideoUpload" class="modalDialog">
	<div>
	<a href="#close" title="Close" class="close">
		<img src="images/close.png" class="button">
	</a>
	<h2>Choose a Video </h2>
	<br>
	<form>
	<input type="file" name="uploaded_video" accept="video/*"/>
	<input type="submit" value="Add Video" name="Add_video" id="add_video"/>
	</form>		
	</div>
</div>
<!--Pop up for video upload end-->
<!--Video Upload end-->

<!-- Upload Audio -->
<!--Audio upload icon start-->
<input type="radio" name="RadioTile3" id="RadioTile3Audio"/>
<a href="#openAudioUpload" id="AudioIconTile3">
	<img src="images/audioupload.jpg" class="icon" title="Add Audio">
</a>
<!--Audio upload icon start-->
<br>
<!--Pop up for Audio upload Start-->
<div id="openAudioUpload" class="modalDialog">
	<div>
	<a href="#close" title="Close" class="close">
		<img src="images/close.png" class="button">
	</a>
	<h2>Choose an Audio</h2>
	<br>
	<form>
	<input type="file" name="uploaded_file" accept="audio/*"/>
	<input type="submit" value="Add Audio" name="Add_audio" id="add_audio"/>
	</form>		
	</div>
</div>
<br>
<!--Pop up for Audio upload end-->
<!--Audio Upload End-->

<!--Play button-->
<a href="#playbutton" id="PlayIConTile3">
	<img src="images/playbutton.png" class="button" title="Play">
</a>
<div id="playbutton" class="modalDialog">
	<div>
	<!--close button-->
	<a href="#close" title="Close" class="close">
		<img src="images/close.png" class="button">
	</a>
	<h2>Play button</h2>
	</div>
</div>
<!--Play End-->


<!--Delete Button-->
<button id="DeleteTile3" style="background-color:#ffffff; border:0px;padding:0px">
<img src="images/deletebutton.png" class="button"  title="Delete Tile" id="DeleteIcon3" style="display:block;">
<img src="images/reloadbutton.png" class="reload" id="Del-swap3" style="display:none;"/>
</button>

<!--Delete and reload tile Function JQuery-->

<script>
$( "#DeleteTile3" ).click(function() {
  $( "#TextIconTile3, #ImageIconTile3, #PlayIConTile3, #AudioIconTile3, #VideoIconTile3, #Del-swap3, #DeleteIcon3").toggle();
});
</script>
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
<input type="radio" name="RadioTile4" id="RadioTile4Text"/>
<a href="#openTextUpload" id="TextIconTile4">
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
	<form method="post" enctype="multipart/form-data" >
	<textarea rows="5" cols="15" id="text_tile1"></textarea><br>
	<input type="submit" value="Add Text" name="Add_text" id="add_text"/>
	</form>
	</div>
</div>
<!--Pop up for text upload End-->
<!--Upload Text End-->

<!-- Upload Image-->

<!--Image Upload Icon Start -->
<input type="radio" name="RadioTile4" id="RadioTile4Image"/>
<a href="#openImageUpload" id="ImageIconTile4">
	<img src="images/imageupload.png" class="icon" title="Add Image">
</a>
<!--Image Upload Icon End -->
<!-- Pop up for Image Upload Start-->
<div id="openImageUpload" class="modalDialog">
	<div>
	<a href="#close" title="Close" class="close">
		<img src="images/close.png" class="button">
	</a>
	<h2>Choose an Image</h2>
	<br>
	<form>
	<input type="file" name="uploaded_image" accept="image/*"/>
	<input type="submit" value="Add Image" name="Add_image" id="add_image"/>

	</form>		
	</div>
</div>
<!-- Pop up for Image Upload End-->
<!--Image Upload end-->

<br><br>

<!-- Upload Video -->
<!--Video Upload Icon Start -->
<input type="radio" name="RadioTile4" id="RadioTile4Video"/>
<a href="#openVideoUpload" id="VideoIconTile4">
	<img src="images/videoupload.png" class="icon" title="Add Video">
</a>
<!--Video Upload Icon End-->
<!--Pop up for video upload Start-->
<div id="openVideoUpload" class="modalDialog">
	<div>
	<a href="#close" title="Close" class="close">
		<img src="images/close.png" class="button">
	</a>
	<h2>Choose a Video </h2>
	<br>
	<form>
	<input type="file" name="uploaded_video" accept="video/*"/>
	<input type="submit" value="Add Video" name="Add_video" id="add_video"/>
	</form>		
	</div>
</div>
<!--Pop up for video upload end-->
<!--Video Upload end-->

<!-- Upload Audio -->
<!--Audio upload icon start-->
<input type="radio" name="RadioTile4" id="RadioTile4Audio"/>
<a href="#openAudioUpload" id="AudioIconTile4">
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
	<form>
	<input type="file" name="uploaded_file" accept="audio/*"/>
	<input type="submit" value="Add Audio" name="Add_audio" id="add_audio"/>
	</form>		
	</div>
</div>
<br>
<!--Pop up for Audio upload end-->
<!--Audio Upload End-->

<!--Play button-->
<a href="#playbutton" id="PlayIConTile4">
	<img src="images/playbutton.png" class="button" title="Play">
</a>
<div id="playbutton" class="modalDialog">
	<div>
	<!--close button-->
	<a href="#close" title="Close" class="close">
		<img src="images/close.png" class="button">
	</a>
	<h2>Play button</h2>
	</div>
</div>
<!--Play End-->


<!--Delete Button-->
<button id="DeleteTile4" style="background-color:#ffffff; border:0px;padding:0px">
<img src="images/deletebutton.png" class="button"  title="Delete Tile" id="DeleteIcon4" style="display:block;">
<img src="images/reloadbutton.png" class="reload" id="Del-swap4" style="display:none;"/>
</button>

<!--Delete and reload tile Function JQuery-->

<script>
$( "#DeleteTile4" ).click(function() {
  $( "#TextIconTile4, #ImageIconTile4, #PlayIConTile4, #AudioIconTile4, #VideoIconTile4, #Del-swap4, #DeleteIcon4").toggle();
});
</script>
<!--Delete End-->

<!--End of Tile 4-->
</div>

<!-- Start of Tile 5  -->
<div id="Tile"  class="col-sm-2">

<!-- Title of the Tile.-->
<div class="TileName">M</div>

<!-- Input Text.-->

<!--Text upload icon Start-->
<input type="radio" name="RadioTile5" id="RadioTile5Text"/>
<a href="#openTextUpload" id="TextIconTile5">
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
	<form method="post" enctype="multipart/form-data" >
	<textarea rows="5" cols="15" id="text_tile1"></textarea><br>
	<input type="submit" value="Add Text" name="Add_text" id="add_text"/>
	</form>
	</div>
</div>
<!--Pop up for text upload End-->
<!--Upload Text End-->

<!-- Upload Image-->

<!--Image Upload Icon Start -->
<input type="radio" name="RadioTile5" id="RadioTile5Image"/>
<a href="#openImageUpload" id="ImageIconTile5">
	<img src="images/imageupload.png" class="icon" title="Add Image">
</a>
<!--Image Upload Icon End -->
<!-- Pop up for Image Upload Start-->
<div id="openImageUpload" class="modalDialog">
	<div>
	<a href="#close" title="Close" class="close">
		<img src="images/close.png" class="button">
	</a>
	<h2>Choose an Image</h2>
	<br>
	<form>
	<input type="file" name="uploaded_image" accept="image/*"/>
		<input type="submit" value="Add Image" name="Add_image" id="add_image"/>
	</form>		
	</div>
</div>
<!-- Pop up for Image Upload End-->
<!--Image Upload end-->

<br><br>

<!-- Upload Video -->
<!--Video Upload Icon Start -->
<input type="radio" name="RadioTile5" id="RadioTile5Video"/>
<a href="#openVideoUpload" id="VideoIconTile5">
	<img src="images/videoupload.png" class="icon" title="Add Video">
</a>
<!--Video Upload Icon End -->
<!--Pop up for video upload Start-->
<div id="openVideoUpload" class="modalDialog">
	<div>
	<a href="#close" title="Close" class="close">
		<img src="images/close.png" class="button">
	</a>
	<h2>Choose a Video </h2>
	<br>
	<form>
	<input type="file" name="uploaded_video" accept="video/*"/>
	<input type="submit" value="Add Video" name="Add_video" id="add_video"/>
	</form>		
	</div>
</div>
<!--Pop up for video upload end-->
<!--Video Upload end-->

<!-- Upload Audio -->
<!--Audio upload icon start-->
<input type="radio" name="RadioTile5" id="RadioTile5Audio"/>
<a href="#openAudioUpload" id="AudioIconTile5">
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
	<form>
	<input type="file" name="uploaded_file" accept="audio/*"/>
	<input type="submit" value="Add Audio" name="Add_audio" id="add_audio"/>
	</form>		
	</div>
</div>
<br>
<!--Pop up for Audio upload end-->
<!--Audio Upload End-->

<!--Play button-->
<a href="#playbutton" id="PlayIConTile5">
	<img src="images/playbutton.png" class="button" title="Play">
</a>
<div id="playbutton" class="modalDialog">
	<div>
	<!--close button-->
	<a href="#close" title="Close" class="close">
		<img src="images/close.png" class="button">
	</a>
	<h2>Play button</h2>
	</div>
</div>
<!--Play End-->


<!--Delete Button-->
<button id="DeleteTile5" style="background-color:#ffffff; border:0px;padding:0px">
<img src="images/deletebutton.png" class="button"  title="Delete Tile" id="DeleteIcon5" style="display:block;">
<img src="images/reloadbutton.png" class="reload" id="Del-swap5" style="display:none;"/>
</button>

<!--Delete and reload tile Function JQuery-->

<script>
$( "#DeleteTile5" ).click(function() {
  $( "#TextIconTile5, #ImageIconTile5, #PlayIConTile5, #AudioIconTile5, #VideoIconTile5, #Del-swap5, #DeleteIcon5").toggle();
});
</script>
<!--Delete End-->

<!--End of Tile 5-->
</div>


<!-- Start of Tile 6  -->
<div id="Tile" class="col-sm-2">

<!-- Title of the Tile.-->
<div class="TileName">N</div>

<!-- Input Text.-->

<!--Text upload icon Start-->
<input type="radio" name="RadioTile6" id="RadioTile6Text"/>
<a href="#openTextUpload" id="TextIconTile6">
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
	<form method="post" enctype="multipart/form-data" >
	<textarea rows="5" cols="15" id="text_tile1"></textarea><br>
	<input type="submit" value="Add Text" name="Add_text" id="add_text"/>
	</form>
	</div>
</div>
<!--Pop up for text upload End-->
<!--Upload Text End-->

<!-- Upload Image-->
<!--Image Upload Icon Start -->
<input type="radio" name="RadioTile6" id="RadioTile6Image"/>
<a href="#openImageUpload" id="ImageIconTile6">
	<img src="images/imageupload.png" class="icon" title="Add Image">
</a>
<!--Image Upload Icon End -->
<!-- Pop up for Image Upload Start-->
<div id="openImageUpload" class="modalDialog">
	<div>
	<a href="#close" title="Close" class="close">
		<img src="images/close.png" class="button">
	</a>
	<h2>Choose an Image</h2>
	<br>
	<form>
	<input type="file" name="uploaded_image" accept="image/*"/>
		<input type="submit" value="Add Image" name="Add_image" id="add_image"/>
	</form>		
	</div>
</div>
<!-- Pop up for Image Upload End-->
<!--Image Upload end-->

<br><br>

<!-- Upload Video -->
<!--Video Upload Icon Start -->
<input type="radio" name="RadioTile6" id="RadioTile6Video"/>
<a href="#openVideoUpload" id="VideoIconTile6">
	<img src="images/videoupload.png" class="icon" title="Add Video">
</a>
<!--Video Upload Icon End -->
<!--Pop up for video upload Start-->
<div id="openVideoUpload" class="modalDialog">
	<div>
	<a href="#close" title="Close" class="close">
		<img src="images/close.png" class="button">
	</a>
	<h2>Choose a Video </h2>
	<br>
	<form>
	<input type="file" name="uploaded_video" accept="video/*"/>
	<input type="submit" value="Add Video" name="Add_video" id="add_video"/>
	</form>		
	</div>
</div>
<!--Pop up for video upload Start-->
<!--Video Upload end-->

<!-- Upload Audio -->
<!--Audio upload icon start-->
<input type="radio" name="RadioTile6" id="RadioTile6Audio"/>
<a href="#openAudioUpload" id="AudioIconTile6">
	<img src="images/audioupload.jpg" class="icon" title="Add Audio">
</a>
<!--Audio upload icon end-->
<br>
<!--Pop up for Audio upload Start-->
<div id="openAudioUpload" class="modalDialog">
	<div>
	<a href="#close" title="Close" class="close">
		<img src="images/close.png" class="button">
	</a>
	<h2>Choose an Audio</h2>
	<br>
	<form>
	<input type="file" name="uploaded_file" accept="audio/*"/>
	<input type="submit" value="Add Audio" name="Add_audio" id="add_audio"/>
	</form>		
	</div>
</div>
<br>
<!--Pop up for Audio upload end-->
<!--Audio Upload End-->

<!--Play button-->
<a href="#playbutton" id="PlayIConTile6">
	<img src="images/playbutton.png" class="button" title="Play">
</a>
<div id="playbutton" class="modalDialog">
	<div>
	<!--close button-->
	<a href="#close" title="Close" class="close">
		<img src="images/close.png" class="button">
	</a>
	<h2>Play button</h2>
	</div>
</div>
<!--Play End-->


<!--Delete Button-->
<button id="DeleteTile6" style="background-color:#ffffff; border:0px;padding:0px">
<img src="images/deletebutton.png" class="button"  title="Delete Tile" id="DeleteIcon6" style="display:block;">
<img src="images/reloadbutton.png" class="reload" id="Del-swap6" style="display:none;"/>
</button>

<!--Delete and reload tile Function JQuery-->

<script>
$( "#DeleteTile6" ).click(function() {
  $( "#TextIconTile6, #ImageIconTile6, #PlayIConTile6,#AudioIconTile6, #VideoIconTile6, #Del-swap6, #DeleteIcon6").toggle();
});
</script>
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
<input type="radio" name="RadioTile7" id="RadioTile7Text"/>
<a href="#openTextUpload" id="TextIconTile7">
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
	<form method="post" enctype="multipart/form-data" >
	<textarea rows="5" cols="15" id="text_tile1"></textarea><br>
	<input type="submit" value="Add Text" name="Add_text" id="add_text"/>
	</form>
	</div>
</div>
<!--Pop up for text upload End-->
<!--Upload Text End-->

<!-- Upload Image-->
<!--Image Upload Icon Start -->
<input type="radio" name="RadioTile7" id="RadioTile7Image"/>
<a href="#openImageUpload" id="ImageIconTile7">
	<img src="images/imageupload.png" class="icon" title="Add Image">
</a>
<!--Image Upload Icon End -->
<!-- Pop up for Image Upload Start-->
<div id="openImageUpload" class="modalDialog">
	<div>
	<a href="#close" title="Close" class="close">
		<img src="images/close.png" class="button">
	</a>
	<h2>Choose an Image</h2>
	<br>
	<form>
	<input type="file" name="uploaded_image" accept="image/*"/>
		<input type="submit" value="Add Image" name="Add_image" id="add_image"/>
	</form>		
	</div>
</div>
<!-- Pop up for Image Upload Start-->
<!--Image Upload end-->

<br><br>

<!-- Upload Video -->
<!--Video Upload Icon Start -->
<input type="radio" name="RadioTile7" id="RadioTile7Video"/>
<a href="#openVideoUpload" id="VideoIconTile7">
	<img src="images/videoupload.png" class="icon" title="Add Video">
</a>
<!--Video Upload Icon End-->
<!--Pop up for video upload Start-->
<div id="openVideoUpload" class="modalDialog">
	<div>
	<a href="#close" title="Close" class="close">
		<img src="images/close.png" class="button">
	</a>
	<h2>Choose a Video </h2>
	<br>
	<form>
	<input type="file" name="uploaded_video" accept="video/*"/>
	<input type="submit" value="Add Video" name="Add_video" id="add_video"/>
	</form>		
	</div>
</div>
<!--Pop up for video upload Start-->
<!--Video Upload end-->

<!-- Upload Audio -->
<!--Audio upload icon start-->
<input type="radio" name="RadioTile7" id="RadioTile7Audio"/>
<a href="#openAudioUpload" id="AudioIconTile7">
	<img src="images/audioupload.jpg" class="icon" title="Add Audio">
</a>
<!--Audio upload icon end-->
<br>
<!--Pop up for Audio upload Start-->
<div id="openAudioUpload" class="modalDialog">
	<div>
	<a href="#close" title="Close" class="close">
		<img src="images/close.png" class="button">
	</a>
	<h2>Choose an Audio</h2>
	<br>
	<form>
	<input type="file" name="uploaded_file" accept="audio/*"/>
	<input type="submit" value="Add Audio" name="Add_audio" id="add_audio"/>
	</form>		
	</div>
</div>
<br>
<!--Pop up for Audio upload end-->
<!--Audio Upload End-->

<!--Play button-->
<a href="#playbutton" id="PlayIConTile7">
	<img src="images/playbutton.png" class="button" title="Play">
</a>
<div id="playbutton" class="modalDialog">
	<div>
	<!--close button-->
	<a href="#close" title="Close" class="close">
		<img src="images/close.png" class="button">
	</a>
	<h2>Play button</h2>
	</div>
</div>
<!--Play End-->


<!--Delete Button-->
<button id="DeleteTile7" style="background-color:#ffffff; border:0px;padding:0px">
<img src="images/deletebutton.png" class="button"  title="Delete Tile" id="DeleteIcon7" style="display:block;">
<img src="images/reloadbutton.png" class="reload" id="Del-swap7" style="display:none;"/>
</button>

<!--Delete and reload tile Function JQuery-->

<script>
$( "#DeleteTile7" ).click(function() {
  $( "#TextIconTile7, #ImageIconTile7, #PlayIConTile7, #AudioIconTile7, #VideoIconTile7, #Del-swap7, #DeleteIcon7").toggle();
});
</script>
<!--Delete End-->

<!--End of Tile 7-->
</div>

<!-- Start of Tile 8  -->
<div id="Tile"  class="col-sm-2">

<!--Title of Tile.-->
<div class="TileName">Y</div>

<!-- Input Text.-->

<!--Text upload icon Start-->
<input type="radio" name="RadioTile8" id="RadioTile8Text"/>
<a href="#openTextUpload" id="TextIconTile8">
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
	<form method="post" enctype="multipart/form-data" >
	<textarea rows="5" cols="15" id="text_tile1"></textarea><br>
	<input type="submit" value="Add Text" name="Add_text" id="add_text"/>
	</form>
	</div>
</div>
<!--Pop up for text upload End-->
<!--Upload Text End-->


<!-- Upload Image-->
<!--Image Upload Icon Start -->
<input type="radio" name="RadioTile8" id="RadioTile8Image"/>
<a href="#openImageUpload" id="ImageIconTile8">
	<img src="images/imageupload.png" class="icon" title="Add Image">
</a>
<!--Image Upload Icon End -->
<!-- Pop up for Image Upload Start-->
<div id="openImageUpload" class="modalDialog">
	<div>
	<a href="#close" title="Close" class="close">
		<img src="images/close.png" class="button">
	</a>
	<h2>Choose an Image</h2>
	<br>
	<form>
	<input type="file" name="uploaded_image" accept="image/*"/>
		<input type="submit" value="Add Image" name="Add_image" id="add_image"/>
	</form>		
	</div>
</div>
<!-- Pop up for Image Upload Start-->
<!--Image Upload end-->

<br><br>

<!-- Upload Video -->
<!--Video Upload Icon Start -->
<input type="radio" name="RadioTile8" id="RadioTile8video"/>
<a href="#openVideoUpload" id="VideoIconTile8">
	<img src="images/videoupload.png" class="icon" title="Add Video">
</a>
<!--Video Upload Icon End-->
<!--Pop up for video upload Start-->
<div id="openVideoUpload" class="modalDialog">
	<div>
	<a href="#close" title="Close" class="close">
		<img src="images/close.png" class="button">
	</a>
	<h2>Choose a Video </h2>
	<br>
	<form>
	<input type="file" name="uploaded_video" accept="video/*"/>
	<input type="submit" value="Add Video" name="Add_video" id="add_video"/>
	</form>		
	</div>
</div>
<!--Pop up for video upload end-->
<!--Video Upload end-->

<!-- Upload Audio -->
<!--Audio upload icon start-->
<input type="radio" name="RadioTile8" id="RadioTile8Audio"/>
<a href="#openAudioUpload" id="AudioIconTile8">
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
	<form>
	<input type="file" name="uploaded_file" accept="audio/*"/>
	<input type="submit" value="Add Audio" name="Add_audio" id="add_audio"/>
	</form>		
	</div>
</div>
<br>
<!--Pop up for Audio upload end-->
<!--Audio Upload End-->

<!--Play button-->
<a href="#playbutton" id="PlayIConTile8">
	<img src="images/playbutton.png" class="button" title="Play">
</a>
<div id="playbutton" class="modalDialog">
	<div>
	<!--close button-->
	<a href="#close" title="Close" class="close">
		<img src="images/close.png" class="button">
	</a>
	<h2>Play button</h2>
	</div>
</div>
<!--Play End-->



<!--Delete Button-->
<button id="DeleteTile8" style="background-color:#ffffff; border:0px;padding:0px">
<img src="images/deletebutton.png" class="button"  title="Delete Tile" id="DeleteIcon8" style="display:block;">
<img src="images/reloadbutton.png" class="reload" id="Del-swap8" style="display:none;"/>
</button>

<!--Delete and reload tile Function JQuery-->

<script>
$( "#DeleteTile8" ).click(function() {
  $( "#TextIconTile8, #ImageIconTile8, #PlayIConTile8,#AudioIconTile8, #VideoIconTile8, #Del-swap8, #DeleteIcon8").toggle();
});
</script>
<!--Delete End-->

<!--End of Tile 8-->
</div>


<!-- Start of Tile 9  -->
<div id="Tile" class="col-sm-2">

<!-- Title of the Tile.-->
<div class="TileName">Z</div>

<!-- Input Text.-->

<!--Text upload icon Start-->
<input type="radio" name="RadioTile9" id="RadioTile9Text"/>
<a href="#openTextUpload" id="TextIconTile9">
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
	<form method="post" enctype="multipart/form-data" >
	<textarea rows="5" cols="15" id="text_tile1"></textarea><br>
	<input type="submit" value="Add Text" name="Add_text" id="add_text"/>
	</form>
	</div>
</div>
<!--Pop up for text upload End-->
<!--Upload Text End-->

<!-- Upload Image-->
<!--Image Upload Icon Start -->
<input type="radio" name="RadioTile9" id="RadioTile9Image"/>
<a href="#openImageUpload" id="ImageIconTile9">
	<img src="images/imageupload.png" class="icon" title="Add Image">
</a>
<!--Image Upload Icon End -->
<!-- Pop up for Image Upload Start-->
<div id="openImageUpload" class="modalDialog">
	<div>
	<a href="#close" title="Close" class="close">
		<img src="images/close.png" class="button">
	</a>
	<h2>Choose an Image</h2>
	<br>
	<form>
	<input type="file" name="uploaded_image" accept="image/*"/>
	<input type="submit" value="Add Image" name="Add_image" id="add_image"/>
	</form>		
	</div>
</div>
<!-- Pop up for Image Upload End-->
<!--Image Upload end-->

<br><br>

<!-- Upload Video -->
<!--Video Upload Icon Start -->
<input type="radio" name="RadioTile9" id="RadioTile9Video"/>
<a href="#openVideoUpload" id="VideoIconTile9">
	<img src="images/videoupload.png" class="icon" title="Add Video">
</a>
<!--Video Upload Icon End -->
<!--Pop up for video upload Start-->
<div id="openVideoUpload" class="modalDialog">
	<div>
	<a href="#close" title="Close" class="close">
		<img src="images/close.png" class="button">
	</a>
	<h2>Choose a Video </h2>
	<br>
	<form>
	<input type="file" name="uploaded_video" accept="video/*"/>
	<input type="submit" value="Add Video" name="Add_video" id="add_video"/>
	
	</form>		
	</div>
</div>
<!--Pop up for video upload end-->
<!--Video Upload end-->

<!-- Upload Audio -->
<!--Audio upload icon start-->
<input type="radio" name="RadioTile9" id="RadioTile9Audio"/>
<a href="#openAudioUpload" id="AudioIconTile9">
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
	<form>
	<input type="file" name="uploaded_file" accept="audio/*"/>
	<input type="submit" value="Add Audio" name="Add_audio" id="add_audio"/>
	</form>		
	</div>
</div>
<br>
<!--Pop up for Audio upload End-->
<!--Audio Upload End-->

<!--Play button-->
<a href="#playbutton" id="PlayIConTile9">
	<img src="images/playbutton.png" class="button" title="Play">
</a>
<div id="playbutton" class="modalDialog">
	<div>
	<!--close button-->
	<a href="#close" title="Close" class="close">
		<img src="images/close.png" class="button">
	</a>
	<h2>Play button</h2>
	</div>
</div>
<!--Play End-->


<!--Delete Button-->
<button id="DeleteTile9" style="background-color:#ffffff; border:0px;padding:0px">
<img src="images/deletebutton.png" class="button"  title="Delete Tile" id="DeleteIcon9" style="display:block;">
<img src="images/reloadbutton.png" class="reload" id="Del-swap9" style="display:none;"/>
</button>

<!--Delete and reload tile Function JQuery-->

<script>
$( "#DeleteTile9" ).click(function() {
  $( "#TextIconTile9, #ImageIconTile9, #PlayIConTile9,#AudioIconTile9, #VideoIconTile9, #Del-swap9, #DeleteIcon9").toggle();
});
</script>
<!--Delete End-->

<!--End of Tile 9-->
</div>

<br>
<!--Third Row end-->
</div>

<!--To be edited --> 
<!--Final container-->
</div>
<!--End of Column 2-->
</div>
<!--End of the Div -->
</div>
</body>
</html>