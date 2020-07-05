<?php 
//loads the page
function loadTemplate($filename, $tempVars){
	extract($tempVars);
	ob_start();
	require $filename;
	$content = ob_get_clean();
	return $content;
}
?>