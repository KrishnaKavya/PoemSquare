

var   Tile1Text, Tile1Image, Tile1Video, Tile1Audio, Tile2Text, Tile2Image, Tile2Video, Tile2Audio, Tile3Text, Tile3Image, Tile3Video, Tile3Audio, Tile4Text, Tile4Image, Tile4Video, Tile4Audio;

/*
The Disable Link saves all the hrefs of the Upload icons and removes the links.
*/
function disableLink() {

Tile1Text = document.getElementById('TextIconTile1').href;
Tile1Image= document.getElementById('ImageIconTile1').href;
Tile1Video= document.getElementById('VideoIconTile1').href;
Tile1Audio=document.getElementById('AudioIconTile1').href;

 document.getElementById('TextIconTile1').removeAttribute('href');
 document.getElementById('ImageIconTile1').removeAttribute('href');
 document.getElementById('VideoIconTile1').removeAttribute('href');
 document.getElementById('AudioIconTile1').removeAttribute('href');


Tile2Text = document.getElementById('TextIconTile2').href;
Tile2Image= document.getElementById('ImageIconTile2').href;
Tile2Video= document.getElementById('VideoIconTile2').href;
Tile2Audio=document.getElementById('AudioIconTile2').href;

 document.getElementById('TextIconTile2').removeAttribute('href');
 document.getElementById('ImageIconTile2').removeAttribute('href');
 document.getElementById('VideoIconTile2').removeAttribute('href');
 document.getElementById('AudioIconTile2').removeAttribute('href');


Tile3Text = document.getElementById('TextIconTile3').href;
Tile3Image= document.getElementById('ImageIconTile3').href;
Tile3Video= document.getElementById('VideoIconTile3').href;
Tile3Audio=document.getElementById('AudioIconTile3').href;

 document.getElementById('TextIconTile3').removeAttribute('href');
 document.getElementById('ImageIconTile3').removeAttribute('href');
 document.getElementById('VideoIconTile3').removeAttribute('href');
 document.getElementById('AudioIconTile3').removeAttribute('href');

Tile4Text = document.getElementById('TextIconTile4').href;
Tile4Image= document.getElementById('ImageIconTile4').href;
Tile4Video= document.getElementById('VideoIconTile4').href;
Tile4Audio=document.getElementById('AudioIconTile4').href;

 document.getElementById('TextIconTile4').removeAttribute('href');
 document.getElementById('ImageIconTile4').removeAttribute('href');
 document.getElementById('VideoIconTile4').removeAttribute('href');
 document.getElementById('AudioIconTile4').removeAttribute('href');

Tile5Text = document.getElementById('TextIconTile5').href;
Tile5Image= document.getElementById('ImageIconTile5').href;
Tile5Video= document.getElementById('VideoIconTile5').href;
Tile5Audio=document.getElementById('AudioIconTile5').href;

 document.getElementById('TextIconTile5').removeAttribute('href');
 document.getElementById('ImageIconTile5').removeAttribute('href');
 document.getElementById('VideoIconTile5').removeAttribute('href');
 document.getElementById('AudioIconTile5').removeAttribute('href');

Tile6Text = document.getElementById('TextIconTile6').href;
Tile6Image= document.getElementById('ImageIconTile6').href;
Tile6Video= document.getElementById('VideoIconTile6').href;
Tile6Audio=document.getElementById('AudioIconTile6').href;

 document.getElementById('TextIconTile6').removeAttribute('href');
 document.getElementById('ImageIconTile6').removeAttribute('href');
 document.getElementById('VideoIconTile6').removeAttribute('href');
 document.getElementById('AudioIconTile6').removeAttribute('href');


Tile7Text = document.getElementById('TextIconTile7').href;
Tile7Image= document.getElementById('ImageIconTile7').href;
Tile7Video= document.getElementById('VideoIconTile7').href;
Tile7Audio=document.getElementById('AudioIconTile7').href;

 document.getElementById('TextIconTile7').removeAttribute('href');
 document.getElementById('ImageIconTile7').removeAttribute('href');
 document.getElementById('VideoIconTile7').removeAttribute('href');
 document.getElementById('AudioIconTile7').removeAttribute('href');

 Tile8Text = document.getElementById('TextIconTile8').href;
Tile8Image= document.getElementById('ImageIconTile8').href;
Tile8Video= document.getElementById('VideoIconTile8').href;
Tile8Audio=document.getElementById('AudioIconTile8').href;

 document.getElementById('TextIconTile8').removeAttribute('href');
 document.getElementById('ImageIconTile8').removeAttribute('href');
 document.getElementById('VideoIconTile8').removeAttribute('href');
 document.getElementById('AudioIconTile8').removeAttribute('href');

Tile9Text = document.getElementById('TextIconTile9').href;
Tile9Image= document.getElementById('ImageIconTile9').href;
Tile9Video= document.getElementById('VideoIconTile9').href;
Tile9Audio=document.getElementById('AudioIconTile9').href;

 document.getElementById('TextIconTile9').removeAttribute('href');
 document.getElementById('ImageIconTile9').removeAttribute('href');
 document.getElementById('VideoIconTile9').removeAttribute('href');
 document.getElementById('AudioIconTile9').removeAttribute('href');
}

