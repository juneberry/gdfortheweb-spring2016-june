<?php

$filename = "data.json"; // this is where the list lives

// this decodes the file , data.json, and makes it into
// a list php can deal with
$list = json_decode(file_get_contents($filename));

// if you submitted the form
if(isset($_POST["thing"])){
	// add what was submitted to the list
	array_push($list, $_POST["thing"]);
	// and then encode the list
	$output = json_encode($list);
	// and then save the list back into data.json
	file_put_contents($filename,$output);
}

// uncomment for newer at top of list
$list = array_reverse($list); // the list is its reverse

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<?php echo css('style.css') ?>
	<title>Project 4</title>
</head>
<body>
	
	<!-- this is your form -->
	<form id="answer" action="index.php" method="post">
		<input type="text" name="thing">
		<input type="submit">
	</form>

	<div>
		<!-- this is where the list gets made -->
		<ul>
			<?php
				foreach($list as $item) {  
		    		// everything until the end of the foreach loop
		    		// gets repeated for each item in your list
		    		echo "    <li>".strip_tags($item)."</li>\n";
		    		// "\n" is a carriage return
		  		} 
		  		// it's over, the loop is over.
			?>
		</ul>
	</div>
	
</body>
</html>
