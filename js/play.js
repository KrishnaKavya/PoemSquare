
function play(seq){
tile="Tile"+seq[0]+"Type";
var type=$('#tile').val();
 $("#PlayIConTile"+seq[0]+" img").click();
 if(type=="video" || type=="audio"){
 	var video = document.getElementById(type);   
    video.onended = function(e) {
      one2nine(seq);
        } 
 }
 else 
 {
 	setTimeout(function() 
	{
		one2nine(seq);
 	}, 1000);
 }

}

//Tile2
function one2nine(seq)
{
tile="Tile"+seq[1]+"Type";
var type=$('#tile').val();
 $("#PlayIConTile"+seq[1]+" img").click();
 if(type=="video" || type=="audio"){ 	
 	var video = document.getElementById(type);   
    video.onended = function(e) {
      two2nine(seq);
        } 
 }
 else 
 {
 	setTimeout(function() 
	{
		two2nine(seq);
 	}, 1000);
 } 
 }

//Tile3
function two2nine(seq)
{
tile="Tile"+seq[2]+"Type";
var type=$('#tile').val();
 $("#PlayIConTile"+seq[2]+" img").click();
 if(type=="video" || type=="audio"){
 	var video = document.getElementById(type);   
    video.onended = function(e) {
      three2nine(seq);
        } 
 }
 else 
 {
 	setTimeout(function() 
	{
		three2nine(seq);
 	}, 1000);
 } 
	
}

//Tile4
function three2nine(seq)
{
tile="Tile"+seq[3]+"Type";
var type=$('#tile').val();
 $("#PlayIConTile"+seq[3]+" img").click();
 if(type=="video" || type=="audio"){
 	var video = document.getElementById(type);   
    video.onended = function(e) {
      four2nine(seq);
        } 
 }
 else 
 {
 	setTimeout(function() 
	{
		four2nine(seq);
 	}, 1000);
 } 
}

//Tile4
function three2nine(seq)
{
tile="Tile"+seq[3]+"Type";
var type=$('#tile').val();
 $("#PlayIConTile"+seq[3]+" img").click();
 if(type=="video" || type=="audio"){
 	var video = document.getElementById(type);   
    video.onended = function(e) {
      four2nine(seq);
        } 
 }
 else 
 {
 	setTimeout(function() 
	{
		four2nine(seq);
 	}, 1000);
 } 
}


//Tile5
function four2nine(seq)
{
tile="Tile"+seq[4]+"Type";
var type=$('#tile').val();
 $("#PlayIConTile"+seq[4]+" img").click();
 if(type=="video" || type=="audio"){
 	var video = document.getElementById(type);   
    video.onended = function(e) {
      five2nine(seq);
        } 
 }
 else 
 {
 	setTimeout(function() 
	{
		five2nine(seq);
 	}, 1000);
 } 
}

//Tile6
function five2nine(seq)
{
tile="Tile"+seq[5]+"Type";
var type=$('#tile').val();
 $("#PlayIConTile"+seq[5]+" img").click();
 if(type=="video" || type=="audio"){
 	var video = document.getElementById(type);   
    video.onended = function(e) {
      six2nine(seq);
        } 
 }
 else 
 {
 	setTimeout(function() 
	{
		six2nine(seq);
 	}, 1000);
 } 
}

//Tile7
function six2nine(seq)
{
tile="Tile"+seq[6]+"Type";
var type=$('#tile').val();
 $("#PlayIConTile"+seq[6]+" img").click();
 if(type=="video" || type=="audio"){
 	var video = document.getElementById(type);   
    video.onended = function(e) {
      seven2nine(seq);
        } 
 }
 else 
 {
 	setTimeout(function() 
	{
		seven2nine(seq);
 	}, 1000);
 } 
}

//Tile8
function seven2nine(seq)
{
tile="Tile"+seq[7]+"Type";
var type=$('#tile').val();
 $("#PlayIConTile"+seq[7]+" img").click();
 if(type=="video" || type=="audio"){
 	var video = document.getElementById(type);   
    video.onended = function(e) {
      eight2nine(seq);
        } 
 }
 else 
 {
 	setTimeout(function() 
	{
		eight2nine(seq);
 	}, 1000);
 } 
}

//Tile9
function eight2nine(seq)
{
tile="Tile"+seq[8]+"Type";
var type=$('#tile').val();
 $("#PlayIConTile"+seq[8]+" img").click();
 if(type=="video" || type=="audio"){
 	var video = document.getElementById(type);   
    video.onended = function(e) {
        } 
 }
 else 
 {
 	setTimeout(function() 
	{
 	}, 1000);
 } 
}