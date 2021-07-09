<?php
define('DB_SERVER','b1cm5xvdh8f01kkhz5wv-mysql.services.clever-cloud.com');
define('DB_USER','u6ad0nkcvens50dg');
define('DB_PASS' ,'D0cn1AxzbciSYbl7GNOA');
define('DB_NAME', 'b1cm5xvdh8f01kkhz5wv');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>