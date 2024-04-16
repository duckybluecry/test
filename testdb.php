<?php
# Fill our vars and run on cli
# $ php -f db-connect-test.php



$servername = "localhost";
$database = "kvojpskc_juegotankes";
$username = "kvojpskc_juegotankesuser";
$password = "jesus!!Pzh56()=olp19";



//$link = mysqli_connect($dbhost, $dbuser, $dbpass) or die("Unable to Connect to '$dbhost'");
////////$link = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die("Unable to Connect to '$dbhost'");
$link = mysqli_connect($servername, $username, $password, $database) or die("Unable to Connect to '$servername'");



mysqli_select_db($link, $database) or die("Could not open the db '$database'");

$test_query = "SHOW TABLES FROM $database";
$result = mysqli_query($link, $test_query);

$tblCnt = 0;
while($tbl = mysqli_fetch_array($result)) {
  $tblCnt++;
  #echo $tbl[0]."<br />\n";
  
}

if (!$tblCnt) {
  echo "There are no tables<br />\n";
} else {
  echo "There are $tblCnt tables<br />\n";
   echo "ok";
  
}
mysqli_close($link);


?>
