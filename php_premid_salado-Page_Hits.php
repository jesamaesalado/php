<?php
    date_default_timezone_set('Asia/Manila');
    echo "<span style='color:red;font-weight:bold;'>Current time and date: </span>". date('F j, Y g:h:m:s  ');

    session_start();

    if(isset($_SESSION['visitCount'])){
        $_SESSION['visitCount']++;
    }
    else 
        $_SESSION['visitCount']=0;

    echo "<b> <br>The Hit Counter is : " .$_SESSION['visitCount'];

$inTwoMonths = 60 * 60 * 24 * 60 + time();
setcookie('lastVisit', date("g:h:m:s - y/m/d"), $inTwoMonths);
if(isset($_COOKIE['lastVisit']))
 
{
$visit = $_COOKIE['lastVisit'];
echo " <br>Your last visit was - ". $visit;
}
else
echo "You've got some stale cookies!";
echo "<br>";

$Hour = date('G');

if ( $Hour >= 12 && $Hour <= 11 ) {
    echo "Good Morning!";
} else if ( $Hour >= 12 && $Hour <= 18 ) {
    echo "Good Afternoon!";
} else if ( $Hour >= 19 || $Hour <= 5 ) {
    echo "Good Evening!";
}
?>