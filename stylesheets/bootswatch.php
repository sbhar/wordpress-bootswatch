<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Cache-Control" content="no-cache" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />

<style>
<?php

$option = isset($_POST['taskOption']) ? $_POST['taskOption'] : false;
if ($option) {
	$themer = htmlentities($_POST['taskOption'], ENT_QUOTES, "UTF-8");

	$style_file = '//Import bootstrap-sprockets
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
	
	file_put_contents('style.scss', $style_file);

	
	require "../scss.inc.php";
	
	$scss = new scssc();
	
	echo $scss->compile($style_file);
	
	
 } else {
	//$themer = 'amelia';
	$style_file = '//Import bootstrap-sprockets
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
	
	file_put_contents('style.scss', $style_file);

	require "../scss.inc.php";
	
	$scss = new scssc();
	
	echo $scss->compile($style_file);

	

 }
?>
</style>
</head>

<body>
 <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right">
            <div class="form-group">
              <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
		  <!-- Navbar on hover --> 
		  <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Active Link</a></li>
                    <li><a href="#">Link</a></li>
                  
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a> 
                      
                        <ul class="dropdown-menu">
                          <li class="kopie"><a href="#">Dropdown</a></li>
                            <li><a href="#">Dropdown Link 1</a></li>
                            <li class="active"><a href="#">Dropdown Link 2</a></li>
                            <li><a href="#">Dropdown Link 3</a></li>
                          
                            <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown Link 4</a>
								<ul class="dropdown-menu">
                                    <li class="kopie"><a href="#">Dropdown Link 4</a></li>
									<li><a href="#">Dropdown Submenu Link 4.1</a></li>
									<li><a href="#">Dropdown Submenu Link 4.2</a></li>
									<li><a href="#">Dropdown Submenu Link 4.3</a></li>
									<li><a href="#">Dropdown Submenu Link 4.4</a></li>
                                                                      
								</ul>
							</li>
                          
                            <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown Link 5</a>
								<ul class="dropdown-menu">
                                    <li class="kopie"><a href="#">Dropdown Link 5</a></li>
									<li><a href="#">Dropdown Submenu Link 5.1</a></li>
									<li><a href="#">Dropdown Submenu Link 5.2</a></li>
									<li><a href="#">Dropdown Submenu Link 5.3</a></li>
									
									<li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown Submenu Link 5.4</a>
										<ul class="dropdown-menu">
                                            <li class="kopie"><a href="#">Dropdown Submenu Link 5.4</a></li>
											<li><a href="#">Dropdown Submenu Link 5.4.1</a></li>
											<li><a href="#">Dropdown Submenu Link 5.4.2</a></li>
											
											
										</ul>
									</li>                           
								</ul>
							</li>                                   
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown2 <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="kopie"><a href="#">Dropdown2</a></li>
                            <li><a href="#">Dropdown2 Link 1</a></li>
                            <li><a href="#">Dropdown2 Link 2</a></li>
                            <li><a href="#">Dropdown2 Link 3</a></li>
                            
                            <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown2 Link 4</a>
								<ul class="dropdown-menu">
                                    <li class="kopie"><a href="#">Dropdown2 Link 4</a></li>
									<li><a href="#">Dropdown2 Submenu Link 4.1</a></li>
									<li><a href="#">Dropdown2 Submenu Link 4.2</a></li>
									<li><a href="#">Dropdown2 Submenu Link 4.3</a></li>
									<li><a href="#">Dropdown2 Submenu Link 4.4</a></li>
                                   
								</ul>
							</li>
                            <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown2 Link 5</a>
								<ul class="dropdown-menu">
                                    <li class="kopie"><a href="#">Dropdown Link 5</a></li>
									<li><a href="#">Dropdown2 Submenu Link 5.1</a></li>
									<li><a href="#">Dropdown2 Submenu Link 5.2</a></li>
									<li><a href="#">Dropdown2 Submenu Link 5.3</a></li>
									<li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown Submenu Link 5.4</a>
										<ul class="dropdown-menu">
                                            <li class="kopie"><a href="#">Dropdown2 Submenu Link 5.4</a></li>
											<li><a href="#">Dropdown2 Submenu Link 5.4.1</a></li>
											<li><a href="#">Dropdown2 Submenu Link 5.4.2</a></li>
											
										</ul>
									</li>                                  
								</ul>
							</li>                                  
                        </ul>
                    </li>
                </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Hello, world!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
       </div>
        <div class="col-md-4">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
      </div>
	  
	  <hr>
	  
	  <div class="row">
		  <div class="col-md-4">
			<h2>Checkbox</h2>
			<fieldset>
				<div class="checkbox checkbox-primary">
					<input id="checkbox1" class="styled" type="checkbox" value='valuable' name='thing'>
					<label for="checkbox1">
						Default
					</label>
				</div> 
				<div class="checkbox">
					<input type="checkbox" disabled="disabled" id="thing2" class="styled" value="silver">
					<label for="thing2">
						Can't check this
					</label>
				</div>
				<div class="checkbox">
					<input id="checkbox2" class="styled" type="checkbox" value='gold' name='thing1' checked>
					<label for="checkbox2">
						Default
					</label>
				</div> 
			</fieldset>
		  </div>
		  <div class="col-md-4">
			<h2>Radio</h2>
			<fieldset>
				<div class="row">
					<div class="col-sm-6">
						<div class="radio">
							<input type="radio" name="radio1" id="radio1" value="option1" checked>
							<label for="radio1">
								One
							</label>
						</div>
						<div class="radio radio-danger">
							<input type="radio" name="radio3" id="radio5" value="option2" disabled="disabled">
							<label for="radio5">
								Next
							</label>
						</div>
						<div class="radio">
							<input type="radio" name="radio1" id="radio2" value="option2">
							<label for="radio2">
								Two
							</label>
						</div>
					</div>  
				</div>
			</fieldset>
		  </div>
		</div>
		
      <hr>
      
      <ul class="nav nav-tabs">
      <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
      <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
      <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
    </ul>
    
    <div class="tab-content">
      <div id="home" class="tab-pane in active">
        <h3>HOME</h3>
        <p>Some content.</p>
      </div>
      <div id="menu1" class="tab-pane">
        <h3>Menu 1</h3>
        <p>Some content in menu 1.</p>
      </div>
      <div id="menu2" class="tab-pane">
        <h3>Menu 2</h3>
        <p>Some content in menu 2.</p>
      </div>
    </div>
