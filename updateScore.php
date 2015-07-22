<?php
if ($_POST["pw"]=="h4ze1") {
  include_once("dbconnect.php");
  $query = "SELECT * FROM stats";
  $results=  mysql_query($query) or die(mysql_error());
  while($row=mysql_fetch_array($results)) {
    $score=1; #Give everyone a point for hair color
    if ($row["Gender"]=="Girl"){
      $score+=5;
    }
    if ($row["Birthdate"]==13){
      $score+=5;
      if ($row["TimeOfDay"]==0) {
	$score+=5;
      }
    }
    if ($row["Length"]<=19.25){
      $length=$row["Length"];
      if (abs($length-18.25)==0) {
	$score+=4;
      } elseif (abs($length-18.25)==.25) {
	$score+=3;
      } elseif (abs($length-18.25)==.5) {
	$score+=2;
      } elseif (abs($length-18.25)==.75) {
	$score+=1;
      } elseif (abs($length-18.25)==1) {
	$score+=0;
      }
    }
    $weight=$row["Weight"];
    if ($weight<=8.875 && $weight>=6.875) {
      if(abs($weight-7.875)==0) {
	$score+=8;
      } elseif(abs($weight-7.875)==0.125) {
	$score+=7;
      } elseif(abs($weight-7.875)==0.25) {
	$score+=6;
      } elseif(abs($weight-7.875)==0.375) {
	$score+=5;
      } elseif(abs($weight-7.875)==0.5) {
	$score+=4;
      } elseif(abs($weight-7.875)==0.625) {
	$score+=3;
      } elseif(abs($weight-7.875)==0.75) {
	$score+=2;
      } elseif(abs($weight-7.875)==0.875) {
	$score+=1;
      } elseif(abs($weight-7.875)==1) {
	$score+=0;
      }
    }
    $updateQuery = "UPDATE stats SET Score=$score WHERE ID=$row[ID]";
    echo $updateQuery;
    $updateResult = mysql_query($updateQuery) or die(mysql_error());
    echo "</BR>Updated the score for $row[Name] to be $score";
  }

}


?>


<html>
<head>
</head>
<body>
<form action="<?php echo $PHP_SELF; ?>" method="POST"> 
<input type="text" name="pw"/>
<input type="submit" name="submit" value="Update"/>
</form>
</body>
</html>