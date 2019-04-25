<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<!-- google cdn -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="js/script.js" type="text/javascript"></script>


</head>
<body>


	<?php
		if(isset($_POST['email']) && isset($_POST['password']) && isset($_POST['rptPwd'])){    
		    print_r( "Email :".$_POST['email']);
		    print_r( "<br/>Password :".$_POST['password']);
		    print_r( "<br/>You Agreed to our terms and conditions");
		}
		else{
	?>
	<div>
	    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="myForm">
	        <label>Email :</label><br/>
	        <input type="email" name="email" id="email"><br/>
	        <label>Password :</label><br/>
	        <input type="password" name="password" id="pwd"><br/>
	        <label>Confirm password :</label><br/>
	        <input type="password" name="rptPwd" id="rptPwd"><br/>
	        <input  type="checkbox" name="tc" id="tc"> Agree To Terms And Conditions<br/>
	        <button type="button" id="submitBtn">Submit Form</button><br/>
	    </form>
	    <?php 
	}
	?>
	</div>
</body>
</html>