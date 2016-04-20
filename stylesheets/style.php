
<?php
header("Content-type: text/css; charset: UTF-8");
$themer = htmlspecialchars($_GET["taskOption"]);

if($themer == 'default'){
	$style_file = '//Import bootstrap-sprockets
	
		@import "twentyfifteen";
	';
	
	file_put_contents('style.css', $style_file);

	
	require "../scss.inc.php";
	
	$scss = new scssc();
	
	echo $scss->compile($style_file);
	
	$style_file = $scss->compile($style_file);

	echo $style_file;
	
}else{


	$style_file = '//Import bootstrap-sprockets
	
		@import "twentyfifteen";
	
		@import "bootstrap-sprockets";


		// Import slate variables
		@import "bootswatch/'.$themer.'/variables";

		// Then bootstrap itself
		@import "bootstrap";

		// Bootstrap body padding for fixed navbar
		//body { padding-top: 50px; }

		// And finally bootswatch style itself
		@import "bootswatch/'.$themer.'/bootswatch";
		
		// Import awesome checkbox code
		@import "awesome-bootstrap-checkbox";
		
		// Whatever application styles you have go last
		@import "base";
		
		//Load the particular wordpress theme styles
		//@import "twentyfifteen-'.$themer.'";
		
		//Load the other than twentyfifteen default wordpress theme styles
		@import "twentyfifteen-other";
		
	';
	
	file_put_contents('style.css', $style_file);

	
	require "../scss.inc.php";
	
	$scss = new scssc();
	
	echo $scss->compile($style_file);
	
	$style_file = $scss->compile($style_file);

	echo $style_file;
	
}	
 
?>