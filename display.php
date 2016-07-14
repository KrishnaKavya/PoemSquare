<?php
function display(){
echo "<script>alert('Testing')</script>";

}

function displayText($arg){
echo "Display method calls".$arg;
$myfile = fopen($arg, "r") or die("Unable to open file!");
echo "<br>";
echo fread($myfile,filesize($arg));
fclose($myfile);
}


function displayImage($path){
echo "<img src='$path' height=200px width=200px>";
}

function displayVideo($path){
echo "<video width='320' height='240' controls>
<source src='$path' type='video/mp4'>Your browser does not support the video tag.</video>";
}

function displayAudio($path){
echo "<audio controls>
<source src='$path' type='audio/ogg'>
Your browser does not support the audio element.
</audio>";
}


function deleteTile(){
echo "<script>alert('Testing')</script>";



}
?>