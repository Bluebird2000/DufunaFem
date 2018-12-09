<?php
$connect=mysqli_connect('localhost', 'root','','menu') or die('error connecting');

if(isset($_POST['submit'])){
$email = $_POST['email'];
//create query*/
$query = " select * from subscribe where email='$email'";
$result= mysqli_query($connect,$query);
$count =mysqli_num_rows($result);
 
 if ($count==0) {
 $query="insert into subscribe (email) values ('$email')";


 //executing query
 mysqli_query($connect,$query) or die('error executing query');
//close connection*/
 mysqli_close($connect) or die('closing connection');
echo "Thank you for subscribing to our Newsletter" . "<br/>";
echo "<a href='index.php'>Click here to go back to home page</a>";
}
else{
    echo "Thank you, you already subscribed". "<br/>";
    echo "<a href='index.php'>Click here to go back to home page</a>";
}
}

?>