<html>
<head>
<?php 
require_once "functions/functions.php";
	$title = "News";
require_once "blocks/head.php";
	$news = getNews (3,$id);

?>
</head>
<body>
<audio src="main.mp3" controls preload="auto" autobuffer></audio>
<?php require_once"blocks/header.php" ?>
<div id="wrapper">
	<div id="leftCol">
    <?php
		for ($i = 0;$i <count($news); $i++){
			if($i == 0)	
				echo "<div id=\"bigArticle\">";
				else
					echo "<div class=\"article\">";
				echo '<img src="/img/'.$news[$i]["id"].'.jpg" alt="Article '.$news[$i]["id"].'" title="Article '.$news[$i]["id"].'">
            <h2>'.$news[$i]["title"].'</h2>
            <p>'.$news[$i]["intro_text"].'</p>
			<a href="/article.php?id='.$news[$i]["id"].'">
				<div class="more">Next</div>
                </a>
        </div>';
		if ($i == 0)
			echo "<div class=\"clear\"><br></div>";
		}
	?>
    	
        </div>


</body>



</html>