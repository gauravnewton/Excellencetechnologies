<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>checkbox like tree structure</title>
	<style type="text/css" media="screen">
		body {
		  padding: 20px;
		}
		ul { 
		  list-style: none;
		  margin: 5px 20px;
		}
		li {
		  margin: 10px 0;
		}
		.check{
      color:green;
    }
    .uncheck{
      color:red;
    }
	</style>																		

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	


	<div class="container">
		<div class="row">
			

			<div class="panel panel-default">
				<div class="panel-heading">
					<h1 class="text-center">Indeterminate Checkboxes</h1>
				</div>

				<div class="panel-body">

				<?php
					if($_SERVER['REQUEST_METHOD'] == 'POST')
		            {
		            	?>

							<div class="col-sm-4">

							</div>
							<div class="col-sm-8">				
								<form method="post" name="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">         
									<ul>
									  <li>
									    <label for="tall">checkbox 1</label>
									    <?php 
                           if( empty($_POST["tall"]) ){
	                         echo "<span class='uncheck'> unchecked.</span>"; 
	                        }else {
	                         echo "<span class='check'>checked.</span>";
	                          } 
                        ?>
									    <ul>
									      <li>
									        <label for="tall-1">checkbox 1-1</label>
                          <?php
                            if( empty($_POST["tall-1"]) ){
                             echo "<span class='uncheck'> unchecked.</span>"; 
                            }else {
                             echo "<span class='check'>checked.</span>";
                              } 
                          ?>
									      </li>
									      <li>
									        <label for="tall-2">checkbox 1-2</label>
                          <?php
                            if( empty($_POST["tall-2"]) ){
                             echo "<span class='uncheck'> unchecked.</span>"; 
                            }else {
                             echo "<span class='check'>checked.</span>";
                              } 
                          ?>
									        <ul>
									          <li>
									            <label for="tall-2-1">checkbox 1-2-1</label>
                              <?php
                                if( empty($_POST["tall-2-1"]) ){
                                 echo "<span class='uncheck'> unchecked.</span>"; 
                                }else {
                                 echo "<span class='check'>checked.</span>";
                                  } 
                              ?>
									          </li>
									          <li>
									            <label for="tall-2-2">checkbox 1-2-2</label>
                              <?php
                                if( empty($_POST["tall-2-2"]) ){
                                 echo "<span class='uncheck'> unchecked.</span>"; 
                                }else {
                                 echo "<span class='check'>checked.</span>";
                                  } 
                              ?>
									          </li>
									        </ul>
									      </li>
									      <li>
									        <label for="tall-3">checkbox 3</label>
                          <?php
                            if( empty($_POST["tall-3"]) ){
                             echo "<span class='uncheck'> unchecked.</span>"; 
                            }else {
                             echo "<span class='check'>checked.</span>";
                              } 
                          ?>
									      </li>
									    </ul>
									  </li>
									  <li>
									    <label for="short">checkbox 2</label>
                      <?php
                          if( empty($_POST["short"]) ){
                           echo "<span class='uncheck'> unchecked.</span>"; 
                          }else {
                           echo "<span class='check'>checked.</span>";
                            } 
                        ?>
									    <ul>
									      <li>
									        <label for="short-1">checkbox 2-1</label>
                        <?php
                            if( empty($_POST["short-1"]) ){
                             echo "<span class='uncheck'> unchecked.</span>"; 
                            }else {
                             echo "<span class='check'>checked.</span>";
                              } 
                          ?>
									      </li>
									      <li>
									        <label for="short-2">checkbox 2-2</label>
                          <?php
                            if( empty($_POST["short-2"]) ){
                             echo "<span class='uncheck'> unchecked.</span>"; 
                            }else {
                             echo "<span class='check'>checked.</span>";
                              } 
                          ?>
									      </li>
									      <li>
									        <label for="short-3">checkbox 2-3</label>
                          <?php
                            if( empty($_POST["short-3"]) ){
                             echo "<span class='uncheck'> unchecked.</span>"; 
                            }else {
                             echo "<span class='check'>checked.</span>";
                              } 
                          ?>
									      </li>
									    </ul>
									  </li>
									</ul>
								</form>
							</div>
		            	<?php
		            }
		            else{
		            	?>
		            	
							<div class="col-sm-4">

							</div>
							<div class="col-sm-8">				
								<form method="post" name="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">         
									<ul>
									  <li>
									    <input type="checkbox" name="tall" id="tall">
									    <label for="tall">checkbox 1</label>

									    <ul>
									      <li>
									        <input type="checkbox" name="tall-1" id="tall-1">
									        <label for="tall-1">checkbox 1-1</label>
									      </li>
									      <li>
									        <input type="checkbox" name="tall-2" id="tall-2">
									        <label for="tall-2">checkbox 1-2</label>

									        <ul>
									          <li>
									            <input type="checkbox" name="tall-2-1" id="tall-2-1">
									            <label for="tall-2-1">checkbox 1-2-1</label>
									          </li>
									          <li>
									            <input type="checkbox" name="tall-2-2" id="tall-2-2">
									            <label for="tall-2-2">checkbox 1-2-2</label>
									          </li>
									        </ul>
									      </li>
									      <li>
									        <input type="checkbox" name="tall-3" id="tall-3">
									        <label for="tall-3">checkbox 3</label>
									      </li>
									    </ul>
									  </li>
									  <li>
									    <input type="checkbox" name="short" id="short">
									    <label for="short">checkbox 2</label>

									    <ul>
									      <li>
									        <input type="checkbox" name="short-1" id="short-1">
									        <label for="short-1">checkbox 2-1</label>
									      </li>
									      <li>
									        <input type="checkbox" name="short-2" id="short-2">
									        <label for="short-2">checkbox 2-2</label>
									      </li>
									      <li>
									        <input type="checkbox" name="short-3" id="short-3">
									        <label for="short-3">checkbox 2-3</label>
									      </li>
									    </ul>
									  </li>
									</ul>
									<hr/>
					                  <div style="text-align: right;">
					                    <button class="btn btn-default">Submit</button>
					                  </div>

								</form>
							</div>
							<?php	
		            }
	             ?>






				</div>

				<div class="panel-footer" style="text-align: right;">
		          <small >-Submitted by <a href="https://www.linkedin.com/in/gaurav-kumar-a3a840a9/">Gaurav</a></small>
		        </div>
			</div>
		</div>
	</div>


<script type="text/javascript" src="js/script.js"></script>
</body>
</html>