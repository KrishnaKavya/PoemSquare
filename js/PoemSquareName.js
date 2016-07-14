function disableContinue(){
	document.getElementById("continueButton").disabled = true;
}

function alreadyExists(){
	alert("The PoemSquare already exists. Please try another name. "); 
}

function validateName(){
	var nameEntered=document.getElementById('poemSquareName').value;
	var trimedName= nameEntered.trim();

	if(trimedName.length==0 || trimedName==undefined || trimedName== null){
		document.getElementById('alert').innerHTML="The name of the PoemSquare Cannot be empty";
	}
	else if(trimedName.length>10){
		document.getElementById('alert').innerHTML="The name of the PoemSquare Cannot be more than 10 Characters";
	}
	else{
		document.getElementById('alert').innerHTML=" ";
		document.getElementById("continueButton").disabled = false;
	}
}

function redirect(){
	window.location = "poem.php";
}