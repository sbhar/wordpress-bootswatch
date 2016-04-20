<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

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
<hr>        <form method="post" action="bootstrap.php">
	<div class="select-box">
		<div class="arrow-down"><div class="delimiter"></div></div>

		<select name="taskOption">
		  <option>default</option>
		  <option>cerulean</option>
		  <option>cosmo</option>
		  <option>darkly</option>
		  <option>flatly</option>
		  <option>journal</option> 
		  <option>lumen</option>
		  <option>paper</option>
		  <option>readable</option> 
		  <option>sandstone</option>
		  <option>simplex</option>
		  <option>slate</option> 
		  <option>spacelab</option> 
		  <option>superhero</option>
		  <option>united</option>
		  <option>yeti</option> 
		</select>
	</div><br/>
          <input type="submit" value="Select theme" class="btn btn-primary"/>
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

		// Whatever application styles you have go last
		@import "base";	
	';
	require "../scss.inc.php";
	file_put_contents('style.scss', $style_file);
	$_GET['p'] = 'style.scss';
	scss_server::serveFrom('.');
 } else {
	//$themer = 'amelia';
	$style_file = '//Import bootstrap-sprockets
		@import "bootstrap-sprockets";

		// Then bootstrap itself
		@import "bootstrap";

		// Bootstrap body padding for fixed navbar
		body { padding-top: 50px; }

		// Whatever application styles you have go last
		@import "base";
	';
	require "../scss.inc.php";
	file_put_contents('style.scss', $style_file);
	$_GET['p'] = 'style.scss';
	scss_server::serveFrom('.');
	  //exit;
 }
?>
</style>
</body>
</html>
