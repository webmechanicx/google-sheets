<?php
/**
 * Convert Rows into JSON Objects
 * In many cases, it's easier to manipulate each row as an independent object.
 * Let's transform each row into an associative array.
 */
require __DIR__ . '/config.php'; // Path to config.php

// Fetch the rows
$range    = 'Sheet1';
$response = $service->spreadsheets_values->get( $spreadsheetId, $range );
$rows     = $response->getValues();

// Remove the first one that contains headers
$headers = array_shift( $rows );

// Combine the headers with each following row
$array = [];

foreach ( $rows as $row ) {
    $array[] = array_combine( $headers, $row );
}

// output
//var_dump( $array );

// Convert it into a JSON string with a single line of code.
$jsonString = json_encode( $array, JSON_PRETTY_PRINT );

echo '<pre>';
print( $jsonString );
echo '</pre>';
