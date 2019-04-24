<!DOCTYPE html>
<html>
<head>
	
	
	
	
	<title>Reading Data from db using ajax</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <!-- jquery data table cdn -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" type="text/javascript" charset="utf-8" async defer></script>

</head>
<body onload="grabingDetails()">
 
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h2 class="text-center">Ajax data fetch from db</h2>
        </div>
        <div class="panel-body">
            <table class="table table-bordered text-center" id="myTable">
              <thead>
                <tr>
                  <th class="text-center">Name</th>
                  <th class="text-center">Email</th>
                  <th class="text-center">Message</th>
                  <th class="text-center">Data</th>
                </tr>
              </thead>
              
              <tbody id="data">
                <?php
                  include 'connection.php';
                    $conn=  createConnection();
                    //$opt = $_GET['opt'];
                    $sql="select * from userData order by id desc;";
                    $stmt=$conn->prepare($sql);

                    $stmt->execute();
                    $data=$stmt->fetchall();
                    foreach($data as $row)
                     {
                      echo "<tr>";
                      echo "<td>".$row['Name']."</td>";
                      echo "<td>".$row['Email']."</td>";
                      echo "<td>".$row['Message']."</td>";
                      echo "<td>".$row['Date']."</td>";
                      echo "</tr>";
                     }
                ?>
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
  //document.getElementById("count").innerHTML = "Data Refereshed ...... "+count+" times.";
    document.getElementById("count").innerHTML = "Data Refereshed ...... Blocked now";

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

<script>
  //setInterval(grabingDetails, 2000);
</script>
<script>
    $(document).ready( function () {
      $('#myTable').DataTable({
        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]
      });
  } );
</script>
</body>
</html>
