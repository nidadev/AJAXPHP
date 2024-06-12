<?php
include('dbConn.php');

$data = stripslashes(file_get_contents("php://input"));
$mydata = json_decode($data, true);
//print_r($mydata);
$name = $mydata['name'];
$quantity = $mydata["quantity"];
$price = $mydata["price"];
$date = $mydata["date"];



//Insert Data
if(!empty($name) && !empty($quantity) && !empty($price) && !empty($date))
{

 $sql = "INSERT INTO products(name,quantity,price,date) VALUES('$name','$quantity','$price','$date')";  
 if($conn->query($sql) == TRUE)
 {

    echo "Data saved";
 }
 else
 {
    echo "unable to save";
 }
}
else
{
    echo "Fill all data";
}


?>