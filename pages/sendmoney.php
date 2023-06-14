<?php
ob_start();
session_start();
$steam64 = $_SESSION['steam_64id'];
include('db_conn.php');

$moneyamount = $_POST['amount'];
$recipientPlayerID = $_POST['64id'];





// Retrieve the sender's current balance
$query = "SELECT CardBalance FROM BTBanking_Accounts WHERE playerID = '$steam64' AND CardType = 'Personal'";
$result = $conn->query($query);
$row = $result->fetch_assoc();
$senderBalance = $row['CardBalance'];

// Check if the recipient player exists in the database
$query = "SELECT CardID FROM BTBanking_Accounts WHERE playerID = '$recipientPlayerID' AND CardType = 'Personal' ";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    // Recipient player exists, proceed with the balance transfer
    
    // Retrieve the recipient's current balance
    $query = "SELECT CardBalance FROM BTBanking_Accounts WHERE playerID = '$recipientPlayerID' AND CardType = 'Personal'";
    $result = $conn->query($query);
    $row = $result->fetch_assoc();
    $recipientBalance = $row['CardBalance'];
    
    // Check if the sender has sufficient balance to send
    if ($senderBalance >= $moneyamount) {
        // Subtract the amount to be sent from the sender's balance
        $senderBalance -= $moneyamount;
        
        // Add the amount to be received to the recipient's balance
        $recipientBalance += $moneyamount;
        
        // Update the balances in the database
        $query = "UPDATE BTBanking_Accounts SET CardBalance = '$senderBalance' WHERE playerID = '$steam64' AND CardType = 'Personal' ";
        $conn->query($query);
        
        $query = "UPDATE BTBanking_Accounts SET CardBalance = '$recipientBalance' WHERE playerID = '$recipientPlayerID' AND CardType = 'Personal'";
        $conn->query($query);
        
        // Transfer successful
        echo "Money transferred successfully!";
    } else {
        // Insufficient balance in the sender's account
        echo "Insufficient balance to send money!";
    }
} else {
    // Recipient player does not exist
    echo "Recipient player not found!";
}

// Close the database connection
$conn->close();
?>
