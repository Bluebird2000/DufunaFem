<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous"
    />
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
      integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
      crossorigin="anonymous"
    ></script>
<style type="text/css">
.jumbotron{
background-color:#ff802a;
}
table{
border: 1px solid black;
background-color: #ff802a;
margin-left:auto; 
margin-right:auto;
color:#ffffff;
font-family: arial, sans-serif;
border-collapse: collapse;
}

th{
border-bottom: 2px solid #fff;
border-right: 2px solid;
}
td{
border-bottom: 1px solid #666;
border-right: 2px solid;
}

</style>
</head>
<body>
<div class="jumbotron jumbotron-fluid">
                    <div class="container">
                           <h2 class="text-center text-white" id="content">ADMIN RECORD</h2>    
                    </div>
                  </div>
  
  <?php
  $connect=mysqli_connect('localhost', 'root','','menu') or die('error connecting');
  $query= "select * from users";
  $result= mysqli_query($connect,$query) or die('error executing query');
  echo "<table>";
  echo"<tr><th>Order_id</th><th>Firstname</th><th>Lastname</th><th>Food Option</th><th>Order Status</th></tr>";
$index = 0;
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
$order_id = $row['order_id'];
$firstname =$row['firstname'];
$lastname =$row['lastname'];
$foodoption =$row['foodoption'];
$order_status =$row['order_status'];


echo "<tr>";
echo"<td> $order_id </td>";
echo"<td> $firstname </td>";
echo"<td>$lastname</td>";
echo"<td>$foodoption</td>";
echo"<td>$order_status</td>";
echo "</tr>";
}
echo "</table>";


 /* echo"<table>";
echo"<tr><th>order_id</th><th>firstname</th><th>lastname</th></tr>";
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
echo "<tr>";
echo"<td>";
echo $row ['order_id'];
echo"</td><td>";
echo $row ['firstname'];
echo"</td><td>";
echo $row ['lastname'];
echo"</td></tr>";
echo"</table>";
}*/
  ?>  
</body>
</html>