<?php  
 //pagination.php  
 $connect = mysqli_connect("localhost", "root", "root", "JQueryTable");  
 $record_per_page = 5;  
 $page = '';  
 $output = '';  
 if(isset($_POST["page"]))  
 {  
      $page = $_POST["page"];  
 }  
 else  
 {  
      $page = 1;  
 }  
 $start_from = ($page - 1)*$record_per_page;  
 $query = "SELECT * FROM userData ORDER BY id  LIMIT $start_from, $record_per_page";  
 $result = mysqli_query($connect, $query);  
 $output .= "  
      <table class='table table-bordered'>  
           <tr>  
                <th width='20%'>Name</th>  
                <th width='40%'>Email</th>  
                <th width='20%'>Message</th>
                <th width='20%'>Date</th>
           </tr>  
 ";  //concatinate output data
 while($row = mysqli_fetch_array($result))  
 {  
      $output .= '  
           <tr>  
                <td>'.$row["Name"].'</td>  
                <td>'.$row["Email"].'</td>  
                <td>'.$row["Message"].'</td>
                <td>'.$row["Date"].'</td>

           </tr>  
      ';  
 }  
 $output .= '</table><br /><div class="panel-footer"><div align="right">';  //concatinate output data
 $page_query = "SELECT * FROM userData ORDER BY id DESC";  
 $page_result = mysqli_query($connect, $page_query);  
 $total_records = mysqli_num_rows($page_result);  
 $total_pages = ceil($total_records/$record_per_page);  
 for($i=1; $i<=$total_pages; $i++)  
 {  
      $output .= "<span class='pagination_link ' style='cursor:pointer; padding:6px; border:1px solid #ccc;' id='".$i."'>".$i."</span>";  //concatinate output data
 }  
 $output .= '</div></div><br /><br />';  
 echo $output;  
 ?>  