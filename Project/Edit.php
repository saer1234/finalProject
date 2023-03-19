<html>
<head>
</head>
<body>
<div id="demo">
<p id="demoI">hello world</p>
<p id="demo@">hello world</p>
<p id="demo#">hello world</p>
<p id="demo$">hello world</p>
</div>
<script>

document.getElementById("demo").addEventListener("click",function(){
	
	var main = document.getElementById("demo");
	var content = document.getElementById("demoI");
	
var editText = document.createElement("input");
editText.type="text";
editText.value=content.innerHTML;
editText.id=content.innerHTML+"1";
editText.addEventListener("keydown",function(event){
if(event.code=="Enter")
{
	let value= editText.value;
	main.removeChild(editText);
	content.innerHTML= value;
	main.appendChild(content);
}
	
});
main.removeChild(content);
main.appendChild(editText);

});
</script>
</body>
</html>