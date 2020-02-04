<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>OrderInfo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/header_bg.css">
    <link rel="stylesheet" href="css/signInUp.css">
	<link rel="stylesheet" href="css/style_index.css">
	<link rel="stylesheet" href="css/jquery-ui.min.css">
	<link rel="stylesheet" href="css/footer.css">
	<link rel="shortcut icon" href="img/logo.jpg" />
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui.min.js"></script>

	<style>
  label {
	display: inline-block; width: 7em;
	margin-top: 50px;
  }
  fieldset div {
    margin-bottom: 3em;
  }
  fieldset .help {
    display: inline-block;
  }
  .ui-tooltip {
    width: 210px;
  }
  </style>

<script>
  $(function() {
    var tooltips = $( "[title]" ).tooltip();
    $( "<button>" )
      .text( "Show help" )
      .button()
      .click(function() {
        tooltips.tooltip( "open" );
      })
      .insertAfter( "form" );
  });
  </script>

</head>
<header>
<?php include 'header.php';?>
</header>
<body>

<li><h1> <center>You loged In !</center></h1></li>

 
<form>
  <fieldset>
    <div>
      <label for="firstname">Firstname</label>
      <input id="firstname" name="firstname" title="Please enter your firstname">
    </div>
    <div>
      <label for="lastname">Lastname</label>
      <input id="lastname" name="lastname" title="Please enter your lastname">
    </div>
    <div>
      <label for="address">Address</label>
      <input id="address" name="address" title="Please enter your address">
    </div>
  </fieldset>
</form>
 
 


</body>

	</div>	

		<footer style="margin-top: 0">
		<?php include 'footer.php';?>

			</footer>
		</html>
		