/*
The method checks which radio button is checked. 
Enable the Checked radio button and disable all the other hrefs.
*/
function enableTile1(){
if(document.getElementById('RadioTile1Text').checked==true){
	document.getElementById('TextIconTile1').setAttribute('href',Tile1Text);
}else{
	  document.getElementById('TextIconTile1').removeAttribute('href');
}

if(document.getElementById('RadioTile1Image').checked==true){
	document.getElementById('ImageIconTile1').setAttribute('href',Tile1Image);
}else{
	  document.getElementById('ImageIconTile1').removeAttribute('href');
}

if(document.getElementById('RadioTile1Video').checked==true){
	document.getElementById('VideoIconTile1').setAttribute('href',Tile1Video);
}else{
	  document.getElementById('VideoIconTile1').removeAttribute('href');
}

if(document.getElementById('RadioTile1Audio').checked==true){
	document.getElementById('AudioIconTile1').setAttribute('href',Tile1Audio);
}else{
	  document.getElementById('AudioIconTile1').removeAttribute('href');
}
}

/*
The method checks which radio button is checked. 
Enable the Checked radio button and disable all the other hrefs.
*/

function enableTile2(){

if(document.getElementById('RadioTile2Text').checked==true){
	document.getElementById('TextIconTile2').setAttribute('href',Tile2Text);
}else{
	  document.getElementById('TextIconTile2').removeAttribute('href');
}

if(document.getElementById('RadioTile2Image').checked==true){
	document.getElementById('ImageIconTile2').setAttribute('href',Tile2Image);
}else{
	  document.getElementById('ImageIconTile2').removeAttribute('href');
}

if(document.getElementById('RadioTile2Video').checked==true){
	document.getElementById('VideoIconTile2').setAttribute('href',Tile2Video);
}else{
	  document.getElementById('VideoIconTile2').removeAttribute('href');
}

if(document.getElementById('RadioTile2Audio').checked==true){
	document.getElementById('AudioIconTile2').setAttribute('href',Tile2Audio);
}else{
	  document.getElementById('AudioIconTile2').removeAttribute('href');
}

}

/*
The method checks which radio button is checked. 
Enable the Checked radio button and disable all the other hrefs.
*/
function enableTile3() {

if(document.getElementById('RadioTile3Text').checked==true){
	document.getElementById('TextIconTile3').setAttribute('href',Tile3Text);
}else{
	  document.getElementById('TextIconTile3').removeAttribute('href');
}

if(document.getElementById('RadioTile3Image').checked==true){
	document.getElementById('ImageIconTile3').setAttribute('href',Tile3Image);
}else{
	  document.getElementById('ImageIconTile3').removeAttribute('href');
}

if(document.getElementById('RadioTile3Video').checked==true){
	document.getElementById('VideoIconTile3').setAttribute('href',Tile3Video);
}else{
	  document.getElementById('VideoIconTile3').removeAttribute('href');
}

if(document.getElementById('RadioTile3Audio').checked==true){
	document.getElementById('AudioIconTile3').setAttribute('href',Tile3Audio);
}else{
	  document.getElementById('AudioIconTile3').removeAttribute('href');
}

}

/*
The method checks which radio button is checked. 
Enable the Checked radio button and disable all the other hrefs.
*/
function enableTile4() {

if(document.getElementById('RadioTile4Text').checked==true){
	document.getElementById('TextIconTile4').setAttribute('href',Tile4Text);
}else{
	  document.getElementById('TextIconTile4').removeAttribute('href');
}

if(document.getElementById('RadioTile4Image').checked==true){
	document.getElementById('ImageIconTile4').setAttribute('href',Tile4Image);
}else{
	  document.getElementById('ImageIconTile4').removeAttribute('href');
}

if(document.getElementById('RadioTile4Video').checked==true){
	document.getElementById('VideoIconTile4').setAttribute('href',Tile4Video);
}else{
	  document.getElementById('VideoIconTile4').removeAttribute('href');
}

if(document.getElementById('RadioTile4Audio').checked==true){
	document.getElementById('AudioIconTile4').setAttribute('href',Tile4Audio);
}else{
	  document.getElementById('AudioIconTile4').removeAttribute('href');
}

}

