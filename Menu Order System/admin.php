<?php
 $connect=mysqli_connect('localhost', 'root','','menu') or die('error connecting');
if(isset($_POST['submit']))
	{
$username =$_POST['username'];
$password =$_POST['password'];
$query= "select * from administrator";
$result= mysqli_query($connect,$query) or die('error executing query');
if ($username=="moyin" && $password=="1234") {

header('Location:display.php');
}
else
{
echo  "please fill in the right details ";
}

}

?>