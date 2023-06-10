<?php 
require("db_conn.php");
session_start();

// Assuming the callback URL is something like: https://yourwebsite.com/auth/steam/callback
$steamResponse = $_GET;

// Check if the 'openid.claimed_id' key is present
if (isset($steamResponse['openid_claimed_id'])) {
    // Extract the Steam 64ID
    $steam64ID = str_replace("https://steamcommunity.com/openid/id/", "", $steamResponse['openid_claimed_id']);

    // Check if the Steam 64ID is set
    if (isset($steam64ID)) {
        $_SESSION['steam_64id'] = $steam64ID; // Save Steam 64ID as session variable
        
        $query = "SELECT * FROM CAD_ACCOUNTS WHERE steam_64id = '$steam64ID'";
        $result = mysqli_query($conn, $query);
        
        // Check if a row was returned
        if (mysqli_num_rows($result) > 0) {
            echo "Account exists";
            header("Location: dashboard.php");
            exit;
        } else {
            header("Location: sign-up.php");
            exit;
        }  
    } else {
        echo "steam64id not present...";
    }
} else {
    echo "openid_claimed_id not present...";
    var_dump($_GET);
}

?>
