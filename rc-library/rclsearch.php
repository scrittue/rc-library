<html>
<head>
  <title>RCL Search Results</title>
<meta charst="utf-8">
<link rel="stylesheet" type="text/css" href="singlePageTemplate.css">

</head>


<?php
$host='canary.simmons.edu';
$user='rittue';
$password='1998201';
$database='project_rittue';

echo  "<center>Search Results</center>";
echo "<br><br>";


$con = mysqli_connect($host,$user,$password,$database)
     or die ("Couldn't connect to server");

$sql = "SELECT count(*) IF($_POST['collection']==1) FROM books; SELECT count(*) IF($_POST['collection']==2) FROM music;";

//query to search the search term against titles, first names, and last names
//in the books & music tables depending on user selection

if ($_POST['collection']=="1")
  $sql = mysqli_query("SELECT booktitle, authorlast, authorfirst, bookgenre as type FROM books WHERE booktitle LIKE '%" . $_POST['search'] . "%' OR authorlast LIKE '%" . $_POST['search'] . "%'
OR authorfirst LIKE '%" . $_POST['search'] ."%'");

if ($_POST['collection']=="2")
  $sql = mysqli_query("SELECT musictitle, composerlast, composerfirst, musicgenre as type FROM music  WHERE musictitle LIKE '%" . $_POST['search'] . "%'  OR composerlast LIKE '%" . $_POST['search'] . "%'  OR composerfirst LIKE '%" . $_POST['search'] ."%')";

if ($_POST['search']=="")
  echo "You forgot to enter a search!";

//error message
$result = mysqli_query($con,$sql)
 or  die('Error: ' . mysql_error());

//this query shows the title, author or composer, and genre of search results matching the inquiry

$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>Book Title</th>
<th>Author First Name</th>
<th>Author Last Name</th>
<th>Genre</th>
</tr>
<tr></tr>
<tr>
<th>Music Title</th>
<th>Composer First Name</th>
<th> Composer Last Name</th>
<th>Genre</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
  echo "<tr>";
  echo "<td>" , $row['booktitle'] . "</td>";
  echo "<td>" , $row['authorfirst'] . "</td>";
  echo "<td>" , $row['authorlast'] . "</td>";
  echo "<td>" , $row['bookgenre'] . "</td>";
  echo "</tr>"
  echo "<tr>";
  echo "</tr>";
  echo "<td>" , $row['musictitle'] . "</td>";
  echo "<td>" , $row['composerfirst'] . "</td>";
  echo "<td>" , $row['composerlast'] . "</td>";
  echo "<td>" , $row['music genre'] . "</td>";
  echo "</tr>";
}
echo "</table>";


//mysqli_close($con);
?>

</html>
