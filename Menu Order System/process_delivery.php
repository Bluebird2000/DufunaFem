<?php
error_reporting(E_ALL);
$connect= new mysqli('localhost', 'root','','menu');

if(isset($_POST['ords'])){

    try{
//create query*/
echo $_POST['ords'];
        $query=$connect->prepare("update users set order_status=? where order_id=?");

 //executing query
        
        $query->bind_param('si',$stats,$order_id);
        $stats='1';
        $order_id=(int)$_POST['ords'];
        $query->execute();
//close connection*/
        $query->close();
        $connect->close();
    }catch(Exception $e){
        echo $e->getMessage();
    }

}
header('Location: display.php');

?>