<?php
	if (isset($_GET["success"])){
		?>
		<a href="<?php echo $_SERVER["PHP_SELF"]; ?>">
		<div id="alert-success" class="alert animated fadeInDown alert-success alert-dismissible text-center" role="alert" > Operation was Success !<img class="img-circle" src="success.php"  /> <button type="button" class="close" data-dismiss="alert" aria-label="close" > <span aria-hidden="true">×</span> </button> </div>
		</a>
		<?php
	}
	
	elseif (isset($_GET["error"])){
		?>
			<a href="<?php echo $_SERVER["PHP_SELF"]; ?>"><div id="alert-danger" class="alert animated fadeInDown alert-danger alert-dismissible text-center" role="alert" > Operation Failed! <img class="img-circle" src="error.php"  /> <button type="button" class="close" data-dismiss="alert" aria-label="close" > <span aria-hidden="true">×</span> </button> </div></a>
		<?php
	}
	
	
	elseif (isset($_GET["denied"])){
		?>
			<a href="<?php echo $_SERVER["PHP_SELF"]; ?>"><div id="alert-danger" class="alert animated fadeInDown alert-danger alert-dismissible text-center" role="alert" > Cant Delete! <img class="img-circle" src="error.php"  /><button type="button" class="close" data-dismiss="alert" aria-label="close" > <span aria-hidden="true">×</span> </button> </div></a>
		<?php
	}
	
	elseif (isset($_GET["dublicate"])){
		?>
			<a href="<?php echo $_SERVER["PHP_SELF"]; ?>"><div id="alert-danger" class="alert animated fadeInDown alert-danger alert-dismissible text-center" role="alert" > Inforation exist!<img class="img-circle" src="error.php"  /> <button type="button" class="close" data-dismiss="alert" aria-label="close" > <span aria-hidden="true">×</span> </button> </div></a>
		<?php
	}

?>
		