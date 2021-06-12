<html>
<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<script>
 function load(){
	 $.ajax({
		 url:"consultar.php",
		 data:"",
		 type:"post",
		 success:function(resp){
			 var j = JSON.parse(resp);
			 var minhaDiv = document.getElementById("resp");
			 minhaDiv.innerHTML = ""
			 for(reg in j){
			 minhaDiv.innerHTML += j[reg].ra + " - " + j[reg].nome + "<br>";
			 }
		 }
     
	 });
	 
 }
</script>
</head>
<body>
<input type="button" value="Carregar" onClick="load()"/>
<div id="resp">
</div>
</body>
</html>