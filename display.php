<html>
  <head>
    <title>Display data</title>
  </head>
  <body>
<?php
$con=mysqli_connect("localhost","root","db_student");
$qry="select id,name,address from tbl_student";
if(!$con)
{
die("error connecting database");
}
$result=mysqli_query($con, $qry);
$num=mysqli num_rows($result);
if($num<1)
{
die("No data to display");
}
?>
<table boarder=1>
<caption>Student list</caption>
<tr><th>ID</th><th>Name</th><th>Address</th></tr>
<?php
while($row=mysqli_fetch_assoc($result))
  {
    echo  "<tr>";
    echo  "<td>$row['id']</td>";
     echo  "<td>$row['name']</td>";
     echo  "<td>$row['address']</td>";
    echo  "</tr>";
  }
mysqli_close($con);
?>
</table>
  </body>
</htm>
    
    
