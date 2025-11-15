<?php

// ----------------------------
// DATABASE 1
// ----------------------------
$db1_host = "localhost";
$db1_user = "root";
$db1_pass = "";
$db1_name = "landing_one";

$conn1 = mysqli_connect($db1_host, $db1_user, $db1_pass, $db1_name);
if (!$conn1) {
    die("DB1 Connection Failed: " . mysqli_connect_error());
}


// ----------------------------
// DATABASE 2
// ----------------------------
$db2_host = "localhost";
$db2_user = "root";
$db2_pass = "";
$db2_name = "landing_two";

$conn2 = mysqli_connect($db2_host, $db2_user, $db2_pass, $db2_name);
if (!$conn2) {
    die("DB2 Connection Failed: " . mysqli_connect_error());
}


// ----------------------------
// DATABASE 3
// ----------------------------
$db3_host = "localhost";
$db3_user = "root";
$db3_pass = "";
$db3_name = "landing_three";

$conn3 = mysqli_connect($db3_host, $db3_user, $db3_pass, $db3_name);
if (!$conn3) {
    die("DB3 Connection Failed: " . mysqli_connect_error());
}


// ----------------------------
// DATABASE 4
// ----------------------------
$db4_host = "localhost";
$db4_user = "root";
$db4_pass = "";
$db4_name = "landing_four";

$conn4 = mysqli_connect($db4_host, $db4_user, $db4_pass, $db4_name);
if (!$conn4) {
    die("DB4 Connection Failed: " . mysqli_connect_error());
}


// ----------------------------
// DATABASE 5
// ----------------------------
$db5_host = "localhost";
$db5_user = "root";
$db5_pass = "";
$db5_name = "landing_five";

$conn5 = mysqli_connect($db5_host, $db5_user, $db5_pass, $db5_name);
if (!$conn5) {
    die("DB5 Connection Failed: " . mysqli_connect_error());
}

?>