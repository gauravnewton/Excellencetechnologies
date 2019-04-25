 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Pagination using Jquery, PHP, Ajax and MySQL</title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
             
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  

           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
      </head>  
      <body>  
           <br /><br />  
           <div class="container">  
                <div class="row">  
                  <div class="col-sm-12">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h3 align="center">Make Pagination using Jquery, PHP, Ajax and MySQL</h3>
                      </div>
                      <div class="panel-body" id="pagination_data">
                        
                      </div>
                    </div>
                  </div>
                </div>
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      load_data();  
      function load_data(page)  
      {  
           $.ajax({  
                url:"fetching-data.php",  
                method:"POST",  
                data:{page:page},  
                success:function(data){  
                     $('#pagination_data').html(data);  
                }  
           })  
      }  
      
      $(document).on('click', '.pagination_link', function(){  
           var page = $(this).attr("id");  
           load_data(page);  
      });  
 });  
 </script>  