<?php
require_once 'db_conn.php';

$steam64Id = $_POST['steam64id'];
$searchTerm = "%" . $steam64Id . "%";

$tablesQuery = execute_query("SHOW TABLES");
$tables = mysqli_fetch_all($tablesQuery, MYSQLI_ASSOC);

$results = array();

foreach ($tables as $table) {
    $tableName = $table['Tables_in_s4_unturned'];

    $columnsQuery = execute_query("SHOW COLUMNS FROM $tableName");
    $columns = mysqli_fetch_all($columnsQuery, MYSQLI_ASSOC);

    $tableResults = array();

    foreach ($columns as $column) {
        $columnName = $column['Field'];

        $searchQuery = execute_query("SELECT * FROM $tableName WHERE $columnName LIKE '$searchTerm'");
        $columnResults = mysqli_fetch_all($searchQuery, MYSQLI_ASSOC);

        if (!empty($columnResults)) {
            $tableResults[$columnName] = $columnResults;
        }
    }

    if (!empty($tableResults)) {
        $results[$tableName] = $tableResults;
    }
}

// Output the results
foreach ($results as $tableName => $columns) {
    echo "Table: $tableName<br>";

    foreach ($columns as $columnName => $rows) {
        echo "Column: $columnName<br>";

        foreach ($rows as $row) {
            echo "Data: " . implode(", ", $row) . "<br>";
        }

        echo "<br>";
    }

    echo "<br>";
}
?>
