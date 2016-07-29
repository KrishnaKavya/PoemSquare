/*
The rand function generates random numbers from the pool 1-9 
*/

function rand(){

var numArr = new Array("1","2","3","4","5","6","7","8","9");
var pickArr = new Array(); 

var length=9;

for(var i=0;i<9;i++){
        var num=numArr[Math.floor((Math.random()*length))];
        pickArr[pickArr.length]=num
        length--;
        numArr.splice(findRank(numArr,num), 1);

    }


    return pickArr;
}

function findRank(seq,n){
    var cnt=0;
    var flag=true;
    for(var i=0;i<seq.length&&flag;i++){
        if(seq[i]==n)flag=false;
        else cnt++;
    }

    return cnt;
} 

/*
The sparkle function generates random sequence and then calls a play function passing the sequence of the paramenter. 
*/
function sparkle(){
  var randomsequence=rand();
  play(randomsequence);

}
/*
The Sequence given by the Mediator is validated. 
The Text box cannot be null.An alert message is given when the user enters sequence without satisfying the rules. 

The Alphabet sequence entered is validated. The numeric sequence is generated from the Alphabetic sequence. 
Play function is called after forming a sequence. 
*/
function slideshow(){
  var finalsequence=[];
  var index=0;
  var slide=document.getElementById('slideshowsequence').value;
  var slidesequence=slide.toUpperCase();
  if(slidesequence==null|| slidesequence.length==0 || slidesequence==undefined){
   document.getElementById('slideShowAlert').innerHTML="You must enter the play order first." ; 
  }else 
      if(slidesequence!=null|| slidesequence.length>0 ){
        document.getElementById('slideShowAlert').innerHTML=" ";
        var slideShowArray=slidesequence.split(",");
           if( (slideShowArray.length==9) && (slideShowArray.indexOf('A')!=-1) && (slideShowArray.indexOf('B')!=-1) && (slideShowArray.indexOf("C")!=-1) && (slideShowArray.indexOf("L")!=-1) && (slideShowArray.indexOf("M")!=-1) && (slideShowArray.indexOf("N")!=-1) && (slideShowArray.indexOf("X")!=-1) && (slideShowArray.indexOf('Y')!=-1) && (slideShowArray.indexOf('Z')!=-1)){
              var i=0;
              for(i=0;i<10;i++){
                var next= slideShowArray[i];
                if(next =="A"){
                  finalsequence[index]=1;
                  index++;
                }else if(next =="B"){
                  finalsequence[index]=2;
                  index++;
                }else if(next =="C"){
                  finalsequence[index]=3;
                  index++;
                }else if(next =="L"){
                  finalsequence[index]=4;
                  index++;
                }else if(next =="M"){
                  finalsequence[index]=5;
                  index++;
                }else if(next =="N"){
                  finalsequence[index]=6;
                  index++;
                }else if(next =="X"){
                  finalsequence[index]=7;
                  index++;
                }else if(next =="Y"){
                  finalsequence[index]=8;
                  index++;
                }else if(next =="Z"){
                  finalsequence[index]=9;
                  index++;
                }
              }

             play(finalsequence);
          } else{
            document.getElementById('slideShowAlert').innerHTML="You must list the letters for all nine tiles" ; 
          }

            // validation for the Tile names and indices 
            // Split the variable with comas and then first check length and then contains. 
            //It should contain all the indices( we need to check contains) and they should be equal to the length of 9 
      } 
}


/*
The Play function displays the Media that is uploaded. 
The Type of themedia is found out throm the Html tag. 
If the media is Audio or video the next method is called when the audio or video stops playing.
In the case of text or image the Play is initiated till 1 second and the next tile is called. 
*/
function play(seq){


alert("click ok to start the Show");
var tile='Tile'+seq[0]+'Type';
var type=$('#Tile'+seq[0]+'Type').val();
if( type=="empty"){
  one2nine(seq);
}

else{
     $("#PlayIConTile"+seq[0]+" img").click();
       if(type=="video" || type=="audio"){
        var typeid=type+seq[0];
       	var vid= document.getElementById(typeid);   
         vid.onended = function() {

          $("#close"+seq[0]+" img").click();
            setTimeout(function() 
              {
                one2nine(seq);
              }, 1000);
          
          };
       }
       else
       {
       	setTimeout(function() 
      	{
          $("#close"+seq[0]+" img").click();
          setTimeout(function() 
              {
            		one2nine(seq);
             	}, 1000);
       }, 1500);
      }
}
}


//Tile2
function one2nine(seq)
{

tile='Tile'+seq[1]+'Type';
var type=$('#Tile'+seq[1]+'Type').val();
if(type=="empty"){
   two2nine(seq);
} 
else{
 $("#PlayIConTile"+seq[1]+" img").click();
 if(type=="video" || type=="audio"){ 	
  var typeid=type+seq[1];
 	var video = document.getElementById(typeid);   
    video.onended = function(e) {
      $("#close"+seq[1]+" img").click();
            setTimeout(function() 
              {
                two2nine(seq);
              }, 1000);
      
        } 
 }
 else 
 {
 	setTimeout(function() 
	{
    $("#close"+seq[1]+" img").click();
          setTimeout(function() 
              {
                two2nine(seq);
              }, 1000);
		
 	}, 1000);
 }
}
 }


