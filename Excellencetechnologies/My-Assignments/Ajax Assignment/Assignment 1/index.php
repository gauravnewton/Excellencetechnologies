<!DOCTYPE html>
<html>
<head>
	
	
	
	
	<title>Reading Data from db using ajax</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


</head>
<body onload="grabingDetails()">
 
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h2 class="text-center">Ajax data fetch from db auto refresh after 2 sec.</h2>
        </div>
        <div class="panel-body">
            <table class="table table-bordered text-center">
              <thead>
                <tr>
                  <th class="text-center">Name</th>
                  <th class="text-center">Email</th>
                  <th class="text-center">Message</th>
                  <th class="text-center">Data</th>
                </tr>
              </thead>
              
              <tbody id="data">

              </tbody>
            </table>
          </div>

          <div class="panel-footer" style="text-align: right;">
              <span id="count"></span>
              <div>
                <span><small >-Submitted by <a href="https://www.linkedin.com/in/gaurav-kumar-a3a840a9/">Gaurav</a></small></span>
              </div>
          </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  var count = 0;
function grabingDetails()
{ count++;
  document.getElementById("count").innerHTML = "Data Refereshed ...... "+count+" times.";
  //alert("Data Refreshed... "+count+" times.");
  var xmlhttp;

    if (window.XMLHttpRequest)
    {// code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp=new XMLHttpRequest();
    }
    else
    {// code for IE6, IE5
      xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }  

    xmlhttp.onreadystatechange = function() {
      if(xmlhttp.readyState === 4 && xmlhttp.status === 200)
      {
        document.getElementById("data").innerHTML = xmlhttp.responseText;
      }
    };

    xmlhttp.open("GET","fetching-data.php", true);
    xmlhttp.send();

}
</script>

<script>setInterval(grabingDetails, 2000);</script>

</body>
</html>
