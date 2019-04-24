<html>
    <head>
        <title>Load JSON File Locally by Javascript Without JQuery</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

        <script type="text/javascript" src="persons.json"></script>
        <script type="text/javascript" >
          function load() {
            var mydata = JSON.parse(data);
            for( i =0;i<mydata.length;i++)
            {
              document.getElementById("jsonData").innerHTML += "<tr><td>"+mydata[i].firstname+"</td><td>"+mydata[i].lastname+"</td><td>"+mydata[i].dob+"</td></tr>";
            }
            
          }
        </script>
    </head>
    <body onload="load()">
        <div class="container">
          <div class="row">
            <div class="panel panel-default">
              <div class="panel-heading">
                <div class="text-center">     
                  <h1>Json data load using javascript</h1>
                </div>
              </div>
              <div class="panel-body" >
                <div class="row">
                  <table class="table table-bordered text-center" id="jsonData">
                    <thead>
                      <th class="text-center">FirstName</th>
                      <th class="text-center">LastName</th>
                      <th class="text-center">DOB</th>
                    </thead>
                  </table>
                </div>
              </div>
              <div class="panel-footer" style="text-align: right;">
                    <small >-Submitted by <a href="https://www.linkedin.com/in/gaurav-kumar-a3a840a9/">Gaurav</a></small>
              </div>
            </div>
          </div>
        </div>
    </body>
</html>