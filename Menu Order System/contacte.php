<?php
$connect=mysqli_connect('localhost', 'root','','menu') or die('error connecting');

if(isset($_POST['submit'])){
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$comment = $_POST['comment'];




//create query*/
 $query="insert into contacte (fullname, email, phone, subject, message) values ('$fullname','$email','$phone','$subject','$comment')";


 //executing query
 mysqli_query($connect,$query) or die('error executing query');
//close connection*/
 mysqli_close($connect) or die('closing connection');
echo "Your comment has been taken, we would get back to you:)";
}


?>