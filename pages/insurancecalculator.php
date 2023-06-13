<?php
// Required per page code
session_start();
$steam_64id = $_SESSION['steam_64id'];

include('db_conn.php');
// Required per page code

$query = "SELECT datejoined FROM allPlayers WHERE ID = $steam_64id;";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$datejoined = $row['datejoined'];

/* SQL dateJoined
fines
FORM carPrice
noClaims
hours */
$noClaims = $_POST['noClaims'];
$carPrice = $_POST['carPrice'];
$sr = 250;
$averagesr = 300;
$hours = $_POST['hours']; // Add the value for the hours variable

if ($hours < 300) {
    $sr -= 25;
} elseif ($hours > 1000) {
    $sr += 30;
    if ($hours > 1500) {
        $sr += 10;
        if ($hours > 2000) {
            $sr += 10;
        }
    }
}

// Code to get today's date
$today = date("Y-m-d");
$time = strtotime($today) - strtotime($datejoined);
$timeInDays = floor($time / (60 * 60 * 24));

if ($timeInDays >= 7) {
    $sr += 75;
    if ($timeInDays >= 21) {
        $sr += 125;
    }
}

$fines = $_POST['fines']; // Add the value for the fines variable

$sr += $fines * 10;

if ($noClaims == 1) {
    if ($timeInDays > 21) {
        $noClaimDays = $timeInDays - 21;
        $sr += $noClaimDays * 3;
    }
}

if ($sr > 400) {
    $sr = 400;
} elseif ($sr < 50) {
    $sr = 50;
}

// Minimum insurance calculation
$priceLia = 0.15 * $carPrice * ($averagesr / $sr);
$priceTyp = 0.25 * $carPrice * ($averagesr / $sr);
$priceFull = 0.25 * $carPrice * 1.4 * ($averagesr / $sr);

// Maximum expected insurance calculation
$sr -= 75;
if ($sr > 400) {
    $sr = 400;
} elseif ($sr < 50) {
    $sr = 50;
}
$maxPriceLia = 0.15 * $carPrice * ($averagesr / $sr);
$maxPriceTyp = 0.25 * $carPrice * ($averagesr / $sr);
$maxPriceFull = 0.25 * $carPrice * 1.4 * ($averagesr / $sr);

echo "Full Insurance " . $maxPriceFull . "<br>";
echo "Liability Insurance " . $maxPriceLia . " <br>";
echo "Whatever Typ Insurance is " . $maxPriceTyp ;


?>
