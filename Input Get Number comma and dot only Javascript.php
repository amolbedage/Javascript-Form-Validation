<!DOCTYPE html>
<html>
<head>
<style>
.ancestors * { 
    display: block;
    border: 2px solid lightgrey;
    color: lightgrey;
    padding: 5px;
    margin: 15px;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body>
<!--<input type="text" name="txt" value="Hello" onkeyup="myFunction(this.value)">-->
 Enter only Numbers: 
        <input type="text" id="tbNumbers" value="" onkeypress="javascript:return isNumber(event,this.value)" />
<script>
  function isNumber(evt,tetxval) {
	//console.log(evt.keyCode)
	  //console.log(event.key);
	  //
	//var tetxval =$("#tbNumbers").val();
	  
        var iKeyCode = (evt.which) ? evt.which : evt.keyCode
		 // console.log(iKeyCode);

        if (iKeyCode != 46 && iKeyCode > 31 && iKeyCode != 44 &&(iKeyCode < 48 || iKeyCode > 57))
		{
		  return false;	
		}
		if(iKeyCode == 46 || iKeyCode == 44)
		{
			if(tetxval.split("").indexOf(",")!=-1 || tetxval.split("").indexOf(".")!=-1)
			{
				return false;
			}
		}
         
        return true;
    }    
</script>
</body>
</html>
