<?php
include_once("dbconnect.php");
if (isset($_POST['submit'])) {
  echo "Sorry, the pool has ended thank you for participating";
}
if (false) {
    echo "Your results have been submitted";
    $user_name = $_POST["user_name"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $bdate = $_POST["date"];
    $btime = $_POST["time"];
    $length = $_POST["length"];
    $weight_lbs= $_POST["weight_lbs"];
    $weight_ozs= $_POST["weight_ozs"];
    $haircolor = $_POST["haircolor"];
    $names = $_POST["names"];
    $note=$_POST["note"];
    $weight = $weight_lbs + $weight_ozs/16.0;
    $query = "INSERT INTO stats (Name,Email,Gender,Birthdate,TimeOfDay,HairColor,Length,Weight,Names,PersonalNote)";
    $query .= " VALUES ('$user_name','$email','$gender',$bdate,$btime,'$haircolor',$length,$weight,'$names','$note')";
    $results = mysql_query($query) or die(mysql_error());
    $to="alanmanderson@gmail.com";
    $subject="new Baby Pool Member";
    $body="$user_name has made some guesses.";
    mail($to, $subject, $body);
  }
?>


<html>
<head>
<style type="text/css">
.results {
  border: 3px solid black;
  padding: 30px;
  margin: 50px;
  border-collapse: collapse;
}

.results th {
text-decoration:underline;
background-color: #aaf;
}

.results td {
padding:10px;
}

.results .evenRow {
background-color: white;
}
.results .oddRow {
background-color: #ccf;
}

.correct {
  background-color: #50FF50;
  border: 3px solid #22AF45;
}

.correct1 {
  background-color: #30FF30;
  border: 3px solid #22AF45;
}
.correct2 {
  background-color: #20FF20;
  border: 3px solid #22AF45;
}
.correct3 {
  background-color: #00FF00;
  border: 3px solid #22AF45;
}
</style>

</head>
<body>


<form method="post" action="<?php echo $PHP_SELF;?>">
<p width="300">

<font size="6">
  If you are interested help us make the last week (or more) fun and share your guess with us (and everyone). Check back often to see additional results.  When the baby is born we will update it with the actual statistics.  For your information the Guppys due date is August 14th.</br>
</font>
</br>
<font size="5">    Your email will not be displayed to anyone else.  <b>The winner will </b><font size="1">probably not</font><b> win anything.</b> You only have to enter an email address if you want to recieve an announcment email to an address other than the one you recieved this link.</br>
If you do not want an announcement email then I suggest you adjust your spam filter accordingly.
</p>
</br>
After the results are in the winner will be announced.
</br>
</br>
Good Luck!
</font>
<table style="text-align: right;">
<tr>
<th>
   Your name:
<td>
<input type="text" name="user_name" />
<tr>
<th>
    Preferred email [optional]:
<td>
<input type="text" name="email" />
<tr>
<th>
   Gender:
<td>
<select name="gender">
<option>Boy</option>
<option>Girl</option>
</select>
<tr>
<th>
   Date:
<td>
August <select name="date">
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
<option>11</option>
<option>12</option>
<option>13</option>
<option>14</option>
<option>15</option>
<option>16</option>
<option>17</option>
<option>18</option>
<option>19</option>
<option>20</option>
<option>21</option>
<option>22</option>
<option>23</option>
<option>24</option>
<option>25</option>
<option>26</option>
<option>27</option>
<option>28</option>
<option>29</option>
<option>30</option>
<option>31</option>
</select>
<tr>
<th>
    Time:
<td>
<select name="time">
<option value="0">Before 8am</option>
<option value="8">Between 8am-4pm</option>
<option value="16">After 4pm</option>
</select>
<tr>
<th>
   Length [optional] (in inches):
<td>
<select name="length">
<option value="17.5" >less than 18</option>
<option value="18" >18</option>
<option value="18.25" >18.25</option>
<option value="18.5" >18.5</option>
<option value="18.75" >18.75</option>
<option value="19" >19</option>
<option value="19.25" >19.25</option>
<option value="19.5" >19.5</option>
<option value="19.75" >19.75</option>
<option value="20" >20</option>
<option value="20.25" >20.25</option>
<option value="20.5" >20.5</option>
<option value="20.75" >20.75</option>
<option value="21" >21</option>
<option value="21.25" >21.25</option>
<option value="21.5" >21.5</option>
<option value="21.75" >21.75</option>
<option value="22" >22</option>
<option value="22.25" >22.25</option>
<option value="22.5" >22.5</option>
<option value="22.75" >22.75</option>
<option value="23">23</option>
<option value="23.5" >more than 23</option>
</select>
<tr>
<th>
    Weight [optional]:
<td>
<table>
<tr>
<th>Pounds
<th>Ounces
<tr>
<td>
<select name="weight_lbs">
<option value="4.5">less than 5</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="12.5">more than 12</option>
</select>

<td>
<select name="weight_ozs">
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
</select>
</table>
<tr>
<th>
   Haircolor:
<td>
<input type="text" name="haircolor"/>
<tr>
<th>
	    Suggested Names [optional] </br>(separate with a comma):</br>
<td>
<textarea name="names"></textarea>
<tr>
<th>
	    Personal Note:<br>(This will be displayed to everyone)
<td>
<textarea name="note"></textarea>
</table>
</br>
<input type="submit" value="submit" name="submit" />
</form>

<?php
$query="SELECT GroupTypes.Name, AVG( stats.Score ) AS averageScore ".
"FROM Relationships ".
"INNER JOIN stats ON stats.ID = Relationships.UserID ".
"INNER JOIN GroupTypes ON Relationships.GroupTypeID = GroupTypes.ID ".
"GROUP BY Relationships.GroupTypeID ".
"ORDER BY averageScore DESC";
$results = mysql_query($query) or die(mysql_error());
echo "<table class=\"results\"><tr><th>Group Name<th>Average Score";
while($row=mysql_fetch_array($results)){
  echo "<tr><td>$row[Name]<td>$row[averageScore]";
}
echo "</table></br></br>";
?>


<?php
$query = "SELECT * FROM stats ORDER BY Score DESC";
$results = mysql_query($query) or die(mysql_error());
$numRows = mysql_num_rows($results);
$rowNum = 0;

if ($numRows>0){
    echo "<font size=\"5\"> Results:</font></br>";
    echo "<table class=\"results\"><tr><th>Name<th>Gender<th>Day<th>Time<th>Hair<th>Length<th>Weight<th>Score</tr>";
    while($row = mysql_fetch_array($results)) {
      $score = 0;
      $timeOfDay = $row["TimeOfDay"];
      if ($timeOfDay==0){
	$timeOfDay = "Before 8am";
      } else if ($timeOfDay==8) {
	$timeOfDay = "Between 8am-4pm";
      } else if ($timeOfDay==16) {
	$timeOfDay = "After 4pm";
	}
      $weight = $row["Weight"];
      if ($weight==4.5){
	$weight = "Less than 5";
      } else if ($weight==12.5) {
	$weight = "More than 12";
      }
      $length = $row["Length"];
      if ($length == 17.5){
	$length="Less than 18";
      } else if ($length == 23.5) {
	$length="More than 23";
      }
      if ($rowNum%2==0){
	$class="evenRow";
      } else {
	$class="oddRow";
      }
      $line = "<tr class=\"$class\"><td>$row[Name]<td ";
      if ($row["Gender"]=="Girl"){
	$score++;
	$line .= "class=\"correct\"";
      }
      $line .= ">$row[Gender]<td ";
      if ($row["Birthdate"]==13){
	$score++;
	$line .= "class=\"correct\"";
      }
      $line .= ">$row[Birthdate]<td ";
      if ($timeOfDay=="Before 8am"){
	$score++;
	$line .= "class=\"correct\"";
      }
      $line .= ">$timeOfDay<td ";
      if ($row["HairColor"]!="") {
	$score++;
	$line .= "class=\"correct\"";
      }
      $line .= ">$row[HairColor]<td ";
      if (abs($length-18.25)<1) {
	$absLength = abs($length-18.25);
	if ($absLength==0){
	  $line .= "class=\"correct\"";
	}
	elseif ($absLength<=.25){
	  $line .= "class=\"correct1\"";
	}
	elseif ($absLength<=.5){
	  $line .= "class=\"correct2\"";
	}
	elseif ($absLength<=.75){
	  $line .= "class=\"correct3\"";
	}
      }
      $line .= ">$length\"<td ";
      if ($weight==7.875) {
	$score++;
	$line .= "class=\"correct\"";
      }
      $line .= ">$weight lbs.<td>$row[Score]</tr>";
      #echo "<tr class=\"$class\"><td>$row[Name]<td>$row[Gender]<td>$row[Birthdate]<td>$timeOfDay<td>$row[HairColor]<td>$length\"<td>$weight lbs.<td>0</tr>";
      echo $line;
      $rowNum +=1;
    }
}

?>

</table>



</body>
</html>