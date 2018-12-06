<?php
$connect=mysqli_connect('localhost', 'root','','menu') or die('error connecting');

if(isset($_POST['submit'])){
$email = $_POST['email'];
//create query*/
 $query="insert into subscribe (email) values ('$email')";


 //executing query
 mysqli_query($connect,$query) or die('error executing query');
//close connection*/
 mysqli_close($connect) or die('closing connection');
echo "Thank you for subscribing to our Newsletter";
}


?>