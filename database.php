<!--database connection-->
<?php

$host='freedb.tech';
$username='freedbtech_anomostwo';
$user_pass='anonchat';
$database_in_use='freedbtech_anomostwo';

$con = mysqli_connect($host,$username,$user_pass,$database_in_use);
if (!$con)
{
    echo"not connected";
}
if (!mysqli_select_db($con,$database_in_use))
{
    echo"database not selected";
}
?>
