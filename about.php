<html>
<head>
<?php 
	$title = "Verificarea lucrarei:";
require_once "blocks/head.php" 

?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<script>
	$(document).ready ( function () {
		$("select[name='calitatea']").bind("change",function (){
	$.get("calitateaCheck.php", {calitatea: $("select[name='calitatea']").val()}, function (data) {
			data = JSON.parse(data);
			$("select[name='nota']").empty();
			for (var id in data) {
				$("select[name='nota']").append($("<option value='"+ id +"'>"+ data[id] +"</option>"));
			}
			});
		});
	});
	</script>
	<audio src="sound.mp3" controls preload="auto" autobuffer></audio>
</head>
<body>

<?php require_once"blocks/header.php" ?>
<div id="wrapper">
	<div id="leftCol">
    	<div id="about_me">
        <label>St.gr.TI-144 Puhalschi Alexandru: Calitatea lucrarei:</label>
        <select name="calitatea">
        	<option value="o"selected="selected"></option>
            <option value="1">Buna</option>
            <option value="2">Rea</option>
            </select>
            <label>Nota:</label>
            <select name="nota">
            <option value="o"></option>
			</select>
   </div> 	
   </div>
   </div>
</body>



</html>