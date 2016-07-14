
function validateText(){
	var text=document.getElementById('text_tile1').value;
	var trimedcontent=text.trim();
	if(trimedcontent.length==0 || trimedcontent==undefined || trimedcontent== null){
		document.getElementById('alert').innerHTML="Empty Text cannot be saved. Please enter text. ";
	}else if(trimedcontent.length>0){
		document.getElementById('alert').innerHTML=" ";

	}
}


function validateTextTile2(){
	var text=document.getElementById('text_tile2').value;
	var trimedcontent=text.trim();
	if(trimedcontent.length==0 || trimedcontent==undefined || trimedcontent== null){
		document.getElementById('alertTextTile2').innerHTML="Empty Text cannot be saved. Please enter text. ";
	}else if(trimedcontent.length>0){
		document.getElementById('alertTextTile2').innerHTML=" ";

	}
}

