<?php

add_action('admin_menu', 'create_theme_options_page');

function create_theme_options_page() {  
	add_options_page('Theme Options', 'Theme Options', 'administrator', basename(__FILE__), 'build_options_page');
}

function build_options_page() {
	
	?>  
	
	<div id="theme-options-wrap">    
		<div class="icon32" id="icon-tools"> <br /></div>    
		<h2>Bootswatch Theme Options</h2>    
		<p>Please select your theme from the following:</p>
		<ul>
			<li>cerulean</li>
			<li>cosmo</li>
			<li>darkly</li>
			<li>flatly</li>
			<li>journal</li>
			<li>lumen</li>
			<li>paper</li>
			<li>readable</li>
			<li>sandstone</li>
			<li>simplex</li>
			<li>slate</li>
			<li>spacelab</li>
			<li>superhero</li>
			<li>united</li>
			<li>yeti</li>
		</ul>
		<div id="style_container" style="display:none"></div>
		<form method="post" action="options.php" enctype="multipart/form-data">  
			<?php settings_fields('plugin_options'); ?>  
			<?php do_settings_sections(basename(__FILE__)); ?>  
			<p class="submit">    
				<input name="Submit" type="submit" class="button-primary" value="<?php esc_attr_e('Save Changes'); ?>" />  
			</p>
		</form>
	</div>
	
<?php
	
}

add_action('admin_init', 'register_and_build_fields');

function register_and_build_fields() {  
	register_setting('plugin_options', 'plugin_options', 'validate_setting');
	add_settings_section('main_section', 'Please Select Theme', 'section_cb', basename(__FILE__));
	add_settings_field('banner_heading', 'Theme:', 'theme_name', basename(__FILE__), 'main_section');
}

function validate_setting($plugin_options) {  
	return $plugin_options;
}

function section_cb() {}

// Banner Heading
function theme_name() {  
	$options = get_option('plugin_options');  
	echo "<input name='plugin_options[banner_heading]' type='text' id='theme_field' value='{$options['banner_heading']}' />";
}
	$option = $options['banner_heading'];
	if ($option) {
	//$themer = htmlentities($_POST['taskOption'], ENT_QUOTES, "UTF-8");

	$style_file = '//Import bootstrap-sprockets
	
		@import "twentyfifteen";
	
		@import "bootstrap-sprockets";


		// Import slate variables
		@import "bootswatch/'.$themer.'/variables";

		// Then bootstrap itself
		@import "bootstrap";

		// Bootstrap body padding for fixed navbar
		body { padding-top: 50px; }

		// And finally bootswatch style itself
		@import "bootswatch/'.$themer.'/bootswatch";
		
		// Import awesome checkbox code
		@import "awesome-bootstrap-checkbox";
		
		// Whatever application styles you have go last
		@import "base";
	';
	
	file_put_contents('style.css', $style_file);

	
	require "scss.inc.php";
	
	$scss = new scssc();
	
	echo $scss->compile($style_file);
	
		$style_file = $scss->compile($style_file);

	file_put_contents('style.css', $style_file);
	
	
 } else {
	//$themer = 'amelia';
	$style_file = '//Import bootstrap-sprockets
		
		@import "twentyfifteen";
		
		@import "bootstrap-sprockets";

		// Then bootstrap itself
		@import "bootstrap";

		// Bootstrap body padding for fixed navbar
		body { padding-top: 50px; }
		
		// Import awesome checkbox code
		@import "awesome-bootstrap-checkbox";

		// Whatever application styles you have go last
		@import "base";
	';
	
	

	require "scss.inc.php";
	
	$scss = new scssc();
	
	echo $scss->compile($style_file);
	
	$style_file = $scss->compile($style_file);

	file_put_contents('style.css', $style_file);

 }

?>