//Tile3
function two2nine(seq)
{
tile="Tile"+seq[2]+"Type";
var type=$('#Tile'+seq[2]+'Type').val();
if(type=="empty"){
    three2nine(seq);
}
else{
 $("#PlayIConTile"+seq[2]+" img").click();
 if(type=="video" || type=="audio"){
    var typeid=type+seq[2];
 	  var video = document.getElementById(typeid);   
    video.onended = function(e) {
      $("#close"+seq[2]+" img").click();
            setTimeout(function() 
              {
                three2nine(seq);
              }, 1000);
      
        } 
 }
 else 
 {
 	setTimeout(function() 
	{
    $("#close"+seq[2]+" img").click();
     setTimeout(function() 
              {
                  three2nine(seq);
              }, 1000);
	
 	}, 1000);
 } 
}

}

//Tile4
function three2nine(seq)
{
tile="Tile"+seq[3]+"Type";
var type=$('#Tile'+seq[3]+'Type').val();
if(type=="empty"){
  four2nine(seq);
}
else{
 $("#PlayIConTile"+seq[3]+" img").click();
 if(type=="video" || type=="audio"){
       var typeid=type+seq[3];
  	var video = document.getElementById('typeid');   
    video.onended = function(e) {
    $("#close"+seq[3]+" img").click();
     setTimeout(function() 
              {
                 four2nine(seq);
              }, 1000);
     
        } 
 }
 else 
 {
 	setTimeout(function() 
	{
    $("#close"+seq[3]+" img").click();
     setTimeout(function() 
              {
                four2nine(seq);
              }, 1000);
		
 	}, 1000);
 } 
}
}


//Tile5
function four2nine(seq)
{
tile="Tile"+seq[4]+"Type";
var type=$('#Tile'+seq[4]+'Type').val();
if(type=="empty"){
   five2nine(seq);
}
else{
$("#PlayIConTile"+seq[4]+" img").click();
 if(type=="video" || type=="audio"){
   var typeid=type+seq[4];
 	var video = document.getElementById(typeid);   
    video.onended = function(e) {
      $("#close"+seq[4]+" img").click();
       setTimeout(function() 
              {
                 five2nine(seq);
              }, 1000);
        } 
 }
 else 
 {
 	setTimeout(function() 
	{
    $("#close"+seq[4]+" img").click();
     setTimeout(function() 
              {
                five2nine(seq);
              }, 1000);
	
 	}, 1000);
 } 
}
}


//Tile6
function five2nine(seq)
{
tile="Tile"+seq[5]+"Type";
var type=$('#Tile'+seq[5]+'Type').val();
if(type=="empty"){
   six2nine(seq);
}
else{
 $("#PlayIConTile"+seq[5]+" img").click();
 if(type=="video" || type=="audio"){
   var typeid=type+seq[5];
  var video = document.getElementById(typeid);  
    video.onended = function(e) {
      $("#close"+seq[5]+" img").click();
       setTimeout(function() 
              {
                six2nine(seq);
              }, 1000);
      
        } 
 }
 else 
 {
 	setTimeout(function() 
	{
    
     $("#close"+seq[5]+" img").click();
      setTimeout(function() 
              {
                six2nine(seq);
              }, 1000);
		
 	}, 1000);
 } 
}
}

//Tile7
function six2nine(seq)
{
tile="Tile"+seq[6]+"Type";
var type=$('#Tile'+seq[6]+'Type').val();
if(type="empty"){
  seven2nine(seq);
}
else{
 $("#PlayIConTile"+seq[6]+" img").click();
 if(type=="video" || type=="audio"){
   var typeid=type+seq[6];
 	var video = document.getElementById(typeid);   
    video.onended = function(e) {
       $("#close"+seq[6]+" img").click();
        setTimeout(function() 
              {
                seven2nine(seq);
              }, 1000);
         
        } 
 }
 else 
 {
 	setTimeout(function() 
	{
     $("#close"+seq[6]+" img").click();
      setTimeout(function() 
              {
                seven2nine(seq);
              }, 1000);
		
 	}, 1000);
 } 
}
}

//Tile8
function seven2nine(seq)
{
tile="Tile"+seq[7]+"Type";
var type=$('#Tile'+seq[7]+'Type').val();
if(type=="empty"){
  eight2nine(seq);
}else{
 $("#PlayIConTile"+seq[7]+" img").click();
 if(type=="video" || type=="audio"){
  var typeid=type+seq[7];
 	var video = document.getElementById(typeid);   
    video.onended = function(e) {
       $("#close"+seq[7]+" img").click();
        setTimeout(function() 
              {
                 eight2nine(seq);
              }, 1000);
     
        } 
 }
 else 
 {
 	setTimeout(function() 
	{
     $("#close"+seq[7]+" img").click();
      setTimeout(function() 
              {
                eight2nine(seq);
              }, 1000);
		
 	}, 1000);
 } 
}
}

//Tile9
function eight2nine(seq)
{
tile="Tile"+seq[8]+"Type";
var type=$('#Tile'+seq[8]+'Type').val();
if(type=="empty"){
  alert("End of the Show");
}
else{
 $("#PlayIConTile"+seq[8]+" img").click();
 if(type=="video" || type=="audio"){
  var typeid=type+seq[8];
  var video = document.getElementById(typeid);  
  video.onended = function(e) {
       $("#close"+seq[8]+" img").click();
       alert("End of the Show");
  } 
 }
 else 
 {
 	setTimeout(function() 
	{
    $("#close"+seq[8]+" img").click();
    alert("End of the show");
 	}, 1000);
 } 
}
}