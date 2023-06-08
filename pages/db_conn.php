<?php
$db_host = "database.civilhost.net";
$db_user = "u4_F0NZzPe1lF";
$db_password = "Jd=5qufys0QV.EkhA^Hyc@@a";
$db_name = "s4_unturned";

// Create connection
$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Helper function to execute a query and return the result set
function execute_query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }

    return $result;
}

// Helper function to check if a table exists in the database
function table_exists($table_name) {
    $result = execute_query("SHOW TABLES LIKE '$table_name'");
    return mysqli_num_rows($result) == 1;
}
?>