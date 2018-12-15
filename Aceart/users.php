<?php
$connect= mysqli_connect('localhost', 'root','','aceart') or die('error connecting');

if(isset($_POST['submit'])){
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$artoption = $_POST['artoption'];
$artprice = $_POST['artprice'];
$street = $_POST['street'];
$city = $_POST['city'];
$state = $_POST['state'];

//create query*/
 $query="insert into users (firstname, lastname, email, phone, street, city, state, artoption, artprice) values ('$firstname','$lastname','$email','$phone','$street','$city','$state','$artoption', '$artprice')";
 //executing query
 
 mysqli_query($connect,$query) or die('error executing query');
//close connection*/
 mysqli_close($connect) or die('closing connection');
echo "Thank you! Your order has been taken". "<br/>";

echo "<a href='index.php'>Click here to go back to home page</a>";
}


?>