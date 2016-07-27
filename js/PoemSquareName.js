/*
Function to disable continue button. 
*/
function disableContinue(){
	document.getElementById("continueButton").disabled = true;
}
/*
The alert message if the PoemSquare name alreadye exists. 
*/
function alreadyExists(){
	alert("The PoemSquare already exists. Please try another name."); 
}
/*
The validate name validates the name of the PoemSquare. 
1. Checks if the PoemSquare is not empty.
2. The Length of the PoemSquare name cannot be greater than 15. 
3. When the conditions are satisfied the continue button is enabled. 
*/
function validateName(){
	var nameEntered=document.getElementById('poemSquareName').value;
	var trimedName= nameEntered.trim();

	if(trimedName.length==0 || trimedName==undefined || trimedName== null){
		document.getElementById('alert').innerHTML="The name of the PoemSquare Cannot be empty";
	}
	else if(trimedName.length>15){
		document.getElementById('alert').innerHTML="The name of the PoemSquare Cannot be more than 10 Characters";
	}
	else{
		document.getElementById('alert').innerHTML=" ";
		document.getElementById("continueButton").disabled = false;
	}
}


/*
The Folder Structure is page is redirected to Poem.php 
Deployment changes, 
*/
function redirect(){
	window.location = "poem.php";
}