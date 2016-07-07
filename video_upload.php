<!doctype html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <title>toggle demo</title>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
<script type="text/javascript">
  $(document).ready(function() {
            alert("READY");
        });
?>
</script>
<!--Tile 1 -->
<div id="Tile1" class="col-sm-2" id>

<!--Title of the tile -->
<div class="TileName">A</div>

<!-- Input Text.-->
<!--Text upload icon Start-->
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
  <textarea rows="5" cols="15" id="text_tile1"></textarea><br>
  <button>add</button>
  <input type='submit' value="Add Text" name="Add_text"/>
  </form>

  </div>
</div>
<!--Pop up for text upload End-->
<!--PHP PART-->



<!-- Upload Image-->
<!--Image Upload Icon Start -->
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
  <form  method="Post" enctype="multipart/form-data">
  <input type="file" name="uploaded_image" accept="image/*"/>
  <input type="submit" value="Upload Image" id="Upload_Image" name="submit_image"/>
  </form>   

  </div>
    <script>
   $( "submit_Image" ).click(function() {
  $(location).attr('href', '#close');
    });
  </script>

<?php

            if(isset($_POST["submit_image"])) {
            echo "djshdk";

            }
 ?> 
</div>

<!-- Pop up for Image Upload End-->
<!--Image Upload end-->
<br><br>

<!-- Upload Video -->
<!--Video Upload Icon Start -->
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
  </form>   
  </div>
</div>
<!--Video Upload Icon End -->
<!--Video Upload end-->

<!-- Upload Audio -->
<!--Audio upload icon Start-->
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
  <form method="post" enctype="multipart/form-data">
  <input type="file" name="uploaded_file" accept="image/video/audio/*"/>
  </form>   
  </div>
</div>
<br>
<!--Pop up for Audio upload end-->
<!--Audio Upload End-->

<!--Play button-->
<a href="#playbutton" id="PlayIconTile1">
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


<!--preview Button-->
<a href="#previewbutton" id="PreviewIconTile1">
  <img src="images/previewbutton.png" class="button" title="Preview">
</a>
<div id="previewbutton" class="modalDialog">
  <div>
  <!--close button-->
  <a href="#close" title="Close" class="close">
    <img src="images/close.png" class="button">
  </a>
  <h2>Preview</h2>
  </div>
</div>
<!-- Preview end-->

<!--Delete Button-->
<button id="DeleteTile1" style="background-color:#ffffff; border:0px;">
<img src="images/deletebutton.png" class="button"  title="Delete Tile" id="DeleteIcon" style="display:block;">
<img src="images/reloadbutton.png" class="button" id="Del-swap" style="display:none;"/>
</button>
<!--End of Tile 1-->
</div>

 
<script>
$( "#DeleteTile1" ).click(function() {
  $( "#TextIconTile1, #ImageIconTile1, #PlayIconTile1, #PreviewIconTile1,#AudioIconTile1, #VideoIconTile1, #Del-swap, #DeleteIcon").toggle();
});
</script>
 
</body>
</html>