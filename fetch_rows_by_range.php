<?php
/**
 * Fetch a Few Rows by Using a Range
 * We read the ten first lines of our Google Sheets
 */
require __DIR__ . '/config.php'; // Path to config.php

// we define here the expected range, columns from A to F and lines from 1 to 10
$range    = 'Sheet1!A1:F10';
$response = $service->spreadsheets_values->get( $spreadsheetId, $range );
$values   = $response->getValues();
var_dump( $values );