/*
The method checks which radio button is checked. 
Enable the Checked radio button and disable all the other hrefs.
*/
function enableTile5() {

if(document.getElementById('RadioTile5Text').checked==true){
	document.getElementById('TextIconTile5').setAttribute('href',Tile5Text);
}else{
	  document.getElementById('TextIconTile5').removeAttribute('href');
}

if(document.getElementById('RadioTile5Image').checked==true){
	document.getElementById('ImageIconTile5').setAttribute('href',Tile5Image);
}else{
	  document.getElementById('ImageIconTile5').removeAttribute('href');
}

if(document.getElementById('RadioTile5Video').checked==true){
	document.getElementById('VideoIconTile5').setAttribute('href',Tile5Video);
}else{
	  document.getElementById('VideoIconTile5').removeAttribute('href');
}

if(document.getElementById('RadioTile5Audio').checked==true){
	document.getElementById('AudioIconTile5').setAttribute('href',Tile5Audio);
}else{
	  document.getElementById('AudioIconTile5').removeAttribute('href');
}

}

/*
The method checks which radio button is checked. 
Enable the Checked radio button and disable all the other hrefs.
*/
function enableTile6() {

if(document.getElementById('RadioTile6Text').checked==true){
	document.getElementById('TextIconTile6').setAttribute('href',Tile6Text);
}else{
	  document.getElementById('TextIconTile6').removeAttribute('href');
}

if(document.getElementById('RadioTile6Image').checked==true){
	document.getElementById('ImageIconTile6').setAttribute('href',Tile6Image);
}else{
	  document.getElementById('ImageIconTile6').removeAttribute('href');
}

if(document.getElementById('RadioTile6Video').checked==true){
	document.getElementById('VideoIconTile6').setAttribute('href',Tile6Video);
}else{
	  document.getElementById('VideoIconTile6').removeAttribute('href');
}

if(document.getElementById('RadioTile6Audio').checked==true){
	document.getElementById('AudioIconTile6').setAttribute('href',Tile6Audio);
}else{
	  document.getElementById('AudioIconTile6').removeAttribute('href');
}

}
/*
The method checks which radio button is checked. 
Enable the Checked radio button and disable all the other hrefs.
*/
function enableTile7() {

if(document.getElementById('RadioTile7Text').checked==true){
	document.getElementById('TextIconTile7').setAttribute('href',Tile7Text);
}else{
	  document.getElementById('TextIconTile7').removeAttribute('href');
}

if(document.getElementById('RadioTile7Image').checked==true){
	document.getElementById('ImageIconTile7').setAttribute('href',Tile7Image);
}else{
	  document.getElementById('ImageIconTile7').removeAttribute('href');
}

if(document.getElementById('RadioTile7Video').checked==true){
	document.getElementById('VideoIconTile7').setAttribute('href',Tile7Video);
}else{
	  document.getElementById('VideoIconTile7').removeAttribute('href');
}

if(document.getElementById('RadioTile7Audio').checked==true){
	document.getElementById('AudioIconTile7').setAttribute('href',Tile7Audio);
}else{
	  document.getElementById('AudioIconTile7').removeAttribute('href');
}

}
/*
The method checks which radio button is checked. 
Enable the Checked radio button and disable all the other hrefs.
*/
function enableTile8() {

if(document.getElementById('RadioTile8Text').checked==true){
	document.getElementById('TextIconTile8').setAttribute('href',Tile8Text);
}else{
	  document.getElementById('TextIconTile8').removeAttribute('href');
}

if(document.getElementById('RadioTile8Image').checked==true){
	document.getElementById('ImageIconTile8').setAttribute('href',Tile8Image);
}else{
	  document.getElementById('ImageIconTile8').removeAttribute('href');
}

if(document.getElementById('RadioTile8Video').checked==true){
	document.getElementById('VideoIconTile8').setAttribute('href',Tile8Video);
}else{
	  document.getElementById('VideoIconTile8').removeAttribute('href');
}

if(document.getElementById('RadioTile8Audio').checked==true){
	document.getElementById('AudioIconTile8').setAttribute('href',Tile8Audio);
}else{
	  document.getElementById('AudioIconTile8').removeAttribute('href');
}

}
/*
The method checks which radio button is checked. 
Enable the Checked radio button and disable all the other hrefs.
*/
function enableTile9() {

if(document.getElementById('RadioTile9Text').checked==true){
	document.getElementById('TextIconTile9').setAttribute('href',Tile9Text);
}else{
	  document.getElementById('TextIconTile9').removeAttribute('href');
}

if(document.getElementById('RadioTile9Image').checked==true){
	document.getElementById('ImageIconTile9').setAttribute('href',Tile9Image);
}else{
	  document.getElementById('ImageIconTile9').removeAttribute('href');
}

if(document.getElementById('RadioTile9Video').checked==true){
	document.getElementById('VideoIconTile9').setAttribute('href',Tile9Video);
}else{
	  document.getElementById('VideoIconTile9').removeAttribute('href');
}

if(document.getElementById('RadioTile9Audio').checked==true){
	document.getElementById('AudioIconTile9').setAttribute('href',Tile9Audio);
}else{
	  document.getElementById('AudioIconTile9').removeAttribute('href');
}

}


