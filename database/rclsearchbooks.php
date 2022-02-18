<?php
$host='canary.simmons.edu';
$user='rittue';
$password='1998201';
$database='project_rittue';


echo  "<center>Search Results</center>";
echo  "<center>Item: ", $_POST['search'],"</center><br><br>";
echo "<br><br>";


$con = mysqli_connect($host,$user,$password,$database)
     or die ("Couldn't connect to server");


$sql = "SELECT * from books WHERE '$_POST[search]' = booktitle;";

$result = mysqli_query($con,$sql)
 or  die('Error: ' . mysql_error());

$row = mysqli_fetch_assoc($result);
if ( $row['count']==0 )
{
    die ("Unfortunately, no titles in our collection match your search.");
}



$dtitle = $_POST['search'];
$sql = "SELECT C.child_fname, C.child_lname, N.need_name
FROM ((children C
INNER JOIN child_needs CN ON C.child_fname='$dfname' AND C.child_id = CN.child_id)
INNER JOIN needs N ON N.need_id = CN.need_id)";

//this query shows the title, author, and genre of search results matching the inquiry

$result = mysqli_query($con,$sql);


echo "<table border='1'; center;>
<tr>
<th>Title</th>
<th>Author Last Name</th>
<th>Author First Name</th>
<th>Genre</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
  echo "<tr>";
  echo "<td>" , $row['booktitle'] . "</td>";
  echo "<td>" , $row['authorlast'] . "</td>";
  echo "<td>" , $row['authorfirst'] . "</td>";
  echo "<td>" , $row['bookgenre'] . "</td>";
  echo "</tr>";
}
echo "</table>";


//mysqli_close($con);
?>
