<?php

require_once('mysqli_connect.php'); 
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>audioExample</title>
		<meta name="description" content="">
		<meta name="author" content="M Krishna Kavya">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">
	</head>

	<style>
		.tile {
			border: 2px solid;
			height: 500px;
			width: 600px;
		}
		.tile1 {
			display: inhline;
		}
		#Image_tile1 {
			height: 100 px;
			width: 200px;
			display:inline;
		}
	</style>
	<body>

		<?php
		echo "sds";
		?>

		<div align="center">
			<div id="tile1" class="tile" align="left">
				<div id="Image_tile1" >
						<br>
						<i>Upload Image</i><br>
						<form  method="Post" enctype="multipart/form-data">
						<input type="file" name="image_tile1" accept="image/*"/>
						<input type="submit" value="Upload Image" name="submit_image"/>
						<br>
					</form>

					<?php

						if(isset($_POST["submit_image"])) {

							$tile_no=1; 

							if(getimagesize($_FILES['image_tile1']['tmp_name']) == FALSE)
							{
								echo "Please Select an image"; 
							}else{
								$image= addslashes($_FILES['image_tile1']['tmp_name']);
								$image= file_get_contents($image);
								$image= base64_encode($image);
							}

								$q="UPDATE poemsquare SET Image='$image' where Tile_id='$tile_no'";
								$response = @mysqli_query($dbc, $q);
								if($response){
									echo "<br/> Image Uploaded";
								}
								else{
									echo "<br/> Image not uploaded";
								}


							}

						?>
				</div>
				<div id="Video_tile1">
				<br>
					<i>Upload Video</i>
				<form  method="Post" enctype="multipart/form-data">
						<input type="file" name="video" accept="video/*"/>
						<input type="submit" value="Upload Video" name="Upload_video"/>
					</form>
					<br>
					<?php
					//	upload_max_filesize = 40M;
					//	post_max_size = 40M;

						if(isset($_POST["Upload_video"])) {

							$tile_no=1;
							chmod('uploaded', '0777');
							$name_file=$_FILES['video']['name'];
							$tmp_name=$_FILES['video']['tmp_name'];
							$local_image="uploaded/";
							if(move_uploaded_file($tmp_name, $local_image.$name_file))
							{
								echo "success";
							}

							
							$url= "http://localhost:1234/PoemSquare/uploaded/$name_file";
							$q="UPDATE poemsquare SET Video_url='$url', Video_name='$name_file' where Tile_id='$tile_no'";
							$response1 = @mysqli_query($dbc, $q);
							if($response1){
								echo "Video uploaded";
							}else{
								echo "video not uploded";
							}
							
							$query="SELECT Video_name, Video_url from poemsquare where Tile_id=$tile_no";
							$response2=$dbc->query($query);
							$row=$response2->fetch_array(MYSQLI_ASSOC);
							if($response2){
								$video_name=$row['Video_name'];
							}
							$video_path='uploaded/'.$video_name;
							echo "<br/>".$video_path;	
							echo "<video height='200' width='200' controls> <source src=$video_path type='video/mp4'> your browser does not support</video> "	;

						}
					?>
					
				</div>
				<div id="audio_tle1">

				<br>
				<i>Upload Audio</i>
					<form method="post" enctype="multipart/form-data">
						<input type="file" name="audio" accept="audio/*">
						<input type="submit" name="upload_audio" value="Upload audio">
					</form>
				

				<?php

						$tile_no=1;

						if(isset($_POST["upload_audio"])) {
							
							echo "<br/>";

							$name_file=$_FILES['audio']['name'];
							$tmp_name=$_FILES['audio']['tmp_name'];
							$local_image="uploaded/";

							move_uploaded_file($tmp_name, $local_image.$name_file);

							$q="UPDATE poemsquare SET Audio='$name_file' where Tile_id='$tile_no'";
							$response_audio_upload = @mysqli_query($dbc, $q);
							if($response_audio_upload){
								echo "Audio name uploaded";
							}else{
								echo " not updated in the database"; 
							}

							$query_audio="SELECT Audio from poemsquare where Tile_id=$tile_no";
							$retrive_audio=$dbc->query($query_audio);
							$row=$retrive_audio->fetch_array(MYSQLI_ASSOC);
							$audio_name=$row['Audio'];
							$audio_path='uploaded/'.$audio_name;

							echo "<audio controls> 	<source src='$audio_path' type='audio/ogg'>
						   Your browser does not support the audio element.
						   </audio>";

						}

				?>

				</div>
				<div id="text_tile1">

				</div>

			</div>
		</div>

	</body>
</html>
