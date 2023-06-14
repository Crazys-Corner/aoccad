<?php
ob_start();
require("db_conn.php");

// Assuming the callback URL is something like: https://yourwebsite.com/auth/steam/callback
$steamResponse = $_GET;

// Extract the Steam 64ID
$steam64ID = str_replace("https://steamcommunity.com/openid/id/", "", $steamResponse['openid_claimed_id']);

// Check if the Steam 64ID is set
if (isset($steam64ID)) {
    // Check if the Steam 64ID already exists in the database
    $query = "SELECT * FROM CAD_ACCOUNTS WHERE steam_64id = '$steam64ID'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        // Steam 64ID already registered
        echo "Account already exists";
        header("Location: sign-in.php");
        exit;
    } else {
        // Insert the Steam 64ID into the database
        $insertQuery = "INSERT INTO CAD_ACCOUNTS (steam_64id) VALUES ('$steam64ID')";
        $insertResult = mysqli_query($conn, $insertQuery);

        if ($insertResult) {
            // Successfully inserted, redirect to the sign-in page
            header("Location: sign-in.php");
            exit;
        } else {
            echo "Failed Signing In, please retry.";
        }
    }
} else {
    echo "Steam 64ID not present...";
}

?>
