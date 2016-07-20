

function play(seq){
var tile='Tile'+seq[0]+'Type';
var type=$('#Tile'+seq[0]+'Type').val();
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

//Tile2
function one2nine(seq)
{

tile='Tile'+seq[1]+'Type';
var type=$('#Tile'+seq[1]+'Type').val();
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

//Tile3
function two2nine(seq)
{
tile="Tile"+seq[2]+"Type";
var type=$('#Tile'+seq[2]+'Type').val();
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

//Tile4
function three2nine(seq)
{
tile="Tile"+seq[3]+"Type";
var type=$('#Tile'+seq[3]+'Type').val();
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


//Tile5
function four2nine(seq)
{
tile="Tile"+seq[4]+"Type";
var type=$('#Tile'+seq[4]+'Type').val();
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


//Tile6
function five2nine(seq)
{
tile="Tile"+seq[5]+"Type";
var type=$('#Tile'+seq[5]+'Type').val();
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

//Tile7
function six2nine(seq)
{
tile="Tile"+seq[6]+"Type";
var type=$('#Tile'+seq[6]+'Type').val();

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

//Tile8
function seven2nine(seq)
{
tile="Tile"+seq[7]+"Type";
var type=$('#Tile'+seq[7]+'Type').val();
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

//Tile9
function eight2nine(seq)
{
tile="Tile"+seq[8]+"Type";
var type=$('#Tile'+seq[8]+'Type').val();
 $("#PlayIConTile"+seq[8]+" img").click();
 if(type=="video" || type=="audio"){
  var typeid=type+seq[8];
  var video = document.getElementById(typeid);  
  video.onended = function(e) {
       $("#close"+seq[8]+" img").click();
  } 
 }
 else 
 {
 	setTimeout(function() 
	{
    $("#close"+seq[8]+" img").click();
 	}, 1000);
 } 
}
