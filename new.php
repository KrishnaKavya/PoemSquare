<!DOCTYPE html>
<html>
<head>
<!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <title></title>
</head>
<script> 

$(document).ready(function(){
    $('.my-link').bind('click', function(e){
        e.preventDefault();
})
});

$("#abc").click(function(){
    alert("sdsjds");
$('.my-link').unbind('click')
});


</script>
<body>
<form>
<input type="radio" id="abc"><a href="http://google.com" class="my-link">Click me</a>
</form> 
<br>
<a href="http://google.com" class="my-link">Click me</a>

</body>
</html>