<hr>        

<p>Please select your theme from the list below and click on "Select theme"</p>
<form method="post" action="bootswatch.php">
	<div class="select-box">
		<div class="arrow-down"><div class="delimiter"></div></div>

		<select name="taskOption">
		  <option>default</option>
		  <option <?php if($_POST['taskOption'] == "cerulean") echo "selected"; ?>>cerulean</option>
		  <option <?php if($_POST['taskOption'] == "cosmo") echo "selected"; ?>>cosmo</option>
		  <option <?php if($_POST['taskOption'] == "darkly") echo "selected"; ?>>darkly</option>
		  <option <?php if($_POST['taskOption'] == "flatly") echo "selected"; ?>>flatly</option>
		  <option <?php if($_POST['taskOption'] == "journal") echo "selected"; ?>>journal</option> 
		  <option <?php if($_POST['taskOption'] == "lumen") echo "selected"; ?>>lumen</option>
		  <option <?php if($_POST['taskOption'] == "paper") echo "selected"; ?>>paper</option>
		  <option <?php if($_POST['taskOption'] == "readable") echo "selected"; ?>>readable</option> 
		  <option <?php if($_POST['taskOption'] == "sandstone") echo "selected"; ?>>sandstone</option>
		  <option <?php if($_POST['taskOption'] == "simplex") echo "selected"; ?>>simplex</option>
		  <option <?php if($_POST['taskOption'] == "slate") echo "selected"; ?>>slate</option> 
		  <option <?php if($_POST['taskOption'] == "spacelab") echo "selected"; ?>>spacelab</option> 
		  <option <?php if($_POST['taskOption'] == "superhero") echo "selected"; ?>>superhero</option>
		  <option <?php if($_POST['taskOption'] == "united") echo "selected"; ?>>united</option>
		  <option <?php if($_POST['taskOption'] == "yeti") echo "selected"; ?>>yeti</option> 
		</select>
	</div><br/>
          <input type="submit" value="Select theme" class="btn btn-primary submiter"/>
    </form>
<hr>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<hr>
      <footer>
        <p>&copy; 2015 Company, Inc.</p>
      </footer>
    </div> <!-- /container -->
	
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</body>
</html>
