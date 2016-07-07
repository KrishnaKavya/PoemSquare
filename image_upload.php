<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>StackoverFlow answer for question</title>
<script type="text/javascript">

    var link,color;
   
 function disable_link() { 

 
 document.getElementById('testlink').disabled=true;

  link = document.getElementById('testlink').href;
  link2 = document.getElementById('testlink2').href;
  document.getElementById('testlink').removeAttribute('href');
  document.getElementById('testlink2').removeAttribute('href');
   } 


 function enable_link1() { 

  if(document.getElementById('RadioGroup').checked==true){
     document.getElementById('testlink').setAttribute("href",link);
  } else{ 
     document.getElementById('testlink').removeAttribute('href');
  }

  if(document.getElementById('RadioGroup2').checked==true){
     document.getElementById('testlink2').setAttribute("href",link);
  } else{ 
     document.getElementById('testlink2').removeAttribute('href');
  }



 }



</script>
</head>

<body onload="disable_link()">
  <p>
      <input type="radio" name="RadioGroup1" id="RadioGroup" onchange="enable_link1();" />
       <a id="testlink" href="http://www.yahoo.com"> test </a></label>

       <input type="radio" name="RadioGroup1" value="radio" id="RadioGroup2" onchange="enable_link1();" />
       <a id="testlink2" href="http://www.yahoo.com"> test2 </a></label>
    <br />
  </p>
</body>
</html>