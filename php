This is the contents of the display.php file which is found in the html code as a php include.
This brings the reviews from the database when a user clicks on the "Read Reviews" button.
This page will (obviously) need a database, but it's a very simple one consisting of one table
(which could go in another db), of four columns;
(id[PK], monicker[varchar], review[text], date[date]).

<?php
$con = mysqli::real_connect('localhost','USERNAME',"PASSWORD");              // USERNAME & PASSWORD need to be changed
mysqli::select_db('DBNAME',$con) or die(mysql_error());               // DBNAME needs to be changed
$query = "select * from reviews";
$result = mysqli::real_query($query)or die(mysql_error());
$row = mysql_result::fetch_array($result);
echo "<table class='displayReviews' border='1' style='width:100%;'>";
echo "<tr stlye='display:block;margin:0em auto;'><th>Name</th><th>Review</th><th>Date</th></tr>";
while ($row = mysql_result::fetch_array($result))
{
	echo "<tr><td>"; 
	echo $row['monicker'];
	echo "</td><td>";
	echo $row['review'];
    echo "</td><td>";
	echo $row['date'];
	echo "</td></tr>";
}
echo "</table>";
mysqli::close();
?>
