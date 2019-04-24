<?php
function createConnection(){
$uname="root";
$pwd="root";
$dbname="JQueryTable";
$conn=null;
try
{
$conn=new PDO("mysql:host=localhost;dbname=$dbname",$uname,$pwd);
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(Exception $e)
{
    echo "<h1>".$e."</h1>";
}
return $conn;
}?>