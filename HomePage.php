<!--The user who enters the Home page logins with a unique User ID.
	Session variable will have the details about the user which will be carry forwarded. 
	For Inditial implementation and Testing  user id:17 user_login is used:Krishna 
	Deploment Changes: user login, ID
-->
<?php
session_start();
$_SESSION['ID']=17;
$_SESSION['user_login']="Krishna";
?>

<!DOCTYPE html>
<html>
<head>

	<title>Home Page</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--CSS File-->
	<link rel="stylesheet" type="text/css" href="style/HomePageStyle.css">
</head>
<!-- The Philosophical instructions of PoemSquare.-->
<body>
<h1>PoemSquare</h1>
<hr>
<div>
<p>
<br>
Translate the poem into a PoemSquare. A PoemSquare is a multi-media experience you will compose from media files that you or others have
created or found and have stored in the Remaking Poetry database.  The PoemSquare synthesizes representations of the poem<sup>'</sup>s sounds, images,
words, and movement in a different art form. <br><br>

To begin, reflect on your observations from the experiments and draw some conclusions about what and how the poem means for you.  As you are designing your PoemSquare translation, here are some things to think about:<br><br>
</p>
<ul style="text-align:left;">
		<li>What interests, skills, or experiences of yours might bring an interesting interpretive perspective to your translation?  For example,can    
		you dance the poem or particular lines in it, paint it, mime it, play it on a musical instrument?  How would you convert those innovative expressions of the poem into a digital format?  What electronic devices might you use to do that?  Or what media files that you have located might you use in your translation?
		</li>
		<br>
		
		<li>
	    What phases or movements does the original poem seem to go through?  How will your translation reflect those phases, if at all?
		</li>
		<br>
		<li>
		What associations do the poem<sup>'</sup>s images have?  Will the stills and/or videos you choose for your translation depict the verbal images 		literally?  Figuratively?  Impressionistically?  Or will you use different styles in combination?  How will your selection and treatment of graphic elements reflect the essence of the poem? 
		</li>
		<br>
		<li>
		What words or concepts change over the course of the original poem?  How will you account for those changes in your translation?  If you 	    were only going to incorporate a few words from the original text into your translation, what words would you choose? How would you use
        font, size, and color so that the visual appearance of the words helps to communicate your perception of the poem?  Or will you use your own words?  Or will you use no words at all?
        </li>
		<br>
        <li>
    	What impact do specific sound features have on the poem?  How does sound contribute to your understanding of the poem?  How will your 
        observations on sound affect your choice of music or other sounds?  Will the sounds you choose highlight your images by matching them or conflicting with them?  Will you use sounds to emphasize the transitions in the poem?  
        </li>
		<br>
        <li>
    	Who will be your audience?  How will your knowledge of your audience affect your translation?
    	</li>
</ul><br/>
<!--Deployment Changes : Href should be changed.-->
<a href="FolderStructure.php"><p id="link">Create a PoemSquare</p></a>
</div>
</body>
</html>