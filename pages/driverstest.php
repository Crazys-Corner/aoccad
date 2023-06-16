<?php

session_start();
$steam64 = $_SESSION['steam_64id'];
include('db_conn.php');

// Get the user's answers
$answers = array(
  1 => 'Stop',
  2 => 'Drivers should maintain their current lane and not change lanes',
  3 => 'During adverse weather conditions or poor visibility',
  4 => 'Give the bicyclist plenty of room when passing and maintain a safe distance',
  5 => 'Stop and wait until all pedestrians have safely crossed',
  6 => 'Turn into the lane closest to your current lane'
);

// Grade the test
$score = 0;
foreach ($answers as $question => $answer) {
  if ($answer == $_POST['question'][$question]) {
    $score++;
  }
}

// Check if the user passed the test
if ($score >= 5) {
  // Unlock the driver license in the website
  $sql = "UPDATE registered_licenses SET drivers = 1 WHERE ID = $steam64";
  if ($conn->query($sql) === TRUE) {
    echo "Congratulations, you have passed the driving test! Your driver license has been unlocked.";
  } else {
    echo "Error: " . $conn->error;
  }
} else {
  echo "You have not passed the driving test. Please try again. ";
  echo($score);

}
