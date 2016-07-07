var   Tile1Text, Tile1Image, Tile1Video, Tile1Audio, Tile2Text, Tile2Image, Tile2Video, Tile2Audio, Tile3Text, Tile3Image, Tile3Video, Tile3Audio, Tile4Text, Tile4Image, Tile4Video, Tile4Audio;

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



